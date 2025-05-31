@extends('layouts.app')

@section('title', 'حلولنا - Medcom')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90 py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/solutions-hero.jpg') }}" alt="خلفية الحلول" class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-black/40"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10 py-12">
        <div class="max-w-3xl text-right">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">حلولنا التقنية</h1>
            <p class="text-xl md:text-2xl leading-relaxed mb-8">مجموعة من الحلول المتقدمة لتلبية احتياجاتك التقنية</p>
        </div>
    </div>
</section>

<!-- Solutions Grid -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-4">استعرض حلولنا</h2>
            <div class="w-24 h-1 bg-[#55aabb] mx-auto mb-6"></div>
            <p class="text-lg text-gray-600 dark:text-gray-300">اضغط على أي حل للاطلاع على التفاصيل</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $solutions = [
                    ['title' => 'حلول الشبكات', 'image' => 'networks.jpg', 'url' => route('solutions.network')],
                    ['title' => 'الحوسبة الافتراضية', 'image' => 'virtualization.jpg', 'url' => route('solutions.virtualization')],
                    ['title' => 'الأنظمة الأمنية المتكاملة', 'image' => 'security.jpg', 'url' => route('solutions.security')],
                    ['title' => 'نظام إدارة وتنظيم الدور', 'image' => 'queue.jpg', 'url' => route('solutions.queue')],
                    ['title' => 'أنظمة المباني الذكية', 'image' => 'smart-building.jpg', 'url' => route('solutions.smartbuilding')],
                    ['title' => 'الصوتيات والإذاعة', 'image' => 'audio.jpg', 'url' => route('solutions.audio')],
                    ['title' => 'السلامة المهنية', 'image' => 'safety.jpg', 'url' => route('solutions.safety')],
                    ['title' => 'الربط والتكامل', 'image' => 'integration.jpg', 'url' => route('solutions.integration')],
                    ['title' => 'حلول الكلاود', 'image' => 'cloud.jpg', 'url' => route('solutions.cloud')],
                    ['title' => 'برامج الحماية', 'image' => 'security-software.jpg', 'url' => route('solutions.securitysoftware')],
                    ['title' => 'التتبع وإدارة الأساطيل', 'image' => 'tracking.jpg', 'url' => route('solutions.tracking')],
                ];
            @endphp

            @foreach($solutions as $solution)
                <a href="{{ $solution['url'] }}" class="block bg-white dark:bg-slate-800 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 group">
                    <img src="{{ asset('images/solutions/' . $solution['image']) }}" alt="{{ $solution['title'] }}" class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-bold text-[#1a5a72] group-hover:text-[#0e3c4d]">{{ $solution['title'] }}</h3>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endsection
