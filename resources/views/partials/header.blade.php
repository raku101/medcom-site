<header class="sticky top-0 z-50 bg-white dark:bg-slate-900 shadow-md">
    <!-- الشريط العلوي الأزرق -->
    <div class="bg-[#1782a4] text-white text-sm px-4 py-2 @if(app()->getLocale() === 'ar') md:pr-[280px] @else md:pl-[280px] @endif">
        <div class="flex flex-col gap-y-2 md:flex-row items-center md:justify-between w-full @if(app()->getLocale() === 'ar') md:flex-row-reverse @else md:flex-row @endif">

            <!-- القسم الأول: البحث + اللغة + الوضع -->
            <div class="flex items-center gap-3 mt-2 md:mt-0 relative @if(app()->getLocale() === 'ar') md:right-[-250px] @else md:left-[-250px] @endif">

                <!-- مربع البحث للكمبيوتر -->
                <div class="relative w-[200px] hidden md:block">
                    <input id="search-input" type="text" placeholder="ابحث..." class="px-3 py-1.5 rounded-md border border-gray-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-sm text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-[#1782a4] w-full">
                    <div id="search-suggestions" class="absolute w-full mt-1 bg-white dark:bg-slate-800 rounded-md border border-gray-300 dark:border-slate-600 hidden z-50 text-sm text-gray-800 dark:text-gray-200"></div>
                </div>

                <!-- مربع البحث للموبايل -->
                <form action="/search" method="GET" class="relative w-[200px] md:hidden">
                    <input id="mobile-search-input" name="query" type="text" placeholder="ابحث..." class="px-3 py-1.5 rounded-md border border-gray-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-sm text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-[#1782a4] w-full">
                    <div id="mobile-search-suggestions" class="absolute w-full mt-1 bg-white dark:bg-slate-800 rounded-md border border-gray-300 dark:border-slate-600 hidden z-50 text-sm text-gray-800 dark:text-gray-200 shadow-lg"></div>
                </form>

                <!-- زر الوضع المظلم -->
                <button id="theme-toggle" class="text-xl hover:text-yellow-400">
                    <i id="theme-icon" class="fas fa-moon"></i>
                </button>

                <!-- زر تغيير اللغة -->
                <form action="{{ route('lang.switch', app()->getLocale() === 'ar' ? 'en' : 'ar') }}" method="GET">
                    <button type="submit" title="Change Language">
                        @if(app()->getLocale() === 'ar')
                            <img src="{{ asset('images/flags/us.png') }}" alt="EN" class="w-7 h-6">
                        @else
                            <img src="{{ asset('images/flags/sa.png') }}" alt="AR" class="w-7 h-6">
                        @endif
                    </button>
                </form>
            </div>

            <!-- القسم الثاني: أيقونات التواصل -->
            <div class="flex flex-wrap justify-center md:justify-end gap-[6px] md:gap-4 items-center mt-2 md:mt-0">
                <a href="mailto:info@medcom.it.com" target="_blank" class="bg-white text-[#1782a4] p-2 w-8 h-8 flex items-center justify-center rounded-md hover:bg-[#0e5f75] hover:text-white transition">
                    <i class="fas fa-envelope"></i>
                </a>
                <a href="tel:00966558008895" target="_blank" class="bg-white text-[#1782a4] p-2 w-8 h-8 flex items-center justify-center rounded-md hover:bg-[#0e5f75] hover:text-white transition">
                    <i class="fas fa-phone"></i>
                </a>
                @php
                    $socials = [
                        'facebook' => 'https://www.facebook.com/profile.php?id=61573490471675',
                        'twitter' => 'https://x.com/MEDCOMit',
                        'instagram' => '#',
                        'pinterest' => 'https://www.pinterest.com/medcomitcom/',
                        'tiktok' => 'https://www.tiktok.com/@medcom.it',
                        'snapchat' => 'https://www.snapchat.com/add/medcom.it',
                    ];
                @endphp
                @foreach ($socials as $icon => $link)
                    <a href="{{ $link }}" target="_blank" class="bg-white text-[#1782a4] p-1 w-7 h-7 md:p-2 md:w-8 md:h-8 flex items-center justify-center rounded-md hover:bg-[#0e5f75] hover:text-white transition">
                        <i class="fab fa-{{ $icon }} text-sm"></i>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- شعار الكمبيوتر -->
