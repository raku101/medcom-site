@extends('layouts.app')

@section('title', 'حلول أنظمة البيوت الذكية - Medcom')

@section('content')
<!-- Hero Section with Background Image -->
<section class="relative py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/smart-home-bg.jpg') }}" alt="خلفية البيوت الذكية" 
             class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">حلول أنظمة البيوت الذكية</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                رفع مستوى معيشتك بقوة التكنولوجيا الذكية
            </span>
        </p>
    </div>
</section>

<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl font-bold text-[#1a5a72] mb-6">كيف تخدمك أنظمة البيوت الذكية في منزلك؟</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 mb-6 leading-relaxed">
                تشمل هذه الخدمة تركيب وإدارة أنظمة ذكية للمباني السكنية. تتضمن أنظمة التحكم في الطاقة، الأمان، الإضاءة، وأنظمة الاتصالات. تهدف إلى تحسين الكفاءة التشغيلية وتوفير بيئة معيشة مريحة وآمنة.
            </p>
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <div class="bg-[#f8fafc] dark:bg-slate-700 p-6 rounded-lg border-r-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">الراحة والرفاهية</h3>
                    <ul class="list-disc pr-5 space-y-2 text-gray-700 dark:text-gray-300">
                        <li>التحكم في المنزل بضغطة واحدة أو بالأوامر الصوتية</li>
                        <li>إدارة الإضاءة ودرجة الحرارة عن بعد</li>
                        <li>تكامل مع الأجهزة المنزلية الذكية</li>
                        <li>واجهات تحكم سهلة عبر التطبيقات الذكية</li>
                    </ul>
                </div>
                <div class="bg-[#f8fafc] dark:bg-slate-700 p-6 rounded-lg border-r-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">الأمان والكفاءة</h3>
                    <ul class="list-disc pr-5 space-y-2 text-gray-700 dark:text-gray-300">
                        <li>أنظمة مراقبة وأمان ذكية</li>
                        <li>توفير الطاقة عبر التحكم الذكي</li>
                        <li>تنبيهات فورية لأي مخاطر</li>
                        <li>محاكاة التواجد في المنزل عند السفر</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50 dark:bg-slate-900 text-right">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/2">
                <img src="{{ asset('images/smart-home-features.jpg') }}" alt="مميزات المنزل الذكي" class="rounded-lg shadow-xl w-full">
            </div>
            <div class="md:w-1/2">
                <h2 class="text-2xl font-bold text-[#1a5a72] mb-4">في منزل يتوقع كل احتياجاتك</h2>
                <p class="text-gray-700 dark:text-gray-300 mb-4">
                    يضبط الإضاءة حسب تفضيلاتك، المفضل لديك قبل أن تلمس قدماك الأرض. هذا هو جوهر المنزل الحديث الذي تحلم به. أنظمة البيوت الذكية لا تقتصر على كونها مجموعة من الأجهزة، بل هي تطبيقات متقدمة لإنترنت الأشياء مصممة بشكل سلس لتعزيز كل جانب من جوانب حياتك.
                </p>
                <p class="text-gray-700 dark:text-gray-300">
                    إنها شبكة من الأجهزة المتصلة التي تُؤتمت لتوقع احتياجاتك والتكيف معها، لتوفر لك تجربة معيشية راقية تتجاوز حدود الخيال.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">مكونات أنظمة البيوت الذكية</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-gray-50 dark:bg-slate-700 rounded-lg shadow-md">
                <div class="bg-[#1a5a72] text-white p-4 text-center">
                    <h3 class="text-xl font-bold">التحكم في الإضاءة</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-700 dark:text-gray-300">
                        أنظمة إضاءة ذكية قابلة للبرمجة والتحكم عن بعد، مع إمكانية ضبط السطوع والألوان حسب الحالة المزاجية.
                    </p>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-slate-700 rounded-lg shadow-md">
                <div class="bg-[#1a5a72] text-white p-4 text-center">
                    <h3 class="text-xl font-bold">أنظمة الأمان</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-700 dark:text-gray-300">
                        كاميرات مراقبة، أجهزة استشعار، أنظمة إنذار، وأقفال ذكية توفر حماية شاملة للمنزل على مدار الساعة.
                    </p>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-slate-700 rounded-lg shadow-md">
                <div class="bg-[#1a5a72] text-white p-4 text-center">
                    <h3 class="text-xl font-bold">إدارة الطاقة</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-700 dark:text-gray-300">
                        تحكم ذكي في استهلاك الطاقة عبر إدارة التكييف والسخانات والأجهزة الكهربائية لتحقيق أقصى توفير.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50 dark:bg-slate-900 text-right">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-6">تجربة معيشية ذكية لم يسبق لها مثيل</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 mb-8 leading-relaxed">
                أنظمة البيوت الذكية التي نقدمها تشمل توفير وتركيب مجموعة متكاملة من الحلول الذكية التي تتضمن التحكم الأوتوماتيكي في الإضاءة، الأمان، التكييف، والترفيه. تهدف هذه الأنظمة إلى تحسين جودة الحياة وزيادة الكفاءة باستخدام التكنولوجيا المتطورة.
            </p>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white dark:bg-slate-800 p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-4">التحكم المركزي</h3>
                    <p class="text-gray-700 dark:text-gray-300">
                        إدارة جميع أنظمة المنزل من خلال لوحة تحكم واحدة أو تطبيق هاتفك الذكي
                    </p>
                </div>
                <div class="bg-white dark:bg-slate-800 p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-4">التكامل الذكي</h3>
                    <p class="text-gray-700 dark:text-gray-300">
                        تكامل كامل مع المساعدات الصوتية مثل Google Assistant وAmazon Alexa
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-12 bg-[#1a5a72] dark:bg-slate-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-6">جاهز لتحويل منزلك إلى منزل ذكي؟</h2>
        <p class="mb-8 max-w-2xl mx-auto text-lg">
            خبراؤنا جاهزون لمساعدتك في تصميم وتنفيذ الحل الأمثل لاحتياجاتك
        </p>
        <a href="/اتصل-بنا" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
            احصل على استشارة مجانية
        </a>
    </div>
</section>
@endsection
