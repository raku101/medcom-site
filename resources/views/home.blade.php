@extends('layouts.app')

@section('content')

<!-- ======= قسم الشرائح ======= -->
<section id="slider" class="relative mt-0 pt-0 mb-0">
  <div class="relative h-[700px] overflow-hidden">
    @for ($i = 1; $i <= 3; $i++)
    <div class="absolute inset-0 transition-opacity duration-1000 {{ $i === 1 ? 'opacity-100' : 'opacity-0' }} bg-cover bg-center" style="background-image: url('{{ asset('images/slider' . $i . '.jpg') }}');">
      <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-end pr-8 md:pr-20 pl-4 md:pl-16">
        <div class="text-right font-arabic w-full max-w-[700px]">
          <div class="relative h-20 w-full max-w-[620px] overflow-hidden flex items-center">
            <div class="bar absolute h-full bg-[#1782a4] right-0 w-0 z-10"></div>
            <h1 class="headline absolute right-0 z-20 text-white text-3xl md:text-5xl font-bold whitespace-nowrap opacity-0">
              {{ ['إدارة المشاريع التقنية', 'حلول الشبكات المتقدمة', 'أنظمة الحماية والمراقبة'][$i - 1] }}
            </h1>
          </div>
          <p class="subtext text-[#75CBEB] mt-4 text-lg md:text-2xl opacity-0">
            {{ ['نقدم لك حلاً متكاملاً لإدارة مشاريعك التقنية', 'نصمم لك البنية التحتية لشبكتك بأعلى كفاءة', 'أمنك بين يديك بكاميرات وأنظمة متقدمة'][$i - 1] }}
          </p>
        </div>
      </div>
    </div>
    @endfor
  </div>
</section>

