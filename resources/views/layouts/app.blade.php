<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/jPlayer-2.9.2/dist/skin/blue.monday/css/jplayer.blue.monday.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/assets/libs/jPlayer-2.9.2/lib/circle-player/skin/circle.player.css">
    <!-- Scripts -->

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body style="background-color:#fff">
    <div id="app">
        @include('elements.header')
        <div class="app-content-container">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('assets/js/main/header.js')}}"></script>
    <script type="text/javascript" src="/assets/libs/jPlayer-2.9.2/dist/jplayer/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="/assets/js/main/myJplayer.js"></script>
	<script src="/assets/js/app.js"></script>
    @stack('scripts')
</body>
</html>
