@extends('layouts.app')

@section('title', 'حلول الشبكات - Medcom')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">حلول شبكات متكاملة لمؤسسات أكثر كفاءة وأماناً</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                بنية تحتية شبكية مصممة خصيصاً لاحتياجات عملك
            </span>
        </p>
    </div>
</section>

<!-- Services Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">خدمات حلول الشبكات المتكاملة</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                نقدم مجموعة متكاملة من الحلول الشبكية المصممة لتحقيق أعلى مستويات الأداء والأمان والموثوقية
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
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">تصميم وتنفيذ الشبكات</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    تصميم الشبكات السلكية (LAN) واللاسلكية (Wi-Fi) مع إعداد البنية التحتية للكابلات واختيار الأجهزة المناسبة مثل السويتشات والروترات ونقاط الوصول.
                </p>
            </div>

            <!-- Service 2 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">تهيئة الأجهزة الشبكية</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    ضبط إعدادات الشبكات الداخلية، تكوين VLANs لتقسيم الشبكة، إعداد الجدران النارية (Firewall)، وإدارة جودة الخدمة (QoS).
                </p>
            </div>

            <!-- Service 3 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">الأمن الشبكي</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    حماية البيانات عبر الشبكة باستخدام تشفير VPN، أنظمة كشف التسلل (IDS) ومنع التسلل (IPS)، والتحكم في الوصول إلى الشبكة (NAC).
                </p>
            </div>

            <!-- Service 4 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">المراقبة والإدارة</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    أنظمة مراقبة الشبكة (NMS)، تحليل حركة المرور (Traffic Analysis)، وإدارة الأعطال والأداء لضمان التشغيل الأمثل.
                </p>
            </div>

            <!-- Service 5 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">الربط بين الفروع</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    ربط الفروع عن طريق VPN أو MPLS مع حلول SD-WAN المتقدمة لتقليل التكاليف وتحسين الأداء.
                </p>
            </div>

            <!-- Service 6 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">الصيانة والدعم الفني</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    عقود صيانة دورية، استجابة سريعة للأعطال، وتحديثات مستمرة للأنظمة لضمان استمرارية العمل.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Solutions Benefits Section -->
<section class="py-16 bg-white dark:bg-slate-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-[#1a5a72] mb-4">مميزات حلول الشبكات لدينا</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                نقدم ميزات استثنائية تضمن لك شبكة عالية الأداء، آمنة، وقابلة للتوسع
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">تصميم مخصص</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        تصميم شبكات مخصص حسب احتياجات عملك مع مراعاة التوسع المستقبلي.
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">أمان متكامل</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        طبقات متعددة من الحماية ضد التهديدات الإلكترونية والاختراقات.
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">أداء عالي</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        شبكات عالية السرعة مع إدارة ذكية لحركة المرور وجودة الخدمة.
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">مراقبة مستمرة</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        أنظمة مراقبة متقدمة للكشف عن المشاكل قبل حدوثها.
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">دعم فني متخصص</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        فريق دعم فني متاح على مدار الساعة لحل أي مشكلات طارئة.
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">حلول مرنة</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        حلول قابلة للتطوير والتعديل حسب تغير احتياجات عملك.
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
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">لماذا تختار ميدكوم لحلول الشبكات؟</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                خبرة واسعة في تصميم وتنفيذ حلول شبكات متكاملة لمختلف القطاعات
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">خبراء معتمدون</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    فريق من المهندسين المعتمدين من كبرى الشركات العالمية مثل Cisco, Juniper, Fortinet.
                </p>
            </div>

            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">أداء ممتاز</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    حلول شبكية توفر أعلى معدلات الأداء مع أقل وقت توقف ممكن.
                </p>
            </div>

            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">حماية شاملة</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    أنظمة أمنية متطورة تحمي شبكتك من أحدث التهديدات الإلكترونية.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Case Studies Section -->
<section class="py-16 bg-white dark:bg-slate-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-[#1a5a72] mb-4">دراسات حالة</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                بعض المشاريع الناجحة التي قمنا بتنفيذها لعملائنا في مختلف القطاعات
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Case 1 -->
            <div class="bg-gray-50 dark:bg-slate-700 rounded-xl overflow-hidden shadow-lg">
                <img src="{{ asset('images/network-case1.jpg') }}" alt="شبكة مستشفى" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2 text-[#1a5a72] dark:text-[#60cdf2]">شبكة مستشفى خاص</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        تصميم وتنفيذ شبكة سلكية ولاسلكية آمنة مع VLANs منفصلة لأقسام المستشفى وربط الفروع.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 text-[#1a5a72] dark:text-[#60cdf2] text-xs px-3 py-1 rounded-full">شبكات LAN</span>
                        <span class="bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 text-[#1a5a72] dark:text-[#60cdf2] text-xs px-3 py-1 rounded-full">أمان شبكي</span>
                        <span class="bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 text-[#1a5a72] dark:text-[#60cdf2] text-xs px-3 py-1 rounded-full">ربط الفروع</span>
                    </div>
                </div>
            </div>

            <!-- Case 2 -->
            <div class="bg-gray-50 dark:bg-slate-700 rounded-xl overflow-hidden shadow-lg">
                <img src="{{ asset('images/network-case2.jpg') }}" alt="شبكة جامعة" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2 text-[#1a5a72] dark:text-[#60cdf2]">شبكة جامعة</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        بنية تحتية شبكية متكاملة لحرم جامعي مع شبكة لاسلكية عالية الأداء تغطي جميع المناطق.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 text-[#1a5a72] dark:text-[#60cdf2] text-xs px-3 py-1 rounded-full">Wi-Fi</span>
                        <span class="bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 text-[#1a5a72] dark:text-[#60cdf2] text-xs px-3 py-1 rounded-full">QoS</span>
                        <span class="bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 text-[#1a5a72] dark:text-[#60cdf2] text-xs px-3 py-1 rounded-full">كابلات</span>
                    </div>
                </div>
            </div>

            <!-- Case 3 -->
            <div class="bg-gray-50 dark:bg-slate-700 rounded-xl overflow-hidden shadow-lg">
                <img src="{{ asset('images/network-case3.jpg') }}" alt="شبكة شركة" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2 text-[#1a5a72] dark:text-[#60cdf2]">شبكة شركة متعددة الفروع</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        حل SD-WAN متكامل لربط 10 فروع مع تحسين أداء التطبيقات السحابية وخفض التكاليف.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 text-[#1a5a72] dark:text-[#60cdf2] text-xs px-3 py-1 rounded-full">SD-WAN</span>
                        <span class="bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 text-[#1a5a72] dark:text-[#60cdf2] text-xs px-3 py-1 rounded-full">VPN</span>
                        <span class="bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 text-[#1a5a72] dark:text-[#60cdf2] text-xs px-3 py-1 rounded-full">تحسين الأداء</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-[#1a5a72] text-white text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-bold mb-6">جاهزون لرفع كفاءة شبكتك؟</h2>
        <p class="text-lg mb-8 max-w-2xl mx-auto opacity-90">
            تواصل مع خبرائنا اليوم لتصميم حل شبكي متكامل يناسب احتياجات عملك
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="/اتصل-بنا" class="bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all">اطلب استشارة مجانية</a>
            <a href="tel:+966558008895" class="border border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white/10 transition-all">اتصل بنا: 00966558008895</a>
        </div>
    </div>
</section>
@endsection