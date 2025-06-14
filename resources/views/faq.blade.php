@extends('layouts.app')

@section('title', 'الأسئلة الشائعة - Medcom')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/faq-bg.jpg') }}" alt="خلفية صفحة الأسئلة الشائعة" 
             class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">أسئلتكم.. نرحب بها دائمًا</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                إجابات واضحة على استفساراتكم
            </span>
        </p>
    </div>
</section>

<section class="py-16 bg-gray-50 dark:bg-[#0f172a] text-right">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto space-y-6">
            @php
                $faqs = [
                    [
                        'question' => 'ما هي الخدمات التي تقدمها شركة ميدكوم؟',
                        'answer' => 'نقدم حلولاً متكاملة تشمل: أنظمة الاتصالات، أنظمة الحضور والانصراف، أنظمة الكاشير، أنظمة الإنذار والسلامة، أنظمة المنازل الذكية، الأنظمة الصوتية والبصرية، أجهزة التتبع والمراقبة، عقود الصيانة السنوية، أنظمة التحكم في الدخول، أنظمة الدش المركزي، أنظمة المراقبة والكاميرات، الشبكات والبنية التحتية، حلول الذكاء الاصطناعي والتحليلات، حلول البرمجيات والتطبيقات، أنظمة الطاقة البديلة، أنظمة الأمن والسلامة المهنية، الحوسبة السحابية والتخزين السحابي، خدمات أنظمة ويندوز، خدمات تمديد الألياف البصرية.'
                    ],
                    [
                        'question' => 'كيف يمكنني الحصول على عرض أسعار لمشروعي؟',
                        'answer' => 'يمكنك طلب عرض أسعار عن طريق التواصل مع فريق المبيعات عبر الهاتف أو البريد الإلكتروني أو تعبئة النموذج المخصص على موقعنا. يرجى توفير تفاصيل المشروع (المساحة، المتطلبات، الميزانية المتوقعة) لمساعدتنا في تقديم عرض دقيق.'
                    ],
                    [
                        'question' => 'ما الذي يميز شركة ميدكوم عن الشركات الأخرى؟',
                        'answer' => '1. خبرة تزيد عن 15 عامًا في السوق<br>2. فريق فني معتمد من كبرى الشركات العالمية<br>3. حلول مخصصة لكل عميل حسب احتياجاته<br>4. دعم فني متواصل على مدار الساعة<br>5. ضمان ممتد على جميع منتجاتنا وخدماتنا'
                    ],
                    [
                        'question' => 'هل تقدمون خدمة الدعم الفني بعد التركيب؟',
                        'answer' => 'نعم، نقدم حزم دعم فني متعددة تشمل: الدعم الفني عن بعد، الصيانة الدورية، الزيارات الميدانية الطارئة، والتحديثات الدورية للأنظمة. تتوفر خدمة الدعم على مدار الساعة طوال أيام الأسبوع.'
                    ],
                    [
                        'question' => 'هل توفرون تدريبًا على استخدام الأنظمة التي تركبونها؟',
                        'answer' => 'بالطبع، نقدم جلسات تدريبية شاملة للمستخدمين تشمل: التدريب النظري على مكونات النظام، التدريب العملي على التشغيل اليومي، التعامل مع الحالات الطارئة، وكيفية استخدام لوحات التحكم. كما نقدم كتيبات إرشادية ومراجع فيديو.'
                    ],
                ];
            @endphp

            @foreach ($faqs as $faq)
                <div class="faq-card group transition-all duration-300 cursor-pointer rounded-xl border-r-4 border-[#1a5a72] shadow hover:shadow-lg bg-white dark:bg-white text-gray-800 dark:text-white p-6">
                    <div class="flex justify-between items-center">
                        <h3 class="font-bold text-[#1a5a72] dark:text-[#60cdf2] text-lg">{{ $faq['question'] }}</h3>
                        <svg class="w-5 h-5 text-[#1a5a72] dark:text-[#60cdf2] transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                    <div class="faq-answer mt-4 hidden group-hover:block p-4 rounded-md bg-gray-100 dark:bg-[#2f2f2f] text-gray-700 dark:text-gray-100 leading-relaxed">
                        {!! $faq['answer'] !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>



<!-- CTA -->
<section class="py-16 bg-white text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-[#1a5a72] mb-4">هل ما زلت تملك سؤالاً؟</h2>
        <p class="text-gray-800 mb-6 max-w-xl mx-auto">
            لا تتردد في التواصل معنا عبر الهاتف أو البريد الإلكتروني، فريقنا جاهز دائمًا لمساعدتك.
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="/اتصل-بنا" class="bg-[#1a5a72] text-white font-bold py-3 px-8 rounded-full hover:bg-[#1a6d8a] transition-all">تواصل معنا الآن</a>
            <a href="tel:+966558008895" class="bg-white text-[#1a5a72] border border-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all">اتصل بنا: 00966558008895</a>
        </div>
    </div>
</section>

@endsection
