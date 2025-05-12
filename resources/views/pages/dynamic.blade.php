@extends('layouts.app')

@section('title', $page->title)

@section('content')
<section class="py-16 px-4">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold text-[#1782a4] mb-6 text-center">{{ $page->title }}</h1>

        {{-- عرض المحتوى كمحتوى HTML --}}
        <div class="prose max-w-full text-right">
            {!! $page->content !!}
        </div>
    </div>
</section>
@endsection
