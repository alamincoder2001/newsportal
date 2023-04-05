@extends("layouts.frontend_master")
@section("title")
{{$news->title}}
@endsection

@section("content")
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12 col-lg-8 col-xl-8 col-xxl-9 details-article">
            <div class="details-article-bg">
                <div class="breadcrumb-bg">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item bi bi-arrow-left"><a href="https://www.bd-pratidin.com/">হোম</a></li>
                        <li class="breadcrumb-item"><a href="{{route('categorywise', $news->category->slug)}}">{{$news->category->name}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$news->title}}</li>
                    </ol>
                    <span class="edition-version">অনলাইন ভার্সন</span>
                </div>
                <div class="area-curve">
                    <div class="row p-3">
                        <div class="col-md-4 col-lg-3 col-xl-4 col-xxl-5 news-info mb-2">
                            <span><i class="bi bi-stopwatch"></i> ২০ মার্চ, ২০২৩ ১৩:১৮
                        </div>
                        <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 mb-2 pe-0">
                            <ul class="top-share-area mt-2">
                                <li class="ps-0 ms-0">
                                    <div id="fb-root"></div>
                                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v11.0" nonce="hkURxhMb"></script>
                                    <div class="fb-share-button" data-href="https://www.bd-pratidin.com/entertainment/2023/03/20/868881" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.bd-pratidin.com/entertainment/2023/03/20/868881&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                                </li>
                                <li class="pe-1">
                                    <div id="fb-root"></div>
                                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=1163541667026157&autoLogAppEvents=1" nonce="0ZG418Gg"></script>
                                    <div class="fb-like" data-href="https://www.bd-pratidin.com/entertainment/2023/03/20/868881" data-width="" data-layout="button" data-action="like" data-size="large" data-share="false"></div>
                                </li>
                                <li><a class="bg" onclick="printPage(); return false;" href="#"><i class="bi bi-printer"></i> প্রিন্ট</a></li>
                                <li>
                                    <div class="alert alert-success alert-dismissible show" role="alert">
                                        <strong>Copied</strong>
                                    </div>
                                    <div class="copytxthidden"><input type="text" value="https://www.bd-pratidin.com/entertainment/2023/03/20/868881" id="newslink"></div>
                                    <a class="bg" href="#" id="newsLinkCopy"><i class="bi bi-link-45deg"></i> কপি লিঙ্ক</a>
                                </li>
                                <li class="google_news"><a href="https://news.google.com/publications/CAAqBwgKMODNpQsws9i9Aw?hl=en-US&gl=US&ceid=US:en" class="bg" target="_blank"><img src="https://www.bd-pratidin.com/assets/newDesktop/img/google_news.png"></a></li>
                            </ul>
                        </div>
                    </div>
                    <h1 class="ps-3 pe-1">অভিনেত্রী সাবিলা নূরের অনন্য অর্জন
                    </h1>
                    <div class="news-info ps-3 my-3">
                        <h2><i class="bi bi-pencil-square"></i> অনলাইন ডেস্ক</h2>
                    </div>
                    <div class="news-img">
                        <img src="{{asset($news->image != null ? $news->image : 'noImage.jpg')}}" alt="{{$news->title}}">
                        <div class="caption">
                            <p><span>{{$news->title}}</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <article class="mt-3" id="bpsepnil">
                {!! $news->description !!}
            </article>
            <div class="clearfix"></div>
            <ul class="bottom-share">
                <li><a target="_blank" href="https://twitter.com/intent/tweet?url=https://www.bd-pratidin.com/entertainment/2023/03/20/868881"><i class="bi bi-twitter"></i></a></li>
                <li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.bd-pratidin.com/entertainment/2023/03/20/868881"><i class="bi bi-linkedin"></i></a></li>
                <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=https://www.bd-pratidin.com/entertainment/2023/03/20/868881"><i class="bi bi-facebook"></i></a></li>
            </ul>
            <div class="clearfix"></div>
            <div class="tagArea mt-3">
                <h4>এই রকম আরও টপিক</h4>
                <ul class="mt-2">
                    <li><a href="./topic/অভিনেত্রী">অভিনেত্রী</a></li>
                    <li><a href="./topic/সাবিলা নূর"> সাবিলা নূর</a></li>
                    <li><a href="./topic/অনন্য"> অনন্য</a></li>
                    <li><a href="./topic/অর্জন"> অর্জন</a></li>
                </ul>
            </div>
            <div class="mt-3">
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
            </div>
            <div class="clearfix"></div>
            <div class="mt-3 details-more">
                <div class="row">
                    <div class="home-category-area">
                        <h1><a href="#"><span>এই বিভাগের আরও খবর</span> <i class="bi bi-chevron-right"></i></a></h1>
                        <div class="row">
                            <div class="col-md-3 mb-4">
                                <a class="list-item" href="entertainment/2023/03/20/868881">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/135608_bangladesh_pratidin_Sabila-Noor_3.jpg?v=1679308723" alt="অভিনেত্রী সাবিলা নূরের অনন্য অর্জন

