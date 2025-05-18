@extends('layouts.app')

@section('title', 'حلول الأمن السيبراني - Medcom')

@section('content')
<!-- Hero Section with Background Image -->
<section class="relative py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/cybersecurity-bg.jpg') }}" alt="خلفية الأمن السيبراني" 
             class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">حلول الأمن السيبراني</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                حماية متكاملة ضد التهديدات الإلكترونية الحديثة
            </span>
        </p>
    </div>
</section>

<!-- Cybersecurity Solutions Section -->
<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Solution 1 -->
            <div class="flex flex-col md:flex-row gap-8 mb-12 items-center">
                <div class="md:w-1/3 bg-gray-100 dark:bg-slate-700 p-6 rounded-lg shadow-md text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    <h3 class="text-xl font-bold text-[#1a5a72]">جدار الحماية</h3>
                </div>
                <div class="md:w-2/3">
                    <h2 class="text-2xl font-bold text-[#1a5a72] mb-4">الجيل الحديث من جدار الحماية</h2>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                        للحفاظ على الصدارة في مواجهة المهاجمين وتوفير الحماية لشبكتك، ندير جدار حماية من الجيل الحديث (NGFW) لمراقبة المرور على شبكتك وحظر أي تدخل خطر باستخدام وظائف متطورة لتصفية الأجهزة الشبكية وعمليات الفحص العميقة المتوازية لحزم البيانات ونُظم منع التسلل.
                    </p>
                </div>
            </div>
            
            <!-- Solution 2 -->
            <div class="flex flex-col md:flex-row gap-8 mb-12 items-center">
                <div class="md:w-1/3 bg-gray-100 dark:bg-slate-700 p-6 rounded-lg shadow-md text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                    <h3 class="text-xl font-bold text-[#1a5a72]">منع التسلل</h3>
                </div>
                <div class="md:w-2/3">
                    <h2 class="text-2xl font-bold text-[#1a5a72] mb-4">الجيل الحديث من نظام منع التسلل</h2>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                        يقدم الجيل الحديث من نظام منع التسلل (NIPS) لك حماية مطلوبة بشدة من التهديدات التي تظهر. فهو قادر على تحديد التطبيقات وسلوك الاستخدام في شبكاتك الداخلية لكي يرصد النشاط المريب مع إنتاج أقل قدر ممكن من التنبيهات الزائفة من دون التأثير على مسار عملك.
                    </p>
                </div>
            </div>
            
            <!-- Solution 3 -->
            <div class="flex flex-col md:flex-row gap-8 mb-12 items-center">
                <div class="md:w-1/3 bg-gray-100 dark:bg-slate-700 p-6 rounded-lg shadow-md text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                    <h3 class="text-xl font-bold text-[#1a5a72]">VPN</h3>
                </div>
                <div class="md:w-2/3">
                    <h2 class="text-2xl font-bold text-[#1a5a72] mb-4">الوصول الآمن عن بُعد (شبكة VPN)</h2>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                        تقدم شبكة VPN إمكانية الوصول الآمن عن بُعد إلى شبكتك وخوادمك مما يضمن إمكانية وصول موظفيك بطريقة آمنة إلى الإنترنت (من خلال أنبوب مشفر) من دون تعريض بيانات مهمة للخطر. المعايير الأهم لشبكة VPN هي: السرعة والاعتمادية وجودة التشفير والدعم العالمي ودعم العملاء.
                    </p>
                </div>
            </div>
            
            <!-- Solution 4 -->
            <div class="flex flex-col md:flex-row gap-8 mb-12 items-center">
                <div class="md:w-1/3 bg-gray-100 dark:bg-slate-700 p-6 rounded-lg shadow-md text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                    </svg>
                    <h3 class="text-xl font-bold text-[#1a5a72]">مكافحة البرمجيات الضارة</h3>
                </div>
                <div class="md:w-2/3">
                    <h2 class="text-2xl font-bold text-[#1a5a72] mb-4">مكافحة البرمجيات الضارة والحماية من التهديدات المتقدمة</h2>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                        لضمان حصولك على الحماية الكاملة والأكثر تقدمًا، فإن مكافحة البرمجيات الضارة والحماية من التهديد المتقدم المستمر عبارة عن خدمة تنطوي على حماية متقدمة من البرمجيات الضارة تدافع عن نظمك في مواجهة هجمات مختلطة (مزيج من الفيروسات والبريد العشوائي والتصيد الاحتيالي وغير ذلك) والبرمجيات الضارة المعقدة والهجمات المعتمدة على الاختراق.
                    </p>
                </div>
            </div>
            
            <!-- Solution 5 -->
            <div class="flex flex-col md:flex-row gap-8 mb-12 items-center">
                <div class="md:w-1/3 bg-gray-100 dark:bg-slate-700 p-6 rounded-lg shadow-md text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <h3 class="text-xl font-bold text-[#1a5a72]">التحكم في الوصول</h3>
                </div>
                <div class="md:w-2/3">
                    <h2 class="text-2xl font-bold text-[#1a5a72] mb-4">التحكم في الوصول إلى الشبكة (NAC)</h2>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                        تساعد شركتنا مؤسستك على تنفيذ سياسات للتحكم في الأجهزة ووصول المستخدمين إلى شبكتك. وذلك عن طريق السماح بالوصول المصرح به فقط وفرض الالتزام الأمني على الأجهزة.
                    </p>
                </div>
            </div>
            
            <!-- Solution 6 -->
            <div class="flex flex-col md:flex-row gap-8 items-center">
                <div class="md:w-1/3 bg-gray-100 dark:bg-slate-700 p-6 rounded-lg shadow-md text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                    <h3 class="text-xl font-bold text-[#1a5a72]">حماية من هجمات DDoS</h3>
                </div>
                <div class="md:w-2/3">
                    <h2 class="text-2xl font-bold text-[#1a5a72] mb-4">التقليل من هجمات تعطيل الخدمة</h2>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                        تُستخدم هجمات تعطيل الخدمة والهجمات الموزعة لتعطيل الخدمة لقطع أو تعليق الخدمات على خادم مضيف في محاولة لمنع توفير خدمة عبر الإنترنت للمستخدمين. ستعمل شركتنا على حماية خوادمك من هذه الهجمات الضارة باستخدام أدوات واستراتيجيات متقدمة ضد الأنواع المختلفة من هجمات تعطيل الخدمة.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 bg-[#1a5a72] dark:bg-slate-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-6">هل تحتاج إلى حلول أمن سيبراني متكاملة؟</h2>
        <p class="mb-8 max-w-2xl mx-auto text-lg">
            خبراؤنا جاهزون لتوفير الحماية المثالية لشبكتك وبياناتك
        </p>
        <a href="/اتصل-بنا" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
            اتصل بنا الآن
        </a>
    </div>
</section>
@endsection
