@extends('layouts.app')

@section('title', 'الوظائف - Medcom')

@section('content')
<!-- Hero Section with Background Image -->
<section class="relative py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/careers-bg.jpg') }}" alt="خلفية صفحة الوظائف" 
             class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">نحن نبحث دائمًا عن المواهب المتميزة</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                انضم إلى فريقنا المتميز
            </span>
        </p>
    </div>
</section>

<!-- Careers Intro Section -->
<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl font-bold text-[#1a5a72] mb-6">فرص للتميز والنمو</h2>
            <p class="text-lg text-gray-700 dark:text-gray-500 mb-6 leading-relaxed">
                إذا كنت ترغب في العمل في بيئة تعاونية حيث يتم توفير الفرص، وتطوير المهارات ومكافأة المتميزين، فقد تكون بالضبط ما نبحث عنه.
            </p>
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <div class="bg-[#f8fafc] dark:bg-slate-700 p-6 rounded-lg border-r-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">مميزات العمل معنا</h3>
                    <ul class="list-disc pr-5 space-y-2 text-gray-700 dark:text-gray-300">
                        <li>تأمين صحي شامل</li>
                        <li>التأمين على الحياة والعجز</li>
                        <li>برامج التطوير المهني</li>
                        <li>إجازة مرضية مدفوعة الأجر</li>
                        <li>إجازات سنوية مميزة</li>
                    </ul>
                </div>
                <div class="bg-[#f8fafc] dark:bg-slate-700 p-6 rounded-lg border-r-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">بيئة العمل</h3>
                    <ul class="list-disc pr-5 space-y-2 text-gray-700 dark:text-gray-300">
                        <li>فرص للتقدم الوظيفي</li>
                        <li>بيئة عمل محفزة</li>
                        <li>تدريب مستمر</li>
                        <li>مرونة في بعض الوظائف</li>
                        <li>مكافآت وحوافز مميزة</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Available Positions Section - Enhanced Design -->
<section class="py-16 bg-gray-50 dark:bg-slate-900 text-right">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-[#1a5a72] dark:text-white mb-3">الوظائف المتاحة</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
            <p class="mt-4 text-gray-600 dark:text-gray-300">انضم إلى فريقنا المتميز في بيئة عمل محفزة</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ([
                ['title' => 'مدير قسم', 'description' => 'إدارة فريق العمل وتنفيذ الاستراتيجيات', 'salary' => '5500 - 6075'],
                ['title' => 'مسؤول عهدة أول', 'description' => 'إدارة العهدة والمستودعات', 'salary' => '5000 - 5400'],
                ['title' => 'مسؤول صيانة صرافة', 'description' => 'صيانة أجهزة الصراف الآلي', 'salary' => '4500 - 5000'],
                ['title' => 'مسؤول عهدة سائق', 'description' => 'نقل العهدة وإدارتها', 'salary' => '4000 - 4725'],
                ['title' => 'مناوب عمليات', 'description' => 'متابعة العمليات التشغيلية', 'salary' => '5500 - 6000'],
                ['title' => 'مسؤول عهدة أول (نقل أموال)', 'description' => 'إدارة عمليات نقل الأموال', 'salary' => '5500 - 6075'],
                ['title' => 'مسؤول عهدة أول (تغذية صرافات)', 'description' => 'إدارة عمليات تغذية الصرافات الآلية', 'salary' => '6500 - 6750'],
                ['title' => 'رجل أمن', 'description' => 'توفير الحماية والأمن للمنشآت', 'salary' => '3000 - 4000'],
                ['title' => 'مشرف أمن', 'description' => 'إشراف على فرق الأمن', 'salary' => '4000 - 5000'],
                ['title' => 'أخصائي نقد تعبئة', 'description' => 'إدارة عمليات تعبئة النقد', 'salary' => '4500 - 5000'],
                ['title' => 'مشرف نقد', 'description' => 'إشراف على عمليات النقد', 'salary' => '4500 - 5000'],
                ['title' => 'مساعد منسق', 'description' => 'مساعدة في تنسيق العمليات', 'salary' => '5500 - 6000'],
                ['title' => 'منسق مصرفي', 'description' => 'تنسيق العمليات المصرفية', 'salary' => '5500 - 6000'],
                ['title' => 'أخصائي مساندة', 'description' => 'تقديم الدعم الفني والإداري', 'salary' => '5000 - 5500'],
                ['title' => 'مناوب مركز مراقبة وتحكم', 'description' => 'مراقبة العمليات من مركز التحكم', 'salary' => '5000 - 5250'],
            ] as $index => $job)
            <div class="job-card opacity-0 translate-y-10 transition-all duration-500 ease-out bg-white dark:bg-slate-800 rounded-xl shadow-md hover:shadow-xl overflow-hidden border-l-4 border-[#1a5a72] transform hover:-translate-y-1"
                 style="transition-delay: {{ ($index % 3) * 150 }}ms">
                <div class="p-6 h-full flex flex-col">
                    <div class="flex-grow">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 rounded-full bg-[#1a5a72]/10 flex items-center justify-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#1a5a72] dark:text-[#60cdf2]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-[#1a5a72] dark:text-white">{{ $job['title'] }}</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-6">{{ $job['description'] }}</p>
                    </div>
                    <div class="mt-auto">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500 dark:text-gray-400">الرقم المرجعي: #{{ 1000 + $index }}</span>
                            <span class="bg-[#1a5a72] text-white px-3 py-1 rounded-full text-sm font-medium">{{ $job['salary'] }} ر.س</span>
                        </div>
                        <button class="mt-4 w-full bg-[#f8fafc] dark:bg-slate-700 hover:bg-[#1a5a72] hover:text-white text-[#1a5a72] dark:text-gray-300 font-medium py-2 px-4 rounded-lg transition-all duration-300 flex items-center justify-center">
                            التقديم الآن
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@section('scripts')
<script>
    // Animation trigger
    document.addEventListener('DOMContentLoaded', function() {
        const jobCards = document.querySelectorAll('.job-card');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                }
            });
        }, { threshold: 0.1 });

        jobCards.forEach(card => {
            observer.observe(card);
        });
    });
