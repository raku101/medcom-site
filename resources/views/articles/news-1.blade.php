@extends('layouts.app')

@section('title', 'أحدث تطورات أنظمة المراقبة الذكية - Medcom')

@section('content')
<section class="relative pt-[120px] pb-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/news-1.jpg') }}" alt="أحدث تطورات أنظمة المراقبة الذكية" 
             class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">أحدث تطورات أنظمة المراقبة الذكية</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                كيف غيرت تقنيات الذكاء الاصطناعي وجه أنظمة المراقبة الأمنية في 2024
            </span>
        </p>
    </div>
</section>

<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4 max-w-3xl">
        <div class="prose dark:prose-invert text-gray-700 dark:text-gray-300">
            <p>شهد عام 2024 نقلة نوعية في تقنيات أنظمة المراقبة الذكية، حيث لعب الذكاء الاصطناعي دورًا محوريًا في تطوير قدرات التعرف على الوجوه وتحليل السلوكيات وتحسين دقة الإنذارات.</p>
            <p>من أبرز الابتكارات هذا العام:</p>
            <ul>
                <li>التحليل التنبؤي للسلوكيات المشبوهة.</li>
                <li>الربط المباشر بين الكاميرات وأنظمة الإنذار الذكية.</li>
                <li>تقنيات التعلم العميق لتحسين التعرف على العناصر في الفيديو.</li>
            </ul>
            <p>تقدم Medcom حلولاً متكاملة في هذا المجال، تشمل كاميرات متطورة، منصات مراقبة ذكية، وتحليلات فورية لحماية المنشآت بكفاءة عالية.</p>
        </div>
        <div class="mt-10 text-center">
            <a href="/الأخبار-والمقالات" class="inline-block bg-[#1a5a72] text-white font-bold px-6 py-3 rounded-full hover:bg-[#1a6d8a] transition-all shadow-lg">عودة إلى الأخبار</a>
        </div>
    </div>
</section>
@endsection
