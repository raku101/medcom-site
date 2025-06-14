@extends('admin.layouts.app')


@section('title', 'إدارة المقالات')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4>إدارة المقالات</h4>
    <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">
        <i class="fas fa-plus-circle"></i> إضافة مقالة جديدة
    </a>
</div>

<table class="table table-bordered table-striped table-hover text-center">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>العنوان</th>
            <th>الرابط المختصر</th>
            <th>التصنيف</th>
            <th>تاريخ النشر</th>
            <th>الإجراءات</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($articles as $article)
        <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->title }}</td>
            <td>{{ $article->slug }}</td>
            <td>{{ $article->category }}</td>
            <td>{{ $article->published_at }}</td>
            <td>
                <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-info btn-sm">
                    <i class="fas fa-edit"></i> تعديل
                </a>
                <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" class="d-inline" onsubmit="return confirm('هل أنت متأكد من الحذف؟')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        <i class="fas fa-trash-alt"></i> حذف
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6">لا توجد مقالات حالياً.</td>
        </tr>
        @endforelse
    </tbody>
</table>

<div class="d-flex justify-content-center mt-4">
    {{ $articles->links() }}
</div>
@endsection