<div class="absolute top-0 @if(app()->getLocale() === 'ar') left-[30px] @else right-[30px] @endif hidden md:block bg-white px-4 py-2 rounded-b-xl shadow-lg z-[60]">
    <img src="{{ asset('images/medcom-1.png') }}" alt="Logo" class="h-[120px] object-contain animate-loop-fade">
</div>
    <!-- شريط التنقل للموبايل -->
    <div class="md:hidden flex justify-between items-center px-4 h-14 bg-white dark:bg-slate-900 z-[100] relative">
        <img src="{{ asset('images/medcom-1.png') }}" alt="Logo" class="h-12 object-contain animate-loop-fade">
        <button id="mobile-menu-toggle" class="text-[#1782a4] text-2xl z-[1001] p-2">
            <i class="fas fa-bars"></i>
        </button>
    </div>

  <!-- شريط التنقل للكمبيوتر -->
<nav class="hidden md:flex h-14 gap-6 font-bold text-[#333] dark:text-white text-[15px] items-center justify-center w-full bg-white dark:bg-slate-900 px-4 relative">
    <div class="flex gap-6 @if(app()->getLocale() === 'ar') mr-[10px] @else ml-[10px] @endif">
        <a href="/" class="hover:text-[#1782a4] whitespace-nowrap">الرئيسية</a>
        <a href="{{ route('products.index') }}" class="hover:text-[#1782a4] whitespace-nowrap">المنتجات</a>
        <a href="/الخدمات" class="hover:text-[#1782a4] whitespace-nowrap">الخدمات</a>
        <a href="{{ route('solutions.index') }}" class="hover:text-[#1782a4] whitespace-nowrap">الحلول</a>
        <a href="/partners" class="hover:text-[#1782a4] whitespace-nowrap">شركاؤنا</a>
        <a href="/سابقة-الاعمال" class="hover:text-[#1782a4] whitespace-nowrap">سابقة الأعمال</a>
        <a href="/من-نحن" class="hover:text-[#1782a4] whitespace-nowrap">عن الشركة</a>
        <a href="/تواصل-معنا" class="hover:text-[#1782a4] whitespace-nowrap">تواصل معنا</a>
        <a href="/الأسئلة-الشائعة" class="hover:text-[#1782a4] whitespace-nowrap">الأسئلة الشائعة</a>
        <a href="{{ route('articles.index') }}" class="hover:text-[#1782a4] whitespace-nowrap">الأخبار والمقالات</a>
    </div>
</nav>

    <!-- قائمة الموبايل -->
    <div id="mobile-menu" class="hidden fixed top-14 right-0 w-full bg-white dark:bg-slate-800 px-6 py-4 font-bold text-[#333] dark:text-white text-sm text-center shadow-md z-[1000] flex-col">
        <a href="/" class="hover:text-[#1782a4] block py-2">الرئيسية</a>
        <a href="{{ route('products.index') }}" class="hover:text-[#1782a4] block py-2">المنتجات</a>
        <a href="/الخدمات" class="hover:text-[#1782a4] block py-2">الخدمات</a>
        <a href="{{ route('solutions.index') }}" class="hover:text-[#1782a4] block py-2">الحلول</a>
        <a href="/partners" class="hover:text-[#1782a4] block py-2">شركاؤنا</a>
        <a href="/سابقة-الاعمال" class="hover:text-[#1782a4] block py-2">سابقة الأعمال</a>
        <a href="/من-نحن" class="hover:text-[#1782a4] block py-2">عن الشركة</a>
        <a href="/تواصل-معنا" class="hover:text-[#1782a4] block py-2">تواصل معنا</a>
        <a href="/الأسئلة-الشائعة" class="hover:text-[#1782a4] block py-2">الأسئلة الشائعة</a>
        <a href="{{ route('articles.index') }}" class="hover:text-[#1782a4] block py-2">الأخبار والمقالات</a>
    </div>
