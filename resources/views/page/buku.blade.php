@extends('Layouts.app')
@section('title', 'Daftar Komik')
@section('content')
<h1 class="mb-1">Daftar Komik</h1>
<p class="text-secondary mb-3">{{ $books->total() }} komik ditemukan. Klik sampul untuk melihat detailnya.</p>

<div class="genre-tabs">
    <a href="{{ route('buku', array_filter(['q' => request('q')])) }}"
       class="genre-tab {{ request('genre') ? '' : 'active' }}">Semua</a>
    @foreach ($genres as $g)
        <a href="{{ route('buku', array_filter(['genre' => $g, 'q' => request('q')])) }}"
           class="genre-tab {{ request('genre') === $g ? 'active' : '' }}">{{ $g }}</a>
    @endforeach
</div>

<form method="GET" action="{{ route('buku') }}" class="my-3">
    @if (request('genre'))<input type="hidden" name="genre" value="{{ request('genre') }}">@endif
    <input type="text" name="q" value="{{ request('q') }}" class="form-control toon-search" placeholder="Cari judul / kreator">
</form>

<div class="row">
    @forelse ($books as $book)
        <div class="col-4 col-md-3 col-lg-2 mb-4">@include('Partials.card-buku')</div>
    @empty
        <div class="col-12 text-center text-secondary py-5">Komik tidak ditemukan.</div>
    @endforelse
</div>

<div class="d-flex justify-content-center mt-3">
    {{ $books->links() }}
</div>
@endsection
