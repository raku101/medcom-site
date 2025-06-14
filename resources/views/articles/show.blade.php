@extends('layouts.app')

@section('title', $article->title . ' - Medcom')

@section('content')
<!-- Hero Section -->
<section class="relative pt-[120px] pb-20 text-white overflow-hidden dark:bg-[#0f172a]">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" 
             class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a81a4]/90 via-[#1a6d8a]/90 to-[#1a5a72]/90"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 drop-shadow-lg">{{ $article->title }}</h1>
        <p class="text-sm text-white/80">
            <i class="fas fa-calendar-alt ml-1"></i>
            {{ \Carbon\Carbon::parse($article->published_at)->format('d M Y') }}
            | {{ $article->category }}
        </p>
    </div>
</section>

<!-- Article Body -->
<section class="py-16 bg-white dark:bg-slate-900 text-right">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="prose prose-lg dark:prose-invert prose-slate max-w-none leading-loose">
                {!! $article->content !!}
            </div>
        </div>
    </div>
</section>
@endsection
