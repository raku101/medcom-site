@extends('layouts.app')

@section('title', 'الخدمات والمنتجات - Medcom')

@section('content')
<!-- Hero Section with Background Image -->
<section class="relative py-20 text-white overflow-hidden">
    <!-- Background Layers -->
    <div class="absolute inset-0 z-0">
        <!-- Background Image -->
        <img src="{{ asset('images/services-bg.jpg') }}" alt="خلفية الخدمات والمنتجات" 
             class="w-full h-full object-cover object-center">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    
    <!-- Content -->
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">الخدمات والمنتجات</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                حلول تقنية متكاملة لأعمال أكثر ذكاءً وأماناً
            </span>
        </p>
    </div>
</section>

<!-- Services Intro Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-right">
            <h2 class="text-2xl font-bold text-[#1a5a72] mb-6">حلولنا المتكاملة</h2>
            <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                نقدم مجموعة متكاملة من حلول تقنية المعلومات والأنظمة الأمنية، بما في ذلك الصيانة الدورية، إدارة الشبكات، تركيب كاميرات المراقبة، أنظمة التحكم في الدخول، والحلول السحابية. نحن نعمل بجد لتوفير بيئة عمل آمنة وفعالة لكل عملائنا، مع التركيز على تقديم خدمات عالية الجودة تضمن لك الراحة والثقة.
            </p>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">خدماتنا</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Service 1 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all">
                <div class="bg-[#1a5a72] text-white p-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                    </svg>
                    <h3 class="text-xl font-bold">الصيانة الدورية</h3>
                </div>
                <div class="p-6 text-right">
                    <ul class="list-disc pr-5 space-y-2 text-gray-700">
                        <li>فحص شامل للأجهزة والبرامج</li>
                        <li>تحديثات منتظمة لضمان الأمان والاستقرار</li>
                        <li>تقارير دورية حول حالة الأنظمة</li>
                    </ul>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all">
                <div class="bg-[#1a5a72] text-white p-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                    </svg>
                    <h3 class="text-xl font-bold">إدارة الشبكات</h3>
                </div>
                <div class="p-6 text-right">
                    <ul class="list-disc pr-5 space-y-2 text-gray-700">
                        <li>تصميم وتنفيذ الشبكات المحلية والعالمية</li>
                        <li>مراقبة أداء الشبكة وتحليل البيانات</li>
                        <li>حلول أمان الشبكات والتصدي للاختراقات</li>
                    </ul>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all">
                <div class="bg-[#1a5a72] text-white p-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                    <h3 class="text-xl font-bold">تركيب كاميرات المراقبة</h3>
                </div>
                <div class="p-6 text-right">
                    <ul class="list-disc pr-5 space-y-2 text-gray-700">
                        <li>كاميرات داخلية وخارجية عالية الدقة</li>
                        <li>أنظمة المراقبة عن بُعد عبر الهاتف المحمول</li>
                        <li>حلول تخزين سحابية للفيديو</li>
                    </ul>
                </div>
            </div>
            
            <!-- Service 4 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all">
                <div class="bg-[#1a5a72] text-white p-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                    <h3 class="text-xl font-bold">أنظمة التحكم في الدخول</h3>
                </div>
                <div class="p-6 text-right">
                    <ul class="list-disc pr-5 space-y-2 text-gray-700">
                        <li>أجهزة قراءة البطاقات والبصمات</li>
                        <li>أنظمة التحكم الذكية لإدارة المستخدمين</li>
                        <li>تقارير تفصيلية حول أنماط الدخول والخروج</li>
                    </ul>
                </div>
            </div>
            
            <!-- Service 5 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all">
                <div class="bg-[#1a5a72] text-white p-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                    </svg>
                    <h3 class="text-xl font-bold">الحلول السحابية</h3>
                </div>
                <div class="p-6 text-right">
                    <ul class="list-disc pr-5 space-y-2 text-gray-700">
                        <li>خدمات استضافة مواقع إلكترونية</li>
                        <li>حلول تخزين سحابية آمنة ومرنة</li>
                        <li>إدارة البيانات وتحليلها عبر السحابة</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">منتجاتنا</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Product Category 1 -->
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-xl font-bold text-[#1a5a72] mb-4 text-right">كاميرات المراقبة</h3>
                <div class="space-y-4">
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <h4 class="font-bold text-[#1a5a72]">كاميرات HD</h4>
                        <p class="text-gray-700">توفر دقة عالية ورؤية واضحة، مناسبة للمنازل والشركات</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <h4 class="font-bold text-[#1a5a72]">كاميرات 360 درجة</h4>
                        <p class="text-gray-700">رؤية شاملة للمساحات الكبيرة مع إمكانية التحكم عن بُعد</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <h4 class="font-bold text-[#1a5a72]">كاميرات حرارية</h4>
                        <p class="text-gray-700">لمراقبة المواقع في الظروف الليلية أو ذات الإضاءة المنخفضة</p>
                    </div>
                </div>
            </div>
            
            <!-- Product Category 2 -->
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-xl font-bold text-[#1a5a72] mb-4 text-right">أنظمة التحكم في الدخول</h3>
                <div class="space-y-4">
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <h4 class="font-bold text-[#1a5a72]">أجهزة قراءة البطاقات</h4>
                        <p class="text-gray-700">تسهل عملية دخول الموظفين والزوار</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <h4 class="font-bold text-[#1a5a72]">أجهزة البصمة</h4>
                        <p class="text-gray-700">توفر أمانًا متزايدًا من خلال التعرف على هوية المستخدم</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <h4 class="font-bold text-[#1a5a72]">نظام قفل إلكتروني ذكي</h4>
                        <p class="text-gray-700">يتيح التحكم في الدخول عبر الهاتف الذكي</p>
                    </div>
                </div>
            </div>
            
            <!-- Product Category 3 -->
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-xl font-bold text-[#1a5a72] mb-4 text-right">أجهزة الشبكات</h3>
                <div class="space-y-4">
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <h4 class="font-bold text-[#1a5a72]">الموجهات (Routers)</h4>
                        <p class="text-gray-700">لتأمين الاتصال بالإنترنت وتوزيع الشبكة</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <h4 class="font-bold text-[#1a5a72]">مبدلات الشبكة (Switches)</h4>
                        <p class="text-gray-700">لربط الأجهزة المختلفة داخل الشبكة</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <h4 class="font-bold text-[#1a5a72]">نقاط الوصول (Access Points)</h4>
                        <p class="text-gray-700">لتوسيع نطاق الشبكة اللاسلكية</p>
                    </div>
                </div>
            </div>
            
            <!-- Product Category 4 -->
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-xl font-bold text-[#1a5a72] mb-4 text-right">الحلول السحابية</h3>
                <div class="space-y-4">
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <h4 class="font-bold text-[#1a5a72]">خدمات التخزين السحابي</h4>
                        <p class="text-gray-700">تتيح لك تخزين ومشاركة الملفات بسهولة</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <h4 class="font-bold text-[#1a5a72]">التطبيقات السحابية</h4>
                        <p class="text-gray-700">حلول برمجية متكاملة لإدارة الأعمال</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <h4 class="font-bold text-[#1a5a72]">أدوات التحليل السحابي</h4>
                        <p class="text-gray-700">لتحليل البيانات واستخراج التقارير</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">قيمتنا</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Value 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="bg-[#1a5a72] text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1a5a72] mb-2">أمان متكامل</h3>
                <p class="text-gray-700">
                    باستخدام أحدث تقنيات الحماية، نحن نساعدك على حماية بياناتك وممتلكاتك.
                </p>
            </div>
            
            <!-- Value 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="bg-[#1a5a72] text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1a5a72] mb-2">تكنولوجيا سحابية متقدمة</h3>
                <p class="text-gray-700">
                    حلول سحابية مرنة تتيح لك الوصول إلى بياناتك من أي مكان وفي أي وقت.
                </p>
            </div>
            
            <!-- Value 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="bg-[#1a5a72] text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1a5a72] mb-2">خدمات مخصصة</h3>
                <p class="text-gray-700">
                    نصمم حلولنا بناءً على احتياجاتك الخاصة، لضمان تحقيق أهدافك بكفاءة.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-6">لماذا تختارنا؟</h2>
            <p class="text-lg text-gray-700 mb-8 leading-relaxed">
                نحن نتميز بفريق من الخبراء المدربين على أعلى مستوى، الذين يسعون لتقديم حلول مبتكرة تتناسب مع احتياجات عملائنا. كما نقدم دعمًا فنيًا مستمرًا لضمان سير العمل بسلاسة وكفاءة. نحن نعمل باستمرار على تطوير مهاراتنا وتحديث تقنياتنا لنكون في طليعة صناعة تقنية المعلومات.
            </p>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 bg-[#1a5a72] text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-6">جاهز للبدء؟</h2>
        <p class="mb-8 max-w-2xl mx-auto text-lg">
            للحصول على عرض سعر مخصص، اتصل بنا الآن ودعنا نوفر لك الحل الأمثل
        </p>
        <a href="/اتصل-بنا" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
            اطلب استشارة مجانية
        </a>
    </div>
</section>
@endsection