<link rel="shortcut icon" href="{{ asset($setting->favicon != null ? $setting->favicon : 'noImage.jpg') }}" />

<base href="{{ route('website') }}" />

<meta name="language" content="bn" />
<meta http-equiv="Content-Language" content="bn" />
<meta name="robots" content="all">
<meta name="googlebot" content="all" />
<meta name="googlebot-news" content="all" />
<meta name="Developer" content="Sohel Rana" />
<meta name="Developed By" content="Link Up Technology" />
<meta name="propeller" content="" />
<meta name="google-site-verification" content="" />
<meta name="msvalidate.01" content="" />
<meta name="alexaVerifyID" content="" />
<meta name="keywords" content="Nirvoy News" />
<meta name="description" content="Nirvoy News. Most Largest And Popular In Bangladesh for bd bangla news" />
<meta name="author" content="Nirvoy News" />
<meta name="url" content="{{ URL::current() }}" />
<meta property="og:site_name" content="নির্ভয় নিউজ" />
<meta property="og:url" content="{{ URL::current() }}" />
<meta property="og:type" content="article" />
@yield('shareLink')



<meta property="fb:app_id" content="" />
<meta property="fb:pages" content="" />

<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="canonical" href="{{ route('website') }}">

<script src="https://cdn.jsdelivr.net/npm/air-datepicker@3.4.0/air-datepicker.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/air-datepicker@3.4.0/air-datepicker.min.css" rel="stylesheet">

<link href="{{ asset('frontend') }}/assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link href="{{ asset('frontend') }}/assets/css/calendar.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/magnaticpopup.css" />
<link href="{{ asset('frontend') }}/assets/css/custome-fontend.css" rel="stylesheet" />
<link href="{{ asset('frontend') }}/assets/css/theme-style.css" rel="stylesheet" />
<script src="https://rawcdn.githack.com/nextapps-de/spotlight/0.7.8/dist/spotlight.bundle.js"></script>
<meta http-equiv="refresh" content="1000" />

<style>
    .air-datepicker {
        width: 100%;
        font-size: 16px;
        font-weight: 600;
    }
</style>