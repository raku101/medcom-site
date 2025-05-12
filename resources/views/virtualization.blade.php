@extends('layouts.app')

@section('title', 'حلول الحوسبة الافتراضية - Medcom')

@section('content')
<!-- Hero Section with Background Image -->
<section class="relative py-20 text-white overflow-hidden">
    <!-- Background Layers -->
    <div class="absolute inset-0 z-0">
        <!-- Background Image -->
        <img src="{{ asset('images/virtualization-bg.png') }}" alt="خلفية الحوسبة الافتراضية" 
             class="w-full h-full object-cover object-center">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    
    <!-- Content -->
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">حلول الحوسبة الافتراضية</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                استفد من قوة الحوسبة الافتراضية وانطلق بأعمالك إلى المستقبل!
            </span>
        </p>
    </div>
</section>

<!-- Virtualization Intro Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-right">
            <h2 class="text-2xl font-bold text-[#1a5a72] mb-6">ثورة في عالم تقنية المعلومات</h2>
            <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                في عالم التقنية المتسارع، أصبحت الحوسبة الافتراضية ضرورة لتحقيق الكفاءة والمرونة في تشغيل الأنظمة والتطبيقات. فهي تتيح لك تشغيل عدة أنظمة تشغيل في وقت واحد، معززةً العزل والأمان، وضمان أداء عالي دون الحاجة إلى تغيير العتاد الفعلي.
            </p>
            
            <div class="grid md:grid-cols-3 gap-6 mb-12">
                <!-- Benefit 1 -->
                <div class="bg-[#f8fafc] p-6 rounded-lg border-r-4 border-[#1a9ba4]">
                    <div class="text-2xl text-[#1a5a72] mb-3">🔹</div>
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">إدارة ذكية للموارد</h3>
                    <p class="text-gray-700">
                        تشغيل تطبيقات مختلفة على أنظمة تشغيل متعددة دون الحاجة إلى أجهزة إضافية
                    </p>
                </div>
                
                <!-- Benefit 2 -->
                <div class="bg-[#f8fafc] p-6 rounded-lg border-r-4 border-[#1a9ba4]">
                    <div class="text-2xl text-[#1a5a72] mb-3">🔹</div>
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">عزل وحماية متقدمة</h3>
                    <p class="text-gray-700">
                        بيئة مستقلة لكل نظام افتراضي، مما يعزز الأمان والاستقرار
                    </p>
                </div>
                
                <!-- Benefit 3 -->
                <div class="bg-[#f8fafc] p-6 rounded-lg border-r-4 border-[#1a9ba4]">
                    <div class="text-2xl text-[#1a5a72] mb-3">🔹</div>
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">تحسين كفاءة الخوادم</h3>
                    <p class="text-gray-700">
                        تشغيل أنظمة متعددة على نفس العتاد لتقليل التكاليف وزيادة الإنتاجية
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hypervisor Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/2">
                <img src="{{ asset('images/hypervisor.jpg') }}" alt="المراقب (Hypervisor)" class="rounded-lg shadow-xl w-full">
            </div>
            <div class="md:w-1/2 text-right">
                <h2 class="text-2xl font-bold text-[#1a5a72] mb-4">المراقب (Hypervisor) - البوابة إلى العالم الافتراضي</h2>
                <p class="text-gray-700 mb-4">
                    يعد المراقب (Hypervisor) الأساس في تشغيل الأجهزة الافتراضية، حيث يأتي بنمطين رئيسيين:
                </p>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <span class="text-green-500 text-xl mr-2">✅</span>
                        <div>
                            <h4 class="font-bold text-[#1a5a72]">النمط الأول (Type 1)</h4>
                            <p class="text-gray-700">يعمل مباشرة على العتاد، مثل أنظمة KVM القوية والمستقرة</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-green-500 text-xl mr-2">✅</span>
                        <div>
                            <h4 class="font-bold text-[#1a5a72]">النمط الثاني (Type 2)</h4>
                            <p class="text-gray-700">يُشغل داخل نظام التشغيل مثل أي برنامج عادي، مما يمنح مرونة في الاستخدام</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Virtual Machines Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row-reverse gap-8 items-center">
            <div class="md:w-1/2">
                <img src="{{ asset('images/virtual-machines.jpg') }}" alt="الأجهزة الافتراضية" class="rounded-lg shadow-xl w-full">
            </div>
            <div class="md:w-1/2 text-right">
                <h2 class="text-2xl font-bold text-[#1a5a72] mb-4">الأجهزة الافتراضية (Virtual Machines) - قوة الحوسبة بين يديك</h2>
                <p class="text-gray-700">
                    الجهاز الافتراضي هو محاكي متكامل للحاسوب، يتمتع بقدرات معالجة متقدمة، وصول مرن إلى موارد الحوسبة، ودعم للتخزين والشبكات، مما يجعله الحل الأمثل لتشغيل التطبيقات المتعددة دون تعقيدات.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Containers Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/2">
                <img src="{{ asset('images/containers.jpg') }}" alt="الحاويات (Containers)" class="rounded-lg shadow-xl w-full">
            </div>
            <div class="md:w-1/2 text-right">
                <h2 class="text-2xl font-bold text-[#1a5a72] mb-4">الحاويات (Containers) - خفة وسرعة في التنفيذ</h2>
                <p class="text-gray-700 mb-4">
                    الحاويات هي الجيل الجديد من بيئات التشغيل، حيث تعزل التطبيقات عن النظام المضيف، مما يتيح تشغيلها بسهولة وكفاءة. يمكنك إدارة الحاويات بسلاسة، نشر التطبيقات بسرعة، وضمان استقرار التشغيل حتى في البيئات الأكثر تعقيدًا.
                </p>
                <div class="space-y-3">
                    <div class="flex items-start">
                        <span class="text-green-500 text-xl mr-2">✅</span>
                        <p class="text-gray-700">أداء محسن - تشغيل أسرع مقارنة بالأجهزة الافتراضية</p>
                    </div>
                    <div class="flex items-start">
                        <span class="text-green-500 text-xl mr-2">✅</span>
                        <p class="text-gray-700">استخدام موارد أقل - لا حاجة لنظام تشغيل منفصل لكل حاوية</p>
                    </div>
                    <div class="flex items-start">
                        <span class="text-green-500 text-xl mr-2">✅</span>
                        <p class="text-gray-700">إدارة سهلة - عبر أدوات متطورة</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comparison Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-6">الحوسبة الافتراضية أم الحاويات؟</h2>
            <p class="text-lg text-gray-700 mb-8 leading-relaxed">
                كلاهما يوفر بيئات تشغيل معزولة، لكن الفرق الأساسي يكمن في الطريقة التي يتم بها ذلك.
            </p>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-[#f8fafc] p-6 rounded-lg shadow-md text-right">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-4">الأجهزة الافتراضية</h3>
                    <p class="text-gray-700 mb-4">
                        توفر نظام تشغيل مستقل لكل بيئة، مما يجعلها مثالية لتشغيل أنظمة متعددة بمرونة.
                    </p>
                    <div class="text-left">
                        <span class="inline-block bg-[#1a5a72] text-white px-3 py-1 rounded-full text-sm">🔹 مثالية للبيئات الكاملة</span>
                    </div>
                </div>
                
                <div class="bg-[#f8fafc] p-6 rounded-lg shadow-md text-right">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-4">الحاويات</h3>
                    <p class="text-gray-700 mb-4">
                        تشترك في نواة النظام المضيف، مما يجعلها أسرع وأخف وزنًا، مثالية لنشر التطبيقات الحديثة.
                    </p>
                    <div class="text-left">
                        <span class="inline-block bg-[#1a5a72] text-white px-3 py-1 rounded-full text-sm">🔹 مثالية للتطبيقات الخفيفة</span>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 bg-[#f0f9ff] p-6 rounded-lg border-l-4 border-[#1a5a72] text-right">
                <p class="text-lg text-[#1a5a72] font-medium">
                    سواء كنت بحاجة إلى أجهزة افتراضية قوية أو حاويات خفيفة، نوفر لك الحلول المثالية التي تناسب احتياجاتك!
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 bg-[#1a5a72] text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-6">جاهز للارتقاء بمشاريعك التقنية؟</h2>
        <p class="mb-8 max-w-2xl mx-auto text-lg">
            استكشف قوة الحوسبة الافتراضية اليوم وحقق أقصى استفادة من مواردك!
        </p>
        <a href="/اتصل-بنا" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
            احصل على استشارة مجانية
        </a>
    </div>
</section>
@endsection