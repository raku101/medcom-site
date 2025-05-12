@extends('layouts.app')

@section('title', 'الانتقال إلى السحابة - Medcom')

@section('content')
<!-- Hero Section with Background Image -->
<section class="relative py-20 text-white overflow-hidden">
    <!-- Background Layers -->
    <div class="absolute inset-0 z-0">
        <!-- Background Image -->
        <img src="{{ asset('images/cloud-bg.jpg') }}" alt="خلفية الانتقال إلى السحابة" 
             class="w-full h-full object-cover object-center">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    
    <!-- Content -->
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">الانتقال إلى السحابة</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                حلول سحابية متكاملة لأعمال أكثر مرونة وكفاءة
            </span>
        </p>
    </div>
</section>

<!-- Cloud Introduction Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-right">
            <h2 class="text-2xl font-bold text-[#1a5a72] mb-6">ما هو الانتقال إلى السحابة؟</h2>
            <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                عندما تختار شركة "الانتقال إلى السحابة"، فهذا يعني أن البنية التحتية لتكنولوجيا المعلومات لديها يتم تخزينها خارج الموقع، في مركز بيانات يتم صيانته بواسطة مزوّد خدمة الحوسبة السحابية.
            </p>
            
            <div class="bg-[#f8fafc] p-6 rounded-lg border-r-4 border-[#1a9ba4] mb-8">
                <p class="text-gray-700">
                    يتحمل موفرو الخدمات السحابية الرائدون في المجال مسؤولية إدارة البنية التحتية لتكنولوجيا المعلومات وتكامل التطبيقات وتطوير الوظائف والقدرات الجديدة الخاصة بالعميل من أجل الحفاظ على مواكبة متطلبات السوق.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">مزايا الحوسبة السحابية</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Benefit 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-all">
                <div class="w-16 h-16 bg-[#1a5a72]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a9ba4]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1a5a72] mb-2">المرونة والتوسع</h3>
                <p class="text-gray-600">الوصول السريع إلى الموارد حسب الحاجة دون استثمارات مسبقة كبيرة</p>
            </div>
            
            <!-- Benefit 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-all">
                <div class="w-16 h-16 bg-[#1a5a72]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a9ba4]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1a5a72] mb-2">الموثوقية والأمان</h3>
                <p class="text-gray-600">بنية تحتية محمية بإجراءات أمان متقدمة ونسخ احتياطي تلقائي</p>
            </div>
            
            <!-- Benefit 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-all">
                <div class="w-16 h-16 bg-[#1a5a72]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a9ba4]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1a5a72] mb-2">توفير التكاليف</h3>
                <p class="text-gray-600">دفع فقط مقابل ما تستخدمه دون تكاليف صيانة البنية التحتية</p>
            </div>
        </div>
    </div>
</section>

<!-- Cloud Services Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">حلولنا السحابية</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Service 1 -->
            <div class="flex items-start gap-6">
                <div class="bg-[#1a5a72]/10 p-3 rounded-full flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                    </svg>
                </div>
                <div class="text-right">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-2">البنية التحتية كخدمة (IaaS)</h3>
                    <p class="text-gray-700">توفير موارد الحوسبة الأساسية مثل الخوادم الافتراضية والتخزين والشبكات</p>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="flex items-start gap-6">
                <div class="bg-[#1a5a72]/10 p-3 rounded-full flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                    </svg>
                </div>
                <div class="text-right">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-2">المنصة كخدمة (PaaS)</h3>
                    <p class="text-gray-700">بيئة تطوير كاملة في السحابة لتطوير وتشغيل التطبيقات</p>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="flex items-start gap-6">
                <div class="bg-[#1a5a72]/10 p-3 rounded-full flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <div class="text-right">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-2">البرمجيات كخدمة (SaaS)</h3>
                    <p class="text-gray-700">تطبيقات جاهزة للاستخدام عبر الإنترنت بدون حاجة للتثبيت</p>
                </div>
            </div>
            
            <!-- Service 4 -->
            <div class="flex items-start gap-6">
                <div class="bg-[#1a5a72]/10 p-3 rounded-full flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <div class="text-right">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-2">التخزين السحابي</h3>
                    <p class="text-gray-700">مساحات تخزين آمنة وقابلة للتوسع مع إمكانية الوصول من أي مكان</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Migration Process Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">عملية الانتقال إلى السحابة</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <div class="flex flex-col md:flex-row gap-8 mb-12 items-center">
                <div class="md:w-1/3 bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-4xl font-bold text-[#1a5a72] mb-4">1</div>
                    <h3 class="text-xl font-bold text-[#1a5a72]">التقييم والتخطيط</h3>
                </div>
                <div class="md:w-2/3 text-right">
                    <p class="text-gray-700 leading-relaxed">
                        نقوم بتحليل البنية التحتية الحالية وتحديد أحمال العمل المناسبة للانتقال إلى السحابة، مع وضع خطة متكاملة للهجرة.
                    </p>
                </div>
            </div>
            
            <div class="flex flex-col md:flex-row gap-8 mb-12 items-center">
                <div class="md:w-1/3 bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-4xl font-bold text-[#1a5a72] mb-4">2</div>
                    <h3 class="text-xl font-bold text-[#1a5a72]">تصميم الحل السحابي</h3>
                </div>
                <div class="md:w-2/3 text-right">
                    <p class="text-gray-700 leading-relaxed">
                        نصمم بنية سحابية مخصصة تلبي احتياجات عملك، مع مراعاة الأمان والأداء والتكلفة.
                    </p>
                </div>
            </div>
            
            <div class="flex flex-col md:flex-row gap-8 items-center">
                <div class="md:w-1/3 bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-4xl font-bold text-[#1a5a72] mb-4">3</div>
                    <h3 class="text-xl font-bold text-[#1a5a72]">التنفيذ والدعم</h3>
                </div>
                <div class="md:w-2/3 text-right">
                    <p class="text-gray-700 leading-relaxed">
                        ننفذ عملية الانتقال بسلاسة مع توفير الدعم الكامل والتدريب لفريقك لضمان الاستفادة القصوى من الحل السحابي.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 bg-[#1a5a72] text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-6">جاهز للانتقال إلى السحابة؟</h2>
        <p class="mb-8 max-w-2xl mx-auto text-lg">
            تواصل مع خبرائنا لبدء رحلة التحول الرقمي لعملك
        </p>
        <a href="/اتصل-بنا" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
            ابدأ الآن
        </a>
    </div>
</section>
@endsection