</script>
@endsection

<!-- How to Apply Section -->
<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/2">
                <img src="{{ asset('images/apply-job.jpg') }}" alt="كيفية التقديم على الوظائف" class="rounded-lg shadow-xl w-full">
            </div>
            <div class="md:w-1/2">
                <h2 class="text-2xl font-bold text-[#1a5a72] mb-4">كيف تتقدم للوظيفة؟</h2>
                <p class="text-gray-700 dark:text-gray-500 mb-4">
                    نرحب بطلبات التوظيف من الموهوبين الذين يبحثون عن فرصة للنمو والتطور في بيئة عمل ديناميكية.
                </p>
                <ol class="list-decimal pr-5 space-y-3 text-gray-700 dark:text-gray-500">
                    <li>اختر الوظيفة المناسبة لمهاراتك وخبراتك</li>
                    <li>أعد سيرتك الذاتية بشكل واضح ومختصر</li>
                    <li>أرسل سيرتك الذاتية عبر النموذج المخصص</li>
                    <li>سنقوم بالاتصال بالمرشحين المناسبين لإجراء المقابلات</li>
                </ol>
                <div class="mt-8">
                    <a href="/التوظيف/تقديم" class="inline-block bg-[#1a5a72] text-white font-bold py-3 px-8 rounded-full hover:bg-[#1a6d8a] transition-all shadow-lg hover:shadow-xl">
                        إرسال السيرة الذاتية
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 bg-[#1a5a72] text-white dark:bg-slate-700">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-6">للمزيد من المعلومات</h2>
        <p class="mb-8 max-w-2xl mx-auto text-lg">
            تواصل مع قسم الموارد البشرية للاستفسار عن الوظائف المتاحة
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="tel:+966558008895" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl">
                اتصل بنا: 00966558008895
            </a>
            <a href="mailto:info@medcom.it.com" class="inline-block bg-transparent border-2 border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white/10 transition-all shadow-lg hover:shadow-xl">
                البريد الإلكتروني
            </a>
        </div>
    </div>
</section>
@endsection
