@extends('layouts.app')

@section('content')

<!-- ======= قسم الشرائح ======= -->
<section id="slider" class="relative mt-0 pt-0 mb-0">
  <div class="relative h-[500px] md:h-[700px] lg:h-[850px] xl:h-[950px] overflow-hidden">

    @php
      $slides = [
        ['title' => 'إدارة المشاريع التقنية', 'subtitle' => 'حلول متكاملة لإدارة مشاريعك', 'image' => 'slider1.jpg'],
        ['title' => 'حلول الشبكات المتقدمة', 'subtitle' => 'تصميم البنية التحتية للشبكات', 'image' => 'slider2.jpg'],
        ['title' => 'أنظمة الحماية والمراقبة', 'subtitle' => 'أنظمة حماية ومراقبة متكاملة', 'image' => 'slider3.jpg'],
        ['title' => 'أنظمة الاتصالات', 'subtitle' => 'حلول متكاملة لربط مؤسستك داخليًا وخارجيًا', 'image' => 'service1.jpg'],
        ['title' => 'أنظمة الإنذار والسلامة', 'subtitle' => 'تقنيات متقدمة لحماية الأرواح والممتلكات', 'image' => 'service2.jpg'],
        ['title' => 'أنظمة المنازل الذكية', 'subtitle' => 'تحكم كامل في بيتك من أي مكان', 'image' => 'service3.jpg'],
        ['title' => 'الأنظمة الصوتية والبصرية', 'subtitle' => 'جودة صوت وصورة تناسب جميع الاحتياجات', 'image' => 'service4.jpg'],
        ['title' => 'أجهزة التتبع والمراقبة', 'subtitle' => 'تتبع ذكي للمركبات والأصول والمواقع', 'image' => 'service5.jpg'],
        ['title' => 'عقود الصيانة السنوية', 'subtitle' => 'صيانة وقائية دورية تضمن استمرارية العمل', 'image' => 'service6.jpg'],
        ['title' => 'أنظمة التحكم في الدخول', 'subtitle' => 'أمان مخصص لأبواب ومرافق المنشآت', 'image' => 'service7.jpg'],
        ['title' => 'حلول الذكاء الاصطناعي والتحليلات', 'subtitle' => 'تقنيات تحليل البيانات والتنبؤ الذكي', 'image' => 'service8.jpg'],
        ['title' => 'حلول البرمجيات والتطبيقات', 'subtitle' => 'تطوير أنظمة مرنة تناسب احتياجاتك', 'image' => 'service9.jpg'],
        ['title' => 'أنظمة الطاقة البديلة', 'subtitle' => 'حلول طاقة نظيفة ومستدامة للمستقبل', 'image' => 'service10.jpg'],
        ['title' => 'أنظمة الأمن والسلامة المهنية', 'subtitle' => 'أنظمة لحماية العاملين وفق أعلى المعايير', 'image' => 'service11.jpg'],
      ];
    @endphp

    @foreach ($slides as $index => $slide)
    <div class="absolute inset-0 transition-opacity duration-1000 {{ $index === 0 ? 'opacity-100' : 'opacity-0' }} bg-cover bg-center slide" style="background-image: url('{{ asset('images/' . $slide['image']) }}');">
      <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center px-4 md:px-16">
        <div class="text-right font-arabic w-full max-w-[95%] md:max-w-[600px] lg:max-w-[750px] xl:max-w-[900px] mx-auto">
          <div class="relative min-h-[5rem] md:min-h-[7rem] lg:min-h-[9rem] xl:min-h-[10rem] w-full flex items-center justify-end overflow-hidden">
            <h1 class="headline text-white text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-bold whitespace-normal break-words px-2 text-right w-full absolute z-10 opacity-0 animate-none">
              {{ $slide['title'] }}
            </h1>
            <div class="bar absolute h-full bg-[#1782a4] right-0 top-0 w-0 z-20 origin-right"></div>
          </div>
          <p class="subtext text-[#75CBEB] mt-4 text-base sm:text-lg md:text-2xl lg:text-3xl opacity-0 px-2 relative z-20">
            {{ $slide['subtitle'] }}
          </p>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</section>

