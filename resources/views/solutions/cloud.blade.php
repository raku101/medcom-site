@extends('layouts.app')

@section('title', 'حلول الكلاود السحابية - Medcom')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">حلول سحابية متكاملة لتحويل عملك إلى الرقمية</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                المرونة، الأمان، والتكلفة الفعالة في حلول واحدة
            </span>
        </p>
    </div>
</section>

<!-- Solutions Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">حلولنا السحابية المتكاملة</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                نقدم مجموعة متكاملة من الخدمات السحابية المصممة لاحتياجات عملك
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Solution 1 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 text-2xl">🗃️</div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">تخزين البيانات السحابي</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>حلول تخزين احترافية للملفات والمستندات</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>الوصول من أي مكان عبر الإنترنت</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>مستويات أمان مشددة وتشفير بيانات</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 2 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 text-2xl">🧠</div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">النسخ الاحتياطي السحابي</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>نسخ احتياطي يومي أو آلي للأنظمة والملفات</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>استعادة سريعة في حالة الفقد أو الهجوم السيبراني</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>دعم لأنظمة Windows / Linux / Mac</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 3 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 text-2xl">🖥️</div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">استضافة السيرفرات السحابية</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>سيرفرات افتراضية (VPS / VDS)</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>جاهزة لتشغيل تطبيقات ERP، البريد، الكاشير</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>موارد قابلة للتوسعة حسب الحاجة</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 4 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 text-2xl">📩</div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">البريد الإلكتروني السحابي</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>حلول بريد احترافية (Microsoft 365 - Google Workspace)</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>حماية من الرسائل المزعجة والاختراقات</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>مزامنة مع جميع الأجهزة</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 5 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 text-2xl">🏢</div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">البنية التحتية كخدمة (IaaS)</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>إنشاء بنية تحتية كاملة على الكلاود</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>مثالية للشركات التي لا ترغب في شراء أجهزة</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>إدارة وتوسعة فورية بدون تكاليف عالية</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 6 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 text-2xl">🧾</div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">البرمجيات كخدمة (SaaS)</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>تشغيل برامج عبر الإنترنت مثل أنظمة ERP</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>برامج إدارة المدارس أو العيادات</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>أنظمة الكاشير السحابي</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 7 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 text-2xl">🔐</div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">الأمن السيبراني السحابي</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>حماية البيانات في الكلاود ضد الاختراق</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>أنظمة جدران نارية وتشفير سحابي</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>مراقبة دخول المستخدمين والصلاحيات</span>
                    </li>
                </ul>
            </div>

            <!-- Solution 8 -->
            <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 text-2xl">🔄</div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-gray-600 ">الربط الهجين (Hybrid)</h3>
                <ul class="text-gray-600 dark:text-gray-500 space-y-2">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>الجمع بين السيرفرات الداخلية والحلول السحابية</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>مرونة عالية لتوزيع البيانات والمهام</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>مثالية للجهات التي لديها بيانات حساسة</span>
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
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-[#1a5a72] mb-4">مزايا الحلول السحابية</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                كيف يمكن للحلول السحابية تحسين كفاءة عملك وتقليل التكاليف
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-50 dark:bg-slate-700 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">مرونة عالية</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    سهولة التوسع أو التخفيض حسب احتياجاتك
                </p>
            </div>

            <div class="bg-gray-50 dark:bg-slate-700 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">أمان متقدم</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    حماية بياناتك بأحدث أنظمة التشفير والأمان
                </p>
            </div>

            <div class="bg-gray-50 dark:bg-slate-700 p-6 rounded-xl shadow-lg text-center">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4 mx-auto w-16 h-16 bg-[#1a5a72]/10 dark:bg-[#60cdf2]/10 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">توفير في التكاليف</h3>
                <p class="text-gray-600 dark:text-gray-500">
                    لا حاجة لاستثمارات كبيرة في البنية التحتية
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">لماذا تختار ميدكوم للحلول السحابية؟</h2>
            <p class="text-gray-600 dark:text-gray-500 max-w-3xl mx-auto">
                نتميز بتقديم حلول سحابية متكاملة بمعايير عالمية
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
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-500">بنية تحتية قوية</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        خوادم عالية الأداء في مراكز بيانات عالمية
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
                        فريق دعم فني على مدار الساعة
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
                        تصميم أنظمة تلبي احتياجات عملك الخاصة
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-[#1a5a72] text-white text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-bold mb-6">جاهزون للانتقال إلى السحابة؟</h2>
        <p class="text-lg mb-8 max-w-2xl mx-auto opacity-90">
            تواصل مع خبرائنا اليوم لتصميم حل سحابي مخصص يناسب احتياجاتك
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="/اتصل-بنا" class="bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all">اطلب استشارة مجانية</a>
            <a href="tel:+966558008895" class="border border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white/10 transition-all">اتصل بنا: 00966558008895</a>
        </div>
    </div>
</section>
@endsection