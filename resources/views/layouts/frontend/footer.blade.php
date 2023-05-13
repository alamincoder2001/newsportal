<div class="container">
    <div class="col-md-12">
    </div>
</div>
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

    .column-list {
        -webkit-column-count: 2;
        -moz-column-count: 2;
        column-count: 2;
    }

    .styled-list {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .styled-list li {
        position: relative;
        margin-bottom: 10px;
        padding-left: 20px;
        font-size: 16px;
    }

    .styled-list li a {
        color: black;
    }

    .styled-list li:before {
        content: "";
        position: absolute;
        left: 0;
        top: 7px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background-color: #333;
    }

    .styled-list li:after {
        content: "";
        position: absolute;
        left: 5px;
        top: 11px;
        width: 18px;
        height: 2px;
        background-color: #333;
        transform: rotate(-45deg);
    }
</style>


<div class="clearfix"></div>

<footer class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-3">
                        <a href="{{ route('website') }}" class="logo"><img style="width:80px;" src="{{ asset($setting->logo != null ? $setting->logo : 'noImage.jpg') }}" alt=""></a>
                    </div>
                    <div class="col-md-9 navbar-title">
                        <h1 class="m-0" style="font-weight: bolder;">{{ $setting->company_name }}</h1>
                        <h4 class="m-0" style="color: #ad0000;font-family: inherit;">{{$setting->company_name_english}}</h4>
                        <span class="navbar-subTitle-text">{{ $setting->title }}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div class="footer-editor">
                    <ul style="list-style: none;padding: 0;display: flex;margin: 0;margin-bottom:10px;justify-content: end;">
                        <li style="background: #cbcbcb;padding: 0px 6px;"><i class="bi bi-eye"></i><span class="ms-1">{{App\Models\Setting::banglaNumber($pagevisitors)}}</span></li>
                        <li style="font-weight:600;font-style: italic;background: #ffffff;padding: 0px 5px;font-size: 14px;text-transform: uppercase;line-height: 2;">আজকের পরিদর্শক</li>
                    </ul>
                    <h2 class="m-0 text-end"><span style="font-size: 25px;">সম্পাদক :</span> নির্ভয় নিউজ</h2>
                </div>
            </div>
        </div>
        <hr class="my-1">
        <div class="row py-1">
            <div class="col-md-4">
            <h3 style="font-size: 18px;font-weight: 600;border-bottom: 2px dashed #adadad;display: inline-flex;">ক্যাটাগরি:</h3>
                <ul class="column-list styled-list">
                    @foreach ($categories->take(9) as $item)
                    <li>
                        <a href="{{ route('categorywise', $item->slug) }}">{{ $item->name }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <h3 style="font-size: 18px;font-weight: 600;border-bottom: 2px dashed #adadad;display: inline-flex;">যোগাযোগের ঠিকানা:-</h3>
                <table>
                    <tr>
                        <td>বিজ্ঞাপন দেওয়ার জন্য যোগাাযোগ করুন- {{$setting->advertise_phone}}</td>
                    </tr>
                    <tr>
                        <td>ইডিটর ফোন- {{$setting->editor_phone}}</td>
                    </tr>
                    <tr>
                        <td>ঠিকানা- {{$setting->address}}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4">
                <h3 class="m-0 text-end" style="font-size: 20px;font-weight: 600;font-style: italic;">মোবাইল অ্যাপ ডাউনলোড করুন</h3>
                <div class="d-flex justify-content-end" style="gap: 5px;">
                    <a target="_blank" href="#" class="android"><img width="150px;" src="{{ asset('frontend') }}/assets/img/android.png"></a>
                    <a target="_blank" href="#" class="ios"><img width="150px;" src="{{ asset('frontend') }}/assets/img/ios-app.png"></a>
                </div>
                <ul style="display: flex;flex-direction: row-reverse;list-style: none;padding: 0;gap: 15px;margin-top: 5px;padding-left:50px;">
                    <li>
                        <a target="_blank" href="{{ $setting->instagram }}" style="color:#df1111fa;"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="{{ $setting->twitter }}" style="color:#11dbe5;"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="{{ $setting->youtube }}" style="color:red;"><i class="bi bi-youtube"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="{{ $setting->facebook }}"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>আমাদের সঙ্গে থাকুন</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div style="background: black;">
    <div class="container">
        <div class="footer-bottom">
            <ul>
                <li><a href="javascript:">যোগাযোগ</a></li>
                <li><a href="javascript:">গোপনীয়তা নীতি</a></li>
                <li><a href="javascript:" target="_blank">বিজ্ঞাপনের মূল্য তালিকা</a></li>
            </ul>
            <p class="copyright m-0">স্বত্ব © {{App\Models\Setting::banglaNumber(date('Y'))}} নির্ভয় নিউজ</p>
        </div>
    </div>
</div>
<a href="#" id="back-to-top" title="Back to top"><i class="bi bi-chevron-up"></i></a>

<script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/acmeticker.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/theme-script.js"></script>
<script src="{{ asset('frontend') }}/assets/js/jquery.date-dropdowns.js"></script>
<script src="{{ asset('frontend') }}/assets/js/calendar.js"></script>
<script type='text/javascript' src="{{ asset('frontend') }}/assets/js/bangla-date.js"></script>
<script type='text/javascript' src="{{ asset('frontend') }}/assets/js/arabic.js"></script>
<script type="text/javascript">
    $(function() {
        $("#btnArchive").click(function(e) {
            e.preventDefault();
            var arcDate = document.getElementsByName("date")[0].value;
            if (arcDate) {
                gtag('event', 'link', {
                    'event_label': 'On Content Archive',
                    'event_category': 'click',
                    'non_interaction': true
                });
                window.location = "/archive/" + arcDate;
            }
        });

        $("#example1").dateDropdowns({
            submitFormat: "yyyy/mm/dd",
            required: true
        });
    });


    $(document).ready(function() {
        $('#welcomeModal').modal('show');
        setTimeout(function() {
            $('#welcomeModal').modal('hide');
        }, 8000);
    });

    function dateTime() {
        let day = ["Sunday", "Monday", "Tuesday", "Wednessday", "Thursday", "Friday", "Saturday"];
        let month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
            "November", "December"
        ];
        time = new Date().toLocaleTimeString();
        // english date
        engDay = day[new Date().getDay()];
        engMonth = month[new Date().getMonth()];
        let englishDate = engDay + ', ' + new Date().getDate() + " " + engMonth + " " + new Date().getFullYear()
        // bangla date
        let banglaDate = new buetDateConverter().convert("l , j F, Y (বঙ্গাব্দ)");
        // arabic data
        let arabicDate = new Intl.DateTimeFormat('ar-TN-u-ca-islamic', {
            day: 'numeric',
            month: 'long',
            weekday: 'long',
            year: 'numeric'
        }).format(Date.now());

        document.getElementById("dateEnglish").innerText = englishDate
        document.getElementById("dateArabic").innerText = writeIslamicDate(new Date(), -1)
        document.getElementById("dateBangla").innerText = banglaDate
        document.getElementById("time").innerText = time
        setTimeout(() => {
            dateTime()
        }, 1000)
    }
    dateTime()

    $(document).ready(() => {
        $("table").attr("border", "1px")
        $("table").attr("cellspacing", 0)
        $("table").attr("cellpadding", 5)
    })
</script>