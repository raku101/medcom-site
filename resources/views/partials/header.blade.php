<header dir="rtl" class="w-full sticky top-0 z-50 bg-white dark:bg-slate-900 shadow">
  <!-- الشريط العلوي -->
  <div class="bg-[#1782a4] text-white text-sm px-4 py-2">
    <div class="flex flex-wrap justify-center md:justify-end gap-4 items-center">
      <!-- البريد -->
      <div class="group relative flex items-center gap-2 cursor-pointer">
        <span class="bg-white text-[#1782a4] p-2 w-8 h-8 flex items-center justify-center rounded-md transition hover:bg-[#0e5f75] hover:text-white">
          <i class="fas fa-envelope"></i>
        </span>
        <span class="absolute right-10 top-1/2 -translate-y-1/2 bg-white text-[#1782a4] px-3 py-1 rounded shadow-md text-xs whitespace-nowrap hidden group-hover:inline-block">
          info@medcom.it.com
        </span>
      </div>

      <!-- الهاتف -->
      <div class="group relative flex items-center gap-2 cursor-pointer">
        <span class="bg-white text-[#1782a4] p-2 w-8 h-8 flex items-center justify-center rounded-md transition hover:bg-[#0e5f75] hover:text-white">
          <i class="fas fa-phone"></i>
        </span>
        <span class="absolute right-10 top-1/2 -translate-y-1/2 bg-white text-[#1782a4] px-3 py-1 rounded shadow-md text-xs whitespace-nowrap hidden group-hover:inline-block">
          00966558008895
        </span>
      </div>

      <!-- أيقونات التواصل -->
      <a href="https://www.facebook.com/profile.php?id=61573490471675" class="bg-white text-[#1782a4] p-2 w-8 h-8 flex items-center justify-center rounded-md hover:bg-[#0e5f75] hover:text-white transition">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://x.com/MEDCOMit" class="bg-white text-[#1782a4] p-2 w-8 h-8 flex items-center justify-center rounded-md hover:bg-[#0e5f75] hover:text-white transition">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#" class="bg-white text-[#1782a4] p-2 w-8 h-8 flex items-center justify-center rounded-md hover:bg-[#0e5f75] hover:text-white transition">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.pinterest.com/medcomitcom/" class="bg-white text-[#1782a4] p-2 w-8 h-8 flex items-center justify-center rounded-md hover:bg-[#0e5f75] hover:text-white transition">
        <i class="fab fa-pinterest"></i>
      </a>
      <a href="https://www.tiktok.com/@medcom.it" class="bg-white text-[#1782a4] p-2 w-8 h-8 flex items-center justify-center rounded-md hover:bg-[#0e5f75] hover:text-white transition">
        <i class="fab fa-tiktok"></i>
      </a>
      <a href="https://www.snapchat.com/add/medcom.it" class="bg-white text-[#1782a4] p-2 w-8 h-8 flex items-center justify-center rounded-md hover:bg-[#0e5f75] hover:text-white transition">
        <i class="fab fa-snapchat"></i>
      </a>
    </div>
  </div>

  <!-- شريط التنقل -->
  <div class="bg-white dark:bg-slate-900 h-14 flex items-center justify-between px-4 shadow-md relative z-40">
    <!-- شعار الجوال فقط -->
    <div class="md:hidden flex items-center">
      <img src="{{ asset('images/medcom-1.png') }}" alt="Logo" class="h-16 object-contain animate-loop-fade">
    </div>

    <!-- زر القائمة في الجوال -->
    <button id="menu-toggle" class="text-[#1782a4] text-2xl md:hidden">
      <i class="fas fa-bars"></i>
    </button>

    <!-- روابط الكمبيوتر -->
    <nav class="hidden md:flex gap-6 font-bold text-[#333] dark:text-white text-[15px] items-center w-full justify-end pr-[250px]">
      <a href="/" class="hover:text-[#1782a4] whitespace-nowrap">الرئيسية</a>
      <a href="{{ route('products.index') }}" class="hover:text-[#1782a4] whitespace-nowrap">المنتجات</a>
      <a href="/الخدمات" class="hover:text-[#1782a4] whitespace-nowrap">الخدمات</a>
      <a href="{{ route('solutions.index') }}" class="hover:text-[#1782a4] whitespace-nowrap">الحلول</a>
      <a href="partners" class="hover:text-[#1782a4] whitespace-nowrap">شركاؤنا</a>
      <a href="سابقة-الاعمال" class="hover:text-[#1782a4] whitespace-nowrap">سابقة الأعمال</a>
      <a href="من-نحن" class="hover:text-[#1782a4] whitespace-nowrap">عن الشركة</a>
      <a href="تواصل-معنا" class="hover:text-[#1782a4] whitespace-nowrap">تواصل معنا</a>
      <a href="/الأسئلة-الشائعة" class="hover:text-[#1782a4] whitespace-nowrap">الأسئلة الشائعة</a>
      <a href="{{ url('الأخبار-والمقالات') }}" class="hover:text-[#1782a4] whitespace-nowrap">الأخبار والمقالات</a>

      <!-- مربع البحث بجانب القائمة -->
      <div class="relative w-[240px]">
        <input id="search-input" type="text" placeholder="ابحث في الموقع..." class="w-full px-3 py-1.5 rounded-md border border-gray-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-sm text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-[#1782a4]">
        <div id="search-suggestions" class="absolute w-full mt-1 bg-white dark:bg-slate-800 rounded-md border border-gray-300 dark:border-slate-600 hidden z-50 text-sm text-gray-800 dark:text-gray-200"></div>
      </div>

      <!-- أيقونات الوضع المظلم -->
      <button id="theme-toggle" class="text-xl hover:text-yellow-400">
        <i id="theme-icon" class="fas fa-moon"></i>
      </button>
      <!-- زر تغيير اللغة باستخدام أعلام -->
