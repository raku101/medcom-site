@extends('layouts.app')

@section('title', 'منتجاتنا')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90 py-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/products-hero.jpg') }}" alt="خلفية منتجاتنا" class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-black/40"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10 py-12">
        <div class="max-w-3xl text-right">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">منتجاتنا التقنية الموثوقة</h1>
            <p class="text-xl md:text-2xl leading-relaxed mb-8">
                نوفر لك أحدث التقنيات والمنتجات التي تلبي احتياجاتك باحترافية وجودة عالية
            </p>
            <a href="#products-grid" class="inline-block bg-white text-[#1a5a72] font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-all shadow-lg">
                استعرض المنتجات
            </a>
        </div>
    </div>
</section>

<!-- Products Section -->
<section id="products-grid" class="py-16 bg-gray-50 dark:bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-[#1a5a72] mb-4">منتجاتنا التقنية</h2>
            <div class="w-24 h-1 bg-[#55aabb] mx-auto mb-6"></div>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                مجموعة متنوعة من المنتجات التي تجمع بين الأداء والاعتمادية
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($products as $product)
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300"
                 data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <img src="{{ asset($product->image) }}"
                     alt="{{ $product->title }}"
                     class="w-full h-auto object-contain">

                <div class="p-4 text-center">
                    <h3 class="text-lg font-bold text-[#1a5a72] mb-3">{{ $product->title }}</h3>
                    <button class="inline-block bg-[#1a5a72] text-white px-4 py-2 rounded hover:bg-[#155768] transition-all duration-200 shadow-md"
                            data-bs-toggle="modal" data-bs-target="#productModal{{ $product->id }}">
                        عرض التفاصيل
                    </button>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="productModal{{ $product->id }}" tabindex="-1" aria-labelledby="productModalLabel{{ $product->id }}" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel{{ $product->id }}">{{ $product->title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
                  </div>
                  <div class="modal-body d-flex flex-column md:flex-row align-items-center gap-4">
                    <img src="{{ asset($product->image) }}" class="img-fluid w-full md:w-1/2 rounded" alt="{{ $product->title }}">
                    <div class="w-full md:w-1/2 text-right">
                        {!! $product->description ?? 'لا يوجد وصف' !!}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<style>
  .modal {
    display: none;
  }
  .modal.show {
    display: block;
  }
</style>

@endsection
