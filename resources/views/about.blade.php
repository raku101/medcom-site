@extends('layouts.app')

@section('title', 'من نحن - Medcom')

@section('content')
<!-- Hero Section -->
<section class="relative py-12 text-white overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/about-us-bg.jpg') }}" alt="خلفية من نحن" 
             class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">من نحن</h1>
    </div>
</section>

<!-- About Section -->
<section class="py-16 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-right">
            <p class="text-lg text-gray-700 dark:text-gray-300 mb-8 leading-relaxed">
                Medcom هي شركة رائدة في مجال الأنظمة الأمنية وحلول الشبكات، تأسست لتلبية احتياجات السوق المتزايدة في مجال تكنولوجيا المعلومات. نحن نقدم مجموعة شاملة من الحلول والخدمات التي تساعد المؤسسات على تعزيز أمانها وكفاءتها التشغيلية.
            </p>
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <div class="bg-[#f8fafc] dark:bg-gray-800 p-6 rounded-lg border-r-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-3">رؤيتنا</h3>
                    <p class="text-gray-700 dark:text-gray-300">
                        نسعى لأن نكون الخيار الأول في مجال تكنولوجيا المعلومات وحلول الأمان، من خلال تقديم خدمات مبتكرة ومخصصة تلبي احتياجات عملائنا.
                    </p>
                </div>
                <div class="bg-[#f8fafc] dark:bg-gray-800 p-6 rounded-lg border-r-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-3">مهمتنا</h3>
                    <p class="text-gray-700 dark:text-gray-300">
                        تقديم حلول تقنية متكاملة تجمع بين الأمان والراحة، مما يضمن لعملائنا بيئة عمل آمنة وموثوقة. نلتزم بأعلى مستويات الجودة والدعم الفني.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-16 bg-gray-50 dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-3">قيمنا</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-sm text-center hover:shadow-md transition-all">
                <div class="w-16 h-16 bg-[#1a5a72]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a9ba4]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-2">الابتكار</h3>
                <p class="text-gray-600 dark:text-gray-300">حلول جديدة تلبي احتياجات العملاء المتغيرة</p>
            </div>
            <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-sm text-center hover:shadow-md transition-all">
                <div class="w-16 h-16 bg-[#1a5a72]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a9ba4]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-2">الجودة</h3>
                <p class="text-gray-600 dark:text-gray-300">أعلى معايير الجودة في جميع خدماتنا</p>
            </div>
            <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-sm text-center hover:shadow-md transition-all">
                <div class="w-16 h-16 bg-[#1a5a72]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a9ba4]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-2">الاحترافية</h3>
                <p class="text-gray-600 dark:text-gray-300">فريق محترف يسعى لتحقيق رضا العملاء</p>
            </div>
            <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-sm text-center hover:shadow-md transition-all">
                <div class="w-16 h-16 bg-[#1a5a72]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a9ba4]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-2">المرونة</h3>
                <p class="text-gray-600 dark:text-gray-300">حلول مصممة خصيصًا لكل عميل</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-16 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-3">فريقنا</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        <div class="max-w-4xl mx-auto text-right">
            <p class="text-lg text-gray-700 dark:text-gray-300 mb-8 leading-relaxed">
                يتكون فريقنا من مجموعة من الخبراء المتميزين في مجالات تكنولوجيا المعلومات والأمن، الذين يسعون باستمرار لتطوير مهاراتهم وتحديث معرفتهم بأحدث التقنيات. نحن ملتزمون بتوفير الدعم الفني والاستشارات اللازمة لمساعدتك في اتخاذ القرارات الصحيحة.
            </p>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ([
                    ['title' => 'خبراء الأمن', 'desc' => 'متخصصون في الأنظمة الأمنية'],
                    ['title' => 'مهندسو الشبكات', 'desc' => 'متخصصون في حلول البنية التحتية'],
                    ['title' => 'دعم فني', 'desc' => 'متاحون لمساعدتك 24/7'],
                    ['title' => 'مهندسو الكهرباء', 'desc' => 'متخصصون في الأنظمة الكهربائية']
                ] as $member)
                <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg text-center text-gray-700 dark:text-gray-200">
                    <div class="w-24 h-24 rounded-full bg-[#1a5a72]/10 mx-auto mb-4 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-[#1a5a72] dark:text-[#60cdf2]">{{ $member['title'] }}</h3>
                    <p class="text-sm">{{ $member['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-gray-50 dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-3">إنجازاتنا بالأرقام</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>
        <div class="grid md:grid-cols-4 gap-6 text-center">
            @foreach ([
                ['count' => 50, 'label' => 'مشروع مكتمل'],
                ['count' => 30, 'label' => 'عميل راضٍ'],
                ['count' => 15, 'label' => 'شريك استراتيجي'],
                ['count' => 24, 'label' => 'ساعة دعم فني']
            ] as $stat)
            <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-sm">
                <div class="text-4xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-2 counter" data-count="{{ $stat['count'] }}">0</div>
                <div class="text-gray-600 dark:text-gray-300">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Testimonials Section - New Design -->
<section class="py-16 bg-gradient-to-br from-[#f0f9ff] to-[#e0f2fe] dark:from-gray-800 dark:to-gray-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-4">آراء عملائنا</h2>
            <div class="w-32 h-1.5 bg-[#1ac8a4] mx-auto rounded-full"></div>
            <p class="mt-6 text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                اكتشف ما يقوله عملاؤنا عن تجربتهم مع خدماتنا
            </p>
        </div>
        
        <div class="max-w-6xl mx-auto">
            <div class="swiper testimonial-slider-new">
                <div class="swiper-wrapper pb-12">
                    @foreach ([
                        [
                            'name' => 'أحمد محمد',
                            'position' => 'مدير تقنية المعلومات',
                            'company' => 'شركة التقنية المتكاملة',
                            'content' => 'تعاملنا مع Medcom كان احترافيًا من البداية للنهاية، قدمت لنا حلولاً أمنية ممتازة مع متابعة دقيقة.',
                            'rating' => 5
                        ],
                        [
                            'name' => 'سارة عبدالله',
                            'position' => 'مديرة الأنظمة',
                            'company' => 'مجموعة الأعمال المتحدة',
                            'content' => 'فريق الدعم الفني متواجد دائمًا لمساعدتنا، أنصح بالتعامل معهم بثقة.',
                            'rating' => 4
                        ],
                        [
                            'name' => 'خالد السعدي',
                            'position' => 'مدير العمليات',
                            'company' => 'شركة التقنية الحديثة',
                            'content' => 'الحلول المقدمة كانت مبتكرة وساهمت في تطوير أعمالنا بشكل ملحوظ.',
                            'rating' => 5
                        ]
                    ] as $testimonial)
                    <div class="swiper-slide">
                        <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 h-full flex flex-col">
                            <div class="mb-6 flex justify-between items-start">
                                <div class="flex items-center">
                                    <div class="w-16 h-16 rounded-full bg-[#1a5a72]/10 flex items-center justify-center mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1a5a72] dark:text-[#60cdf2]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-xl text-[#1a5a72] dark:text-[#60cdf2]">{{ $testimonial['name'] }}</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ $testimonial['position'] }} - {{ $testimonial['company'] }}</p>
                                    </div>
                                </div>
                                <div class="flex items-center bg-[#1a5a72]/10 dark:bg-gray-700 px-3 py-1 rounded-full">
                                    @for($i = 1; $i <= 5; $i++)
                                        <svg class="w-5 h-5 {{ $i <= $testimonial['rating'] ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    @endfor
                                </div>
                            </div>
                            
                            <div class="relative flex-grow mb-6">
                                <svg class="absolute top-0 left-0 w-8 h-8 text-[#1a5a72]/20 dark:text-[#60cdf2]/20" fill="currentColor" viewBox="0 0 32 32">
                                    <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"/>
                                </svg>
                                <p class="text-gray-700 dark:text-gray-300 text-lg pl-10 relative z-10">"{{ $testimonial['content'] }}"</p>
                            </div>
                            
                            <div class="mt-auto pt-4 border-t border-gray-200 dark:border-gray-700">
                                <div class="flex justify-between items-center">
                                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ now()->subDays(rand(1, 30))->diffForHumans() }}</span>
                                    <div class="flex space-x-2">
                                        <a href="#" class="text-[#1a5a72] dark:text-[#60cdf2] hover:text-[#1a9ba4]">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                            </svg>
                                        </a>
                                        <a href="#" class="text-[#1a5a72] dark:text-[#60cdf2] hover:text-[#1a9ba4]">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <!-- Navigation buttons -->
                <div class="swiper-button-next hidden md:flex items-center justify-center w-12 h-12 rounded-full bg-white dark:bg-gray-800 shadow-md text-[#1a5a72] dark:text-[#60cdf2] hover:bg-[#1a5a72] hover:text-white transition-all"></div>
                <div class="swiper-button-prev hidden md:flex items-center justify-center w-12 h-12 rounded-full bg-white dark:bg-gray-800 shadow-md text-[#1a5a72] dark:text-[#60cdf2] hover:bg-[#1a5a72] hover:text-white transition-all"></div>
                
                <!-- Pagination -->
                <div class="swiper-pagination !bottom-0"></div>
            </div>
        </div>
    </div>
