@extends('layouts.app')

@section('title', 'حلول أنظمة المباني الذكية - Medcom')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">تحويل مبناك إلى مبنى ذكي متكامل</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                حلول متكاملة للراحة، الأمان، وتوفير الطاقة
            </span>
        </p>
    </div>
</section>

<!-- Solutions Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">مكونات نظام المبنى الذكي</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                نظام متكامل يحول مبناك إلى بيئة ذكية متطورة
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Solution 1 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">أنظمة التحكم في الإضاءة</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تحكم ذكي في الإضاءة حسب الحاجة</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>ضبط السطوع حسب أوقات اليوم</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>توفير الطاقة تلقائياً</span>
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
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">أنظمة التحكم في التكييف</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>ضبط درجة الحرارة تلقائياً</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تحكم ذكي حسب وجود الأشخاص</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>توفير الطاقة مع الحفاظ على الراحة</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 3 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">أنظمة التحكم في الستائر</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>فتح وإغلاق تلقائي حسب الإضاءة</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>ضبط زوايا الستائر للتحكم في الضوء</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تكامل مع أنظمة الإضاءة والتكييف</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 4 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">الحساسات الذكية</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>حساسات حركة لتفعيل الأنظمة</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>حساسات حرارة وغاز للإنذار المبكر</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>حساسات إضاءة لضبط الإنارة</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Integration Section -->
<section class="py-16 bg-white dark:bg-slate-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-[#1a5a72] mb-4">التكامل والتحكم الذكي</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                نظام متكامل يوفر لك التحكم الكامل في جميع أنظمة المبنى
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Integration 1 -->
            <div class="bg-gray-50 dark:bg-slate-700 p-6 rounded-xl shadow-lg border border-[#1a5a72]/30 dark:border-[#60cdf2]/30">
                <div class="flex items-center mb-4">
                    <div class="text-[#1a5a72] dark:text-[#60cdf2] mr-3">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl text-[#1a5a72] dark:text-[#60cdf2]">دمج أنظمة الأمان مع الأتمتة</h3>
                </div>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تكامل كامل مع أنظمة الإنذار والمراقبة</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>استجابة تلقائية في حالات الطوارئ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>إغلاق تلقائي للأبواب والنوافذ عند التنبيه</span>
                    </li>
                </ul>
            </div>

            <!-- Integration 2 -->
            <div class="bg-gray-50 dark:bg-slate-700 p-6 rounded-xl shadow-lg border border-[#1a5a72]/30 dark:border-[#60cdf2]/30">
                <div class="flex items-center mb-4">
                    <div class="text-[#1a5a72] dark:text-[#60cdf2] mr-3">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl text-[#1a5a72] dark:text-[#60cdf2]">التحكم عن بُعد أو بالصوت</h3>
                </div>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تحكم كامل عبر الهاتف الذكي أو التابلت</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>أوامر صوتية للتحكم في الأنظمة</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>إمكانية البرمجة المسبقة للسيناريوهات</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">فوائد أنظمة المباني الذكية</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                كيف يمكن لأنظمتنا تحويل مبناك إلى بيئة ذكية متطورة
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">توفير الطاقة</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    توفير يصل إلى 40% في استهلاك الطاقة بفضل التحكم الذكي
                </p>
            </div>

            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">أمان متكامل</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    حماية شاملة للمبنى مع أنظمة إنذار متطورة
                </p>
            </div>

            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">راحة مطلقة</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    تحكم سهل ومرن في جميع أنظمة المبنى من مكان واحد
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-16 bg-white dark:bg-slate-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-[#1a5a72] mb-4">لماذا تختار ميدكوم لأنظمة المباني الذكية؟</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                نتميز بتقديم حلول متكاملة لأنظمة المباني الذكية بمعايير عالمية
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">خبرة واسعة</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        أكثر من 10 سنوات في مجال أنظمة المباني الذكية
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
                        تصميم أنظمة تلبي احتياجاتك الخاصة
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
                        دعم فني على مدار الساعة لضمان عمل الأنظمة بكفاءة
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-[#1a5a72] text-white text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-bold mb-6">جاهزون لتحويل مبناك إلى مبنى ذكي؟</h2>
        <p class="text-lg mb-8 max-w-2xl mx-auto opacity-90">
            تواصل مع خبرائنا اليوم لتصميم نظام مخصص يناسب احتياجات مبناك
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="/اتصل-بنا" class="bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all">اطلب استشارة مجانية</a>
            <a href="tel:+966558008895" class="border border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white/10 transition-all">اتصل بنا: 00966558008895</a>
        </div>
    </div>
</section>
@endsection