<!-- Services Section -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-4">خدماتنا </h2>
            <div class="w-24 h-1 bg-[#55aabb] mx-auto mb-6"></div>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                نقدم مجموعة متكاملة من الخدمات التقنية لتلبية جميع احتياجاتك الأمنية والإدارية
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- أنظمة الاتصالات -->
            <div data-aos="fade-up" data-aos-delay="100" class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72] transform hover:-translate-y-2">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-full mr-4">
                            <i class="fas fa-phone-alt text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">أنظمة الاتصالات</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>تأسيس السنترالات</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>أنظمة السنترالات الهاتفية (IP PBX)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>أنظمة مؤتمرات الفيديو</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>أجهزة الاتصال الداخلي</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>تأسيس خدمة الكول سنتر</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>مقويات الإرسال والاستقبال</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- أنظمة الحضور والانصراف -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-full mr-4">
                            <i class="fas fa-fingerprint text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">أنظمة الحضور والانصراف</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>أجهزة بصمة الوجه</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>أجهزة بصمة الأصبع</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>أنظمة الحضور عبر بطاقة RFID</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>أنظمة التقارير والإحصائيات</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- أنظمة الكاشير -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-full mr-4">
                            <i class="fas fa-cash-register text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">أنظمة الكاشير</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>أنظمة كاشير للمطاعم</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>أنظمة كاشير للتجزئة</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>أنظمة كاشير للمبيعات عبر الإنترنت</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>أجهزة كاشير محمولة</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- أنظمة الإنذار والسلامة -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-full mr-4">
                            <i class="fas fa-fire-extinguisher text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">أنظمة الإنذار والسلامة</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>أنظمة إنذار الحريق</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>مستشعرات الدخان والحرارة</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>أجهزة إنذار الغاز</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- أنظمة المنازل الذكية -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-full mr-4">
                            <i class="fas fa-home text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">أنظمة المنازل الذكية</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>أنظمة الإضاءة الذكية</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>التحكم في درجات الحرارة</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>أنظمة الصوت الذكية</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- الأنظمة الصوتية والبصرية -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-full mr-4">
                            <i class="fas fa-volume-up text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">الأنظمة الصوتية والبصرية</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>مكبرات الصوت</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>أنظمة مكبرات الصوت المتكاملة</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- أجهزة التتبع والمراقبة -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-full mr-4">
                            <i class="fas fa-map-marker-alt text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">أجهزة التتبع والمراقبة</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>أجهزة تتبع المركبات</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>أنظمة التتبع الشخصية</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>أجهزة مراقبة الأصول</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>أنظمة إدارة أسطول المركبات</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- عقود الصيانة السنوية والدورية -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-full mr-4">
                            <i class="fas fa-tools text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">عقود الصيانة السنوية</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>صيانة الشاشات والأجهزة الإلكترونية</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>صيانة الأنظمة التقنية</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>صيانة أنظمة الطاقة الشمسية</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>صيانة البرمجيات والتحديثات</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- أنظمة التحكم في الدخول -->
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-[#1a5a72]/10 p-3 rounded-full mr-4">
                            <i class="fas fa-door-open text-[#1a5a72] text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a5a72]">أنظمة التحكم في الدخول</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>أجهزة التحكم في الأبواب المنزلية والفيلات</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>بوابات دخول الأفراد</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>بوابات تفتيش الحقائب والمعادن</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>أجهزة الأقفال الذكية</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>حواجز مواقف السيارات</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-[#55aabb] mt-1 mr-2"></i>
                            <span>بوابات أمنية بكاميرات ذكاء اصطناعي</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ======= قسم نبذة تعريفية صغيرة ======= -->
<section class="text-center pt-0 pb-8 px-4 bg-white dark:bg-gray-800">
  <div class="inline-block bg-[#1782a4] text-white text-sm sm:text-base font-bold rounded-full px-6 py-2 shadow-md">
    كل الخدمات والمنتجات التقنية في مكان واحد
  </div>
  <p class="mt-4 text-sm sm:text-base text-[#0e5f75] dark:text-[#9ddff2] font-medium">
    تقدم الشركة حلولًا شاملة تواكب تطلعات الأعمال وتسهم في تحقيق أهداف الأعمال
  </p>
</section>
<!-- قسم منتجاتنا التقنية -->
<section class="py-16 bg-gradient-to-b from-white to-gray-50 dark:from-slate-900 dark:to-slate-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <span class="text-[#55aabb] font-semibold">منتجاتنا التقنية</span>
            <h2 class="text-3xl font-bold text-[#1a5a72] dark:text-white mt-2">أحدث منتجاتنا</h2>
            <div class="w-20 h-1 bg-[#55aabb] mx-auto mt-4"></div>
        </div>

        <!-- سلايدر المنتجات -->
        <div class="relative overflow-hidden py-8">
            <div class="swiper-container perfect-loop-slider">
                <div class="swiper-wrapper">
                    @php
                    $products = [
                        ['image' => '1.png', 'name' => 'سويتش PoE بـ 4 منافذ + منفذ Uplink', 'category' => 'شبكات'],
                        ['image' => '6.png', 'name' => 'جهاز DVR من هيكفيجن – 8 قنوات', 'category' => 'انظمة مراقبة'],
                        ['image' => '2.png', 'name' => 'مسجل فيديو رقمي AcuSense 8 قنوات', 'category' => 'كاميرات'],
                        ['image' => '3.png', 'name' => ' هارد ديسك للمراقبة – ويسترن ديجيتال 10 تيرابايت', 'category' => 'انظمة مراقبة'],
                        ['image' => '7.png', 'name' => 'كاميرا مراقبة صغيرة بدقة 4K ', 'category' => 'كاميرات'],
                        ['image' => '8.png', 'name' => 'كاميرا شبكية ذات قبة ثابتة وميكروفون مدمج', 'category' => 'كاميرات'],
                    ];
                    @endphp

                    <!-- تكرار العناصر لضمان عدم ظهور فراغات -->
                    @foreach (array_merge($products, $products, $products) as $product)
                    <div class="swiper-slide">
                        <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden mx-2 border border-gray-200 dark:border-slate-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                            <div class="relative h-56 flex items-center justify-center p-4 bg-gray-100 dark:bg-slate-700">
                                <img src="{{ asset('images/products/' . $product['image']) }}" 
                                     alt="{{ $product['name'] }}"
                                     class="h-full object-contain transition duration-300 hover:scale-105">
                                <span class="absolute top-3 right-3 bg-[#1a5a72] text-white text-xs font-bold px-2 py-1 rounded">
                                    {{ $product['category'] }}
                                </span>
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-lg font-bold text-[#1a5a72] dark:text-gray-300">{{ $product['name'] }}</h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- أضف هذه الأكواد في head -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<!-- أضف هذا الكود قبل إغلاق body -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.perfect-loop-slider', {
            loop: true,
            loopAdditionalSlides: 10, // زيادة عدد الشرائح المكررة
            loopPreventsSliding: false, // السماح بالحركة المستمرة
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
                waitForTransition: false // عدم الانتظار لانتهاء الانتقال
            },
            speed: 800, // سرعة أقل لسلاسة الحركة
            grabCursor: true,
            slidesPerView: 'auto',
            spaceBetween: 20,
            freeMode: {
                enabled: true,
                momentum: false
            },
            breakpoints: {
                480: { slidesPerView: 2 },
                768: { slidesPerView: 3 },
                1024: { slidesPerView: 4 },
                1280: { slidesPerView: 5 }
            },
            on: {
                init: function() {
                    // إصلاح بداية السلايدر
                    setTimeout(() => {
                        this.slideTo(0, 0);
                    }, 100);
                },
                transitionEnd: function() {
                    // إصلاح التوقف التلقائي
                    if (!this.autoplay.running) {
                        this.autoplay.start();
                    }
                }
            }
        });

        // إعادة تشغيل السلايدر عند العودة للنافذة
        window.addEventListener('focus', function() {
            swiper.autoplay.start();
        });
    });
