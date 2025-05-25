@extends('layouts.app')

@section('title', $service->title)

@section('content')
<section class="py-16 text-center">
  <div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold text-[#1a5a72]">{{ $service->title }}</h1>
    <p class="mt-4 text-gray-600">هذه صفحة مخصصة لخدمة: {{ $service->title }}</p>
  </div>
</section>
@endsection
