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
</style>

<div class="clearfix"></div>

<footer class="mt-5">
    <div class="container">
        <div class="footer-top">
            <div class="imageSectionFooter" style="display: inline-flex;width: 500px;">
                <div style="width:20%;">
                    <img class="logo" src="{{ asset($setting->logo != null ? $setting->logo : 'noImage.jpg') }}">
                </div>
                <div style="width: 80%;">
                    <h1 style="font-family:'solaimanlipi';font-weight: 700;letter-spacing: 2px;" class="m-0">{{$setting->company_name}}</h1>
                    <span style="letter-spacing: 2px;">{{$setting->title}}</span>
                </div>
            </div>
            <div class="footer-editor">
                <ul style="list-style: none;padding: 0;display: flex;margin: 0;margin-bottom:10px;justify-content: end;">
                    <li style="background: #cbcbcb;padding: 0px 6px;"><i class="bi bi-eye"></i><span class="ms-1">{{App\Models\Setting::banglaNumber($pagevisitors)}}</span></li>
                    <li style="font-weight:600;font-style: italic;background: #ffffff;padding: 0px 5px;font-size: 14px;text-transform: uppercase;line-height: 2;">আজকের পরিদর্শক</li>
                </ul>
                <h2 class="m-0"><span>সম্পাদক :</span> নির্ভয় নিউজ</h2>
                <table style="width: 100%;">
                    <tr>
                        <td style="padding: 5px 3px;font-size: 15px;text-transform: uppercase;font-weight: 700;">বিজ্ঞাপণ ফোন</td>
                        <td style="padding: 0;">:</td>
                        <td style="padding: 5px 3px;padding-left:5px;font-size: 12px;text-transform: uppercase;font-weight: 700;">{{$setting->advertise_phone}}</td>
                    </tr>
                    <tr>
                        <td style="padding: 5px 3px;font-size: 15px;text-transform: uppercase;font-weight: 700;">ইডিটর ফোন</td>
                        <td style="padding: 0;">:</td>
                        <td style="padding: 5px 3px;padding-left:5px;font-size: 12px;text-transform: uppercase;font-weight: 700;">{{$setting->editor_phone}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="footer-mid">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4 pt-3">
                    <ul>
                        @foreach ($categories->take(9) as $item)
                        <li>
                            <a href="{{ route('categorywise', $item->slug) }}">{{ $item->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-12 col-md-4 col-lg-5"></div>
                <div class="col-12 col-md-4 col-lg-3 pt-3">
                    <div class="app-info">
                        <h3>মোবাইল অ্যাপ ডাউনলোড করুন</h3>
                        <div class="clearfix"></div>
                        <a target="_blank" href="#" class="android"><img src="{{ asset('frontend') }}/assets/img/android.png"></a>
                        <a target="_blank" href="#" class="ios"><img src="{{ asset('frontend') }}/assets/img/ios-app.png"></a>
                        <ul class="mt-3">
                            <li><a target="_blank" href="{{ $setting->instagram }}"><i class="bi bi-instagram"></i></a>
                            </li>
                            <li><a target="_blank" href="{{ $setting->twitter }}"><i class="bi bi-twitter"></i></a>
                            </li>
                            <li><a target="_blank" href="{{ $setting->youtube }}"><i class="bi bi-youtube"></i></a>
                            </li>
                            <li><a target="_blank" href="{{ $setting->facebook }}"><i class="bi bi-facebook"></i></a>
                            </li>
                            <li>আমাদের সঙ্গে থাকুন</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
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