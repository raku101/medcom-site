@extends('layouts.app')

@section('title', 'أعمال الكهرباء - Medcom')

@section('content')
<!-- Hero Section with Background Image -->
<section class="relative py-20 text-white overflow-hidden">
    <!-- Background Layers -->
    <div class="absolute inset-0 z-0">
        <!-- Background Image -->
        <img src="{{ asset('images/electrical-bg.jpg') }}" alt="خلفية أعمال الكهرباء" 
             class="w-full h-full object-cover object-center">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    
    <!-- Content -->
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">أعمال الكهرباء</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                حلول كهربائية آمنة وموثوقة لمشاريعك
            </span>
        </p>
    </div>
</section>

<!-- Electrical Services Intro Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-right">
            <h2 class="text-2xl font-bold text-[#1a5a72] mb-6">خبرتنا في الأعمال الكهربائية</h2>
            <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                بامكانياتنا وخبرتنا الواسعة، نعمل متخصصين في مجال التوصيلات الكهربائية. نحرص دائمًا على تقديم أفضل خدمات التوصيلات الكهربائية بأسعار تنافسية ومواصفات عالية الجودة.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed">
                تعد أعمال الكهرباء أحد الجوانب الأساسية في عملية البناء والتشييد. تشمل هذه الأعمال تركيب وتوصيل الأسلاك الكهربائية والأجهزة والمعدات الكهربائية داخل المباني.
            </p>
        </div>
    </div>
</section>

