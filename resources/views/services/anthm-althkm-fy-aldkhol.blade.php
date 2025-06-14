@extends('layouts.app')

@section('title', 'أنظمة التحكم في الدخول - Medcom')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
       
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">حلول متكاملة للتحكم في الدخول والأمن</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                أمان ذكي وسهولة تحكم في كل الدخول والخروج
            </span>
        </p>
    </div>
</section>

<!-- Services Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">حلول التحكم في الدخول لدينا</h2>
            <p class="text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                نقدم مجموعة متكاملة من أنظمة التحكم في الدخول التي تضمن الأمان مع توفير سهولة الاستخدام
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600">أجهزة التحكم في الأبواب المنزلية والفيلات</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    أنظمة متكاملة للتحكم في أبواب المنازل والفيلات تشمل أجهزة التعرف بالبصمة، البطاقات الذكية، وكلمات المرور الرقمية مع إمكانية التحكم عن بعد.
                </p>
            </div>

            <!-- Service 2 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600">بوابات دخول الأفراد</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    بوابات دوارة أو انزلاقية للتحكم في دخول الأفراد في الشركات والمجمعات السكنية مع أنظمة التعرف المتقدمة وإدارة الصلاحيات.
                </p>
            </div>

            <!-- Service 3 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600">بوابات تفتيش الحقائب والمعادن</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    بوابات أمنية متطورة لكشف المعادن وتفتيش الحقائب مع أنظمة تصوير متكاملة للاستخدام في المطارات والمنشآت الأمنية.
                </p>
            </div>

            <!-- Service 4 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600">أجهزة الأقفال الذكية</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    أقفال ذكية تعمل بتقنيات RFID، البلوتوث، أو WiFi مع إمكانية التحكم عن بعد عبر الهاتف الذكي وإدارة الصلاحيات الرقمية.
                </p>
            </div>

            <!-- Service 5 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600">حواجز مواقف السيارات</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    أنظمة متكاملة لإدارة مواقف السيارات تشمل حواجز آلية، أنظمة التعرف على لوحات السيارات، وإدارة الاشتراكات الشهرية.
                </p>
            </div>

            <!-- Service 6 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600">بوابات أمنية بكاميرات ذكاء اصطناعي</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    بوابات أمنية مزودة بكاميرات ذكية قادرة على التعرف على الوجوه، تحليل السلوك، وكشف الأشياء المحظورة باستخدام تقنيات الذكاء الاصطناعي.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Additional Features Section -->
<section class="py-16 bg-white dark:bg-slate-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-[#1a5a72] mb-4">ميزات إضافية لأنظمتنا</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                نقدم ميزات متقدمة تضمن أقصى درجات الأمان وسهولة الإدارة
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-600">أنظمة دخول باستخدام QR أو NFC</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        تقنيات دخول مبتكرة باستخدام رمز QR أو تقنية NFC عبر الهواتف الذكية لتحقيق أمان عالٍ وسهولة في الاستخدام.
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-600">تقارير دخول وخروج متزامنة</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        أنظمة متكاملة لتسجيل الحضور والانصراف مع إمكانية ربطها مباشرة بأنظمة الموارد البشرية وإدارة الرواتب.
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-600">تكامل مع أنظمة الإنذار والمراقبة</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        إمكانية التكامل الكامل مع أنظمة الإنذار والمراقبة لإنشاء نظام أمني متكامل يحمي منشآتك على مدار الساعة.
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-600">إدارة الصلاحيات المركزية</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        نظام مركزي لإدارة الصلاحيات يسمح بتحديد أوقات الدخول، المناطق المسموح بها، ومستويات الوصول لكل فرد.
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-600">تحكم عن بعد</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        إمكانية التحكم في أنظمة الدخول والخروج عن بعد عبر تطبيقات الهاتف أو لوحات التحكم الإلكترونية.
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-600">إنذارات فورية</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        نظام إنذار فوري عند محاولات الدخول غير المصرح بها أو أي نشاط مشبوه مع إمكانية ربطها بشركات الحراسات الأمنية.
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
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">لماذا تختار ميدكوم لأنظمة التحكم في الدخول؟</h2>
            <p class="text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                نتميز بتقديم حلول أمنية ذكية تحقق التوازن المثالي بين الأمان وسهولة الاستخدام
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-600">تقنيات متطورة</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    نستخدم أحدث تقنيات التحكم في الدخول من كبرى الشركات العالمية مع تحديثات مستمرة لضمان أعلى مستويات الأمان.
                </p>
            </div>

            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-600">حلول مخصصة</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    نقدم حلولاً مصممة خصيصاً لكل عميل حسب طبيعة المبنى، عدد المستخدمين، ومستوى الأمان المطلوب.
                </p>
            </div>

            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-600">تكامل سلس</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    أنظمتنا قابلة للتكامل بسهولة مع أنظمتك الحالية سواء أنظمة المراقبة، الإنذار، أو أنظمة إدارة الموارد البشرية.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-[#1a5a72] text-white text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-bold mb-6">جاهزون لترقية نظام التحكم في الدخول الخاص بك؟</h2>
        <p class="text-lg mb-8 max-w-2xl mx-auto opacity-90">
            تواصل مع خبرائنا اليوم للحصول على استشارة مجانية وتقييم احتياجاتك الأمنية
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="/اتصل-بنا" class="bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all">اطلب استشارة مجانية</a>
            <a href="tel:+966558008895" class="border border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white/10 transition-all">اتصل بنا: 00966558008895</a>
        </div>
    </div>
</section>
@endsection