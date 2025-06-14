@extends('layouts.app')

@section('title', 'خدماتنا المتكاملة - Medcom')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90 py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/services-hero.jpg') }}" alt="خلفية خدماتنا" class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-black/40"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10 py-12">
        <div class="max-w-3xl text-right">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">حلولنا التقنية الشاملة</h1>
            <p class="text-xl md:text-2xl leading-relaxed mb-8">
                نقدم مجموعة متكاملة من الحلول التقنية المصممة خصيصاً لتحقيق كفاءة أعلى وأداء مميز لعملك
            </p>
            <a href="#services-cards" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg">
                اكتشف خدماتنا
            </a>
        </div>
    </div>
</section>

<!-- Services Cards Section -->
<section id="services-cards" class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-4">خدماتنا التقنية المتكاملة</h2>
            <div class="w-24 h-1 bg-[#55aabb] mx-auto mb-6"></div>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                حلول مصممة باحترافية لتلبية جميع احتياجات عملك في مختلف القطاعات
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($services as $service)
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72] flex flex-col"
                 data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <img src="{{ asset('images/services/' . $service->slug . '.jpg') }}"
                     onerror="this.src='{{ asset('images/services/default.jpg') }}'"
                     alt="{{ $service->title }}"
                     class="w-full h-48 object-cover">

                <div class="p-6 flex flex-col justify-between flex-grow">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-4">{{ $service->title }}</h3>
                    <div class="mt-auto">
                        <a href="{{ url('/الخدمات/' . $service->slug) }}"
                           class="inline-block bg-[#1a5a72] text-white px-4 py-2 rounded hover:bg-[#155768] transition-all duration-200 shadow-md">
                            عرض التفاصيل
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Service Booking Section -->
<section class="py-16 bg-white dark:bg-slate-800">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-4">حجز خدمة</h2>
            <div class="w-24 h-1 bg-[#55aabb] mx-auto mb-6"></div>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-8">
                للتواصل المباشر وحجز أي من خدماتنا عبر واتساب
            </p>
            
           
            <a href="https://wa.me/966558008895?text=مرحباً، أريد حجز خدمة من موقع Medcom" 
               target="_blank"
               class="inline-flex items-center justify-center bg-green-500 text-white font-bold py-4 px-8 rounded-full hover:bg-green-600 transition-all shadow-lg hover:shadow-xl">
                <i class="fab fa-whatsapp text-2xl ml-2"></i>
                انقر هنا للحجز عبر واتساب
            </a>
            
            <div class="mt-8 text-gray-500 dark:text-gray-400">
                <p>أو تواصل معنا على الرقم: <span class="font-bold">+966 55 800 8895</span></p>
            </div>
        </div>
    </div>
</section>
<!-- Features Section -->
<section class="py-16 bg-white dark:bg-slate-800">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center mb-16">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-4">لماذا تختار Medcom؟</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto mb-6"></div>
            <p class="text-lg text-gray-600 dark:text-gray-300">
                نقدم حلولاً تقنية متكاملة بمعايير عالمية مع الحفاظ على الخصوصية والجودة
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-50 dark:bg-slate-700 p-8 rounded-xl text-center">
                <div class="bg-[#1a5a72]/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-star text-[#1a5a72] text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-[#1a5a72] mb-3">جودة عالية</h3>
                <p class="text-gray-600 dark:text-gray-500">منتجات وخدمات بمعايير جودة عالمية</p>
            </div>
            
            <div class="bg-gray-50 dark:bg-slate-700 p-8 rounded-xl text-center">
                <div class="bg-[#1a5a72]/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-headset text-[#1a5a72] text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-[#1a5a72] mb-3">دعم فني</h3>
                <p class="text-gray-600 dark:text-gray-500">فريق دعم فني متاح على مدار الساعة</p>
            </div>
            
            <div class="bg-gray-50 dark:bg-slate-700 p-8 rounded-xl text-center">
                <div class="bg-[#1a5a72]/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shield-alt text-[#1a5a72] text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-[#1a5a72] mb-3">حماية وأمان</h3>
                <p class="text-gray-600 dark:text-gray-500">حلول أمنية متكاملة لحماية بياناتك</p>
            </div>
        </div>
    </div>
</section>


</section>
@endsection
