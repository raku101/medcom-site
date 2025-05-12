@extends('layouts.app')

@section('title', 'شركاؤنا - Medcom')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90 py-12 text-white overflow-hidden">
    <!-- الخلفية الصورة -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/partners-bg.jpg') }}" alt="خلفية شركاؤنا" 
             class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-black/30"></div>
    </div>
    
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">شركاؤنا</h1>
        
    </div>
</section>

<!-- Intro Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <p class="text-lg text-gray-700 leading-relaxed mb-12">
                 في Medcom، نحن نؤمن بأهمية التعاون والشراكة مع أفضل الشركات والمؤسسات لتحقيق أهدافنا المشتركة
                يساهم شركاؤنا في تعزيز قدراتنا وتمكيننا من تقديم حلول متكاملة تلبي احتياجات عملائنا بأعلى مستويات الجودة والاحترافية.

            </p>
            
            <div class="text-right mb-16">
                <h2 class="text-3xl font-bold text-[#1a5a72] mb-6">شركاؤنا الرئيسيون</h2>
                <div class="w-24 h-1 bg-[#1ac8a4] mr-0 ml-auto mb-8"></div>
            </div>
        </div>

        <!-- Partners List -->
        <div class="max-w-4xl mx-auto space-y-16">
            <!-- Partner 1 -->
            <div class="flex flex-col md:flex-row gap-8 items-start">
                <div class="w-full md:w-1/4 bg-gray-50 p-6 rounded-lg border border-gray-200 flex justify-center">
                    <img src="{{ asset('images/partners/hikvision.png') }}" alt="Hikvision" class="h-20 object-contain">
                </div>
                <div class="w-full md:w-3/4 text-right">
                    <h3 class="text-2xl font-bold text-[#1a5a72] mb-2">Hikvision</h3>
                    <p class="font-medium text-gray-600 mb-3">حلول الأمن والتكنولوجيا</p>
                    <p class="text-gray-700 leading-relaxed">
                        تعتبر Hikvision واحدة من الشركات الرائدة في تطوير تكنولوجيا الأمان، حيث تقدم منتجات مبتكرة تسهم في تعزيز مستوى الأمان في مختلف الصناعات.
                    </p>
                </div>
            </div>

            <!-- Partner 2 -->
            <div class="flex flex-col md:flex-row gap-8 items-start">
                <div class="w-full md:w-1/4 bg-gray-50 p-6 rounded-lg border border-gray-200 flex justify-center">
                    <img src="{{ asset('images/partners/cisco.png') }}" alt="Cisco" class="h-20 object-contain">
                </div>
                <div class="w-full md:w-3/4 text-right">
                    <h3 class="text-2xl font-bold text-[#1a5a72] mb-2">Cisco</h3>
                    <p class="font-medium text-gray-600 mb-3">أنظمة الشبكات والحلول السحابية</p>
                    <p class="text-gray-700 leading-relaxed">
                        تساهم Cisco في توفير حلول شبكية متطورة تتيح لنا تقديم خدمات سحابية عالية الجودة، مما يساعد عملائنا على تحسين أدائهم التشغيلي.
                    </p>
                </div>
            </div>

            <!-- Partner 3 -->
            <div class="flex flex-col md:flex-row gap-8 items-start">
                <div class="w-full md:w-1/4 bg-gray-50 p-6 rounded-lg border border-gray-200 flex justify-center">
                    <img src="{{ asset('images/partners/dahua.png') }}" alt="Dahua Technology" class="h-20 object-contain">
                </div>
                <div class="w-full md:w-3/4 text-right">
                    <h3 class="text-2xl font-bold text-[#1a5a72] mb-2">Dahua Technology</h3>
                    <p class="font-medium text-gray-600 mb-3">أجهزة المراقبة وأنظمة التحكم</p>
                    <p class="text-gray-700 leading-relaxed">
                        تقدم Dahua Technology تقنيات متقدمة في مجال كاميرات المراقبة وأنظمة التحكم في الدخول، مما يعزز من قدراتنا في تقديم حلول أمان شاملة.
                    </p>
                </div>
            </div>

            <!-- Partner 4 -->
            <div class="flex flex-col md:flex-row gap-8 items-start">
                <div class="w-full md:w-1/4 bg-gray-50 p-6 rounded-lg border border-gray-200 flex justify-center">
                    <img src="{{ asset('images/partners/azure.png') }}" alt="Microsoft Azure" class="h-20 object-contain">
                </div>
                <div class="w-full md:w-3/4 text-right">
                    <h3 class="text-2xl font-bold text-[#1a5a72] mb-2">Microsoft Azure</h3>
                    <p class="font-medium text-gray-600 mb-3">خدمات تكنولوجيا المعلومات والحلول السحابية</p>
                    <p class="text-gray-700 leading-relaxed">
                        توفر Microsoft Azure بيئة سحابية متطورة تدعم مشاريعنا وتساعد عملائنا في تحقيق أهدافهم بشكل أكثر فعالية.
                    </p>
                </div>
            </div>

            <!-- Partner 5 -->
            <div class="flex flex-col md:flex-row gap-8 items-start">
                <div class="w-full md:w-1/4 bg-gray-50 p-6 rounded-lg border border-gray-200 flex justify-center">
                    <img src="{{ asset('images/partners/fortinet.png') }}" alt="Fortinet" class="h-20 object-contain">
                </div>
                <div class="w-full md:w-3/4 text-right">
                    <h3 class="text-2xl font-bold text-[#1a5a72] mb-2">Fortinet</h3>
                    <p class="font-medium text-gray-600 mb-3">أمن الشبكات</p>
                    <p class="text-gray-700 leading-relaxed">
                        تعمل Fortinet على توفير حلول أمنية متكاملة للشبكات، مما يساعد في حماية بيانات عملائنا وضمان أمانهم.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- قسم شعارات الشركاء الإضافية -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-[#1a5a72] mb-8 text-center">شركاؤنا الآخرون</h2>
        
        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-12">
            <!-- شعار 1 -->
            <div class="w-24 md:w-32 h-24 flex items-center justify-center">
                <img src="{{ asset('images/partners/partner1.png') }}" alt="شريك 1" 
                     class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all duration-300 opacity-80 hover:opacity-100">
            </div>
            
            <!-- شعار 2 -->
            <div class="w-24 md:w-32 h-24 flex items-center justify-center">
                <img src="{{ asset('images/partners/partner2.png') }}" alt="شريك 2" 
                     class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all duration-300 opacity-80 hover:opacity-100">
            </div>
            
            <!-- شعار 3 -->
            <div class="w-24 md:w-32 h-24 flex items-center justify-center">
                <img src="{{ asset('images/partners/partner3.png') }}" alt="شريك 3" 
                     class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all duration-300 opacity-80 hover:opacity-100">
            </div>
            
            <!-- شعار 4 -->
            <div class="w-24 md:w-32 h-24 flex items-center justify-center">
                <img src="{{ asset('images/partners/partner4.png') }}" alt="شريك 4" 
                     class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all duration-300 opacity-80 hover:opacity-100">
            </div>
            
            <!-- شعار 5 -->
            <div class="w-24 md:w-32 h-24 flex items-center justify-center">
                <img src="{{ asset('images/partners/partner5.png') }}" alt="شريك 5" 
                     class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all duration-300 opacity-80 hover:opacity-100">
            </div>

            <div class="w-24 md:w-32 h-24 flex items-center justify-center">
                <img src="{{ asset('images/partners/partner6.png') }}" alt="شريك 6" 
                     class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all duration-300 opacity-80 hover:opacity-100">
            </div>

            <div class="w-24 md:w-32 h-24 flex items-center justify-center">
                <img src="{{ asset('images/partners/partner7.png') }}" alt="شريك 7" 
                     class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all duration-300 opacity-80 hover:opacity-100">
            </div>

            <div class="w-24 md:w-32 h-24 flex items-center justify-center">
                <img src="{{ asset('images/partners/partner8.png') }}" alt="شريك 8" 
                     class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all duration-300 opacity-80 hover:opacity-100">
            </div>
        </div>
    </div>
</section>
<!-- Why Partners Matter -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-right">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-6">لماذا تعتبر الشراكات مهمة لنا؟</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mr-0 mb-8"></div>
            
            <p class="text-lg text-gray-700 mb-8 leading-relaxed">
                نحن نعتبر الشراكات الاستراتيجية جزءًا أساسيًا من نجاحنا. من خلال التعاون مع شركات رائدة، نحن قادرون على:
            </p>
            
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-sm border-t-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">توسيع نطاق خدماتنا</h3>
                    <p class="text-gray-600">تقديم حلول متنوعة ومتكاملة</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm border-t-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">زيادة الابتكار</h3>
                    <p class="text-gray-600">دمج تقنيات جديدة ومبتكرة في مشاريعنا</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm border-t-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">تحسين الجودة</h3>
                    <p class="text-gray-600">ضمان تقديم أعلى مستويات الجودة في جميع خدماتنا</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 bg-[#1a5a72] text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-6">هل ترغب في أن تصبح شريكًا لنا؟</h2>
        <p class="mb-8 max-w-2xl mx-auto text-lg">
            انضم إلى شبكة شركائنا واستفد من فرص العمل المشترك
        </p>
        <a href="/اتصل-بنا" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
            تواصل معنا
        </a>
    </div>
</section>


@endsection