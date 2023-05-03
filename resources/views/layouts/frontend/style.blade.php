<script async src="https://www.googletagmanager.com/gtag/js?id=UA-38749363-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-38749363-1');
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-FYW9668KNF"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-FYW9668KNF');
</script>

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
<meta property="og:title" content="Nirvoy News || Highest Circulated Newspaper" />
<meta property="og:description" content="Nirvoy News. Most Largest And Popular In Bangladesh for bd news bangla" />
<meta property="og:image" content="{{ asset('uploads') }}/news/2023000003.jpg" />
<meta property="image_url" content="{{ asset('uploads') }}/news/2023000003.jpg" />

<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="">
<meta property="twitter:url" content="{{ route('website') }}">
<meta name="twitter:title" content="Nirvoy News || Highest Circulated Newspaper">
<meta name="twitter:description" content="Nirvoy News. Most Largest And Popular In Bangladesh for bd news bangla">
<meta name="twitter:image" content="{{ route('website') }}assets/img/default-img.jpg">

<meta property="fb:app_id" content="" />
<meta property="fb:pages" content="" />

<link rel="canonical" href="{{ route('website') }}">
<link rel="image_src" href="{{ route('website') }}assets/newDesktop/img/default-img.jpg">

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "url": "{{route('website')}}",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "{{route('website')}}keywordsearch?cx=5d07de91748e84546&cof=FORID%3A10&ie=UTF-8&q={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
</script>

<link href="{{ asset('frontend') }}/assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link href="{{ asset('frontend') }}/assets/css/calendar.css" rel="stylesheet">
<link href="{{ asset('frontend') }}/assets/css/theme-style.css" rel="stylesheet">
<link href="{{ asset('frontend') }}/assets/css/custome-fontend.css" rel="stylesheet">

<script src="{{ asset('frontend') }}/assets/js/jquery.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/lazyload.min.js"></script>
<script type="text/javascript">
    $(function() {
        $("img.lazy").lazyload({
            effect: "fadeIn"
        });
    });
</script>
<meta http-equiv="refresh" content="1000" />
