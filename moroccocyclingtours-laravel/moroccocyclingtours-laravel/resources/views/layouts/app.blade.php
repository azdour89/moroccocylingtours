<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Morocco Cycling Tours') | moroccocyclingtours.com</title>
    <meta name="description" content="@yield('description', 'Guided and self-guided cycling tours across the High Atlas, the Sahara edge and the Atlantic coast.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wdth,wght@62..125,500..900&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
</head>
<body>
<header class="site-header">
    <a class="brand" href="{{ route('home') }}">Morocco Cycling Tours</a>
    <nav aria-label="Main">
        <a href="{{ route('tours.index') }}">Tours</a>
        <a href="{{ route('contact') }}" class="btn btn-small">Plan your ride</a>
    </nav>
</header>

<main>
    @if (session('sent'))
        <p class="notice" role="status">{{ session('sent') }}</p>
    @endif
    @yield('content')
</main>

<footer class="site-footer">
    <p>Morocco Cycling Tours. Guided rides from Marrakech, Ouarzazate and Essaouira.</p>
    <p><a href="{{ route('contact') }}">Ask about dates</a></p>
</footer>
</body>
</html>
