@extends('layouts.app')

@section('title', 'خدمة أعمال الكهرباء - Medcom')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">حلول كهربائية متكاملة باحترافية عالية</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                كهرباء آمنة بكفاءة عالية لجميع احتياجاتك
            </span>
        </p>
    </div>
</section>

<!-- Services Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">خدماتنا الكهربائية المتكاملة</h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                نقدم حلولاً كهربائية شاملة بأعلى معايير الجودة والسلامة
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-white dark:bg-slate-800/90 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-[#1a5a72]">تمديدات كهربائية</h3>
                <p class="text-gray-600 dark:text-gray-600">
                    تصميم وتنفيذ شبكات الكهرباء للمنازل، الشركات، والمصانع وفق أحدث المواصفات والمعايير العالمية.
                </p>
            </div>

            <!-- Service 2 -->
            <div class="bg-white dark:bg-slate-800/90 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-[#1a5a72]">تركيب لوحات توزيع</h3>
                <p class="text-gray-600 dark:text-gray-600">
                    تركيب لوحات توزيع كهربائية ذكية مع أنظمة حماية متكاملة ضد التجاوزات الكهربائية.
                </p>
            </div>

            <!-- Service 3 -->
            <div class="bg-white dark:bg-slate-800/90 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-[#1a5a72]">أنظمة الإنارة الذكية</h3>
                <p class="text-gray-600 dark:text-gray-600">
                    تركيب أنظمة إنارة ذكية قابلة للبرمجة والتحكم عن بعد لتوفير الطاقة وزيادة الراحة.
                </p>
            </div>

            <!-- Service 4 -->
            <div class="bg-white dark:bg-slate-800/90 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-[#1a5a72]">الكشف عن الأعطال</h3>
                <p class="text-gray-600 dark:text-gray-600">
                    استخدام أحدث الأجهزة للكشف الدقيق عن الأعطال الكهربائية وإصلاحها باحترافية.
                </p>
            </div>

            <!-- Service 5 -->
            <div class="bg-white dark:bg-slate-800/90 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-[#1a5a72]">أنظمة التحكم الآلي</h3>
                <p class="text-gray-600 dark:text-gray-600">
                    تصميم وتركيب أنظمة تحكم آلي في الإنارة والأجهزة الكهربائية للمنازل والمباني الذكية.
                </p>
            </div>

            <!-- Service 6 -->
            <div class="bg-white dark:bg-slate-800/90 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all border-t-4 border-[#1a5a72]">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mb-4">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800 dark:text-[#1a5a72]">فحص السلامة الكهربائية</h3>
                <p class="text-gray-600 dark:text-gray-600">
                    فحص شامل للأنظمة الكهربائية وتقديم تقارير مفصلة عن حالة الشبكة ومخاطر السلامة.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-white dark:bg-slate-800/95">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-[#1a5a72] mb-4">لماذا نتميز في الخدمات الكهربائية؟</h2>
            <p class="text-gray-600 dark:text-gray-600 max-w-3xl mx-auto">
                نقدم حلولاً كهربائية تجمع بين الأمان والكفاءة والابتكار
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="flex items-start">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mt-1 mr-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-800">فريق فني معتمد</h3>
                    <p class="text-gray-600 dark:text-gray-600">
                        فريق فني مؤهل ومدرب على أعلى مستوى مع شهادات خبرة في مجال الكهرباء والأنظمة الذكية.
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mt-1 mr-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-800">مواد عالية الجودة</h3>
                    <p class="text-gray-600 dark:text-gray-600">
                        استخدام مواد كهربائية من ماركات عالمية مع ضمان على جميع الأعمال المنفذة.
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mt-1 mr-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-800">التزام بمعايير السلامة</h3>
                    <p class="text-gray-600 dark:text-gray-600">
                        التزام تام بكافة معايير السلامة الكهربائية المحلية والدولية لضمان أمان العملاء.
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mt-1 mr-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-800">تصاميم مخصصة</h3>
                    <p class="text-gray-600 dark:text-gray-600">
                        تصميم حلول كهربائية مخصصة تناسب احتياجات كل عميل ومتطلبات المشروع.
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mt-1 mr-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-800">دعم فني متكامل</h3>
                    <p class="text-gray-600 dark:text-gray-600">
                        دعم فني متواصل قبل وبعد التنفيذ لضمان رضا العملاء واستقرار الأنظمة.
                    </p>
                </div>
            </div>

            <div class="flex items-start">
                <div class="text-[#1a5a72] dark:text-[#60cdf2] mt-1 mr-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-2 text-gray-800 dark:text-gray-800">أسعار تنافسية</h3>
                    <p class="text-gray-600 dark:text-gray-600">
                        عروض أسعار تنافسية مع خيارات دفع مرنة تناسب جميع الميزانيات.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Gallery -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">أعمالنا في مجال الكهرباء</h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                مجموعة من مشاريعنا التي نفخر بها في مختلف المجالات
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Project 1 -->
            <div class="relative group overflow-hidden rounded-xl shadow-lg">
                <img src="{{ asset('images/electric-project1.jpg') }}" alt="مشروع تمديدات كهربائية لمنزل فاخر" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div>
                        <h3 class="text-white font-bold text-xl mb-1">تمديدات كهربائية لمنزل فاخر</h3>
                        <p class="text-gray-200">تصميم وتنفيذ شبكة كهرباء كاملة لمنزل مساحته 600 م²</p>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="relative group overflow-hidden rounded-xl shadow-lg">
                <img src="{{ asset('images/electric-project2.jpg') }}" alt="تركيب لوحة توزيع ذكية" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div>
                        <h3 class="text-white font-bold text-xl mb-1">تركيب لوحة توزيع ذكية</h3>
                        <p class="text-gray-200">نظام تحكم مركزي لمبنى تجاري بمساحة 1500 م²</p>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="relative group overflow-hidden rounded-xl shadow-lg">
                <img src="{{ asset('images/electric-project3.jpg') }}" alt="نظام إنارة ذكي" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div>
                        <h3 class="text-white font-bold text-xl mb-1">نظام إنارة ذكي</h3>
                        <p class="text-gray-200">تركيب نظام إنارة ذكي قابل للبرمجة لفيلا راقية</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Work Steps -->
<section class="py-16 bg-white dark:bg-slate-800/95">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-[#1a5a72] mb-4">كيف ننفذ مشاريعنا الكهربائية؟</h2>
            <p class="text-gray-600 dark:text-gray-600 max-w-3xl mx-auto">
                خطوات عمل منظمة تضمن جودة التنفيذ ورضا العملاء
            </p>
        </div>

        <div class="relative">
            <!-- Timeline -->
            <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-1 bg-[#1a5a72]/20 dark:bg-[#60cdf2]/30 transform -translate-x-1/2"></div>

            <!-- Step 1 -->
            <div class="flex flex-col md:flex-row items-center mb-12">
                <div class="md:w-1/2 md:pr-12 mb-6 md:mb-0 md:text-right">
                    <h3 class="font-bold text-xl text-[#1a5a72] dark:text-[#1a5a72] mb-3">الدراسة والتحليل</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        دراسة متطلبات المشروع وتحليل الاحتياجات الكهربائية وتحديد المواصفات الفنية المناسبة.
                    </p>
                </div>
                <div class="md:w-1/2 md:pl-12 flex justify-center md:justify-start">
                    <div class="w-16 h-16 rounded-full bg-[#1a5a72] dark:bg-[#60cdf2] text-white flex items-center justify-center font-bold text-xl shadow-lg border-4 border-white dark:border-slate-800">
                        1
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="flex flex-col md:flex-row items-center mb-12">
                <div class="md:w-1/2 md:pl-12 order-2 md:order-1 mb-6 md:mb-0 md:text-left">
                    <h3 class="font-bold text-xl text-[#1a5a72] dark:text-[#1a5a72] mb-3">التصميم والتخطيط</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        تصميم مخططات كهربائية دقيقة وتخطيط تفصيلي لمراحل التنفيذ وفقاً للمعايير العالمية.
                    </p>
                </div>
                <div class="md:w-1/2 md:pr-12 order-1 md:order-2 flex justify-center md:justify-end">
                    <div class="w-16 h-16 rounded-full bg-[#1a5a72] dark:bg-[#60cdf2] text-white flex items-center justify-center font-bold text-xl shadow-lg border-4 border-white dark:border-slate-800">
                        2
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="flex flex-col md:flex-row items-center mb-12">
                <div class="md:w-1/2 md:pr-12 mb-6 md:mb-0 md:text-right">
                    <h3 class="font-bold text-xl text-[#1a5a72] dark:text-[#1a5a72] mb-3">التنفيذ الميداني</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        تنفيذ الأعمال الكهربائية باحترافية عالية باستخدام مواد ذات جودة وفريق فني متخصص.
                    </p>
                </div>
                <div class="md:w-1/2 md:pl-12 flex justify-center md:justify-start">
                    <div class="w-16 h-16 rounded-full bg-[#1a5a72] dark:bg-[#60cdf2] text-white flex items-center justify-center font-bold text-xl shadow-lg border-4 border-white dark:border-slate-800">
                        3
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 md:pl-12 order-2 md:order-1 mb-6 md:mb-0 md:text-left">
                    <h3 class="font-bold text-xl text-[#1a5a72] dark:text-[#1a5a72] mb-3">الفحص والتسليم</h3>
                    <p class="text-gray-600 dark:text-gray-500">
                        فحص دقيق للأنظمة الكهربائية واختبارات السلامة قبل التسليم مع تقديم ضمان على الأعمال.
                    </p>
                </div>
                <div class="md:w-1/2 md:pr-12 order-1 md:order-2 flex justify-center md:justify-end">
                    <div class="w-16 h-16 rounded-full bg-[#1a5a72] dark:bg-[#60cdf2] text-white flex items-center justify-center font-bold text-xl shadow-lg border-4 border-white dark:border-slate-800">
                        4
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-[#1a5a72] text-white text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-bold mb-6">جاهزون لتنفيذ مشروعك الكهربائي؟</h2>
        <p class="text-lg mb-8 max-w-2xl mx-auto opacity-90">
            تواصل معنا اليوم للحصول على استشارة مجانية وتصميم حل كهربائي متكامل لمشروعك
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="/اتصل-بنا" class="bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all">اطلب استشارة مجانية</a>
            <a href="tel:+966558008895" class="border border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white/10 transition-all">اتصل بنا: 00966558008895</a>
        </div>
    </div>
</section>
@endsection