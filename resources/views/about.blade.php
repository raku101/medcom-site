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
            @foreach ([
                ['icon' => 'bolt', 'title' => 'الابتكار', 'desc' => 'حلول جديدة تلبي احتياجات العملاء المتغيرة'],
                ['icon' => 'star', 'title' => 'الجودة', 'desc' => 'أعلى معايير الجودة في جميع خدماتنا'],
                ['icon' => 'check-circle', 'title' => 'الاحترافية', 'desc' => 'فريق محترف يسعى لتحقيق رضا العملاء'],
                ['icon' => 'adjustments', 'title' => 'المرونة', 'desc' => 'حلول مصممة خصيصًا لكل عميل']
            ] as $value)
            <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-sm text-center hover:shadow-md transition-all">
                <div class="w-16 h-16 bg-[#1a5a72]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-{{ $value['icon'] }} text-[#1a9ba4] text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-[#1a5a72] dark:text-[#60cdf2] mb-2">{{ $value['title'] }}</h3>
                <p class="text-gray-600 dark:text-gray-300">{{ $value['desc'] }}</p>
            </div>
            @endforeach
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
                يتكون فريقنا من مجموعة من الخبراء المتميزين في مجالات تكنولوجيا المعلومات والأمن، الذين يسعون باستمرار لتطوير مهاراتهم.
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
                        <i class="fas fa-user text-[#1a5a72] text-3xl"></i>
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
                ['count' => +300, 'label' => 'مشروع مكتمل'],
                ['count' => +1000, 'label' => 'عميل راضٍ'],
                ['count' => +50, 'label' => 'شريك استراتيجي'],
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

<!-- ملف تعريفي -->
<section class="py-16 bg-[#1a5a72] text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-xl p-8 md:p-10 lg:p-12">
                <h2 class="text-2xl md:text-3xl font-bold text-[#1a5a72] dark:text-white mb-4">الملف التعريفي للشركة</h2>
                <p class="text-gray-600 dark:text-gray-300 mb-6">تعرّف على رؤيتنا، مهمتنا، وقيمنا. حمّل الملف التعريفي الكامل.</p>
                <a href="{{ asset('files/company-profile.pdf') }}" download
                   class="inline-block bg-gradient-to-r from-[#1a5a72] to-[#1a9ba4] text-white px-8 py-4 rounded-lg font-bold text-lg hover:shadow-xl transition-all duration-300">
                    تحميل الملف
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');

    const animateCounter = (counter) => {
        const target = +counter.getAttribute('data-count');
        let count = 0;
        const step = () => {
            count += 1;
            counter.innerText = count;
            if (count < target) {
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
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.6 });

    counters.forEach(counter => observer.observe(counter));
});
</script>
@endsection
