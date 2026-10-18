@extends('Layouts.app')
@section('title', 'Beranda')

@section('banner')
@php $hero = $ranking->first(); @endphp
<section class="banner">
    <div class="banner-bg" style="background-image: url('{{ asset($hero->image) }}')"></div>
    <div class="container banner-inner">
        <div class="row align-items-center">
            <div class="col-5 col-md-3 offset-md-1 text-center">
                <img src="{{ asset($hero->image) }}" class="banner-cover" alt="{{ $hero->title }}">
            </div>
            <div class="col-7 col-md-7">
                <span class="chip">#1 Terpopuler</span>
                <h1>{{ $hero->title }}</h1>
                <p class="banner-meta">{{ $hero->author }} &middot; {{ $hero->genre }}</p>
                <p class="banner-sum d-none d-md-block">{{ \Illuminate\Support\Str::limit($hero->summary, 140) }}</p>
                <a href="{{ route('buku.show', $hero->id) }}" class="btn btn-toon">Lihat Detail</a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="genre-tabs">
    <a href="{{ route('buku', array_filter(['q' => request('q')])) }}"
       class="genre-tab {{ request('genre') ? '' : 'active' }}">Semua</a>
    @foreach ($genres as $g)
        <a href="{{ route('buku', array_filter(['genre' => $g, 'q' => request('q')])) }}"
           class="genre-tab {{ request('genre') === $g ? 'active' : '' }}">{{ $g }}</a>
    @endforeach
</div>

<div class="row mt-3">
    <div class="col-lg-5 mb-4">
        <h2 class="sec-title">Peringkat Teratas</h2>
        @foreach ($ranking as $i => $book)
            <a href="{{ route('buku.show', $book->id) }}" class="rank-item">
                <div class="rank-no">{{ $i + 1 }}</div>
                <img src="{{ asset($book->image) }}" alt="{{ $book->title }}">
                <div>
                    <div class="r-title">{{ $book->title }}</div>
                    <div class="r-meta">{{ $book->author }} &middot; {{ $book->genre }}</div>
                </div>
            </a>
        @endforeach
    </div>

    <div class="col-lg-7">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h2 class="sec-title mb-0">Baru Ditambahkan</h2>
            <a href="{{ route('buku') }}" class="small text-secondary">Lihat semua &rsaquo;</a>
        </div>
        <div class="row">
            @foreach ($terbaru as $book)
                <div class="col-4 col-md-3 col-lg-4 mt-3">@include('Partials.card-buku', ['baru' => true])</div>
            @endforeach
        </div>
    </div>
</div>
@endsection
