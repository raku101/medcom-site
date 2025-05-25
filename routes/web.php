<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ServiceController;
use App\Models\Service;
use App\Models\Page;

// ✅ صفحة الخدمات العامة (البطاقات)
Route::get('/الخدمات', [ServiceController::class, 'publicIndex'])->name('services.index');


// ✅ صفحات الموقع الأخرى


Route::get('/', function () {
    $services = Service::latest()->take(6)->get();
    return view('home', compact('services'));
});

Route::get('/partners', fn () => view('partners'));
Route::get('/سابقة-الاعمال', fn () => view('works'));
Route::get('/من-نحن', fn () => view('about'));
Route::get('/تواصل-معنا', fn () => view('contact'));
Route::get('/خدمات/كاميرات-المراقبة', fn () => view('services.cameras'));
Route::get('/خدمات/شبكات', fn () => view('services.network'));
Route::get('خدمات/الأمن-السيبراني', fn () => view('services.cyber'));
Route::get('/الحلول-السحابية', fn () => view('cloud'));
Route::get('/إدارة-عقود-الصيانة', fn () => view('maintenance'));
Route::get('/حلول-الأنظمة-الصوتية', fn () => view('audio-solutions'));
Route::get('/حلول-البيوت-الذكية', fn () => view('smart-homes'));
Route::get('/وظائف', fn () => view('jobs'));
Route::get('/حلول-الحوسبة-الافتراضية', fn () => view('virtualization'));
Route::get('/الخدمات-والمنتجات', fn () => view('services-products'));
Route::get('/إدارة-المشروعات-التقنية', fn () => view('project-management'));
Route::get('/أعمال-الكهرباء', fn () => view('electrical-works'));
Route::get('/المنتجات', fn () => view('products'));

// ✅ صفحات ثابتة
Route::view('/الأسئلة-الشائعة', 'faq')->name('faq');
Route::view('/الأخبار-والمقالات', 'news')->name('news');

// ✅ صفحات المحتوى الديناميكي
Route::get('/{slug}', function ($slug) {
    $page = Page::where('slug', $slug)->firstOrFail();
    return view('pages.dynamic', compact('page'));
});

// ✅ عرض مقالات
Route::get('/articles/{slug}', fn ($slug) => view('articles.' . $slug))->name('article.show');

// ✅ البحث
Route::get('/search', function (Request $request) {
    $query = $request->get('q');
    $results = Service::where('title', 'like', "%{$query}%")->pluck('title');
    return response()->json($results);
});

Route::get('/api/search', function () {
    $q = request('q');
    return Service::where('title', 'like', '%' . $q . '%')->select('title', 'slug')->get();
});

// ✅ صفحة تفاصيل الخدمة
Route::get('/الخدمات/{slug}', function ($slug) {
    if (View::exists("services.$slug")) {
        return view("services.$slug");
    }
    abort(404);
});

// ✅ لوحة التحكم
Route::prefix('admin')->middleware('web')->group(function () {
    require base_path('routes/admin.php');
});

// ✅ تسجيل الخروج
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
})->name('logout');
