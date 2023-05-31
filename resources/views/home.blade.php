@extends('layouts.frontend_master')

@section('title')
{{ $setting->company_name }}
@endsection

@section('content')
@if ($ad1->status == 'active')
<div class="container my-3">
    <div class="col-md-12">
        <div data-position="desktop-home-after-lead-area" class="m-0 p-0">
            <div class="ads bg-light mb-2 d-flex justify-content-center" style="position: relative;">
                <span onclick="hideAdd(event)" style="position: absolute; top: 0; right: 0; background: red; padding: 5px; color: white; cursor: pointer;">X</span>
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
                <h1 class="mb-0 pb-0 d-block"><a href=""><span class="blink"></span><span>আজকের খবর</span> <i class="bi bi-chevron-right"></i></a></h1>
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
                    <iframe class="video_one" width="270" height="182" src="{{$setting->video_link1}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe class="video_two" width="270" height="182" src="{{$setting->video_link2}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                        {{ App\Models\Setting::banglaNumber(floor(now()->diffInMinutes($item->created_at) / 60)) }} ঘন্টা আগে ।
                                        @else
                                        {{ App\Models\Setting::banglaNumber(now()->diffInMinutes($item->created_at) % 60) }} মিনিট আগে |
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
            @if(!empty($epaper))
            <ul class="m-0">
                <li style="margin-bottom:5px;text-align:center;background: linear-gradient(to bottom, #f2f2f2 0%, #f2f2f2 50%, #eeeeee 51%, #eeeeee 100%);border-bottom: 1px solid #ed1c24;color: #ec1c24;font-size: 18px;padding: 8px 15px 8px 32px;border-radius: 5px;position: relative;">E-Paper</li>
                <li class="mb-3">
                    <a href="{{ $epaper->link }}" target="_blank">
                        <img src="{{ asset($epaper->image != null ? $epaper->image : '600x600.jpg') }}" alt="{{ $ad3->title }}">
                    </a>
                </li>
            </ul>
            <hr>
            @endif
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
<div class="container mt-4">
    <div class="col-md-12">
        <div data-position="desktop-home-after-lead-area" class="m-0 p-0">
            <div class="ads bg-light mb-2 d-flex justify-content-center" style="position: relative;">
                <span onclick="hideAdd(event)" style="position: absolute; top: 0; right: 0; background: red; padding: 5px; color: white; cursor: pointer;">X</span>
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

<!-- হাইলাইটস -->
<section class="bg-section mt-3 News">
    <a href="/cat/হাইলাইটস" class="section-bg-header"><span>হাইলাইটস</span></a>
    <div class="bg pb-3">
        <div class="container mt-3">
            <div class="row">
                @foreach ($highlights->take(12) as $item)
                <div class="col-md-2 mb-4 col-10 offset-1 offset-md-0">
                    <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}" title="{{$item->title}}">
                        <div class="card NewsHover" style="height: 250px;border-radius:0;border:0;">
                            <img class="rounded-start" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="Card image">
                            <div class="card-body">
                                <p class="card-text text ellipsis">{{ Str::words($item->title, '10') }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- কক্সবাজার খবর -->
<section class="bg-section mt-3 News">
    <a href="/cat/কক্সবাজার-জেলা" class="section-bg-header"><span>কক্সবাজার প্রতিদিন</span></a>
    <div class="bg pb-3">
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-7 mb-2 mb-md-0">
                    @foreach ($coxBazar->take(1) as $item)
                    <div class="card" style="border-radius: 0;">
                        <div class="card-body">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                        <h3 class="card-title m-0">{{$item->title}}</h3>
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                        <img class="card-img-top" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="Card image">
                                    </a>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <p class="card-text text ellipsis">
                                        {!! Str::words($item->description, '25') !!}
                                    </p>
                                    @php
                                    $minutes = now()->diffInMinutes($item->created_at);
                                    @endphp
                                    <p class="card-text">
                                        <small class="text-muted">
                                            @if ($minutes > 60)
                                            {{ App\Models\Setting::banglaNumber(floor(now()->diffInMinutes($item->created_at) / 60)) }} ঘন্টা আগে ।
                                            @else
                                            {{ App\Models\Setting::banglaNumber(now()->diffInMinutes($item->created_at) % 60) }} মিনিট আগে |
                                            @endif
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row mt-3">
                        @foreach ($coxBazar->skip(1)->take(3) as $item)
                        <div class="col-md-4 col-10 offset-1 offset-md-0 mb-2 mb-md-0">
                            <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}" title="{{$item->title}}">
                                <div class="card NewsHover" style="height: 250px;">
                                    <img class="rounded-start" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="Card image">
                                    <div class="card-body">
                                        <p class="card-text">{{$item->title}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row g-0">
                        @foreach ($coxBazar->skip(4)->take(7) as $item)
                        <div class="col-md-12">
                            <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                <div class="card mb-2" title="{{$item->title}}" style="background:#EEEEEE;">
                                    <div class="row g-0">
                                        <div class="col-md-4 col-10 offset-1 offset-md-0">
                                            <img class="img-fluid rounded-start h-100" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="Card image">
                                        </div>
                                        <div class="col-md-8 col-10 offset-1 offset-md-0">
                                            <div class="card-body">
                                                <p class="card-title m-0 text ellipsis">{!! (nl2br(e(Str::words($item->title, '4')))) !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-2">
                    <ul class="m-0 p-0" style="position: relative;">
                        <span onclick="hideAdd(event)" style="position: absolute; top: 0; right: 0; background: red; padding: 5px; color: white; cursor: pointer;">X</span>
                        @if ($ad4->status == 'active')
                        <a href="{{ $ad4->url }}" target="_blank">
                            <img src="{{ asset($ad4->image != null ? $ad4->image : '600x1200.jpg') }}" alt="{{ $ad4->title }}" style="width: 100%;height:450px;">
                        </a>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <a href="/cat/কক্সবাজার-জেলা" class="section-bg-footer">
        আরও আছে...
    </a>
</section>

<!-- জাতীয় খবর -->
<section class="bg-section mt-3 News">
    <a href="/cat/জাতীয়" class="section-bg-header"><span>জাতীয়</span></a>
    <div class="bg pb-3">
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-8 mb-2 mb-md-0">
                    @foreach ($jatioNews->take(1) as $item)
                    <div class="card mb-3" style="border-radius: 0;">
                        <div class="card-body">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                        <h3 class="card-title m-0">{{$item->title}}</h3>
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                        <img class="card-img-top" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="Card image">
                                    </a>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <p class="card-text text ellipsis">
                                        {!! Str::words($item->description, '25') !!}
                                    </p>
                                    @php
                                    $minutes = now()->diffInMinutes($item->created_at);
                                    @endphp
                                    <p class="card-text">
                                        <small class="text-muted">
                                            @if ($minutes > 60)
                                            {{ App\Models\Setting::banglaNumber(floor(now()->diffInMinutes($item->created_at) / 60)) }} ঘন্টা আগে ।
                                            @else
                                            {{ App\Models\Setting::banglaNumber(now()->diffInMinutes($item->created_at) % 60) }} মিনিট আগে |
                                            @endif
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row">
                        @foreach ($jatioNews->skip(1)->take(4) as $item)
                        <div class="col-md-3 col-10 offset-1 offset-md-0 mb-2 mb-md-0">
                            <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}" title="{{$item->title}}">
                                <div class="card NewsHover" style="height: 250px;">
                                    <img class="rounded-start" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="Card image">
                                    <div class="card-body">
                                        <p class="card-text">{{$item->title}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row g-0">
                        @foreach ($jatioNews->skip(5)->take(7) as $item)
                        <div class="col-md-12">
                            <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                <div class="card mb-2" title="{{$item->title}}" style="background:#EEEEEE;">
                                    <div class="row g-0">
                                        <div class="col-md-4 col-10 offset-1 offset-md-0">
                                            <img class="img-fluid rounded-start h-100" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="Card image">
                                        </div>
                                        <div class="col-md-8 col-10 offset-1 offset-md-0">
                                            <div class="card-body">
                                                <p class="card-title m-0 text ellipsis">{!! (nl2br(e(Str::words($item->title, '4')))) !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="/cat/জাতীয়" class="section-bg-footer">
        আরও আছে...
    </a>
</section>

@if ($ad1->status == 'active')
<div class="container mt-3">
    <div class="col-md-12">
        <div data-position="desktop-home-after-lead-area" class="m-0 p-0">
            <div class="ads bg-light mb-2 d-flex justify-content-center" style="position: relative;">
                <span onclick="hideAdd(event)" style="position: absolute; top: 0; right: 0; background: red; padding: 5px; color: white; cursor: pointer;">X</span>
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

<!-- আন্তর্জাতিক খবর -->
<section class="bg-section mt-3 News">
    <a href="/cat/আন্তর্জাতিক-খবর" class="section-bg-header"><span>আন্তর্জাতিক খবর</span></a>
    <div class="bg pb-3">
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-8 mb-2 mb-md-0">
                    @foreach ($AntorjatikNews->take(1) as $item)
                    <div class="card mb-3" style="border-radius: 0;">
                        <div class="card-body">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                        <h3 class="card-title m-0">{{$item->title}}</h3>
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                        <img class="card-img-top" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="Card image">
                                    </a>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <p class="card-text text ellipsis">
                                        {!! Str::words($item->description, '25') !!}
                                    </p>
                                    @php
                                    $minutes = now()->diffInMinutes($item->created_at);
                                    @endphp
                                    <p class="card-text">
                                        <small class="text-muted">
                                            @if ($minutes > 60)
                                            {{ App\Models\Setting::banglaNumber(floor(now()->diffInMinutes($item->created_at) / 60)) }} ঘন্টা আগে ।
                                            @else
                                            {{ App\Models\Setting::banglaNumber(now()->diffInMinutes($item->created_at) % 60) }} মিনিট আগে |
                                            @endif
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row">
                        @foreach ($AntorjatikNews->skip(1)->take(4) as $item)
                        <div class="col-md-3 col-10 offset-1 offset-md-0 mb-2 mb-md-0">
                            <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}" title="{{$item->title}}">
                                <div class="card NewsHover" style="height: 250px;">
                                    <img class="rounded-start" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="Card image">
                                    <div class="card-body">
                                        <p class="card-text">{{$item->title}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row g-0">
                        @foreach ($AntorjatikNews->skip(5)->take(7) as $item)
                        <div class="col-md-12">
                            <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                <div class="card mb-2" title="{{$item->title}}" style="background:#EEEEEE;">
                                    <div class="row g-0">
                                        <div class="col-md-4 col-10 offset-1 offset-md-0">
                                            <img class="img-fluid rounded-start h-100" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="Card image">
                                        </div>
                                        <div class="col-md-8 col-10 offset-1 offset-md-0">
                                            <div class="card-body">
                                                <p class="card-title m-0 text ellipsis">{!! (nl2br(e(Str::words($item->title, '4')))) !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="/cat/আন্তর্জাতিক-খবর" class="section-bg-footer">
        আরও আছে...
    </a>
</section>

<!-- খেলাধুলা -->
<section class="bg-section mt-3 News">
    <a href="/cat/খেলাধুলা" class="section-bg-header"><span>খেলাধুলা</span></a>
    <div class="bg pb-3">
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-8 mb-2 mb-md-0">
                    @foreach ($sportsNews->take(1) as $item)
                    <div class="card mb-3" style="border-radius: 0;">
                        <div class="card-body">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                        <h3 class="card-title m-0">{{$item->title}}</h3>
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                        <img class="card-img-top" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="Card image">
                                    </a>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <p class="card-text text ellipsis">
                                        {!! Str::words($item->description, '25') !!}
                                    </p>
                                    @php
                                    $minutes = now()->diffInMinutes($item->created_at);
                                    @endphp
                                    <p class="card-text">
                                        <small class="text-muted">
                                            @if ($minutes > 60)
                                            {{ App\Models\Setting::banglaNumber(floor(now()->diffInMinutes($item->created_at) / 60)) }} ঘন্টা আগে ।
                                            @else
                                            {{ App\Models\Setting::banglaNumber(now()->diffInMinutes($item->created_at) % 60) }} মিনিট আগে |
                                            @endif
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row">
                        @foreach ($sportsNews->skip(1)->take(4) as $item)
                        <div class="col-md-3 col-10 offset-1 offset-md-0 mb-2 mb-md-0">
                            <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}" title="{{$item->title}}">
                                <div class="card NewsHover" style="height: 250px;">
                                    <img class="rounded-start" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="Card image">
                                    <div class="card-body">
                                        <p class="card-text">{{$item->title}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row g-0">
                        @foreach ($sportsNews->skip(5)->take(7) as $item)
                        <div class="col-md-12">
                            <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                <div class="card mb-2" title="{{$item->title}}" style="background:#EEEEEE;">
                                    <div class="row g-0">
                                        <div class="col-md-4 col-10 offset-1 offset-md-0">
                                            <img class="img-fluid rounded-start h-100" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="Card image">
                                        </div>
                                        <div class="col-md-8 col-10 offset-1 offset-md-0">
                                            <div class="card-body">
                                                <p class="card-title m-0 text ellipsis">{!! (nl2br(e(Str::words($item->title, '4')))) !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="/cat/খেলাধুলা" class="section-bg-footer">
        আরও আছে...
    </a>
</section>


<!-- এডভার্টাইজমেন্ট -->
@if ($ad1->status == 'active')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-6" style="position: relative;">
            <span onclick="hideAdd(event)" style="position: absolute; top: 0; right: 12px; background: red; padding: 5px; color: white; cursor: pointer;">X</span>
            <a href="{{ $ad1->url }}" target="_blank">
                <img src="{{ asset($ad1->image != null ? $ad1->image : '1200x200.jpg') }}" alt="{{ $ad1->title }}" style="width: 100%;">
            </a>
        </div>
        <div class="col-md-6" style="position: relative;">
            <span onclick="hideAdd(event)" style="position: absolute; top: 0; right: 12px; background: red; padding: 5px; color: white; cursor: pointer;">X</span>
            <a href="{{ $ad1->url }}" target="_blank">
                <img src="{{ asset($ad1->image != null ? $ad1->image : '1200x200.jpg') }}" alt="{{ $ad1->title }}" style="width: 100%;">
            </a>
        </div>
    </div>
</div>
@endif


<div class="container mt-4 mb-3">
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

<!-- শিল্প বাণিজ্য -->
<section class="bg-section mt-3 News">
    <a href="/cat/শিল্প-বাণিজ্য" class="section-bg-header"><span>শিল্প বাণিজ্য</span></a>
    <div class="bg pb-3">
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-8 mb-2 mb-md-0">
                    @foreach ($shilpoBanijjo->take(1) as $item)
                    <div class="card mb-3" style="border-radius: 0;">
                        <div class="card-body">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                        <h3 class="card-title m-0">{{$item->title}}</h3>
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                        <img class="card-img-top" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="Card image">
                                    </a>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <p class="card-text text ellipsis">
                                        {!! Str::words($item->description, '25') !!}
                                    </p>
                                    @php
                                    $minutes = now()->diffInMinutes($item->created_at);
                                    @endphp
                                    <p class="card-text">
                                        <small class="text-muted">
                                            @if ($minutes > 60)
                                            {{ App\Models\Setting::banglaNumber(floor(now()->diffInMinutes($item->created_at) / 60)) }} ঘন্টা আগে ।
                                            @else
                                            {{ App\Models\Setting::banglaNumber(now()->diffInMinutes($item->created_at) % 60) }} মিনিট আগে |
                                            @endif
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row">
                        @foreach ($shilpoBanijjo->skip(1)->take(4) as $item)
                        <div class="col-md-3 col-10 offset-1 offset-md-0 mb-2 mb-md-0">
                            <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}" title="{{$item->title}}">
                                <div class="card NewsHover" style="height: 250px;">
                                    <img class="rounded-start" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="Card image">
                                    <div class="card-body">
                                        <p class="card-text">{{$item->title}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row g-0">
                        @foreach ($shilpoBanijjo->skip(5)->take(7) as $item)
                        <div class="col-md-12">
                            <a href="{{ route('singlenews', [$item->category[0]->categoryName->slug, $item->slug]) }}">
                                <div class="card mb-2" title="{{$item->title}}" style="background:#EEEEEE;">
                                    <div class="row g-0">
                                        <div class="col-md-4 col-10 offset-1 offset-md-0">
                                            <img class="img-fluid rounded-start h-100" src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage.jpg') }}" alt="Card image">
                                        </div>
                                        <div class="col-md-8 col-10 offset-1 offset-md-0">
                                            <div class="card-body">
                                                <p class="card-title m-0 text ellipsis">{!! (nl2br(e(Str::words($item->title, '4')))) !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="/cat/শিল্প-বাণিজ্য" class="section-bg-footer">
        আরও আছে...
    </a>
</section>
@endsection