<style>
  @media (min-width: 768px) {
    .headline {
      line-height: 1.4 !important;
    }
  }
  @media (min-width: 1024px) {
    .headline {
      line-height: 1.6 !important;
    }
  }
  @media (min-width: 1280px) {
    .headline {
      line-height: 1.75 !important;
    }
  }

  @keyframes typing {
    0% {
      clip-path: inset(0 100% 0 0);
    }
    100% {
      clip-path: inset(0 0 0 0);
    }
  }

  .animate-typing {
    animation: typing 1.2s steps(40, end) forwards;
    direction: rtl;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('#slider .slide');
    let currentSlide = 0;

    function showSlide(index) {
      slides.forEach((slide, i) => {
        const headline = slide.querySelector('.headline');
        const subtext = slide.querySelector('.subtext');
        const bar = slide.querySelector('.bar');

        headline.classList.add('opacity-0');
        subtext.classList.add('opacity-0');

        if (i === index) {
          slide.classList.add('opacity-100');
          slide.classList.remove('opacity-0');

          bar.style.transition = 'none';
          bar.style.width = '100%';

          setTimeout(() => {
            bar.style.transition = 'width 1.2s ease-in-out';
            bar.style.width = '0';
            headline.style.zIndex = 10;
            headline.classList.remove('opacity-0');
            headline.classList.add('opacity-100', 'animate-typing');
            subtext.classList.remove('opacity-0');
            subtext.classList.add('opacity-100');
          }, 50);
        } else {
          slide.classList.remove('opacity-100');
          slide.classList.add('opacity-0');
          bar.style.width = '0';
          headline.classList.remove('opacity-100', 'animate-typing');
          subtext.classList.remove('opacity-100');
        }
      });
    }

    setInterval(() => {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }, 7000);

    showSlide(currentSlide);
  });
</script>



<section class="py-16 bg-gray-100 dark:bg-slate-900">
  <div class="container mx-auto px-4 flex flex-col-reverse md:flex-row items-center gap-12">

    <!-- النص التعريفي -->
    <div class="w-full md:w-1/2 text-center md:text-right">
      <h2 class="text-4xl font-extrabold text-[#1782a4] dark:text-[#60cdf2] mb-4 animate-fade-in-down">
        من نحن
      </h2>
      <p class="text-lg text-gray-800 dark:text-gray-200 leading-relaxed mb-6 animate-fade-in">
        Medcom هي شركة رائدة في مجال الأنظمة الأمنية وحلول الشبكات، تأسست لتلبية احتياجات السوق المتزايدة في مجال تكنولوجيا المعلومات.
        نحن نقدم مجموعة شاملة من الحلول والخدمات التي تساعد المؤسسات على تعزيز أمانها وكفاءتها التشغيلية.
      </p>
      <a href="/من-نحن" class="inline-block px-6 py-2 bg-[#1782a4] text-white hover:bg-[#0e5f75] rounded-md text-sm transition animate-fade-in-up">
        تعرف أكثر
      </a>
    </div>

    <!-- صورة تعريفية -->
    <div class="w-full md:w-1/2 flex justify-center animate-fade-in-left">
      <img src="{{ asset('images/about-medcom.jpg') }}" alt="Medcom" class="max-w-sm w-full rounded-xl shadow-lg">
    </div>

  </div>
</section>




<!-- حركات CSS -->
<style>
@keyframes fade-in {
  from { opacity: 0; transform: translateY(20px); }
  to   { opacity: 1; transform: translateY(0); }
}

@keyframes fade-in-down {
  from { opacity: 0; transform: translateY(-20px); }
  to   { opacity: 1; transform: translateY(0); }
}

@keyframes fade-in-up {
  from { opacity: 0; transform: translateY(30px); }
  to   { opacity: 1; transform: translateY(0); }
}

@keyframes fade-in-left {
  from { opacity: 0; transform: translateX(-30px); }
  to   { opacity: 1; transform: translateX(0); }
}

.animate-fade-in       { animation: fade-in 0.8s ease forwards; }
.animate-fade-in-down  { animation: fade-in-down 0.8s ease forwards; }
.animate-fade-in-up    { animation: fade-in-up 0.8s ease forwards; }
.animate-fade-in-left  { animation: fade-in-left 0.8s ease forwards; }
</style>


