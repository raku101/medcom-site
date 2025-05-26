@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">المنتجات</h2>
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-3 mb-4 text-center">
            <div class="card h-100">
                <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->title }}</h5>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal{{ $product->id }}">
                        عرض التفاصيل
                    </button>
                </div>
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
              <div class="modal-body d-flex align-items-center gap-4">
                <img src="{{ asset($product->image) }}" class="img-fluid w-50" alt="{{ $product->title }}">
                <p class="w-50">{{ $product->description ?? 'لا يوجد وصف' }}</p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
