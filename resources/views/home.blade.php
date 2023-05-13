@extends('layouts.frontend_master')

@section('title')
{{ $setting->company_name }}
@endsection

@section('content')
@if ($ad1->status == 'active')
<div class="container my-3">
    <div class="col-md-12">
        <div data-position="desktop-home-after-lead-area" class="m-0 p-0">
            <div class="ads bg-light mb-2 d-flex justify-content-center">
                <div class="ad_cl-4" data-id="4">
                    <a href="{{ $ad1->url }}" target="_blank">
                        <img src="{{ asset($ad1->image != null ? $ad1->image : '1200x200.jpg') }}" alt="{{ $ad1->title }}">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<div class="container mainContainer my-4">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div id="carouselHomeCaptions" class="carousel slide lead-slider" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselHomeCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselHomeCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselHomeCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    @foreach ($homeSliders->take(1) as $key => $item)
                    <div class="carousel-item active">
                        <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                            <img src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" class="d-block w-100" alt="{{ $item->title }}">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{ $item->title }}</h5>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    @foreach ($homeSliders->skip(1) as $key => $item)
                    <div class="carousel-item">
                        <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                            <img src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" class="d-block w-100" alt="{{ $item->title }}">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{ $item->title }}</h5>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselHomeCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselHomeCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="lead-2nd mt-4">
                <h1 class="mb-0 pb-0 d-block"><a href=""><span class="blink"></span><span>ফোকাস</span> <i class="bi bi-chevron-right"></i></a></h1>
                <ul class="m-0">
                    @foreach ($focush as $key => $item)
                    <li class="bi bi-caret-right-fill">
                        <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">{{ $item->title }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <ul style="list-style: none;padding:0;margin-top:7px;">
                <li>
                    <iframe width="270" height="182" src="https://www.youtube.com/embed/HJtJXMKpl2g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="270" height="182" src="https://www.youtube.com/embed/HJtJXMKpl2g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </li>
            </ul>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3">
            <div class="news-tab-area latest-news-top">
                <h2 class="title"><span class="blink"></span> সর্বশেষ খবর</h2>
                <div class="tab-content mt-3">
                    <ul>
                        @foreach ($categorywisenews->take(20) as $key => $item)
                        <li>
                            <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}" class="row">
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
                                    <img src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="{{ $item->title }}">
                                </p>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 highlights">
            <!-- Epaper section -->
            <ul class="m-0">
                <li style="background: linear-gradient(to bottom, #f2f2f2 0%, #f2f2f2 50%, #eeeeee 51%, #eeeeee 100%);border-bottom: 1px solid #ed1c24;color: #ec1c24;font-size: 18px;padding: 8px 15px 8px 32px;border-radius: 5px;position: relative;">E-Paper</li>
                <li class="mb-3">
                    <a href="{{ $epaper->link }}" target="_blank">
                        <img src="{{ asset($epaper->image != null ? $epaper->image : '600x600.jpg') }}" alt="{{ $ad3->title }}">
                    </a>
                </li>
            </ul>
            <hr>
            <ul class="m-0">
                @foreach ($homeTopRight as $item)
                <li class="mb-3">
                    <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                        <img class="lazy" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="{{ $item->title }}">
                        <p>{{ $item->title }}</p>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@if ($ad2->status == 'active')
<div class="container my-3">
    <div class="col-md-12">
        <div data-position="desktop-home-after-lead-area" class="m-0 p-0">
            <div class="ads bg-light mb-2 d-flex justify-content-center">
                <div class="ad_cl-4" data-id="4">
                    <a href="{{ $ad2->url }}" target="_blank">
                        <img src="{{ asset($ad2->image != null ? $ad2->image : '1200x300.jpg') }}" alt="{{ $ad2->title }}">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

<section class="section_16">
    <div class="bg pb-4 mb-3">
        <div class="container">
            <a href="" class="title title_highlight">{{ 'হাইলাইটস' }}</a>
            <div class="clearfix"></div>
            <div class="row">
                @foreach ($highlights as $key => $item)
                <div class="col-md-3 col-lg-2 mb-4">
                    <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                        <img class="w-100 lazy" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="{{ $item->title }}">
                        <p>{{ $item->title }}</p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

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
                        <img class="lazy" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="{{ $item->title }}">
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
                        <li class="mb-2"><a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}" class="row">
                                <span class="col-md-4 pe-0">
                                    <img class="lazy" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="{{ $item->title }}">
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
                    @if ($ad4->status == 'active')
                    <a href="{{ $ad4->url }}" target="_blank">
                        <img src="{{ asset($ad4->image != null ? $ad4->image : '600x1200.jpg') }}" alt="{{ $ad4->title }}" style="width: 100%;">
                    </a>
                    @endif
                </ul>

            </div>
        </div>
    </div>
</div>

@if ($ad1->status == 'active')
<div class="container my-3">
    <div class="col-md-12">
        <div data-position="desktop-home-after-lead-area" class="m-0 p-0">
            <div class="ads bg-light mb-2 d-flex justify-content-center">
                <div class="ad_cl-4" data-id="4">
                    <a href="{{ $ad1->url }}" target="_blank">
                        <img src="{{ asset($ad1->image != null ? $ad1->image : '1200x200.jpg') }}" alt="{{ $ad1->title }}">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

