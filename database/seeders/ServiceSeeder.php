<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            'كاميرات المراقبة',
            'أنظمة الحضور والانصراف',
            'أنظمة الكاشير',
            'أنظمة الإنذار والسلامة',
            'أنظمة المنازل الذكية',
            'الأنظمة الصوتية والبصرية',
            'أجهزة التتبع والمراقبة',
            'عقود الصيانة السنوية',
            'أنظمة التحكم في الدخول',
            'أنظمة الدش المركزي',
            'الشبكات والبنية التحتية',
            'حلول الذكاء الاصطناعي والتحليلات',
            'حلول البرمجيات والتطبيقات',
            'أنظمة الطاقة البديلة',
            'أنظمة الأمن والسلامة المهنية',
            'الحوسبة السحابية والتخزين السحابي',
            'خدمات أنظمة ويندوز',
            'خدمات تمديد الألياف البصرية',
        ];

        foreach ($services as $title) {
            Service::create([
                'title' => $title,
                'slug' => Str::slug($title, '-'),
            ]);
        }
    }
}
