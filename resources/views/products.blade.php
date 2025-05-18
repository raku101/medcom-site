@extends('layouts.app')

@section('title', 'منتجاتنا - Medcom')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90 py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/products-hero.jpg') }}" alt="منتجاتنا التقنية" class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-black/40"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10 py-12">
        <div class="max-w-3xl text-right">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">حلولنا التقنية المتكاملة</h1>
            <p class="text-xl md:text-2xl leading-relaxed mb-8">
                اكتشف مجموعة واسعة من المنتجات التقنية عالية الجودة لجميع احتياجاتك
            </p>
            <a href="#products" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg">
                تصفح المنتجات
            </a>
        </div>
    </div>
</section>

<!-- Products Section -->
<section id="products" class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-4">منتجاتنا التقنية</h2>
            <div class="w-24 h-1 bg-[#55aabb] mx-auto mb-6"></div>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                نقدم مجموعة واسعة من المنتجات التقنية عالية الجودة من أفضل العلامات التجارية العالمية
            </p>
        </div>

        <!-- Products Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-6">
            <!-- Product Card Template -->
            @php
                $products = [
                    [
                        'image' => '5.png',
                        'title' => 'شاشة Dell مقاس 24 بوصة – E2423H',
                        'features' => ['دقة FHD واضحة', 'زاوية عرض 178°/178°', 'نسبة تباين 3000:1', 'ألوان زاهية وتدرجات ممتازة']
                    ],
                    [
                        'image' => '4.png',
                        'title' => 'جهاز كمبيوتر مكتبي HP Pro Tower 290 G9',
                        'features' => ['معالج Intel® Core™ i5', '8 جيجابايت RAM', 'قرص SSD سعة 256 جيجابايت', 'نظام التشغيل Windows 11 Pro']
                    ],
                    [
                        'image' => '3.png',
                        'title' => 'هارد ديسك للمراقبة – ويسترن ديجيتال 10 تيرابايت',
                        'features' => ['حلول فيديو ذكية مدعومة بالذكاء الاصطناعي', 'معدل عمل حتى 550 تيرابايت/السنة', 'أداء عالي وتحمل عبء العمل المستمر']
                    ],
                    [
                        'image' => '2.png',
                        'title' => 'مسجل فيديو رقمي AcuSense 8 قنوات – 4K H.265',
                        'features' => ['8 قنوات و 2 HDD 1U', 'يدعم H.265+ لضغط فعال', 'معدل 15 إطارًا/ثانية بدقة 8 ميجا بكسل', 'تصنيف الأهداف البشرية والمركبات']
                    ],
                    [
                        'image' => '6.png',
                        'title' => 'جهاز DVR من هيكفيجن – 8 قنوات',
                        'features' => ['يدعم حتى 8 كاميرات', 'دقة تصل إلى 4K', 'يدعم TVI / AHD / CVI / CVBS / IP', 'مزود بقدرات ذكاء اصطناعي لتقليل الإنذارات']
                    ],
                    [
                        'image' => '1.png',
                        'title' => 'سويتش PoE بـ 4 منافذ + منفذ Uplink',
                        'features' => ['متوافق مع IEEE 802.3at / af', 'يوفر طاقة 54 فولت عبر PoE', 'يدعم PSE في نهاية النطاق']
                    ],
                    [
                        'image' => '7.png',
                        'title' => 'كاميرا مراقبة صغيرة بدقة 4K',
                        'features' => ['كاميرا رصاصية بدقة 8 ميجا بكسل', 'مقاومة للماء والغبار (IP67)', '4 في 1 TVI/AHD/CVI/CVBS', 'تقنية الأشعة تحت الحمراء EXIR 2.0 لمسافة 30 مترًا']
                    ],
                    [
                        'image' => '8.png',
                        'title' => 'كاميرا شبكية ذات قبة ثابتة وميكروفون مدمج',
                        'features' => ['دقة 5 ميجا بكسل', 'مقاومة للماء والغبار (IP67) ومقاومة للتخريب (IK10)', 'ميكروفون مدمج لأمان الصوت في الوقت الفعلي']
                    ],
                    [
                        'image' => '9.png',
                        'title' => 'جهاز CPE خارجي 5GHz AC بسرعة 867 ميجابت',
                        'features' => ['يدعم 802.11ac بسرعة تصل 867 ميجابت', 'كسب عالي 23dBi', 'تقنية 2×2 MIMO', 'توجيه ممتاز وتقليل الضوضاء']
                    ],
                    [
                        'image' => '10.png',
                        'title' => 'سويتش صناعي PoE+ مثبت على الحائط',
                        'features' => ['متوافق مع IEEE 802.3at Power over Ethernet Plus', 'يمنع تداخل الطاقة بين المنافذ', 'يدعم حتى 8 منافذ لأجهزة PoE']
                    ],
                    [
                        'image' => '11.png',
                        'title' => 'كاميرا AcuSense Vandal بدقة 6 ميجا بكسل',
                        'features' => ['دقة 6 ميجا بكسل', 'ميكروفون مدمج', 'تقنية WDR 120 للرؤية الواضحة']
                    ],
                    [
                        'image' => '12.png',
                        'title' => 'كاميرا شبكية ثابتة بدقة 5 ميجا بكسل',
                        'features' => ['تصوير عالي الجودة', 'ضغط H.265+', 'WDR 120 للرؤية في الإضاءة الخلفية']
                    ]
                ];
            @endphp

            @foreach ($products as $product)
                <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg overflow-hidden p-5 border border-gray-200 dark:border-slate-700 hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/products/' . $product['image']) }}" alt="{{ $product['title'] }}" class="w-full h-40 object-contain mb-4 transition-transform duration-300 hover:scale-105">
                    <h3 class="text-base font-bold text-[#1a5a72] mb-2 text-center">{{ $product['title'] }}</h3>
                    <ul class="text-sm text-gray-600 dark:text-gray-300 mb-4 space-y-1">
                        @foreach ($product['features'] as $feature)
                            <li class="flex items-start">
                                <i class="fas fa-check text-[#55aabb] mt-1 mr-2 text-xs"></i>
                                <span>{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