<div class="container mb-3">
    <div class="row section-1 section-15">
        <div class="col-md-8 home-category-area">
            <h1><a href="/cat/জাতীয়"><span>জাতীয়</span> <i class="bi bi-chevron-right">আরও</i></a></h1>
            <div class="clearfix"></div>
            <div class="row">
                @foreach ($jatioNews->take(1) as $item)
                <div class="col-md-12 mb-3">
                    <div class="lead-item">
                        <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}" class="row">
                            <div class="col-md-4 text">{{ $item->title }}
                            </div>
                            @if ($item->thumbnail != null)
                            <div class="col-md-8 pe-0">
                                <img class="lazy" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="{{ $item->title }}">
                            </div>
                            @endif
                            <div class="col-md-12 description">
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
                    <a class="list-item" href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                        <img class="lazy" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="{{ $item->title }}">
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
                            <button class="nav-link" id="latest-news-tab" data-bs-toggle="tab" data-bs-target="#latest-news" type="button" role="tab" aria-controls="latest-news" aria-selected="true">সাম্প্রতিক</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="most-read-tab" data-bs-toggle="tab" data-bs-target="#most-read" type="button" role="tab" aria-controls="most-read" aria-selected="false">সর্বাধিক পঠিত</button>
                        </li>
                    </ul>
                    <div class="tab-content mt-3" id="myTabContent">
                        <div class="tab-pane fade" id="latest-news" role="tabpanel" aria-labelledby="latest-news-tab">
                            <ul>
                                @foreach ($jatioNews->take(12) as $item)
                                <li class="bi bi-hand-index-thumb">
                                    <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                        <p class="m-0 py-0 px-2">
                                            <strong>{{ $item->title }}</strong>
                                        </p>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-pane fade show active" id="most-read" role="tabpanel" aria-labelledby="most-read-tab">
                            <ul>
                                @foreach ($topJatioNews as $item)
                                <li class="bi bi-hand-index-thumb">
                                    <a href="{{ route('singlenews', [$item->category->slug, $item->news->slug]) }}">
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

@if ($ad1->status == 'active')
<div class="container my-3">
    <div class="row">
        <div class="col-md-6">
            <a href="{{ $ad1->url }}" target="_blank">
                <img src="{{ asset($ad1->image != null ? $ad1->image : '1200x200.jpg') }}" alt="{{ $ad1->title }}" style="width: 100%;">
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ $ad1->url }}" target="_blank">
                <img src="{{ asset($ad1->image != null ? $ad1->image : '1200x200.jpg') }}" alt="{{ $ad1->title }}" style="width: 100%;">
            </a>
        </div>
    </div>
</div>
@endif

<div class="container">
    <div class="row home-category-area section-1">
        <h1><a href="/cat/আন্তর্জাতিক-খবর"><span>আন্তর্জাতিক খবর</span> <i class="bi bi-chevron-right">আরও</i></a>
        </h1>
        <div class="col-md-8">
            <div class="row">
                @foreach ($AntorjatikNews->take(1) as $item)
                <div class="col-md-12 mb-3">
                    <div class="lead-item">
                        <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}" class="row">
                            <div class="col-md-5 text">{{ $item->title }}</div>
                            @if ($item->thumbnail != null)
                            <div class="col-md-7 pe-0">
                                <img class="lazy" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="{{ $item->title }}">
                            </div>
                            @endif
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
                    <a class="list-item" href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                        <img class="lazy" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="{{ $item->title }}">
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
                    <li class="mb-2"><a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}" class="row">
                            <span class="col-md-4 pe-0">
                                <img class="lazy" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="{{ $item->title }}">
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
                    <a class="list-item" href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                        <img class="lazy" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="{{ $item->title }}">
                        <p>{{ $item->title }}</p>
                    </a>
                </div>
                @endforeach
            </div>
            @foreach ($sportsNews->take(1) as $item)
            <div class="col-md-6">
                <div class="lead-item"><a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                        <img class="lazy" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="{{ $item->title }}">
                        <span>{{ $item->title }}</span>
                    </a></div>
            </div>
            @endforeach
            <div class="col-md-3">
                <div class="row">
                    <ul class="section-10-list-iteam">
                        @foreach ($sportsNews->skip(3)->take(5) as $item)
                        <li class="mb-2">
                            <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}" class="row">
                                <span class="col-md-4 pe-0">
                                    <img class="lazy" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="{{ $item->title }}">
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

<div class="container mt-3 mb-3">
    <div class="row section-13">
        <div class="col-md-4 home-category-area">
            <h2><a href="life"><span>জীবন ধারা</span> <i class="bi bi-chevron-right"></i></a></h2>
            @foreach ($jibonDhara->take(1) as $item)
            <a class="list-item" href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                <img class="lazy" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="{{ $item->title }}">
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
            <a class="list-item" href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                <img class="lazy" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="{{ $item->title }}">
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
            <a class="list-item" href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                <img class="lazy" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="{{ $item->title }}">
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
                        <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}" class="row">
                            <div class="col-md-5 text">{{ $item->title }}</div>
                            @if ($item->thumbnail != null)
                            <div class="col-md-7 pe-0">
                                <img class="lazy" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="{{ $item->title }}">
                            </div>
                            @endif
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
                    <a class="list-item" href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                        <img class="lazy" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="{{ $item->title }}">
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
                    <li class="mb-2"><a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}" class="row">
                            <span class="col-md-4 pe-0">
                                <img class="lazy" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="{{ $item->title }}">
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
@endsection