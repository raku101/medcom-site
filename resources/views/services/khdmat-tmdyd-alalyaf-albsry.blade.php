@extends('layouts.app')

@section('title', 'خدمات تمديد الألياف الضوئية - Medcom')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">حلول متكاملة لشبكات الألياف الضوئية</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                بنية تحتية فائقة السرعة بتقنيات متطورة
            </span>
        </p>
    </div>
</section>

<!-- Services Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">خدمات الألياف الضوئية المتكاملة</h2>
            <p class="text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                نقدم حلولاً شاملة لتصميم وتركيب وصيانة شبكات الألياف الضوئية بأعلى معايير الجودة
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l9 5 9-5M3 17l9 5 9-5M3 12l9 5 9-5" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-700">تمديد كابلات الفايبر</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    تنفيذ البنية التحتية لشبكات الألياف البصرية داخل وخارج المباني باستخدام مواسير PVC، HDPE، أو أنابيب تحت أرضية.
                </p>
                <ul class="mt-4 space-y-2 text-sm text-gray-600 dark:text-gray-400">
                    <li class="flex items-start">
                        <svg class="w-4 h-4 mt-0.5 mr-2 text-[#1a5a72] dark:text-[#60cdf2]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>تمديد Single-mode / Multi-mode</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 mt-0.5 mr-2 text-[#1a5a72] dark:text-[#60cdf2]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>تركيب تحت الأرض أو عبر الأسقف</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 mt-0.5 mr-2 text-[#1a5a72] dark:text-[#60cdf2]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>التنظيم داخل غرف الاتصالات</span>
                    </li>
                </ul>
            </div>

            <!-- Service 2 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18M9 9l6 6" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-700">لحام الفايبر</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    لحام باستخدام أجهزة Fusion Splicer عالية الدقة مع تقليل الفقد (Loss) إلى أقل من 0.1 dB.
                </p>
                <ul class="mt-4 space-y-2 text-sm text-gray-600 dark:text-gray-400">
                    <li class="flex items-start">
                        <svg class="w-4 h-4 mt-0.5 mr-2 text-[#1a5a72] dark:text-[#60cdf2]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>لحام مباشر أو عبر ODF</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 mt-0.5 mr-2 text-[#1a5a72] dark:text-[#60cdf2]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>أجهزة لحام متطورة</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 mt-0.5 mr-2 text-[#1a5a72] dark:text-[#60cdf2]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>توثيق نقاط اللحام</span>
                    </li>
                </ul>
            </div>

            <!-- Service 3 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6M12 9v6M5 12a7 7 0 0014 0 7 7 0 00-14 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-700">اختبارات وقياسات فنية</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    اختبار OTDR لتحليل جودة اللحام وطول الكابل مع إصدار تقارير دقيقة لكل خط فايبر.
                </p>
                <ul class="mt-4 space-y-2 text-sm text-gray-600 dark:text-gray-400">
                    <li class="flex items-start">
                        <svg class="w-4 h-4 mt-0.5 mr-2 text-[#1a5a72] dark:text-[#60cdf2]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>فحص الإشارة (Power Meter)</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 mt-0.5 mr-2 text-[#1a5a72] dark:text-[#60cdf2]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>تحليل جودة اللحام</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 mt-0.5 mr-2 text-[#1a5a72] dark:text-[#60cdf2]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>تأكيد الجاهزية للعمل</span>
                    </li>
                </ul>
            </div>

            <!-- Service 4 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-700">تجهيز نقاط النهاية</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    تركيب ODF في غرف السيرفرات ونقاط التجميع مع تنظيم الكابلات داخل الراك وتسمية الأطراف.
                </p>
                <ul class="mt-4 space-y-2 text-sm text-gray-600 dark:text-gray-400">
                    <li class="flex items-start">
                        <svg class="w-4 h-4 mt-0.5 mr-2 text-[#1a5a72] dark:text-[#60cdf2]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>تركيب بوكسات توزيع</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 mt-0.5 mr-2 text-[#1a5a72] dark:text-[#60cdf2]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>نقاط التجميع الداخلية</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 mt-0.5 mr-2 text-[#1a5a72] dark:text-[#60cdf2]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>تنظيم وتسمية الكابلات</span>
                    </li>
                </ul>
            </div>

            <!-- Service 5 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h6v6H4z M14 14h6v6h-6z M14 4h6v6h-6z M4 14h6v6H4z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-700">صيانة الفايبر</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    تتبع الانقطاع أو التدهور في الإشارة مع إصلاح نقاط القطع أو اللحام الرديء.
                </p>
                <ul class="mt-4 space-y-2 text-sm text-gray-600 dark:text-gray-400">
                    <li class="flex items-start">
                        <svg class="w-4 h-4 mt-0.5 mr-2 text-[#1a5a72] dark:text-[#60cdf2]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>تتبع الأعطال والانقطاعات</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 mt-0.5 mr-2 text-[#1a5a72] dark:text-[#60cdf2]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>إصلاح القطع واللحام</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 mt-0.5 mr-2 text-[#1a5a72] dark:text-[#60cdf2]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>صيانة وقائية دورية</span>
                    </li>
                </ul>
            </div>

            <!-- Service 6 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l9 5 9-5M3 17l9 5 9-5M3 12l9 5 9-5" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-700">توريد وتركيب المعدات</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    توفير كابلات فايبر، ODF، بكسات، باتش كوردات، وأجهزة لحام واختبار.
                </p>
                <ul class="mt-4 space-y-2 text-sm text-gray-600 dark:text-gray-400">
                    <li class="flex items-start">
                        <svg class="w-4 h-4 mt-0.5 mr-2 text-[#1a5a72] dark:text-[#60cdf2]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>كابلات ومعدات فايبر</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 mt-0.5 mr-2 text-[#1a5a72] dark:text-[#60cdf2]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>أجهزة Fusion Splicer</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 mt-0.5 mr-2 text-[#1a5a72] dark:text-[#60cdf2]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>مستهلكات ومعدات فنية</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Target Sectors Section -->
