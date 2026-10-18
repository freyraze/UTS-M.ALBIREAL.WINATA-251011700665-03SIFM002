@extends('Layouts.app')
@section('title', $book->title)

@section('banner')
<section class="banner">
    <div class="banner-bg" style="background-image: url('{{ asset($book->image) }}')"></div>
    <div class="container banner-inner">
        <a href="{{ route('buku') }}" class="banner-back">&lsaquo; Kembali ke Daftar</a>
        <div class="row align-items-center mt-3">
            <div class="col-5 col-md-3 text-center">
                <img src="{{ asset($book->image) }}" class="banner-cover" alt="{{ $book->title }}">
            </div>
            <div class="col-7 col-md-9">
                <span class="chip">{{ $book->genre }}</span>
                <h1>{{ $book->title }}</h1>
                <p class="banner-meta">oleh {{ $book->author }}</p>
                <div class="banner-harga">Rp {{ number_format($book->price, 0, ',', '.') }}</div>
                <a href="#sinopsis" class="btn btn-toon mr-2 mb-2">Lihat Sinopsis</a>
                <a href="{{ route('buku', ['genre' => $book->genre]) }}" class="btn btn-toon-outline mb-2">Genre {{ $book->genre }}</a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8 mb-4" id="sinopsis">
        <h2 class="sec-title">Sinopsis</h2>
        <p>{{ $book->summary }}</p>

        <h2 class="sec-title mt-4">Info Komik</h2>
        <table class="table detail-table">
            <tr><th>Judul</th><td>{{ $book->title }}</td></tr>
            <tr><th>Kreator</th><td>{{ $book->author }}</td></tr>
            <tr><th>Genre</th><td>{{ $book->genre }}</td></tr>
            <tr><th>Harga</th><td><strong>Rp {{ number_format($book->price, 0, ',', '.') }}</strong></td></tr>
        </table>
    </div>

    @if ($lainnya->count())
    <div class="col-lg-4">
        <h2 class="sec-title">Genre {{ $book->genre }} lainnya</h2>
        @foreach ($lainnya as $b)
            <a href="{{ route('buku.show', $b->id) }}" class="rank-item">
                <img src="{{ asset($b->image) }}" alt="{{ $b->title }}">
                <div>
                    <div class="r-title">{{ $b->title }}</div>
                    <div class="r-meta">{{ $b->author }} &middot; {{ $b->genre }}</div>
                </div>
            </a>
        @endforeach
    </div>
    @endif
</div>
@endsection
