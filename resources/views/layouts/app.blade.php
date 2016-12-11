<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'SupremeSTAN') }}</title>
    {{--compiled assets--}}
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body id="app-layout">
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
    @include('partials.js')
</body>
</html>