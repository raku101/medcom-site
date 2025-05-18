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

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- بطاقة 1: أجهزة الحضور والإنصراف -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6 h-full flex flex-col">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-lg mr-3">
                            <i class="fas fa-fingerprint text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">أجهزة الحضور والإنصراف</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700 dark:text-gray-300 flex-grow">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أجهزة بصمة الوجه</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أجهزة بصمة الأصبع</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أنظمة الحضور عبر بطاقة RFID</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أنظمة التقارير والإحصائيات</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- بطاقة 2: الشاشات -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6 h-full flex flex-col">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-lg mr-3">
                            <i class="fas fa-tv text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">الشاشات</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700 dark:text-gray-300 flex-grow">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>شاشات اعلانية</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>شاشات سمارت</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>شاشات سحابية</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>شاشات منيو المطاعم</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>شاشات العرض الذكي</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>شاشات تفاعلية</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- بطاقة 3: أنظمة الكاشير -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6 h-full flex flex-col">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-lg mr-3">
                            <i class="fas fa-cash-register text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">أنظمة الكاشير</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700 dark:text-gray-300 flex-grow">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أنظمة كاشير للمطاعم</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أنظمة كاشير للتجزئة</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أنظمة كاشير للمبيعات عبر الإنترنت</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أجهزة كاشير محمولة</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- بطاقة 4: أنظمة الصفوف -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6 h-full flex flex-col">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-lg mr-3">
                            <i class="fas fa-people-arrows text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">أنظمة الصفوف</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700 dark:text-gray-300 flex-grow">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أنظمة إدارة الصفوف الذكية</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أنظمة الحجز المسبق</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أنظمة التتبع والإبلاغ</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أنظمة تخصيص التوزيع الذكي</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- بطاقة 5: أنظمة الإنذار والسلامة -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6 h-full flex flex-col">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-lg mr-3">
                            <i class="fas fa-fire-extinguisher text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">أنظمة الإنذار والسلامة</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700 dark:text-gray-300 flex-grow">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أنظمة إنذار الحريق</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>مستشعرات الدخان والحرارة</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أجهزة إنذار الغاز</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- بطاقة 6: أنظمة المنازل الذكية -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6 h-full flex flex-col">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-lg mr-3">
                            <i class="fas fa-home text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">أنظمة المنازل الذكية</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700 dark:text-gray-300 flex-grow">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أنظمة الإضاءة الذكية</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>التحكم في درجات الحرارة</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أنظمة الصوت الذكية</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- بطاقة 7: الأنظمة الصوتية والبصرية -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6 h-full flex flex-col">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-lg mr-3">
                            <i class="fas fa-volume-up text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">الأنظمة الصوتية والبصرية</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700 dark:text-gray-300 flex-grow">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>مكبرات الصوت</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أنظمة مكبرات الصوت المتكاملة</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- بطاقة 8: أجهزة التتبع والمراقبة -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6 h-full flex flex-col">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-lg mr-3">
                            <i class="fas fa-map-marked-alt text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">أجهزة التتبع والمراقبة</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700 dark:text-gray-300 flex-grow">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أجهزة تتبع المركبات</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أنظمة التتبع الشخصية</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أجهزة مراقبة الأصول</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>انظمة ادارة اسطول المركبات</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- بطاقة 9: عقود الصيانة السنوية والدورية -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6 h-full flex flex-col">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-lg mr-3">
                            <i class="fas fa-tools text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">عقود الصيانة السنوية والدورية</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700 dark:text-gray-300 flex-grow">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>صيانة الشاشات والأجهزة الإلكترونية</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>صيانة الأنظمة التقنية</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>صيانة أنظمة الطاقة الشمسية</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>صيانة البرمجيات والتحديثات</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- بطاقة 10: أنظمة التحكم في الدخول والبوابات الأمنية -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6 h-full flex flex-col">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-lg mr-3">
                            <i class="fas fa-door-open text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">أنظمة التحكم في الدخول والبوابات الأمنية</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700 dark:text-gray-300 flex-grow">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>اجهزة التحكم في الأبواب المنزلية والفيلات</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>بوابات دخول الأفراد</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>بوابات تفتيش الحقائب والمعادن</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>اجهزة الأقفال الذكية</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>حواجز مواقف السيارات</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>بوابات أمنية لمواقف السيارات</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- بطاقة 11: أنظمة المراقبة الأمنية -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6 h-full flex flex-col">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-lg mr-3">
                            <i class="fas fa-video text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">أنظمة المراقبة الأمنية</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700 dark:text-gray-300 flex-grow">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>كاميرات مراقبة متحركة</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>كاميرات المراقبة الداخلية</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>كاميرات المراقبة الخارجية</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أنظمة التسجيل الرقمية</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أجهزة الإنذار ضد السرقة</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>BMS</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- بطاقة 12: أنظمة الاتصالات -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6 h-full flex flex-col">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-lg mr-3">
                            <i class="fas fa-phone-alt text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">أنظمة الاتصالات</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700 dark:text-gray-300 flex-grow">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>تأسيس السنترالات</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أنظمة السنترالات الهاتفية (IP PBX)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أنظمة مؤتمرات الفيديو</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أجهزة الاتصال الداخلي</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- بطاقة 13: حلول الشبكات والسيرفرات -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6 h-full flex flex-col">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-lg mr-3">
                            <i class="fas fa-network-wired text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">حلول الشبكات والسيرفرات</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700 dark:text-gray-300 flex-grow">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>موجهات (Routers)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>مفاتيح شبكة (Switches)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أنظمة الشبكات اللاسلكية (Wi-Fi)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>سيرفرات امن المعلومات</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- بطاقة 14: إدارة المشاريع التقنية -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6 h-full flex flex-col">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-lg mr-3">
                            <i class="fas fa-project-diagram text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">إدارة المشاريع التقنية</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700 dark:text-gray-300 flex-grow">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>حلول متكاملة لإدارة المشاريع التقنية</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>تخطيط وتنفيذ المشاريع التقنية</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>متابعة وتقييم الأداء</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- بطاقة 15: حلول الامن السيبراني -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6 h-full flex flex-col">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-lg mr-3">
                            <i class="fas fa-shield-alt text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">حلول الامن السيبراني</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700 dark:text-gray-300 flex-grow">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>حماية الأنظمة والشبكات</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>حلول مكافحة الاختراقات</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>أنظمة كشف التسلل</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- بطاقة 16: تطوير المواقع -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6 h-full flex flex-col">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-lg mr-3">
                            <i class="fas fa-code text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">تطوير المواقع</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700 dark:text-gray-300 flex-grow">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>تصميم مواقع الويب</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>تطوير تطبيقات الويب</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#55aabb] mt-1 mr-2 text-sm"></i>
                            <span>حلول التجارة الإلكترونية</span>
                        </li>
                    </ul>
                </div>
            </div>
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
                <p class="text-gray-600 dark:text-gray-300">منتجات وخدمات بمعايير جودة عالمية</p>
            </div>
            
            <div class="bg-gray-50 dark:bg-slate-700 p-8 rounded-xl text-center">
                <div class="bg-[#1a5a72]/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-headset text-[#1a5a72] text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-[#1a5a72] mb-3">دعم فني</h3>
                <p class="text-gray-600 dark:text-gray-300">فريق دعم فني متاح على مدار الساعة</p>
            </div>
            
            <div class="bg-gray-50 dark:bg-slate-700 p-8 rounded-xl text-center">
                <div class="bg-[#1a5a72]/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shield-alt text-[#1a5a72] text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-[#1a5a72] mb-3">حماية وأمان</h3>
                <p class="text-gray-600 dark:text-gray-300">حلول أمنية متكاملة لحماية بياناتك</p>
            </div>
        </div>
    </div>
</section>


</section>
@endsection