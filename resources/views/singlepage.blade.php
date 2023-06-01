@extends('layouts.frontend_master')
@section('title')
{{ $news->title }}
@endsection
@section('shareLink')
<meta property="og:title" content="{{$news->title}}" />
<meta property="og:image" content="{{ asset($news->image != null ? $news->image : '') }}" />
<meta property="image_url" content="{{ asset($news->image != null ? $news->image : '') }}" />
<meta property="og:description" content="{!! $news->description !!}" />

<meta name="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="{{URL::current()}}">
<meta name="twitter:title" content="{{$news->title}}">
<meta name="twitter:description" content="{!! $news->description !!}">
<meta name="twitter:image" content="{{ asset($news->image != null ? $news->image : '') }}">

<link rel="image_src" href="{{ asset($news->image != null ? $news->image : '') }}">
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
                            <span><i class="bi bi-stopwatch"></i> {{$news->created_banglaDate}}
                        </div>
                        <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 mb-2 pe-0">

                            <ul class="top-share-area mt-2">
                                <li class="ps-0 ms-0">
                                    <iframe src="https://www.facebook.com/plugins/share_button.php?href={{URL::current()}}&layout=button_count&size=large&mobile_iframe=true&width=83&height=28&appId" width="100" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                                </li>
                                <li class="pe-1">
                                    <div id="fb-root"></div>
                                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=1163541667026157&autoLogAppEvents=1" nonce="0ZG418Gg"></script>
                                    <div class="fb-like" data-href="{{URL::current()}}" data-width="" data-layout="button" data-action="like" data-size="large" data-share="false"></div>
                                </li>
                                <li><a class="bg" onclick="printPage(event); return false;" href="#"><i class="bi bi-printer"></i> প্রিন্ট</a></li>
                                <li>
                                    <div class="alert alert-success alert-dismissible show" role="alert">
                                        <strong>Copied</strong>
                                    </div>
                                    <div class="copytxthidden"><input type="text" value="{{URL::current()}}" id="newslink"></div>
                                    <a class="bg" href="#" id="newsLinkCopy"><i class="bi bi-link-45deg"></i>
                                        কপি লিঙ্ক</a>
                                </li>
                                <!--<li class="google_news"><a-->
                                <!--        href="https://news.google.com/publications/CAAqBwgKMODNpQsws9i9Aw?hl=en-US&gl=US&ceid=US:en"-->
                                <!--        class="bg" target="_blank"><img-->
                                <!--            src="https://www.bd-pratidin.com/assets/newDesktop/img/google_news.png"></a>-->
                                <!--</li>-->
                            </ul>
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
                        <img class="img_ad img-fluid img-thumbnail" src="{{ asset($ad3->image != null ? $ad3->image : '600x600.jpg') }}" alt="{{ $ad3->title }}">
                    </a>
                    @endif
                    <article class="mt-3" id="bpsepnil">
                        {!! $news->description !!}
                    </article>
                </div>
            </div>
            <div class="clearfix"></div>
            <ul class="bottom-share">
                <!-- <li> <a target="_blank" href="https://twitter.com/intent/tweet?url={{URL::current()}}"><i class="bi bi-twitter"></i></a></li> -->

                <li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url={{URL::current()}}"><i class="bi bi-linkedin"></i></a></li>
                <li><a target="_blank" href="https://www.facebook.com/sharer.php?u={{URL::current()}}"><i class="bi bi-facebook"></i></a></li>
            </ul>
            <div class="clearfix"></div>
            <div class="mt-3 details-more">
                <div class="row">
                    <div class="home-category-area">
                        <h1><a href="#"><span>এই বিভাগের আরও খবর</span> <i class="bi bi-chevron-right"></i></a>
                        </h1>
                        <div class="row News">
                            @foreach ($categorywisenews->take(8) as $key => $item)
                            <div class="col-md-3 mt-4">
                                <a class="list-item NewsHover" href="{{ route('singlenews', [$category->slug, $item->slug]) }}">
                                    <img src="{{ asset($item->thumbnail != null ? $item->thumbnail : 'noImage_front.jpg') }}" alt="{{ $item->title }}">
                                    <p>{{ $item->title }}</p>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-3">

            <div class="details-widget">
                <h1><a href="./online/todaynews"><span>সর্বশেষ খবর</span> <i class="bi bi-chevron-right"></i></a></h1>
                <ul class="thumb-list mb-4">
                    @foreach ($latestNews as $item)
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
<div id="printerDiv" style="display:none">
    {!! $news->description !!}
</div>
<div id="banglaDate" style="display: none;">{{$news->created_banglaDate}}</div>
<script>
    async function printPage(event) {
        event.preventDefault();
        var logo = "{{$setting->logo}}";
        var newsImage = "{{$news->image}}";
        var titletext = "{{$setting->company_name}}";
        var newsTitle = "{{$news->title}}";
        var printWindow = window.open('', '', `width=${screen.width},height=${screen.height}`);
        printWindow.document.write(`
                <!DOCTYPE html>
                <html>
                    <head>
                        <title>${document.title}</title>
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
                        <style>
                            .textJustify > p{
                                text-align:justify;
                                padding:0;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="row" style="border:1px solid #c5c5c5;padding:5px 0;">
                                <div class="col-2">
                                    <img src="${location.origin}/${logo}" style="width:100px !important;"/>
                                </div>
                                <div class="col-10" style="margin-top:21px;">
                                    <h1 class="m-0">${titletext}</h1>
                                    <span>নির্ভয় সত্যের পথে সাহসী সৈনিক</span>
                                </div>
                            </div>
                            <div class="row textJustify">
                                <p style="padding:15px 0;margin:0;">আপডেট: ${document.getElementById('banglaDate').innerHTML}
                           </p>
                                <h1 style="margin:0;padding:0;margin-bottom:5px;">${newsTitle}</h1>
                                <img src="${location.origin}${newsImage}" style="width:450px !important;padding: 0;margin-bottom: 10px;"/>
                                ${document.getElementById("printerDiv").innerHTML}
                            </div>
                        </div>
                    </body>
                </html>
            `);

        printWindow.focus();
        await new Promise((resolve) => setTimeout(resolve, 500));
        printWindow.print();
        printWindow.close();
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