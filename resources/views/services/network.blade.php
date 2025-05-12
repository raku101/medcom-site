@extends('layouts.app')

@section('title', 'خدمات الشبكات - Medcom')

@section('content')

<!-- قسم الهيرو -->
<section class="relative py-20 text-white overflow-hidden -mt-[50px] z-0">
    <!-- صورة الخلفية -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/network-bg.jpg') }}" alt="خلفية خدمات الشبكات" class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>

    <!-- محتوى النص -->
    <div class="relative z-10 container mx-auto px-4 text-center">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">خدمات الشبكات</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                حلول شبكات متكاملة لأعمال أكثر كفاءة وأماناً
            </span>
        </p>
    </div>
</section>

<!-- قسم التفاصيل -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-right">
            <h2 class="text-2xl font-bold text-[#1a5a72] mb-6">حلول شبكات متكاملة</h2>
            <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                نقدم خدمات استشارية في تصميم وتنفيذ الشبكات الحاسب الآلي بأنواعها المختلفة (VPN-WIFI-WAN-LAN) لإنشاء شبكة ذكية ومتكاملة تواكب احتياجات العمل الحالية والمستقبلية.
            </p>

            <div class="grid md:grid-cols-2 gap-6 mb-12">
                <div class="bg-[#f8fafc] p-6 rounded-lg border-r-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">مميزات حلولنا</h3>
                    <ul class="list-disc pr-5 space-y-2 text-gray-700">
                        <li>توفير اتصال آمن وغير مقيد بين الموظفين والعملاء</li>
                        <li>ضمان إمكانية الوصول إلى المعلومات من أي مكان</li>
                        <li>أتمتة شبكات سهلة الإدارة والحماية</li>
                        <li>خفض تكاليف التشغيل</li>
                        <li>حماية مركزية ضد الفيروسات وبرامج التجسس</li>
                    </ul>
                </div>
                <div class="bg-[#f1f5f9] p-6 rounded-lg border-r-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">خدمات نقدمها</h3>
                    <ul class="list-disc pr-5 space-y-2 text-gray-700">
                        <li>تصميم وتخطيط الشبكات من الصفر</li>
                        <li>تركيب وصيانة أجهزة الشبكة (Switches, Routers, Access Points)</li>
                        <li>تهيئة VPN آمن للموظفين عن بعد</li>
                        <li>اختبار الأداء وقياس جودة الشبكة</li>
                        <li>حلول التوسعة والترقية للشبكات الحالية</li>
                    </ul>
                </div>
            </div>

            <div class="text-center">
                <a href="{{ url('/تواصل-معنا') }}" class="inline-block bg-[#1782a4] text-white px-8 py-3 rounded-full hover:bg-[#0e5f75] transition font-semibold text-lg">
                    تواصل معنا الآن
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
