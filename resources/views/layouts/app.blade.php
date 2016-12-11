<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'SupremeSTAN') }}</title>
    {{--bootstrap minified--}}
    <link rel="stylesheet" type="text/css" href="/vendors/bootstrap/dist/css/bootstrap.min.css">
    <!-- vendor -->
    <link rel="stylesheet" type="text/css" href="/vendors/bootstrap/dist/css/bootstrap-theme.min.css">
</head>
<body id="app-layout">
    @yield('content')
    @include('partials.js')
</body>
</html>