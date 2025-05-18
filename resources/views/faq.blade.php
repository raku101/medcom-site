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

<!-- FAQ Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900 text-right">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto space-y-4">
            @foreach ([
                ['question' => 'ما هي الخدمات التي تقدمها شركة ميدكوم؟',
                 'answer' => 'نقدم حلولاً متكاملة في مجال الأنظمة الأمنية وحلول الشبكات، تشمل: أنظمة المراقبة بالفيديو، أنظمة التحكم في الدخول، أنظمة الإنذار، حلول الشبكات المحلية واللاسلكية، أنظمة إدارة المباني الذكية، وحلول الأمن السيبراني.'],
                ['question' => 'كيف يمكنني الحصول على عرض أسعار لمشروعي؟',
                 'answer' => 'يمكنك طلب عرض أسعار عن طريق التواصل مع فريق المبيعات عبر الهاتف أو البريد الإلكتروني أو تعبئة النموذج المخصص على موقعنا. يرجى توفير تفاصيل المشروع (المساحة، المتطلبات، الميزانية المتوقعة) لمساعدتنا في تقديم عرض دقيق.'],
                ['question' => 'ما الذي يميز شركة ميدكوم عن الشركات الأخرى؟',
                 'answer' => '1. خبرة تزيد عن 15 عامًا في السوق<br>2. فريق فني معتمد من كبرى الشركات العالمية<br>3. حلول مخصصة لكل عميل حسب احتياجاته<br>4. دعم فني متواصل على مدار الساعة<br>5. ضمان ممتد على جميع منتجاتنا وخدماتنا'],
                ['question' => 'هل تقدمون خدمة الدعم الفني بعد التركيب؟',
                 'answer' => 'نعم، نقدم حزم دعم فني متعددة تشمل: الدعم الفني عن بعد، الصيانة الدورية، الزيارات الميدانية الطارئة، والتحديثات الدورية للأنظمة. تتوفر خدمة الدعم على مدار الساعة طوال أيام الأسبوع.'],
                ['question' => 'هل توفرون تدريبًا على استخدام الأنظمة التي تركبونها؟',
                 'answer' => 'بالطبع، نقدم جلسات تدريبية شاملة للمستخدمين تشمل: التدريب النظري على مكونات النظام، التدريب العملي على التشغيل اليومي، التعامل مع الحالات الطارئة، وكيفية استخدام لوحات التحكم. كما نقدم كتيبات إرشادية ومراجع فيديو.'],
                ['question' => 'ما هي سياسة الضمان الخاصة بمنتجاتكم؟',
                 'answer' => 'تتراوح فترات الضمان بين 1-3 سنوات حسب نوع المنتج:<br>- أنظمة المراقبة: 3 سنوات ضمان كامل<br>- أنظمة التحكم: سنتان ضمان<br>- الأجهزة الطرفية: سنة واحدة<br>يشمل الضمان صيانة الأجزاء وتكاليف اليد العاملة.'],
                ['question' => 'كيف يمكنني الحصول على خدمات الصيانة المنتظمة؟',
                 'answer' => 'نقدم باقات صيانة سنوية تشمل: فحص دوري كل 3 أشهر، تنظيف المعدات، تحديث البرمجيات، تقرير مفصل عن حالة النظام. يمكنك الاشتراك في باقات الصيانة عند تنفيذ المشروع أو لاحقًا عبر التواصل مع قسم خدمة العملاء.'],
                ['question' => 'ما المدة الزمنية اللازمة لتركيب نظام أمان كامل؟',
                 'answer' => 'تختلف المدة حسب حجم المشروع:<br>- الشقق والمنازل: 1-3 أيام<br>- الشركات الصغيرة: 3-7 أيام<br>- المشاريع الكبيرة: 2-4 أسابيع<br>نقدم تقييمًا أوليًا مجانيًا لتحديد الجدول الزمني الدقيق.'],
                ['question' => 'كيف يمكنني تحديث نظام الأمان الخاص بي؟',
                 'answer' => 'نقدم خدمات التحديثات بعدة طرق:<br>1. تحديثات عن بعد للبرمجيات<br>2. ترقيات ميدانية للأجهزة<br>3. استبدال الأنظمة القديمة بأنواع أحدث<br>يمكنك طلب زيارة تقييم مجانية لمعرفة خيارات التحديث المناسبة لنظامك الحالي.']
            ] as $index => $faq)
            <div class="faq-card bg-white dark:bg-slate-800 p-6 rounded-xl border-r-4 border-[#1a5a72] shadow hover:shadow-lg transition-all cursor-pointer group">
                <div class="flex justify-between items-center">
                    <h3 class="font-bold text-[#1a5a72] dark:text-white text-lg">{{ $faq['question'] }}</h3>
                    <svg class="w-5 h-5 transform transition-transform duration-300 group-hover:rotate-180 text-[#1a5a72] dark:text-[#60cdf2]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="answer text-gray-600 dark:text-gray-300 mt-4 hidden group-hover:block">
                    {!! $faq['answer'] !!}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-16 bg-white dark:bg-slate-800 text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-[#1a5a72] mb-4">هل ما زلت تملك سؤالاً؟</h2>
        <p class="text-gray-700 dark:text-gray-300 mb-6 max-w-xl mx-auto">
            لا تتردد في التواصل معنا عبر الهاتف أو البريد الإلكتروني، فريقنا جاهز دائمًا لمساعدتك.
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="/اتصل-بنا" class="bg-[#1a5a72] text-white font-bold py-3 px-8 rounded-full hover:bg-[#1a6d8a] transition-all">تواصل معنا الآن</a>
            <a href="tel:+966558008895" class="bg-white text-[#1a5a72] border border-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all">اتصل بنا: 00966558008895</a>
        </div>
    </div>
</section>
@endsection
