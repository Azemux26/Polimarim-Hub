<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon.ico/favicon-ami.png') }}">
    <meta name="theme-color" content="#ffffff">

    <title>@yield('title', 'Polimarim Hub')</title>

    @vite([
    'resources/sass/main.scss',
    'resources/css/main.css',
    'resources/css/custom.css',
    'resources/js/app.js'
])

</head>
<body class="bg-light">

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Main Content --}}
    
        @yield('content')
  

    {{-- Footer --}}
    @include('partials.footer')

    <!-- Vite JS -->
    @vite(['resources/js/app.js'])
</body>
</html>
