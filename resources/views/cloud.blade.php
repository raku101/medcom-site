@extends('layouts.app')

@section('title', 'الانتقال إلى السحابة - Medcom')

@section('content')
<!-- Hero Section with Background Image -->
<section class="relative py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/cloud-bg.jpg') }}" alt="خلفية الانتقال إلى السحابة" 
             class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">الانتقال إلى السحابة</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                حلول سحابية متكاملة لأعمال أكثر مرونة وكفاءة
            </span>
        </p>
    </div>
</section>

<!-- Cloud Introduction Section -->
<section class="py-16 bg-white dark:bg-slate-800">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-right">
            <h2 class="text-2xl font-bold text-[#1a5a72] mb-6">ما هو الانتقال إلى السحابة؟</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 mb-6 leading-relaxed">
                عندما تختار شركة "الانتقال إلى السحابة"، فهذا يعني أن البنية التحتية لتكنولوجيا المعلومات لديها يتم تخزينها خارج الموقع، في مركز بيانات يتم صيانته بواسطة مزوّد خدمة الحوسبة السحابية.
            </p>
            <div class="bg-[#f8fafc] dark:bg-slate-700 p-6 rounded-lg border-r-4 border-[#1a9ba4] mb-8">
                <p class="text-gray-700 dark:text-gray-300">
                    يتحمل موفرو الخدمات السحابية الرائدون في المجال مسؤولية إدارة البنية التحتية لتكنولوجيا المعلومات وتكامل التطبيقات وتطوير الوظائف والقدرات الجديدة الخاصة بالعميل من أجل الحفاظ على مواكبة متطلبات السوق.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">مزايا الحوسبة السحابية</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach ([
                ['title' => 'المرونة والتوسع', 'desc' => 'الوصول السريع إلى الموارد حسب الحاجة دون استثمارات مسبقة كبيرة'],
                ['title' => 'الموثوقية والأمان', 'desc' => 'بنية تحتية محمية بإجراءات أمان متقدمة ونسخ احتياطي تلقائي'],
                ['title' => 'توفير التكاليف', 'desc' => 'دفع فقط مقابل ما تستخدمه دون تكاليف صيانة البنية التحتية']
            ] as $benefit)
            <div class="bg-white dark:bg-slate-800 p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-all">
                <div class="w-16 h-16 bg-[#1a5a72]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a9ba4]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1a5a72] mb-2">{{ $benefit['title'] }}</h3>
                <p class="text-gray-600 dark:text-gray-300">{{ $benefit['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Cloud Services Section -->
<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">حلولنا السحابية</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            @foreach ([
                ['title' => 'البنية التحتية كخدمة (IaaS)', 'desc' => 'توفير موارد الحوسبة الأساسية مثل الخوادم الافتراضية والتخزين والشبكات'],
                ['title' => 'المنصة كخدمة (PaaS)', 'desc' => 'بيئة تطوير كاملة في السحابة لتطوير وتشغيل التطبيقات'],
                ['title' => 'البرمجيات كخدمة (SaaS)', 'desc' => 'تطبيقات جاهزة للاستخدام عبر الإنترنت بدون حاجة للتثبيت'],
                ['title' => 'التخزين السحابي', 'desc' => 'مساحات تخزين آمنة وقابلة للتوسع مع إمكانية الوصول من أي مكان']
            ] as $service)
            <div class="flex items-start gap-6">
                <div class="bg-[#1a5a72]/10 p-3 rounded-full flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-2">{{ $service['title'] }}</h3>
                    <p class="text-gray-700 dark:text-gray-300">{{ $service['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Migration Process Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900 text-right">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">عملية الانتقال إلى السحابة</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>

        <div class="max-w-4xl mx-auto">
            @foreach ([
                ['step' => '1', 'title' => 'التقييم والتخطيط', 'desc' => 'نقوم بتحليل البنية التحتية الحالية وتحديد أحمال العمل المناسبة للانتقال إلى السحابة، مع وضع خطة متكاملة للهجرة.'],
                ['step' => '2', 'title' => 'تصميم الحل السحابي', 'desc' => 'نصمم بنية سحابية مخصصة تلبي احتياجات عملك، مع مراعاة الأمان والأداء والتكلفة.'],
                ['step' => '3', 'title' => 'التنفيذ والدعم', 'desc' => 'ننفذ عملية الانتقال بسلاسة مع توفير الدعم الكامل والتدريب لفريقك لضمان الاستفادة القصوى من الحل السحابي.']
            ] as $step)
            <div class="flex flex-col md:flex-row gap-8 mb-12 items-center">
                <div class="md:w-1/3 bg-white dark:bg-slate-800 p-6 rounded-lg shadow-md text-center">
                    <div class="text-4xl font-bold text-[#1a5a72] mb-4">{{ $step['step'] }}</div>
                    <h3 class="text-xl font-bold text-[#1a5a72]">{{ $step['title'] }}</h3>
                </div>
                <div class="md:w-2/3">
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                        {{ $step['desc'] }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 bg-[#1a5a72] text-white dark:bg-slate-700">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-6">جاهز للانتقال إلى السحابة؟</h2>
        <p class="mb-8 max-w-2xl mx-auto text-lg">
            تواصل مع خبرائنا لبدء رحلة التحول الرقمي لعملك
        </p>
        <a href="/اتصل-بنا" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
            ابدأ الآن
        </a>
    </div>
</section>
@endsection
