@extends('layouts.app')

@section('title', 'تواصل معنا - Medcom')

@section('content')
<!-- Hero Section with Background Image -->
<section class="relative py-12 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/contact-bg.jpg') }}" alt="خلفية تواصل معنا" class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">تواصل معنا</h1>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-16 bg-white dark:bg-slate-800">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-gray-50 dark:bg-slate-700 p-8 rounded-lg shadow-md">
                    <h2 class="text-2xl font-bold text-[#1a5a72] mb-6 text-right">أرسل رسالتك</h2>
                    <form class="space-y-4">
                        <div class="grid grid-cols-1 gap-4">
                            <div>
                                <label for="name" class="block text-right text-gray-700 dark:text-gray-200 mb-2">الاسم الكامل</label>
                                <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-[#1a9ba4] focus:border-transparent bg-white dark:bg-slate-800 text-black dark:text-white" placeholder="أدخل اسمك">
                            </div>
                            <div>
                                <label for="email" class="block text-right text-gray-700 dark:text-gray-200 mb-2">البريد الإلكتروني</label>
                                <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-[#1a9ba4] focus:border-transparent bg-white dark:bg-slate-800 text-black dark:text-white" placeholder="example@email.com">
                            </div>
                            <div>
                                <label for="phone" class="block text-right text-gray-700 dark:text-gray-200 mb-2">رقم الهاتف</label>
                                <input type="tel" id="phone" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-[#1a9ba4] focus:border-transparent bg-white dark:bg-slate-800 text-black dark:text-white" placeholder="+966 50 000 0000">
                            </div>
                            <div>
                                <label for="subject" class="block text-right text-gray-700 dark:text-gray-200 mb-2">الموضوع</label>
                                <select id="subject" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-[#1a9ba4] focus:border-transparent bg-white dark:bg-slate-800 text-black dark:text-white">
                                    <option value="">اختر الموضوع</option>
                                    <option value="support">الدعم الفني</option>
                                    <option value="other">طلب عرض سعر</option>
                                    <option value="sales">الاستفسارات التجارية</option>
                                    <option value="partnership">الشراكات</option>
                                    <option value="other">موضوع آخر</option>
                                </select>
                            </div>
                            <div>
                                <label for="message" class="block text-right text-gray-700 dark:text-gray-200 mb-2">الرسالة</label>
                                <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-[#1a9ba4] focus:border-transparent bg-white dark:bg-slate-800 text-black dark:text-white" placeholder="أدخل رسالتك هنا..."></textarea>
                            </div>
                        </div>
                        <button type="submit" class="w-full bg-[#1a5a72] text-white py-3 px-6 rounded-lg hover:bg-[#1a6d8a] transition-all font-medium shadow-md hover:shadow-lg">إرسال الرسالة</button>
                    </form>
                </div>
                <!-- Contact Info -->
<div class="text-right">
    <h2 class="text-2xl font-bold text-[#1a5a72] mb-6">معلومات التواصل</h2>
    <div class="space-y-6">
        <!-- الهاتف -->
<div class="flex items-start gap-4">
  <div class="bg-[#1a5a72]/10 p-3 rounded-full">
    <i class="fas fa-phone text-[#1a5a72] text-lg"></i>
  </div>
  <div>
    <h3 class="font-bold text-[#1a5a72] mb-2">الهاتف</h3>

    <!-- رقم 1 -->
    <div class="flex items-center gap-2 text-gray-700 dark:text-gray-500 mb-1">
      <span>+966558008895</span>
      <a href="tel:+966558008895" class="text-[#1a5a72] hover:text-green-600" title="اتصال">
        <i class="fas fa-phone-alt"></i>
      </a>
      <a href="https://wa.me/966558008895" target="_blank" class="text-[#1a5a72] hover:text-green-600" title="واتساب">
        <i class="fab fa-whatsapp"></i>
      </a>
    </div>

    <!-- رقم 2 -->
    <div class="flex items-center gap-2 text-gray-700 dark:text-gray-500">
      <span>+966595932021</span>
      <a href="tel:+966595932021" class="text-[#1a5a72] hover:text-green-600" title="اتصال">
        <i class="fas fa-phone-alt"></i>
      </a>
      <a href="https://wa.me/966595932021" target="_blank" class="text-[#1a5a72] hover:text-green-600" title="واتساب">
        <i class="fab fa-whatsapp"></i>
      </a>
    </div>

  </div>
</div>


        <!-- البريد -->
        <div class="flex items-start gap-4">
            <div class="bg-[#1a5a72]/10 p-3 rounded-full">
                <i class="fas fa-envelope text-[#1a5a72] text-lg"></i>
            </div>
            <div>
                <h3 class="font-bold text-[#1a5a72]">البريد الإلكتروني</h3>
                <p>
                    <a href="mailto:info@medcom.it.com" class="text-gray-700 dark:text-gray-500 hover:underline">info@medcom.it.com</a>
                </p>
                <p>
                    <a href="mailto:support@medcom.it.com" class="text-gray-700 dark:text-gray-500 hover:underline">support@medcom.it.com</a>
                </p>
            </div>
        </div>

        <!-- العنوان -->
        <div class="flex items-start gap-4">
            <div class="bg-[#1a5a72]/10 p-3 rounded-full">
                <i class="fas fa-map-marker-alt text-[#1a5a72] text-lg"></i>
            </div>
            <div>
                <h3 class="font-bold text-[#1a5a72]">العنوان</h3>
                <a href="https://maps.app.goo.gl/1s6BCRDDtAN6Tkqa8?g_st=iw" target="_blank" class="text-gray-700 dark:text-gray-500 hover:underline block">
                    المدينة المنورة، المملكة العربية السعودية ، شارع الملك عبدالله
                </a>
                
            </div>
        </div>

        <!-- ساعات العمل -->
        <div class="pt-4">
            <h3 class="font-bold text-[#1a5a72] mb-3">ساعات العمل</h3>
            <p class="text-gray-700 dark:text-gray-500">السبت - الخميس: 8 صباحاً - 8 مساءً</p>
            <p class="text-gray-700 dark:text-gray-500">الجمعة: 4 - 10 مساءً</p>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="bg-gray-100 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.7081245093816!2d39.580958!3d24.4775324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15bdbfd5f8e51f27%3A0x85d3124a55f17736!2z2KfZhNiq2YTZitmE2YjYqSDYp9mE2YXYs9mE2Kkg2KfZhNmF2KzYp9mG2YrYqSDYp9mE2KfZhNmF2K3ZitmK2Kkg2KfZhNi12YTZhNmK2Kkg2KfZhNir2KfYqtiMINmI2YjZitix2KfZhNmK2YUgLSDYp9mE2YXYsdmK2YUg2KfZhNi52KfYsdmK2KfZhiAtINin2YTYp9mE2YXZitmI2YTYpw!5e0!3m2!1sar!2ssa!4v1716370000000!5m2!1sar!2ssa" 
                width="100%" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                class="rounded-lg shadow-md">
            </iframe>
        </div>
    </div>
</section>


<!-- CTA Section -->
<section class="py-12 bg-[#1a5a72] text-white dark:bg-slate-700">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-6">هل لديك أي استفسارات؟</h2>
        <p class="mb-8 max-w-2xl mx-auto text-lg">فريق الدعم لدينا متاح للإجابة على جميع أسئلتك</p>
        <a href="tel:+966558008895" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
            اتصل بنا الآن
        </a>
    </div>
</section>
@endsection
