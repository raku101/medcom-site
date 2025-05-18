@extends('layouts.app')

@section('title', 'شركاؤنا - Medcom')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90 py-12 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/partners-bg.jpg') }}" alt="خلفية شركاؤنا" class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-black/30"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">شركاؤنا</h1>
    </div>
</section>

<!-- Intro Section -->
<section class="py-16 bg-white dark:bg-slate-800">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-12">
                في Medcom، نحن نؤمن بأهمية التعاون والشراكة مع أفضل الشركات والمؤسسات لتحقيق أهدافنا المشتركة.
                يساهم شركاؤنا في تعزيز قدراتنا وتمكيننا من تقديم حلول متكاملة تلبي احتياجات عملائنا بأعلى مستويات الجودة والاحترافية.
            </p>
            <div class="text-right mb-16">
                <h2 class="text-3xl font-bold text-[#1a5a72] mb-6">شركاؤنا الرئيسيون</h2>
                <div class="w-24 h-1 bg-[#1ac8a4] mr-0 ml-auto mb-8"></div>
            </div>
        </div>

        <!-- Partners List -->
        <div class="max-w-4xl mx-auto space-y-16">
            @foreach ([
                ['name' => 'Hikvision', 'image' => 'hikvision.png', 'title' => 'حلول الأمن والتكنولوجيا', 'desc' => 'تعتبر Hikvision واحدة من الشركات الرائدة في تطوير تكنولوجيا الأمان...'],
                ['name' => 'Cisco', 'image' => 'cisco.png', 'title' => 'أنظمة الشبكات والحلول السحابية', 'desc' => 'تساهم Cisco في توفير حلول شبكية متطورة تتيح لنا تقديم خدمات...'],
                ['name' => 'Dahua Technology', 'image' => 'dahua.png', 'title' => 'أجهزة المراقبة وأنظمة التحكم', 'desc' => 'تقدم Dahua Technology تقنيات متقدمة في مجال كاميرات المراقبة...'],
                ['name' => 'Microsoft Azure', 'image' => 'azure.png', 'title' => 'خدمات تكنولوجيا المعلومات والحلول السحابية', 'desc' => 'توفر Microsoft Azure بيئة سحابية متطورة تدعم مشاريعنا...'],
                ['name' => 'Fortinet', 'image' => 'fortinet.png', 'title' => 'أمن الشبكات', 'desc' => 'تعمل Fortinet على توفير حلول أمنية متكاملة للشبكات...']
            ] as $partner)
            <div class="flex flex-col md:flex-row gap-8 items-start">
                <div class="w-full md:w-1/4 bg-gray-50 dark:bg-slate-700 p-6 rounded-lg border border-gray-200 dark:border-slate-600 flex justify-center">
                    <img src="{{ asset('images/partners/' . $partner['image']) }}" alt="{{ $partner['name'] }}" class="h-20 object-contain">
                </div>
                <div class="w-full md:w-3/4 text-right">
                    <h3 class="text-2xl font-bold text-[#1a5a72] mb-2">{{ $partner['name'] }}</h3>
                    <p class="font-medium text-gray-600 dark:text-gray-400 mb-3">{{ $partner['title'] }}</p>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">{{ $partner['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Additional Logos -->
<section class="py-12 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-[#1a5a72] mb-8 text-center">شركاؤنا الآخرون</h2>
        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-12">
            @foreach (range(1, 12) as $i)
            <div class="w-24 md:w-32 h-24 flex items-center justify-center">
                <img src="{{ asset('images/partners/partner'.$i.'.png') }}" alt="شريك {{ $i }}" class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all duration-300 opacity-80 hover:opacity-100">
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Why Partners Matter -->
<section class="py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-right">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-6">لماذا تعتبر الشراكات مهمة لنا؟</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mr-0 mb-8"></div>
            <p class="text-lg text-gray-700 dark:text-gray-300 mb-8 leading-relaxed">
                نحن نعتبر الشراكات الاستراتيجية جزءًا أساسيًا من نجاحنا. من خلال التعاون مع شركات رائدة، نحن قادرون على:
            </p>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white dark:bg-slate-700 p-6 rounded-lg shadow-sm border-t-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">توسيع نطاق خدماتنا</h3>
                    <p class="text-gray-600 dark:text-gray-300">تقديم حلول متنوعة ومتكاملة</p>
                </div>
                <div class="bg-white dark:bg-slate-700 p-6 rounded-lg shadow-sm border-t-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">زيادة الابتكار</h3>
                    <p class="text-gray-600 dark:text-gray-300">دمج تقنيات جديدة ومبتكرة في مشاريعنا</p>
                </div>
                <div class="bg-white dark:bg-slate-700 p-6 rounded-lg shadow-sm border-t-4 border-[#1a9ba4]">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">تحسين الجودة</h3>
                    <p class="text-gray-600 dark:text-gray-300">ضمان تقديم أعلى مستويات الجودة في جميع خدماتنا</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 bg-[#1a5a72] dark:bg-slate-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-6">هل ترغب في أن تصبح شريكًا لنا؟</h2>
        <p class="mb-8 max-w-2xl mx-auto text-lg">
            انضم إلى شبكة شركائنا واستفد من فرص العمل المشترك
        </p>
        <a href="/اتصل-بنا" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
            تواصل معنا
        </a>
    </div>
</section>
@endsection
