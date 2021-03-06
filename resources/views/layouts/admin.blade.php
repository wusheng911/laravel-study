<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="/assets/css/main.css" rel="stylesheet">

    <script src="/assets/libs/jquery-3.2.0.min/index.js"></script>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body>
    @include('elements.admintop')
    @permission('all')
    @yield('content')
    @endpermission
    <script src="/assets/libs/DataTables-1.10.13/media/js/jquery.dataTables.min.js"></script>
    <script src="/assets/libs/DataTables-1.10.13/media/js/dataTables.bootstrap.min.js"></script>
    @stack('scripts')

</body>
</html>
