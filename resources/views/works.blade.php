@extends('layouts.app')

@section('title', 'سابقة الأعمال - Medcom')

@section('content')
<!-- Hero Section -->
<section class="relative py-16 text-white overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/projects-header-bg.jpg') }}" alt="خلفية سابقة الأعمال" 
             class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">سابقة الأعمال</h1>
    </div>
</section>

<section class="py-16 bg-white dark:bg-slate-800 text-right">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
             <p class="text-lg max-w-2xl mx-auto text-gray-700 dark:text-gray-500">
                تفتخر بتقديم مجموعة من المشاريع الناجحة التي تعكس خبرتنا واحترافيتنا
            </p>
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-3">مشاريعنا البارزة</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto"></div>
        </div>

        <div class="flex flex-col lg:flex-row gap-8 mb-16 items-center">
            <div class="lg:w-1/2">
                <img src="{{ asset('images/projects/residential.jpg') }}" alt="نظام أمان متكامل" 
                     class="rounded-lg shadow-xl w-full h-auto">
            </div>
            <div class="lg:w-1/2">
                <h3 class="text-2xl font-bold text-[#1a5a72] mb-3">نظام أمان متكامل لمجمع سكني</h3>
                <div class="bg-[#1a5a72]/10 p-4 rounded-lg mb-4">
                    <p class="font-medium text-[#1a5a72] mb-2">الوصف:</p>
                    <p class="text-gray-700 dark:text-gray-500">تصميم وتنفيذ نظام أمان شامل يتضمن كاميرات مراقبة متطورة وأنظمة تحكم في الدخول وخدمات صيانة دورية</p>
                </div>
                <div class="bg-green-100 p-4 rounded-lg">
                    <p class="font-medium text-green-800 mb-2">النتيجة:</p>
                    <p class="text-gray-700 dark:text-gray-900">زيادة نسبة الأمان بنسبة 40% وتعزيز رضا السكان</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-8 mb-16 items-center">
            <div class="lg:w-1/2 order-last">
                <img src="{{ asset('images/projects/education.jpg') }}" alt="شبكة مؤسسة تعليمية" 
                     class="rounded-lg shadow-xl w-full h-auto">
            </div>
            <div class="lg:w-1/2">
                <h3 class="text-2xl font-bold text-[#1a5a72] mb-3">إدارة شبكة لمؤسسة تعليمية</h3>
                <div class="bg-[#1a5a72]/10 p-4 rounded-lg mb-4">
                    <p class="font-medium text-[#1a5a72] mb-2">الوصف:</p>
                    <p class="text-gray-700 dark:text-gray-500">تصميم وتنفيذ شبكة محلية متكاملة لمؤسسة تعليمية تضم أكثر من 500 مستخدم</p>
                </div>
                <div class="bg-green-100 p-4 rounded-lg">
                    <p class="font-medium text-green-800 mb-2">النتيجة:</p>
                    <p class="text-gray-700 dark:text-gray-900">تحسين سرعة الاتصال واستقرار الخدمات بنسبة 35%</p>
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-8 mt-12">
            <div class="bg-gray-50 dark:bg-slate-700 rounded-lg overflow-hidden shadow-md border border-gray-200">
                <img src="{{ asset('images/projects/cloud.jpg') }}" alt="حلول سحابية" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">حلول سحابية لشركة ناشئة</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300 mb-3">تقليل تكاليف البنية التحتية بنسبة 30% وزيادة المرونة</p>
                    <a href="#" class="text-[#1a9ba4] font-medium hover:underline">عرض التفاصيل →</a>
                </div>
            </div>

            <div class="bg-gray-50 dark:bg-slate-700 rounded-lg overflow-hidden shadow-md border border-gray-200">
                <img src="{{ asset('images/projects/industrial.jpg') }}" alt="كاميرات مراقبة صناعية" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-[#1a5a72] mb-3">كاميرات مراقبة لمنشأة صناعية</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300 mb-3">تقليل الحوادث بنسبة 25% وزيادة كفاءة العمليات</p>
                    <a href="#" class="text-[#1a9ba4] font-medium hover:underline">عرض التفاصيل →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50 dark:bg-slate-900 text-center">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-6">الابتكارات المستمرة</h2>
            <div class="w-24 h-1 bg-[#1ac8a4] mx-auto mb-8"></div>
            <p class="text-lg text-gray-700 dark:text-gray-300 mb-8 leading-relaxed">
                نعتبر كل مشروع فرصة جديدة لإثبات قدرتنا على تقديم الحلول المثلى. فريقنا من المهندسين المتخصصين يسعى دائمًا للابتكار وتقديم خدمات تتجاوز توقعات العملاء.
            </p>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white dark:bg-slate-800 p-6 rounded-lg shadow-sm">
                    <div class="text-[#1a9ba4] text-4xl mb-4">✓</div>
                    <h3 class="font-bold text-[#1a5a72] mb-2">حلول مخصصة</h3>
                   <p class="text-gray-600 dark:text-gray-500">تصميم حسب الاحتياجات الدقيقة</p>
                </div>
                <div class="bg-white dark:bg-slate-800 p-6 rounded-lg shadow-sm">
                    <div class="text-[#1a9ba4] text-4xl mb-4">✧</div>
                    <h3 class="font-bold text-[#1a5a72] mb-2">تقنيات حديثة</h3>
                   <p class="text-gray-600 dark:text-gray-500">أحدث الأنظمة والتقنيات</p>
                </div>
                <div class="bg-white dark:bg-slate-800 p-6 rounded-lg shadow-sm">
                    <div class="text-[#1a9ba4] text-4xl mb-4">♻</div>
                    <h3 class="font-bold text-[#1a5a72] mb-2">دعم مستمر</h3>
                   <p class="text-gray-600 dark:text-gray-500">صيانة وتحديثات دورية</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-12 bg-[#1a5a72] dark:bg-slate-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-6">هل لديك مشروع في ذهنك؟</h2>
        <p class="mb-8 max-w-2xl mx-auto text-lg">
            تواصل معنا اليوم لتحصل على الحل الأمثل لمتطلباتك
        </p>
        <a href="/اتصل-بنا" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
            اتصل بنا الآن
        </a>
    </div>
</section>
@endsection
