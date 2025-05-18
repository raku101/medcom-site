@extends('layouts.app')

@section('title', 'إدارة المشروعات التقنية - Medcom')

@section('content')
<!-- Hero Section with Background Image -->
<section class="relative py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/project-management-bg.jpg') }}" alt="خلفية إدارة المشروعات التقنية" 
             class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">إدارة المشروعات التقنية</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                انطلق بمشاريعك التقنية نحو النجاح مع إدارة احترافية ومتكاملة!
            </span>
        </p>
    </div>
</section>

<!-- Project Management Intro Section -->
<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl font-bold text-[#1a5a72] mb-6">حلول متكاملة لإدارة مشاريعك التقنية</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 mb-6 leading-relaxed">
                نقدم لك حلولًا متكاملة لإدارة مشاريعك التقنية، تضمن لك التخطيط الدقيق، التنفيذ السلس، وتحقيق الأهداف بكفاءة.
            </p>
        </div>
    </div>
</section>

<!-- Services Features Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900 text-right">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">مميزات خدماتنا</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ([
                'خطة شاملة للمشروع' => 'استراتيجية واضحة تتضمن الأهداف، الجدول الزمني، والميزانية لضمان سير العمل بسلاسة',
                'تحليل متطلبات المشروع' => 'تخصيص الموارد اللازمة بدقة لضمان إنتاجية عالية وأداء متميز',
                'إدارة الفرق التقنية' => 'توجيه وتنسيق فرق التطوير، التصميم، والعمليات لتحقيق الانسجام',
                'مراقبة الأداء وإدارة المخاطر' => 'متابعة مستمرة وتحديد التحديات مع تقديم حلول فعالة',
                'التواصل الفعّال' => 'التأكد من توافق المشروع مع تطلعات العملاء ومتطلبات السوق',
                'تحقيق الكفاءة المالية' => 'إدارة دقيقة للميزانية واستخدام أمثل للموارد',
                'التقارير الدورية' => 'تقديم تحديثات منتظمة وأرشفة دقيقة لكافة المراحل',
                'تطبيق أحدث الممارسات' => 'مواكبة التطورات وتطبيق أفضل استراتيجيات إدارة المشاريع'
            ] as $title => $desc)
            <div class="bg-white dark:bg-slate-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-all">
                <div class="text-2xl text-[#1a5a72] mb-3">🔹</div>
                <h3 class="text-xl font-bold text-[#1a5a72] mb-3">{{ $title }}</h3>
                <p class="text-gray-700 dark:text-gray-300">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Project Phases Section -->
<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">مراحل إدارة المشروع</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        <div class="max-w-4xl mx-auto">
            @foreach ([
                'التخطيط الاستراتيجي' => 'تحليل متطلبات المشروع، تحديد الأهداف والنتائج المتوقعة، وضع خطة زمنية واقعية، وتخصيص الموارد المالية والبشرية اللازمة.',
                'التنفيذ والمتابعة' => 'توزيع المهام على الفرق التقنية، متابعة سير العمل وفق الجدول الزمني، حل المشكلات الطارئة، وضمان جودة المخرجات في كل مرحلة.',
                'مراقبة الجودة' => 'اختبار الوظائف والتقنيات المطورة، التأكد من مطابقة المخرجات للمواصفات المطلوبة، وتطبيق معايير الجودة العالمية.',
                'التسليم والتقييم' => 'تسليم المشروع للعميل مع كافة الوثائق الفنية، تدريب المستخدمين النهائيين، تقييم النتائج وقياس مدى تحقيق الأهداف.'
            ] as $index => $phase)
            <div class="flex flex-col md:flex-row items-start mb-8">
                <div class="md:w-1/4 mb-4 md:mb-0">
                    <div class="bg-[#1a5a72] text-white rounded-full w-16 h-16 flex items-center justify-center mx-auto md:mx-0">
                        <span class="text-2xl font-bold">{{ $loop->iteration }}</span>
                    </div>
                </div>
                <div class="md:w-3/4">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-2">{{ $index }}</h3>
                    <p class="text-gray-700 dark:text-gray-300">{{ $phase }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Methodology Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900 text-right">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/2">
                <img src="{{ asset('images/project-methodology.jpg') }}" alt="منهجية إدارة المشاريع" class="rounded-lg shadow-xl w-full">
            </div>
            <div class="md:w-1/2">
                <h2 class="text-2xl font-bold text-[#1a5a72] mb-4">منهجيتنا في إدارة المشاريع</h2>
                <ul class="list-disc pr-5 space-y-2 text-gray-700 dark:text-gray-300">
                    <li>الشفافية الكاملة مع العميل في كل المراحل</li>
                    <li>المرونة في التكيف مع المتغيرات والمتطلبات الجديدة</li>
                    <li>التوثيق الدقيق لكافة العمليات والقرارات</li>
                    <li>التركيز على الجودة ورضا العميل النهائي</li>
                    <li>الاستفادة من الدروس المستفادة لتحسين المشاريع المستقبلية</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories Section -->
<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">قصص نجاح</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach ([
                'نظام إدارة المستشفيات' => ['text' => 'إدارة وتنفيذ نظام متكامل لإدارة المستشفيات شمل 12 وحدة طبية، مع تسليم المشروع قبل الموعد المحدد بـ 3 أسابيع.', 'impact' => '+25%', 'label' => 'تحسن في كفاءة العمليات'],
                'منصة تجارة إلكترونية' => ['text' => 'تطوير وتنفيذ منصة متكاملة للتجارة الإلكترونية لعميل في قطاع التجزئة، مع تحقيق زيادة في المبيعات بنسبة 40%.', 'impact' => '40%', 'label' => 'زيادة في المبيعات'],
                'نظام إدارة التعليم' => ['text' => 'تصميم وتنفيذ نظام لإدارة العملية التعليمية لجامعة كبيرة، مع تقليل الوقت المستغرق للإجراءات الإدارية بنسبة 60%.', 'impact' => '-60%', 'label' => 'توفير في الوقت']
            ] as $title => $story)
            <div class="bg-gray-50 dark:bg-slate-700 p-6 rounded-lg border-r-4 border-[#1a5a72]">
                <h3 class="text-xl font-bold text-[#1a5a72] mb-3">{{ $title }}</h3>
                <p class="text-gray-700 dark:text-gray-300 mb-4">{{ $story['text'] }}</p>
                <div class="flex items-center">
                    <div class="bg-[#1a5a72] text-white rounded-full w-10 h-10 flex items-center justify-center mr-3">
                        <span>{{ $story['impact'] }}</span>
                    </div>
                    <span class="text-sm text-gray-600 dark:text-gray-300">{{ $story['label'] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 bg-[#1a5a72] dark:bg-slate-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-6">جاهز للبدء بمشروعك التقني؟</h2>
        <p class="mb-8 max-w-2xl mx-auto text-lg">
            معنا، ستتمكن من تحويل أفكارك إلى مشاريع ناجحة بأعلى مستويات الاحترافية والجودة
        </p>
        <a href="/اتصل-بنا" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
            تواصل معنا الآن
        </a>
    </div>
</section>
@endsection
