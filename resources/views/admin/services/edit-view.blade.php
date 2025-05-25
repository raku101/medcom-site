@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>تعديل صفحة الخدمة: {{ $slug }}</h2>
        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-right-circle"></i> العودة للخدمات
        </a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.services.updateView', $slug) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">محتوى الصفحة (Blade File)</label>
            <textarea name="content" rows="20" class="form-control" style="font-family: monospace">{{ old('content', $content) }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-save"></i> حفظ التعديلات
        </button>
    </form>
</div>
@endsection