</script>

<style>
    /* تخصيص السلايدر للحلقة المثالية */
    .perfect-loop-slider .swiper-wrapper {
        transition-timing-function: linear !important;
    }
    
    .perfect-loop-slider .swiper-slide {
        width: 280px !important; /* عرض ثابت للشرائح */
        opacity: 1 !important;
        flex-shrink: 0;
    }
    
    /* إصلاح مشكلة الفراغات */
    .swiper-slide-duplicate {
        display: block !important;
    }
    
    /* تحسين مظهر البطاقات */
    .swiper-slide {
        height: auto;
    }
</style>
<!-- ======= قسم الحلول التقنية ======= -->
<section class="py-16 bg-gradient-to-b from-[#f0f9ff] to-[#e0f2fe] dark:from-gray-800 dark:to-gray-900 text-center text-black dark:text-white">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl font-bold text-[#0369a1] dark:text-[#60cdf2] mb-12">حلولنا التقنية المتكاملة</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- بطاقة 1 -->
      <div class="group relative h-[420px] rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500">
        <!-- طبقة التدرج اللوني -->
        <div class="absolute inset-0 bg-gradient-to-t from-[#082f49]/90 via-[#082f49]/50 to-transparent z-10"></div>
        
        <!-- الصورة -->
        <img src="{{ asset('images/cloud-solution.jpg') }}" alt="الحلول السحابية" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
        
        <!-- المحتوى -->
        <div class="absolute bottom-0 left-0 right-0 z-20 p-6 text-right transition-all duration-500 group-hover:bottom-5">
          <!-- الشريط العلوي -->
          <div class="w-16 h-1 bg-[#38bdf8] mb-4 transition-all duration-500 group-hover:w-24"></div>
          
          <h3 class="text-2xl font-bold text-white mb-3">الحلول السحابية</h3>
          
          <p class="text-gray-200 text-sm leading-relaxed mb-5 line-clamp-3 group-hover:line-clamp-none transition-all duration-300">
            نقدم حلول سحابية متكاملة تساعد مؤسستك على التحول الرقمي بسهولة وأمان، مع توفير مرونة عالية في إدارة الموارد وتخفيض التكاليف.
          </p>
          
          <a href="/الحلول-السحابية" class="inline-flex items-center gap-2 text-white text-sm font-medium px-5 py-2 rounded-full bg-[#0369a1] hover:bg-[#075985] transition-all">
            عرض التفاصيل
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </a>
        </div>
      </div>

      <!-- بطاقة 2 -->
      <div class="group relative h-[420px] rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-[#1e3a8a]/90 via-[#1e3a8a]/50 to-transparent z-10"></div>
        <img src="{{ asset('images/voice-solution.jpg') }}" alt="أنظمة الصوت" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
        <div class="absolute bottom-0 left-0 right-0 z-20 p-6 text-right transition-all duration-500 group-hover:bottom-5">
          <div class="w-16 h-1 bg-[#60a5fa] mb-4 transition-all duration-500 group-hover:w-24"></div>
          <h3 class="text-2xl font-bold text-white mb-3">أنظمة الصوت الذكية</h3>
          <p class="text-gray-200 text-sm leading-relaxed mb-5 line-clamp-3 group-hover:line-clamp-none transition-all duration-300">
            أنظمة صوتية متكاملة للمباني الذكية تتيح التحكم المركزي وتوزيع الصوت بكفاءة عالية وجودة فائقة تناسب جميع الأماكن.
          </p>
          <a href="/حلول-الأنظمة-الصوتية" class="inline-flex items-center gap-2 text-white text-sm font-medium px-5 py-2 rounded-full bg-[#1d4ed8] hover:bg-[#1e40af] transition-all">
            عرض التفاصيل
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </a>
        </div>
      </div>

      <!-- بطاقة 3 -->
      <div class="group relative h-[420px] rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-[#4338ca]/90 via-[#4338ca]/50 to-transparent z-10"></div>
        <img src="{{ asset('images/smart-home.jpg') }}" alt="المنازل الذكية" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
        <div class="absolute bottom-0 left-0 right-0 z-20 p-6 text-right transition-all duration-500 group-hover:bottom-5">
          <div class="w-16 h-1 bg-[#818cf8] mb-4 transition-all duration-500 group-hover:w-24"></div>
          <h3 class="text-2xl font-bold text-white mb-3">المنازل الذكية</h3>
          <p class="text-gray-200 text-sm leading-relaxed mb-5 line-clamp-3 group-hover:line-clamp-none transition-all duration-300">
            حلول متكاملة للتحكم الآلي في المنازل والمباني تشمل الإضاءة، الأمان، التكييف والترفيه بتقنيات ذكية وسهلة الاستخدام.
          </p>
          <a href="/حلول-البيوت-الذكية" class="inline-flex items-center gap-2 text-white text-sm font-medium px-5 py-2 rounded-full bg-[#4f46e5] hover:bg-[#4338ca] transition-all">
            عرض التفاصيل
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </a>
        </div>
      </div>

      <!-- بطاقة 4 -->
      <div class="group relative h-[420px] rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-[#6d28d9]/90 via-[#6d28d9]/50 to-transparent z-10"></div>
        <img src="{{ asset('images/maintenance.jpg') }}" alt="عقود الصيانة" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
        <div class="absolute bottom-0 left-0 right-0 z-20 p-6 text-right transition-all duration-500 group-hover:bottom-5">
          <div class="w-16 h-1 bg-[#a78bfa] mb-4 transition-all duration-500 group-hover:w-24"></div>
          <h3 class="text-2xl font-bold text-white mb-3">عقود الصيانة</h3>
          <p class="text-gray-200 text-sm leading-relaxed mb-5 line-clamp-3 group-hover:line-clamp-none transition-all duration-300">
            برامج صيانة دورية شاملة تضمن استمرارية عمل الأنظمة التقنية بأعلى كفاءة وتقلل من أعطال المعدات والتكاليف غير المتوقعة.
          </p>
          <a href="/إدارة-عقود-الصيانة" class="inline-flex items-center gap-2 text-white text-sm font-medium px-5 py-2 rounded-full bg-[#7c3aed] hover:bg-[#6d28d9] transition-all">
            عرض التفاصيل
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="relative py-12 bg-cover bg-center" style="min-height: 170px; max-height: 170px; background-image: url('images/contact-hero.jpg');">
  <!-- طبقة تظليل فوق الصورة لتحسين قراءة النص -->
  <div class="absolute inset-0 bg-black/20"></div>
  
  <!-- التأثيرات البصرية الأصلية مع تعديل الشفافية -->
  <div class="absolute inset-0 opacity-20">
    <div class="absolute top-20 left-20 w-40 h-40 rounded-full bg-[#1a9ba4] blur-[70px]"></div>
    <div class="absolute bottom-10 right-10 w-32 h-32 rounded-full bg-[#1ac8a4] blur-[60px]"></div>
  </div>

  <div class="container mx-auto px-4 relative z-10 h-full flex items-center">
    <div class="max-w-4xl mx-auto w-full">
      <div class="flex flex-col md:flex-row items-center justify-between gap-6">
        <!-- النصوص -->
        <div class="text-center md:text-right">
          <h2 class="text-2xl font-bold text-white mb-2">تواصل مع فريقنا</h2>
          <p class="text-[#e0f4fc] text-sm">نحن هنا لمساعدتك في أي وقت</p>
        </div>
        
        <!-- زر التواصل -->
        <a href="/تواصل-معنا" class="shrink-0 bg-white/90 hover:bg-white text-[#1a5a72] font-medium py-2.5 px-7 rounded-full text-sm transition-all flex items-center gap-1.5 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
          ابدأ المحادثة
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
          </svg>
        </a>
        
        <!-- معلومات مختصرة -->
        <div class="hidden sm:flex items-center gap-5">
          <div class="flex items-center gap-2.5">
            <div class="w-9 h-9 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
              </svg>
            </div>
            <div>
              <p class="text-[#c2e8f5] text-xs">الهاتف</p>
              <p class="text-white font-medium text-sm">+966558008895</p>
            </div>
          </div>
          
          <div class="w-px h-10 bg-white/30"></div>
          
          <div class="flex items-center gap-2.5">
            <div class="w-9 h-9 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
            </div>
            <div>
              <p class="text-[#c2e8f5] text-xs">البريد الإلكتروني</p>
              <p class="text-white font-medium text-sm">info@medcom.it.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- قسم الشركاء المساهمين -->
<section class="py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <span class="text-[#55aabb] font-semibold">شركاؤنا</span>
            <h2 class="text-3xl font-bold text-[#1a5a72] dark:text-white mt-2">شركاء النجاح</h2>
            <div class="w-20 h-1 bg-[#55aabb] mx-auto mt-4"></div>
            <p class="mt-4 text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                نفتخر بشراكاتنا الاستراتيجية مع أبرز العلامات التجارية الرائدة في العالم
            </p>
        </div>

        <!-- شبكة شعارات الشركاء -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-8 px-4">
            <!-- شعار Hikvision -->
            <div class="partner-logo">
                <img src="{{ asset('images/partners/hikvision.png') }}" alt="Hikvision" 
                     class="w-full h-auto max-h-20 object-contain opacity-90 hover:opacity-100 transition-all duration-300 hover:scale-110">
            </div>
            
            <!-- شعار Dahua -->
            <div class="partner-logo">
                <img src="{{ asset('images/partners/dahua.png') }}" alt="Dahua" 
                     class="w-full h-auto max-h-20 object-contain opacity-90 hover:opacity-100 transition-all duration-300 hover:scale-110">
            </div>
            
            <!-- شعار TP-Link -->
            <div class="partner-logo">
                <img src="{{ asset('images/partners/partner12.png') }}" alt="TP-Link" 
                     class="w-full h-auto max-h-20 object-contain opacity-90 hover:opacity-100 transition-all duration-300 hover:scale-110">
            </div>
            
            <!-- شعار Huawei -->
            <div class="partner-logo">
                <img src="{{ asset('images/partners/partner11.png') }}" alt="Huawei" 
                     class="w-full h-auto max-h-20 object-contain opacity-90 hover:opacity-100 transition-all duration-300 hover:scale-110">
            </div>
            
            <!-- شعار Cisco -->
            <div class="partner-logo">
                <img src="{{ asset('images/partners/cisco.png') }}" alt="Cisco" 
                     class="w-full h-auto max-h-20 object-contain opacity-90 hover:opacity-100 transition-all duration-300 hover:scale-110">
            </div>
            
            <!-- شعار Axis -->
            <div class="partner-logo">
                <img src="{{ asset('images/partners/azure.png') }}" alt="Axis" 
                     class="w-full h-auto max-h-20 object-contain opacity-90 hover:opacity-100 transition-all duration-300 hover:scale-110">
            </div>
            
            <!-- شعار Bosch -->
            <div class="partner-logo">
                <img src="{{ asset('images/partners/partner3.png') }}" alt="Bosch" 
                     class="w-full h-auto max-h-20 object-contain opacity-90 hover:opacity-100 transition-all duration-300 hover:scale-110">
            </div>
            
            <!-- شعار Sony -->
            <div class="partner-logo">
                <img src="{{ asset('images/partners/partner2.png') }}" alt="Sony" 
                     class="w-full h-auto max-h-20 object-contain opacity-90 hover:opacity-100 transition-all duration-300 hover:scale-110">
            </div>
            
            <!-- شعار Samsung -->
            <div class="partner-logo">
                <img src="{{ asset('images/partners/partner4.png') }}" alt="Samsung" 
                     class="w-full h-auto max-h-20 object-contain opacity-90 hover:opacity-100 transition-all duration-300 hover:scale-110">
            </div>
            
            <!-- شعار Dell -->
            <div class="partner-logo">
                <img src="{{ asset('images/partners/partner9.png') }}" alt="Dell" 
                     class="w-full h-auto max-h-20 object-contain opacity-90 hover:opacity-100 transition-all duration-300 hover:scale-110">
            </div>

            <!-- شعار Dell -->
            <div class="partner-logo">
                <img src="{{ asset('images/partners/fortinet.png') }}" alt="Dell" 
                     class="w-full h-auto max-h-20 object-contain opacity-90 hover:opacity-100 transition-all duration-300 hover:scale-110">
            </div>

            <!-- شعار Dell -->
            <div class="partner-logo">
                <img src="{{ asset('images/partners/partner7.png') }}" alt="Dell" 
                     class="w-full h-auto max-h-20 object-contain opacity-90 hover:opacity-100 transition-all duration-300 hover:scale-110">
            </div>
        </div>
    </div>
</section>

<style>
    /* تنسيق شبكة الشعارات */
    .partner-logo {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100px;
        padding: 1.5rem;
        background: white;
        border-radius: 0.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }
    
    .partner-logo:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        z-index: 10;
    }
    
    .dark .partner-logo {
        background: #1e293b;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }
    
    /* تكيف الشعارات مع أحجام الشاشات */
    @media (max-width: 639px) {
        .partner-logo {
            height: 80px;
            padding: 1rem;
        }
    }
</style>

<!-- قسم آراء العملاء -->
<section class="py-16 bg-white dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <span class="text-[#55aabb] font-semibold">آراء العملاء</span>
            <h2 class="text-3xl font-bold text-[#1a5a72] dark:text-white mt-2">ما يقولونه عنا</h2>
            <div class="w-20 h-1 bg-[#55aabb] mx-auto mt-4"></div>
            <p class="mt-4 text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                آراء عملائنا الأعزاء هي شهادتنا الحقيقية على جودة خدماتنا
            </p>
        </div>

        <!-- شبكة آراء العملاء -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- رأي العميل 1 -->
            <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/testimonials/client1.png') }}" alt="محمد أحمد" class="w-12 h-12 rounded-full object-cover">
                    <div class="mr-3">
                        <h4 class="font-bold text-[#1a5a72] dark:text-white">محمد أحمد</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-400">مدير شركة التقنية المتميزة</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <span class="text-yellow-400">★★★★★</span>
                </div>
                <p class="text-gray-600 dark:text-gray-300">
                    "لقد تفاجأت بجودة الخدمة وسرعة الاستجابة، فريق محترف يعرف ما يفعله تماماً. أنصح الجميع بالتعامل معهم."
                </p>
            </div>

            <!-- رأي العميل 2 -->
            <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/testimonials/client2.png') }}" alt="نورا السعدي" class="w-12 h-12 rounded-full object-cover">
                    <div class="mr-3">
                        <h4 class="font-bold text-[#1a5a72] dark:text-white">نورا السعدي</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-400">مديرة أنظمة الأمن</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <span class="text-yellow-400">★★★★★</span>
                </div>
                <p class="text-gray-600 dark:text-gray-300">
                    "المتابعة بعد البيع ممتازة، لم أتوقع هذا المستوى من الاهتمام. نظام المراقبة الذي زودونا به يعمل بكفاءة عالية."
                </p>
            </div>

            <!-- رأي العميل 3 -->
            <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/testimonials/client3.png') }}" alt="خالد الفهد" class="w-12 h-12 rounded-full object-cover">
                    <div class="mr-3">
                        <h4 class="font-bold text-[#1a5a72] dark:text-white">خالد الفهد</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-400">رئيس قسم IT</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <span class="text-yellow-400">★★★★☆</span>
                </div>
                <p class="text-gray-600 dark:text-gray-300">
                    "حلول الشبكات التي قدمتموها لنا ساهمت في زيادة كفاءة العمل بنسبة 40%. نتمنى لكم مزيداً من التقدم."
                </p>
            </div>
        </div>

        
    </div>
</section>

<!-- ======= الأنيميشن والسكريبت ======= -->
<style>
  @keyframes expand-bar {
    0% { width: 0; }
    100% { width: 100%; }
  }

  @keyframes contract-bar {
    0% { right: 0; width: 100%; }
    100% { right: 100%; width: 0; }
  }

  @keyframes reveal-text {
    0% { clip-path: inset(0 100% 0 0); opacity: 1; }
    100% { clip-path: inset(0 0% 0 0); opacity: 1; }
  }

  .animate-expand { animation: expand-bar 1s ease-out forwards; }
  .animate-contract { animation: contract-bar 1s ease-in forwards; }
  .animate-reveal { animation: reveal-text 1s ease-in forwards; }
  .animate-fade-in { animation: fadeIn 1s ease-in forwards; }

  @keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll("#slider > div > div");
    let current = 0;

    function resetAnimations(slide) {
      slide.querySelector('.bar').className = "bar absolute h-full bg-[#1782a4] right-0 w-0 z-10";
      slide.querySelector('.headline').className = "headline absolute right-0 z-20 text-white text-3xl md:text-5xl font-bold whitespace-nowrap opacity-0";
      slide.querySelector('.subtext').className = "subtext text-[#75CBEB] mt-4 text-lg md:text-2xl opacity-0";
    }

    function playAnimation(slide) {
      const bar = slide.querySelector('.bar');
      const text = slide.querySelector('.headline');
      const subtext = slide.querySelector('.subtext');

      bar.classList.add("animate-expand");

      setTimeout(() => {
        bar.classList.remove("animate-expand");
        bar.classList.add("animate-contract");
        text.classList.remove("opacity-0");
        text.classList.add("animate-reveal");
      }, 1000);

      setTimeout(() => {
        subtext.classList.add("animate-fade-in");
      }, 2500);
    }

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.style.opacity = i === index ? "1" : "0";
        resetAnimations(slide);
      });
      playAnimation(slides[index]);
    }

    showSlide(current);

    setInterval(() => {
      current = (current + 1) % slides.length;
      showSlide(current);
    }, 7000);
  });
</script>


@endsection
