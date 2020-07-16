<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer>
        <div class="redes-sociales">
            <div class="red-social">
                <a href="http://" target="_blank" rel="noopener noreferrer">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
            </div>
            <div class="red-social">
                <a href="http://" target="_blank" rel="noopener noreferrer">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </div>
            <div class="red-social">
                <a href="http://" target="_blank" rel="noopener noreferrer">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="copy">
            &copy; 2020 - Todos los derechos reservados
        </div>
    </footer>
</body>
</html>
