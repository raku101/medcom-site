<!DOCTYPE html>
<html lang="ar" dir="rtl" class="transition-colors duration-300">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'مدكوم')</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = { darkMode: 'class' };
  </script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" />

  <!-- Google Font -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@400;700&display=swap');
    body { font-family: 'Noto Kufi Arabic', sans-serif; }
  </style>

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <!-- 🎨 تخصيص لون الأزرار ليتماشى مع هوية ميدكوم -->
  <style>
    .btn-primary {
      background-color: #0076A3 !important;
      border-color: #0076A3 !important;
      color: white !important;
    }

    .btn-primary:hover {
      background-color: #005f85 !important;
      border-color: #005f85 !important;
      color: white !important;
    }
  </style>
</head>

<body class="bg-white text-right text-black dark:bg-gray-900 dark:text-white transition-colors duration-300">

  @include('partials.header')

  <main class="overflow-x-hidden pt-[0px]">
    @yield('content')
  </main>

  @include('partials.footer')

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 800, once: true });
  </script>

  <!-- الثيم وتبديله -->
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

      toggle?.addEventListener('click', () => {
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

  <!-- قائمة الهاتف والثيم -->
  <script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle?.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });

    const mobileThemeToggle = document.getElementById('mobile-theme-toggle');
    const htmlEl = document.documentElement;

    mobileThemeToggle?.addEventListener('click', () => {
      htmlEl.classList.toggle('dark');
      localStorage.setItem('theme', htmlEl.classList.contains('dark') ? 'dark' : 'light');
    });
  </script>

  <!-- تحريك نصوص -->
  <style>
    @keyframes loop-slide-fade {
      0% { transform: translateY(-100%); opacity: 0; }
      10%, 70% { transform: translateY(0); opacity: 1; }
      100% { opacity: 0; }
    }

    .animate-loop-fade {
      animation: loop-slide-fade 8s ease-in-out infinite;
    }
  </style>

  <!-- ✅ أزرار التواصل العائمة -->
  <style>
    .floating-contact {
      position: fixed;
      top: 40%;
      right: 0;
      z-index: 9999;
      display: flex;
      flex-direction: column;
      align-items: flex-end;
    }

    .contact-box {
      background-color: #2f5f93;
      border-top-left-radius: 12px;
      border-bottom-left-radius: 12px;
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }

    .contact-toggle {
      background-color: #000;
      color: #fff;
      text-align: center;
      padding: 12px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .contact-item {
      color: #fff;
      padding: 14px;
      text-align: center;
      font-size: 20px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .contact-item:last-child {
      border-bottom: none;
    }

    .contact-hidden .contact-item {
      display: none;
    }

    .contact-hidden .contact-toggle {
      border-radius: 12px;
    }
  </style>

  <div class="floating-contact">
    <div id="contact-box" class="contact-box">
      <div class="contact-toggle" id="toggleBtn">
        <i id="arrowIcon" class="bi bi-arrow-left"></i>
      </div>
      <a href="tel:00966558008895" target="_blank" class="contact-item">
        <i class="bi bi-telephone-fill"></i>
      </a>
      <a href="https://wa.me/00966558008895" target="_blank" class="contact-item">
        <i class="bi bi-whatsapp"></i>
      </a>
    </div>
  </div>

  <script>
    const toggleBtn = document.getElementById('toggleBtn');
    const contactBox = document.getElementById('contact-box');
    const arrowIcon = document.getElementById('arrowIcon');

    toggleBtn.addEventListener('click', () => {
      contactBox.classList.toggle('contact-hidden');
      arrowIcon.classList.toggle('bi-arrow-left');
      arrowIcon.classList.toggle('bi-arrow-right');
    });
  </script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  @yield('scripts')
</body>
</html>
