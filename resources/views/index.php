<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1>
        {{ config('app.name') }} <br>
        {{ env('APP_NAME') }} <br>
        {{ env( APP_NAME) }} <br>
        {{ config(app.name) }} <br>

    </h1>
</body>
</html>