<!DOCTYPE HTML>
<html lang="bn" prefix="og: http://ogp.me/ns#">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>@yield('title')</title>

    @include("layouts.frontend.style")
</head>

<body class="home ">

    @include('layouts.frontend.header')


    @yield('content')
    
    @include('layouts.frontend.footer')
</body>

</html>
