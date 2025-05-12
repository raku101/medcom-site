<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'مدكوم')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Fonts -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@400;700&display=swap');
    body { font-family: 'Noto Kufi Arabic', sans-serif; }
  </style>
</head>

<body class="bg-white text-right">
  @include('partials.header')

  <main class="overflow-x-hidden">
    @yield('content')
  </main>
  @include('partials.footer')

</body>
</html>