<section class="py-16 bg-white dark:bg-slate-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-[#1a5a72] mb-4">القطاعات المستهدفة</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                نقدم خدماتنا لمجموعة واسعة من القطاعات التي تحتاج إلى بنية تحتية قوية للألياف الضوئية
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-gray-50 dark:bg-slate-700 p-6 rounded-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-3 mx-auto w-14 h-14 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg text-gray-800 dark:text-white">الشركات والمؤسسات الكبرى</h3>
            </div>

            <div class="bg-gray-50 dark:bg-slate-700 p-6 rounded-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-3 mx-auto w-14 h-14 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg text-gray-800 dark:text-white">مراكز البيانات ومزودو الإنترنت</h3>
            </div>

            <div class="bg-gray-50 dark:bg-slate-700 p-6 rounded-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-3 mx-auto w-14 h-14 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg text-gray-800 dark:text-white">المباني الذكية والجامعات</h3>
            </div>

            <div class="bg-gray-50 dark:bg-slate-700 p-6 rounded-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-3 mx-auto w-14 h-14 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg text-gray-800 dark:text-white">المجمعات التجارية والأبراج السكنية</h3>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">لماذا تختار ميدكوم لشبكات الألياف الضوئية؟</h2>
            <p class="text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                نتميز بتقديم حلول متكاملة تجمع بين الجودة العالية والتقنيات المتطورة
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-600">سرعة فائقة</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    نضمن لك بنية تحتية تدعم سرعات نقل بيانات عالية تصل إلى 100Gbps وأكثر.
                </p>
            </div>

            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-text-gray-600">جودة عالية</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    استخدام أفضل المواد وأحدث الأجهزة مع معايير تركيب وصيانة دقيقة.
                </p>
            </div>

            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-text-gray-600">دعم فني متكامل</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    فريق دعم فني متخصص متاح على مدار الساعة لضمان استمرارية عملك.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-[#1a5a72] text-white text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-bold mb-6">جاهزون لترقية بنيتك التحتية للألياف الضوئية؟</h2>
        <p class="text-lg mb-8 max-w-2xl mx-auto opacity-90">
            تواصل مع خبرائنا اليوم للحصول على استشارة مجانية وتقييم احتياجاتك
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="/اتصل-بنا" class="bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all">اطلب استشارة مجانية</a>
            <a href="tel:+966558008895" class="border border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white/10 transition-all">اتصل بنا: 00966558008895</a>
        </div>
    </div>
</section>
@endsection