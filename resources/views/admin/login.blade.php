عشوائي
@extends('admin.layouts.auth')

@section('content')
    <div class="login-card">
        <h4 class="text-center mb-4">تسجيل الدخول إلى لوحة التحكم</h4>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <div class="mb-3">
                <label for="email">البريد الإلكتروني</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password">كلمة المرور</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">دخول</button>
        </form>
    </div>
@endsection
