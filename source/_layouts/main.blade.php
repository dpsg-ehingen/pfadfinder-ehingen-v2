<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body>
        <header>
            <a href="/">
                <img src="assets/images/dpsg-lilie_blau.png" alt="">
                <span>DPSG-Ehingen</span>
            </a>
            <div id="openMenu"><i class="gg-menu"></i></div>
            <nav id="menu">
                <span id="closeMenu"><i class="gg-chevron-double-right"></i></span>
                <ul>
                    <li><a href="#">&Uuml;ber uns</a></li>
                    <li><a href="#">Kontankt</a></li>
                    <li><a href="#">Mitglied werden</a></li>
                </ul>
            </nav>
        </header>
        <main>
            @yield('body')
        </main>
        <footer>

        </footer>
    </body>
</html>
