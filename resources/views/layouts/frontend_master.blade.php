<!DOCTYPE HTML>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>@yield('title')</title>

    @include('layouts.frontend.style')
    <style>
        #staticBackdrop .modal-body{
            border-top: 8px solid #ffb50d;
            border-bottom: 5px solid #3a3a3a;
        }
    </style>
</head>

<body class="home ">

    @include('layouts.frontend.header')


    @yield('content')

    @include('layouts.frontend.footer')

    <div class="fixedShareLink" style="position: fixed;top: 40%;left: 0;">
        <ul style="list-style:none;margin:0;padding:0;">
            <li style="margin-bottom:4px;background: #1997dd;padding: 6px 10px;text-align:center;"><a style="display: block;padding: 1px;font-size: 15px;font-weight: 900;color: white;font-style:italic;" target="_blank" href="{{$setting->facebook}}"><i class="bi bi-facebook"></i></a></li>
            <li style="margin-bottom:4px;background: #fc0d1b;padding: 6px 10px;text-align:center;"><a style="display: block;padding: 1px;font-size: 15px;font-weight: 900;color: white;font-style:italic;" target="_blank" href="{{$setting->youtube}}"><i class="bi bi-youtube"></i></a></li>
            <li style="margin-bottom:4px;background: rgb(17 219 229);padding: 6px 10px;text-align:center;"><a style="display: block;padding: 1px;font-size: 15px;font-weight: 900;color: white;font-style:italic;" target="_blank" href="{{$setting->twitter}}"><i class="bi bi-twitter"></i></a></li>
            <li style="margin-bottom:4px;background: linear-gradient(45deg, #c9a35e, #bf0d5f);padding: 6px 10px;text-align:center;"><a style="display: block;padding: 1px;font-size: 15px;font-weight: 900;color: white;font-style:italic;" target="_blank" href="{{$setting->instagram}}"><i class="bi bi-instagram"></i></a></li>
            <li style="background: #0e76a8;padding: 6px 10px;text-align:center;"><a style="display: block;padding: 1px;font-size: 15px;font-weight: 900;color: white;font-style:italic;" target="_blank" href="{{$setting->linkedin}}"><i class="bi bi-linkedin"></i></a></li>
        </ul>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="true" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button style="position: absolute;right: 10px;top: 5px;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mt-3">
                        @php
                        $newsletterImg = App\Models\NewsletterAdd::first();
                        @endphp
                        <img style="width: 100%;" src="{{asset($newsletterImg->image)}}" alt="News Letter Image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>