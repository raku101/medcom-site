@extends('admin.layouts.app')

@section('title', 'تعديل صفحة')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>تعديل صفحة</h2>
        <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-right me-2"></i>العودة للصفحات
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.pages.update', $page) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="title" class="form-label">عنوان الصفحة</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $page->title) }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="content" class="form-label">محتوى الصفحة</label>
                    <textarea class="form-control tinymce-editor @error('content') is-invalid @enderror" id="content" name="content" rows="10">{{ old('content', $page->content) }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
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
