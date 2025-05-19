<!DOCTYPE html>
<html lang="ar" dir="rtl" class="transition-colors duration-300">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'مدكوم')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
    };
  </script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" />

  <!-- Fonts -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@400;700&display=swap');
    body { font-family: 'Noto Kufi Arabic', sans-serif; }
  </style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</head>

<body class="bg-white text-right text-black dark:bg-gray-900 dark:text-white transition-colors duration-300">

  @include('partials.header')

  <main class="overflow-x-hidden pt-[0px]">
    @yield('content')
  </main>

  @include('partials.footer')

  <!-- Toggle Theme Button Script -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('theme-toggle');
    const icon = document.getElementById('theme-icon');

    function updateIcon() {
      if (document.documentElement.classList.contains('dark')) {
        icon.classList.remove('fa-moon');
        icon.classList.add('fa-sun');
      } else {
        icon.classList.remove('fa-sun');
        icon.classList.add('fa-moon');
      }
    }

    toggle.addEventListener('click', () => {
      document.documentElement.classList.toggle('dark');
      localStorage.setItem('theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
      updateIcon();
    });

    if (localStorage.getItem('theme') === 'dark') {
      document.documentElement.classList.add('dark');
    }

    updateIcon();
  });
</script>
<script>
  // تفعيل قائمة الهاتف
  const menuToggle = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');

  if (menuToggle && mobileMenu) {
    menuToggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  }

  // تبديل الثيم في الهاتف
  const mobileThemeToggle = document.getElementById('mobile-theme-toggle');
  const htmlEl = document.documentElement;

  if (mobileThemeToggle) {
    mobileThemeToggle.addEventListener('click', () => {
      htmlEl.classList.toggle('dark');
      localStorage.setItem('theme', htmlEl.classList.contains('dark') ? 'dark' : 'light');
    });
  }
</script>

<style>
@keyframes loop-slide-fade {
  0% {
    transform: translateY(-100%);
    opacity: 0;
  }
  10% {
    transform: translateY(0);
    opacity: 1;
  }
  70% {
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    transform: translateY(0);
    opacity: 0;
  }
}
.animate-loop-fade {
  animation: loop-slide-fade 8s ease-in-out infinite;
}
</style>


 @yield('scripts')
 <!-- أيقونة واتساب عائمة باستخدام صورة -->
<a href="https://wa.me/966558008895?text=مرحباً، أريد الاستفسار عن خدماتكم"
   target="_blank"
   class="fixed bottom-4 left-4 z-50 w-16 h-16">
   <img src="{{ asset('images/whatsapp-icon.png') }}" alt="تواصل عبر واتساب" class="w-full h-full object-contain hover:scale-110 transition-transform duration-300">
</a>

</body>
</html>
