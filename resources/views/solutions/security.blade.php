@extends('layouts.app')

@section('title', 'حلول الأنظمة الأمنية المتكاملة - Medcom')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
       
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">حلول أمنية متكاملة لحماية ممتلكاتك وأصولك</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                أحدث التقنيات الأمنية لضمان الحماية الشاملة
            </span>
        </p>
    </div>
</section>

<!-- Solutions Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">حلولنا الأمنية المتكاملة</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                نقدم مجموعة متكاملة من الحلول الأمنية المصممة لتوفير حماية شاملة لممتلكاتك
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Solution 1 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">أنظمة كاميرات المراقبة (CCTV)</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>كاميرات داخلية وخارجية (ثابتة – متحركة PTZ)</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>المراقبة عن بعد عبر الإنترنت أو التطبيقات الذكية</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تسجيل رقمي (DVR/NVR) وتخزين سحابي</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 2 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">أنظمة الإنذار ضد السرقة والاقتحام</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>حساسات الحركة والأبواب والنوافذ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>أنظمة إنذار صوتية وضوئية</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>الربط مع مركز المراقبة أو إشعارات فورية للمستخدم</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 3 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">أنظمة الإنذار ضد الحريق</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>كواشف دخان وحرارة ولهب</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>أجراس إنذار ولوحات تحكم مركزية</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>الربط مع أنظمة الإخلاء والإطفاء التلقائي</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 4 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">أنظمة التحكم في الدخول</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>أقفال إلكترونية وبصمة/كرت/رمز</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>بوابات أمنية (Turnstiles – Flap Gates)</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>التحكم المركزي وإعداد صلاحيات الدخول</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 5 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">أنظمة الحضور والانصراف</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>أجهزة تعمل بالبصمة، الوجه، البطاقة أو PIN</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تقارير زمنية وربط مع نظام الرواتب</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تكامل مع برامج الموارد البشرية</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 6 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">أنظمة الإنتركوم</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>إنتركوم صوتي ومرئي</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>الربط مع بوابات المباني أو المداخل</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>دعم التحدث عن بُعد عبر الهاتف أو التطبيق</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 7 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">أنظمة المراقبة المركزية والتحكم</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>شاشات جدارية (Video Wall)</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>برامج إدارة الكاميرات والتحكم بالأنظمة من مكان واحد</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>الربط مع البلاغات والطوارئ</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 8 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">أنظمة الكشف والتفتيش</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>أجهزة كشف المعادن</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>أجهزة تفتيش الحقائب بالأشعة السينية</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>بوابات أمنية في المداخل والمطارات</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 9 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">الأنظمة الذكية للمباني والمنازل</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>مراقبة متكاملة عبر الهاتف الذكي</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>أنظمة استشعار ذكية للحركة/الدخان/التسرب</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>ربط مع الأنظمة الصوتية والإضاءة والستائر</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 10 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">الدعم الفني والصيانة</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>عقود صيانة سنوية</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>زيارات دورية للفحص والتحديث</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>دعم فني عن بعد أو في الموقع</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-16 bg-white dark:bg-slate-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-[#1a5a72] mb-4">فوائد الأنظمة الأمنية المتكاملة</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                كيف يمكن لحلولنا الأمنية حماية ممتلكاتك وضمان سلامة العاملين والزوار
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">حماية شاملة</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        تغطية كافة الجوانب الأمنية من المراقبة إلى التحكم في الدخول والإنذار المبكر
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">رد فعل سريع</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        أنظمة إنذار فورية وربط مع مراكز الأمن للاستجابة السريعة للطوارئ
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">مراقبة عن بعد</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        إمكانية متابعة المنشآت من أي مكان عبر الهاتف أو الكمبيوتر
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">تقارير وتحليلات</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        بيانات دقيقة عن حركة الدخول والخروج وأوقات الحضور والانصراف
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">تكامل الأنظمة</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        عمل جميع الأنظمة معاً بشكل متكامل لتحقيق أقصى درجات الحماية
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">توفير التكاليف</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        تقليل الخسائر الناتجة عن السرقة أو التلفيات مع ضمان استمرارية العمل
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
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">لماذا تختار ميدكوم للحلول الأمنية؟</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                نتميز بتقديم حلول أمنية متكاملة بمعايير عالمية
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">أنظمة معتمدة</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    نستخدم أنظمة أمنية معتمدة عالمياً من كبرى الشركات المتخصصة
                </p>
            </div>

            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">تنفيذ سريع</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    تركيب وتشغيل الأنظمة في أسرع وقت ممكن دون تعطيل سير العمل
                </p>
            </div>

            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">دعم فني دائم</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    دعم فني على مدار الساعة مع ضمان وقت استجابة لا يتجاوز ساعتين
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-[#1a5a72] text-white text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-bold mb-6">جاهزون لتأمين منشآتك بأحدث الأنظمة الأمنية؟</h2>
        <p class="text-lg mb-8 max-w-2xl mx-auto opacity-90">
            تواصل مع خبرائنا اليوم لتصميم نظام أمني متكامل يناسب احتياجاتك
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="/اتصل-بنا" class="bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all">اطلب استشارة مجانية</a>
            <a href="tel:+966558008895" class="border border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white/10 transition-all">اتصل بنا: 00966558008895</a>
        </div>
    </div>
</section>
@endsection