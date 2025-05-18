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

    <!-- فيسبوك -->
    <a href="https://www.facebook.com/profile.php?id=61573490471675" class="bg-white text-[#1782a4] p-2 w-8 h-8 flex items-center justify-center rounded-md hover:bg-[#0e5f75] hover:text-white transition">
      <i class="fab fa-facebook-f"></i>
    </a>

    <!-- تويتر -->
    <a href="https://x.com/MEDCOMit" class="bg-white text-[#1782a4] p-2 w-8 h-8 flex items-center justify-center rounded-md hover:bg-[#0e5f75] hover:text-white transition">
      <i class="fab fa-twitter"></i>
    </a>

    <!-- انستقرام -->
    <a href="#" class="bg-white text-[#1782a4] p-2 w-8 h-8 flex items-center justify-center rounded-md hover:bg-[#0e5f75] hover:text-white transition">
      <i class="fab fa-instagram"></i>
    </a>

    <!-- بينترست -->
    <a href="https://www.pinterest.com/medcomitcom/" class="bg-white text-[#1782a4] p-2 w-8 h-8 flex items-center justify-center rounded-md hover:bg-[#0e5f75] hover:text-white transition">
      <i class="fab fa-pinterest"></i>
    </a>

  </div>
</div>



    <!-- شريط التنقل -->
    <div class="bg-white dark:bg-slate-900 h-14 flex items-center justify-between px-4 shadow-md">
        <!-- شعار الهاتف -->
        <div class="md:hidden">
            <img src="{{ asset('images/medcom-1.png') }}" alt="Logo" class="h-10">
        </div>

        <!-- زر القائمة للهاتف -->
        <button id="menu-toggle" class="text-[#1782a4] text-2xl md:hidden">
            <i class="fas fa-bars"></i>
        </button>

        <!-- روابط التنقل -->
        <nav class="hidden md:flex gap-10 font-bold text-[#333] dark:text-white text-[15px] pr-[250px]">
            <a href="/" class="hover:text-[#1782a4]">الرئيسية</a>
            <a href="/المنتجات" class="hover:text-[#1782a4]">المنتجات</a>
<a href="/الخدمات" class="hover:text-[#1782a4]">الخدمات</a>
            <a href="partners" class="hover:text-[#1782a4]">شركاؤنا</a>
            <a href="سابقة-الاعمال" class="hover:text-[#1782a4]">سابقة الأعمال</a>
            <a href="من-نحن" class="hover:text-[#1782a4]">عن الشركة</a>
            <a href="تواصل-معنا" class="hover:text-[#1782a4]">تواصل معنا</a>
            <a href="/الأسئلة-الشائعة" class="hover:text-[#1782a4]">الأسئلة الشائعة</a>
            <a href="{{ url('الأخبار-والمقالات') }}" class="hover:text-[#1782a4]">الأخبار والمقالات</a>


            <button id="theme-toggle" class="text-xl hover:text-yellow-400 ml-4">
                <i id="theme-icon" class="fas fa-moon"></i>
            </button>
        </nav>
    </div>

    <!-- قائمة الهاتف -->
    <!-- قائمة الهاتف -->
<div id="mobile-menu" class="hidden md:hidden flex flex-col items-center gap-4 bg-white dark:bg-slate-800 px-6 py-4 font-bold text-[#333] dark:text-white text-sm text-center">
  <a href="/" class="hover:text-[#1782a4]">الرئيسية</a>
  <a href="/المنتجات" class="hover:text-[#1782a4]">المنتجات</a>
<a href="/الخدمات" class="hover:text-[#1782a4]">الخدمات</a>
  <a href="partners" class="hover:text-[#1782a4]">شركاؤنا</a>
  <a href="سابقة-الاعمال" class="hover:text-[#1782a4]">سابقة الأعمال</a>
  <a href="من-نحن" class="hover:text-[#1782a4]">من نحن</a>
  <a href="تواصل-معنا" class="hover:text-[#1782a4]">تواصل معنا</a>
  <a href="/الأسئلة-الشائعة" class="hover:text-[#1782a4]">الأسئلة الشائعة</a>
  <a href="{{ url('الأخبار-والمقالات') }}" class="hover:text-[#1782a4]">الأخبار والمقالات</a>


  <button id="mobile-theme-toggle" class="text-xl hover:text-yellow-400">
    <i class="fas fa-moon"></i>
  </button>
</div>

    <!-- شعار ثابت على الهيدر -->
    <div class="absolute top-[0px] right-[46px] hidden md:block bg-white px-4 py-2 rounded-b-xl shadow-lg">
       <img src="{{ asset('images/medcom-1.png') }}"
     alt="Logo"
     class="h-[110px] object-contain animate-loop-fade">





    </div>
</header>
