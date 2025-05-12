@extends('layouts.app')

@section('title', 'الوظائف - Medcom')

@section('content')
<!-- Hero Section with Background Image -->
<section class="relative py-20 text-white overflow-hidden">
    <!-- Background Layers -->
    <div class="absolute inset-0 z-0">
        <!-- Background Image -->
        <img src="{{ asset('images/careers-bg.jpg') }}" alt="خلفية صفحة الوظائف" 
             class="w-full h-full object-cover object-center">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    
    <!-- Content -->
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">نحن نبحث دائمًا عن المواهب المتميزة</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                انضم إلى فريقنا المتميز
            </span>
        </p>
    </div>
</section>

<!-- Careers Intro Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-right">
            <h2 class="text-2xl font-bold text-[#1a5a72] mb-6">فرص للتميز والنمو</h2>
            <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                إذا كنت ترغب في العمل في بيئة تعاونية حيث يتم توفير الفرص، وتطوير المهارات ومكافأة المتميزين، فقد تكون بالضبط ما نبحث عنه. لمعرفة ذلك، راجع هذه الصفحة لمعرفة المزيد عن فرص العمل الدائمة والمؤقتة والمتخصصة.
            </p>
            
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <div class="bg-[#f8fafc] p-6 rounded-lg border-r-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">مميزات العمل معنا</h3>
                    <ul class="list-disc pr-5 space-y-2 text-gray-700">
                        <li>تأمين صحي شامل</li>
                        <li>التأمين على الحياة والعجز</li>
                        <li>برامج التطوير المهني</li>
                        <li>إجازة مرضية مدفوعة الأجر</li>
                        <li>إجازات سنوية مميزة</li>
                    </ul>
                </div>
                
                <div class="bg-[#f8fafc] p-6 rounded-lg border-r-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">بيئة العمل</h3>
                    <ul class="list-disc pr-5 space-y-2 text-gray-700">
                        <li>فرص للتقدم الوظيفي</li>
                        <li>بيئة عمل محفزة</li>
                        <li>تدريب مستمر</li>
                        <li>مرونة في بعض الوظائف</li>
                        <li>مكافآت وحوافز مميزة</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Available Positions Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">الوظائف المتاحة</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <!-- Job Position 1 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all mb-6">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div class="text-right mb-4 md:mb-0">
                            <h3 class="text-xl font-bold text-[#1a5a72]">مدير قسم</h3>
                            <p class="text-gray-600">إدارة فريق العمل وتنفيذ الاستراتيجيات</p>
                        </div>
                        <div class="bg-[#f8fafc] px-4 py-2 rounded-lg">
                            <span class="font-bold text-[#1a5a72]">الراتب: 5500 - 6075</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Job Position 2 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all mb-6">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div class="text-right mb-4 md:mb-0">
                            <h3 class="text-xl font-bold text-[#1a5a72]">مسؤول عهدة أول</h3>
                            <p class="text-gray-600">إدارة العهدة والمستودعات</p>
                        </div>
                        <div class="bg-[#f8fafc] px-4 py-2 rounded-lg">
                            <span class="font-bold text-[#1a5a72]">الراتب: 5000 - 5400</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Job Position 3 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all mb-6">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div class="text-right mb-4 md:mb-0">
                            <h3 class="text-xl font-bold text-[#1a5a72]">مسؤول صيانة صرافة</h3>
                            <p class="text-gray-600">صيانة أجهزة الصراف الآلي</p>
                        </div>
                        <div class="bg-[#f8fafc] px-4 py-2 rounded-lg">
                            <span class="font-bold text-[#1a5a72]">الراتب: 4500 - 5000</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Job Position 4 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all mb-6">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div class="text-right mb-4 md:mb-0">
                            <h3 class="text-xl font-bold text-[#1a5a72]">مسؤول عهدة سائق</h3>
                            <p class="text-gray-600">نقل العهدة وإدارتها</p>
                        </div>
                        <div class="bg-[#f8fafc] px-4 py-2 rounded-lg">
                            <span class="font-bold text-[#1a5a72]">الراتب: 4000 - 4725</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Job Position 5 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all mb-6">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div class="text-right mb-4 md:mb-0">
                            <h3 class="text-xl font-bold text-[#1a5a72]">مناوب عمليات</h3>
                            <p class="text-gray-600">متابعة العمليات التشغيلية</p>
                        </div>
                        <div class="bg-[#f8fafc] px-4 py-2 rounded-lg">
                            <span class="font-bold text-[#1a5a72]">الراتب: 5500 - 6000</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Job Position 6 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all mb-6">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div class="text-right mb-4 md:mb-0">
                            <h3 class="text-xl font-bold text-[#1a5a72]">مسؤول عهدة أول (نقل أموال)</h3>
                            <p class="text-gray-600">إدارة عمليات نقل الأموال</p>
                        </div>
                        <div class="bg-[#f8fafc] px-4 py-2 rounded-lg">
                            <span class="font-bold text-[#1a5a72]">الراتب: 5500 - 6075</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Job Position 7 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all mb-6">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div class="text-right mb-4 md:mb-0">
                            <h3 class="text-xl font-bold text-[#1a5a72]">مسؤول عهدة أول (تغذية صرافات)</h3>
                            <p class="text-gray-600">إدارة عمليات تغذية الصرافات الآلية</p>
                        </div>
                        <div class="bg-[#f8fafc] px-4 py-2 rounded-lg">
                            <span class="font-bold text-[#1a5a72]">الراتب: 6500 - 6750</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Job Position 8 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all mb-6">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div class="text-right mb-4 md:mb-0">
                            <h3 class="text-xl font-bold text-[#1a5a72]">رجل أمن</h3>
                            <p class="text-gray-600">توفير الحماية والأمن للمنشآت</p>
                        </div>
                        <div class="bg-[#f8fafc] px-4 py-2 rounded-lg">
                            <span class="font-bold text-[#1a5a72]">الراتب: 3000 - 4000</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Job Position 9 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all mb-6">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div class="text-right mb-4 md:mb-0">
                            <h3 class="text-xl font-bold text-[#1a5a72]">مشرف أمن</h3>
                            <p class="text-gray-600">إشراف على فرق الأمن</p>
                        </div>
                        <div class="bg-[#f8fafc] px-4 py-2 rounded-lg">
                            <span class="font-bold text-[#1a5a72]">الراتب: 4000 - 5000</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Job Position 10 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all mb-6">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div class="text-right mb-4 md:mb-0">
                            <h3 class="text-xl font-bold text-[#1a5a72]">أخصائي نقد تعبئة</h3>
                            <p class="text-gray-600">إدارة عمليات تعبئة النقد</p>
                        </div>
                        <div class="bg-[#f8fafc] px-4 py-2 rounded-lg">
                            <span class="font-bold text-[#1a5a72]">الراتب: 4500 - 5000</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Job Position 11 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all mb-6">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div class="text-right mb-4 md:mb-0">
                            <h3 class="text-xl font-bold text-[#1a5a72]">مشرف نقد</h3>
                            <p class="text-gray-600">إشراف على عمليات النقد</p>
                        </div>
                        <div class="bg-[#f8fafc] px-4 py-2 rounded-lg">
                            <span class="font-bold text-[#1a5a72]">الراتب: 4500 - 5000</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Job Position 12 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all mb-6">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div class="text-right mb-4 md:mb-0">
                            <h3 class="text-xl font-bold text-[#1a5a72]">مساعد منسق</h3>
                            <p class="text-gray-600">مساعدة في تنسيق العمليات</p>
                        </div>
                        <div class="bg-[#f8fafc] px-4 py-2 rounded-lg">
                            <span class="font-bold text-[#1a5a72]">الراتب: 5500 - 6000</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Job Position 13 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all mb-6">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div class="text-right mb-4 md:mb-0">
                            <h3 class="text-xl font-bold text-[#1a5a72]">منسق مصرفي</h3>
                            <p class="text-gray-600">تنسيق العمليات المصرفية</p>
                        </div>
                        <div class="bg-[#f8fafc] px-4 py-2 rounded-lg">
                            <span class="font-bold text-[#1a5a72]">الراتب: 5500 - 6000</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Job Position 14 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all mb-6">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div class="text-right mb-4 md:mb-0">
                            <h3 class="text-xl font-bold text-[#1a5a72]">أخصائي مساندة</h3>
                            <p class="text-gray-600">تقديم الدعم الفني والإداري</p>
                        </div>
                        <div class="bg-[#f8fafc] px-4 py-2 rounded-lg">
                            <span class="font-bold text-[#1a5a72]">الراتب: 5000 - 5500</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Job Position 15 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all mb-6">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div class="text-right mb-4 md:mb-0">
                            <h3 class="text-xl font-bold text-[#1a5a72]">مناوب مركز مراقبة وتحكم</h3>
                            <p class="text-gray-600">مراقبة العمليات من مركز التحكم</p>
                        </div>
                        <div class="bg-[#f8fafc] px-4 py-2 rounded-lg">
                            <span class="font-bold text-[#1a5a72]">الراتب: 5000 - 5250</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How to Apply Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/2">
                <img src="{{ asset('images/apply-job.jpg') }}" alt="كيفية التقديم على الوظائف" class="rounded-lg shadow-xl w-full">
            </div>
            <div class="md:w-1/2 text-right">
                <h2 class="text-2xl font-bold text-[#1a5a72] mb-4">كيف تتقدم للوظيفة؟</h2>
                <p class="text-gray-700 mb-4">
                    نرحب بطلبات التوظيف من الموهوبين الذين يبحثون عن فرصة للنمو والتطور في بيئة عمل ديناميكية.
                </p>
                <ol class="list-decimal pr-5 space-y-3 text-gray-700">
                    <li>اختر الوظيفة المناسبة لمهاراتك وخبراتك</li>
                    <li>أعد سيرتك الذاتية بشكل واضح ومختصر</li>
                    <li>أرسل سيرتك الذاتية عبر النموذج المخصص</li>
                    <li>سنقوم بالاتصال بالمرشحين المناسبين لإجراء المقابلات</li>
                </ol>
                <div class="mt-8">
                    <a href="/التوظيف/تقديم" class="inline-block bg-[#1a5a72] text-white font-bold py-3 px-8 rounded-full hover:bg-[#1a6d8a] transition-all shadow-lg hover:shadow-xl">
                        إرسال السيرة الذاتية
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 bg-[#1a5a72] text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-6">للمزيد من المعلومات</h2>
        <p class="mb-8 max-w-2xl mx-auto text-lg">
            تواصل مع قسم الموارد البشرية للاستفسار عن الوظائف المتاحة
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="tel:+966558008895" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl">
                اتصل بنا: 
00966558008895
            </a>
            <a href="mailto:info@medcom.it.com" class="inline-block bg-transparent border-2 border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white/10 transition-all shadow-lg hover:shadow-xl">
                البريد الإلكتروني
            </a>
        </div>
    </div>
</section>
@endsection