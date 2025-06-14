@extends('layouts.app')

@section('title', 'عقود الصيانة السنوية - Medcom')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
       
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">حلول صيانة شاملة لضمان استمرارية عملك</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                راحة بالك مع عقود صيانة سنوية مخصصة
            </span>
        </p>
    </div>
</section>

<!-- Services Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">خدمات الصيانة الشاملة</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                نقدم باقات صيانة سنوية شاملة تغطي جميع احتياجاتك التقنية بأعلى معايير الجودة
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-800">صيانة الشاشات والأجهزة الإلكترونية</h3>
                <p class="text-gray-600 dark:text-gray-600">
                    صيانة دورية لجميع أنواع الشاشات والأجهزة الإلكترونية تشمل التنظيف، الفحص الفني، استبدال القطع التالفة، ومعايرة الألوان.
                </p>
            </div>

            <!-- Service 2 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-800">صيانة الأنظمة التقنية</h3>
                <p class="text-gray-600 dark:text-gray-600">
                    صيانة شاملة لأنظمة الشبكات، أنظمة المراقبة، أنظمة الاتصالات، وأنظمة التحكم مع فحص جميع المكونات والوصلات.
                </p>
            </div>

            <!-- Service 3 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-800">صيانة أنظمة الطاقة الشمسية</h3>
                <p class="text-gray-600 dark:text-gray-600">
                    خدمات صيانة متخصصة لأنظمة الطاقة الشمسية تشمل تنظيف الألواح، فحص الأنفرترات، اختبار الكفاءة، وصيانة أنظمة التخزين.
                </p>
            </div>

            <!-- Service 4 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-800">صيانة البرمجيات والتحديثات</h3>
                <p class="text-gray-600 dark:text-gray-600">
                    تحديثات دورية للبرمجيات، ترقيع الثغرات الأمنية، تحسين الأداء، وصيانة قواعد البيانات لضمان التشغيل الأمثل.
                </p>
            </div>

            <!-- Service 5 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-800">عقود صيانة مرنة</h3>
                <p class="text-gray-600 dark:text-gray-600">
                    تصميم عقود صيانة مخصصة حسب احتياجاتك مع خيارات متعددة تشمل الصيانة الوقائية، الطارئة، والدورية بخطط زمنية مرنة.
                </p>
            </div>

            <!-- Service 6 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-800">دعم فني على مدار الساعة</h3>
                <p class="text-gray-600 dark:text-gray-600">
                    خدمة دعم فني متاحة 24/7 عبر الهاتف، البريد الإلكتروني، أو الدعم عن بعد مع وقت استجابة لا يتجاوز ساعتين للأعطال الحرجة.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Additional Features Section -->
<section class="py-16 bg-white dark:bg-slate-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-[#1a5a72] mb-4">مميزات عقود الصيانة السنوية</h2>
            <p class="text-gray-600 dark:text-gray-600 max-w-3xl mx-auto">
                نقدم ميزات استثنائية تضمن لك الحصول على أفضل خدمة صيانة بأعلى معايير الجودة
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="flex items-start">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mt-1 mr-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-800">تحديثات دورية</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        تحديثات شهرية للأنظمة والبرمجيات تشمل ترقيع الثغرات، تحسينات الأداء، وإضافة ميزات جديدة.
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mt-1 mr-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-800">تقارير شهرية</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        تقارير مفصلة عن حالة الأجهزة، أعمال الصيانة المنجزة، والمشاكل المحتملة مع حلول مقترحة.
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mt-1 mr-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-800">زيارات دورية</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        زيارات ميدانية شهرية أو ربع سنوية حسب العقد لفحص الأجهزة وإجراء الصيانة الوقائية.
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mt-1 mr-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-800">قطع غيار أصلية</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        استخدام قطع غيار أصلية مع ضمان على القطع المستبدلة لمدة تصل إلى سنة حسب نوع القطعة.
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mt-1 mr-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-800">تدريب المستخدمين</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        جلسات تدريبية للموظفين على الاستخدام الأمثل للأجهزة والأنظمة وتجنب الأعطال الشائعة.
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mt-1 mr-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-800">خطط طوارئ</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        إعداد خطط طوارئ للتعامل مع الأعطال المفاجئة وتقليل وقت التوقف عن العمل.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">لماذا تختار ميدكوم لعقود الصيانة؟</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                نتميز بتقديم خدمات صيانة استباقية تحافظ على أجهزتك تعمل بكفاءة دائمة
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-800">وقت استجابة سريع</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    وقت استجابة لا يتجاوز 4 ساعات للأعطال العاجلة و24 ساعة للأعطال العادية في جميع مناطق المملكة.
                </p>
            </div>

            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-800">فنيون معتمدون</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    فريق فني معتمد من كبرى الشركات العالمية مع خبرة تزيد عن 10 سنوات في صيانة الأنظمة التقنية.
                </p>
            </div>

            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-800">توفير في التكاليف</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    عقود صيانة سنوية توفر لك حتى 40% من تكاليف الصيانة الطارئة مع ضمان استقرار عملياتك.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Plans Section -->
