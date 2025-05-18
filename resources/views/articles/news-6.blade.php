@extends('layouts.app')

@section('title', 'ورشة عمل حول الأمن السيبراني - Medcom')

@section('content')
<section class="relative pt-[120px] pb-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/news-6.jpg') }}" alt="ورشة عمل حول الأمن السيبراني" 
             class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">ورشة عمل حول الأمن السيبراني</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                Medcom تنظم ورشة عمل مجانية للتوعية بأهمية الحماية من الاختراقات
            </span>
        </p>
    </div>
</section>

<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4 max-w-3xl">
        <div class="prose dark:prose-invert text-gray-700 dark:text-gray-300">
            <p>في إطار التزامها برفع الوعي الأمني، نظمت Medcom ورشة عمل بعنوان "أساسيات الأمن السيبراني"، والتي شهدت حضور عدد كبير من المتخصصين والمهتمين بمجال تكنولوجيا المعلومات.</p>
            <p>تضمنت الورشة المواضيع التالية:</p>
            <ul>
                <li>أنواع التهديدات السيبرانية الشائعة.</li>
                <li>طرق الوقاية من الهجمات الإلكترونية.</li>
                <li>أهمية النسخ الاحتياطي وتحديث الأنظمة.</li>
                <li>تجربة عملية لاكتشاف الثغرات الأمنية.</li>
            </ul>
            <p>تهدف Medcom من خلال هذه المبادرات إلى بناء مجتمع أكثر وعيًا بالأمن الرقمي وتعزيز حماية المؤسسات من المخاطر التقنية.</p>
        </div>
        <div class="mt-10 text-center">
            <a href="/الأخبار-والمقالات" class="inline-block bg-[#1a5a72] text-white font-bold px-6 py-3 rounded-full hover:bg-[#1a6d8a] transition-all shadow-lg">عودة إلى الأخبار</a>
        </div>
    </div>
</section>
@endsection
