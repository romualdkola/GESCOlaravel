<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('layouts.header')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
        <main class="py-4">
            @include('sweetalert::alert')
            @yield('content')
        </main>
    @include('layouts.footer')
    @include('layouts.footScript')
</body>
</html>