</section>

@section('scripts')
<script>
    // Initialize new testimonial slider
    const testimonialSliderNew = new Swiper('.testimonial-slider-new', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 30,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            }
        }
    });
</script>
@endsection
<!-- Company Profile Download Section -->
<section class="py-16 bg-[#1a5a72] text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-xl p-8 md:p-10 lg:p-12">
                <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                    <div class="text-left md:text-right">
                        <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">الملف التعريفي للشركة</h2>
                        <p class="text-gray-600 dark:text-gray-300 mb-6 max-w-lg">
                            تعرّف على رؤيتنا، مهمتنا، وقيمنا بشكل مفصل. حمل الملف التعريفي الكامل لشركة Medcom لمعرفة المزيد عن خدماتنا وإنجازاتنا.
                        </p>
                        <div class="flex items-center gap-3 text-[#1a5a72] dark:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                            </svg>
                            <span class="font-medium">حجم الملف: 2.5 MB</span>
                        </div>
                    </div>
                    
                    <div class="flex-shrink-0">
                        <div class="relative group">
                            <div class="absolute -inset-1 bg-gradient-to-r from-[#1ac8a4] to-[#1a9ba4] rounded-lg blur opacity-75 group-hover:opacity-100 transition duration-200"></div>
                            <a href="{{ asset('files/company-profile.pdf') }}" download class="relative bg-gradient-to-r from-[#1a5a72] to-[#1a9ba4] text-white px-8 py-4 rounded-lg font-bold text-lg flex items-center gap-2 hover:shadow-xl transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                تحميل الملف
                            </a>
                        </div>
                    </div>
                </div>
                
                
