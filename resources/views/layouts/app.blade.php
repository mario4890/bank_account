<!doctype html>
<html class="html" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="body">
@include('modal.modal')
    <div class="navbar">
        <div class="navbar__container">
            <div class="logo">
                <div class="logo__container">
                    <h1>Bank account</h1>
                </div>
            </div>
            <div class="menu">
                <div class="menu__container">
                    <ul>
                        <li onclick="options.switchModal(event)">Wallet</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="body__container" id="app">
        <div class="body__content">
            <div class="main">
                <div class="main__container">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
