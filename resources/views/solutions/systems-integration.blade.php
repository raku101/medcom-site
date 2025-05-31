@extends('layouts.app')

@section('title', 'حلول الربط والتكامل بين الأنظمة - Medcom')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/system-integration-bg.jpg') }}" alt="خلفية صفحة الربط والتكامل بين الأنظمة" 
             class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">حلول متكاملة لربط أنظمتك التقنية</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                تكامل سلس بين جميع أنظمتك لتحقيق أقصى كفاءة
            </span>
        </p>
    </div>
</section>

<!-- Solutions Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">حلولنا للربط والتكامل</h2>
            <p class="text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                أنظمة متكاملة لربط جميع حلولك التقنية في منصة واحدة
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Solution 1 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-white">ربط أنظمة الحضور</h3>
                <ul class="text-gray-600 dark:text-gray-300 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تكامل أنظمة الحضور مع الكاميرات</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>ربط مع أنظمة الكاشير والنقاط البيع</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>مزامنة البيانات مع أنظمة الموارد البشرية</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 2 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-white">تكامل الأنظمة الأمنية</h3>
                <ul class="text-gray-600 dark:text-gray-300 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>ربط أنظمة الأمان مع البيوت الذكية</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تكامل كاميرات المراقبة مع أنظمة الإنذار</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>ربط أنظمة التحكم في الدخول مع الأجهزة الذكية</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 3 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-white">الربط السحابي والجوال</h3>
                <ul class="text-gray-600 dark:text-gray-300 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>ربط الأنظمة مع التطبيقات الذكية</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تكامل مع حلول السحابة الإلكترونية</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تحكم عن بعد عبر الهاتف المحمول</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 4 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-white">لوحات تحكم موحدة</h3>
                <ul class="text-gray-600 dark:text-gray-300 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>واجهة تحكم مركزية لجميع الأنظمة</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>إدارة متكاملة من مكان واحد</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تقارير موحدة لجميع الأنظمة المتكاملة</span>
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
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">فوائد التكامل بين الأنظمة</h2>
            <p class="text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                كيف يمكن لحلولنا تحسين كفاءة عملياتك وتبسيط إدارتك
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-50 dark:bg-slate-700 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-white">كفاءة عالية</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    توفير الوقت والجهد بإدارة مركزية واحدة
                </p>
            </div>

            <div class="bg-gray-50 dark:bg-slate-700 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-white">موثوقية متزايدة</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    تقليل الأخطاء وتحسين دقة البيانات
                </p>
            </div>

            <div class="bg-gray-50 dark:bg-slate-700 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-white">مرونة كاملة</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    تحكم عن بعد وإدارة من أي مكان
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Integration Examples Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">أمثلة على التكاملات الناجحة</h2>
            <p class="text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                كيف يمكن لأنظمتنا العمل معاً لتحقيق أفضل النتائج
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg">
                <h3 class="font-bold text-xl mb-4 text-[#1a5a72] dark:text-[#60cdf2]">تكامل الحضور مع الأمن</h3>
                <ul class="text-gray-600 dark:text-gray-300 space-y-3">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>مطابقة بيانات الحضور مع تسجيلات الكاميرات</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>إنذار تلقائي عند وجود تناقض في البيانات</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تقارير موحدة لحركة الموظفين</span>
                    </li>
                </ul>
            </div>

            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg">
                <h3 class="font-bold text-xl mb-4 text-[#1a5a72] dark:text-[#60cdf2]">التحكم الذكي المتكامل</h3>
                <ul class="text-gray-600 dark:text-gray-300 space-y-3">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>إدارة الإضاءة والتكييف حسب وجود الموظفين</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>إغلاق تلقائي للأبواب بعد انتهاء الدوام</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>برمجة سيناريوهات أمنية متكاملة</span>
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
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">لماذا تختار ميدكوم لحلول التكامل؟</h2>
            <p class="text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                نتميز بتقديم حلول تكامل متقدمة بمعايير عالمية
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-white">خبرة واسعة</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        أكثر من 10 سنوات في مجال تكامل الأنظمة
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-white">حلول مخصصة</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        تصميم أنظمة تكامل تلبي احتياجاتك الخاصة
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-white">دعم فني متكامل</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        دعم فني على مدار الساعة لضمان عمل الأنظمة
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-[#1a5a72] text-white text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-bold mb-6">جاهزون لربط أنظمتك بشكل متكامل؟</h2>
        <p class="text-lg mb-8 max-w-2xl mx-auto opacity-90">
            تواصل مع خبرائنا اليوم لتصميم حل تكامل مخصص يناسب احتياجاتك
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="/اتصل-بنا" class="bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all">اطلب استشارة مجانية</a>
            <a href="tel:+966558008895" class="border border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white/10 transition-all">اتصل بنا: 00966558008895</a>
        </div>
    </div>
</section>
@endsection