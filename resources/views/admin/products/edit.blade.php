@extends('admin.layouts.app')

@section('title', 'تعديل منتج')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>تعديل منتج</h2>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-right me-2"></i>العودة للمنتجات
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            {{-- عرض رسالة نجاح إن وجدت --}}
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            {{-- نموذج تعديل المنتج --}}
            <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="title" class="form-label">عنوان المنتج</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $product->title) }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">وصف المنتج</label>
                    <div id="editor-container" style="height: 300px; direction: rtl; background-color: #fff;">{!! old('description', $product->description) !!}</div>
                    <input type="hidden" name="description" id="description">
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="price" class="form-label">السعر</label>
                    <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $product->price) }}" required>
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- صورة المنتج --}}
                <div class="mb-3">
                    <label for="image" class="form-label">صورة المنتج</label>

                    @if($product->image)
                        <div class="mb-2">
                            <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" class="img-thumbnail" style="max-height: 200px;">
                        </div>

                        {{-- نموذج مستقل لحذف الصورة --}}
                        <form action="{{ route('admin.products.deleteImage', $product->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من حذف الصورة الحالية؟');" class="mb-3">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash me-1"></i> حذف الصورة الحالية
                            </button>
                        </form>
                    @endif

                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                    <small class="form-text text-muted">اترك هذا الحقل فارغاً إذا كنت لا ترغب في تغيير الصورة</small>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="is_featured" name="is_featured" {{ old('is_featured', $product->is_featured) ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_featured">منتج مميز</label>
                </div>
                
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="is_active" name="is_active" {{ old('is_active', $product->is_active) ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">منتج نشط</label>
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save me-2"></i>حفظ التغييرات
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- Quill Editor -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
<script>
    var quill = new Quill('#editor-container', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{ header: [1, 2, false] }],
                ['bold', 'italic', 'underline'],
                ['code-block'],
                [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                ['clean']
            ]
        }
    });

    document.querySelector('form').onsubmit = function () {
        document.getElementById('description').value = quill.root.innerHTML;
    };
</script>
@endpush
