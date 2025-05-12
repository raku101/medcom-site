<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/partners', function () {
    return view('partners');
});
Route::get('/سابقة-الاعمال', function () {
    return view('works');
});
Route::get('/من-نحن', function () {
    return view('about');
});
Route::get('/تواصل-معنا', function () {
    return view('contact');
});
Route::get('/خدمات/كاميرات-المراقبة', function () {
    return view('services.cameras');
});
Route::get('/خدمات/شبكات', function () {
    return view('services.network');
});
Route::get('خدمات/الأمن-السيبراني', function () {
    return view('services.cyber');
});
Route::get('/الحلول-السحابية', function () {
    return view('cloud');
});
Route::get('/إدارة-عقود-الصيانة', function () {
    return view('maintenance');
});
Route::get('/حلول-الأنظمة-الصوتية', function () {
    return view('audio-solutions');
});
Route::get('/حلول-البيوت-الذكية', function () {
    return view('smart-homes');
});
Route::get('/وظائف', function () {
    return view('jobs');
});
Route::get('/حلول-الحوسبة-الافتراضية', function () {
    return view('virtualization');
});
Route::get('/الخدمات-والمنتجات', function () {
    return view('services-products');
});
Route::get('/إدارة-المشروعات-التقنية', function () {
    return view('project-management');
});
Route::get('/أعمال-الكهرباء', function () {
    return view('electrical-works');
});
use App\Models\Page;


Route::get('{slug}', function ($slug) {
    $page = Page::where('slug', $slug)->firstOrFail();
    return view('pages.dynamic', compact('page'));
});
