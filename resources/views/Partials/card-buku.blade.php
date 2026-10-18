<a href="{{ route('buku.show', $book->id) }}" class="tile">
    <div class="thumb">
        @if (!empty($baru))<span class="badge-new">NEW</span>@endif
        <img src="{{ asset($book->image) }}" alt="{{ $book->title }}">
        <div class="badge-genre">{{ $book->genre }}</div>
    </div>
    <div class="t-title">{{ $book->title }}</div>
    <div class="t-meta">{{ $book->author }}</div>
    <div class="t-price">Rp {{ number_format($book->price, 0, ',', '.') }}</div>
</a>
