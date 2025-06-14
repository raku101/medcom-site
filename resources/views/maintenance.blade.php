@extends('layouts.app')

@section('title', 'إدارة عقود الصيانة - Medcom')

@section('content')
<!-- Hero Section with Background Image -->
<section class="relative py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/maintenance-bg.jpg') }}" alt="خلفية إدارة عقود الصيانة" 
             class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">إدارة عقود الصيانة</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                حماية استثماراتك التقنية وضمان استمرارية عملك
            </span>
        </p>
    </div>
</section>

<!-- Introduction Section -->
<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl font-bold text-[#1a5a72] mb-6">عقود الصيانة السنوية في تقنية المعلومات والأجهزة الأمنية</h2>
            <p class="text-lg text-gray-700 dark:text-gray-500 mb-6 leading-relaxed">
                في عالم يعتمد بشكل متزايد على تقنية المعلومات والأمن السيبراني، لا مجال للأعطال أو التوقفات غير المتوقعة!
                تضمن عقود الصيانة السنوية الحفاظ على استقرار الأنظمة التقنية والأجهزة الأمنية، مما يوفر لك الأمان، الكفاءة، واستمرارية العمل دون انقطاع.
            </p>
            <div class="bg-[#f8fafc] dark:bg-slate-700 p-6 rounded-lg border-r-4 border-[#1a9ba4] mb-8">
                <p class="text-gray-700 dark:text-gray-300 font-medium">
                    🔒 حماية أعمالك واستمراريتها تبدأ من الصيانة الدورية!
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900 text-right">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">لماذا تحتاج شركتك إلى عقد صيانة سنوي؟</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white dark:bg-slate-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-all">
                <h3 class="text-xl font-bold text-[#1a5a72] mb-2">حماية البيانات</h3>
                <p class="text-gray-600 dark:text-gray-300">ضمان عمل الخوادم وأجهزة التخزين بأقصى كفاءة لمنع فقدان المعلومات</p>
            </div>
            <div class="bg-white dark:bg-slate-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-all">
                <h3 class="text-xl font-bold text-[#1a5a72] mb-2">ضمان أمان المنشآت</h3>
                <p class="text-gray-600 dark:text-gray-300">تشغيل دائم لكاميرات المراقبة وأنظمة الإنذار والتحكم بالدخول</p>
            </div>
            <div class="bg-white dark:bg-slate-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-all">
                <h3 class="text-xl font-bold text-[#1a5a72] mb-2">تفادي الأعطال المفاجئة</h3>
                <p class="text-gray-600 dark:text-gray-300">الصيانة الدورية تمنع الأعطال قبل حدوثها، وتحافظ على سير العمل</p>
            </div>
            <div class="bg-white dark:bg-slate-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-all">
                <h3 class="text-xl font-bold text-[#1a5a72] mb-2">تحديث الأنظمة باستمرار</h3>
                <p class="text-gray-600 dark:text-gray-300">توافق البرامج مع أحدث التحديثات الأمنية والتقنية</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">خدمات الصيانة السنوية التي نقدمها</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gray-50 dark:bg-slate-700 rounded-lg overflow-hidden shadow-md border border-gray-200 dark:border-slate-600">
                <div class="bg-[#1a5a72] text-white p-4 text-center">
                    <h3 class="text-xl font-bold">صيانة أنظمة تقنية المعلومات</h3>
                </div>
                <div class="p-6">
                    <ul class="list-disc pr-5 space-y-2 text-gray-700 dark:text-gray-300">
                        <li>الخوادم والشبكات</li>
                        <li>حماية البيانات والنسخ الاحتياطي</li>
                        <li>صيانة أجهزة الحاسب والأجهزة المكتبية</li>
                    </ul>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-slate-700 rounded-lg overflow-hidden shadow-md border border-gray-200 dark:border-slate-600">
                <div class="bg-[#1a5a72] text-white p-4 text-center">
                    <h3 class="text-xl font-bold">صيانة الأنظمة الأمنية</h3>
                </div>
                <div class="p-6">
                    <ul class="list-disc pr-5 space-y-2 text-gray-700 dark:text-gray-300">
                        <li>كاميرات المراقبة وأنظمة التسجيل</li>
                        <li>أجهزة التحكم وبوابات الأمان</li>
                        <li>أنظمة الإنذار والاستجابة للطوارئ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Maintenance Types Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900 text-right">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">الصيانة الوقائية مقابل التفاعلية</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="bg-white dark:bg-slate-800 p-6 rounded-lg shadow-md text-center">
                <h3 class="text-xl font-bold text-[#1a5a72] mb-4">الصيانة الوقائية</h3>
                <p class="text-gray-700 dark:text-gray-300">فحص دوري يمنع الأعطال ويضمن الأداء الأمثل</p>
            </div>
            <div class="bg-white dark:bg-slate-800 p-6 rounded-lg shadow-md text-center">
                <h3 class="text-xl font-bold text-[#1a5a72] mb-4">الصيانة التفاعلية</h3>
                <p class="text-gray-700 dark:text-gray-300">إصلاح الأعطال بعد حدوثها مع مخاطر توقف العمليات</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">لماذا تختارنا؟</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        <div class="grid md:grid-cols-3 gap-6 max-w-4xl mx-auto">
            <div class="text-center">
                <div class="bg-[#1a5a72]/10 p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-[#1a5a72] mb-2">فريق محترف</h3>
                <p class="text-gray-600 dark:text-gray-500">خبرة واسعة في تقنية المعلومات والأمن السيبراني</p>
            </div>
            <div class="text-center">
                <div class="bg-[#1a5a72]/10 p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-[#1a5a72] mb-2">دعم فني متواصل</h3>
                <p class="text-gray-600 dark:text-gray-500">خدمة على مدار الساعة لحل أي مشكلة</p>
            </div>
            <div class="text-center">
                <div class="bg-[#1a5a72]/10 p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-[#1a5a72] mb-2">أحدث التقنيات</h3>
                <p class="text-gray-600 dark:text-gray-500">أدوات وتقنيات متطورة للحفاظ على أمان أنظمتك</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 bg-[#1a5a72] dark:bg-slate-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-6">جاهز لحماية استثماراتك التقنية؟</h2>
        <p class="mb-8 max-w-2xl mx-auto text-lg">
            تواصل معنا الآن واحصل على خطة صيانة مصممة خصيصًا لاحتياجاتك
        </p>
        <a href="/اتصل-بنا" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
            اطلب استشارة مجانية
        </a>
    </div>
</section>
@endsection
