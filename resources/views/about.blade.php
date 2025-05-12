@extends('layouts.app')

@section('title', 'من نحن - Medcom')

@section('content')
<!-- Hero Section -->
<section class="relative py-12 text-white overflow-hidden">
    <!-- طبقة الخلفية (الصورة + التدرج اللوني) -->
    <div class="absolute inset-0 z-0">
        <!-- الصورة الخلفية -->
        <img src="{{ asset('images/about-us-bg.jpg') }}" alt="خلفية من نحن" 
             class="w-full h-full object-cover object-center">
        <!-- طبقة التدرج اللوني فوق الصورة -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
        <!-- النمط النصي الخافت -->
      
    </div>
    
    <!-- المحتوى -->
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">من نحن</h1>
        
    </div>
</section>

<!-- About Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-right">
            <p class="text-lg text-gray-700 mb-8 leading-relaxed">
                Medcom هي شركة رائدة في مجال الأنظمة الأمنية وحلول الشبكات، تأسست لتلبية احتياجات السوق المتزايدة في مجال تكنولوجيا المعلومات. نحن نقدم مجموعة شاملة من الحلول والخدمات التي تساعد المؤسسات على تعزيز أمانها وكفاءتها التشغيلية.
            </p>
            
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <!-- Vision -->
                <div class="bg-[#f8fafc] p-6 rounded-lg border-r-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">رؤيتنا</h3>
                    <p class="text-gray-700">
                        نسعى لأن نكون الخيار الأول في مجال تكنولوجيا المعلومات وحلول الأمان، من خلال تقديم خدمات مبتكرة ومخصصة تلبي احتياجات عملائنا.
                    </p>
                </div>
                
                <!-- Mission -->
                <div class="bg-[#f8fafc] p-6 rounded-lg border-r-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">مهمتنا</h3>
                    <p class="text-gray-700">
                        تقديم حلول تقنية متكاملة تجمع بين الأمان والراحة، مما يضمن لعملائنا بيئة عمل آمنة وموثوقة. نلتزم بأعلى مستويات الجودة والدعم الفني.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">قيمنا</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Value 1 -->
            <div class="bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-md transition-all">
                <div class="w-16 h-16 bg-[#1a5a72]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a9ba4]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1a5a72] mb-2">الابتكار</h3>
                <p class="text-gray-600">حلول جديدة تلبي احتياجات العملاء المتغيرة</p>
            </div>
            
            <!-- Value 2 -->
            <div class="bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-md transition-all">
                <div class="w-16 h-16 bg-[#1a5a72]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a9ba4]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1a5a72] mb-2">الجودة</h3>
                <p class="text-gray-600">أعلى معايير الجودة في جميع خدماتنا</p>
            </div>
            
            <!-- Value 3 -->
            <div class="bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-md transition-all">
                <div class="w-16 h-16 bg-[#1a5a72]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a9ba4]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1a5a72] mb-2">الاحترافية</h3>
                <p class="text-gray-600">فريق محترف يسعى لتحقيق رضا العملاء</p>
            </div>
            
            <!-- Value 4 -->
            <div class="bg-white p-6 rounded-lg shadow-sm text-center hover:shadow-md transition-all">
                <div class="w-16 h-16 bg-[#1a5a72]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a9ba4]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1a5a72] mb-2">المرونة</h3>
                <p class="text-gray-600">حلول مصممة خصيصًا لكل عميل</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">فريقنا</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        
        <div class="max-w-4xl mx-auto text-right">
            <p class="text-lg text-gray-700 mb-8 leading-relaxed">
                يتكون فريقنا من مجموعة من الخبراء المتميزين في مجالات تكنولوجيا المعلومات والأمن، الذين يسعون باستمرار لتطوير مهاراتهم وتحديث معرفتهم بأحدث التقنيات. نحن ملتزمون بتوفير الدعم الفني والاستشارات اللازمة لمساعدتك في اتخاذ القرارات الصحيحة.
            </p>
            
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="bg-gray-50 p-6 rounded-lg text-center">
                    <div class="w-24 h-24 rounded-full bg-[#1a5a72]/10 mx-auto mb-4 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-[#1a5a72]">خبراء الأمن</h3>
                    <p class="text-sm text-gray-600">متخصصون في الأنظمة الأمنية</p>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-lg text-center">
                    <div class="w-24 h-24 rounded-full bg-[#1a5a72]/10 mx-auto mb-4 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-[#1a5a72]">مهندسو الشبكات</h3>
                    <p class="text-sm text-gray-600">متخصصون في حلول البنية التحتية</p>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-lg text-center">
                    <div class="w-24 h-24 rounded-full bg-[#1a5a72]/10 mx-auto mb-4 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-[#1a5a72]">دعم فني</h3>
                    <p class="text-sm text-gray-600">متاحون لمساعدتك 24/7</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 bg-[#1a5a72] text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-6">في Medcom، نحن هنا لمساعدتك</h2>
        <p class="mb-8 max-w-2xl mx-auto text-lg">
            تواصل معنا اليوم لاكتشاف كيف يمكننا مساعدتك!
        </p>
        <a href="/اتصل-بنا" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
            اتصل بنا الآن
        </a>
    </div>
</section>

@endsection