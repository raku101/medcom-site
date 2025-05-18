@extends('layouts.app')

@section('title', 'حلول الأنظمة الصوتية - Medcom')

@section('content')
<!-- Hero Section with Background Image -->
<section class="relative py-20 text-white overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/audio-systems-bg.jpg') }}" alt="خلفية الأنظمة الصوتية" 
             class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">حلول الأنظمة الصوتية</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                تجارب صوتية ذكية متكاملة لكل مساحاتك
            </span>
        </p>
    </div>
</section>

<!-- Commercial Audio Systems Section -->
<section class="py-16 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-right">
            <h2 class="text-2xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-6">استخدامات الأنظمة الصوتية الذكية في الأماكن التجارية</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 mb-6 leading-relaxed">
                نظام الصوت متعدد المناطق المقدم من شركتنا يتيح تشغيل محتوى صوتي مختلف في مناطق متعددة داخل المبنى في وقت واحد. يتميز كل منطقة بمكبرات صوت وعناصر تحكم في مستوى الصوت الخاصة بها، مما يتيح لك إنشاء بيئات صوتية مميزة تتناسب مع احتياجات وتفضيلات كل جزء من المساحة.
            </p>
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <div class="bg-[#f8fafc] dark:bg-gray-800 p-6 rounded-lg border-r-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-3">مميزات النظام</h3>
                    <ul class="list-disc pr-5 space-y-2 text-gray-700 dark:text-gray-300">
                        <li>تحكم فردي في كل منطقة صوتية</li>
                        <li>إدارة مركزية لجميع الأنظمة الصوتية</li>
                        <li>تكامل مع أنظمة البناء الذكية</li>
                        <li>واجهات تحكم سهلة الاستخدام</li>
                    </ul>
                </div>
                <div class="bg-[#f8fafc] dark:bg-gray-800 p-6 rounded-lg border-r-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-3">تطبيقات عملية</h3>
                    <ul class="list-disc pr-5 space-y-2 text-gray-700 dark:text-gray-300">
                        <li>المجمعات التجارية والمراكز التجارية</li>
                        <li>المطاعم والفنادق</li>
                        <li>المباني المكتبية</li>
                        <li>المؤسسات التعليمية</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Smart Home Audio Section -->
<section class="py-16 bg-gray-50 dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/2">
                <img src="{{ asset('images/smart-audio.jpg') }}" alt="نظام الصوت الذكي" class="rounded-lg shadow-xl w-full">
            </div>
            <div class="md:w-1/2 text-right">
                <h2 class="text-2xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-4">نظام الصوت الذكي للمنازل</h2>
                <p class="text-gray-700 dark:text-gray-300 mb-4">
                    نظام المنزل الذكي هو أكثر من مجرد مجموعة من الأجهزة؛ المصممة بسلاسة لتعزيز كل جانب من جوانب حياتك.
                </p>
                <p class="text-gray-700 dark:text-gray-300">
                    نظام الصوت الذكي يحتوي على أكثر من 15 حل من حلول الإعدادات الصوتية المتقدمة والتي تتضمن التكنولوجيا الذكية وعناصر الاتصال لتحسين الاستماع الصوتي في مجموعة متنوعة من السيناريوهات.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- System Components Section -->
<section class="py-16 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-3">مكونات الأنظمة الصوتية الذكية</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach ([
                ['title' => 'مكبرات صوت ذكية', 'desc' => 'مكبرات صوت عالية الجودة قابلة للتخصيص حسب احتياجات المساحة، مع إمكانية التحكم عن بعد.'],
                ['title' => 'أنظمة التحكم', 'desc' => 'وحدات تحكم مركزية ولوحات تحكم لمسية تمكنك من إدارة النظام الصوتي بكامل مرونته.'],
                ['title' => 'التكامل الذكي', 'desc' => 'تكامل كامل مع أنظمة المنزل الذكي والمساعدات الصوتية مثل Google Assistant وAmazon Alexa.']
            ] as $comp)
            <div class="bg-gray-50 dark:bg-gray-800 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all">
                <div class="bg-[#1a5a72] text-white p-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <h3 class="text-xl font-bold">{{ $comp['title'] }}</h3>
                </div>
                <div class="p-6 text-right">
                    <p class="text-gray-700 dark:text-gray-300">{{ $comp['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Experience Section -->
<section class="py-16 bg-gray-50 dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-6">تجربة سمعية غامرة لم يسبق لها مثيل</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 mb-8 leading-relaxed">
                صوتياتك المفضلة، حيث تنسجم التكنولوجيا المتطورة مع محيطك لتقدم لك تجربة سمعية استثنائية.
            </p>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-4">للأعمال التجارية</h3>
                    <p class="text-gray-700 dark:text-gray-300">
                        تحسين تجربة العملاء وخلق أجواء مناسبة لكل مساحة في منشأتك التجارية
                    </p>
                </div>
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-4">للمنازل الذكية</h3>
                    <p class="text-gray-700 dark:text-gray-300">
                        تجربة معيشية راقية مع صوت عالي الجودة في كل ركن من أركان منزلك
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 bg-[#1a5a72] text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-6">جاهز لترقية نظام الصوت الخاص بك؟</h2>
        <p class="mb-8 max-w-2xl mx-auto text-lg">
            خبراؤنا جاهزون لمساعدتك في تصميم وتنفيذ الحل الأمثل لاحتياجاتك
        </p>
        <a href="/اتصل-بنا" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
            احصل على استشارة مجانية
        </a>
    </div>
</section>
@endsection
