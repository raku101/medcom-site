<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AuthController;
use App\Models\Service;
use App\Models\Page;

// ✅ الصفحة الرئيسية
Route::get('/', function () {
    $services = Service::latest()->take(6)->get();
    return view('home', compact('services'));
});

// ✅ الخدمات العامة
Route::get('/الخدمات', [ServiceController::class, 'publicIndex'])->name('services.index');

// ✅ صفحات ثابتة
Route::get('/partners', fn () => view('partners'));
Route::get('/سابقة-الاعمال', fn () => view('works'));
Route::get('/من-نحن', fn () => view('about'));
Route::get('/تواصل-معنا', fn () => view('contact'));
Route::get('/وظائف', fn () => view('jobs'));
Route::get('/الأسئلة-الشائعة', fn () => view('faq'))->name('faq');
Route::get('/الأخبار-والمقالات', fn () => view('news'))->name('news');
Route::get('/الخدمات-والمنتجات', fn () => view('services-products'));
Route::get('/المنتجات', fn () => view('products'));

// ✅ صفحات خدمات مخصصة
Route::get('/خدمات/كاميرات-المراقبة', fn () => view('services.cameras'));
Route::get('/خدمات/شبكات', fn () => view('services.network'));
Route::get('/خدمات/الأمن-السيبراني', fn () => view('services.cyber'));
Route::get('/الحلول-السحابية', fn () => view('cloud'));
Route::get('/إدارة-عقود-الصيانة', fn () => view('maintenance'));
Route::get('/حلول-الأنظمة-الصوتية', fn () => view('audio-solutions'));
Route::get('/حلول-البيوت-الذكية', fn () => view('smart-homes'));
Route::get('/حلول-الحوسبة-الافتراضية', fn () => view('virtualization'));
Route::get('/إدارة-المشروعات-التقنية', fn () => view('project-management'));
Route::get('/أعمال-الكهرباء', fn () => view('electrical-works'));
Route::view('/solutions/الشبكات', 'solutions.network')->name('solutions.network');
Route::view('/solutions/الحوسبة-الافتراضية', 'solutions.virtualization')->name('solutions.virtualization');
Route::view('/solutions/الأنظمة-الأمنية', 'solutions.security')->name('solutions.security');
Route::view('/solutions/إدارة-الدور', 'solutions.queue')->name('solutions.queue');
Route::view('/solutions/المباني-الذكية', 'solutions.smartbuilding')->name('solutions.smartbuilding');
Route::view('/solutions/الصوتيات', 'solutions.audio')->name('solutions.audio');
Route::view('/solutions/السلامة-المهنية', 'solutions.safety')->name('solutions.safety');
Route::view('/solutions/الربط-والتكامل', 'solutions.integration')->name('solutions.integration');
Route::view('/solutions/الكلاود', 'solutions.cloud')->name('solutions.cloud');
Route::view('/solutions/برامج-الحماية', 'solutions.securitysoftware')->name('solutions.securitysoftware');
Route::view('/solutions/التتبع-والأساطيل', 'solutions.tracking')->name('solutions.tracking');
Route::get('lang/{locale}', function ($locale) {
    if (!in_array($locale, ['ar', 'en'])) {
        abort(400);
    }
    session(['locale' => $locale]);
    return back();
})->name('lang.switch');

// صفحة عرض كل الحلول
Route::view('/الحلول', 'solutions')->name('solutions.index');

// ✅ تفاصيل الخدمات الديناميكية من الملفات
Route::get('/الخدمات/{slug}', function ($slug) {
    if (View::exists("services.$slug")) {
        return view("services.$slug");
    }
    abort(404);
});

// ✅ عرض المقالات
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

// ✅ مسارات الدخول والخروج الخاصة بالإدارة فقط
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// ✅ لوحة التحكم (محمية)
Route::prefix('admin')->middleware('auth')->group(function () {
    require base_path('routes/admin.php');
});
// ✅ تسجيل الخروج
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/admin/login');
})->name('logout');
Auth::routes();
Route::get('/home', function () {
    return view('admin.dashboard'); // أو أي صفحة تريدها بعد تسجيل الدخول
})->name('home');
use App\Http\Controllers\Site\ProductController;
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::delete('/admin/products/{product}/delete-image', [\App\Http\Controllers\Admin\ProductController::class, 'deleteImage'])->name('admin.products.deleteImage');



// ✅ صفحة ديناميكية حسب slug (توضع في النهاية دائمًا)
Route::get('/{slug}', function ($slug) {
    $page = Page::where('slug', $slug)->firstOrFail();
    return view('pages.dynamic', compact('page'));
});
