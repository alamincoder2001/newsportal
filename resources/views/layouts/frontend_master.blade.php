<!DOCTYPE HTML>
<html lang="bn" prefix="og: http://ogp.me/ns#">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>@yield('title')</title>

    @include('layouts.frontend.style')
</head>

<body class="home ">

    @include('layouts.frontend.header')


    @yield('content')

    @include('layouts.frontend.footer')

    <div class="fixedShareLink" style="position: fixed;top: 40%;left: 0;">
        <ul style="list-style:none;margin:0;padding:0;">
            <li style="background: #1997dd;padding: 6px 13px;text-align:center;"><a style="display: block;padding: 1px;font-size: 15px;font-weight: 900;color: white;font-style:italic;" target="_blank" href="{{$setting->facebook}}"><i class="bi bi-facebook"></i></a></li>
            <li style="background: #fc0d1b;padding: 6px 13px;text-align:center;"><a style="display: block;padding: 1px;font-size: 15px;font-weight: 900;color: white;font-style:italic;" target="_blank" href="{{$setting->youtube}}"><i class="bi bi-youtube"></i></a></li>
            <li style="background: linear-gradient(45deg, #c9a35e, #bf0d5f);padding: 6px 13px;text-align:center;"><a style="display: block;padding: 1px;font-size: 15px;font-weight: 900;color: white;font-style:italic;" target="_blank" href="{{$setting->instagram}}"><i class="bi bi-instagram"></i></a></li>
            <li style="background: rgb(17 219 229);padding: 6px 13px;text-align:center;"><a style="display: block;padding: 1px;font-size: 15px;font-weight: 900;color: white;font-style:italic;" target="_blank" href="{{$setting->twitter}}"><i class="bi bi-twitter"></i></a></li>
        </ul>
    </div>
</body>

</html>
