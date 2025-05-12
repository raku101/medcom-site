@extends('layouts.app')

@section('title', 'أنظمة كاميرات المراقبة - Medcom')

@section('content')
<!-- Hero Section with Background Image -->
<section class="relative py-20 text-white overflow-hidden">
    <!-- Background Layers -->
    <div class="absolute inset-0 z-0">
        <!-- Background Image -->
        <img src="{{ asset('images/cctv-bg.jpg') }}" alt="خلفية كاميرات المراقبة" 
             class="w-full h-full object-cover object-center">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    
    <!-- Content -->
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">أنظمة كاميرات المراقبة</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                حلول أمنية متكاملة بأحدث التقنيات
            </span>
        </p>
    </div>
</section>

<!-- Introduction Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-right">
            <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                تعد شركة ميدكوم من الرواد في مجال تأسيس كاميرات المراقبة، حيث تقدم حلولًا أمنية متكاملة تلبي احتياجات العملاء المتنوعة. تتميز الشركة بتوفير أحدث التقنيات في أنظمة المراقبة، مع التركيز على الجودة والكفاءة في الأداء.
            </p>
            
            <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                تقدم ميدكوم مجموعة واسعة من الخيارات تشمل الكاميرات الداخلية والخارجية، والكاميرات ذات الرؤية الليلية، بالإضافة إلى الحلول اللاسلكية والذكية التي تسهل إدارة النظام ومراقبته عن بُعد.
            </p>
            
            <div class="bg-[#f8fafc] p-6 rounded-lg border-r-4 border-[#1a9ba4] mb-8">
                <p class="text-gray-700">
                    بفضل فريق من الخبراء المتخصصين، تقدم الشركة خدمات استشارية وتخطيطية لتحديد الحلول الأنسب لكل موقع، مع التركيب الاحترافي والدعم الفني المستمر.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- How To Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">كيفية تأسيس كاميرات مراقبة؟</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <!-- Step 1 -->
            <div class="flex flex-col md:flex-row gap-8 mb-12 items-center">
                <div class="md:w-1/3 bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-4xl font-bold text-[#1a5a72] mb-4">1</div>
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-2">تقييم احتياجات الأمان</h3>
                    <p class="text-gray-600 text-sm">
                        تحديد المواطق الأساسية التي تحتاج إلى مراقبة وتقييم المخاطر المحتملة
                    </p>
                </div>
                <div class="md:w-2/3 text-right">
                    <ul class="list-disc pr-5 space-y-2 text-gray-700">
                        <li>حدد المناطق الأساسية مثل المداخل والمخارج والمناطق المحيطة بالمبنى</li>
                        <li>اعرف نوع المخاطر المحتملة في كل منطقة لتحديد أفضل نوع كاميرا</li>
                    </ul>
                </div>
            </div>
            
            <!-- Step 2 -->
            <div class="flex flex-col md:flex-row gap-8 mb-12 items-center">
                <div class="md:w-1/3 bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-4xl font-bold text-[#1a5a72] mb-4">2</div>
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-2">اختيار نوع الكاميرات</h3>
                    <p class="text-gray-600 text-sm">
                        تحديد نوع الكاميرات المناسبة لاحتياجاتك
                    </p>
                </div>
                <div class="md:w-2/3 text-right">
                    <ul class="list-disc pr-5 space-y-2 text-gray-700">
                        <li>كاميرات IP: توفر دقة عالية وسهولة في التوصيل عبر الشبكة</li>
                        <li>كاميرات HD: تستخدم في الأماكن التي تحتاج إلى توصيلات كابلات Coax</li>
                    </ul>
                </div>
            </div>
            
            <!-- Steps 3-8 would follow the same pattern -->
            
            <!-- Final Note -->
            <div class="bg-[#1a5a72] text-white p-6 rounded-lg shadow-lg mt-8">
                <h3 class="text-xl font-bold mb-3">ملاحظة مهمة</h3>
                <p>
                    باتباع هذه الخطوات، يمكنك تأسيس نظام كاميرات مراقبة متكامل وفعال يلبي احتياجات الأمان الخاصة بك بكفاءة واحترافية.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Systems Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Security System -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md border border-gray-200">
                <img src="{{ asset('images/security-system.jpg') }}" alt="نظام المراقبة الأمنية" class="w-full h-48 object-cover">
                <div class="p-6 text-right">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">نظام كاميرات المراقبة الأمنية</h3>
                    <p class="text-gray-700 mb-4">
                        نظام متكامل يشمل تركيب الكاميرات في المواقع الاستراتيجية لضمان الأمن وكفاءة المراقبة، مع تحديد الأماكن التي تحتاج إلى تغطية مثل المداخل والمخارج.
                    </p>
                    <ul class="list-disc pr-5 space-y-1 text-gray-600">
                        <li>كاميرات IP وHD بتقنيات متقدمة</li>
                        <li>تركيب سليم للأجهزة والأسلاك</li>
                        <li>توفير الكهرباء والإنترنت اللازمة</li>
                    </ul>
                </div>
            </div>
            
            <!-- Home System -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md border border-gray-200">
                <img src="{{ asset('images/home-system.jpg') }}" alt="نظام المراقبة المنزلية" class="w-full h-48 object-cover">
                <div class="p-6 text-right">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">نظام كاميرات المراقبة المنزلية</h3>
                    <p class="text-gray-700 mb-4">
                        مصمم لتوفير الأمن والراحة في المنزل، مع تحديد الأماكن الأساسية التي تحتاج إلى مراقبة مثل المداخل والأماكن الداخلية.
                    </p>
                    <ul class="list-disc pr-5 space-y-1 text-gray-600">
                        <li>كاميرات ثابتة أو متحركة بدقة عالية</li>
                        <li>حلول شبكات ذكية للمراقبة عن بُعد</li>
                        <li>توصيل بنظام تسجيل مناسب</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 bg-[#1a5a72] text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-6">هل تحتاج إلى نظام مراقبة متكامل؟</h2>
        <p class="mb-8 max-w-2xl mx-auto text-lg">
            فريق خبرائنا جاهز لمساعدتك في تصميم الحل الأمثل لاحتياجاتك
        </p>
        <a href="/اتصل-بنا" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
            اطلب استشارة مجانية
        </a>
    </div>
</section>
@endsection