<form action="{{ route('lang.switch', app()->getLocale() === 'ar' ? 'en' : 'ar') }}" method="GET" class="flex items-center">
    <button type="submit" class="text-xl hover:opacity-80 transition" title="Change Language">
        @if(app()->getLocale() === 'ar')
            <img src="{{ asset('images/flags/us.png') }}" alt="English" class="w-11 h-6">
        @else
            <img src="{{ asset('images/flags/sa.png') }}" alt="Arabic" class="w-11 h-6">
        @endif
    </button>
</form>
    </nav>
  </div>

  <!-- شعار الكمبيوتر فقط (ثابت أعلى الهيدر) -->
  <div class="absolute top-[0px] right-[46px] hidden md:block bg-white px-4 py-2 rounded-b-xl shadow-lg z-50">
    <img src="{{ asset('images/medcom-1.png') }}" alt="Logo" class="h-[120px] object-contain animate-loop-fade">
  </div>

  <!-- قائمة الهاتف -->
  <div id="mobile-menu" class="hidden md:hidden flex flex-col items-center gap-4 bg-white dark:bg-slate-800 px-6 py-4 font-bold text-[#333] dark:text-white text-sm text-center transition-colors duration-300">
    <a href="/" class="hover:text-[#1782a4]">الرئيسية</a>
    <a href="{{ route('products.index') }}" class="hover:text-[#1782a4]">المنتجات</a>
    <a href="/الخدمات" class="hover:text-[#1782a4]">الخدمات</a>
    <a href="{{ route('solutions.index') }}" class="hover:text-[#1782a4]">الحلول</a>

    <a href="partners" class="hover:text-[#1782a4]">شركاؤنا</a>
    <a href="سابقة-الاعمال" class="hover:text-[#1782a4]">سابقة الأعمال</a>
    <a href="من-نحن" class="hover:text-[#1782a4]">من نحن</a>
    <a href="تواصل-معنا" class="hover:text-[#1782a4]">تواصل معنا</a>
    <a href="/الأسئلة-الشائعة" class="hover:text-[#1782a4]">الأسئلة الشائعة</a>
    <a href="{{ url('الأخبار-والمقالات') }}" class="hover:text-[#1782a4]">الأخبار والمقالات</a>

    <div class="flex items-center gap-3">
      <button id="mobile-theme-toggle" class="text-xl hover:text-yellow-400">
        <i class="fas fa-moon"></i>
      </button>
      <button id="mobile-search-toggle" class="text-xl hover:text-[#1782a4]">
        <i class="fas fa-search"></i>
      </button>
    </div>
  </div>
</header>

<!-- سكريبت التحكم في البحث -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('search-input');
    const suggestions = document.getElementById('search-suggestions');

    input.addEventListener('input', function () {
      const query = this.value.trim();
      if (query.length < 2) {
        suggestions.innerHTML = '';
        suggestions.classList.add('hidden');
        return;
      }

      fetch(/api/search?q=${encodeURIComponent(query)})
        .then(res => res.json())
        .then(data => {
          suggestions.innerHTML = '';
          if (!data.length) {
            suggestions.classList.add('hidden');
            return;
          }

          data.forEach(service => {
            const item = document.createElement('div');
            item.innerHTML = service.title;
            item.className = 'px-4 py-2 cursor-pointer hover:bg-gray-100 dark:hover:bg-slate-700';
            item.onclick = () => {
              window.location.href = /الخدمات/${service.slug};
            };
            suggestions.appendChild(item);
          });

          suggestions.classList.remove('hidden');
        });
    });

    document.addEventListener('click', function (e) {
      if (!input.contains(e.target) && !suggestions.contains(e.target)) {
        suggestions.classList.add('hidden');
      }
    });
  });
</script>


