@extends('layouts.app')

@section('title', 'حلول التتبع وإدارة الأساطيل - Medcom')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">حلول متكاملة لتتبع وإدارة أساطيل المركبات</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                تحكم كامل في أسطولك وزيادة الكفاءة التشغيلية
            </span>
        </p>
    </div>
</section>

<!-- Solutions Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">حلولنا لإدارة الأساطيل</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                أنظمة متكاملة توفر رؤية شاملة وتحكم دقيق في أسطول مركباتك
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Solution 1 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 "> التتبع اللحظي</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تتبع المركبات لحظيًا عبر GPS</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>خرائط تفاعلية دقيقة</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>سجل كامل لمسارات المركبات</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>عرض الموقع الحالي للسائقين</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 2 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 "> التقارير الذكية</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تقارير تفصيلية عن الرحلات</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تحليل استهلاك الوقود</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تقرير التوقفات وأوقات الخمول</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تصدير التقارير بجميع الصيغ</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 3 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 "> التنبيهات الذكية</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تنبيهات تجاوز السرعة المحددة</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تنبيهات الدخول أو الخروج من مناطق محددة</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تنبيهات التشغيل غير المصرح به</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>إشعارات فورية عبر البريد أو الجوال</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 4 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 "> الإدارة الذكية</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>إدارة وصيانة الأسطول الذكية</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>جدولة الصيانة الدورية</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تتبع تكاليف التشغيل والصيانة</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>إدارة السائقين والتصاريح</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-white dark:bg-slate-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-[#1a5a72] mb-4">مميزات نظام التتبع لدينا</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                كيف يمكن لنظامنا تحسين إدارة أسطولك وزيادة كفاءته
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-50 dark:bg-slate-700 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">توفير في التكاليف</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    خفض مصروفات الوقود والصيانة بنسبة تصل إلى 25%
                </p>
            </div>

            <div class="bg-gray-50 dark:bg-slate-700 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">تحسين السلامة</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    تقليل الحوادث بنسبة تصل إلى 30% مع المراقبة المستمرة
                </p>
            </div>

            <div class="bg-gray-50 dark:bg-slate-700 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">زيادة الإنتاجية</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    تحسين استخدام المركبات وزيادة كفاءة السائقين
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Dashboard Preview Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">لوحة التحكم المركزية</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                إدارة كاملة لأسطولك من خلال واجهة سهلة الاستخدام
            </p>
        </div>

        <div class="bg-white dark:bg-slate-800 rounded-xl shadow-xl overflow-hidden">
            <div class="p-4 bg-gray-100 dark:bg-slate-700 flex items-center">
                <div class="flex space-x-2">
                    <div class="w-3 h-3 rounded-full bg-red-500"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                </div>
                <div class="text-center flex-grow text-sm font-medium text-gray-500 dark:text-gray-300">
                    لوحة تحكم نظام تتبع الأساطيل
                </div>
            </div>
            <div class="p-1">
                <img src="{{ asset('images/fleet-dashboard-preview.jpg') }}" alt="معاينة لوحة تحكم نظام التتبع" class="w-full h-auto rounded-b-lg">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg">
                <h3 class="font-bold text-xl mb-4 text-[#1a5a72] dark:text-[#60cdf2]">ميزات متقدمة</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-3">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>واجهة مستخدم سهلة ومتعددة اللغات</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تطبيقات جوال لإدارة الأسطول</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تكامل مع أنظمة إدارة الموارد البشرية</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>دعم فني على مدار الساعة</span>
                    </li>
                </ul>
            </div>

            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg">
                <h3 class="font-bold text-xl mb-4 text-[#1a5a72] dark:text-[#60cdf2]">التركيب والتشغيل</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-3">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تركيب أجهزة التتبع باحترافية</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تدريب كامل للمشرفين والمستخدمين</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>ضمان على الأجهزة والبرمجيات</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تحديثات دورية للنظام</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-16 bg-white dark:bg-slate-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-[#1a5a72] mb-4">لماذا تختار ميدكوم لأنظمة التتبع؟</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                نقدم حلولاً متكاملة تجمع بين الدقة والسهولة والموثوقية
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="flex items-start">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mt-1 mr-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">دقة عالية</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        أجهزة تتبع بدقة عالية تعمل في جميع الظروف
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">حلول مخصصة</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        نقدم حلولاً مصممة خصيصاً لاحتياجات عملك
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">دعم فني متكامل</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        دعم فني على مدار الساعة لضمان عمل النظام
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-[#1a5a72] text-white text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-bold mb-6">جاهزون لتحسين إدارة أسطول مركباتك؟</h2>
        <p class="text-lg mb-8 max-w-2xl mx-auto opacity-90">
            تواصل مع خبرائنا اليوم لتركيب نظام التتبع الأمثل لاحتياجاتك
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="/اتصل-بنا" class="bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all">اطلب استشارة مجانية</a>
            <a href="tel:+966558008895" class="border border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white/10 transition-all">اتصل بنا: 00966558008895</a>
        </div>
    </div>
</section>
@endsection