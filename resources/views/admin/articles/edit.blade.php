@extends('admin.layout')

@section('title', 'تعديل المقالة')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4>تعديل المقالة</h4>
    <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-right"></i> العودة للقائمة
    </a>
</div>

<form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">عنوان المقالة</label>
        <input type="text" name="title" class="form-control" value="{{ $article->title }}" required>
    </div>

    <div class="mb-3">
        <label for="slug" class="form-label">الرابط المختصر (slug)</label>
        <input type="text" name="slug" class="form-control" value="{{ $article->slug }}" required>
    </div>

    <div class="mb-3">
        <label for="category" class="form-label">التصنيف</label>
        <input type="text" name="category" class="form-control" value="{{ $article->category }}">
    </div>

    <div class="mb-3">
        <label for="published_at" class="form-label">تاريخ النشر</label>
        <input type="date" name="published_at" class="form-control" value="{{ $article->published_at }}">
    </div>

    <div class="mb-3">
        <label for="excerpt" class="form-label">نبذة مختصرة</label>
        <textarea name="excerpt" class="form-control" rows="3">{{ $article->excerpt }}</textarea>
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">محتوى المقالة</label>
        <textarea name="content" class="form-control" rows="8">{{ $article->content }}</textarea>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">صورة المقالة (اختياري)</label>
        <input type="file" name="image" class="form-control" accept="image/*">
        @if($article->image)
            <div class="mt-2">
                <img src="{{ asset('storage/' . $article->image) }}" alt="صورة المقالة" width="120">
            </div>
        @endif
    </div>

    <button type="submit" class="btn btn-primary">
        <i class="fas fa-save"></i> تحديث المقالة
    </button>
</form>
@endsection
