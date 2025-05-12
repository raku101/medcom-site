@extends('layouts.app')

@section('content')

<!-- ======= قسم الشرائح ======= -->
<section id="slider" class="relative mt-0 pt-0 mb-0">
  <div class="relative h-[700px] overflow-hidden">
    
    <!-- الشريحة 1 -->
    <div class="absolute inset-0 transition-opacity duration-1000 opacity-100 bg-cover bg-center" style="background-image: url('{{ asset('images/slider1.jpg') }}');">
      <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-end pr-8 md:pr-20 pl-4 md:pl-16">
        <div class="text-right font-arabic w-full max-w-[700px]">
          <div class="relative h-20 w-full max-w-[620px] overflow-hidden flex items-center">
            <div class="bar absolute h-full bg-[#1782a4] right-0 w-0 z-10"></div>
            <h1 class="headline absolute right-0 z-20 text-white text-3xl md:text-5xl font-bold whitespace-nowrap opacity-0">
              إدارة المشاريع التقنية
            </h1>
          </div>
          <p class="subtext text-[#75CBEB] mt-4 text-lg md:text-2xl opacity-0">نقدم لك حلاً متكاملاً لإدارة مشاريعك التقنية</p>
        </div>
      </div>
    </div>

    <!-- الشريحة 2 -->
    <div class="absolute inset-0 transition-opacity duration-1000 opacity-0 bg-cover bg-center" style="background-image: url('{{ asset('images/slider2.jpg') }}');">
      <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-end pr-8 md:pr-20 pl-4 md:pl-16">
        <div class="text-right font-arabic w-full max-w-[700px]">
          <div class="relative h-20 w-full max-w-[620px] overflow-hidden flex items-center">
            <div class="bar absolute h-full bg-[#1782a4] right-0 w-0 z-10"></div>
            <h1 class="headline absolute right-0 z-20 text-white text-3xl md:text-5xl font-bold whitespace-nowrap opacity-0">
              حلول الشبكات المتقدمة
            </h1>
          </div>
          <p class="subtext text-[#75CBEB] mt-4 text-lg md:text-2xl opacity-0">نصمم لك البنية التحتية لشبكتك بأعلى كفاءة</p>
        </div>
      </div>
    </div>

    <!-- الشريحة 3 -->
    <div class="absolute inset-0 transition-opacity duration-1000 opacity-0 bg-cover bg-center" style="background-image: url('{{ asset('images/slider3.jpg') }}');">
      <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-end pr-8 md:pr-20 pl-4 md:pl-16">
        <div class="text-right font-arabic w-full max-w-[700px]">
          <div class="relative h-20 w-full max-w-[620px] overflow-hidden flex items-center">
            <div class="bar absolute h-full bg-[#1782a4] right-0 w-0 z-10"></div>
            <h1 class="headline absolute right-0 z-20 text-white text-3xl md:text-5xl font-bold whitespace-nowrap opacity-0">
              أنظمة الحماية والمراقبة
            </h1>
          </div>
          <p class="subtext text-[#75CBEB] mt-4 text-lg md:text-2xl opacity-0">أمنك بين يديك بكاميرات وأنظمة متقدمة</p>
        </div>
      </div>
    </div>

  </div>
</section>



