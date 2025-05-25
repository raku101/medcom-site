@extends('admin.layouts.app')

@section('title', 'إدارة المنتجات')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>إدارة المنتجات</h2>
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-2"></i>إضافة منتج جديد
        </a>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>الصورة</th>
                            <th>العنوان</th>
                            <th>السعر</th>
                            <th>الحالة</th>
                            <th>تاريخ الإنشاء</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>
                                @if($product->image)
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" width="50" height="50" class="img-thumbnail">
                                @else
                                    <span class="badge bg-secondary">لا توجد صورة</span>
                                @endif
                            </td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                                @if($product->is_active)
                                    <span class="badge bg-success">نشط</span>
                                @else
                                    <span class="badge bg-danger">غير نشط</span>
                                @endif
                                
                                @if($product->is_featured)
                                    <span class="badge bg-warning">مميز</span>
                                @endif
                            </td>
                            <td>{{ $product->created_at->format('Y-m-d') }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-info">
                                        <i class="bi bi-pencil"></i> تعديل
                                    </a>
                                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من حذف هذا المنتج؟');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash"></i> حذف
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">لا توجد منتجات حالياً</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <div class="d-flex justify-content-center mt-4">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
