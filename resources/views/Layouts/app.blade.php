<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - FRTOON</title>
    {{-- Bootstrap lokal (tanpa CDN) --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toon.css') }}">
</head>
<body>
    @include('Partials.header')

    @yield('banner')

    <main class="container py-4">
        @yield('content')
    </main>

    @include('Partials.footer')

    <script>
        document.querySelector('.navbar-toggler').addEventListener('click', function () {
            document.getElementById('menu').classList.toggle('show');
        });
    </script>
</body>
</html>
