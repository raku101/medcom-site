@extends('layouts.app')

@section('title', 'أنظمة الأمن والسلامة المهنية - Medcom')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">حلول أمنية متكاملة لحماية المنشآت والموظفين</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                امتثل للأنظمة واحمِ موظفيك ومنشأتك بأفضل تقنيات الأمان
            </span>
        </p>
    </div>
</section>

<!-- Services Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">حلول الأمن والسلامة المهنية لدينا</h2>
            <p class="text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                نقدم أنظمة متكاملة للسلامة المهنية وحماية المنشآت وفق أعلى المعايير المحلية والدولية
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600">أنظمة رش آلي (Sprinklers)</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    تصميم وتركيب أنظمة الرش الآلي لمكافحة الحرائق وفق معايير NFPA العالمية مع صيانة دورية.
                </p>
            </div>

            <!-- Service 2 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600">طفايات الحريق</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    توريد وتركيب جميع أنواع طفايات الحريق مع شهادات معايرة وصيانة دورية وفق المتطلبات.
                </p>
            </div>

            <!-- Service 3 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600">لوحات إنذار وإخلاء</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    أنظمة إنذار مبكر متكاملة مع لوحات إخلاء ذكية ومسارات هروب واضحة وفق المعايير.
                </p>
            </div>

            <!-- Service 4 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600">أنظمة مراقبة متكاملة</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    حلول إنذار مدمجة مع أنظمة التحكم والمراقبة للكشف المبكر عن المخاطر.
                </p>
            </div>

            <!-- Service 5 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600">معدات الأمن الصناعي</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    توريد وتركيب جميع مستلزمات الأمن الصناعي من ملابس واقية، إشارات تحذير، ومعدات الطوارئ.
                </p>
            </div>

            <!-- Service 6 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600">تدريب العاملين</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    برامج تدريبية متخصصة للعاملين على استخدام معدات السلامة وإجراءات الطوارئ.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Safety Standards Section -->
<section class="py-16 bg-white dark:bg-slate-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-[#1a5a72] mb-4">نلتزم بأعلى معايير السلامة</h2>
            <p class="text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                جميع أنظمتنا مصممة وفق أحدث المواصفات والمعايير المحلية والدولية
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="bg-gray-50 dark:bg-slate-700 p-4 rounded-lg">
                <img src="{{ asset('images/nfpa-logo.png') }}" alt="شعار NFPA" class="h-16 mx-auto mb-3">
                <h3 class="font-bold text-gray-800 dark:text-white">NFPA</h3>
            </div>
            <div class="bg-gray-50 dark:bg-slate-700 p-4 rounded-lg">
                <img src="{{ asset('images/osha-logo.png') }}" alt="شعار OSHA" class="h-16 mx-auto mb-3">
                <h3 class="font-bold text-gray-800 dark:text-white">OSHA</h3>
            </div>
            <div class="bg-gray-50 dark:bg-slate-700 p-4 rounded-lg">
                <img src="{{ asset('images/saso-logo.png') }}" alt="شعار SASO" class="h-16 mx-auto mb-3">
                <h3 class="font-bold text-gray-800 dark:text-white">SASO</h3>
            </div>
            <div class="bg-gray-50 dark:bg-slate-700 p-4 rounded-lg">
                <img src="{{ asset('images/iso-logo.png') }}" alt="شعار ISO" class="h-16 mx-auto mb-3">
                <h3 class="font-bold text-gray-800 dark:text-white">ISO 45001</h3>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">لماذا تختار ميدكوم لأنظمة الأمن والسلامة؟</h2>
            <p class="text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                نقدم حلولاً أمنية متكاملة توفر الحماية الشاملة لمنشآتك وموظفيك
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-600">خبراء معتمدون</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    فريق فني معتمد من الهيئات المحلية والدولية في مجال السلامة والحماية.
                </p>
            </div>

            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-600">حلول متكاملة</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    أنظمة مصممة خصيصاً لتلبي احتياجات منشأتك مع التكامل بين جميع عناصر الأمن.
                </p>
            </div>

            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-600">دعم فني دائم</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    خدمة صيانة دورية ودعم فني سريع لضمان استمرارية عمل الأنظمة.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-[#1a5a72] text-white text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-bold mb-6">جاهزون لتأمين منشأتك؟</h2>
        <p class="text-lg mb-8 max-w-2xl mx-auto opacity-90">
            تواصل مع خبرائنا اليوم لتقييم احتياجات الأمن والسلامة في منشأتك
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="/اتصل-بنا" class="bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all">اطلب استشارة مجانية</a>
            <a href="tel:+966558008895" class="border border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white/10 transition-all">اتصل بنا: 00966558008895</a>
        </div>
    </div>
</section>
@endsection