@extends('layouts.app')

@section('title', 'حلول الحوسبة الافتراضية - Medcom')

@section('content')
<!-- Hero Section with Background Image -->
<section class="relative py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/virtualization-bg.png') }}" alt="خلفية الحوسبة الافتراضية" 
             class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">حلول الحوسبة الافتراضية</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                استفد من قوة الحوسبة الافتراضية وانطلق بأعمالك إلى المستقبل!
            </span>
        </p>
    </div>
</section>

<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl font-bold text-[#1a5a72] mb-6">ثورة في عالم تقنية المعلومات</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 mb-6 leading-relaxed">
                في عالم التقنية المتسارع، أصبحت الحوسبة الافتراضية ضرورة لتحقيق الكفاءة والمرونة في تشغيل الأنظمة والتطبيقات.
            </p>
            <div class="grid md:grid-cols-3 gap-6 mb-12">
                <div class="bg-[#f8fafc] dark:bg-slate-700 p-6 rounded-lg border-r-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">إدارة ذكية للموارد</h3>
                    <p class="text-gray-700 dark:text-gray-300">
                        تشغيل تطبيقات مختلفة على أنظمة تشغيل متعددة دون الحاجة إلى أجهزة إضافية
                    </p>
                </div>
                <div class="bg-[#f8fafc] dark:bg-slate-700 p-6 rounded-lg border-r-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">عزل وحماية متقدمة</h3>
                    <p class="text-gray-700 dark:text-gray-300">
                        بيئة مستقلة لكل نظام افتراضي، مما يعزز الأمان والاستقرار
                    </p>
                </div>
                <div class="bg-[#f8fafc] dark:bg-slate-700 p-6 rounded-lg border-r-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">تحسين كفاءة الخوادم</h3>
                    <p class="text-gray-700 dark:text-gray-300">
                        تشغيل أنظمة متعددة على نفس العتاد لتقليل التكاليف وزيادة الإنتاجية
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50 dark:bg-slate-900 text-right">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/2">
                <img src="{{ asset('images/hypervisor.jpg') }}" alt="المراقب (Hypervisor)" class="rounded-lg shadow-xl w-full">
            </div>
            <div class="md:w-1/2">
                <h2 class="text-2xl font-bold text-[#1a5a72] mb-4">المراقب (Hypervisor)</h2>
                <p class="text-gray-700 dark:text-gray-300 mb-4">
                    يعد المراقب الأساس في تشغيل الأجهزة الافتراضية، ويأتي بنمطين:
                </p>
                <ul class="list-disc pr-5 text-gray-700 dark:text-gray-300 space-y-2">
                    <li><strong>Type 1:</strong> يعمل مباشرة على العتاد - مثل KVM</li>
                    <li><strong>Type 2:</strong> يعمل داخل نظام التشغيل - مرن وسهل الاستخدام</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row-reverse gap-8 items-center">
            <div class="md:w-1/2">
                <img src="{{ asset('images/virtual-machines.jpg') }}" alt="الأجهزة الافتراضية" class="rounded-lg shadow-xl w-full">
            </div>
            <div class="md:w-1/2">
                <h2 class="text-2xl font-bold text-[#1a5a72] mb-4">الأجهزة الافتراضية</h2>
                <p class="text-gray-700 dark:text-gray-300">
                    محاكٍ متكامل للحاسوب يدعم موارد الحوسبة والتخزين والتطبيقات بمرونة عالية.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50 dark:bg-slate-900 text-right">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/2">
                <img src="{{ asset('images/containers.jpg') }}" alt="الحاويات (Containers)" class="rounded-lg shadow-xl w-full">
            </div>
            <div class="md:w-1/2">
                <h2 class="text-2xl font-bold text-[#1a5a72] mb-4">الحاويات (Containers)</h2>
                <ul class="list-disc pr-5 space-y-3 text-gray-700 dark:text-gray-300">
                    <li>أداء أعلى وتشغيل أسرع من الأجهزة الافتراضية</li>
                    <li>استهلاك أقل للموارد</li>
                    <li>سهولة الإدارة والنشر عبر أدوات متطورة</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-6">الحوسبة الافتراضية أم الحاويات؟</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 mb-8 leading-relaxed">
                كلاهما يعزل التطبيقات ويُحسن الأداء، لكن تختلف البنية والمرونة.
            </p>
            <div class="grid md:grid-cols-2 gap-8 text-right">
                <div class="bg-[#f8fafc] dark:bg-slate-700 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-4">الأجهزة الافتراضية</h3>
                    <p class="text-gray-700 dark:text-gray-300 mb-4">
                        توفر نظام تشغيل مستقل - مثالية لتعدد البيئات.
                    </p>
                </div>
                <div class="bg-[#f8fafc] dark:bg-slate-700 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-4">الحاويات</h3>
                    <p class="text-gray-700 dark:text-gray-300 mb-4">
                        خفيفة وسريعة - مثالية للتطبيقات الصغيرة الحديثة.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-12 bg-[#1a5a72] dark:bg-slate-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-6">جاهز للارتقاء بمشاريعك التقنية؟</h2>
        <p class="mb-8 max-w-2xl mx-auto text-lg">
            استكشف قوة الحوسبة الافتراضية اليوم وحقق أقصى استفادة من مواردك!
        </p>
        <a href="/اتصل-بنا" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
            احصل على استشارة مجانية
        </a>
    </div>
</section>
@endsection