<!-- Electrical Services Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">خدماتنا الكهربائية</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Service 1 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all">
                <div class="bg-[#1a5a72] text-white p-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    <h3 class="text-xl font-bold">التخطيط والتصميم</h3>
                </div>
                <div class="p-6 text-right">
                    <p class="text-gray-700 mb-4">
                        التخطيط والتصميم المسبق للنظام الكهربائي للمبنى بما في ذلك تحديد أماكن التوصيلات الكهربائية والمآخذ والمفاتيح.
                    </p>
                    <ul class="list-disc pr-5 space-y-2 text-gray-700">
                        <li>دراسة متطلبات المشروع الكهربائية</li>
                        <li>تصميم مخططات كهربائية دقيقة</li>
                        <li>تحديد أماكن التوزيع الأمثل</li>
                    </ul>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all">
                <div class="bg-[#1a5a72] text-white p-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                    </svg>
                    <h3 class="text-xl font-bold">توصيل الأسلاك الكهربائية</h3>
                </div>
                <div class="p-6 text-right">
                    <p class="text-gray-700 mb-4">
                        تمديد وتوصيل الأسلاك الكهربائية في المبنى باستخدام أفضل أنواع الكابلات والمعايير العالمية.
                    </p>
                    <ul class="list-disc pr-5 space-y-2 text-gray-700">
                        <li>تركيب أنظمة التوصيلات الكهربائية</li>
                        <li>استخدام كابلات عالية الجودة</li>
                        <li>التنفيذ وفق معايير السلامة</li>
                    </ul>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all">
                <div class="bg-[#1a5a72] text-white p-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                    <h3 class="text-xl font-bold">تركيب الأجهزة الكهربائية</h3>
                </div>
                <div class="p-6 text-right">
                    <p class="text-gray-700 mb-4">
                        تركيب وتوصيل الأجهزة الكهربائية المختلفة في المبنى مع ضمان عملها بشكل صحيح وآمن.
                    </p>
                    <ul class="list-disc pr-5 space-y-2 text-gray-700">
                        <li>تركيب المصابيح والمفاتيح</li>
                        <li>توصيل المآخذ الكهربائية</li>
                        <li>تركيب أنظمة التكييف والأفران</li>
                    </ul>
                </div>
            </div>
            
            <!-- Service 4 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all">
                <div class="bg-[#1a5a72] text-white p-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h3 class="text-xl font-bold">الصيانة والإصلاح</h3>
                </div>
                <div class="p-6 text-right">
                    <p class="text-gray-700 mb-4">
                        الصيانة الدورية والإصلاح في حالة حدوث أي عطل في النظام الكهربائي لضمان استمرارية العمل.
                    </p>
                    <ul class="list-disc pr-5 space-y-2 text-gray-700">
                        <li>فحص دوري للأنظمة الكهربائية</li>
                        <li>إصلاح الأعطال الكهربائية</li>
                        <li>صيانة وقائية</li>
                    </ul>
                </div>
            </div>
            
            <!-- Service 5 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all">
                <div class="bg-[#1a5a72] text-white p-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    <h3 class="text-xl font-bold">السلامة والتأمين</h3>
                </div>
                <div class="p-6 text-right">
                    <p class="text-gray-700 mb-4">
                        تطبيق إجراءات السلامة المناسبة وتأمين النظام الكهربائي لضمان سلامة المبنى وتشغيله بكفاءة.
                    </p>
                    <ul class="list-disc pr-5 space-y-2 text-gray-700">
                        <li>أنظمة الحماية من الصعق الكهربائي</li>
                        <li>حلول الوقاية من الحرائق</li>
                        <li>تأمين الأنظمة الكهربائية</li>
                    </ul>
                </div>
            </div>
            
            <!-- Service 6 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all">
                <div class="bg-[#1a5a72] text-white p-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    <h3 class="text-xl font-bold">التوصيلات الكهربائية</h3>
                </div>
                <div class="p-6 text-right">
                    <p class="text-gray-700 mb-4">
                        نستخدم توصيلات كهربائية أصلية من ماركات معروفة مثل الفنار وجرير لضمان الجودة والموثوقية.
                    </p>
                    <ul class="list-disc pr-5 space-y-2 text-gray-700">
                        <li>توصيلات كهربائية عالية الجودة</li>
                        <li>مواد أصلية وموثوقة</li>
                        <li>ضمان الأداء المثالي</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Electrical Importance Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/2">
                <img src="{{ asset('images/electrical-importance.jpg') }}" alt="أهمية الأعمال الكهربائية" class="rounded-lg shadow-xl w-full">
            </div>
            <div class="md:w-1/2 text-right">
                <h2 class="text-2xl font-bold text-[#1a5a72] mb-4">أهمية الأعمال الكهربائية</h2>
                <p class="text-gray-700 mb-4">
                    تلعب أعمال الكهرباء دورًا حاسمًا في توفير الطاقة الكهربائية للإضاءة والتدفئة وتشغيل الأجهزة المختلفة بالمباني.
                </p>
                <p class="text-gray-700">
                    تعد التوصيلات الكهربائية جزءاً أساسياً وحيوياً في أنظمة الكهرباء المنزلية والصناعية، حيث تضمن نقل التيار الكهربائي بأمان وفعالية.
                </p>
                <div class="mt-6 bg-[#f0f9ff] p-4 rounded-lg border-r-4 border-[#1a5a72]">
                    <p class="text-[#1a5a72] font-medium">
                        يجب اختيار أفضل التوصيلات الكهربائية لضمان الأداء المثالي والحفاظ على سلامة الدارة الكهربائية.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Brands Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">شركاؤنا في الجودة</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
            <p class="text-gray-700 mt-4 max-w-2xl mx-auto">
                نتعامل مع أفضل الماركات العالمية والمحلية في مجال التوصيلات والأجهزة الكهربائية
            </p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center">
                <img src="{{ asset('images/al-fanar-logo.png') }}" alt="الفنار" class="h-12">
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center">
                <img src="{{ asset('images/jarir-logo.png') }}" alt="جرير" class="h-12">
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center">
                <img src="{{ asset('images/siemens-logo.png') }}" alt="سيمنز" class="h-12">
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center">
                <img src="{{ asset('images/abb-logo.png') }}" alt="ABB" class="h-12">
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 bg-[#1a5a72] text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-6">هل أنت مستعد لبدء مشروعك الكهربائي؟</h2>
        <p class="mb-8 max-w-2xl mx-auto text-lg">
            إذا كنت بحاجة إلى خدماتنا، فلا تتردد في الاتصال بنا الآن للحصول على استشارة أو طلب خدمة مخصَّصة.
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="/اتصل-بنا" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl">
                اطلب استشارة مجانية
            </a>
            <a href="tel:+966123456789" class="inline-block bg-transparent border-2 border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white/10 transition-all shadow-lg hover:shadow-xl">
                اتصل بنا الآن
            </a>
        </div>
    </div>
</section>
@endsection