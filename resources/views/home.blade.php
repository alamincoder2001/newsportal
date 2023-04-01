@extends("layouts.frontend_master")

@section("title") {{$setting->company_name}} @endsection

@section("content")

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
                    <div class="carousel-item active">
                        <a href="first-page/2023/03/20/868809">
                            <img src="{{asset('frontend')}}/assets/news_images/thumbnails/Bd-Pratidin-20-03-23-F-05.png" class="d-block w-100" alt="কে এই আরাভ খান">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>কে এই আরাভ খান</h5>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item ">
                        <a href="last-page/2023/03/20/868825">
                            <img src="{{asset('frontend')}}/assets/news_images/thumbnails/Bd-Pratidin-20-03-23-F-12.png" class="d-block w-100" alt="অস্ট্রেলিয়ার বাণিজ্যে চীনের বিকল্প বাংলাদেশ">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>অস্ট্রেলিয়ার বাণিজ্যে চীনের বিকল্প বাংলাদেশ</h5>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item ">
                        <a href="last-page/2023/03/20/868825">
                            <img src="{{asset('frontend')}}/assets/news_images/thumbnails/Bd-Pratidin-20-03-23-F-12.png" class="d-block w-100" alt="অস্ট্রেলিয়ার বাণিজ্যে চীনের বিকল্প বাংলাদেশ">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>অস্ট্রেলিয়ার বাণিজ্যে চীনের বিকল্প বাংলাদেশ</h5>
                            </div>
                        </a>
                    </div>
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
                <h1 class="mb-0 pb-0 d-block"><a href="./online/focus"><span class="blink"></span><span>ফোকাস</span> <i class="bi bi-chevron-right"></i></a></h1>
                <ul class="m-0">
                    <li class="bi bi-caret-right-fill"><a href="sports/2023/03/20/868840">ছিলেন মেসি-এমবাপ্পে, তবুও লজ্জায় ডুবল পিএসজি</a></li>
                    <li class="bi bi-caret-right-fill"><a href="last-page/2023/03/20/868829">হেলিকপ্টার ও হাতি নিয়ে বিয়ে</a></li>
                    <li class="bi bi-caret-right-fill"><a href="last-page/2023/03/20/868827">দেশে ফিরলেন মাহির স্বামী রকিব
                        </a></li>
                    <li class="bi bi-caret-right-fill"><a href="first-page/2023/03/20/868819">তিস্তা নিয়ে ভারতের কাছে জানতে চেয়েছে ঢাকা</a></li>
                    <li class="bi bi-caret-right-fill"><a href="first-page/2023/03/20/868817">আমজাদের এক হাজার ব্যাংক হিসাব জব্দ</a></li>
                    <li class="bi bi-caret-right-fill"><a href="editorial/2023/03/20/868774">প্রযুক্তির বিকৃত ব্যবহার ধ্বংস করছে পারিবারিক বন্ধন</a></li>
                    <li class="bi bi-caret-right-fill"><a href="editorial/2023/03/20/868768">একাত্তরের নভেম্বরেই বিধ্বস্ত হয়ে পড়ে পাকিস্তানিরা</a></li>
                    <li class="bi bi-caret-right-fill"><a href="kolkata/2023/03/19/868750">এবার অমর্ত্য সেনের বিরুদ্ধে উচ্ছেদ আইনে মামলার হুঁশিয়ারি বিশ্বভারতীর </a></li>
                    <li class="bi bi-caret-right-fill"><a href="first-page/2023/03/20/868819">তিস্তা নিয়ে ভারতের কাছে জানতে চেয়েছে ঢাকা</a></li>
                    <li class="bi bi-caret-right-fill"><a href="first-page/2023/03/20/868817">আমজাদের এক হাজার ব্যাংক হিসাব জব্দ</a></li>
                    <li class="bi bi-caret-right-fill"><a href="editorial/2023/03/20/868774">প্রযুক্তির বিকৃত ব্যবহার ধ্বংস করছে পারিবারিক বন্ধন</a></li>
                    <li class="bi bi-caret-right-fill"><a href="editorial/2023/03/20/868768">একাত্তরের নভেম্বরেই বিধ্বস্ত হয়ে পড়ে পাকিস্তানিরা</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3">
            <div class="news-tab-area latest-news-top">
                <h2 class="title"><span class="blink"></span> সর্বশেষ খবর</h2>
                <div class="tab-content mt-3">
                    <ul>
                        <li>
                            <a href="international-news/2023/03/20/868861" class="row">
                                <p class="col-md-8">
                                    <strong>যুক্তরাষ্ট্রে আরও ১৮৬ ব্যাংক পতনের ঝুঁকিতে
                                    </strong>
                                    <span><i class="bi bi-stopwatch"></i> ৩ মিনিট আগে | <small>আন্তর্জাতিক খবর</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/102101_bangladesh_pratidin_svb.jpg?v=1679286286" alt="যুক্তরাষ্ট্রে আরও ১৮৬ ব্যাংক পতনের ঝুঁকিতে ">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="city-news/2023/03/20/868860" class="row">
                                <p class="col-md-8">
                                    <strong>মাদকবিরোধী পুলিশি অভিযানে গ্রেফতার ৪২</strong>
                                    <span><i class="bi bi-stopwatch"></i> ৭ মিনিট আগে | <small>নগর জীবন</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/101710_bangladesh_pratidin_greftar_2.jpg?v=1679286286" alt="মাদকবিরোধী পুলিশি অভিযানে গ্রেফতার ৪২">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="city-news/2023/03/20/868859" class="row">
                                <p class="col-md-8">
                                    <strong>বৃষ্টিতে ঢাকায় দূষণ কমে বায়ুমানের উন্নতি</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৭ মিনিট আগে | <small>নগর জীবন</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/100745_bangladesh_pratidin_670.jpg?v=1679286286" alt="বৃষ্টিতে ঢাকায় দূষণ কমে বায়ুমানের উন্নতি">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="international-news/2023/03/20/868858" class="row">
                                <p class="col-md-8">
                                    <strong>ইরানের প্রেসিডেন্টকে সৌদি আরবে সফরের আমন্ত্রণ বাদশাহ সালমানের
                                    </strong>
                                    <span><i class="bi bi-stopwatch"></i> ২৭ মিনিট আগে | <small>আন্তর্জাতিক খবর</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/095728_bangladesh_pratidin_Raisi.jpg?v=1679286286" alt="ইরানের প্রেসিডেন্টকে সৌদি আরবে সফরের আমন্ত্রণ বাদশাহ সালমানের ">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="international-news/2023/03/20/868857" class="row">
                                <p class="col-md-8">
                                    <strong>এবার ক্রেডিট সুইস ব্যাংক দেউলিয়া হওয়া নিয়ে আতঙ্ক</strong>
                                    <span><i class="bi bi-stopwatch"></i> ৩৫ মিনিট আগে | <small>আন্তর্জাতিক খবর</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/094908_bangladesh_pratidin_77.jpg?v=1679286286" alt="এবার ক্রেডিট সুইস ব্যাংক দেউলিয়া হওয়া নিয়ে আতঙ্ক">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="national/2023/03/20/868856" class="row">
                                <p class="col-md-8">
                                    <strong>বঙ্গভবনে রাষ্ট্রপতির সঙ্গে সৌদি রাষ্ট্রদূতের সৌজন্য সাক্ষাৎ</strong>
                                    <span><i class="bi bi-stopwatch"></i> ৫৮ মিনিট আগে | <small>জাতীয়</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/092547_bangladesh_pratidin_0000777.jpg?v=1679286286" alt="বঙ্গভবনে রাষ্ট্রপতির সঙ্গে সৌদি রাষ্ট্রদূতের সৌজন্য সাক্ষাৎ">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="sports/2023/03/20/868854" class="row">
                                <p class="col-md-8">
                                    <strong>
                                        পয়েন্ট তালিকায় শীর্ষে ফেরা হলো না বায়ার্নের </strong>
                                    <span><i class="bi bi-stopwatch"></i> ১ ঘন্টা আগে | <small>মাঠে ময়দানে</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/085343_bangladesh_pratidin_000ure.jpg?v=1679286286" alt="পয়েন্ট তালিকায় শীর্ষে ফেরা হলো না বায়ার্নের ">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="sports/2023/03/20/868853" class="row">
                                <p class="col-md-8">
                                    <strong>ঘরের মাঠেও জুভেন্টাসে ধরাশায়ী ইন্টার</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১ ঘন্টা আগে | <small>মাঠে ময়দানে</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/082955_bangladesh_pratidin_14.jpg?v=1679286286" alt="ঘরের মাঠেও জুভেন্টাসে ধরাশায়ী ইন্টার">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="international-news/2023/03/20/868852" class="row">
                                <p class="col-md-8">
                                    <strong>যে কারণে চীনকে ধন্যবাদ দিলেন পুতিন</strong>
                                    <span><i class="bi bi-stopwatch"></i> ৪ ঘন্টা আগে | <small>আন্তর্জাতিক খবর</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/053658_bangladesh_pratidin_BD-pratidin--7.jpg?v=1679286286" alt="যে কারণে চীনকে ধন্যবাদ দিলেন পুতিন">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="sports/2023/03/20/868851" class="row">
                                <p class="col-md-8">
                                    <strong>এল ক্ল্যাসিকোয় বাজিমাত, ফের বার্সেলোনার রিয়াল বধ</strong>
                                    <span><i class="bi bi-stopwatch"></i> ৫ ঘন্টা আগে | <small>মাঠে ময়দানে</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/042602_bangladesh_pratidin_BD-pratidin--6.jpg?v=1679286286" alt="এল ক্ল্যাসিকোয় বাজিমাত, ফের বার্সেলোনার রিয়াল বধ">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="sports/2023/03/20/868840" class="row">
                                <p class="col-md-8">
                                    <strong>ছিলেন মেসি-এমবাপ্পে, তবুও লজ্জায় ডুবল পিএসজি</strong>
                                    <span><i class="bi bi-stopwatch"></i> ৯ ঘন্টা আগে | <small>মাঠে ময়দানে</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/011941_bangladesh_pratidin_BD-pratidin--3.jpg?v=1679286286" alt="ছিলেন মেসি-এমবাপ্পে, তবুও লজ্জায় ডুবল পিএসজি">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="international-news/2023/03/20/868839" class="row">
                                <p class="col-md-8">
                                    <strong>মারিওপোল সফর, কী দেখলেন পুতিন?</strong>
                                    <span><i class="bi bi-stopwatch"></i> ৯ ঘন্টা আগে | <small>আন্তর্জাতিক খবর</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/005341_bangladesh_pratidin_BD-pratidin--2.jpg?v=1679286286" alt="মারিওপোল সফর, কী দেখলেন পুতিন?">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="country/2023/03/20/868823" class="row">
                                <p class="col-md-8">
                                    <strong>পর্যটককে ছুরিকাঘাত করে ছিনতাই, ডিবির জালে পাঁচ ছিনতাইকারী</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১০ ঘন্টা আগে | <small>দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/001358_bangladesh_pratidin_BD-pratidin--1.jpg?v=1679286286" alt="পর্যটককে ছুরিকাঘাত করে ছিনতাই,  ডিবির জালে পাঁচ ছিনতাইকারী">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="country/2023/03/19/868760" class="row">
                                <p class="col-md-8">
                                    <strong>সিদ্ধিরগঞ্জে ট্যাংকলরী শ্রমিক ইউনিয়নের উদ্যোগে বঙ্গবন্ধুর জন্মবার্ষিকী</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১১ ঘন্টা আগে | <small>দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/225454_bangladesh_pratidin_sid.jpg?v=1679286286" alt="সিদ্ধিরগঞ্জে ট্যাংকলরী শ্রমিক ইউনিয়নের উদ্যোগে বঙ্গবন্ধুর জন্মবার্ষিকী">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="agriculture-nature/2023/03/19/868759" class="row">
                                <p class="col-md-8">
                                    <strong>এবার একলাখ মেট্রিক টন আলু রপ্তানির লক্ষ্যমাত্রা</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১১ ঘন্টা আগে | <small>কৃষি ও প্রকৃতি</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/223714_bangladesh_pratidin_rangpur-alu-photo-19-3-23.jpg?v=1679286286" alt="এবার একলাখ মেট্রিক টন আলু রপ্তানির লক্ষ্যমাত্রা">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="country/2023/03/19/868758" class="row">
                                <p class="col-md-8">
                                    <strong>ঝালকাঠিতে ২ মাদক ব্যবসায়ী আটক </strong>
                                    <span><i class="bi bi-stopwatch"></i> ১১ ঘন্টা আগে | <small>দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/223546_bangladesh_pratidin_dsfdfsdsdf.jpg?v=1679286286" alt="ঝালকাঠিতে ২ মাদক ব্যবসায়ী আটক  ">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="national/2023/03/19/868757" class="row">
                                <p class="col-md-8">
                                    <strong>রমজানে কেউ যেন খাদ্য মজুতদারি করতে না পারে : প্রধানমন্ত্রী</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১১ ঘন্টা আগে | <small>জাতীয়</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/223506_bangladesh_pratidin_sheikh-hasina-(file-photo).jpg?v=1679286286" alt="রমজানে কেউ যেন খাদ্য মজুতদারি করতে না পারে : প্রধানমন্ত্রী">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="country/2023/03/19/868756" class="row">
                                <p class="col-md-8">
                                    <strong>লোকালয় থেকে উদ্ধার করা সাপ সুন্দরবনে অবমুক্ত</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১১ ঘন্টা আগে | <small>দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/223254_bangladesh_pratidin_sdfdsfsdfdfsgd.jpg?v=1679286286" alt="লোকালয় থেকে উদ্ধার করা সাপ সুন্দরবনে অবমুক্ত">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="country/2023/03/19/868755" class="row">
                                <p class="col-md-8">
                                    <strong>ওড়াকান্দিতে ৩ দিনব্যাপী বারুনী মেলা</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১১ ঘন্টা আগে | <small>দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/222841_bangladesh_pratidin_sdfdfsdffds.jpg?v=1679286286" alt="ওড়াকান্দিতে ৩ দিনব্যাপী বারুনী মেলা">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="international-news/2023/03/19/868754" class="row">
                                <p class="col-md-8">
                                    <strong>এক সপ্তাহে চারবার ক্ষেপণাস্ত্র নিক্ষেপ উত্তর কোরিয়ার</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১১ ঘন্টা আগে | <small>আন্তর্জাতিক খবর</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/222821_bangladesh_pratidin_missile-bdp.jpg?v=1679286286" alt="এক সপ্তাহে চারবার ক্ষেপণাস্ত্র নিক্ষেপ উত্তর কোরিয়ার">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="country/2023/03/19/868753" class="row">
                                <p class="col-md-8">
                                    <strong>মেহেরপুরে নবনির্মিত একাডেমিক ভবন উদ্বোধন </strong>
                                    <span><i class="bi bi-stopwatch"></i> ১২ ঘন্টা আগে | <small>দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/222316_bangladesh_pratidin_fsdfdssdfdsf.jpg?v=1679286286" alt="মেহেরপুরে নবনির্মিত একাডেমিক ভবন উদ্বোধন  ">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="entertainment/2023/03/19/868752" class="row">
                                <p class="col-md-8">
                                    <strong>নিজেকে বাংলাদেশি মনে করি: রাজা সেন</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১২ ঘন্টা আগে | <small>শোবিজ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/222015_bangladesh_pratidin_raza.jpg?v=1679286286" alt="নিজেকে বাংলাদেশি মনে করি: রাজা সেন">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="chittagong-pratidin/2023/03/19/868751" class="row">
                                <p class="col-md-8">
                                    <strong>চক্ষু গবেষণায় বাংলাদেশের সর্বোচ্চ সম্মাননা পেলেন চট্টগ্রামের ডা. আসিফ</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১২ ঘন্টা আগে | <small>চট্টগ্রাম প্রতিদিন</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/221202_bangladesh_pratidin_Ctg-Pic--01-(19_03.jpg?v=1679286286" alt="চক্ষু গবেষণায় বাংলাদেশের সর্বোচ্চ সম্মাননা পেলেন চট্টগ্রামের ডা. আসিফ">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="kolkata/2023/03/19/868750" class="row">
                                <p class="col-md-8">
                                    <strong>এবার অমর্ত্য সেনের বিরুদ্ধে উচ্ছেদ আইনে মামলার হুঁশিয়ারি বিশ্বভারতীর </strong>
                                    <span><i class="bi bi-stopwatch"></i> ১২ ঘন্টা আগে | <small>ওপার বাংলা</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/220230_bangladesh_pratidin_amorto.jpg?v=1679286286" alt="এবার অমর্ত্য সেনের বিরুদ্ধে উচ্ছেদ আইনে মামলার হুঁশিয়ারি বিশ্বভারতীর ">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="country/2023/03/19/868749" class="row">
                                <p class="col-md-8">
                                    <strong>সড়ক দুর্ঘটনায় দুই মোটরসাইকেল আরোহী নিহত</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১২ ঘন্টা আগে | <small>দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/214149_bangladesh_pratidin_accident-2.jpg?v=1679286286" alt="সড়ক দুর্ঘটনায় দুই মোটরসাইকেল আরোহী নিহত">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="chittagong-pratidin/2023/03/19/868748" class="row">
                                <p class="col-md-8">
                                    <strong>চট্টগ্রামে আউটার স্টেডিয়ামের অবৈধ স্থাপনা উচ্ছেদ</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১২ ঘন্টা আগে | <small>চট্টগ্রাম প্রতিদিন</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/213949_bangladesh_pratidin_ctg_dhaka_642.jpg?v=1679286286" alt="চট্টগ্রামে আউটার স্টেডিয়ামের অবৈধ স্থাপনা উচ্ছেদ">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="entertainment/2023/03/19/868747" class="row">
                                <p class="col-md-8">
                                    <strong>ডিবি কার্যালয় থেকে বেরিয়ে যা বললেন শাকিব খান</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৩ ঘন্টা আগে | <small>শোবিজ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/212034_bangladesh_pratidin_shakib-khan-bdp.jpg?v=1679286286" alt="ডিবি কার্যালয় থেকে বেরিয়ে যা বললেন শাকিব খান">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="chittagong-pratidin/2023/03/19/868746" class="row">
                                <p class="col-md-8">
                                    <strong>চিকিৎসককে ধর্ষণচেষ্টায় সিএনজি চালকের যাবজ্জীবন</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৩ ঘন্টা আগে | <small>চট্টগ্রাম প্রতিদিন</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/210551_bangladesh_pratidin_court-jabojjibon.jpg?v=1679286286" alt="চিকিৎসককে ধর্ষণচেষ্টায় সিএনজি চালকের যাবজ্জীবন">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="chayer-desh/2023/03/19/868745" class="row">
                                <p class="col-md-8">
                                    <strong>সিলেটে আরও ৬০০ পরিবার পাচ্ছেন ঘর</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৩ ঘন্টা আগে | <small>চায়ের দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/210135_bangladesh_pratidin_fdsdfsdsf.jpg?v=1679286286" alt="সিলেটে আরও ৬০০ পরিবার পাচ্ছেন ঘর">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="city-news/2023/03/19/868744" class="row">
                                <p class="col-md-8">
                                    <strong>ব্যক্তিগত সমস্যা নিয়ে এসেছিলেন শাকিব, খতিয়ে দেখবে ডিবি : হারুন</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৩ ঘন্টা আগে | <small>নগর জীবন</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/210038_bangladesh_pratidin_harun-bdp.jpg?v=1679286286" alt="ব্যক্তিগত সমস্যা নিয়ে এসেছিলেন শাকিব, খতিয়ে দেখবে ডিবি : হারুন">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="country/2023/03/19/868743" class="row">
                                <p class="col-md-8">
                                    <strong>রংপুরে ধর্ষণ ও হত্যা মামলার আসামি গ্রেফতার</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৩ ঘন্টা আগে | <small>দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/205110_bangladesh_pratidin_dsfdsfdsfdfs.jpg?v=1679286286" alt="রংপুরে ধর্ষণ ও হত্যা মামলার আসামি গ্রেফতার">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="chittagong-pratidin/2023/03/19/868742" class="row">
                                <p class="col-md-8">
                                    <strong>চট্টগ্রাম-৮ আসনে আওয়ামী লীগের মনোনয়ন বিক্রি শুরু</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৩ ঘন্টা আগে | <small>চট্টগ্রাম প্রতিদিন</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/204706_bangladesh_pratidin_a_lig.jpg?v=1679286286" alt="চট্টগ্রাম-৮ আসনে আওয়ামী লীগের মনোনয়ন বিক্রি শুরু">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="national/2023/03/19/868741" class="row">
                                <p class="col-md-8">
                                    <strong>গতি ফিরছে প্রবাসী আয়ে, বাড়ছে রেমিট্যান্স</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৩ ঘন্টা আগে | <small>জাতীয়</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/203301_bangladesh_pratidin_doller.jpg?v=1679286286" alt="গতি ফিরছে প্রবাসী আয়ে, বাড়ছে রেমিট্যান্স">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="country/2023/03/19/868740" class="row">
                                <p class="col-md-8">
                                    <strong>দাউদকান্দিতে মুক্তিপণ না দেওয়ায় প্রথম শ্রেণির ছাত্রীকে হত্যা</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৩ ঘন্টা আগে | <small>দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/202455_bangladesh_pratidin_las_udhar_2.jpg?v=1679286286" alt="দাউদকান্দিতে মুক্তিপণ না দেওয়ায় প্রথম শ্রেণির ছাত্রীকে হত্যা">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="country/2023/03/19/868739" class="row">
                                <p class="col-md-8">
                                    <strong>ম্যাজিস্ট্রেট আসার খবরে বিয়ের আসর থেকে পালালেন বর </strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৪ ঘন্টা আগে | <small>দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/201134_bangladesh_pratidin_ballo-bia-2.jpg?v=1679286286" alt="ম্যাজিস্ট্রেট আসার খবরে বিয়ের আসর থেকে পালালেন বর ">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="country/2023/03/19/868738" class="row">
                                <p class="col-md-8">
                                    <strong>বন্ধুকে ছুরিকাঘাতে হত্যা, গ্রেফতার ১</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৪ ঘন্টা আগে | <small>দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/200213_bangladesh_pratidin_greftar_3.jpg?v=1679286286" alt="বন্ধুকে ছুরিকাঘাতে হত্যা, গ্রেফতার ১">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="country/2023/03/19/868737" class="row">
                                <p class="col-md-8">
                                    <strong>বগুড়ায় ঘর পাচ্ছেন এক হাজার ৩৩০ পরিবার</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৪ ঘন্টা আগে | <small>দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/195828_bangladesh_pratidin_sdffsddsg.jpg?v=1679286286" alt="বগুড়ায় ঘর পাচ্ছেন এক হাজার ৩৩০ পরিবার">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="country/2023/03/19/868736" class="row">
                                <p class="col-md-8">
                                    <strong>চুয়াডাঙ্গায় ৭০০ গ্রাম হেরোইন উদ্ধার</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৪ ঘন্টা আগে | <small>দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/195630_bangladesh_pratidin_dfsfdsdsffds.jpg?v=1679286286" alt="চুয়াডাঙ্গায় ৭০০ গ্রাম হেরোইন উদ্ধার">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="country/2023/03/19/868735" class="row">
                                <p class="col-md-8">
                                    <strong>বঙ্গবন্ধু রেল সেতুর মালামাল নিয়ে মোংলা বন্দরে বিদেশী জাহাজ </strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৪ ঘন্টা আগে | <small>দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/195553_bangladesh_pratidin_Untitled-3.jpg?v=1679286286" alt="বঙ্গবন্ধু রেল সেতুর মালামাল নিয়ে মোংলা বন্দরে বিদেশী জাহাজ ">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="country/2023/03/19/868734" class="row">
                                <p class="col-md-8">
                                    <strong>দিনাজপুর চেম্বার অব কমার্সের নির্বাচনে ফলাফল ঘোষণা</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৪ ঘন্টা আগে | <small>দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/194932_bangladesh_pratidin_dinajpur_district_0_44518.jpg?v=1679286286" alt="দিনাজপুর চেম্বার অব কমার্সের নির্বাচনে ফলাফল ঘোষণা">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="country/2023/03/19/868733" class="row">
                                <p class="col-md-8">
                                    <strong>সমুদ্র উত্তাল থাকায় সেন্টমার্টিন নৌ পথে জাহাজ চলাচল বন্ধ</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৪ ঘন্টা আগে | <small>দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/193706_bangladesh_pratidin_bbbb.jpg?v=1679286286" alt="সমুদ্র উত্তাল থাকায় সেন্টমার্টিন নৌ পথে জাহাজ চলাচল বন্ধ">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="country/2023/03/19/868732" class="row">
                                <p class="col-md-8">
                                    <strong>মাদারীপুরে বাস দুর্ঘটনা; সার্টিফিকেট আনা হলো না আফসানার</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৪ ঘন্টা আগে | <small>দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/192841_bangladesh_pratidin_Gopalganj-Road-Accident-Photo-02(19_03.jpg?v=1679286286" alt="মাদারীপুরে বাস দুর্ঘটনা; সার্টিফিকেট আনা হলো না আফসানার">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="country/2023/03/19/868731" class="row">
                                <p class="col-md-8">
                                    <strong>নাটোরে বারুণী গঙ্গা স্নান অনুষ্ঠিত</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৪ ঘন্টা আগে | <small>দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/192502_bangladesh_pratidin_bbb.jpg?v=1679286286" alt="নাটোরে বারুণী গঙ্গা স্নান অনুষ্ঠিত">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="country/2023/03/19/868730" class="row">
                                <p class="col-md-8">
                                    <strong>গুচ্ছে অংশ নেবে না ইবি</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৫ ঘন্টা আগে | <small>দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/191807_bangladesh_pratidin_b.jpg?v=1679286286" alt="গুচ্ছে অংশ নেবে না ইবি">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="country/2023/03/19/868729" class="row">
                                <p class="col-md-8">
                                    <strong>ধর্ষণের পর হত্যা, কিশোরীর মরদেহ মিলল নদীতে </strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৫ ঘন্টা আগে | <small>দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/191727_bangladesh_pratidin_rape-2.jpg?v=1679286286" alt="ধর্ষণের পর হত্যা, কিশোরীর মরদেহ মিলল নদীতে ">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="national/2023/03/19/868728" class="row">
                                <p class="col-md-8">
                                    <strong>হজ ফ্লাইট শুরু ২১ মে</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৫ ঘন্টা আগে | <small>জাতীয়</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/191035_bangladesh_pratidin_hajj-flights-bdp.jpg?v=1679286286" alt="হজ ফ্লাইট শুরু ২১ মে">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="kolkata/2023/03/19/868727" class="row">
                                <p class="col-md-8">
                                    <strong>পেট্রাপোল স্থলবন্দর সীমান্তে ট্রাক থেকে ৪০ স্বর্ণের বার উদ্ধার</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৫ ঘন্টা আগে | <small>ওপার বাংলা</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/191012_bangladesh_pratidin_Untitled-2.jpg?v=1679286286" alt="পেট্রাপোল স্থলবন্দর সীমান্তে ট্রাক থেকে ৪০ স্বর্ণের বার উদ্ধার">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="city-news/2023/03/19/868726" class="row">
                                <p class="col-md-8">
                                    <strong>বরিশালে ইমারত নির্মাণ শ্রমিক
                                        ইউনিয়নের মানববন্ধন ও বিক্ষোভ মিছিল</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৫ ঘন্টা আগে | <small>নগর জীবন</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/190747_bangladesh_pratidin_bbbb.jpg?v=1679286286" alt="বরিশালে ইমারত নির্মাণ শ্রমিক ইউনিয়নের মানববন্ধন ও বিক্ষোভ মিছিল">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="national/2023/03/19/868725" class="row">
                                <p class="col-md-8">
                                    <strong>চালকদের অবহেলা ও অসতর্কতা সড়ক দুর্ঘটনার অন্যতম কারণ: ফখরুল</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৫ ঘন্টা আগে | <small>জাতীয়</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/190511_bangladesh_pratidin_r.jpg?v=1679286286" alt="চালকদের অবহেলা ও অসতর্কতা সড়ক দুর্ঘটনার অন্যতম কারণ: ফখরুল">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="national/2023/03/19/868724" class="row">
                                <p class="col-md-8">
                                    <strong>রমজানে জাল নোট নিয়ে সতর্কতা </strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৫ ঘন্টা আগে | <small>জাতীয়</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/184856_bangladesh_pratidin_bangladesh-bank-bdp-new.jpg?v=1679286286" alt="রমজানে জাল নোট নিয়ে সতর্কতা ">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="sports/2023/03/19/868722" class="row">
                                <p class="col-md-8">
                                    <strong>৩৭ ওভারেই শেষ ১০০ ওভারের খেলা, ১০ উইকেটে হারল ভারত</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৫ ঘন্টা আগে | <small>মাঠে ময়দানে</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/184116_bangladesh_pratidin_virat-bdp.jpg?v=1679286286" alt="৩৭ ওভারেই শেষ ১০০ ওভারের খেলা, ১০ উইকেটে হারল ভারত">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="campus-online/2023/03/19/868721" class="row">
                                <p class="col-md-8">
                                    <strong>ঢাবির রেজিস্টার্ড গ্র্যাজুয়েট নির্বাচন: ২৫ পদেই আওয়ামী পন্থীদের জয়</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৫ ঘন্টা আগে | <small>ক্যাম্পাস</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/183756_bangladesh_pratidin_du.jpg?v=1679286286" alt="ঢাবির রেজিস্টার্ড গ্র্যাজুয়েট নির্বাচন: ২৫ পদেই আওয়ামী পন্থীদের জয়">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="national/2023/03/19/868720" class="row">
                                <p class="col-md-8">
                                    <strong>হত্যা-অত্যাচার করে আওয়ামী লীগকে কেউ ধ্বংস করতে পারেনি : প্রধানমন্ত্রী
                                    </strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৫ ঘন্টা আগে | <small>জাতীয়</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/183024_bangladesh_pratidin_pm-newssss-piiic-newsss-pic.jpg?v=1679286286" alt="হত্যা-অত্যাচার করে আওয়ামী লীগকে কেউ ধ্বংস করতে পারেনি : প্রধানমন্ত্রী ">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="campus-online/2023/03/19/868719" class="row">
                                <p class="col-md-8">
                                    <strong>চবি শিক্ষক-শিক্ষার্থীদের উপর হামলার প্রতিবাদে শিক্ষকদের মানববন্ধন </strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৬ ঘন্টা আগে | <small>ক্যাম্পাস</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/182412_bangladesh_pratidin_cu.jpg?v=1679286286" alt="চবি শিক্ষক-শিক্ষার্থীদের উপর হামলার প্রতিবাদে শিক্ষকদের মানববন্ধন ">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="country/2023/03/19/868717" class="row">
                                <p class="col-md-8">
                                    <strong>শিবচরে বাস দুর্ঘটনা, নিহত ব্যাংক কর্মকর্তার বাড়িতে শোকের মাতম</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৬ ঘন্টা আগে | <small>দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/181342_bangladesh_pratidin_Untitled-2.jpg?v=1679286286" alt="শিবচরে বাস দুর্ঘটনা, নিহত ব্যাংক কর্মকর্তার বাড়িতে শোকের মাতম">
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="country/2023/03/19/868716" class="row">
                                <p class="col-md-8">
                                    <strong>দিনাজপুরে দূষণের শিকার হচ্ছে লিচু</strong>
                                    <span><i class="bi bi-stopwatch"></i> ১৬ ঘন্টা আগে | <small>দেশ</small></span>
                                </p>
                                <p class="col-md-4 ps-0">
                                    <img src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/181314_bangladesh_pratidin_bbbbb.jpg?v=1679286286" alt="দিনাজপুরে দূষণের শিকার হচ্ছে লিচু">
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 highlights">
            <ul class="m-0">
                <li class="mb-3">
                    <a href="last-page/2023/03/20/868825">
                        <img class="lazy" src="{{asset('frontend')}}/assets/news_images/thumbnails/Bd-Pratidin-20-03-23-F-12.png" alt="অস্ট্রেলিয়ার বাণিজ্যে চীনের বিকল্প বাংলাদেশ">
                        <p>অস্ট্রেলিয়ার বাণিজ্যে চীনের বিকল্প বাংলাদেশ</p>
                    </a>
                </li>
                <li class="mb-3">
                    <a href="last-page/2023/03/20/868825">
                        <img class="lazy" src="{{asset('frontend')}}/assets/news_images/thumbnails/Bd-Pratidin-20-03-23-F-12.png" alt="অস্ট্রেলিয়ার বাণিজ্যে চীনের বিকল্প বাংলাদেশ">
                        <p>অস্ট্রেলিয়ার বাণিজ্যে চীনের বিকল্প বাংলাদেশ</p>
                    </a>
                </li>
                <li class="mb-3"><a href="city/2023/03/20/868763">
                        <img class="lazy" src="{{asset('frontend')}}/assets/news_images/thumbnails/20-03-2023-p3-1.png" alt="মশার যন্ত্রণায় অতিষ্ঠ সিলেটবাসী">
                        <p>মশার যন্ত্রণায় অতিষ্ঠ সিলেটবাসী</p>
                    </a>
                </li>
            </ul>
            <!-- video -->
            <hr>
            <ul class="m-0">
                <li class="mb-3">
                    <iframe allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" style="border-radius: 5px;" width="260" height="175" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                    </iframe>
                </li>
                <li class="mb-3">
                    <iframe allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" style="border-radius: 5px;" width="260" height="175" src="https://www.youtube.com/embed/zAlX1V3lK5s">
                    </iframe>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container my-3">
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
</div>
<section class="section_16">
    <div class="bg pb-4 mb-3">
        <div class="container">
            <a href="./online/highlights" class="title"><img class="w-100 lazy" src="{{asset('frontend')}}/assets/img/highlights-title-bg.png" alt="highlights"></a>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-3 col-lg-2 mb-4">
                    <a href="city-news/2023/03/20/868859">
                        <img class="w-100 lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/thumbnails/100745_bangladesh_pratidin_670.jpg?v=1679286286" alt="বৃষ্টিতে ঢাকায় দূষণ কমে বায়ুমানের উন্নতি">
                        <p>বৃষ্টিতে ঢাকায় দূষণ কমে বায়ুমানের উন্নতি</p>
                    </a>
                </div>
                <div class="col-md-3 col-lg-2 mb-4">
                    <a href="first-page/2023/03/20/868809">
                        <img class="w-100 lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/thumbnails/Bd-Pratidin-20-03-23-F-05.jpg?v=1679286286" alt="কে এই আরাভ খান">
                        <p>কে এই আরাভ খান</p>
                    </a>
                </div>
                <div class="col-md-3 col-lg-2 mb-4">
                    <a href="sports/2023/03/20/868853">
                        <img class="w-100 lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/thumbnails/082955_bangladesh_pratidin_14.jpg?v=1679286286" alt="ঘরের মাঠেও জুভেন্টাসে ধরাশায়ী ইন্টার">
                        <p>ঘরের মাঠেও জুভেন্টাসে ধরাশায়ী ইন্টার</p>
                    </a>
                </div>
                <div class="col-md-3 col-lg-2 mb-4">
                    <a href="international-news/2023/03/20/868839">
                        <img class="w-100 lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/thumbnails/005341_bangladesh_pratidin_BD-pratidin--2.jpg?v=1679286286" alt="মারিওপোল সফর, কী দেখলেন পুতিন?">
                        <p>মারিওপোল সফর, কী দেখলেন পুতিন?</p>
                    </a>
                </div>
                <div class="col-md-3 col-lg-2 mb-4">
                    <a href="sports/2023/03/20/868840">
                        <img class="w-100 lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/thumbnails/011941_bangladesh_pratidin_BD-pratidin--3.jpg?v=1679286286" alt="ছিলেন মেসি-এমবাপ্পে, তবুও লজ্জায় ডুবল পিএসজি">
                        <p>ছিলেন মেসি-এমবাপ্পে, তবুও লজ্জায় ডুবল পিএসজি</p>
                    </a>
                </div>
                <div class="col-md-3 col-lg-2 mb-4">
                    <a href="last-page/2023/03/20/868829">
                        <img class="w-100 lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/thumbnails/Bd-Pratidin-20-03-23-F-13.jpg?v=1679286286" alt="হেলিকপ্টার ও হাতি নিয়ে বিয়ে">
                        <p>হেলিকপ্টার ও হাতি নিয়ে বিয়ে</p>
                    </a>
                </div>
                <div class="col-md-3 col-lg-2 mb-4">
                    <a href="national/2023/03/19/868741">
                        <img class="w-100 lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/thumbnails/203301_bangladesh_pratidin_doller.jpg?v=1679286286" alt="গতি ফিরছে প্রবাসী আয়ে, বাড়ছে রেমিট্যান্স">
                        <p>গতি ফিরছে প্রবাসী আয়ে, বাড়ছে রেমিট্যান্স</p>
                    </a>
                </div>
                <div class="col-md-3 col-lg-2 mb-4">
                    <a href="entertainment/2023/03/19/868747">
                        <img class="w-100 lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/thumbnails/212034_bangladesh_pratidin_shakib-khan-bdp.jpg?v=1679286286" alt="ডিবি কার্যালয় থেকে বেরিয়ে যা বললেন শাকিব খান">
                        <p>ডিবি কার্যালয় থেকে বেরিয়ে যা বললেন শাকিব খান</p>
                    </a>
                </div>
                <div class="col-md-3 col-lg-2 mb-4">
                    <a href="country/2023/03/19/868739">
                        <img class="w-100 lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/thumbnails/201134_bangladesh_pratidin_ballo-bia-2.jpg?v=1679286286" alt="ম্যাজিস্ট্রেট আসার খবরে বিয়ের আসর থেকে পালালেন বর ">
                        <p>ম্যাজিস্ট্রেট আসার খবরে বিয়ের আসর থেকে পালালেন বর </p>
                    </a>
                </div>
                <div class="col-md-3 col-lg-2 mb-4">
                    <a href="country/2023/03/19/868732">
                        <img class="w-100 lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/thumbnails/192841_bangladesh_pratidin_Gopalganj-Road-Accident-Photo-02(19_03.jpg?v=1679286286" alt="মাদারীপুরে বাস দুর্ঘটনা; সার্টিফিকেট আনা হলো না আফসানার">
                        <p>মাদারীপুরে বাস দুর্ঘটনা; সার্টিফিকেট আনা হলো না আফসানার</p>
                    </a>
                </div>
                <div class="col-md-3 col-lg-2 mb-4">
                    <a href="country/2023/03/20/868823">
                        <img class="w-100 lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/thumbnails/001358_bangladesh_pratidin_BD-pratidin--1.jpg?v=1679286286" alt="পর্যটককে ছুরিকাঘাত করে ছিনতাই,  ডিবির জালে পাঁচ ছিনতাইকারী">
                        <p>পর্যটককে ছুরিকাঘাত করে ছিনতাই, ডিবির জালে পাঁচ ছিনতাইকারী</p>
                    </a>
                </div>
                <div class="col-md-3 col-lg-2 mb-4">
                    <a href="sports/2023/03/19/868707">
                        <img class="w-100 lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/thumbnails/174214_bangladesh_pratidin_archarry-news-pic.jpg?v=1679286286" alt="এশিয়া কাপ আর্চারিতে সোনা জিতল বাংলাদেশ">
                        <p>এশিয়া কাপ আর্চারিতে সোনা জিতল বাংলাদেশ</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
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
</div>
<div class="container mb-3">
    <div class="row section-1 section-15">
        <div class="col-md-8 home-category-area">
            <h1><a href="./national"><span>জাতীয়</span> <i class="bi bi-chevron-right">আরও</i></a></h1>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="lead-item">
                        <a href="national/2023/03/20/868856" class="row">
                            <div class="col-md-4 text">বঙ্গভবনে রাষ্ট্রপতির সঙ্গে সৌদি রাষ্ট্রদূতের সৌজন্য সাক্ষাৎ</div>
                            <div class="col-md-8 pe-0">
                                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/thumbnails/092547_bangladesh_pratidin_0000777.jpg?v=1679286286" alt="বঙ্গভবনে রাষ্ট্রপতির সঙ্গে সৌদি রাষ্ট্রদূতের সৌজন্য সাক্ষাৎ">
                            </div>
                            <div class="col-md-12 description">
                                <p>
                                    তিনি আরো বলেন, তাই আইন প্রয়োগ করতে গিয়ে কোনো প্রতিবন্ধকতার সৃষ্টি হলে তা দূর করতে হবে। রাষ্ট্রপতি দেশের বিদ্যমান আইন কানুন যুগোপযোগী ও মানুষের জন্য কল্যাণকর করতে উদ্যোগ নেওয়ার জন্য আইন কমিশনের প্রতি আহ্বান জানান...
                                    <span>আরও পড়ুন</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <a class="list-item" href="national/2023/03/19/868757">
                        <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/223506_bangladesh_pratidin_sheikh-hasina-(file-photo).jpg?v=1679286286" alt="রমজানে কেউ যেন খাদ্য মজুতদারি করতে না পারে : প্রধানমন্ত্রী">
                        <p>রমজানে কেউ যেন খাদ্য মজুতদারি করতে না পারে : প্রধানমন্ত্রী</p>
                    </a>
                </div>
                <div class="col-md-3">
                    <a class="list-item" href="national/2023/03/19/868741">
                        <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/203301_bangladesh_pratidin_doller.jpg?v=1679286286" alt="গতি ফিরছে প্রবাসী আয়ে, বাড়ছে রেমিট্যান্স">
                        <p>গতি ফিরছে প্রবাসী আয়ে, বাড়ছে রেমিট্যান্স</p>
                    </a>
                </div>
                <div class="col-md-3">
                    <a class="list-item" href="national/2023/03/19/868728">
                        <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/191035_bangladesh_pratidin_hajj-flights-bdp.jpg?v=1679286286" alt="হজ ফ্লাইট শুরু ২১ মে">
                        <p>হজ ফ্লাইট শুরু ২১ মে</p>
                    </a>
                </div>
                <div class="col-md-3">
                    <a class="list-item" href="national/2023/03/19/868725">
                        <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/190511_bangladesh_pratidin_r.jpg?v=1679286286" alt="চালকদের অবহেলা ও অসতর্কতা সড়ক দুর্ঘটনার অন্যতম কারণ: ফখরুল">
                        <p>চালকদের অবহেলা ও অসতর্কতা সড়ক দুর্ঘটনার অন্যতম কারণ: ফখরুল</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="news-tab-area my-tabs">
                    <ul id="newsTab" class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="latest-news-tab" data-bs-toggle="tab" data-bs-target="#latest-news" type="button" role="tab" aria-controls="latest-news" aria-selected="true">অনলাইন</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="most-read-tab" data-bs-toggle="tab" data-bs-target="#most-read" type="button" role="tab" aria-controls="most-read" aria-selected="false">সর্বাধিক পঠিত</button>
                        </li>
                    </ul>
                    <div class="tab-content mt-3" id="myTabContent">
                        <div class="tab-pane fade" id="latest-news" role="tabpanel" aria-labelledby="latest-news-tab">
                            <ul>
                                <li class="bi bi-hand-index-thumb"><a href="international-news/2023/03/20/868852">
                                        <p class="m-0 py-0 px-2">
                                            <strong>যে কারণে চীনকে ধন্যবাদ দিলেন পুতিন</strong>
                                        </p>
                                    </a></li>
                                <li class="bi bi-hand-index-thumb"><a href="international-news/2023/03/20/868839">
                                        <p class="m-0 py-0 px-2">
                                            <strong>মারিওপোল সফর, কী দেখলেন পুতিন?</strong>
                                        </p>
                                    </a></li>
                                <li class="bi bi-hand-index-thumb"><a href="sports/2023/03/20/868840">
                                        <p class="m-0 py-0 px-2">
                                            <strong>ছিলেন মেসি-এমবাপ্পে, তবুও লজ্জায় ডুবল পিএসজি</strong>
                                        </p>
                                    </a></li>
                                <li class="bi bi-hand-index-thumb"><a href="sports/2023/03/20/868851">
                                        <p class="m-0 py-0 px-2">
                                            <strong>এল ক্ল্যাসিকোয় বাজিমাত, ফের বার্সেলোনার রিয়াল বধ</strong>
                                        </p>
                                    </a></li>
                                <li class="bi bi-hand-index-thumb"><a href="country/2023/03/20/868823">
                                        <p class="m-0 py-0 px-2">
                                            <strong>পর্যটককে ছুরিকাঘাত করে ছিনতাই, ডিবির জালে পাঁচ ছিনতাইকারী</strong>
                                        </p>
                                    </a></li>
                                <li class="bi bi-hand-index-thumb"><a href="country/2023/03/20/868849">
                                        <p class="m-0 py-0 px-2">
                                            <strong>ইয়াবা পাচার, মা ছেলেসহ চার কারবারি আটক</strong>
                                        </p>
                                    </a></li>
                                <li class="bi bi-hand-index-thumb"><a href="international-news/2023/03/20/868857">
                                        <p class="m-0 py-0 px-2">
                                            <strong>এবার ক্রেডিট সুইস ব্যাংক দেউলিয়া হওয়া নিয়ে আতঙ্ক</strong>
                                        </p>
                                    </a></li>
                                <li class="bi bi-hand-index-thumb"><a href="international-news/2023/03/20/868858">
                                        <p class="m-0 py-0 px-2">
                                            <strong>ইরানের প্রেসিডেন্টকে সৌদি আরবে সফরের আমন্ত্রণ বাদশাহ সালমানের
                                            </strong>
                                        </p>
                                    </a></li>
                                <li class="bi bi-hand-index-thumb"><a href="sports/2023/03/20/868854">
                                        <p class="m-0 py-0 px-2">
                                            <strong>
                                                পয়েন্ট তালিকায় শীর্ষে ফেরা হলো না বায়ার্নের </strong>
                                        </p>
                                    </a></li>
                                <li class="bi bi-hand-index-thumb"><a href="sports/2023/03/20/868853">
                                        <p class="m-0 py-0 px-2">
                                            <strong>ঘরের মাঠেও জুভেন্টাসে ধরাশায়ী ইন্টার</strong>
                                        </p>
                                    </a></li>
                                <li class="bi bi-hand-index-thumb"><a href="national/2023/03/20/868856">
                                        <p class="m-0 py-0 px-2">
                                            <strong>বঙ্গভবনে রাষ্ট্রপতির সঙ্গে সৌদি রাষ্ট্রদূতের সৌজন্য সাক্ষাৎ</strong>
                                        </p>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade show active" id="most-read" role="tabpanel" aria-labelledby="most-read-tab">
                            <ul>
                                <li class="bi bi-hand-index-thumb"><a href="first-page/2023/03/20/868809">
                                        <p class="m-0 py-0 px-2">
                                            <strong>কে এই আরাভ খান </strong>
                                        </p>
                                    </a></li>
                                <li class="bi bi-hand-index-thumb"><a href="first-page/2023/03/20/868808">
                                        <p class="m-0 py-0 px-2">
                                            <strong>মার্কিন নিষেধাজ্ঞা নিয়ে ঘাবড়ানোর কিছু নেই </strong>
                                        </p>
                                    </a></li>
                                <li class="bi bi-hand-index-thumb"><a href="last-page/2023/03/20/868825">
                                        <p class="m-0 py-0 px-2">
                                            <strong>অস্ট্রেলিয়ার বাণিজ্যে চীনের বিকল্প বাংলাদেশ </strong>
                                        </p>
                                    </a></li>
                                <li class="bi bi-hand-index-thumb"><a href="first-page/2023/03/20/868817">
                                        <p class="m-0 py-0 px-2">
                                            <strong>আমজাদের এক হাজার ব্যাংক হিসাব জব্দ </strong>
                                        </p>
                                    </a></li>
                                <li class="bi bi-hand-index-thumb"><a href="first-page/2023/03/20/868805">
                                        <p class="m-0 py-0 px-2">
                                            <strong>হঠাৎ মৃত্যুপুরী মাদারীপুর </strong>
                                        </p>
                                    </a></li>
                                <li class="bi bi-hand-index-thumb"><a href="last-page/2023/03/20/868829">
                                        <p class="m-0 py-0 px-2">
                                            <strong>হেলিকপ্টার ও হাতি নিয়ে বিয়ে </strong>
                                        </p>
                                    </a></li>
                                <li class="bi bi-hand-index-thumb"><a href="first-page/2023/03/20/868816">
                                        <p class="m-0 py-0 px-2">
                                            <strong>চালক শুনছিলেন না কারও কথাই </strong>
                                        </p>
                                    </a></li>
                                <li class="bi bi-hand-index-thumb"><a href="first-page/2023/03/20/868811">
                                        <p class="m-0 py-0 px-2">
                                            <strong>অমর্ত্য সেনকে বাড়ি ছাড়ার নোটিস </strong>
                                        </p>
                                    </a></li>
                                <li class="bi bi-hand-index-thumb"><a href="first-page/2023/03/20/868807">
                                        <p class="m-0 py-0 px-2">
                                            <strong>তারা ক্ষমতায় আসতে পারবে না </strong>
                                        </p>
                                    </a></li>
                                <li class="bi bi-hand-index-thumb"><a href="last-page/2023/03/20/868827">
                                        <p class="m-0 py-0 px-2">
                                            <strong>দেশে ফিরলেন মাহির স্বামী রকিব
                                            </strong>
                                        </p>
                                    </a></li>
                                <li class="bi bi-hand-index-thumb"><a href="various/2023/03/20/868762">
                                        <p class="m-0 py-0 px-2">
                                            <strong>বিশ্বের সুখী দেশের গল্প </strong>
                                        </p>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
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
</div>

<div class="container">
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
</div>

<div class="container">
    <div class="row home-category-area section-1">
        <h1><a href="./international-news"><span>আন্তর্জাতিক খবর</span> <i class="bi bi-chevron-right">আরও</i></a></h1>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="lead-item">
                        <a href="international-news/2023/03/20/868861" class="row">
                            <div class="col-md-5 text">
                                যুক্তরাষ্ট্রে আরও ১৮৬ ব্যাংক পতনের ঝুঁকিতে
                            </div>
                            <div class="col-md-7 pe-0">
                                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/thumbnails/102101_bangladesh_pratidin_svb.jpg?v=1679286286" alt="যুক্তরাষ্ট্রে আরও ১৮৬ ব্যাংক পতনের ঝুঁকিতে">
                            </div>
                            <div class="col-md-12 description">
                                <p>
                                    তিনি আরো বলেন, তাই আইন প্রয়োগ করতে গিয়ে কোনো প্রতিবন্ধকতার সৃষ্টি হলে তা দূর করতে হবে। রাষ্ট্রপতি দেশের বিদ্যমান আইন কানুন যুগোপযোগী ও মানুষের জন্য কল্যাণকর করতে উদ্যোগ নেওয়ার জন্য আইন কমিশনের প্রতি আহ্বান জানান...
                                    <span>আরও পড়ুন</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <a class="list-item" href="international-news/2023/03/20/868858">
                        <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/095728_bangladesh_pratidin_Raisi.jpg?v=1679286286" alt="ইরানের প্রেসিডেন্টকে সৌদি আরবে সফরের আমন্ত্রণ বাদশাহ সালমানের">
                        <p>
                            ইরানের প্রেসিডেন্টকে সৌদি আরবে সফরের আমন্ত্রণ বাদশাহ সালমানের
                        </p>
                    </a>
                </div>
                <div class="col-md-3">
                    <a class="list-item" href="international-news/2023/03/20/868857">
                        <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/094908_bangladesh_pratidin_77.jpg?v=1679286286" alt="এবার ক্রেডিট সুইস ব্যাংক দেউলিয়া হওয়া নিয়ে আতঙ্ক">
                        <p>এবার ক্রেডিট সুইস ব্যাংক দেউলিয়া হওয়া নিয়ে আতঙ্ক</p>
                    </a>
                </div>
                <div class="col-md-3">
                    <a class="list-item" href="international-news/2023/03/20/868852">
                        <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/053658_bangladesh_pratidin_BD-pratidin--7.jpg?v=1679286286" alt="যে কারণে চীনকে ধন্যবাদ দিলেন পুতিন">
                        <p>যে কারণে চীনকে ধন্যবাদ দিলেন পুতিন</p>
                    </a>
                </div>
                <div class="col-md-3">
                    <a class="list-item" href="international-news/2023/03/20/868839">
                        <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/005341_bangladesh_pratidin_BD-pratidin--2.jpg?v=1679286286" alt="মারিওপোল সফর, কী দেখলেন পুতিন?">
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
                                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/174458_bangladesh_pratidin_france.jpg?v=1679286286" alt="অনাস্থা ভোটের মুখে পড়তে পারেন প্রেসিডেন্ট ম্যাক্রোঁ">
                            </span>
                            <span class="col-md-8">
                                <p>অনাস্থা ভোটের মুখে পড়তে পারেন প্রেসিডেন্ট ম্যাক্রোঁ</p>
                            </span>
                        </a>
                    </li>
                    <li class="mb-2"><a href="international-news/2023/03/19/868669" class="row">
                            <span class="col-md-4 pe-0">
                                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/112547_bangladesh_pratidin_asad.jpg?v=1679286286" alt="সিরিয়ার প্রেসিডেন্টের বিরুদ্ধে জেলেনস্কির নিষেধাজ্ঞা">
                            </span>
                            <span class="col-md-8">
                                <p>সিরিয়ার প্রেসিডেন্টের বিরুদ্ধে জেলেনস্কির নিষেধাজ্ঞা</p>
                            </span>
                        </a>
                    </li>
                    <li class="mb-2"><a href="international-news/2023/03/19/868664" class="row">
                            <span class="col-md-4 pe-0">
                                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/111131_bangladesh_pratidin_pak.jpg?v=1679286286" alt="ইমরান খানের বিরুদ্ধে গ্রেফতারি পরোয়ানা স্থগিত">
                            </span>
                            <span class="col-md-8">
                                <p>ইমরান খানের বিরুদ্ধে গ্রেফতারি পরোয়ানা স্থগিত</p>
                            </span>
                        </a>
                    </li>
                    <li class="mb-2"><a href="international-news/2023/03/19/868663" class="row">
                            <span class="col-md-4 pe-0">
                                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/110735_bangladesh_pratidin_Credit_Swisse.jpg?v=1679286286" alt="বিপর্যস্ত ক্রেডিট সুইস ব্যাংক বাঁচাতে ৬ বিলিয়ন ডলার গ্যারান্টি চায় ইউবিএস">
                            </span>
                            <span class="col-md-8">
                                <p>বিপর্যস্ত ক্রেডিট সুইস ব্যাংক বাঁচাতে ৬ বিলিয়ন ডলার গ্যারান্টি চায় ইউবিএস</p>
                            </span>
                        </a>
                    </li>
                    <li class="mb-2"><a href="international-news/2023/03/19/868661" class="row">
                            <span class="col-md-4 pe-0">
                                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/110436_bangladesh_pratidin_putin.jpg?v=1679286286" alt="পুতিনের বিরুদ্ধে পরোয়ানা : বাইডেন-শলৎসের সমর্থন">
                            </span>
                            <span class="col-md-8">
                                <p>পুতিনের বিরুদ্ধে পরোয়ানা : বাইডেন-শলৎসের সমর্থন</p>
                            </span>
                        </a>
                    </li>
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
<div class="container section-6">
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
                                        <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/thumbnails/102101_bangladesh_pratidin_svb.jpg?v=1679286286" alt="যুক্তরাষ্ট্রে আরও ১৮৬ ব্যাংক পতনের ঝুঁকিতে">
                                    </div>
                                    <div class="col-md-12 description">
                                        <p>
                                            তিনি আরো বলেন, তাই আইন প্রয়োগ করতে গিয়ে কোনো প্রতিবন্ধকতার সৃষ্টি হলে তা দূর করতে হবে। রাষ্ট্রপতি দেশের বিদ্যমান আইন কানুন যুগোপযোগী ও মানুষের জন্য কল্যাণকর করতে উদ্যোগ নেওয়ার জন্য আইন কমিশনের প্রতি আহ্বান জানান...
                                            <span>আরও পড়ুন</span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <a class="list-item" href="international-news/2023/03/20/868858">
                                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/095728_bangladesh_pratidin_Raisi.jpg?v=1679286286" alt="ইরানের প্রেসিডেন্টকে সৌদি আরবে সফরের আমন্ত্রণ বাদশাহ সালমানের">
                                <p>
                                    ইরানের প্রেসিডেন্টকে সৌদি আরবে সফরের আমন্ত্রণ বাদশাহ সালমানের
                                </p>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="list-item" href="international-news/2023/03/20/868857">
                                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/094908_bangladesh_pratidin_77.jpg?v=1679286286" alt="এবার ক্রেডিট সুইস ব্যাংক দেউলিয়া হওয়া নিয়ে আতঙ্ক">
                                <p>এবার ক্রেডিট সুইস ব্যাংক দেউলিয়া হওয়া নিয়ে আতঙ্ক</p>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="list-item" href="international-news/2023/03/20/868852">
                                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/053658_bangladesh_pratidin_BD-pratidin--7.jpg?v=1679286286" alt="যে কারণে চীনকে ধন্যবাদ দিলেন পুতিন">
                                <p>যে কারণে চীনকে ধন্যবাদ দিলেন পুতিন</p>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="list-item" href="international-news/2023/03/20/868839">
                                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/005341_bangladesh_pratidin_BD-pratidin--2.jpg?v=1679286286" alt="মারিওপোল সফর, কী দেখলেন পুতিন?">
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
                                        <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/174458_bangladesh_pratidin_france.jpg?v=1679286286" alt="অনাস্থা ভোটের মুখে পড়তে পারেন প্রেসিডেন্ট ম্যাক্রোঁ">
                                    </span>
                                    <span class="col-md-8">
                                        <p>অনাস্থা ভোটের মুখে পড়তে পারেন প্রেসিডেন্ট ম্যাক্রোঁ</p>
                                    </span>
                                </a></li>
                            <li class="mb-2"><a href="international-news/2023/03/19/868669" class="row">
                                    <span class="col-md-4 pe-0">
                                        <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/112547_bangladesh_pratidin_asad.jpg?v=1679286286" alt="সিরিয়ার প্রেসিডেন্টের বিরুদ্ধে জেলেনস্কির নিষেধাজ্ঞা">
                                    </span>
                                    <span class="col-md-8">
                                        <p>সিরিয়ার প্রেসিডেন্টের বিরুদ্ধে জেলেনস্কির নিষেধাজ্ঞা</p>
                                    </span>
                                </a></li>
                            <li class="mb-2"><a href="international-news/2023/03/19/868664" class="row">
                                    <span class="col-md-4 pe-0">
                                        <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/111131_bangladesh_pratidin_pak.jpg?v=1679286286" alt="ইমরান খানের বিরুদ্ধে গ্রেফতারি পরোয়ানা স্থগিত">
                                    </span>
                                    <span class="col-md-8">
                                        <p>ইমরান খানের বিরুদ্ধে গ্রেফতারি পরোয়ানা স্থগিত</p>
                                    </span>
                                </a></li>
                            <li class="mb-2"><a href="international-news/2023/03/19/868663" class="row">
                                    <span class="col-md-4 pe-0">
                                        <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/110735_bangladesh_pratidin_Credit_Swisse.jpg?v=1679286286" alt="বিপর্যস্ত ক্রেডিট সুইস ব্যাংক বাঁচাতে ৬ বিলিয়ন ডলার গ্যারান্টি চায় ইউবিএস">
                                    </span>
                                    <span class="col-md-8">
                                        <p>বিপর্যস্ত ক্রেডিট সুইস ব্যাংক বাঁচাতে ৬ বিলিয়ন ডলার গ্যারান্টি চায় ইউবিএস</p>
                                    </span>
                                </a></li>
                            <li class="mb-2"><a href="international-news/2023/03/19/868661" class="row">
                                    <span class="col-md-4 pe-0">
                                        <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/110436_bangladesh_pratidin_putin.jpg?v=1679286286" alt="পুতিনের বিরুদ্ধে পরোয়ানা : বাইডেন-শলৎসের সমর্থন">
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
                <div class="ads bg-light mb-2 d-flex justify-content-center"> <a href="http://127.0.0.1:8000/" class="ad_cl-848" data-id="848" target="_blank">
                        <img src="https://www.bd-pratidin.com/assets/images/banner/20221129021445.jpg" alt="desktop-home-islam-below" /> </a>
                </div>
            </div>
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
            <h1><a href="sports"><span>মাঠে ময়দানে</span> <i class="bi bi-chevron-right">আরও</i></a></h1>
            <div class="col-md-3">
                <div class="col-md-12 mb-4">
                    <a class="list-item" href="sports/2023/03/20/868853">
                        <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/thumbnails/082955_bangladesh_pratidin_14.jpg?v=1679286286" alt="ঘরের মাঠেও জুভেন্টাসে ধরাশায়ী ইন্টার">
                        <p>ঘরের মাঠেও জুভেন্টাসে ধরাশায়ী ইন্টার</p>
                    </a>
                </div>
                <div class="col-md-12 mb-4">
                    <a class="list-item" href="sports/2023/03/20/868851">
                        <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/thumbnails/042602_bangladesh_pratidin_BD-pratidin--6.jpg?v=1679286286" alt="এল ক্ল্যাসিকোয় বাজিমাত, ফের বার্সেলোনার রিয়াল বধ">
                        <p>এল ক্ল্যাসিকোয় বাজিমাত, ফের বার্সেলোনার রিয়াল বধ</p>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="lead-item"><a href="sports/2023/03/20/868854">
                        <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/thumbnails/085343_bangladesh_pratidin_000ure.jpg?v=1679286286" alt="
পয়েন্ট তালিকায় শীর্ষে ফেরা হলো না বায়ার্নের ">
                        <span>
                            পয়েন্ট তালিকায় শীর্ষে ফেরা হলো না বায়ার্নের </span>
                    </a></div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <ul class="section-10-list-iteam">
                        <li class="mb-2"><a href="sports/2023/03/20/868840" class="row">
                                <span class="col-md-4 pe-0">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/011941_bangladesh_pratidin_BD-pratidin--3.jpg?v=1679286286" alt="ছিলেন মেসি-এমবাপ্পে, তবুও লজ্জায় ডুবল পিএসজি">
                                </span>
                                <span class="col-md-8">
                                    <p>ছিলেন মেসি-এমবাপ্পে, তবুও লজ্জায় ডুবল পিএসজি</p>
                                </span>
                            </a></li>
                        <li class="mb-2"><a href="sports/2023/03/19/868722" class="row">
                                <span class="col-md-4 pe-0">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/184116_bangladesh_pratidin_virat-bdp.jpg?v=1679286286" alt="৩৭ ওভারেই শেষ ১০০ ওভারের খেলা, ১০ উইকেটে হারল ভারত">
                                </span>
                                <span class="col-md-8">
                                    <p>৩৭ ওভারেই শেষ ১০০ ওভারের খেলা, ১০ উইকেটে হারল ভারত</p>
                                </span>
                            </a></li>
                        <li class="mb-2"><a href="sports/2023/03/19/868707" class="row">
                                <span class="col-md-4 pe-0">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/174214_bangladesh_pratidin_archarry-news-pic.jpg?v=1679286286" alt="এশিয়া কাপ আর্চারিতে সোনা জিতল বাংলাদেশ">
                                </span>
                                <span class="col-md-8">
                                    <p>এশিয়া কাপ আর্চারিতে সোনা জিতল বাংলাদেশ</p>
                                </span>
                            </a></li>
                        <li class="mb-2"><a href="sports/2023/03/19/868685" class="row">
                                <span class="col-md-4 pe-0">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/151159_bangladesh_pratidin_zzzzzaaa.jpg?v=1679286286" alt="আইপিএলে খেলার ছাড়পত্র চাইলেন লিটন ও সাকিব; কী বলল বিসিবি?">
                                </span>
                                <span class="col-md-8">
                                    <p>আইপিএলে খেলার ছাড়পত্র চাইলেন লিটন ও সাকিব; কী বলল বিসিবি?</p>
                                </span>
                            </a></li>
                        <li class="mb-2"><a href="sports/2023/03/19/868684" class="row">
                                <span class="col-md-4 pe-0">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/143129_bangladesh_pratidin_zzzzzzzzzzzaaa.jpg?v=1679286286" alt="বৃষ্টির দিনে একাই অনুশীলন করলেন তামিম">
                                </span>
                                <span class="col-md-8">
                                    <p>বৃষ্টির দিনে একাই অনুশীলন করলেন তামিম</p>
                                </span>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-3">
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
</div>
<div class="container mt-3 mb-3">
    <div class="row section-13">
        <div class="col-md-4 home-category-area">
            <h2><a href="life"><span>জীবন ধারা</span> <i class="bi bi-chevron-right"></i></a></h2>
            <a class="list-item" href="life/2023/03/12/866694">
                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/12/thumbnails/143705_bangladesh_pratidin_12.jpg?v=1679286286" alt="অফিসে কেমন হবে আপনার পোশাক">
                <p>অফিসে কেমন হবে আপনার পোশাক</p>
            </a>
            <ul class="mt-1">
                <li class="bi bi-caret-right-fill"><a href="life/2023/03/12/866650">‘ডক্টর’স অ্যাডভাইস’
                    </a></li>
                <li class="bi bi-caret-right-fill"><a href="life/2023/03/11/866311">ডিআরইউ এবং ফ্রেন্ডশিপ-এর যৌথ আয়োজনে নারী দিবস উদযাপন</a></li>
                <li class="bi bi-caret-right-fill"><a href="life/2023/03/09/865860">আরটিভি ‘জয়া আলোকিত নারী সম্মাননা ২০২৩’ পেলেন ৬ নারী</a></li>
                <li class="bi bi-caret-right-fill"><a href="life/2023/03/06/864900">সপ্তাহে অন্তত দুইবার চুল ধোয়া উচিত</a></li>
            </ul>
        </div>
        <div class="col-md-4 home-category-area">
            <h2><a href="coronavirus"><span>করোনাভাইরাস</span> <i class="bi bi-chevron-right"></i></a></h2>
            <a class="list-item" href="coronavirus/2023/03/19/868649">
                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/thumbnails/094506_bangladesh_pratidin_Japan2.jpg?v=1679286286" alt="জাপানে ১৬০ কোটি ডলারের করোনা টিকা ধ্বংস">
                <p>জাপানে ১৬০ কোটি ডলারের করোনা টিকা ধ্বংস</p>
            </a>
            <ul class="mt-1">
                <li class="bi bi-caret-right-fill"><a href="coronavirus/2023/03/19/868705">আরও ৬ জনের করোনা শনাক্ত</a></li>
                <li class="bi bi-caret-right-fill"><a href="coronavirus/2023/03/19/868640">করোনা: বিশ্বজুড়ে দৈনিক মৃত্যুর সংখ্যা কমেছে</a></li>
                <li class="bi bi-caret-right-fill"><a href="coronavirus/2023/03/18/868439">আরও ৪ জনের করোনা শনাক্ত
                    </a></li>
                <li class="bi bi-caret-right-fill"><a href="coronavirus/2023/03/18/868359">করোনায় বিশ্বে আরও ৭০০ জনের মৃত্যু</a></li>
            </ul>
        </div>
        <div class="col-md-4 home-category-area">
            <h2><a href="health-tips"><span>হেলথ কর্নার</span> <i class="bi bi-chevron-right"></i></a></h2>
            <a class="list-item" href="health-tips/2023/03/17/868119">
                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/17/thumbnails/125804_bangladesh_pratidin_334991344_1176114793071473_.jpg?v=1679286286" alt="বিশ্ব ঘুম দিবস আজ">
                <p>বিশ্ব ঘুম দিবস আজ</p>
            </a>
            <ul class="mt-1">
                <li class="bi bi-caret-right-fill"><a href="health-tips/2023/03/09/865717">আজ বিশ্ব কিডনি দিবস</a></li>
                <li class="bi bi-caret-right-fill"><a href="health-tips/2023/03/07/865288">‘কিডনি রোগে আক্রান্তদের প্রায় ৮০ শতাংশেরই মৃত্যু হয়’</a></li>
                <li class="bi bi-caret-right-fill"><a href="health-tips/2023/03/06/864873">বৃষ্টির পানি সংরক্ষণ ও উন্নততর সংস্থান নিশ্চিতের লক্ষ্যে সমঝোতা স্মারক স্বাক্ষরিত</a></li>
                <li class="bi bi-caret-right-fill"><a href="health-tips/2023/03/04/864319">বিএসএমএমইউয়ে বিশ্ব শ্রবণ দিবস উপলক্ষে সেমিনার</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row home-category-area section-1">
        <h1><a href="./international-news"><span>শিল্প বাণিজ্য</span> <i class="bi bi-chevron-right">আরও</i></a></h1>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="lead-item">
                        <a href="international-news/2023/03/20/868861" class="row">
                            <div class="col-md-5 text">
                                যুক্তরাষ্ট্রে আরও ১৮৬ ব্যাংক পতনের ঝুঁকিতে
                            </div>
                            <div class="col-md-7 pe-0">
                                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/thumbnails/102101_bangladesh_pratidin_svb.jpg?v=1679286286" alt="যুক্তরাষ্ট্রে আরও ১৮৬ ব্যাংক পতনের ঝুঁকিতে">
                            </div>
                            <div class="col-md-12 description">
                                <p>
                                    তিনি আরো বলেন, তাই আইন প্রয়োগ করতে গিয়ে কোনো প্রতিবন্ধকতার সৃষ্টি হলে তা দূর করতে হবে। রাষ্ট্রপতি দেশের বিদ্যমান আইন কানুন যুগোপযোগী ও মানুষের জন্য কল্যাণকর করতে উদ্যোগ নেওয়ার জন্য আইন কমিশনের প্রতি আহ্বান জানান...
                                    <span>আরও পড়ুন</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <a class="list-item" href="international-news/2023/03/20/868858">
                        <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/095728_bangladesh_pratidin_Raisi.jpg?v=1679286286" alt="ইরানের প্রেসিডেন্টকে সৌদি আরবে সফরের আমন্ত্রণ বাদশাহ সালমানের">
                        <p>
                            ইরানের প্রেসিডেন্টকে সৌদি আরবে সফরের আমন্ত্রণ বাদশাহ সালমানের
                        </p>
                    </a>
                </div>
                <div class="col-md-3">
                    <a class="list-item" href="international-news/2023/03/20/868857">
                        <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/094908_bangladesh_pratidin_77.jpg?v=1679286286" alt="এবার ক্রেডিট সুইস ব্যাংক দেউলিয়া হওয়া নিয়ে আতঙ্ক">
                        <p>এবার ক্রেডিট সুইস ব্যাংক দেউলিয়া হওয়া নিয়ে আতঙ্ক</p>
                    </a>
                </div>
                <div class="col-md-3">
                    <a class="list-item" href="international-news/2023/03/20/868852">
                        <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/053658_bangladesh_pratidin_BD-pratidin--7.jpg?v=1679286286" alt="যে কারণে চীনকে ধন্যবাদ দিলেন পুতিন">
                        <p>যে কারণে চীনকে ধন্যবাদ দিলেন পুতিন</p>
                    </a>
                </div>
                <div class="col-md-3">
                    <a class="list-item" href="international-news/2023/03/20/868839">
                        <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/20/mob/005341_bangladesh_pratidin_BD-pratidin--2.jpg?v=1679286286" alt="মারিওপোল সফর, কী দেখলেন পুতিন?">
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
                                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/174458_bangladesh_pratidin_france.jpg?v=1679286286" alt="অনাস্থা ভোটের মুখে পড়তে পারেন প্রেসিডেন্ট ম্যাক্রোঁ">
                            </span>
                            <span class="col-md-8">
                                <p>অনাস্থা ভোটের মুখে পড়তে পারেন প্রেসিডেন্ট ম্যাক্রোঁ</p>
                            </span>
                        </a>
                    </li>
                    <li class="mb-2"><a href="international-news/2023/03/19/868669" class="row">
                            <span class="col-md-4 pe-0">
                                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/112547_bangladesh_pratidin_asad.jpg?v=1679286286" alt="সিরিয়ার প্রেসিডেন্টের বিরুদ্ধে জেলেনস্কির নিষেধাজ্ঞা">
                            </span>
                            <span class="col-md-8">
                                <p>সিরিয়ার প্রেসিডেন্টের বিরুদ্ধে জেলেনস্কির নিষেধাজ্ঞা</p>
                            </span>
                        </a>
                    </li>
                    <li class="mb-2"><a href="international-news/2023/03/19/868664" class="row">
                            <span class="col-md-4 pe-0">
                                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/111131_bangladesh_pratidin_pak.jpg?v=1679286286" alt="ইমরান খানের বিরুদ্ধে গ্রেফতারি পরোয়ানা স্থগিত">
                            </span>
                            <span class="col-md-8">
                                <p>ইমরান খানের বিরুদ্ধে গ্রেফতারি পরোয়ানা স্থগিত</p>
                            </span>
                        </a>
                    </li>
                    <li class="mb-2"><a href="international-news/2023/03/19/868663" class="row">
                            <span class="col-md-4 pe-0">
                                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/110735_bangladesh_pratidin_Credit_Swisse.jpg?v=1679286286" alt="বিপর্যস্ত ক্রেডিট সুইস ব্যাংক বাঁচাতে ৬ বিলিয়ন ডলার গ্যারান্টি চায় ইউবিএস">
                            </span>
                            <span class="col-md-8">
                                <p>বিপর্যস্ত ক্রেডিট সুইস ব্যাংক বাঁচাতে ৬ বিলিয়ন ডলার গ্যারান্টি চায় ইউবিএস</p>
                            </span>
                        </a>
                    </li>
                    <li class="mb-2"><a href="international-news/2023/03/19/868661" class="row">
                            <span class="col-md-4 pe-0">
                                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/110436_bangladesh_pratidin_putin.jpg?v=1679286286" alt="পুতিনের বিরুদ্ধে পরোয়ানা : বাইডেন-শলৎসের সমর্থন">
                            </span>
                            <span class="col-md-8">
                                <p>পুতিনের বিরুদ্ধে পরোয়ানা : বাইডেন-শলৎসের সমর্থন</p>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="section-11 section-14 mt-4">
    <div class="container mt-3">
        <div class="row home-category-area section-14">
            <h1><a href="chittagong-pratidin"><span>কক্সবাজার প্রতিদিন</span> <i class="bi bi-chevron-right">আরও</i></a></h1>
            <div class="col-md-5 col-lg-5 col-xl-5 col-xxl-6">
                <div class="lead-item"><a href="chittagong-pratidin/2023/03/19/868751">
                        <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/thumbnails/221202_bangladesh_pratidin_Ctg-Pic--01-(19_03.jpg?v=1679286286" alt="চক্ষু গবেষণায় বাংলাদেশের সর্বোচ্চ সম্মাননা পেলেন চট্টগ্রামের ডা. আসিফ">
                        <span>চক্ষু গবেষণায় বাংলাদেশের সর্বোচ্চ সম্মাননা পেলেন চট্টগ্রামের ডা. আসিফ</span>
                    </a>
                    <p class="text">&lsquo;চক্ষু বিষয়ক গবেষণা ও প্রেজেন্টেশন&rsquo; এর জন্য অফথালমোলজিতে বাংলাদেশের সর্বোচ্চ সম্মাননা&#8230;</p>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                <div class="row">
                    <ul class="section-14-list-iteam">
                        <li class="mb-2"><a href="chittagong-pratidin/2023/03/19/868748" class="row">
                                <span class="col-md-4 pe-0">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/213949_bangladesh_pratidin_ctg_dhaka_642.jpg?v=1679286286" alt="চট্টগ্রামে আউটার স্টেডিয়ামের অবৈধ স্থাপনা উচ্ছেদ">
                                </span>
                                <span class="col-md-8">
                                    <p>চট্টগ্রামে আউটার স্টেডিয়ামের অবৈধ স্থাপনা উচ্ছেদ</p>
                                </span>
                            </a></li>
                        <li class="mb-2"><a href="chittagong-pratidin/2023/03/19/868746" class="row">
                                <span class="col-md-4 pe-0">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/210551_bangladesh_pratidin_court-jabojjibon.jpg?v=1679286286" alt="চিকিৎসককে ধর্ষণচেষ্টায় সিএনজি চালকের যাবজ্জীবন">
                                </span>
                                <span class="col-md-8">
                                    <p>চিকিৎসককে ধর্ষণচেষ্টায় সিএনজি চালকের যাবজ্জীবন</p>
                                </span>
                            </a></li>
                        <li class="mb-2"><a href="chittagong-pratidin/2023/03/19/868742" class="row">
                                <span class="col-md-4 pe-0">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/204706_bangladesh_pratidin_a_lig.jpg?v=1679286286" alt="চট্টগ্রাম-৮ আসনে আওয়ামী লীগের মনোনয়ন বিক্রি শুরু">
                                </span>
                                <span class="col-md-8">
                                    <p>চট্টগ্রাম-৮ আসনে আওয়ামী লীগের মনোনয়ন বিক্রি শুরু</p>
                                </span>
                            </a></li>
                        <li class="mb-2"><a href="chittagong-pratidin/2023/03/19/868709" class="row">
                                <span class="col-md-4 pe-0">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/175358_bangladesh_pratidin_C.jpg?v=1679286286" alt="জিয়াউল হক মাইজভাণ্ডারী ট্রাস্টের বৃত্তি প্রদান সম্পন্ন">
                                </span>
                                <span class="col-md-8">
                                    <p>জিয়াউল হক মাইজভাণ্ডারী ট্রাস্টের বৃত্তি প্রদান সম্পন্ন</p>
                                </span>
                            </a></li>
                        <li class="mb-2"><a href="chittagong-pratidin/2023/03/19/868630" class="row">
                                <span class="col-md-4 pe-0">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/063744_bangladesh_pratidin_GPH.jpg?v=1679286286" alt="মার্কিন প্রতিনিধি দলের  জিপিএইচ কারখানা পরিদর্শন">
                                </span>
                                <span class="col-md-8">
                                    <p>মার্কিন প্রতিনিধি দলের জিপিএইচ কারখানা পরিদর্শন
                                    </p>
                                </span>
                            </a></li>
                        <li class="mb-2"><a href="chittagong-pratidin/2023/03/19/868614" class="row">
                                <span class="col-md-4 pe-0">
                                    <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/mob/005206_bangladesh_pratidin_DD.jpg?v=1679286286" alt="বাদশা মিয়া-সুকানী ফাউন্ডেশন মেধা বৃত্তি প্রদান">
                                </span>
                                <span class="col-md-8">
                                    <p>বাদশা মিয়া-সুকানী ফাউন্ডেশন
                                        মেধা বৃত্তি প্রদান</p>
                                </span>
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-xxl-3">
                <div data-position="desktop-home-chittagong-pratidin-right" class="m-0 p-0">
                    <div class="ads bg-light mb-2 d-flex justify-content-center"> <a href="http://www.fsiblbd.com/" class="ad_cl-13" data-id="13" target="_blank">
                            <img src="https://www.bd-pratidin.com/assets/images/banner/20210916053607.gif" alt="desktop-home-chittagong-pratidin-right" /> </a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12 home-category-area mt-4">
                    <h1><a href="#"><span>পুরোনো সংখ্যা</span> <i class="bi bi-chevron-right"></i></a></h1>

                    <div class="calendarArea">
                        <div class="app__main">
                            <div class="calendar">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container mt-3">
    <div class="row section-13">
        <div class="col-md-4 home-category-area">
            <h2><a href="campus-online"><span>ক্যাম্পাস</span> <i class="bi bi-chevron-right"></i></a></h2>
            <a class="list-item" href="campus-online/2023/03/19/868721">
                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/19/thumbnails/183756_bangladesh_pratidin_du.jpg?v=1679286286" alt="ঢাবির রেজিস্টার্ড গ্র্যাজুয়েট নির্বাচন: ২৫ পদেই আওয়ামী পন্থীদের জয়">
                <p>ঢাবির রেজিস্টার্ড গ্র্যাজুয়েট নির্বাচন: ২৫ পদেই আওয়ামী পন্থীদের জয়</p>
            </a>
            <ul class="mt-1">
                <li class="bi bi-caret-right-fill"><a href="campus-online/2023/03/19/868719">চবি শিক্ষক-শিক্ষার্থীদের উপর হামলার প্রতিবাদে শিক্ষকদের মানববন্ধন </a></li>
                <li class="bi bi-caret-right-fill"><a href="campus-online/2023/03/19/868704">চবি শিক্ষক সমিতির উদ্যোগে তিন দিনব্যাপী বইমেলা</a></li>
                <li class="bi bi-caret-right-fill"><a href="campus-online/2023/03/19/868682">নিজস্ব পদ্ধতিতে ভর্তি পরীক্ষা চায় ইবি শিক্ষার্থীরা</a></li>
                <li class="bi bi-caret-right-fill"><a href="campus-online/2023/03/19/868633">রাবিতে ছাত্রলীগের কর্মসূচিতে না যাওয়ায় শিক্ষার্থীকে মারধর, তদন্ত কমিটি গঠন
                    </a></li>
            </ul>
        </div>
        <div class="col-md-4 home-category-area">
            <h2><a href="city-roundup"><span>নগর পরিক্রমা</span> <i class="bi bi-chevron-right"></i></a></h2>
            <a class="list-item" href="city-roundup/2023/03/18/868423">
                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/18/thumbnails/160632_bangladesh_pratidin_dengu.jpg?v=1679286286" alt="আরও ৪ ডেঙ্গুরোগী হাসপাতালে ভর্তি">
                <p>আরও ৪ ডেঙ্গুরোগী হাসপাতালে ভর্তি</p>
            </a>
            <ul class="mt-1">
                <li class="bi bi-caret-right-fill"><a href="city-roundup/2023/03/16/867909">আরও তিন ডেঙ্গুরোগী হাসপাতালে ভর্তি</a></li>
                <li class="bi bi-caret-right-fill"><a href="city-roundup/2023/03/15/867620">আরও ৫ জন ডেঙ্গুরোগী হাসপাতালে ভর্তি</a></li>
                <li class="bi bi-caret-right-fill"><a href="city-roundup/2023/03/14/867367">আরও দুই ডেঙ্গুরোগী হাসপাতালে ভর্তি</a></li>
                <li class="bi bi-caret-right-fill"><a href="city-roundup/2023/03/14/867358">সিটি কর্পোরেশন ও পৌরসভার জন্য এসডিজি লোকালাইজেশন বিষয়ক কর্মশালা</a></li>
            </ul>
        </div>
        <div class="col-md-4 home-category-area">
            <h2><a href="corporate-corner"><span>কর্পোরেট কর্নার</span> <i class="bi bi-chevron-right"></i></a></h2>
            <a class="list-item" href="corporate-corner/2023/03/18/868484">
                <img class="lazy" src="https://www.bd-pratidin.com/assets/news_images/2023/03/18/thumbnails/200031_bangladesh_pratidin_ACC-brand-launching-picture.jpg?v=1679286286" alt="ইউরোপীয় ব্র্যান্ড এসিসির বাংলাদেশে যাত্রা শুরু

">
                <p>ইউরোপীয় ব্র্যান্ড এসিসির বাংলাদেশে যাত্রা শুরু
                </p>
            </a>
            <ul class="mt-1">
                <li class="bi bi-caret-right-fill"><a href="corporate-corner/2023/03/16/867896"> শুরু হতে যাচ্ছে ‘পোলার আইসক্রিম মনের সুখে আঁকি’ চিত্রাঙ্কন প্রতিযোগিতা ২০২৩ </a></li>
                <li class="bi bi-caret-right-fill"><a href="corporate-corner/2023/03/15/867558">
                        ওয়ালটন ফ্রিজ কিনে ১০১টি পণ্য ফ্রি পেলেন বাগেরহাটের নজরুল</a></li>
                <li class="bi bi-caret-right-fill"><a href="corporate-corner/2023/03/14/867278">রিয়েলমি ফ্যান ফেস্ট ২০২২-এর বিজয়ীর নাম প্রকাশ</a></li>
                <li class="bi bi-caret-right-fill"><a href="corporate-corner/2023/03/13/866922">ডাচ্-বাংলা ব্যাংকের মহাখালী শাখার স্থানান্তর </a></li>
            </ul>
        </div>
    </div>
</div>

@endsection