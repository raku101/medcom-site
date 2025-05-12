@extends('layouts.app')

@section('title', 'تواصل معنا - Medcom')

@section('content')
<!-- Hero Section with Background Image -->
<section class="relative py-12 text-white overflow-hidden">
    <!-- Background Layers -->
    <div class="absolute inset-0 z-0">
        <!-- Background Image -->
        <img src="{{ asset('images/contact-bg.jpg') }}" alt="خلفية تواصل معنا" 
             class="w-full h-full object-cover object-center">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
        <!-- Subtle Pattern -->
        
    </div>
    
    <!-- Content -->
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">تواصل معنا</h1>
        
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-gray-50 p-8 rounded-lg shadow-md">
                    <h2 class="text-2xl font-bold text-[#1a5a72] mb-6 text-right">أرسل رسالتك</h2>
                    
                    <form class="space-y-4">
                        <div class="grid grid-cols-1 gap-4">
                            <div>
                                <label for="name" class="block text-right text-gray-700 mb-2">الاسم الكامل</label>
                                <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1a9ba4] focus:border-transparent" placeholder="أدخل اسمك">
                            </div>
                            
                            <div>
                                <label for="email" class="block text-right text-gray-700 mb-2">البريد الإلكتروني</label>
                                <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1a9ba4] focus:border-transparent" placeholder="example@email.com">
                            </div>
                            
                            <div>
                                <label for="phone" class="block text-right text-gray-700 mb-2">رقم الهاتف</label>
                                <input type="tel" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1a9ba4] focus:border-transparent" placeholder="+966 50 000 0000">
                            </div>
                            
                            <div>
                                <label for="subject" class="block text-right text-gray-700 mb-2">الموضوع</label>
                                <select id="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1a9ba4] focus:border-transparent">
                                    <option value="">اختر الموضوع</option>
                                    <option value="support">الدعم الفني</option>
                                    <option value="sales">الاستفسارات التجارية</option>
                                    <option value="partnership">الشراكات</option>
                                    <option value="other">موضوع آخر</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="message" class="block text-right text-gray-700 mb-2">الرسالة</label>
                                <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1a9ba4] focus:border-transparent" placeholder="أدخل رسالتك هنا..."></textarea>
                            </div>
                        </div>
                        
                        <button type="submit" class="w-full bg-[#1a5a72] text-white py-3 px-6 rounded-lg hover:bg-[#1a6d8a] transition-all font-medium shadow-md hover:shadow-lg">
                            إرسال الرسالة
                        </button>
                    </form>
                </div>
                
                <!-- Contact Info -->
                <div class="text-right">
                    <h2 class="text-2xl font-bold text-[#1a5a72] mb-6">معلومات التواصل</h2>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="bg-[#1a5a72]/10 p-3 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-[#1a5a72]">الهاتف</h3>
                                <p class="text-gray-700">+966 55 800 8895</p>
                              
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="bg-[#1a5a72]/10 p-3 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-[#1a5a72]">البريد الإلكتروني</h3>
                                <p class="text-gray-700">info@medcom.it.com</p>
                                <p class="text-gray-700">support@medcom.it.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="bg-[#1a5a72]/10 p-3 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#1a5a72]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-[#1a5a72]">العنوان</h3>
                                <p class="text-gray-700">المدينة المنورة، المملكة العربية السعودية</p>
                                <p class="text-gray-700">شارع الملك عبدالله</p>
                            </div>
                        </div>
                        
                        <div class="pt-4">
                            <h3 class="font-bold text-[#1a5a72] mb-3">ساعات العمل</h3>
                            <p class="text-gray-700">الأحد - الخميس: 8 صباحاً - 5 مساءً</p>
                            <p class="text-gray-700">الجمعة - السبت: إجازة</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.689314857498!2d46.67541531500078!3d24.8138375840715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee3b9b8a640a1%3A0x96d6c6f5b1a1a0a0!2sRiyadh%2C%20Saudi%20Arabia!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" 
                    width="100%" 
                    height="400" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy"
                    class="rounded-lg shadow-md"></iframe>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 bg-[#1a5a72] text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-6">هل لديك أي استفسارات؟</h2>
        <p class="mb-8 max-w-2xl mx-auto text-lg">
            فريق الدعم لدينا متاح للإجابة على جميع أسئلتك
        </p>
        <a href="tel:+966558008895" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
            اتصل بنا الآن
        </a>
    </div>
</section>
@endsection