<section class="py-16 bg-white dark:bg-slate-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-[#1a5a72] mb-4">باقات الصيانة السنوية</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                اختر الباقة التي تناسب احتياجاتك أو اطلب عقداً مخصصاً حسب متطلباتك
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <!-- Basic Plan -->
            <div class="bg-gray-50 dark:bg-slate-700 p-6 rounded-xl shadow-lg border border-[#1a5a72]/30 dark:border-[#60cdf2]/30">
                <h3 class="font-bold text-xl mb-4 text-[#1a5a72] dark:text-[#60cdf2] text-center">الباقة الأساسية</h3>
                <div class="text-3xl font-bold mb-6 text-center">سنة 5,000 ر.س</div>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>صيانة وقائية ربع سنوية</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>دعم فني عن بعد 24/7</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>تحديثات برمجية شهرية</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>تقارير حالة شهرية</span>
                    </li>
                </ul>
                <div class="mt-8 text-center">
                    <a href="/اتصل-بنا" class="inline-block bg-[#1a5a72] text-white font-bold py-2 px-6 rounded-full hover:bg-[#1a6d8a] transition-all">اختر هذه الباقة</a>
                </div>
            </div>

            <!-- Premium Plan -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg border-2 border-[#1a5a72] dark:border-[#60cdf2] transform scale-105 z-10">
                <div class="text-center mb-2">
                    <span class="bg-[#1a5a72] text-white text-xs font-bold px-3 py-1 rounded-full">الأكثر طلباً</span>
                </div>
                <h3 class="font-bold text-xl mb-4 text-[#1a5a72] dark:text-[#60cdf2] text-center">الباقة المتميزة</h3>
                <div class="text-3xl font-bold mb-6 text-center">سنة 8,000 ر.س</div>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>صيانة وقائية شهرية</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>دعم فني عن بعد 24/7</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>زيارات طارئة (حتى 4 زيارات سنوياً)</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>خصم 15% على قطع الغيار</span>
                    </li>
                </ul>
                <div class="mt-8 text-center">
                    <a href="/اتصل-بنا" class="inline-block bg-[#1a5a72] text-white font-bold py-2 px-6 rounded-full hover:bg-[#1a6d8a] transition-all">اختر هذه الباقة</a>
                </div>
            </div>

            <!-- Enterprise Plan -->
            <div class="bg-gray-50 dark:bg-slate-700 p-6 rounded-xl shadow-lg border border-[#1a5a72]/30 dark:border-[#60cdf2]/30">
                <h3 class="font-bold text-xl mb-4 text-[#1a5a72] dark:text-[#60cdf2] text-center">باقة المؤسسات</h3>
                <div class="text-3xl font-bold mb-6 text-center">سنة 12,000 ر.س</div>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>صيانة وقائية أسبوعية</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>دعم فني فوري 24/7</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>زيارات طارئة غير محدودة</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>خصم 25% على قطع الغيار</span>
                    </li>
                </ul>
                <div class="mt-8 text-center">
                    <a href="/اتصل-بنا" class="inline-block bg-[#1a5a72] text-white font-bold py-2 px-6 rounded-full hover:bg-[#1a6d8a] transition-all">اختر هذه الباقة</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-[#1a5a72] text-white text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-bold mb-6">جاهزون لحماية استثماراتك التقنية؟</h2>
        <p class="text-lg mb-8 max-w-2xl mx-auto opacity-90">
            تواصل مع خبرائنا اليوم لتصميم عقد صيانة سنوي مخصص يحمي أجهزتك ويضمن استمرارية عملك
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="/اتصل-بنا" class="bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all">اطلب استشارة مجانية</a>
            <a href="tel:+966558008895" class="border border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white/10 transition-all">اتصل بنا: 00966558008895</a>
        </div>
    </div>
</section>
@endsection