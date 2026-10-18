<nav class="navbar navbar-expand-md navbar-toon sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('beranda') }}">FR<span>TOON</span></a>
        <button class="navbar-toggler" type="button" aria-label="Menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('beranda') ? 'active' : '' }}" href="{{ route('beranda') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('tentang') ? 'active' : '' }}" href="{{ route('tentang') }}">Tentang</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('buku*') ? 'active' : '' }}" href="{{ route('buku') }}">Daftar Komik</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}" href="{{ route('kontak') }}">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>