<!-- خدماتنا في الرئيسية -->
<section class="py-16 bg-gray-100 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-4">خدمات مختارة</h2>
            <div class="w-24 h-1 bg-[#55aabb] mx-auto mb-4"></div>
            <p class="text-lg text-gray-600 dark:text-gray-300">تعرف على أبرز خدماتنا التقنية</p>
        </div>

        @if($services->count())
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($services as $service)
                    <a href="{{ url('/الخدمات/' . $service->slug) }}"
                       class="block bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border-t-4 border-[#1a5a72]"
                       data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <img src="{{ asset('images/services/' . $service->slug . '.jpg') }}"
                             onerror="this.src='{{ asset('images/services/default.jpg') }}'"
                             alt="{{ $service->title }}"
                             class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl font-bold text-[#1a5a72] text-center">{{ $service->title }}</h3>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="text-center mt-10">
                <a href="{{ route('services.index') }}"
                   class="inline-block bg-[#1a5a72] text-white font-bold py-3 px-8 rounded-full hover:bg-[#155768] transition-all shadow-lg">
                    عرض المزيد من الخدمات
                </a>
            </div>
        @else
            <p class="text-center text-red-500 text-lg mt-8 font-semibold">لا توجد خدمات لعرضها حالياً.</p>
        @endif
    </div>
</section>



<!-- ======= قسم إنجازاتنا بالأرقام ======= -->
<section class="py-16 bg-gray-100 dark:bg-gray-900" id="stats">
  <div class="container mx-auto px-4">
    <div class="text-center mb-10">
      <h2 class="text-3xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-4">إنجازاتنا بالأرقام</h2>
      <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
      @foreach ([
        ['count' => 300, 'label' => 'مشروع مكتمل'],
        ['count' => 1000, 'label' => 'عميل راضٍ'],
        ['count' => 50, 'label' => 'شريك استراتيجي'],
        ['count' => 24, 'label' => 'ساعة دعم فني'],
      ] as $stat)
        <div class="bg-white dark:bg-gray-700 p-6 rounded-xl shadow-md flex flex-col items-center justify-center">
          <div class="counter text-4xl sm:text-5xl md:text-6xl font-extrabold text-[#1a5a72] dark:text-[#60cdf2] mb-2" data-target="{{ $stat['count'] }}">0</div>
          <div class="text-sm sm:text-base text-gray-600 dark:text-gray-300">{{ $stat['label'] }}</div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- ======= سكربت تشغيل العدادات بتزامن + إعادة كل 15 ثانية ======= -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');
    const speed = 10;
    const stepRatio = 100;
    const resetInterval = 10000;

    function runCounters() {
      counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        let count = 0;
        const step = Math.ceil(target / stepRatio);
        counter.innerText = '0';

        const update = () => {
          count += step;
          if (count < target) {
            counter.innerText = count;
            setTimeout(update, speed);
          } else {
            counter.innerText = target + '+';
          }
        };

        update();
      });
    }

    runCounters();
    setInterval(runCounters, resetInterval);
  });
