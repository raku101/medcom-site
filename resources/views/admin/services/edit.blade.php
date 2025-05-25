@extends('admin.layouts.app')

@section('title', 'تعديل الخدمة')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>تعديل الخدمة</h2>
        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-right me-2"></i>العودة للخدمات
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.services.update', $service) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">عنوان الخدمة</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                        id="title" name="title" value="{{ old('title', $service->title) }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">وصف الخدمة</label>
                    <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" rows="10">{{ old('description', $service->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save me-2"></i>تحديث الخدمة
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
