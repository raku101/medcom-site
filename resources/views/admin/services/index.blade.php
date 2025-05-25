@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>إدارة الخدمات</h2>
        <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-2"></i>إضافة خدمة جديدة
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
                            <th>العنوان</th>
                            <th>الرابط المختصر</th>
                            <th>تاريخ الإنشاء</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($services as $service)
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->title }}</td>
                            <td>{{ $service->slug }}</td>
                            <td>{{ $service->created_at->format('Y-m-d') }}</td>
                            <td>
                                <div class="d-flex flex-wrap gap-2">
                                    <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-sm btn-info">
                                        <i class="bi bi-pencil"></i> تعديل
                                    </a>

                                    {{-- زر تعديل الصفحة --}}
                                    <a href="{{ route('admin.services.editView', $service->slug) }}" class="btn btn-sm btn-warning">
                                        <i class="bi bi-file-earmark-code"></i> تعديل الصفحة
                                    </a>

                                    <form action="{{ route('admin.services.destroy', $service) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من حذف هذه الخدمة؟');">
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
                            <td colspan="5" class="text-center">لا توجد خدمات حالياً</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $services->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
