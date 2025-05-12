@extends('layouts.app')

@section('title', 'إدارة عقود الصيانة - Medcom')

@section('content')
<!-- Hero Section with Background Image -->
<section class="relative py-20 text-white overflow-hidden">
    <!-- Background Layers -->
    <div class="absolute inset-0 z-0">
        <!-- Background Image -->
        <img src="{{ asset('images/maintenance-bg.jpg') }}" alt="خلفية إدارة عقود الصيانة" 
             class="w-full h-full object-cover object-center">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    
    <!-- Content -->
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
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-right">
            <h2 class="text-2xl font-bold text-[#1a5a72] mb-6">عقود الصيانة السنوية في تقنية المعلومات والأجهزة الأمنية</h2>
            <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                في عالم يعتمد بشكل متزايد على تقنية المعلومات والأمن السيبراني، لا مجال للأعطال أو التوقفات غير المتوقعة! تضمن عقود الصيانة السنوية الحفاظ على استقرار الأنظمة التقنية والأجهزة الأمنية، مما يوفر لك الأمان، الكفاءة، واستمرارية العمل دون انقطاع.
            </p>
            
            <div class="bg-[#f8fafc] p-6 rounded-lg border-r-4 border-[#1a9ba4] mb-8">
                <p class="text-gray-700 font-medium">
                    🔒 حماية أعمالك واستمراريتها تبدأ من الصيانة الدورية!
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">لماذا تحتاج شركتك إلى عقد صيانة سنوي؟</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-6">
            <!-- Benefit 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all">
                <div class="flex items-start gap-4">
                    <div class="bg-[#1a5a72]/10 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-[#1a5a72] mb-2">حماية البيانات</h3>
                        <p class="text-gray-600">ضمان عمل الخوادم وأجهزة التخزين بأقصى كفاءة لمنع فقدان المعلومات</p>
                    </div>
                </div>
            </div>
            
            <!-- Benefit 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all">
                <div class="flex items-start gap-4">
                    <div class="bg-[#1a5a72]/10 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-[#1a5a72] mb-2">ضمان أمان المنشآت</h3>
                        <p class="text-gray-600">التأكد من تشغيل كاميرات المراقبة، أنظمة الإنذار، وأجهزة التحكم في الدخول بشكل دائم</p>
                    </div>
                </div>
            </div>
            
            <!-- Benefit 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all">
                <div class="flex items-start gap-4">
                    <div class="bg-[#1a5a72]/10 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-[#1a5a72] mb-2">تفادي الأعطال المفاجئة</h3>
                        <p class="text-gray-600">الصيانة الدورية تمنع الأعطال قبل حدوثها، مما يحافظ على سير العمل بسلاسة</p>
                    </div>
                </div>
            </div>
            
            <!-- Benefit 4 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all">
                <div class="flex items-start gap-4">
                    <div class="bg-[#1a5a72]/10 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-[#1a5a72] mb-2">تحديث الأنظمة باستمرار</h3>
                        <p class="text-gray-600">التأكد من توافق البرامج والتطبيقات مع أحدث التحديثات الأمنية والتقنية</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">خدمات الصيانة السنوية التي نقدمها</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            <!-- IT Maintenance -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md border border-gray-200">
                <div class="bg-[#1a5a72] text-white p-4 text-center">
                    <h3 class="text-xl font-bold">صيانة أنظمة تقنية المعلومات</h3>
                </div>
                <div class="p-6 text-right">
                    <ul class="list-disc pr-5 space-y-2 text-gray-700">
                        <li>الخوادم (Servers) والشبكات (Networking)</li>
                        <li>حماية البيانات والنسخ الاحتياطي</li>
                        <li>الصيانة الدورية لأجهزة الحاسب والأجهزة المكتبية</li>
                    </ul>
                </div>
            </div>
            
            <!-- Security Maintenance -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md border border-gray-200">
                <div class="bg-[#1a5a72] text-white p-4 text-center">
                    <h3 class="text-xl font-bold">صيانة الأنظمة الأمنية</h3>
                </div>
                <div class="p-6 text-right">
                    <ul class="list-disc pr-5 space-y-2 text-gray-700">
                        <li>كاميرات المراقبة (CCTV) وأنظمة التسجيل</li>
                        <li>أجهزة التحكم في الوصول وبوابات الأمان</li>
                        <li>أنظمة الإنذار والاستجابة للطوارئ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Maintenance Types Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">الصيانة الوقائية مقابل التفاعلية</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-4">الصيانة الوقائية</h3>
                    <p class="text-gray-700">
                        فحص دوري يمنع الأعطال ويضمن الأداء الأمثل للأنظمة والأجهزة قبل حدوث المشاكل
                    </p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-4">الصيانة التفاعلية</h3>
                    <p class="text-gray-700">
                        إصلاح الأعطال بعد حدوثها، مما قد يؤدي إلى توقف العمليات وخسائر مالية
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">لماذا تختارنا؟</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center">
                    <div class="bg-[#1a5a72]/10 p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#1a5a72] mb-2">فريق محترف</h3>
                    <p class="text-gray-600">خبرة واسعة في تقنية المعلومات والأمن السيبراني</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-[#1a5a72]/10 p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#1a5a72] mb-2">دعم فني متواصل</h3>
                    <p class="text-gray-600">خدمة على مدار الساعة لحل أي مشكلة فور حدوثها</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-[#1a5a72]/10 p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#1a5a72] mb-2">أحدث التقنيات</h3>
                    <p class="text-gray-600">استخدام أدوات وتقنيات متطورة للحفاظ على أمان أنظمتك</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 bg-[#1a5a72] text-white">
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