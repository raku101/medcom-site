@extends('admin.layouts.app')

@section('title', 'إضافة مقالة جديدة')

@section('content')
    <h4 class="mb-4">إضافة مقالة جديدة</h4>

    <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">عنوان المقال</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">الرابط المختصر (slug)</label>
            <input type="text" name="slug" class="form-control" required>
        </div>

        <div class="mb-3">
    <label class="form-label">مُلخص المقال (اختياري)</label>
    <textarea name="excerpt" class="form-control" rows="3"></textarea>
</div>


        <div class="mb-3">
            <label class="form-label">التصنيف</label>
            <input type="text" name="category" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">تاريخ النشر</label>
            <input type="date" name="published_at" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">صورة المقال</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">المحتوى</label>
            <textarea name="content" class="form-control" id="editor" rows="8"></textarea>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-save"></i> حفظ المقال
        </button>
        <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary">إلغاء</a>
    </form>
@endsection

@push('scripts')
<!-- CKEditor 5 CDN -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        ClassicEditor
            .create(document.querySelector('#editor'), {
                language: 'ar',
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>
@endpush
