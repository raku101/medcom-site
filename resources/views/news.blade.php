@extends('layouts.app')

@section('title', 'الأخبار والمقالات - Medcom')

@section('content')
<!-- Hero Section -->
<section class="relative pt-[120px] pb-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/news-bg.jpg') }}" alt="خلفية صفحة الأخبار" 
             class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">آخر الأخبار والتحديثات</h1>
        <p class="text-lg max-w-2xl mx-auto">
            <span class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg inline-block border border-white/20 shadow-lg">
                أحدث المقالات والتقارير التقنية
            </span>
        </p>
    </div>
</section>

<!-- Intro -->
<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl font-bold text-[#1a5a72] mb-6">آخر المستجدات في عالم التقنية والأمن</h2>
            <p class="text-lg text-gray-700 dark:text-gray-500 mb-6 leading-relaxed">
                نشارككم رؤيتنا وخبراتنا عبر مقالات متخصصة وأخبار حديثة عن عالم الأنظمة الأمنية وتكنولوجيا المعلومات.
            </p>
        </div>
    </div>
</section>

<!-- Articles -->
<section class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ([
                [
                    'title' => 'أحدث تطورات أنظمة المراقبة الذكية',
                    'excerpt' => 'كيف غيرت تقنيات الذكاء الاصطناعي وجه أنظمة المراقبة الأمنية في 2024',
                    'date' => '15 مايو 2024',
                    'category' => 'تقنيات الأمن',
                    'image' => 'news-1.jpg',
                    'url' => asset('articles/news-1')
                ],
                [
                    'title' => 'دليل شامل لحماية الشبكات اللاسلكية',
                    'excerpt' => 'أفضل الممارسات لتأمين شبكات الواي فاي في المؤسسات والمنازل',
                    'date' => '8 مايو 2024',
                    'category' => 'شبكات',
                    'image' => 'news-2.jpg',
                    'url' => asset('articles/news-2')
                ],
                [
                    'title' => 'Medcom تطلق مجموعة حلول أمنية جديدة',
                    'excerpt' => 'مجموعة متكاملة من المنتجات الذكية مع ضمان 3 سنوات',
                    'date' => '1 مايو 2024',
                    'category' => 'أخبار الشركة',
                    'image' => 'news-3.jpg',
                    'url' => asset('articles/news-3')
                ],
                [
                    'title' => 'مستقبل أنظمة التحكم في الدخول',
                    'excerpt' => 'التوجهات الحديثة في أنظمة التحكم بالدخول باستخدام التقنيات الحيوية',
                    'date' => '22 أبريل 2024',
                    'category' => 'تقنيات الأمن',
                    'image' => 'news-4.jpg',
                    'url' => asset('articles/news-4')
                ],
                [
                    'title' => 'كيف تختار نظام إنذار مثالي لمؤسستك؟',
                    'excerpt' => 'معايير الاختيار وأهم النقاط التي يجب مراعاتها قبل الشراء',
                    'date' => '14 أبريل 2024',
                    'category' => 'دليل الشراء',
                    'image' => 'news-5.jpg',
                    'url' => asset('articles/news-5')
                ],
                [
                    'title' => 'ورشة عمل حول الأمن السيبراني',
                    'excerpt' => 'Medcom تنظم ورشة عمل مجانية حول أساسيات الحماية من الاختراقات',
                    'date' => '5 أبريل 2024',
                    'category' => 'فعاليات',
                    'image' => 'news-6.jpg',
                    'url' => asset('articles/news-6')
                ]
            ] as $index => $news)
            <div class="news-card opacity-0 translate-y-10 transition-all duration-500 ease-out bg-white dark:bg-slate-800 rounded-xl shadow-md hover:shadow-xl overflow-hidden transform hover:-translate-y-1"
                 style="transition-delay: {{ ($index % 3) * 150 }}ms">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('images/news/' . $news['image']) }}" alt="{{ $news['title'] }}" 
                         class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    <div class="absolute bottom-0 left-0 bg-[#1a5a72] text-white px-3 py-1 text-sm font-medium">
                        {{ $news['category'] }}
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        {{ $news['date'] }}
                    </div>
                    <h3 class="text-xl font-bold text-[#1a5a72] dark:text-white mb-3">{{ $news['title'] }}</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">{{ $news['excerpt'] }}</p>
                    <a href="{{ $news['url'] }}" class="inline-flex items-center text-[#1a5a72] dark:text-[#60cdf2] font-medium hover:text-[#1a6d8a] transition-colors">
                        اقرأ المزيد
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
            <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            <nav class="flex items-center space-x-2">
                <a href="#" class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-600 dark:text-gray-300 hover:bg-[#1a5a72] hover:text-white transition-colors">
                    السابق
                </a>
                <a href="#" class="px-4 py-2 bg-[#1a5a72] text-white rounded-lg font-medium">
                    1
                </a>
                <a href="#" class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-600 dark:text-gray-300 hover:bg-[#1a5a72] hover:text-white transition-colors">
                    2
                </a>
                <a href="#" class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-600 dark:text-gray-300 hover:bg-[#1a5a72] hover:text-white transition-colors">
                    3
                </a>
                <a href="#" class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-600 dark:text-gray-300 hover:bg-[#1a5a72] hover:text-white transition-colors">
                    التالي
                </a>
            </nav>
        </div>
</section>


@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.news-card');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                }
            });
        }, { threshold: 0.1 });
        cards.forEach(card => observer.observe(card));
    });
</script>
@endsection
