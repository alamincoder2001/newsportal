@extends("layouts.frontend_master")

@section("title")
{{$category->slug}}
@endsection

@section('content')
<div class="container my-4">
    <div class="row">
        <div class="col-md-12 col-lg-8 col-xl-8 col-xxl-9 category">
            @if(count($categorywisenews) > 0)
                <div class="breadcrumb-bg  details-article">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item bi bi-arrow-left"><a href="{{route('website')}}">হোম</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$category->name}}</li>
                    </ol>
                    <span class="edition-version"> অনলাইন ভার্সন </span>
                </div>
                <div class="cat-lead">
                    <a href="{{route('singlenews', $categorywisenews[0]->slug)}}">
                        <img class="lazy" src="{{asset($categorywisenews[0]->image != null ? $categorywisenews[0]->image: 'noImage.jpg')}}" alt="{{count($categorywisenews) > 0 ? $categorywisenews[0]->title: ''}}">
                        <span>{{count($categorywisenews) > 0 ? $categorywisenews[0]->title: ''}}</span>
                    </a>
                    {!! count($categorywisenews) > 0 ? $categorywisenews[0]->description: '' !!}
                </div>
            @endif
            <div class="row">
                @foreach($categorywisenews as $key => $item)
                    @if($key != 0)
                        <div class="col-md-6 mt-4">
                            <div class="cat-2nd-lead">
                                <a href="{{route('singlenews', $item->slug)}}" class="row">
                                    <div class="col-md-5 text">{{$item->title}}</div>
                                    <div class="col-md-7 pe-0">
                                        <img src="{{asset($item->thumbnail != null ? $item->thumbnail: 'noImage.jpg')}}" alt="{{$item->title}}">
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="row mt-3">
                    <div class="col-md-12 text-end "><a class="btn btn-success" href="sports/14">এই বিভাগের আরও খবর »</a></div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-3">
            <div class="details-widget">
                <h1><a href="./online/todaynews"><span>সর্বশেষ খবর</span> <i class="bi bi-chevron-right"></i></a></h1>
                <ul class="thumb-list">
                    <li class="mb-2">
                        <a href="sports/2023/03/20/868918" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/160831_bangladesh_pratidin_tamim.jpg?v=1679306985" alt="প্রথম বাংলাদেশি হিসেবে তামিমের ১৫ হাজার রান">
                            </span>
                            <span class="col-md-8">
                                <p>প্রথম বাংলাদেশি হিসেবে তামিমের ১৫ হাজার রান
                                </p>
                            </span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="city-news/2023/03/20/868917" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/160635_bangladesh_pratidin_atok-logo.jpg?v=1679306985" alt="রাজধানীতে বিএনপির ৫৪ নেতাকর্মী আটক">
                            </span>
                            <span class="col-md-8">
                                <p>রাজধানীতে বিএনপির ৫৪ নেতাকর্মী আটক
                                </p>
                            </span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="national/2023/03/20/868916" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/160036_bangladesh_pratidin_ranga-news-pic.jpg?v=1679306985" alt="সাংবিধানিক ধারা মেনেই আগামী নির্বাচনে অংশ নিবো : রওশন এরশাদ">
                            </span>
                            <span class="col-md-8">
                                <p>সাংবিধানিক ধারা মেনেই আগামী নির্বাচনে অংশ নিবো : রওশন এরশাদ
                                </p>
                            </span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="country/2023/03/20/868915" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/155736_bangladesh_pratidin_Habiganj.jpg?v=1679306985" alt="হবিগঞ্জে ১১৬ শিক্ষককে ল্যাপটপ প্রদান">
                            </span>
                            <span class="col-md-8">
                                <p>হবিগঞ্জে ১১৬ শিক্ষককে ল্যাপটপ প্রদান</p>
                            </span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="country/2023/03/20/868914" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/155516_bangladesh_pratidin_Jhena.jpg?v=1679306985" alt="ঝিনাইদহে মাঠ দিবস পালিত ">
                            </span>
                            <span class="col-md-8">
                                <p>ঝিনাইদহে মাঠ দিবস পালিত </p>
                            </span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="international-news/2023/03/20/868913" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/154947_bangladesh_pratidin_Syria.jpg?v=1679306985" alt="সংযুক্ত আরব আমিরাত সফরে বাশার আল আসাদ">
                            </span>
                            <span class="col-md-8">
                                <p>সংযুক্ত আরব আমিরাত সফরে বাশার আল আসাদ</p>
                            </span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="minister-spake/2023/03/20/868912" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/154822_bangladesh_pratidin_obaidul-kader-file-pic.jpg?v=1679306985" alt="ব্যর্থ বিএনপি এখন সড়ক দুর্ঘটনা নিয়ে রাজনীতি করছে : ওবায়দুল কাদের">
                            </span>
                            <span class="col-md-8">
                                <p>ব্যর্থ বিএনপি এখন সড়ক দুর্ঘটনা নিয়ে রাজনীতি করছে : ওবায়দুল কাদের
                                </p>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="details-widget mt-3">
                <h1>
                    <p class="p-0 m-0"><span>সর্বাধিক পঠিত</span> <i class="bi bi-chevron-down"></i></p>
                </h1>
                <ul class="title-list mb-2">
                    <li class="bi bi-caret-right-fill"><a href="international-news/2023/03/20/868852">যে কারণে চীনকে ধন্যবাদ দিলেন পুতিন</a></li>
                    <li class="bi bi-caret-right-fill"><a href="international-news/2023/03/20/868839">মারিওপোল সফর, কী দেখলেন পুতিন?</a></li>
                    <li class="bi bi-caret-right-fill"><a href="sports/2023/03/20/868875">আর্জেন্টিনার জালে ১৩ গোল, কোপা'র শিরোপা জয় ব্রাজিলের</a></li>
                    <li class="bi bi-caret-right-fill"><a href="international-news/2023/03/20/868868">যুক্তরাষ্ট্র ও দক্ষিণ কোরিয়ার বিরুদ্ধে পারমাণবিক হামলার প্রস্তুতির নির্দেশ কিমের
                        </a></li>
                    <li class="bi bi-caret-right-fill"><a href="sports/2023/03/20/868840">ছিলেন মেসি-এমবাপ্পে, তবুও লজ্জায় ডুবল পিএসজি</a></li>
                    <li class="bi bi-caret-right-fill"><a href="city-news/2023/03/20/868855">হেলেনা জাহাঙ্গীরসহ ৫ জনের মামলার রায় আজ</a></li>
                    <li class="bi bi-caret-right-fill"><a href="international-news/2023/03/20/868861">যুক্তরাষ্ট্রে আরও ১৮৬ ব্যাংক পতনের ঝুঁকিতে
                        </a></li>
                </ul>
            </div>

            <div class="details-widget mt-3">
                <h1>
                    <p class="p-0 m-0"><span>প্রিন্ট সর্বাধিক</span> <i class="bi bi-chevron-down"></i></p>
                </h1>
                <ul class="title-list mb-2">
                    <li class="bi bi-caret-right-fill"><a href="first-page/2023/03/20/868809">কে এই আরাভ খান</a></li>
                    <li class="bi bi-caret-right-fill"><a href="last-page/2023/03/20/868825">অস্ট্রেলিয়ার বাণিজ্যে চীনের বিকল্প বাংলাদেশ</a></li>
                    <li class="bi bi-caret-right-fill"><a href="last-page/2023/03/20/868829">হেলিকপ্টার ও হাতি নিয়ে বিয়ে</a></li>
                    <li class="bi bi-caret-right-fill"><a href="first-page/2023/03/20/868817">আমজাদের এক হাজার ব্যাংক হিসাব জব্দ</a></li>
                    <li class="bi bi-caret-right-fill"><a href="first-page/2023/03/20/868808">মার্কিন নিষেধাজ্ঞা নিয়ে ঘাবড়ানোর কিছু নেই</a></li>
                    <li class="bi bi-caret-right-fill"><a href="first-page/2023/03/20/868805">হঠাৎ মৃত্যুপুরী মাদারীপুর</a></li>
                    <li class="bi bi-caret-right-fill"><a href="first-page/2023/03/20/868816">চালক শুনছিলেন না কারও কথাই</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
