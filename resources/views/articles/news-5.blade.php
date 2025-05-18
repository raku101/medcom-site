@extends('layouts.app')

@section('title', 'كيف تختار نظام إنذار مثالي لمؤسستك؟ - Medcom')

@section('content')
<section class="relative pt-[120px] pb-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/news-5.jpg') }}" alt="كيف تختار نظام إنذار مثالي لمؤسستك؟" 
             class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">كيف تختار نظام إنذار مثالي لمؤسستك؟</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                معايير أساسية يجب مراعاتها قبل اتخاذ القرار
            </span>
        </p>
    </div>
</section>

<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4 max-w-3xl">
        <div class="prose dark:prose-invert text-gray-700 dark:text-gray-300">
            <p>اختيار نظام الإنذار المناسب لمؤسستك يعتمد على عدة عوامل لضمان الحماية الفعالة. إليك أبرز ما يجب أن تأخذه في الاعتبار:</p>
            <ul>
                <li>حجم المبنى وعدد الطوابق والمداخل.</li>
                <li>نوع الأنشطة التي تتم داخل المؤسسة.</li>
                <li>مستوى الأمان المطلوب (أساسي - متوسط - عالٍ).</li>
                <li>إمكانية الربط مع أنظمة أخرى مثل المراقبة والتحكم بالدخول.</li>
                <li>خدمة ما بعد البيع والصيانة الدورية.</li>
            </ul>
            <p>شركة Medcom تقدم أنظمة إنذار متقدمة قابلة للتخصيص حسب نوع المؤسسة، مع ضمان الجودة وخدمة دعم فني مستمرة لضمان راحة بالك.</p>
        </div>
        <div class="mt-10 text-center">
            <a href="/الأخبار-والمقالات" class="inline-block bg-[#1a5a72] text-white font-bold px-6 py-3 rounded-full hover:bg-[#1a6d8a] transition-all shadow-lg">عودة إلى الأخبار</a>
        </div>
    </div>
</section>
@endsection