<!-- ======= قسم خدماتنا - تصميم إبداعي ======= -->
<section class="py-12 md:py-16 bg-white text-center relative z-10">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl md:text-5xl font-bold text-[#0077aa] mb-10 md:mb-12 relative inline-block">
      خدماتنا
      <span class="absolute bottom-0 left-0 w-full h-1 bg-[#0077aa] transform scale-x-75"></span>
    </h2>

    <div class="flex flex-wrap justify-center gap-6 md:gap-8 lg:gap-10">
      <!-- البطاقة 1 - كاميرات المراقبة -->
      <div class="w-full sm:w-80 transform transition-all duration-500 hover:-translate-y-2">
        <div class="relative h-96 bg-gradient-to-br from-[#0077aa] to-[#005577] rounded-2xl overflow-hidden shadow-xl group">
          <div class="absolute inset-0 bg-[url('{{ asset('images/widget.png') }}')] opacity-20 group-hover:opacity-30 transition-opacity duration-500"></div>
          
          <div class="relative h-full flex flex-col items-center p-6">
            <div class="w-full h-48 mt-6 overflow-hidden rounded-xl shadow-lg border-4 border-white/20 transform group-hover:scale-95 transition-transform duration-500">
              <img src="{{ asset('images/camera.jpg') }}" alt="أنظمة كاميرات المراقبة" class="w-full h-full object-cover">
            </div>
            
            <div class="mt-6 text-center">
              <h3 class="text-white text-2xl font-bold mb-3 relative inline-block">
                أنظمة كاميرات المراقبة
                <span class="absolute bottom-0 left-0 w-full h-1 bg-white transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
              </h3>
              <p class="text-white/80 text-sm hidden group-hover:block animate-fadeIn">
                حلول متكاملة لأنظمة المراقبة الأمنية بتقنيات عالية الجودة
              </p>
            </div>
            
            <div class="mt-auto w-full">
              <a href="/خدمات/كاميرات-المراقبة" class="inline-block px-6 py-2 bg-white text-[#0077aa] font-medium rounded-full transform group-hover:scale-105 transition-all duration-300 shadow-md hover:shadow-lg">
                اكتشف المزيد
              </a>
            </div>
          </div>
          
          <div class="absolute top-4 right-4 bg-white/10 backdrop-blur-sm px-3 py-1 rounded-full text-white text-xs font-medium">
            أمن
          </div>
        </div>
      </div>

      <!-- البطاقة 2 - خدمات الشبكات -->
      <div class="w-full sm:w-80 transform transition-all duration-500 hover:-translate-y-2">
        <div class="relative h-96 bg-gradient-to-br from-[#0077aa] to-[#005577] rounded-2xl overflow-hidden shadow-xl group">
          <div class="absolute inset-0 bg-[url('{{ asset('images/widget.png') }}')] opacity-20 group-hover:opacity-30 transition-opacity duration-500"></div>
          
          <div class="relative h-full flex flex-col items-center p-6">
            <div class="w-full h-48 mt-6 overflow-hidden rounded-xl shadow-lg border-4 border-white/20 transform group-hover:scale-95 transition-transform duration-500">
              <img src="{{ asset('images/network.jpg') }}" alt="خدمات الشبكات" class="w-full h-full object-cover">
            </div>
            
            <div class="mt-6 text-center">
              <h3 class="text-white text-2xl font-bold mb-3 relative inline-block">
                خدمات الشبكات
                <span class="absolute bottom-0 left-0 w-full h-1 bg-white transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
              </h3>
              <p class="text-white/80 text-sm hidden group-hover:block animate-fadeIn">
                تصميم وتنفيذ حلول شبكات متكاملة بأعلى معايير الكفاءة
              </p>
            </div>
            
            <div class="mt-auto w-full">
              <a href="/خدمات/شبكات" class="inline-block px-6 py-2 bg-white text-[#0077aa] font-medium rounded-full transform group-hover:scale-105 transition-all duration-300 shadow-md hover:shadow-lg">
                اكتشف المزيد
              </a>
            </div>
          </div>
          
          <div class="absolute top-4 right-4 bg-white/10 backdrop-blur-sm px-3 py-1 rounded-full text-white text-xs font-medium">
            اتصالات
          </div>
        </div>
      </div>

      <!-- البطاقة 3 - الأمن السيبراني -->
      <div class="w-full sm:w-80 transform transition-all duration-500 hover:-translate-y-2">
        <div class="relative h-96 bg-gradient-to-br from-[#0077aa] to-[#005577] rounded-2xl overflow-hidden shadow-xl group">
          <div class="absolute inset-0 bg-[url('{{ asset('images/widget.png') }}')] opacity-20 group-hover:opacity-30 transition-opacity duration-500"></div>
          
          <div class="relative h-full flex flex-col items-center p-6">
            <div class="w-full h-48 mt-6 overflow-hidden rounded-xl shadow-lg border-4 border-white/20 transform group-hover:scale-95 transition-transform duration-500">
              <img src="{{ asset('images/cyber.jpg') }}" alt="حلول الأمن السيبراني" class="w-full h-full object-cover">
            </div>
            
            <div class="mt-6 text-center">
              <h3 class="text-white text-2xl font-bold mb-3 relative inline-block">
                حلول الأمن السيبراني
                <span class="absolute bottom-0 left-0 w-full h-1 bg-white transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
              </h3>
              <p class="text-white/80 text-sm hidden group-hover:block animate-fadeIn">
                حماية شاملة لأنظمتك الرقمية من التهديدات الإلكترونية
              </p>
            </div>
            
            <div class="mt-auto w-full">
              <a href="/خدمات/الأمن-السيبراني" class="inline-block px-6 py-2 bg-white text-[#0077aa] font-medium rounded-full transform group-hover:scale-105 transition-all duration-300 shadow-md hover:shadow-lg">
                اكتشف المزيد
              </a>
            </div>
          </div>
          
          <div class="absolute top-4 right-4 bg-white/10 backdrop-blur-sm px-3 py-1 rounded-full text-white text-xs font-medium">
            حماية
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .animate-fadeIn {
    animation: fadeIn 0.5s ease-out forwards;
  }
</style>


<!-- ======= قسم نبذة تعريفية صغيرة ======= -->
<section class="text-center pt-0 pb-8 px-4 bg-white">
  <div class="inline-block bg-[#1782a4] text-white text-sm sm:text-base font-bold rounded-full px-6 py-2 shadow-md">
    كل الخدمات والمنتجات التقنية في مكان واحد
  </div>
  <p class="mt-4 text-sm sm:text-base text-[#0e5f75] font-medium">
    تقدم الشركة حلولًا شاملة تواكب تطلعات الأعمال وتسهم في تحقيق أهداف الأعمال
  </p>
</section>

<section class="py-16 bg-gradient-to-b from-[#f0f9ff] to-[#e0f2fe] text-center">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl font-bold text-[#0369a1] mb-12">حلولنا التقنية المتكاملة</h2>

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