</section>
<!-- CTA Section -->
<section class="py-12 bg-[#1a5a72] text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-6">في Medcom، نحن هنا لمساعدتك</h2>
        <p class="mb-8 max-w-2xl mx-auto text-lg">
            تواصل معنا اليوم لاكتشاف كيف يمكننا مساعدتك!
        </p>
        <a href="/اتصل-بنا" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
            اتصل بنا الآن
        </a>
    </div>
</section>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    // Initialize Swiper for testimonials
    const testimonialSwiper = new Swiper('.testimonial-slider', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 5000,
        },
    });

    // Counter Animation - Improved Version
    function animateCounters() {
        const counters = document.querySelectorAll('.counter');
        const duration = 2000; // Animation duration in ms
        const startValue = 0;
        
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-count');
            const startTime = Date.now();
            
            const updateCounter = () => {
                const currentTime = Date.now();
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);
                const currentValue = Math.floor(progress * target);
                
                counter.textContent = currentValue;
                
                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };
            
            updateCounter();
        });
    }
@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');

    const animateCounter = (counter) => {
        const target = +counter.getAttribute('data-count');
        let count = 0;
        const speed = 100; // سرعة العد

        const step = () => {
            count += Math.ceil(target / speed);
            if (count < target) {
                counter.innerText = count;
                requestAnimationFrame(step);
            } else {
                counter.innerText = target;
            }
        };

        step();
    };

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target); // شغّل مرة واحدة فقط
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => {
        observer.observe(counter);
    });
});
</script>
@endsection


  

@endsection