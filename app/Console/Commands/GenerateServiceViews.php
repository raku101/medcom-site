<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use App\Models\Service;

class GenerateServiceViews extends Command
{
    protected $signature = 'services:generate-views';
    protected $description = 'إنشاء ملفات Blade تلقائيًا لكل خدمة لا تملك ملف عرض';

    public function handle()
    {
        $services = Service::all();
        $created = 0;
        $skipped = 0;

        foreach ($services as $service) {
            $slug = Str::slug($service->slug); // تأكد أن اسم الملف نظيف
            $viewPath = resource_path("views/services/{$slug}.blade.php");

            if (!file_exists($viewPath)) {
                file_put_contents($viewPath, "@extends('layouts.app')\n\n@section('title', '{$service->title}')\n\n@section('content')\n<!-- محتوى صفحة {$service->title} -->\n@endsection");
                $this->info("✔ تم إنشاء الملف: {$slug}.blade.php");
                $created++;
            } else {
                $this->warn("⏭ تم التخطي (موجود): {$slug}.blade.php");
                $skipped++;
            }
        }

        $this->newLine();
        $this->info("✅ عدد الملفات التي تم إنشاؤها: {$created}");
        $this->info("🔁 عدد الملفات التي تم تخطيها: {$skipped}");
    }
}
