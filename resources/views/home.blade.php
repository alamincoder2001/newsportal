@extends('layouts.frontend_master')

@section('title')
    {{ $setting->company_name }}
@endsection

@section('content')
    <div class="container mainContainer my-4">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div id="carouselHomeCaptions" class="carousel slide lead-slider" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselHomeCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselHomeCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselHomeCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        @foreach ($homeSliders->take(1) as $key => $item)
                            <div class="carousel-item active">
                                <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                    <img src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}"
                                        class="d-block w-100" alt="{{ $item->title }}">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>{{ $item->title }}</h5>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        @foreach ($homeSliders->skip(1) as $key => $item)
                            <div class="carousel-item">
                                <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                    <img src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}"
                                        class="d-block w-100" alt="{{ $item->title }}">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>{{ $item->title }}</h5>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHomeCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselHomeCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="lead-2nd mt-4">
                    <h1 class="mb-0 pb-0 d-block"><a href=""><span class="blink"></span><span>ফোকাস</span> <i
                                class="bi bi-chevron-right"></i></a></h1>
                    <ul class="m-0">
                        @foreach ($focush as $key => $item)
                            <li class="bi bi-caret-right-fill">
                                <a
                                    href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">{{ $item->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                <div class="news-tab-area latest-news-top">
                    <h2 class="title"><span class="blink"></span> সর্বশেষ খবর</h2>
                    <div class="tab-content mt-3">
                        <ul>
                            @foreach ($categorywisenews->take(20) as $key => $item)
                                <li>
                                    <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}"
                                        class="row">
                                        <p class="col-md-8">
                                            <strong>{{ $item->title }}</strong>
                                            <span>
                                                <i class="bi bi-stopwatch"></i>

                                                @php
                                                    $minutes = now()->diffInMinutes($item->created_at);
                                                @endphp
                                                @if ($minutes > 60)
                                                    {{ floor(now()->diffInMinutes($item->created_at) / 60) }} ঘন্টা আগে ।
                                                @else
                                                    {{ now()->diffInMinutes($item->created_at) % 60 }} মিনিট আগে |
                                                @endif

                                                <small>{{ $item->category[0]->categoryName->name }}</small>
                                            </span>
                                        </p>
                                        <p class="col-md-4 ps-0">
                                            <img src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}"
                                                alt="{{ $item->title }}">
                                        </p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 highlights">
                <ul class="m-0">
                    @foreach ($homeTopRight as $item)
                        <li class="mb-3">
                            <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                <img class="lazy"
                                    src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}"
                                    alt="{{ $item->title }}">
                                <p>{{ $item->title }}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <!-- video -->
                <hr>
                <ul class="m-0">
                    <li class="mb-3">
                        <iframe allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"
                            style="border-radius: 5px;" width="260" height="175"
                            src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </li>
                    <li class="mb-3">
                        <iframe allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"
                            style="border-radius: 5px;" width="260" height="175"
                            src="https://www.youtube.com/embed/zAlX1V3lK5s">
                        </iframe>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- <div class="container my-3">
        <div class="col-md-12">
            <div data-position="desktop-home-after-lead-area" class="m-0 p-0">
                <div class="ads bg-light mb-2 d-flex justify-content-center">
                    <div class="ad_cl-4" data-id="4">
                        <div id='div-gpt-ad-1632991122851-0' style='min-width: 970px; min-height: 250px;'>
                            <script>
                            googletag.cmd.push(function() {
                                googletag.display('div-gpt-ad-1632991122851-0');
                            });
                        </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <section class="section_16">
        <div class="bg pb-4 mb-3">
            <div class="container">
                <a href="" class="title title_highlight">{{ 'হাইলাইটস' }}</a>
                <div class="clearfix"></div>
                <div class="row">
                    @foreach ($highlights as $key => $item)
                        <div class="col-md-3 col-lg-2 mb-4">
                            <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                <img class="w-100 lazy"
                                    src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}"
                                    alt="{{ $item->title }}">
                                <p>{{ $item->title }}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- <div class="container">
        <div class="col-md-12">
            <div data-position="desktop-home-after-highlight-2nd" class="m-0 p-0">
                <div class="ads bg-light mb-2 d-flex justify-content-center">
                    <div class="ad_cl-5" data-id="5">
                        <div id='div-gpt-ad-1631775223363-0' style='min-width: 728px; min-height: 90px;'>
                            <script>
                            googletag.cmd.push(function() {
                                googletag.display('div-gpt-ad-1631775223363-0');
                            });
                        </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container mb-3">
        <div class="row section-1 section-15">
            <div class="col-md-8 home-category-area">
                <h1><a href="/cat/জাতীয়"><span>জাতীয়</span> <i class="bi bi-chevron-right">আরও</i></a></h1>
                <div class="clearfix"></div>
                <div class="row">
                    @foreach ($jatioNews->take(1) as $item)
                        <div class="col-md-12 mb-3">
                            <div class="lead-item">
                                <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}"
                                    class="row">
                                    <div class="col-md-4 text">{{ $item->title }}
                                    </div>
                                    <div class="col-md-8 pe-0">
                                        <img class="lazy"
                                            src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}"
                                            alt="{{ $item->title }}">
                                    </div>
                                    <div class="col-md-12 description">
                                        {{-- <p>{!! Str::limit($item->description, 230) !!} --}}
                                        <p>{!! Str::of($item->description)->words(25, ' ...') !!}
                                            <span>আরও পড়ুন</span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    @foreach ($jatioNews->skip(1)->take(4) as $item)
                        <div class="col-md-3">
                            <a class="list-item"
                                href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                <img class="lazy"
                                    src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}"
                                    alt="{{ $item->title }}">
                                <p>{{ $item->title }}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="news-tab-area my-tabs">
                        <ul id="newsTab" class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="latest-news-tab" data-bs-toggle="tab"
                                    data-bs-target="#latest-news" type="button" role="tab"
                                    aria-controls="latest-news" aria-selected="true">সাম্প্রতিক</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="most-read-tab" data-bs-toggle="tab"
                                    data-bs-target="#most-read" type="button" role="tab" aria-controls="most-read"
                                    aria-selected="false">সর্বাধিক পঠিত</button>
                            </li>
                        </ul>
                        <div class="tab-content mt-3" id="myTabContent">
                            <div class="tab-pane fade" id="latest-news" role="tabpanel"
                                aria-labelledby="latest-news-tab">
                                <ul>
                                    @foreach ($jatioNews->take(12) as $item)
                                        <li class="bi bi-hand-index-thumb">
                                            <a
                                                href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                                <p class="m-0 py-0 px-2">
                                                    <strong>{{ $item->title }}</strong>
                                                </p>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane fade show active" id="most-read" role="tabpanel"
                                aria-labelledby="most-read-tab">
                                <ul>
                                    @foreach ($topJatioNews as $item)
                                        <li class="bi bi-hand-index-thumb">
                                            <a
                                                href="{{ route('singlenews', [$item->category->slug, $item->news->slug]) }}">
                                                <p class="m-0 py-0 px-2">
                                                    <strong> {{ $item->news->title }}</strong>
                                                </p>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container">
        <div class="col-md-12">
            <div data-position="desktop-home-after-national" class="m-0 p-0">
                <div class="ads bg-light mb-2 d-flex justify-content-center">
                    <div class="ad_cl-6" data-id="6">
                        <div id='div-gpt-ad-1631775365067-0' style='min-width: 970px; min-height: 90px;'>
                            <script>
                            googletag.cmd.push(function() {
                                googletag.display('div-gpt-ad-1631775365067-0');
                            });
                        </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="container">
        <div class="col-md-12">
            <div data-position="desktop-home-before-international-news" class="m-0 p-0">
                <div class="ads bg-light mb-2 d-flex justify-content-center">
                    <div class="ad_cl-9" data-id="9">
                        <div id='div-gpt-ad-1631791358837-0' style='min-width: 728px; min-height: 90px;'>
                            <script>
                            googletag.cmd.push(function() {
                                googletag.display('div-gpt-ad-1631791358837-0');
                            });
                        </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container">
        <div class="row home-category-area section-1">
            <h1><a href="/cat/আন্তর্জাতিক-খবর"><span>আন্তর্জাতিক খবর</span> <i class="bi bi-chevron-right">আরও</i></a>
            </h1>
            <div class="col-md-8">
                <div class="row">
                    @foreach ($AntorjatikNews->take(1) as $item)
                        <div class="col-md-12 mb-3">
                            <div class="lead-item">
                                <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}"
                                    class="row">
                                    <div class="col-md-5 text">{{ $item->title }}</div>
                                    <div class="col-md-7 pe-0">
                                        <img class="lazy"
                                            src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}"
                                            alt="{{ $item->title }}">
                                    </div>
                                    <div class="col-md-12 description">
                                        <p>{!! Str::of($item->description)->words(25, ' ...') !!}
                                            <span>আরও পড়ুন</span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($AntorjatikNews->skip(1)->take(4) as $item)
                        <div class="col-md-3">
                            <a class="list-item"
                                href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                <img class="lazy"
                                    src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}"
                                    alt="{{ $item->title }}">
                                <p>{{ $item->title }}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <ul class="section-1-list-iteam">
                        @foreach ($AntorjatikNews->skip(5)->take(6) as $item)
                            <li class="mb-2"><a
                                    href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}"
                                    class="row">
                                    <span class="col-md-4 pe-0">
                                        <img class="lazy"
                                            src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}"
                                            alt="{{ $item->title }}">
                                    </span>
                                    <span class="col-md-8">
                                        <p>{{ $item->title }}</p>
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="col-md-12">
            <div data-position="desktop-home-after-country" class="m-0 p-0">
            </div>
        </div>
    </div>

    {{-- <div class="container section-6">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="home-category-area row section-1">
                    <h1><a href="islam"><span>ইসলাম</span> <i class="bi bi-chevron-right">আরও</i></a></h1>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="lead-item">
                                    <a href="international-news/2023/03/20/868861" class="row">
                                        <div class="col-md-5 text">
                                            যুক্তরাষ্ট্রে আরও ১৮৬ ব্যাংক পতনের ঝুঁকিতে
                                        </div>
                                        <div class="col-md-7 pe-0">
                                            <img class="lazy"
                                                src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/thumbnails/102101_bangladesh_pratidin_svb.jpg?v=1679286286"
                                                alt="যুক্তরাষ্ট্রে আরও ১৮৬ ব্যাংক পতনের ঝুঁকিতে">
                                        </div>
                                        <div class="col-md-12 description">
                                            <p>
                                                তিনি আরো বলেন, তাই আইন প্রয়োগ করতে গিয়ে কোনো প্রতিবন্ধকতার সৃষ্টি হলে তা দূর
                                                করতে হবে। রাষ্ট্রপতি দেশের বিদ্যমান আইন কানুন যুগোপযোগী ও মানুষের জন্য
                                                কল্যাণকর করতে উদ্যোগ নেওয়ার জন্য আইন কমিশনের প্রতি আহ্বান জানান...
                                                <span>আরও পড়ুন</span>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <a class="list-item" href="international-news/2023/03/20/868858">
                                    <img class="lazy"
                                        src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/095728_bangladesh_pratidin_Raisi.jpg?v=1679286286"
                                        alt="ইরানের প্রেসিডেন্টকে সৌদি আরবে সফরের আমন্ত্রণ বাদশাহ সালমানের">
                                    <p>
                                        ইরানের প্রেসিডেন্টকে সৌদি আরবে সফরের আমন্ত্রণ বাদশাহ সালমানের
                                    </p>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a class="list-item" href="international-news/2023/03/20/868857">
                                    <img class="lazy"
                                        src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/094908_bangladesh_pratidin_77.jpg?v=1679286286"
                                        alt="এবার ক্রেডিট সুইস ব্যাংক দেউলিয়া হওয়া নিয়ে আতঙ্ক">
                                    <p>এবার ক্রেডিট সুইস ব্যাংক দেউলিয়া হওয়া নিয়ে আতঙ্ক</p>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a class="list-item" href="international-news/2023/03/20/868852">
                                    <img class="lazy"
                                        src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/053658_bangladesh_pratidin_BD-pratidin--7.jpg?v=1679286286"
                                        alt="যে কারণে চীনকে ধন্যবাদ দিলেন পুতিন">
                                    <p>যে কারণে চীনকে ধন্যবাদ দিলেন পুতিন</p>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a class="list-item" href="international-news/2023/03/20/868839">
                                    <img class="lazy"
                                        src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/005341_bangladesh_pratidin_BD-pratidin--2.jpg?v=1679286286"
                                        alt="মারিওপোল সফর, কী দেখলেন পুতিন?">
                                    <p>মারিওপোল সফর, কী দেখলেন পুতিন?</p>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <ul class="section-1-list-iteam">
                                <li class="mb-2"><a href="international-news/2023/03/19/868708" class="row">
                                        <span class="col-md-4 pe-0">
                                            <img class="lazy"
                                                src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/174458_bangladesh_pratidin_france.jpg?v=1679286286"
                                                alt="অনাস্থা ভোটের মুখে পড়তে পারেন প্রেসিডেন্ট ম্যাক্রোঁ">
                                        </span>
                                        <span class="col-md-8">
                                            <p>অনাস্থা ভোটের মুখে পড়তে পারেন প্রেসিডেন্ট ম্যাক্রোঁ</p>
                                        </span>
                                    </a></li>
                                <li class="mb-2"><a href="international-news/2023/03/19/868669" class="row">
                                        <span class="col-md-4 pe-0">
                                            <img class="lazy"
                                                src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/112547_bangladesh_pratidin_asad.jpg?v=1679286286"
                                                alt="সিরিয়ার প্রেসিডেন্টের বিরুদ্ধে জেলেনস্কির নিষেধাজ্ঞা">
                                        </span>
                                        <span class="col-md-8">
                                            <p>সিরিয়ার প্রেসিডেন্টের বিরুদ্ধে জেলেনস্কির নিষেধাজ্ঞা</p>
                                        </span>
                                    </a></li>
                                <li class="mb-2"><a href="international-news/2023/03/19/868664" class="row">
                                        <span class="col-md-4 pe-0">
                                            <img class="lazy"
                                                src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/111131_bangladesh_pratidin_pak.jpg?v=1679286286"
                                                alt="ইমরান খানের বিরুদ্ধে গ্রেফতারি পরোয়ানা স্থগিত">
                                        </span>
                                        <span class="col-md-8">
                                            <p>ইমরান খানের বিরুদ্ধে গ্রেফতারি পরোয়ানা স্থগিত</p>
                                        </span>
                                    </a></li>
                                <li class="mb-2"><a href="international-news/2023/03/19/868663" class="row">
                                        <span class="col-md-4 pe-0">
                                            <img class="lazy"
                                                src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/110735_bangladesh_pratidin_Credit_Swisse.jpg?v=1679286286"
                                                alt="বিপর্যস্ত ক্রেডিট সুইস ব্যাংক বাঁচাতে ৬ বিলিয়ন ডলার গ্যারান্টি চায় ইউবিএস">
                                        </span>
                                        <span class="col-md-8">
                                            <p>বিপর্যস্ত ক্রেডিট সুইস ব্যাংক বাঁচাতে ৬ বিলিয়ন ডলার গ্যারান্টি চায় ইউবিএস</p>
                                        </span>
                                    </a></li>
                                <li class="mb-2"><a href="international-news/2023/03/19/868661" class="row">
                                        <span class="col-md-4 pe-0">
                                            <img class="lazy"
                                                src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/110436_bangladesh_pratidin_putin.jpg?v=1679286286"
                                                alt="পুতিনের বিরুদ্ধে পরোয়ানা : বাইডেন-শলৎসের সমর্থন">
                                        </span>
                                        <span class="col-md-8">
                                            <p>পুতিনের বিরুদ্ধে পরোয়ানা : বাইডেন-শলৎসের সমর্থন</p>
                                        </span>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-position="desktop-home-islam-below" class="m-0 mt-3 p-0">
                    <div class="ads bg-light mb-2 d-flex justify-content-center"> <a href="{{ route('website') }}"
                            class="ad_cl-848" data-id="848" target="_blank">
                            <img src="https://www.bd-pratidin.com/assets/images/banner/20221129021445.jpg"
                                alt="desktop-home-islam-below" /> </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container">
        <div class="col-md-12">
        </div>
    </div>
    <div class="section-10-bg">
        <div class="container mt-3">
            <div class="row home-category-area section-10">
                <h1><a href="/cat/খেলাধুলা"><span>খেলাধুলা</span> <i class="bi bi-chevron-right">আরও</i></a></h1>
                <div class="col-md-3">
                    @foreach ($sportsNews->skip(1)->take(2) as $item)
                        <div class="col-md-12 mb-4">
                            <a class="list-item"
                                href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                <img class="lazy"
                                    src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}"
                                    alt="{{ $item->title }}">
                                <p>{{ $item->title }}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
                @foreach ($sportsNews->take(1) as $item)
                    <div class="col-md-6">
                        <div class="lead-item"><a
                                href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                <img class="lazy"
                                    src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}"
                                    alt="{{ $item->title }}">
                                <span>{{ $item->title }}</span>
                            </a></div>
                    </div>
                @endforeach
                <div class="col-md-3">
                    <div class="row">
                        <ul class="section-10-list-iteam">
                            @foreach ($sportsNews->skip(3)->take(5) as $item)
                                <li class="mb-2">
                                    <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}"
                                        class="row">
                                        <span class="col-md-4 pe-0">
                                            <img class="lazy"
                                                src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}"
                                                alt="{{ $item->title }}">
                                        </span>
                                        <span class="col-md-8">
                                            <p>{{ $item->title }}</p>
                                        </span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container mt-3">
        <div class="col-md-12">
            <div data-position="desktop-home-after-sports" class="m-0 p-0">
                <div class="ads bg-light mb-2 d-flex justify-content-center">
                    <div class="ad_cl-478" data-id="478">
                        <div id='div-gpt-ad-1651125597903-0' style='min-width: 728px; min-height: 90px;'>
                            <script>
                            googletag.cmd.push(function() {
                                googletag.display('div-gpt-ad-1651125597903-0');
                            });
                        </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container mt-3 mb-3">
        <div class="row section-13">
            <div class="col-md-4 home-category-area">
                <h2><a href="life"><span>জীবন ধারা</span> <i class="bi bi-chevron-right"></i></a></h2>
                @foreach ($jibonDhara->take(1) as $item)
                    <a class="list-item"
                        href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                        <img class="lazy"
                            src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}"
                            alt="{{ $item->title }}">
                        <p>{{ $item->title }}</p>
                    </a>
                @endforeach
                <ul class="mt-1">
                    @foreach ($jibonDhara->skip(1)->take(4) as $item)
                        <li class="bi bi-caret-right-fill">
                            <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">{{ $item->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4 home-category-area">
                <h2><a href="life"><span>বিনোদন</span> <i class="bi bi-chevron-right"></i></a></h2>
                @foreach ($binodon->take(1) as $item)
                    <a class="list-item"
                        href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                        <img class="lazy"
                            src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}"
                            alt="{{ $item->title }}">
                        <p>{{ $item->title }}</p>
                    </a>
                @endforeach
                <ul class="mt-1">
                    @foreach ($binodon->skip(1)->take(4) as $item)
                        <li class="bi bi-caret-right-fill">
                            <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">{{ $item->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4 home-category-area">
                <h2><a href="life"><span>হেলথ কর্নার</span> <i class="bi bi-chevron-right"></i></a></h2>
                @foreach ($healthCorner->take(1) as $item)
                    <a class="list-item"
                        href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                        <img class="lazy"
                            src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}"
                            alt="{{ $item->title }}">
                        <p>{{ $item->title }}</p>
                    </a>
                @endforeach
                <ul class="mt-1">
                    @foreach ($healthCorner->skip(1)->take(4) as $item)
                        <li class="bi bi-caret-right-fill">
                            <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">{{ $item->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row home-category-area section-1">
            <h1><a href="/cat/আন্তর্জাতিক-খবর"><span>শিল্প বাণিজ্য</span> <i class="bi bi-chevron-right">আরও</i></a>
            </h1>
            <div class="col-md-8">
                <div class="row">
                    @foreach ($shilpoBanijjo->take(1) as $item)
                        <div class="col-md-12 mb-3">
                            <div class="lead-item">
                                <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}"
                                    class="row">
                                    <div class="col-md-5 text">{{ $item->title }}</div>
                                    <div class="col-md-7 pe-0">
                                        <img class="lazy"
                                            src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}"
                                            alt="{{ $item->title }}">
                                    </div>
                                    <div class="col-md-12 description">
                                        <p>{!! Str::of($item->description)->words(25, ' ...') !!}
                                            <span>আরও পড়ুন</span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($shilpoBanijjo->skip(1)->take(4) as $item)
                        <div class="col-md-3">
                            <a class="list-item"
                                href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                <img class="lazy"
                                    src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}"
                                    alt="{{ $item->title }}">
                                <p>{{ $item->title }}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <ul class="section-1-list-iteam">
                        @foreach ($shilpoBanijjo->skip(5)->take(6) as $item)
                            <li class="mb-2"><a
                                    href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}"
                                    class="row">
                                    <span class="col-md-4 pe-0">
                                        <img class="lazy"
                                            src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}"
                                            alt="{{ $item->title }}">
                                    </span>
                                    <span class="col-md-8">
                                        <p>{{ $item->title }}</p>
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="section-11 section-14 mt-4">
        <div class="container mt-3">
            <div class="row home-category-area section-14">
                <h1>
                    <a href="chittagong-pratidin">
                        <span>কক্সবাজার প্রতিদিন</span>
                        <i class="bi bi-chevron-right">আরও</i>
                    </a>
                </h1>
                @foreach ($coxBazar->take(1) as $item)
                    <div class="col-md-5 col-lg-5 col-xl-5 col-xxl-6">
                        <div class="lead-item">
                            <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                <img class="lazy"
                                    src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}"
                                    alt="{{ $item->title }}">
                                <span>{{ $item->title }}</span>
                            </a>
                            <p class="text">{!! Str::of($item->description)->words(15, ' ...') !!}
                                <span>আরও পড়ুন</span>
                            </p>
                        </div>
                    </div>
                @endforeach

                <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="row">
                        <ul class="section-14-list-iteam">
                            @foreach ($coxBazar->skip(1)->take(6) as $item)
                                <li class="mb-2"><a
                                        href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}"
                                        class="row">
                                        <span class="col-md-4 pe-0">
                                            <img class="lazy"
                                                src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}"
                                                alt="{{ $item->title }}">
                                        </span>
                                        <span class="col-md-8">
                                            <p>{{ $item->title }}</p>
                                        </span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4 col-xxl-3">
                    <ul class="m-0">
                        @foreach ($coxBazar->skip(7)->take(2) as $item)
                            <li class="mb-3">
                                <a
                                    href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                    <img class="lazy"
                                        src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}"
                                        alt="{{ $item->title }}">
                                    <p>{{ $item->title }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container mt-3">
        <div class="row section-13">
            <div class="col-md-4 home-category-area">
                <h2><a href="campus-online"><span>ক্যাম্পাস</span> <i class="bi bi-chevron-right"></i></a></h2>
                <a class="list-item" href="campus-online/2023/03/19/868721">
                    <img class="lazy"
                        src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/thumbnails/183756_bangladesh_pratidin_du.jpg?v=1679286286"
                        alt="ঢাবির রেজিস্টার্ড গ্র্যাজুয়েট নির্বাচন: ২৫ পদেই আওয়ামী পন্থীদের জয়">
                    <p>ঢাবির রেজিস্টার্ড গ্র্যাজুয়েট নির্বাচন: ২৫ পদেই আওয়ামী পন্থীদের জয়</p>
                </a>
                <ul class="mt-1">
                    <li class="bi bi-caret-right-fill"><a href="campus-online/2023/03/19/868719">চবি
                            শিক্ষক-শিক্ষার্থীদের উপর হামলার প্রতিবাদে শিক্ষকদের মানববন্ধন </a></li>
                    <li class="bi bi-caret-right-fill"><a href="campus-online/2023/03/19/868704">চবি শিক্ষক সমিতির
                            উদ্যোগে তিন দিনব্যাপী বইমেলা</a></li>
                    <li class="bi bi-caret-right-fill"><a href="campus-online/2023/03/19/868682">নিজস্ব পদ্ধতিতে ভর্তি
                            পরীক্ষা চায় ইবি শিক্ষার্থীরা</a></li>
                    <li class="bi bi-caret-right-fill"><a href="campus-online/2023/03/19/868633">রাবিতে ছাত্রলীগের
                            কর্মসূচিতে না যাওয়ায় শিক্ষার্থীকে মারধর, তদন্ত কমিটি গঠন
                        </a></li>
                </ul>
            </div>
            <div class="col-md-4 home-category-area">
                <h2><a href="city-roundup"><span>নগর পরিক্রমা</span> <i class="bi bi-chevron-right"></i></a></h2>
                <a class="list-item" href="city-roundup/2023/03/18/868423">
                    <img class="lazy"
                        src="https://www.bd-pratidin.com/assets/news_images/2023/03/18/thumbnails/160632_bangladesh_pratidin_dengu.jpg?v=1679286286"
                        alt="আরও ৪ ডেঙ্গুরোগী হাসপাতালে ভর্তি">
                    <p>আরও ৪ ডেঙ্গুরোগী হাসপাতালে ভর্তি</p>
                </a>
                <ul class="mt-1">
                    <li class="bi bi-caret-right-fill"><a href="city-roundup/2023/03/16/867909">আরও তিন ডেঙ্গুরোগী
                            হাসপাতালে ভর্তি</a></li>
                    <li class="bi bi-caret-right-fill"><a href="city-roundup/2023/03/15/867620">আরও ৫ জন ডেঙ্গুরোগী
                            হাসপাতালে ভর্তি</a></li>
                    <li class="bi bi-caret-right-fill"><a href="city-roundup/2023/03/14/867367">আরও দুই ডেঙ্গুরোগী
                            হাসপাতালে ভর্তি</a></li>
                    <li class="bi bi-caret-right-fill"><a href="city-roundup/2023/03/14/867358">সিটি কর্পোরেশন ও
                            পৌরসভার জন্য এসডিজি লোকালাইজেশন বিষয়ক কর্মশালা</a></li>
                </ul>
            </div>
            <div class="col-md-4 home-category-area">
                <h2><a href="corporate-corner"><span>কর্পোরেট কর্নার</span> <i class="bi bi-chevron-right"></i></a></h2>
                <a class="list-item" href="corporate-corner/2023/03/18/868484">
                    <img class="lazy"
                        src="https://www.bd-pratidin.com/assets/news_images/2023/03/18/thumbnails/200031_bangladesh_pratidin_ACC-brand-launching-picture.jpg?v=1679286286"
                        alt="ইউরোপীয় ব্র্যান্ড এসিসির বাংলাদেশে যাত্রা শুরু">
                    <p>ইউরোপীয় ব্র্যান্ড এসিসির বাংলাদেশে যাত্রা শুরু
                    </p>
                </a>
                <ul class="mt-1">
                    <li class="bi bi-caret-right-fill"><a href="corporate-corner/2023/03/16/867896"> শুরু হতে যাচ্ছে
                            ‘পোলার আইসক্রিম মনের সুখে আঁকি’ চিত্রাঙ্কন প্রতিযোগিতা ২০২৩ </a></li>
                    <li class="bi bi-caret-right-fill"><a href="corporate-corner/2023/03/15/867558">
                            ওয়ালটন ফ্রিজ কিনে ১০১টি পণ্য ফ্রি পেলেন বাগেরহাটের নজরুল</a></li>
                    <li class="bi bi-caret-right-fill"><a href="corporate-corner/2023/03/14/867278">রিয়েলমি ফ্যান ফেস্ট
                            ২০২২-এর বিজয়ীর নাম প্রকাশ</a></li>
                    <li class="bi bi-caret-right-fill"><a href="corporate-corner/2023/03/13/866922">ডাচ্-বাংলা ব্যাংকের
                            মহাখালী শাখার স্থানান্তর </a></li>
                </ul>
            </div>
        </div>
    </div> --}}
@endsection
