<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * عرض الخدمات في لوحة التحكم.
     */
    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('admin.services.index', compact('services'));
    }

    /**
     * عرض صفحة جميع الخدمات للزوار.
     */
    public function publicIndex()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    /**
     * عرض نموذج إنشاء خدمة.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * حفظ خدمة جديدة.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $service = new Service();
        $service->title = $request->title;
        $service->slug = Str::slug($request->title);
        $service->description = $request->description;
        $service->save();

        // إنشاء ملف Blade تلقائيًا
        $viewPath = resource_path("views/services/{$service->slug}.blade.php");

        if (!file_exists($viewPath)) {
            file_put_contents($viewPath, "@extends('layouts.app')\n\n@section('title', '{$service->title}')\n\n@section('content')\n<!-- محتوى الصفحة هنا -->\n@endsection");
        }

        return redirect()->route('admin.services.index')->with('success', 'تم إضافة الخدمة بنجاح');
    }

    /**
     * تعديل خدمة.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * تحديث خدمة.
     * يتم تحديث العنوان والوصف فقط دون المساس بـ slug.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $service->title = $request->title;
        $service->description = $request->description;

        $service->save();

        return redirect()->route('admin.services.index')->with('success', 'تم تحديث الخدمة بنجاح');
    }

    /**
     * حذف خدمة.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'تم حذف الخدمة بنجاح');
    }

    /**
     * تعديل ملف العرض الخاص بالخدمة.
     */
    public function editViewFile($slug)
    {
        $file = resource_path("views/services/{$slug}.blade.php");

        if (!file_exists($file)) {
            return back()->withErrors(['الملف غير موجود']);
        }

        $content = file_get_contents($file);

        return view('admin.services.edit-view', compact('slug', 'content'));
    }

    /**
     * حفظ التعديل على ملف العرض.
     */
    public function updateViewFile(Request $request, $slug)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $file = resource_path("views/services/{$slug}.blade.php");

        file_put_contents($file, $request->content);

        return redirect()->route('admin.services.index')->with('success', 'تم تعديل ملف الصفحة بنجاح');
    }
}
