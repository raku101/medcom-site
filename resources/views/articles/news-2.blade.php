@extends('layouts.app')

@section('title', 'دليل شامل لحماية الشبكات اللاسلكية - Medcom')

@section('content')
<section class="relative pt-[120px] pb-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/news-2.jpg') }}" alt="دليل شامل لحماية الشبكات اللاسلكية" 
             class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">دليل شامل لحماية الشبكات اللاسلكية</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                أفضل الممارسات لتأمين شبكات الواي فاي في المؤسسات والمنازل
            </span>
        </p>
    </div>
</section>

<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4 max-w-3xl">
        <div class="prose dark:prose-invert text-gray-700 dark:text-gray-300">
            <p>تأمين الشبكات اللاسلكية أصبح من الضروريات في ظل تزايد التهديدات السيبرانية. في هذا المقال، نستعرض أهم النصائح لحماية شبكات الواي فاي المنزلية والمؤسساتية.</p>
            <p>نصائح أساسية للأمان:</p>
            <ul>
                <li>استخدام كلمة مرور قوية وفريدة للشبكة.</li>
                <li>تحديث برنامج الراوتر بشكل دوري.</li>
                <li>إخفاء اسم الشبكة (SSID) إذا لم تكن بحاجة لبثه علنًا.</li>
                <li>تفعيل جدار الحماية المدمج في جهاز التوجيه.</li>
                <li>استخدام بروتوكول التشفير WPA3 إذا كان متاحًا.</li>
            </ul>
            <p>Medcom توفر حلول أمان متقدمة تشمل إعدادات محكمة للشبكات، وتقييمات دورية لضمان الحماية القصوى من الاختراقات والهجمات.</p>
        </div>
        <div class="mt-10 text-center">
            <a href="/الأخبار-والمقالات" class="inline-block bg-[#1a5a72] text-white font-bold px-6 py-3 rounded-full hover:bg-[#1a6d8a] transition-all shadow-lg">عودة إلى الأخبار</a>
        </div>
    </div>
</section>
@endsection
