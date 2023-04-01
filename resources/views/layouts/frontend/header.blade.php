<header>
    <div class="container mb-3">
        <div class="row">
            <div class="col-4 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <a href="http://127.0.0.1:8000/" class="logo"><img src="{{asset($setting->logo != null ? $setting->logo : 'noImage.jpg')}}" alt=""></a>
                    </div>
                    <div class="col-12 col-lg-7 navbar-title">
                        <h1 class="m-0 navbar-title-text">{{$setting->company_name}}</h1>
                        <span class="navbar-subTitle-text">{{$setting->title}}</span>
                    </div>
                </div>
            </div>

            <div class="col-8 col-md-7 d-flex align-items-end justify-content-center mobileViewRow">
                <span class="text-end mobileview">
                    <p id="dateEnglish" class="m-0" style="font-weight: bold;color:brown;"></p>
                    <p id="dateArabic" class="m-0" style="font-weight: bold;color:green;"></p>
                    <p id="dateBangla" class="m-0" style="font-weight: bold;color:hsl(0, 0%, 14%);"></p>
                    <p id="time" class="m-0" style="font-weight: bold;color:darkcyan;"></p>
                </span>
            </div>
        </div>
    </div>
</header>

<nav id="navbar_top" class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" id="top-navbar-logo" href="http://127.0.0.1:8000/"><img src="{{asset('frontend')}}/assets/img/logo.png" alt="bd-pratidin"></a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="bi bi-list"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/"><i class="text-secondary bi bi-house-fill"></i></a></li>
                @foreach($categories->take(8) as $item)
                <li class="nav-item "><a class="nav-link" href="{{route('categorywise', $item->slug)}}">{{$item->name}}</a></li>
                @endforeach
                @if(count($otherscategory) > 0)
                <li class="nav-item dropdown">
                    <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> অন্যান্য </a>
                    <ul class="dropdown-menu dropdown-menu-right  multi-column columns-2">
                        <div class="row">
                            @foreach(array_chunk($otherscategory, 4) as $cat)
                            <div class="col-sm-6">
                                <ul class="multi-column-dropdown">
                                    @foreach($cat as $item)
                                    <li><a class="dropdown-item" href="{{route('categorywise', $item->slug)}}">{{$item->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </ul>
                </li>
                @endif
                <li class="nav-item nav-search">
                    <a href="#" id="google-search"><i class="bi bi-search"></i></a>
                    <form action="./home/search" method="get" id="cse-search-box">
                        <input type="hidden" value="5d07de91748e84546" name="cx">
                        <a href="#"><i class="bi bi-x-lg"></i></a>
                        <input type="hidden" name="cof" value="FORID:10" />
                        <input type="hidden" value="UTF-8" name="ie">
                        <input name="q" type="text" placeholder="Search....." autocomplete="off">
                        <button type="submit" onclick="document.getElementById('form-id').submit();"><i class="bi bi-search"></i></button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="clearfix"></div>
<div class="acme-news-ticker-bg">
    <div class="container">
        <div class="acme-news-ticker">
            <div class="acme-news-ticker-label">শিরোনাম </div>
            <div class="acme-news-ticker-box">
                <ul class="my-news-ticker">
                    <li><a href="international-news/2023/03/20/868861">যুক্তরাষ্ট্রে আরও ১৮৬ ব্যাংক পতনের ঝুঁকিতে
                        </a></li>
                    <li><a href="city-news/2023/03/20/868860">মাদকবিরোধী পুলিশি অভিযানে গ্রেফতার ৪২</a></li>
                    <li><a href="city-news/2023/03/20/868859">বৃষ্টিতে ঢাকায় দূষণ কমে বায়ুমানের উন্নতি</a></li>
                    <li><a href="international-news/2023/03/20/868858">ইরানের প্রেসিডেন্টকে সৌদি আরবে সফরের আমন্ত্রণ বাদশাহ সালমানের
                        </a></li>
                    <li><a href="international-news/2023/03/20/868857">এবার ক্রেডিট সুইস ব্যাংক দেউলিয়া হওয়া নিয়ে আতঙ্ক</a></li>
                    <li><a href="national/2023/03/20/868856">বঙ্গভবনে রাষ্ট্রপতির সঙ্গে সৌদি রাষ্ট্রদূতের সৌজন্য সাক্ষাৎ</a></li>
                    <li><a href="sports/2023/03/20/868854">
                            পয়েন্ট তালিকায় শীর্ষে ফেরা হলো না বায়ার্নের </a></li>
                    <li><a href="sports/2023/03/20/868853">ঘরের মাঠেও জুভেন্টাসে ধরাশায়ী ইন্টার</a></li>
                    <li><a href="international-news/2023/03/20/868852">যে কারণে চীনকে ধন্যবাদ দিলেন পুতিন</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>