">
                                    <p>অভিনেত্রী সাবিলা নূরের অনন্য অর্জন
                                    </p>
                                </a>
                            </div>
                            <div class="col-md-3 mb-4">
                                <a class="list-item" href="entertainment/2023/03/19/868752">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/222015_bangladesh_pratidin_raza.jpg?v=1679308723" alt="নিজেকে বাংলাদেশি মনে করি: রাজা সেন">
                                    <p>নিজেকে বাংলাদেশি মনে করি: রাজা সেন</p>
                                </a>
                            </div>
                            <div class="col-md-3 mb-4">
                                <a class="list-item" href="entertainment/2023/03/19/868747">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/212034_bangladesh_pratidin_shakib-khan-bdp.jpg?v=1679308723" alt="ডিবি কার্যালয় থেকে বেরিয়ে যা বললেন শাকিব খান">
                                    <p>ডিবি কার্যালয় থেকে বেরিয়ে যা বললেন শাকিব খান</p>
                                </a>
                            </div>
                            <div class="col-md-3 mb-4">
                                <a class="list-item" href="entertainment/2023/03/19/868648">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/092532_bangladesh_pratidin_Ram_Charan.jpg?v=1679308723" alt="কোহলির বায়োপিকে কি রাম চরণ?">
                                    <p>কোহলির বায়োপিকে কি রাম চরণ?</p>
                                </a>
                            </div>
                            <div data-position="desktop-details-left-more-news" class="m-0 p-0">
                                <div class="ads bg-light mb-2 d-flex justify-content-center">
                                    <div class="ad_cl-24" data-id="24">
                                        <div id='div-gpt-ad-1631795075202-0' style='min-width: 728px; min-height: 90px;'>
                                            <script>
                                                googletag.cmd.push(function() {
                                                    googletag.display('div-gpt-ad-1631795075202-0');
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <a class="list-item" href="entertainment/2023/03/19/868639">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/081239_bangladesh_pratidin_Priyanka.jpg?v=1679308723" alt="এবার হলিউডের ‘বৈষম্য’ নিয়ে সরব প্রিয়াঙ্কা">
                                    <p>এবার হলিউডের ‘বৈষম্য’ নিয়ে সরব প্রিয়াঙ্কা</p>
                                </a>
                            </div>
                            <div class="col-md-3 mb-4">
                                <a class="list-item" href="entertainment/2023/03/18/868499">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/18/mob/204927_bangladesh_pratidin_mahi-news-pic.jpg?v=1679308723" alt="কারামুক্ত হলেন মাহি

">
                                    <p>কারামুক্ত হলেন মাহি
                                    </p>
                                </a>
                            </div>
                            <div class="col-md-3 mb-4">
                                <a class="list-item" href="entertainment/2023/03/18/868461">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/18/mob/180347_bangladesh_pratidin_mahi222.jpg?v=1679308723" alt="দুপুরে কারাগারে, বিকেলে জামিন মাহির">
                                    <p>দুপুরে কারাগারে, বিকেলে জামিন মাহির</p>
                                </a>
                            </div>
                            <div class="col-md-3 mb-4">
                                <a class="list-item" href="entertainment/2023/03/18/868411">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/18/mob/143918_bangladesh_pratidin_mahiya-mahi-bdp.jpg?v=1679308723" alt="কারাগারে পাঠানো হল মাহিকে">
                                    <p>কারাগারে পাঠানো হল মাহিকে</p>
                                </a>
                            </div>
                            <div data-position="desktop-details-left-more-news-2" class="m-0 p-0">
                                <div class="ads bg-light mb-2 d-flex justify-content-center">
                                    <div class="ad_cl-468" data-id="468">
                                        <div id='div-gpt-ad-1651054090431-0' style='min-width: 728px; min-height: 90px;'>
                                            <script>
                                                googletag.cmd.push(function() {
                                                    googletag.display('div-gpt-ad-1651054090431-0');
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <a class="list-item" href="entertainment/2023/03/18/868403">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/18/mob/135325_bangladesh_pratidin_mahi-bdp.jpg?v=1679308723" alt="আদালতে পাঠানো হয়েছে মাহিকে">
                                    <p>আদালতে পাঠানো হয়েছে মাহিকে</p>
                                </a>
                            </div>
                            <div class="col-md-3 mb-4">
                                <a class="list-item" href="entertainment/2023/03/18/868383">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/18/mob/121518_bangladesh_pratidin_mahi_3.jpg?v=1679308723" alt="ডিজিটাল নিরাপত্তা আইনের মামলায় চিত্রনায়িকা মাহিয়া মাহি গ্রেফতার">
                                    <p>ডিজিটাল নিরাপত্তা আইনের মামলায় চিত্রনায়িকা মাহিয়া মাহি গ্রেফতার</p>
                                </a>
                            </div>
                            <div class="col-md-3 mb-4">
                                <a class="list-item" href="entertainment/2023/03/18/868367">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/18/mob/100343_bangladesh_pratidin_rakib-mahi.jpg?v=1679308723" alt="মাহি ও তার স্বামীর বিরুদ্ধে দুই মামলা">
                                    <p>মাহি ও তার স্বামীর বিরুদ্ধে দুই মামলা</p>
                                </a>
                            </div>
                            <div class="col-md-3 mb-4">
                                <a class="list-item" href="entertainment/2023/03/18/868351">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/18/mob/080416_bangladesh_pratidin_Sana.jpg?v=1679308723" alt="সন্তান কেমন হবে জানালেন সানা খান">
                                    <p>সন্তান কেমন হবে জানালেন সানা খান</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
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
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2700791158889103" crossorigin="anonymous"></script>
                            <ins class="adsbygoogle" style="display:inline-block;width:728px;height:250px" data-ad-client="ca-pub-2700791158889103" data-ad-slot="8312430285"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-3">
            <div data-position="desktop-details-right-top" class="m-0 p-0">
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
            </div>
            <div class="details-widget">
                <h1><a href="./online/todaynews"><span>সর্বশেষ খবর</span> <i class="bi bi-chevron-right"></i></a></h1>
                <ul class="thumb-list mb-4">
                    <li class="mb-2"><a href="city-news/2023/03/20/868927" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/163402_bangladesh_pratidin_tamim.jpg?v=1679308723" alt="নাসির-তামিমার বিরুদ্ধে সাক্ষ্য দিলেন স্বাবেক স্বামী রাকিব">
                            </span>
                            <span class="col-md-8">
                                <p>নাসির-তামিমার বিরুদ্ধে সাক্ষ্য দিলেন স্বাবেক স্বামী রাকিব</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="country/2023/03/20/868925" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/162722_bangladesh_pratidin_dfsdfsdfs.jpg?v=1679308723" alt="ঝিনাইদহে ঢেউটিন ও অর্থ বিতরণ ">
                            </span>
                            <span class="col-md-8">
                                <p>ঝিনাইদহে ঢেউটিন ও অর্থ বিতরণ </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="country/2023/03/20/868924" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/162533_bangladesh_pratidin_Untitled-3.jpg?v=1679308723" alt="টেকনাফ-সেন্টমার্টিন নৌরুটে জাহাজ চলাচল শুরু">
                            </span>
                            <span class="col-md-8">
                                <p>টেকনাফ-সেন্টমার্টিন নৌরুটে জাহাজ চলাচল শুরু</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="country/2023/03/20/868923" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/162506_bangladesh_pratidin_dfsdfsdfs.jpg?v=1679308723" alt="হবিগঞ্জে দুই মাদক কারবারি আটক ">
                            </span>
                            <span class="col-md-8">
                                <p>হবিগঞ্জে দুই মাদক কারবারি আটক </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="international-news/2023/03/20/868922" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/162359_bangladesh_pratidin_xinping.jpg?v=1679308723" alt="রাশিয়ায় পৌঁছেছেন চীনের প্রেসিডেন্ট শি জিনপিং  ">
                            </span>
                            <span class="col-md-8">
                                <p>রাশিয়ায় পৌঁছেছেন চীনের প্রেসিডেন্ট শি জিনপিং </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="country/2023/03/20/868921" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/162055_bangladesh_pratidin_dsffddfsfds.jpg?v=1679308723" alt="ঝিনাইদহে ঘর পাচ্ছেন ১২৩ পরিবার">
                            </span>
                            <span class="col-md-8">
                                <p>ঝিনাইদহে ঘর পাচ্ছেন ১২৩ পরিবার</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="country/2023/03/20/868920" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/161839_bangladesh_pratidin_Comilla.jpg?v=1679308723" alt="দাউদকান্দির ঢাকা-চট্টগ্রাম মহাসড়কে দীর্ঘ যানজট">
                            </span>
                            <span class="col-md-8">
                                <p>দাউদকান্দির ঢাকা-চট্টগ্রাম মহাসড়কে দীর্ঘ যানজট</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="sports/2023/03/20/868919" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/161230_bangladesh_pratidin_liton.jpg?v=1679308723" alt="দুই হাজারি ক্লাবে লিটন">
                            </span>
                            <span class="col-md-8">
                                <p>দুই হাজারি ক্লাবে লিটন</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="sports/2023/03/20/868918" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/160831_bangladesh_pratidin_tamim.jpg?v=1679308723" alt="প্রথম বাংলাদেশি হিসেবে তামিমের ১৫ হাজার রান

">
                            </span>
                            <span class="col-md-8">
                                <p>প্রথম বাংলাদেশি হিসেবে তামিমের ১৫ হাজার রান
                                </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="city-news/2023/03/20/868917" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/160635_bangladesh_pratidin_atok-logo.jpg?v=1679308723" alt="রাজধানীতে বিএনপির ৫৪ নেতাকর্মী আটক

">
                            </span>
                            <span class="col-md-8">
                                <p>রাজধানীতে বিএনপির ৫৪ নেতাকর্মী আটক
                                </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="national/2023/03/20/868916" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/160036_bangladesh_pratidin_ranga-news-pic.jpg?v=1679308723" alt="সাংবিধানিক ধারা মেনেই আগামী নির্বাচনে অংশ নিবো : রওশন এরশাদ

">
                            </span>
                            <span class="col-md-8">
                                <p>সাংবিধানিক ধারা মেনেই আগামী নির্বাচনে অংশ নিবো : রওশন এরশাদ
                                </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="country/2023/03/20/868915" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/155736_bangladesh_pratidin_Habiganj.jpg?v=1679308723" alt="হবিগঞ্জে ১১৬ শিক্ষককে ল্যাপটপ প্রদান">
                            </span>
                            <span class="col-md-8">
                                <p>হবিগঞ্জে ১১৬ শিক্ষককে ল্যাপটপ প্রদান</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="country/2023/03/20/868914" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/155516_bangladesh_pratidin_Jhena.jpg?v=1679308723" alt="ঝিনাইদহে মাঠ দিবস পালিত ">
                            </span>
                            <span class="col-md-8">
                                <p>ঝিনাইদহে মাঠ দিবস পালিত </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="international-news/2023/03/20/868913" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/154947_bangladesh_pratidin_Syria.jpg?v=1679308723" alt="সংযুক্ত আরব আমিরাত সফরে বাশার আল আসাদ">
                            </span>
                            <span class="col-md-8">
                                <p>সংযুক্ত আরব আমিরাত সফরে বাশার আল আসাদ</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="minister-spake/2023/03/20/868912" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/154822_bangladesh_pratidin_obaidul-kader-file-pic.jpg?v=1679308723" alt="ব্যর্থ বিএনপি এখন সড়ক দুর্ঘটনা নিয়ে রাজনীতি করছে : ওবায়দুল কাদের

">
                            </span>
                            <span class="col-md-8">
                                <p>ব্যর্থ বিএনপি এখন সড়ক দুর্ঘটনা নিয়ে রাজনীতি করছে : ওবায়দুল কাদের
                                </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="country/2023/03/20/868911" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/154658_bangladesh_pratidin_Barguna.jpg?v=1679308723" alt="বরগুনায় গৃহহীনদের ঘর হস্তান্তর বিষয়ে সংবাদ সম্মেলন">
                            </span>
                            <span class="col-md-8">
                                <p>বরগুনায় গৃহহীনদের ঘর হস্তান্তর বিষয়ে সংবাদ সম্মেলন</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="international-news/2023/03/20/868910" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/154426_bangladesh_pratidin_alerts.jpg?v=1679308723" alt="ব্রিটেনের মোবাইল ডিভাইসে চালু হচ্ছে সরকারি জরুরি সংকেত বার্তা

">
                            </span>
                            <span class="col-md-8">
                                <p>ব্রিটেনের মোবাইল ডিভাইসে চালু হচ্ছে সরকারি জরুরি সংকেত বার্তা
                                </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="national/2023/03/20/868909" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/154233_bangladesh_pratidin_helena.jpg?v=1679308723" alt="হেলেনা জাহাঙ্গীরসহ ৫ জনের দুই বছর কারাদণ্ড">
                            </span>
                            <span class="col-md-8">
                                <p>হেলেনা জাহাঙ্গীরসহ ৫ জনের দুই বছর কারাদণ্ড</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="international-news/2023/03/20/868908" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/153120_bangladesh_pratidin_Finland.jpg?v=1679308723" alt="বিশ্বের সবচেয়ে সুখী দেশ ফিনল্যান্ড, বাংলাদেশ ১১৮তম

">
                            </span>
                            <span class="col-md-8">
                                <p>বিশ্বের সবচেয়ে সুখী দেশ ফিনল্যান্ড, বাংলাদেশ ১১৮তম
                                </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="city-news/2023/03/20/868907" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/151743_bangladesh_pratidin_00000.jpg?v=1679308723" alt="জাতীয়করণের দাবিতে রাজধানীতে শিক্ষকদের মহাসমাবেশ">
                            </span>
                            <span class="col-md-8">
                                <p>জাতীয়করণের দাবিতে রাজধানীতে শিক্ষকদের মহাসমাবেশ</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="national/2023/03/20/868906" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/151124_bangladesh_pratidin_336011919_934682404354131_7566600058527976148_n.jpg?v=1679308723" alt="সুষ্ঠু নির্বাচন হলে আওয়ামী লীগ জামানত হারাবে: আমির খসরু">
                            </span>
                            <span class="col-md-8">
                                <p>সুষ্ঠু নির্বাচন হলে আওয়ামী লীগ জামানত হারাবে: আমির খসরু</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="national/2023/03/20/868905" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/150758_bangladesh_pratidin_md-news-pic.jpg?v=1679308723" alt="বসুন্ধরা এমডি'র সঙ্গে যুক্তরাজ্যের 'ক্রস পার্টি পার্লামেন্টারি ডেলিগেশন' টিমের সাক্ষাৎ

">
                            </span>
                            <span class="col-md-8">
                                <p>বসুন্ধরা এমডি'র সঙ্গে যুক্তরাজ্যের 'ক্রস পার্টি পার্লামেন্টারি ডেলিগেশন' টিমের সাক্ষাৎ
                                </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="national/2023/03/20/868904" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/150210_bangladesh_pratidin_fakhrul-2.jpg?v=1679308723" alt="নির্যাতন-নিপীড়ন যত বাড়বে প্রতিবাদের ঝড়ের গতি ততই তীব্র হবে : মির্জা ফখরুল

">
                            </span>
                            <span class="col-md-8">
                                <p>নির্যাতন-নিপীড়ন যত বাড়বে প্রতিবাদের ঝড়ের গতি ততই তীব্র হবে : মির্জা ফখরুল
                                </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="national/2023/03/20/868903" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/145411_bangladesh_pratidin_99.jpg?v=1679308723" alt="বীরত্বপূর্ণ ও সেবামূলক কাজ: সম্মাননা পেলেন ৮৫ র‍্যাব সদস্য">
                            </span>
                            <span class="col-md-8">
                                <p>বীরত্বপূর্ণ ও সেবামূলক কাজ: সম্মাননা পেলেন ৮৫ র‍্যাব সদস্য</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="country/2023/03/20/868902" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/145131_bangladesh_pratidin_fdsdfsf.jpg?v=1679308723" alt="বাগেরহাটে তাঁতী লীগের প্রতিষ্ঠাবার্ষিকী পালিত ">
                            </span>
                            <span class="col-md-8">
                                <p>বাগেরহাটে তাঁতী লীগের প্রতিষ্ঠাবার্ষিকী পালিত </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="probash-potro/2023/03/20/868901" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/144926_bangladesh_pratidin_IMG.jpg?v=1679308723" alt="সিডনি কাঁপালো ভবের হাটের বাউলরা">
                            </span>
                            <span class="col-md-8">
                                <p>সিডনি কাঁপালো ভবের হাটের বাউলরা</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="international-news/2023/03/20/868900" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/144729_bangladesh_pratidin_Bunker.jpg?v=1679308723" alt="যে কারণে বাসার নিচে বাংকার বানাতে চাচ্ছেন ইউরোপের বিত্তবানরা

">
                            </span>
                            <span class="col-md-8">
                                <p>যে কারণে বাসার নিচে বাংকার বানাতে চাচ্ছেন ইউরোপের বিত্তবানরা
                                </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="city-news/2023/03/20/868899" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/143756_bangladesh_pratidin_arrest-2.jpg?v=1679308723" alt="রাজধানীর পল্লবীতে চোরাই তিন মহিষসহ আটক ৫">
                            </span>
                            <span class="col-md-8">
                                <p>রাজধানীর পল্লবীতে চোরাই তিন মহিষসহ আটক ৫</p>
                            </span>
                        </a></li>
                    <li class="mb-2">
                        <a href="national/2023/03/20/868897" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/142347_bangladesh_pratidin_rain-news-pic.jpg?v=1679308723" alt="দেশের সব বিভাগে ভারি বৃষ্টিপাত হতে পারে">
                            </span>
                            <span class="col-md-8">
                                <p>দেশের সব বিভাগে ভারি বৃষ্টিপাত হতে পারে
                                </p>
                            </span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="chittagong-pratidin/2023/03/20/868896" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/142345_bangladesh_pratidin_Untitled-2.jpg?v=1679308723" alt="আরাভ খানের বিরুদ্ধে রেড নোটিশ দেওয়া হয়েছে : আইজিপি  ">
                            </span>
                            <span class="col-md-8">
                                <p>আরাভ খানের বিরুদ্ধে রেড নোটিশ দেওয়া হয়েছে : আইজিপি </p>
                            </span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="international-news/2023/03/20/868895" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/142327_bangladesh_pratidin_Imran-Khan.jpg?v=1679308723" alt="ইমরান খানকে সন্ত্রাসী বললেন পাকিস্তানের তথ্যমন্ত্রী">
                            </span>
                            <span class="col-md-8">
                                <p>ইমরান খানকে সন্ত্রাসী বললেন পাকিস্তানের তথ্যমন্ত্রী
                                </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="country/2023/03/20/868894" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/141613_bangladesh_pratidin_sdfdfsgd.jpg?v=1679308723" alt="নরসিংদীতে বঙ্গবন্ধুর দুর্লভ ছবি নিয়ে আলোকচিত্র প্রদর্শনী">
                            </span>
                            <span class="col-md-8">
                                <p>নরসিংদীতে বঙ্গবন্ধুর দুর্লভ ছবি নিয়ে আলোকচিত্র প্রদর্শনী</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="country/2023/03/20/868893" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/141301_bangladesh_pratidin_Gopalg.jpg?v=1679308723" alt="গোপালগঞ্জ সদরের ৬ ইউনিয়ন ও কোটালীপাড়া পৌরসভায় ভোটগ্রহণ চলছে">
                            </span>
                            <span class="col-md-8">
                                <p>গোপালগঞ্জ সদরের ৬ ইউনিয়ন ও কোটালীপাড়া পৌরসভায় ভোটগ্রহণ চলছে</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="sports/2023/03/20/868892" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/140625_bangladesh_pratidin_nz-news-pic.jpg?v=1679308723" alt="শ্রীলঙ্কাকে হোয়াইটওয়াশ করলো নিউজিল্যান্ড

">
                            </span>
                            <span class="col-md-8">
                                <p>শ্রীলঙ্কাকে হোয়াইটওয়াশ করলো নিউজিল্যান্ড
                                </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="features/2023/03/20/868891" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/140431_bangladesh_pratidin_1647.jpg?v=1679308723" alt="আজ আন্তর্জাতিক সুখ দিবস">
                            </span>
                            <span class="col-md-8">
                                <p>আজ আন্তর্জাতিক সুখ দিবস</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="country/2023/03/20/868890" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/140325_bangladesh_pratidin_Rangpur_sm_479176395.jpg?v=1679308723" alt="সাত মাস পর কবর থেকে তরুণীর লাশ উত্তোলন">
                            </span>
                            <span class="col-md-8">
                                <p>সাত মাস পর কবর থেকে তরুণীর লাশ উত্তোলন</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="chayer-desh/2023/03/20/868889" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/135129_bangladesh_pratidin_current-news-pic.jpg?v=1679308723" alt="সিলেটে বিদ্যুৎস্পৃষ্টে দুই নির্মাণ শ্রমিকের মৃত্যু

">
                            </span>
                            <span class="col-md-8">
                                <p>সিলেটে বিদ্যুৎস্পৃষ্টে দুই নির্মাণ শ্রমিকের মৃত্যু
                                </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="country/2023/03/20/868887" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/134432_bangladesh_pratidin_sdffdsdfs.jpg?v=1679308723" alt="চুয়াডাঙ্গায় তিন দিনব্যাপী কৃষিমেলা ">
                            </span>
                            <span class="col-md-8">
                                <p>চুয়াডাঙ্গায় তিন দিনব্যাপী কৃষিমেলা </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="sports/2023/03/20/868886" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/134046_bangladesh_pratidin_9999.jpg?v=1679308723" alt="টস হেরে ব্যাটিংয়ে বাংলাদেশ ">
                            </span>
                            <span class="col-md-8">
                                <p>টস হেরে ব্যাটিংয়ে বাংলাদেশ </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="city-news/2023/03/20/868885" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/133432_bangladesh_pratidin_dog.jpg?v=1679308723" alt="বীরত্বপূর্ণ কাজের জন্য পদক পেল র‍্যাবের কুকুর

">
                            </span>
                            <span class="col-md-8">
                                <p>বীরত্বপূর্ণ কাজের জন্য পদক পেল র‍্যাবের কুকুর
                                </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="city-news/2023/03/20/868884" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/133203_bangladesh_pratidin_Untitled-1.jpg?v=1679308723" alt="প্রেস ক্লাবের সামনে শিক্ষকদের মহাসমাবেশ">
                            </span>
                            <span class="col-md-8">
                                <p>প্রেস ক্লাবের সামনে শিক্ষকদের মহাসমাবেশ</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="country/2023/03/20/868883" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/132237_bangladesh_pratidin_sdfdsfgddg.jpg?v=1679308723" alt="কিশোরগঞ্জে ট্রেনে যাত্রীদের হামলায় লোকোমোটিভ মাস্টারসহ আহত ৪">
                            </span>
                            <span class="col-md-8">
                                <p>কিশোরগঞ্জে ট্রেনে যাত্রীদের হামলায় লোকোমোটিভ মাস্টারসহ আহত ৪</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="entertainment/2023/03/20/868881" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/135608_bangladesh_pratidin_Sabila-Noor_3.jpg?v=1679308723" alt="অভিনেত্রী সাবিলা নূরের অনন্য অর্জন

">
                            </span>
                            <span class="col-md-8">
                                <p>অভিনেত্রী সাবিলা নূরের অনন্য অর্জন
                                </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="national/2023/03/20/868880" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/130424_bangladesh_pratidin_Khaleda-Zia.jpg?v=1679308723" alt="কয়লাখনি দুর্নীতি মামলায় খালেদা জিয়ার বিরুদ্ধে অভিযোগ গঠন পেছালো

">
                            </span>
                            <span class="col-md-8">
                                <p>কয়লাখনি দুর্নীতি মামলায় খালেদা জিয়ার বিরুদ্ধে অভিযোগ গঠন পেছালো
                                </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="country/2023/03/20/868879" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/130400_bangladesh_pratidin_445555.jpg?v=1679308723" alt="মোরেলগঞ্জে কৃষি প্রযুক্তি মেলা শুরু">
                            </span>
                            <span class="col-md-8">
                                <p>মোরেলগঞ্জে কৃষি প্রযুক্তি মেলা শুরু</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="international-news/2023/03/20/868878" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/125251_bangladesh_pratidin_london.jpg?v=1679308723" alt="রমজানের আগমনে বর্ণিল সাজে লন্ডন

">
                            </span>
                            <span class="col-md-8">
                                <p>রমজানের আগমনে বর্ণিল সাজে লন্ডন
                                </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="city-news/2023/03/20/868877" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/124825_bangladesh_pratidin_dead_body_bdp.jpg?v=1679308723" alt="রাজধানীতে নির্মাণাধীন ভবন থেকে পড়ে শ্রমিকের মৃত্যু">
                            </span>
                            <span class="col-md-8">
                                <p>রাজধানীতে নির্মাণাধীন ভবন থেকে পড়ে শ্রমিকের মৃত্যু</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="national/2023/03/20/868876" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/122753_bangladesh_pratidin_sheikh-hasina_(file-photo).jpg?v=1679308723" alt="আমাদের নতুন নতুন বাজার খুঁজতে হবে : প্রধানমন্ত্রী

">
                            </span>
                            <span class="col-md-8">
                                <p>আমাদের নতুন নতুন বাজার খুঁজতে হবে : প্রধানমন্ত্রী
                                </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="sports/2023/03/20/868875" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/122538_bangladesh_pratidin_6d4.jpg?v=1679308723" alt="আর্জেন্টিনার জালে ১৩ গোল, কোপা'র শিরোপা জয় ব্রাজিলের">
                            </span>
                            <span class="col-md-8">
                                <p>আর্জেন্টিনার জালে ১৩ গোল, কোপা'র শিরোপা জয় ব্রাজিলের</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="national/2023/03/20/868873" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/120350_bangladesh_pratidin_doller.jpg?v=1679308723" alt="মার্চের ১৭ দিনে রেমিট্যান্স সাড়ে ১২ হাজার কোটি টাকা

">
                            </span>
                            <span class="col-md-8">
                                <p>মার্চের ১৭ দিনে রেমিট্যান্স সাড়ে ১২ হাজার কোটি টাকা
                                </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="country/2023/03/20/868872" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/115409_bangladesh_pratidin_sgdgsgds.jpg?v=1679308723" alt="ডিম দিয়েছে ঘড়িয়াল">
                            </span>
                            <span class="col-md-8">
                                <p>ডিম দিয়েছে ঘড়িয়াল</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="city-news/2023/03/20/868871" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/115151_bangladesh_pratidin_arrest.jpg?v=1679308723" alt="ইউটিউব দেখে শেখেন মোটরসাইকেল চুরি, ঢাবির বহিষ্কৃত শিক্ষার্থীসহ গ্রেফতার ২

">
                            </span>
                            <span class="col-md-8">
                                <p>ইউটিউব দেখে শেখেন মোটরসাইকেল চুরি, ঢাবির বহিষ্কৃত শিক্ষার্থীসহ গ্রেফতার ২
                                </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="country/2023/03/20/868870" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/114617_bangladesh_pratidin_25.jpg?v=1679308723" alt="বগুড়ায় বাসের ধাক্কায় ভ্যানচালক নিহত">
                            </span>
                            <span class="col-md-8">
                                <p>বগুড়ায় বাসের ধাক্কায় ভ্যানচালক নিহত</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="country/2023/03/20/868869" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/113539_bangladesh_pratidin_estgd.jpg?v=1679308723" alt="এক্সপ্রেসওয়েতে বাস দুর্ঘটনায় পরিবহন মালিকের নামে মামলা
">
                            </span>
                            <span class="col-md-8">
                                <p>এক্সপ্রেসওয়েতে বাস দুর্ঘটনায় পরিবহন মালিকের নামে মামলা
                                </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="international-news/2023/03/20/868868" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/112034_bangladesh_pratidin_Kim-Jong-Un.jpg?v=1679308723" alt="যুক্তরাষ্ট্র ও দক্ষিণ কোরিয়ার বিরুদ্ধে পারমাণবিক হামলার প্রস্তুতির নির্দেশ কিমের

">
                            </span>
                            <span class="col-md-8">
                                <p>যুক্তরাষ্ট্র ও দক্ষিণ কোরিয়ার বিরুদ্ধে পারমাণবিক হামলার প্রস্তুতির নির্দেশ কিমের
                                </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="probash-potro/2023/03/20/868867" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/111258_bangladesh_pratidin_dfsgdgd.jpg?v=1679308723" alt="কানাডায় বঙ্গবন্ধু ফাউন্ডেশনের উদ্যোগে বঙ্গবন্ধুর জন্মবার্ষিকী পালিত">
                            </span>
                            <span class="col-md-8">
                                <p>কানাডায় বঙ্গবন্ধু ফাউন্ডেশনের উদ্যোগে বঙ্গবন্ধুর জন্মবার্ষিকী পালিত</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="tech-world/2023/03/20/868866" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/110027_bangladesh_pratidin_TikTok.jpg?v=1679308723" alt="ব্রিটিশ মন্ত্রীদের অফিশিয়াল ফোনে নিষিদ্ধ টিকটক

">
                            </span>
                            <span class="col-md-8">
                                <p>ব্রিটিশ মন্ত্রীদের অফিশিয়াল ফোনে নিষিদ্ধ টিকটক
                                </p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="sports/2023/03/20/868865" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/105802_bangladesh_pratidin_tttre.jpg?v=1679308723" alt="সিরিজের দ্বিতীয় ওয়ানডে: আজও অনিশ্চিত মিরাজ">
                            </span>
                            <span class="col-md-8">
                                <p>সিরিজের দ্বিতীয় ওয়ানডে: আজও অনিশ্চিত মিরাজ</p>
                            </span>
                        </a></li>
                    <li class="mb-2"><a href="campus-online/2023/03/20/868864" class="row">
                            <span class="col-md-4 pe-0">
                                <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/105040_bangladesh_pratidin_sdgsgds.jpg?v=1679308723" alt="কুবিতে আন্তঃবিশ্ববিদ্যালয় নাট্য উৎসব ">
                            </span>
                            <span class="col-md-8">
                                <p>কুবিতে আন্তঃবিশ্ববিদ্যালয় নাট্য উৎসব </p>
                            </span>
                        </a></li>
                </ul>
            </div>
            <div data-position="desktop-details-right-after-latest" class="m-0 p-0">
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
                </ul>
            </div>
            <div data-position="desktop-details-right-after-most-read" class="m-0 p-0">
                <div class="ads bg-light mb-2 d-flex justify-content-center">
                    <div class="ad_cl-21" data-id="21">
                        <div id='div-gpt-ad-1631794319734-0' style='min-width: 300px; min-height: 250px;'>
                            <script>
                                googletag.cmd.push(function() {
                                    googletag.display('div-gpt-ad-1631794319734-0');
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="ads bg-light mb-2 d-flex justify-content-center">
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
                </div>
                <div class="ads bg-light mb-2 d-flex justify-content-center">
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
                </div>
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
                </ul>
            </div>
            <div data-position="desktop-details-right-after-print-most-read" class="m-0 p-0">
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
            </div>
        </div>
    </div>
</div>
<div id="printerDiv" style="display:none"></div>
<script>
    function printPage() {
        var div = document.getElementById("printerDiv");
        div.innerHTML = '<iframe src="./home/printnews/868881/2023-03-20" onload="this.contentWindow.print();"></iframe>';
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
