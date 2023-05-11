@extends('layouts.frontend_master')

@section('title')
{{ $category->slug }}
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
<div class="container my-4">
    <div class="row">
        <div class="col-md-12 col-lg-8 col-xl-8 col-xxl-9 category">
            @if (count($categorywisenews) > 0)
            <div class="breadcrumb-bg  details-article">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item bi bi-arrow-left"><a href="{{ route('website') }}">হোম</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
                </ol>
                <span class="edition-version"> অনলাইন ভার্সন </span>
            </div>
            <div class="cat-lead">
                @if ($categorywisenews[0]->image != null)
                <a href="{{ route('singlenews', [$category->slug, $categorywisenews[0]->slug]) }}">
                    <img class="lazy" src="{{ asset($categorywisenews[0]->image != null ? $categorywisenews[0]->image : 'noImage_front.jpg') }}" alt="{{ count($categorywisenews) > 0 ? $categorywisenews[0]->title : '' }}">
                    <span>{{ count($categorywisenews) > 0 ? $categorywisenews[0]->title : '' }}</span>
                </a>
                @else
                <h2>{{ count($categorywisenews) > 0 ? $categorywisenews[0]->title : '' }}</h2>
                @endif
                {!! Str::of(count($categorywisenews) > 0 ? $categorywisenews[0]->description : '')->words(25, ' ...') !!}
                <a class="more_link" href="{{ route('singlenews', [$category->slug, $categorywisenews[0]->slug]) }}">আরও পরুন।</a>
            </div>
            @endif
            <div class="row">
                @foreach ($categorywisenews->skip(1)->take(6) as $key => $item)
                <div class="col-md-6 mt-4">
                    <div class="cat-2nd-lead">
                        <a href="{{ route('singlenews', [$category->slug, $item->slug]) }}" class="row">
                            {{-- <a href="{{ route('singlenews', $item->slug) }}" class="row"> --}}
                            <div class="col-md-5 text">{{ $item->title }}</div>
                            <div class="col-md-7 pe-0">
                                <img src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage_front.jpg') }}" alt="{{ $item->title }}">
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                @foreach ($categorywisenews->skip(7)->take(8) as $key => $item)
                <div class="col-md-3 mt-4">
                    <a class="list-item" href="{{ route('singlenews', [$category->slug, $item->slug]) }}">
                        <img src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage_front.jpg') }}" alt="{{ $item->title }}">
                        <p>{{ $item->title }}</p>
                    </a>
                </div>
                @endforeach

                <div class="row mt-3">
                    <div class="col-md-12 text-end "><a class="btn btn-success" href="{{ route('categorywiseall', $category->slug) }}">এই বিভাগের আরও খবর
                            »</a></div>
                </div>
            </div>

        </div>
        <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-3">
            <div class="details-widget">
                <h1><a href="./online/todaynews"><span>সর্বশেষ খবর</span> <i class="bi bi-chevron-right"></i></a></h1>
                <ul class="thumb-list">
                    @foreach ($latestNews as $key => $item)
                    <li class="mb-2">
                        <a href="{{ route('singlenews', [$category->slug, $item->slug]) }}" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage_front.jpg') }}" alt="{{ $item->title }}">
                            </span>
                            <span class="col-md-8">
                                <p>{{ $item->title }}</p>
                            </span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="details-widget mt-3">
                <h1>
                    <p class="p-0 m-0"><span>সর্বাধিক পঠিত</span> <i class="bi bi-chevron-down"></i></p>
                </h1>
                <ul class="title-list mb-2">
                    @foreach ($mostRead as $item)
                    <li class="bi bi-caret-right-fill">
                        <a href="{{ route('singlenews', [$item->category->slug, $item->news->slug]) }}">{{ $item->news->title }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection