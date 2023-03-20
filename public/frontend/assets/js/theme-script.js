(function ($) {
    document.addEventListener("DOMContentLoaded", function () {
        window.addEventListener("scroll", function () {
            if (window.scrollY > 200) {
                document
                    .getElementById("navbar_top")
                    .classList.add("fixed-top");
                navbar_height = document.querySelector(".navbar").offsetHeight;
                document.body.style.paddingTop = navbar_height + "px";
                document.getElementById("top-navbar-logo").style.display =
                    "block";
            } else {
                document
                    .getElementById("navbar_top")
                    .classList.remove("fixed-top");
                document.body.style.paddingTop = "0";
                document.getElementById("top-navbar-logo").style.display =
                    "none";
            }
        });
    });
    if ($("#back-to-top").length) {
        var scrollTrigger = 100,
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $("#back-to-top").addClass("show");
                    $(".bottom-sticky-ad").slideDown("slow");
                } else {
                    $("#back-to-top").removeClass("show");
                    $(".bottom-sticky-ad").slideUp("slow");
                }
            };
        backToTop();
        $(window).on("scroll", function () {
            backToTop();
        });
        $("#back-to-top").on("click", function (e) {
            e.preventDefault();
            $("html,body").animate({ scrollTop: 0 }, 500);
        });
    }
    $(document).ready(function () {});
    $(document).ready(function ($) {
        $("body").on("click", ".sticky-ad-down", function (event) {
            event.preventDefault();
            $(".bottom-sticky-ad").slideUp("slow", function () {
                $(this).remove();
            });
        });
        $(".my-news-ticker").AcmeTicker({
            type: "marquee",
            direction: "left",
            speed: 0.05,
            controls: { toggle: $(".acme-news-ticker-pause") },
        });
    });
    $("body").on("click", "#google-search", function (event) {
        event.preventDefault();
        $("#cse-search-box").css("display", "block");
    });
    $("body").on("click", "#cse-search-box a", function (event) {
        event.preventDefault();
        $("#cse-search-box").css("display", "none");
    });
    setTimeout(function () {
        var autoSwap = setInterval(swap, 6500);
        $("ul, span").hover(
            function () {
                clearInterval(autoSwap);
            },
            function () {
                clearInterval(autoSwap);
                autoSwap = setInterval(swap, 6500);
            }
        );
    }, 1000);
    var items = [];
    var startItem = 1;
    var position = 0;
    var itemCount = $(".carousel li.items").length;
    var leftpos = itemCount;
    var resetCount = itemCount;
    $("li.items").each(function (index) {
        items[index] = $(this).text();
    });
    function swap(action) {
        var direction = action;
        if (direction == "counter-clockwise") {
            var leftitem = $(".left-pos").attr("id") - 1;
            if (leftitem == 0) {
                leftitem = itemCount;
            }
            $(".right-pos").removeClass("right-pos").addClass("back-pos");
            $(".main-pos").removeClass("main-pos").addClass("right-pos");
            $(".left-pos").removeClass("left-pos").addClass("main-pos");
            $("#" + leftitem + "")
                .removeClass("back-pos")
                .addClass("left-pos");
            startItem--;
            if (startItem < 1) {
                startItem = itemCount;
            }
        }
        if (direction == "clockwise" || direction == "" || direction == null) {
            function pos(positionvalue) {
                if (positionvalue != "leftposition") {
                    position++;
                    if (startItem + position > resetCount) {
                        position = 1 - startItem;
                    }
                }
                if (positionvalue == "leftposition") {
                    position = startItem - 1;
                    if (position < 1) {
                        position = itemCount;
                    }
                }
                return position;
            }
            $("#" + startItem + "")
                .removeClass("main-pos")
                .addClass("left-pos");
            $("#" + (startItem + pos()) + "")
                .removeClass("right-pos")
                .addClass("main-pos");
            $("#" + (startItem + pos()) + "")
                .removeClass("back-pos")
                .addClass("right-pos");
            $("#" + pos("leftposition") + "")
                .removeClass("left-pos")
                .addClass("back-pos");
            startItem++;
            position = 0;
            if (startItem > itemCount) {
                startItem = 1;
            }
        }
    }
    $("#next").click(function () {
        swap("clockwise");
    });
    $("#prev").click(function () {
        swap("counter-clockwise");
    });
    $("#newsLinkCopy").click(function () {
        $("#newslink").select();
        document.execCommand("copy");
        $(".details-article .top-share-area li .alert").fadeIn("slow");
        setTimeout(function () {
            $(".details-article .top-share-area li .alert").fadeOut("slow");
        }, 1000);
        return false;
    });
    $("ul.navbar-nav li.dropdown").hover(
        function () {
            $(this)
                .find(".dropdown-menu")
                .stop(true, true)
                .delay(200)
                .fadeIn(300);
        },
        function () {
            $(this)
                .find(".dropdown-menu")
                .stop(true, true)
                .delay(200)
                .fadeOut(300);
        }
    );
    $("img:not([alt])").attr("alt", "বাংলাদেশ প্রতিদিন");
})(jQuery);
