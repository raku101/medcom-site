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
    </div>
  </div>

  <!-- شريط التنقل -->
  <div class="bg-white dark:bg-slate-900 h-14 flex items-center justify-between px-4 shadow-md relative z-40">
    <!-- شعار الجوال فقط -->
    <div class="md:hidden flex items-center">
      <img src="{{ asset('images/medcom-1.png') }}" alt="Logo" class="h-10 object-contain animate-loop-fade">
    </div>

    <!-- زر القائمة في الجوال -->
    <button id="menu-toggle" class="text-[#1782a4] text-2xl md:hidden">
      <i class="fas fa-bars"></i>
    </button>

    <!-- روابط الكمبيوتر -->
    <nav class="hidden md:flex gap-10 font-bold text-[#333] dark:text-white text-[15px] pr-[250px] whitespace-nowrap items-center">
      <a href="/" class="hover:text-[#1782a4]">الرئيسية</a>
      <a href="{{ route('products.index') }}" class="hover:text-[#1782a4]">المنتجات</a>
      <a href="/الخدمات" class="hover:text-[#1782a4]">الخدمات</a>
      <a href="partners" class="hover:text-[#1782a4]">شركاؤنا</a>
      <a href="سابقة-الاعمال" class="hover:text-[#1782a4]">سابقة الأعمال</a>
      <a href="من-نحن" class="hover:text-[#1782a4]">عن الشركة</a>
      <a href="تواصل-معنا" class="hover:text-[#1782a4]">تواصل معنا</a>
      <a href="/الأسئلة-الشائعة" class="hover:text-[#1782a4]">الأسئلة الشائعة</a>
      <a href="{{ url('الأخبار-والمقالات') }}" class="hover:text-[#1782a4]">الأخبار والمقالات</a>

      <!-- أيقونات الوضع المظلم والبحث -->
      <div class="flex items-center gap-3 ml-4">
        <button id="theme-toggle" class="text-xl hover:text-yellow-400">
          <i id="theme-icon" class="fas fa-moon"></i>
        </button>
        <button id="search-toggle" class="text-xl hover:text-[#1782a4]">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </nav>
  </div>

  <!-- شعار الكمبيوتر فقط (ثابت أعلى الهيدر) -->
  <div class="absolute top-[0px] right-[46px] hidden md:block bg-white px-4 py-2 rounded-b-xl shadow-lg z-50">
    <img src="{{ asset('images/medcom-1.png') }}" alt="Logo" class="h-[110px] object-contain animate-loop-fade">
  </div>

  <!-- قائمة الهاتف -->
  <div id="mobile-menu" class="hidden md:hidden flex flex-col items-center gap-4 bg-white dark:bg-slate-800 px-6 py-4 font-bold text-[#333] dark:text-white text-sm text-center">
    <a href="/" class="hover:text-[#1782a4]">الرئيسية</a>
    <a href="{{ route('products.index') }}" class="hover:text-[#1782a4]">المنتجات</a>
    <a href="/الخدمات" class="hover:text-[#1782a4]">الخدمات</a>
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

  <!-- مربع البحث -->
  <div id="search-box" class="hidden absolute left-4 top-full mt-2 w-[300px] md:w-[400px] bg-white dark:bg-slate-800 shadow-lg rounded-lg z-50 p-4">
    <input id="search-input" type="text" placeholder="ابحث عن خدمة..." class="w-full px-4 py-2 border border-gray-300 dark:border-slate-600 rounded-md bg-white dark:bg-slate-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-[#1782a4]">
    <div id="search-suggestions" class="mt-2 text-sm text-gray-700 dark:text-gray-300 space-y-1 hidden rounded-md overflow-hidden border border-gray-200 dark:border-slate-600"></div>
  </div>
</header>

<!-- سكريبت التحكم في ظهور مربع البحث -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('search-toggle');
    const mobileToggle = document.getElementById('mobile-search-toggle');
    const box = document.getElementById('search-box');

    function toggleSearchBox() {
      box.classList.toggle('hidden');
    }

    toggle.addEventListener('click', toggleSearchBox);
    mobileToggle.addEventListener('click', toggleSearchBox);
  });
</script>
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

      fetch(`/api/search?q=${encodeURIComponent(query)}`)
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
              window.location.href = `/الخدمات/${service.slug}`;
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
