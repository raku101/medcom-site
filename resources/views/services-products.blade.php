@extends('layouts.app')

@section('title', 'الخدمات والمنتجات - Medcom')

@section('content')
<!-- Hero Section with Background Image -->
<section class="relative py-20 text-white overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/services-bg.jpg') }}" alt="خلفية الخدمات والمنتجات" class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">الخدمات والمنتجات</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 dark:bg-white/20 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                حلول تقنية متكاملة لأعمال أكثر ذكاءً وأماناً
            </span>
        </p>
    </div>
</section>

<!-- Services Intro Section -->
<section class="py-16 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-right">
            <h2 class="text-2xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-6">حلولنا المتكاملة</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 mb-6 leading-relaxed">
                نقدم مجموعة متكاملة من حلول تقنية المعلومات والأنظمة الأمنية، بما في ذلك الصيانة الدورية، إدارة الشبكات، تركيب كاميرات المراقبة، أنظمة التحكم في الدخول، والحلول السحابية. نحن نعمل بجد لتوفير بيئة عمل آمنة وفعالة لكل عملائنا، مع التركيز على تقديم خدمات عالية الجودة تضمن لك الراحة والثقة.
            </p>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-16 bg-gray-50 dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-3">خدماتنا</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $services = [
                    [
                        'title' => 'الصيانة الدورية',
                        'features' => ['فحص شامل للأجهزة والبرامج', 'تحديثات منتظمة لضمان الأمان والاستقرار', 'تقارير دورية حول حالة الأنظمة']
                    ],
                    [
                        'title' => 'إدارة الشبكات',
                        'features' => ['تصميم وتنفيذ الشبكات المحلية والعالمية', 'مراقبة أداء الشبكة وتحليل البيانات', 'حلول أمان الشبكات والتصدي للاختراقات']
                    ],
                    [
                        'title' => 'تركيب كاميرات المراقبة',
                        'features' => ['كاميرات داخلية وخارجية عالية الدقة', 'أنظمة المراقبة عن بُعد عبر الهاتف المحمول', 'حلول تخزين سحابية للفيديو']
                    ],
                    [
                        'title' => 'أنظمة التحكم في الدخول',
                        'features' => ['أجهزة قراءة البطاقات والبصمات', 'أنظمة التحكم الذكية لإدارة المستخدمين', 'تقارير تفصيلية حول أنماط الدخول والخروج']
                    ],
                    [
                        'title' => 'الحلول السحابية',
                        'features' => ['خدمات استضافة مواقع إلكترونية', 'حلول تخزين سحابية آمنة ومرنة', 'إدارة البيانات وتحليلها عبر السحابة']
                    ]
                ];
            @endphp

            @foreach ($services as $service)
            <div class="bg-white dark:bg-gray-700 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all">
                <div class="bg-[#1a5a72] text-white p-4 text-center">
                    <svg class="h-10 w-10 mx-auto mb-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <h3 class="text-xl font-bold">{{ $service['title'] }}</h3>
                </div>
                <div class="p-6 text-right">
                    <ul class="list-disc pr-5 space-y-2 text-gray-700 dark:text-gray-200">
                        @foreach ($service['features'] as $feature)
                            <li>{{ $feature }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- (تابع باقي الأقسام كما هي...) -->
@endsection
