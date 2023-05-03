@extends('layouts.frontend_master')
@section('title')
    {{ $news->title }}
@endsection

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12 col-lg-8 col-xl-8 col-xxl-9 details-article">
                <div class="details-article-bg">
                    <div class="breadcrumb-bg">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item bi bi-arrow-left"><a href="{{ route('website') }}">হোম</a></li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('categorywise', $category->slug) }}">{{ $category->name }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $news->title }}</li>
                        </ol>
                        <span class="edition-version">অনলাইন ভার্সন</span>
                    </div>
                    <div class="area-curve">
                        <div class="row p-3">
                            <div class="col-md-4 col-lg-3 col-xl-4 col-xxl-5 news-info mb-2">
                                <span><i class="bi bi-stopwatch"></i> ২০ মার্চ, ২০২৩ ১৩:১৮
                            </div>
                            <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 mb-2 pe-0">
                                {{-- <ul class="top-share-area mt-2">
                                    <li class="ps-0 ms-0">
                                        <div id="fb-root"></div>
                                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v11.0"
                                            nonce="hkURxhMb"></script>
                                        <div class="fb-share-button"
                                            data-href="https://www.bd-pratidin.com/entertainment/2023/03/20/868881"
                                            data-layout="button_count" data-size="large"><a target="_blank"
                                                href="https://www.facebook.com/sharer/sharer.php?u=https://www.bd-pratidin.com/entertainment/2023/03/20/868881&amp;src=sdkpreparse"
                                                class="fb-xfbml-parse-ignore">Share</a></div>
                                    </li>
                                    <li class="pe-1">
                                        <div id="fb-root"></div>
                                        <script async defer crossorigin="anonymous"
                                            src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=1163541667026157&autoLogAppEvents=1"
                                            nonce="0ZG418Gg"></script>
                                        <div class="fb-like"
                                            data-href="https://www.bd-pratidin.com/entertainment/2023/03/20/868881"
                                            data-width="" data-layout="button" data-action="like" data-size="large"
                                            data-share="false"></div>
                                    </li>
                                    <li><a class="bg" onclick="printPage(); return false;" href="#"><i
                                                class="bi bi-printer"></i> প্রিন্ট</a></li>
                                    <li>
                                        <div class="alert alert-success alert-dismissible show" role="alert">
                                            <strong>Copied</strong>
                                        </div>
                                        <div class="copytxthidden"><input type="text"
                                                value="https://www.bd-pratidin.com/entertainment/2023/03/20/868881"
                                                id="newslink"></div>
                                        <a class="bg" href="#" id="newsLinkCopy"><i class="bi bi-link-45deg"></i>
                                            কপি লিঙ্ক</a>
                                    </li>
                                    <li class="google_news"><a
                                            href="https://news.google.com/publications/CAAqBwgKMODNpQsws9i9Aw?hl=en-US&gl=US&ceid=US:en"
                                            class="bg" target="_blank"><img
                                                src="https://www.bd-pratidin.com/assets/newDesktop/img/google_news.png"></a>
                                    </li>
                                </ul> --}}
                            </div>
                        </div>
                        <h1 class="ps-3 pe-1">{{ $news->title }}</h1>
                        <div class="news-info ps-3 my-3">
                            <h2><i class="bi bi-pencil-square"></i> অনলাইন ডেস্ক</h2>
                        </div>
                        @if ($news->image != null)
                            <div class="news-img">
                                <img src="{{ asset($news->image != null ? $news->image : '') }}" alt="{{ $news->title }}">
                                <div class="caption">
                                    <p><span>{{ $news->title }}</span></p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="sub-content">
                    <div class="description">
                        @if ($ad3->status == 'active')
                            <a href="{{ $ad3->url }}" target="_blank">
                                <img class="img_ad img-fluid img-thumbnail"
                                    src="{{ asset($ad3->image != null ? $ad3->image : '600x600.jpg') }}"
                                    alt="{{ $ad3->title }}">
                            </a>
                        @endif
                        <article class="mt-3" id="bpsepnil">

                            {!! $news->description !!}
                        </article>

                    </div>
                    {{-- <div class="ads">
                        <a class="list-item" href="#">

                        </a>
                    </div> --}}
                </div>

                {{-- <article class="mt-3" id="bpsepnil">
                    {!! $news->description !!}
                </article> --}}
                <div class="clearfix"></div>
                {{-- <ul class="bottom-share">
                    <li><a target="_blank"
                            href="https://twitter.com/intent/tweet?url=https://www.bd-pratidin.com/entertainment/2023/03/20/868881"><i
                                class="bi bi-twitter"></i></a></li>
                    <li><a target="_blank"
                            href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.bd-pratidin.com/entertainment/2023/03/20/868881"><i
                                class="bi bi-linkedin"></i></a></li>
                    <li><a target="_blank"
                            href="https://www.facebook.com/sharer.php?u=https://nirvoynews.com/cat/%E0%A6%B9%E0%A7%8B%E0%A6%AE-%E0%A6%B8%E0%A7%8D%E0%A6%B2%E0%A6%BE%E0%A6%87%E0%A6%A1%E0%A6%BE%E0%A6%B0/2023000498172941"><i
                                class="bi bi-facebook"></i></a></li>
                </ul> --}}
                <div class="clearfix"></div>
                {{-- <div class="tagArea mt-3">
                    <h4>এই রকম আরও টপিক</h4>
                    <ul class="mt-2">
                        <li><a href="./topic/অভিনেত্রী">অভিনেত্রী</a></li>
                        <li><a href="./topic/সাবিলা নূর"> সাবিলা নূর</a></li>
                        <li><a href="./topic/অনন্য"> অনন্য</a></li>
                        <li><a href="./topic/অর্জন"> অর্জন</a></li>
                    </ul>
                </div> --}}
                {{-- <div class="mt-3">
                    <div data-position="desktop-details-after-topic" class="m-0 p-0">
                        <div class="ads bg-light mb-2 d-flex justify-content-center">
                            <div class="ad_cl-190" data-id="190">
                                <div id='div-gpt-ad-1635766164619-0' style='min-width: 728px; min-height: 90px;'>
                                    <script>
                                        googletag.cmd.push(function() {
                                            googletag.display('div-gpt-ad-1635766164619-0');
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="clearfix"></div>
                <div class="mt-3 details-more">
                    <div class="row">
                        <div class="home-category-area">
                            <h1><a href="#"><span>এই বিভাগের আরও খবর</span> <i class="bi bi-chevron-right"></i></a>
                            </h1>
                            <div class="row">
                                @foreach ($categorywisenews->take(8) as $key => $item)
                                    <div class="col-md-3 mt-4">
                                        <a class="list-item"
                                            href="{{ route('singlenews', [$category->slug, $item->slug]) }}">
                                            <img src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage_front.jpg') }}"
                                                alt="{{ $item->title }}">
                                            <p>{{ $item->title }}</p>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-12">
                    <div data-position="desktop-details-before-footer" class="m-0 p-0">
                        <div class="ads bg-light mb-2 d-flex justify-content-center">
                            <div class="ad_cl-69" data-id="69">
                                <div id='div-gpt-ad-1632647997807-0' style='min-width: 728px; min-height: 90px;'>
                                    <script>
                                        googletag.cmd.push(function() {
                                            googletag.display('div-gpt-ad-1632647997807-0');
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="ads bg-light mb-2 d-flex justify-content-center">
                            <div class="ad_cl-269" data-id="269">
                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2700791158889103"
                                    crossorigin="anonymous"></script>
                                <ins class="adsbygoogle" style="display:inline-block;width:728px;height:250px"
                                    data-ad-client="ca-pub-2700791158889103" data-ad-slot="8312430285"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-3">
                {{-- <div data-position="desktop-details-right-top" class="m-0 p-0">
                    <div class="ads bg-light mb-2 d-flex justify-content-center">
                        <div class="ad_cl-18" data-id="18">
                            <div id='div-gpt-ad-1631793056673-0' style='min-width: 300px; min-height: 250px;'>
                                <script>
                                    googletag.cmd.push(function() {
                                        googletag.display('div-gpt-ad-1631793056673-0');
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="details-widget">
                    <h1><a href="./online/todaynews"><span>সর্বশেষ খবর</span> <i class="bi bi-chevron-right"></i></a></h1>
                    <ul class="thumb-list mb-4">
                        @foreach ($latestNews as $item)
                            <li class="mb-2">
                                <a href="{{ route('singlenews', [$category->slug, $item->slug]) }}" class="row">
                                    <span class="col-md-4 pe-0">
                                        <img src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage_front.jpg') }}"
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
                {{-- <div data-position="desktop-details-right-after-latest" class="m-0 p-0">
                    <div class="ads bg-light mb-2 d-flex justify-content-center">
                        <div class="ad_cl-20" data-id="20">
                            <div id='div-gpt-ad-1631793696046-0' style='min-width: 300px; min-height: 250px;'>
                                <script>
                                    googletag.cmd.push(function() {
                                        googletag.display('div-gpt-ad-1631793696046-0');
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="details-widget mt-3">
                    <h1>
                        <p class="p-0 m-0"><span>সর্বাধিক পঠিত</span> <i class="bi bi-chevron-down"></i></p>
                    </h1>
                    <ul class="title-list mb-2">
                        @foreach ($mostRead as $item)
                            <li class="bi bi-caret-right-fill">
                                <a
                                    href="{{ route('singlenews', [$item->category->slug, $item->news->slug]) }}">{{ $item->news->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div data-position="desktop-details-right-after-most-read" class="m-0 p-0">
                    {{-- <div class="ads bg-light mb-2 d-flex justify-content-center">
                        <div class="ad_cl-21" data-id="21">
                            <div id='div-gpt-ad-1631794319734-0' style='min-width: 300px; min-height: 250px;'>
                                <script>
                                    googletag.cmd.push(function() {
                                        googletag.display('div-gpt-ad-1631794319734-0');
                                    });
                                </script>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="ads bg-light mb-2 d-flex justify-content-center">
                        <div class="ad_cl-780" data-id="780">
                            <div id="elm-esk-924610632537-hxa">
                                <script>
                                    esadt.cmd.push({
                                        render: ['esk-924610632537-hxa', 'elm-esk-924610632537-hxa', {
                                            'macro': '%%CLICK_URL_UNESC%%'
                                        }]
                                    });
                                </script>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="ads bg-light mb-2 d-flex justify-content-center">
                        <div class="ad_cl-829" data-id="829">
                            <div id="elm-esk-2945254185838-umx">
                                <script>
                                    esadt.cmd.push({
                                        render: ['esk-2945254185838-umx', 'elm-esk-2945254185838-umx', {
                                            'macro': '%%CLICK_URL_UNESC%%'
                                        }]
                                    });
                                </script>
                            </div>
                        </div>
                    </div> --}}
                </div>
                {{-- <div class="details-widget mt-3">
                    <h1>
                        <p class="p-0 m-0"><span>প্রিন্ট সর্বাধিক</span> <i class="bi bi-chevron-down"></i></p>
                    </h1>
                    <ul class="title-list mb-2">
                        <li class="bi bi-caret-right-fill"><a href="first-page/2023/03/20/868809">কে এই আরাভ খান</a></li>
                        <li class="bi bi-caret-right-fill"><a href="last-page/2023/03/20/868825">অস্ট্রেলিয়ার বাণিজ্যে
                                চীনের বিকল্প বাংলাদেশ</a></li>
                        <li class="bi bi-caret-right-fill"><a href="last-page/2023/03/20/868829">হেলিকপ্টার ও হাতি নিয়ে
                                বিয়ে</a></li>
                        <li class="bi bi-caret-right-fill"><a href="first-page/2023/03/20/868817">আমজাদের এক হাজার ব্যাংক
                                হিসাব জব্দ</a></li>
                        <li class="bi bi-caret-right-fill"><a href="first-page/2023/03/20/868808">মার্কিন নিষেধাজ্ঞা নিয়ে
                                ঘাবড়ানোর কিছু নেই</a></li>
                    </ul>
                </div> --}}
                {{-- <div data-position="desktop-details-right-after-print-most-read" class="m-0 p-0">
                    <div class="ads bg-light mb-2 d-flex justify-content-center">
                        <div class="ad_cl-22" data-id="22">
                            <div id='div-gpt-ad-1631794442885-0' style='min-width: 300px; min-height: 250px;'>
                                <script>
                                    googletag.cmd.push(function() {
                                        googletag.display('div-gpt-ad-1631794442885-0');
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div id="printerDiv" style="display:none"></div>
    <script>
        function printPage() {
            var div = document.getElementById("printerDiv");
            div.innerHTML =
                '<iframe src="./home/printnews/868881/2023-03-20" onload="this.contentWindow.print();"></iframe>';
            return false;
        }
    </script>
    <style>
        #drag-area {
            position: fixed;
            left: 1%;
            bottom: 10%;
            width: 125px;
            height: 125px;
        }

        #drag-area .bi-arrows-move {
            font-size: 24px;
            color: black;
            position: absolute;
            right: 0;
            top: -33px;
            background: white;
            border-radius: 5px;
            padding: 0 5px;
        }

        #drag-body {
            background: whitesmoke;
            position: absolute;
            z-index: 999999999;
            width: 125px;
            height: 125px;
        }

        #drag-close {
            background: whitesmoke;
            position: absolute;
            left: -18px;
            top: -16px;
            border: none;
            color: red;
            font-size: 16px;
            cursor: pointer;
            z-index: 99999999999999;
        }

        #drag-bodydrag-area {
            padding: 10px;
            cursor: move;
            z-index: 10;
            color: #fff;
            width: 125px;
            height: 125px;
        }

        #drag-bodydrag-area:after {
            content: '';
            width: 125px;
            height: 125px;
            display: inline-block;
        }
    </style>
@endsection