</script>



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
        <div class="absolute inset-0 bg-gradient-to-t from-[#082f49]/90 via-[#082f49]/50 to-transparent z-10"></div>
        <img src="{{ asset('images/cloud-solution.jpg') }}" alt="الحلول السحابية" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
        <div class="absolute bottom-0 left-0 right-0 z-20 p-6 text-right transition-all duration-500 group-hover:bottom-5">
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

    <!-- زر في المنتصف -->
    <div class="w-full mt-12 flex justify-center">
      <a href="/حلولنا" class="bg-[#0369a1] hover:bg-[#075985] text-white font-bold py-3 px-8 rounded-full transition-all">
        استعرض جميع الحلول
      </a>
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
<!--شركاؤنا-->
<!-- قسم الشركاء مع تحسين العرض في الوضع المظلم -->
<section class="py-12 bg-gray-50 dark:bg-slate-800 relative">
  <div class="container mx-auto px-4">
    <div class="text-center mb-8">
      <h2 class="text-2xl font-bold text-[#1a5a72] dark:text-white">شركاؤنا الاستراتيجيون</h2>
      <div class="w-16 h-1 bg-[#55aabb] mx-auto mt-3"></div>
    </div>

    <div class="relative">
      <!-- أزرار الأسهم -->
      <button id="partner-prev" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-[#1a5a72] hover:bg-[#13475a] text-white p-2 rounded-full shadow-md">
        <i class="fas fa-chevron-left"></i>
      </button>
      <button id="partner-next" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-[#1a5a72] hover:bg-[#13475a] text-white p-2 rounded-full shadow-md">
        <i class="fas fa-chevron-right"></i>
      </button>

      <!-- سلايدر الشركاء -->
      <div class="swiper partner-swiper">
        <div class="swiper-wrapper py-4">
          @php
            $logos = ['hikvision', 'dahua', 'partner12', 'partner11', 'cisco', 'azure', 'fortinet', '1', '2', '3', '4', '5'];
          @endphp
          @foreach(array_merge($logos, $logos) as $logo)
            <div class="swiper-slide">
              <div class="partner-logo h-24 flex items-center justify-center px-4">
                <div class="bg-white p-2 rounded-md shadow-md dark:shadow dark:bg-white">
                  <img src="{{ asset('images/partners/' . $logo . '.png') }}"
                       alt="{{ $logo }}"
                       class="h-16 w-auto object-contain transition-all duration-300 hover:scale-110" />
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.partner-swiper', {
      loop: true,
      autoplay: {
        delay: 0,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      speed: 4000,
      grabCursor: true,
      slidesPerView: 'auto',
      spaceBetween: 30,
      freeMode: {
        enabled: true,
        momentum: false
      },
      navigation: {
        nextEl: '#partner-next',
        prevEl: '#partner-prev',
      },
    });
  });
</script>

<style>
  .partner-swiper {
    overflow: hidden;
  }

  .partner-swiper .swiper-slide {
    width: auto !important;
  }

  .partner-logo:hover {
    transform: translateY(-5px);
  }

  .partner-swiper::-webkit-scrollbar {
    display: none;
  }
</style>





<!-- قسم آراء العملاء بسلايدر متحرك -->
<section class="py-16 bg-white dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <span class="text-[#55aabb] font-semibold">آراء العملاء</span>
            <h2 class="text-3xl font-bold text-[#1a5a72] dark:text-white mt-2">ما يقولونه عنا</h2>
            <div class="w-20 h-1 bg-[#55aabb] mx-auto mt-4"></div>
            <p class="mt-4 text-gray-600 dark:text-gray-500 max-w-2xl mx-auto">
                آراء عملائنا الأعزاء هي شهادتنا الحقيقية على جودة خدماتنا
            </p>
        </div>

        <!-- سلايدر آراء العملاء -->
        <div class="relative px-8">
            <div class="swiper testimonials-slider">
                <div class="swiper-wrapper py-6">
                    <!-- العميل 1 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-[#1a5a72] flex items-center justify-center text-white text-xl font-bold">
                                    ف
                                </div>
                                <div class="mr-3">
                                    <h4 class="font-bold text-[#1a5a72] dark:text-white">فهد الرشيد</h4>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <span class="text-yellow-400">★★★★★</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                "الخدمة ممتازة والفريق محترف جداً، أنصح الجميع بالتعامل معهم."
                            </p>
                        </div>
                    </div>

                    <!-- العميل 2 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-[#55aabb] flex items-center justify-center text-white text-xl font-bold">
                                    ن
                                </div>
                                <div class="mr-3">
                                    <h4 class="font-bold text-[#1a5a72] dark:text-white">نورة القحطاني</h4>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <span class="text-yellow-400">★★★★★</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                "سرعتهم في التنفيذ ودقتهم في العمل تستحق الإشادة."
                            </p>
                        </div>
                    </div>

                    <!-- العميل 3 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-[#1a5a72] flex items-center justify-center text-white text-xl font-bold">
                                    ت
                                </div>
                                <div class="mr-3">
                                    <h4 class="font-bold text-[#1a5a72] dark:text-white">تركي العتيبي</h4>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <span class="text-yellow-400">★★★★★</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                "حلولهم التقنية ساعدت في تطوير عملي بشكل ملحوظ."
                            </p>
                        </div>
                    </div>

                    <!-- العميل 4 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-[#55aabb] flex items-center justify-center text-white text-xl font-bold">
                                    ل
                                </div>
                                <div class="mr-3">
                                    <h4 class="font-bold text-[#1a5a72] dark:text-white">لولوة السليم</h4>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <span class="text-yellow-400">★★★★☆</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                "تجربة ممتازة مع الفريق، دعم فني مميز وسريع."
                            </p>
                        </div>
                    </div>

                    <!-- العميل 5 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-[#1a5a72] flex items-center justify-center text-white text-xl font-bold">
                                    ب
                                </div>
                                <div class="mr-3">
                                    <h4 class="font-bold text-[#1a5a72] dark:text-white">بدر الشهري</h4>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <span class="text-yellow-400">★★★★★</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                "أنظمة الحماية التي زودونا بها على أعلى مستوى."
                            </p>
                        </div>
                    </div>

                    <!-- العميل 6 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-[#55aabb] flex items-center justify-center text-white text-xl font-bold">
                                    أ
                                </div>
                                <div class="mr-3">
                                    <h4 class="font-bold text-[#1a5a72] dark:text-white">أمل الجبرين</h4>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <span class="text-yellow-400">★★★★★</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                "الدقة في المواعيد والالتزام بالجودة من أهم ما يميزهم."
                            </p>
                        </div>
                    </div>

                    <!-- العميل 7 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-[#1a5a72] flex items-center justify-center text-white text-xl font-bold">
                                    س
                                </div>
                                <div class="mr-3">
                                    <h4 class="font-bold text-[#1a5a72] dark:text-white">علي الغامدي</h4>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <span class="text-yellow-400">★★★★★</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                "حلول متكاملة تغطي جميع احتياجاتنا التقنية."
                            </p>
                        </div>
                    </div>

                    <!-- العميل 8 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-[#55aabb] flex items-center justify-center text-white text-xl font-bold">
                                    ه
                                </div>
                                <div class="mr-3">
                                    <h4 class="font-bold text-[#1a5a72] dark:text-white">هناء العتيبي</h4>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <span class="text-yellow-400">★★★★★</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                "فريق دعم فني متاح على مدار الساعة."
                            </p>
                        </div>
                    </div>

                    <!-- العميل 9 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-[#1a5a72] flex items-center justify-center text-white text-xl font-bold">
                                    خ
                                </div>
                                <div class="mr-3">
                                    <h4 class="font-bold text-[#1a5a72] dark:text-white">خالد الحربي</h4>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <span class="text-yellow-400">★★★★☆</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                "أسعار تنافسية مع جودة عالية في الخدمة."
                            </p>
                        </div>
                    </div>

                    <!-- العميل 10 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-[#55aabb] flex items-center justify-center text-white text-xl font-bold">
                                    ر
                                </div>
                                <div class="mr-3">
                                    <h4 class="font-bold text-[#1a5a72] dark:text-white">ريم السويد</h4>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <span class="text-yellow-400">★★★★★</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                "توصيل المعدات في الوقت المحدد دون أي تأخير."
                            </p>
                        </div>
                    </div>

                    <!-- العميل 11 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-[#1a5a72] flex items-center justify-center text-white text-xl font-bold">
                                    ع
                                </div>
                                <div class="mr-3">
                                    <h4 class="font-bold text-[#1a5a72] dark:text-white">عبدالله الزهراني</h4>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <span class="text-yellow-400">★★★★★</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                "حلول أمن المعلومات التي قدموها كانت ممتازة."
                            </p>
                        </div>
                    </div>

                    <!-- العميل 12 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-[#55aabb] flex items-center justify-center text-white text-xl font-bold">
                                    م
                                </div>
                                <div class="mr-3">
                                    <h4 class="font-bold text-[#1a5a72] dark:text-white">محمد السعد</h4>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <span class="text-yellow-400">★★★★★</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                "التكلفة مقابل الجودة كانت معقولة جداً."
                            </p>
                        </div>
                    </div>

                    <!-- العميل 13 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-[#1a5a72] flex items-center justify-center text-white text-xl font-bold">
                                    ح
                                </div>
                                <div class="mr-3">
                                    <h4 class="font-bold text-[#1a5a72] dark:text-white">حسن النجدي</h4>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <span class="text-yellow-400">★★★★☆</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                "التدريب الذي حصل عليه موظفينا كان شاملاً ومفيداً."
                            </p>
                        </div>
                    </div>

                    <!-- العميل 14 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-[#55aabb] flex items-center justify-center text-white text-xl font-bold">
                                    ض
                                </div>
                                <div class="mr-3">
                                    <h4 class="font-bold text-[#1a5a72] dark:text-white">ضياء القحطاني</h4>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <span class="text-yellow-400">★★★★★</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                "التحديثات الدورية لأنظمتنا تتم في الوقت المحدد."
                            </p>
                        </div>
                    </div>

                    <!-- العميل 15 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-[#1a5a72] flex items-center justify-center text-white text-xl font-bold">
                                    و
                                </div>
                                <div class="mr-3">
                                    <h4 class="font-bold text-[#1a5a72] dark:text-white">وليد الفهد</h4>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <span class="text-yellow-400">★★★★★</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                "سرعة استجابة الفريق الفني في حالات الطوارئ ممتازة."
                            </p>
                        </div>
                    </div>

                    <!-- العميل 16 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-[#55aabb] flex items-center justify-center text-white text-xl font-bold">
                                    ي
                                </div>
                                <div class="mr-3">
                                    <h4 class="font-bold text-[#1a5a72] dark:text-white">يوسف المطيري</h4>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <span class="text-yellow-400">★★★★★</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                "التصميم الاحترافي لأنظمة المراقبة كان مميزاً."
                            </p>
                        </div>
                    </div>

                    <!-- العميل 17 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-[#1a5a72] flex items-center justify-center text-white text-xl font-bold">
                                    ص
                                </div>
                                <div class="mr-3">
                                    <h4 class="font-bold text-[#1a5a72] dark:text-white">صالح العلي</h4>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <span class="text-yellow-400">★★★★☆</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                "حلول الشبكات التي قدموها ساهمت في رفع كفاءة العمل."
                            </p>
                        </div>
                    </div>

                    <!-- العميل 18 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-[#55aabb] flex items-center justify-center text-white text-xl font-bold">
                                    ع
                                </div>
                                <div class="mr-3">
                                    <h4 class="font-bold text-[#1a5a72] dark:text-white">علي الشمراني</h4>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <span class="text-yellow-400">★★★★★</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                "التعامل معهم كان احترافياً من البداية للنهاية."
                            </p>
                        </div>
                    </div>

                    <!-- العميل 19 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-[#1a5a72] flex items-center justify-center text-white text-xl font-bold">
                                    م
                                </div>
                                <div class="mr-3">
                                    <h4 class="font-bold text-[#1a5a72] dark:text-white">منى الحارثي</h4>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <span class="text-yellow-400">★★★★★</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                "التقارير الشهرية التي يقدمونها مفيدة جداً للإدارة."
                            </p>
                        </div>
                    </div>
                    @foreach($reviews as $review)
    <div class="swiper-slide">
        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 h-full">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-full bg-[#1a5a72] flex items-center justify-center text-white text-xl font-bold">
                    {{ $review->initial }}
                </div>
                <div class="mr-3">
                    <h4 class="font-bold text-[#1a5a72] dark:text-white">{{ $review->name }}</h4>
                </div>
            </div>
            <div class="flex mb-2">
                @for ($i = 1; $i <= 5; $i++)
                    <span class="{{ $i <= $review->rating ? 'text-yellow-400' : 'text-gray-300' }}">★</span>
                @endfor
            </div>
            <p class="text-gray-600 dark:text-gray-300">
                "{{ $review->comment }}"
            </p>
        </div>
    </div>
@endforeach

                    <!-- العميل 20 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-[#55aabb] flex items-center justify-center text-white text-xl font-bold">
                                    ج
                                </div>
                                <div class="mr-3">
                                    <h4 class="font-bold text-[#1a5a72] dark:text-white">جواهر السديري</h4>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <span class="text-yellow-400">★★★★★</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                "أنظمة المراقبة تعمل بكفاءة عالية منذ التركيب."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- أزرار التنقل -->
            <div class="swiper-button-next !text-[#1a5a72] dark:!text-white"></div>
            <div class="swiper-button-prev !text-[#1a5a72] dark:!text-white"></div>
        </div>
    </div>



    
<div class="mt-12 max-w-xl mx-auto bg-gray-100 dark:bg-slate-800 p-6 rounded-xl shadow">
    <h3 class="text-xl font-bold text-[#1a5a72] dark:text-white mb-4 text-center">
        شاركنا رأيك حول خدماتنا
    </h3>

    <div class="mt-12 max-w-xl mx-auto bg-gray-100 dark:bg-slate-800 p-6 rounded-xl shadow">
      
    <form method="POST" action="{{ route('reviews.store') }}">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 dark:text-white">الاسم</label>
            <input type="text" name="name" required class="w-full mt-1 p-2 rounded border" />
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 dark:text-white">التقييم (1 - 5)</label>
            <input type="number" name="rating" min="1" max="5" required class="w-full mt-1 p-2 rounded border" />
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 dark:text-white">رأيك</label>
            <textarea name="comment" required class="w-full mt-1 p-2 rounded border"></textarea>
        </div>
        <button type="submit" class="bg-[#1a5a72] text-white px-4 py-2 rounded hover:bg-[#144c60]">إرسال</button>
    </form>
</div>

</section>

<!-- أضف هذه الأكواد في head -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<!-- أضف هذا الكود قبل إغلاق body -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.testimonials-slider', {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            speed: 800,
            grabCursor: true,
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 3 }
            }
        });
    });
</script>

<style>
    /* تخصيص سلايدر آراء العملاء */
    .testimonials-slider .swiper-slide {
        height: auto;
    }
    
    /* تخصيص أزرار التنقل */
    .swiper-button-next:after, .swiper-button-prev:after {
        font-size: 1.5rem;
        font-weight: bold;
    }
    
    .swiper-button-next, .swiper-button-prev {
        background-color: rgba(255,255,255,0.7);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        backdrop-filter: blur(4px);
    }
    
    .swiper-button-next:hover, .swiper-button-prev:hover {
        background-color: rgba(255,255,255,0.9);
    }
    
    .dark .swiper-button-next, 
    .dark .swiper-button-prev {
        background-color: rgba(30,41,59,0.7);
    }
    
    .dark .swiper-button-next:hover, 
    .dark .swiper-button-prev:hover {
        background-color: rgba(30,41,59,0.9);
    }
</style>
<!-- ======= تأثيرات الشرائح (CSS) ======= -->
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
  0% {
    clip-path: inset(0 100% 0 0);
    opacity: 0;
  }
  100% {
    clip-path: inset(0 0 0 0);
    opacity: 1;
  }
}

@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

.animate-expand {
  animation: expand-bar 0.7s ease-out forwards;
}

.animate-contract {
  animation: contract-bar 0.7s ease-in forwards;
}

.animate-reveal {
  animation: reveal-text 0.8s ease-out forwards;
}

.animate-fade-in {
  animation: fadeIn 0.8s ease-out forwards;
}

@media (max-width: 640px) {
  .bar {
    min-width: 4px;
  }
}
</style>

<!-- ======= سكريبت الشرائح (JavaScript) ======= -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const slides = document.querySelectorAll("#slider > div > div");
  let current = 0;

  function resetAnimations(slide) {
    const bar = slide.querySelector('.bar');
    const headline = slide.querySelector('.headline');
    const subtext = slide.querySelector('.subtext');

    bar.classList.remove('animate-expand', 'animate-contract');
    bar.style.width = '0';
    bar.style.right = '0';
    bar.style.display = 'block'; // إعادة إظهار الشريط في كل شريحة

    headline.classList.remove('animate-reveal');
    subtext.classList.remove('animate-fade-in');

    headline.style.opacity = '0';
    subtext.style.opacity = '0';
  }

  function playAnimation(slide) {
    const bar = slide.querySelector('.bar');
    const headline = slide.querySelector('.headline');
    const subtext = slide.querySelector('.subtext');

    bar.classList.add('animate-expand');

    setTimeout(() => {
      bar.classList.remove('animate-expand');
      bar.classList.add('animate-contract');
      headline.classList.add('animate-reveal');
    }, 700);

    setTimeout(() => {
      subtext.classList.add('animate-fade-in');
    }, 1500);

    // 🧼 إخفاء الشريط بعد انتهاء الانكماش (للجوال والكمبيوتر)
    setTimeout(() => {
      bar.style.display = 'none';
    }, 2200);
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
