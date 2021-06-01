<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('includes.head')


</head>
<body>


                @include('includes.header')
                @include('includes.cookie')
                @yield('content')
                @include('includes.footer')

<script src="{{ mix('js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
</body>
</html>