</header>

<!-- سكربت البحث للموبايل والكمبيوتر -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('mobile-menu-toggle');
    const menu = document.getElementById('mobile-menu');

    if (toggle && menu) {
      toggle.addEventListener('click', function (e) {
        e.stopPropagation();
        menu.classList.toggle('hidden');
      });

      document.addEventListener('click', function (e) {
        if (!menu.contains(e.target) && !toggle.contains(e.target)) {
          menu.classList.add('hidden');
        }
      });
    }

    // ====== كمبيوتر ======
    const pcInput = document.getElementById('search-input');
    const pcSuggestions = document.getElementById('search-suggestions');
    let pcFirstResultSlug = null;

    if (pcInput && pcSuggestions) {
      pcInput.addEventListener('input', function () {
        const query = this.value.trim();
        if (query.length < 2) {
          pcSuggestions.innerHTML = '';
          pcSuggestions.classList.add('hidden');
          pcFirstResultSlug = null;
          return;
        }

        fetch(`/api/search?q=${encodeURIComponent(query)}`)
          .then(res => res.json())
          .then(data => {
            pcSuggestions.innerHTML = '';
            if (!data.length) {
              pcSuggestions.classList.add('hidden');
              pcFirstResultSlug = null;
              return;
            }

            pcFirstResultSlug = data[0].slug;

            data.forEach(service => {
              const item = document.createElement('div');
              item.innerHTML = service.title;
              item.className = 'px-4 py-2 cursor-pointer hover:bg-gray-100 dark:hover:bg-slate-700';
              item.onclick = () => {
                window.location.href = `/الخدمات/${service.slug}`;
              };
              pcSuggestions.appendChild(item);
            });

            pcSuggestions.classList.remove('hidden');
          })
          .catch(() => {
            pcSuggestions.classList.add('hidden');
            pcFirstResultSlug = null;
          });
      });

      pcInput.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') {
          e.preventDefault();
          if (pcFirstResultSlug) {
            window.location.href = `/الخدمات/${pcFirstResultSlug}`;
          }
        }
      });

      document.addEventListener('click', function (e) {
        if (!pcInput.contains(e.target) && !pcSuggestions.contains(e.target)) {
          pcSuggestions.classList.add('hidden');
        }
      });
    }

    // ====== موبايل ======
    const mobileInput = document.getElementById('mobile-search-input');
    const mobileSuggestions = document.getElementById('mobile-search-suggestions');
    let mobileFirstResultSlug = null;

    if (mobileInput && mobileSuggestions) {
      mobileInput.addEventListener('input', function () {
        const query = this.value.trim();
        if (query.length < 2) {
          mobileSuggestions.innerHTML = '';
          mobileSuggestions.classList.add('hidden');
          mobileFirstResultSlug = null;
          return;
        }

        fetch(`/api/search?q=${encodeURIComponent(query)}`)
          .then(res => res.json())
          .then(data => {
            mobileSuggestions.innerHTML = '';
            if (!data.length) {
              mobileSuggestions.classList.add('hidden');
              mobileFirstResultSlug = null;
              return;
            }

            mobileFirstResultSlug = data[0].slug;

            data.forEach(service => {
              const item = document.createElement('div');
              item.innerHTML = service.title;
              item.className = 'px-4 py-2 cursor-pointer hover:bg-gray-100 dark:hover:bg-slate-700';
              item.onclick = () => {
                window.location.href = `/الخدمات/${service.slug}`;
              };
              mobileSuggestions.appendChild(item);
            });

            mobileSuggestions.classList.remove('hidden');
          })
          .catch(() => {
            mobileSuggestions.classList.add('hidden');
            mobileFirstResultSlug = null;
          });
      });

      mobileInput.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') {
          e.preventDefault();
          if (mobileFirstResultSlug) {
            window.location.href = `/الخدمات/${mobileFirstResultSlug}`;
          }
        }
      });

      document.addEventListener('click', function (e) {
        if (!mobileInput.contains(e.target) && !mobileSuggestions.contains(e.target)) {
          mobileSuggestions.classList.add('hidden');
        }
      });
    }
  });
</script>
