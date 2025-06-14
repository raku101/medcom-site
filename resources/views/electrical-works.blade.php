@extends('layouts.app')

@section('title', 'أعمال الكهرباء - Medcom')

@section('content')
<!-- Hero Section with Background Image -->
<section class="relative py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <!-- Background Layers -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/electrical-bg.jpg') }}" alt="خلفية أعمال الكهرباء" 
             class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
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
<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl font-bold text-[#1a5a72] mb-6">خبرتنا في الأعمال الكهربائية</h2>
            <p class="text-lg text-gray-700 dark:text-gray-500 mb-6 leading-relaxed">
                بامكانياتنا وخبرتنا الواسعة، نعمل متخصصين في مجال التوصيلات الكهربائية. نحرص دائمًا على تقديم أفضل خدمات التوصيلات الكهربائية بأسعار تنافسية ومواصفات عالية الجودة.
            </p>
            <p class="text-lg text-gray-700 dark:text-gray-500 leading-relaxed">
                تعد أعمال الكهرباء أحد الجوانب الأساسية في عملية البناء والتشييد. تشمل هذه الأعمال تركيب وتوصيل الأسلاك الكهربائية والأجهزة والمعدات الكهربائية داخل المباني.
            </p>
        </div>
    </div>
</section>

<!-- Electrical Services Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900 text-right">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">خدماتنا الكهربائية</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $services = [
                    ['title' => 'التخطيط والتصميم', 'desc' => 'التخطيط والتصميم المسبق للنظام الكهربائي للمبنى بما في ذلك تحديد أماكن التوصيلات الكهربائية والمآخذ والمفاتيح.', 'points' => ['دراسة متطلبات المشروع الكهربائية', 'تصميم مخططات كهربائية دقيقة', 'تحديد أماكن التوزيع الأمثل']],
                    ['title' => 'توصيل الأسلاك الكهربائية', 'desc' => 'تمديد وتوصيل الأسلاك الكهربائية في المبنى باستخدام أفضل أنواع الكابلات والمعايير العالمية.', 'points' => ['تركيب أنظمة التوصيلات الكهربائية', 'استخدام كابلات عالية الجودة', 'التنفيذ وفق معايير السلامة']],
                    ['title' => 'تركيب الأجهزة الكهربائية', 'desc' => 'تركيب وتوصيل الأجهزة الكهربائية المختلفة في المبنى مع ضمان عملها بشكل صحيح وآمن.', 'points' => ['تركيب المصابيح والمفاتيح', 'توصيل المآخذ الكهربائية', 'تركيب أنظمة التكييف والأفران']],
                    ['title' => 'الصيانة والإصلاح', 'desc' => 'الصيانة الدورية والإصلاح في حالة حدوث أي عطل في النظام الكهربائي لضمان استمرارية العمل.', 'points' => ['فحص دوري للأنظمة الكهربائية', 'إصلاح الأعطال الكهربائية', 'صيانة وقائية']],
                    ['title' => 'السلامة والتأمين', 'desc' => 'تطبيق إجراءات السلامة المناسبة وتأمين النظام الكهربائي لضمان سلامة المبنى وتشغيله بكفاءة.', 'points' => ['أنظمة الحماية من الصعق الكهربائي', 'حلول الوقاية من الحرائق', 'تأمين الأنظمة الكهربائية']],
                    ['title' => 'التوصيلات الكهربائية', 'desc' => 'نستخدم توصيلات كهربائية أصلية من ماركات معروفة مثل الفنار وجرير لضمان الجودة والموثوقية.', 'points' => ['توصيلات كهربائية عالية الجودة', 'مواد أصلية وموثوقة', 'ضمان الأداء المثالي']]
                ];
            @endphp
            @foreach ($services as $service)
            <div class="bg-white dark:bg-slate-800 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all">
                <div class="bg-[#1a5a72] text-white p-4 text-center">
                    <h3 class="text-xl font-bold">{{ $service['title'] }}</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-700 dark:text-gray-300 mb-4">{{ $service['desc'] }}</p>
                    <ul class="list-disc pr-5 space-y-2 text-gray-700 dark:text-gray-300">
                        @foreach ($service['points'] as $point)
                        <li>{{ $point }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Electrical Importance Section -->
<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/2">
                <img src="{{ asset('images/electrical-importance.jpg') }}" alt="أهمية الأعمال الكهربائية" class="rounded-lg shadow-xl w-full">
            </div>
            <div class="md:w-1/2">
                <h2 class="text-2xl font-bold text-[#1a5a72] mb-4">أهمية الأعمال الكهربائية</h2>
                <p class="text-gray-700 dark:text-gray-500 mb-4">
                    تلعب أعمال الكهرباء دورًا حاسمًا في توفير الطاقة الكهربائية للإضاءة والتدفئة وتشغيل الأجهزة المختلفة بالمباني.
                </p>
                <p class="text-gray-700 dark:text-gray-500">
                    تعد التوصيلات الكهربائية جزءاً أساسياً وحيوياً في أنظمة الكهرباء المنزلية والصناعية، حيث تضمن نقل التيار الكهربائي بأمان وفعالية.
                </p>
                <div class="mt-6 bg-[#f0f9ff] dark:bg-slate-700 p-4 rounded-lg border-r-4 border-[#1a5a72]">
                    <p class="text-[#1a5a72] dark:text-gray-200 font-medium">
                        يجب اختيار أفضل التوصيلات الكهربائية لضمان الأداء المثالي والحفاظ على سلامة الدارة الكهربائية.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Brands Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900 text-right">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">شركاؤنا في الجودة</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
            <p class="text-gray-700 dark:text-gray-300 mt-4 max-w-2xl mx-auto">
                نتعامل مع أفضل الماركات العالمية والمحلية في مجال التوصيلات والأجهزة الكهربائية
            </p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            @foreach (["al-fanar-logo.png", "jarir-logo.png", "siemens-logo.png", "abb-logo.png"] as $logo)
            <div class="bg-white dark:bg-slate-800 p-6 rounded-lg shadow-sm flex items-center justify-center">
                <img src="{{ asset('images/' . $logo) }}" alt="Brand" class="h-12">
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 bg-[#1a5a72] text-white dark:bg-slate-700">
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
