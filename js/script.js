const swiperSlider = new Swiper('.swiper', {
    autoplay: {
        delay: 3000,
        disableOnInteraction: false
    },

    loop: true,

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

});

// ===|swiper sec1 main|===

// let getBtn = document.querySelectorAll('.province path');
//
// for (let i of getBtn) {
//     i.addEventListener('click', loadData);
// }

// function loadData() {
//     let xhr = new XMLHttpRequest();
//     xhr.open('GET', 'news.html', true);
//
//     xhr.onload = function () {
//         if (this.status === 200) {
//             document.querySelector('.ostan-items-container').innerHTML = this.responseText;
//         }
//     }
//     xhr.send();
// }
// ===|ajax map|===


// start jquery

$(document).ready(function () {

    $(".map a").click(function (e) {
        e.preventDefault();
        return false;
    });

    $(".map path, .map a").on({
        "click": function () {
            let current = $(this).attr("x-id");
            $('.map path, .map a').removeClass("selectedMap");
            $('path[x-id="' + current + '"]').addClass("selectedMap");
            $('a[x-id="' + current + '"]').addClass("selectedMap");

            let titleSvg;
            if ($(this).is("a")) {
                titleSvg = $('text', this).html().trim();
            }else {
                titleSvg = $(this).attr("title");
            }

            $(".province-btn").text(titleSvg);
            $.post('./news.html',
                {myData: current},
                function (data) {
                    $('.ostan-items-container').replaceWith(data);
                });
        },
        mouseenter: function () {
            let current = $(this).attr("x-id");
            $('path[x-id="' + current + '"]').addClass("hoverMap");
            $('a[x-id="' + current + '"]').addClass("hoverMap");
        },
        mouseleave: function () {
            let current = $(this).attr("x-id");
            let isCurrent = $(this).hasClass("hoverMap");

            if (isCurrent) {
                $('a[x-id="' + current + '"]').removeClass("hoverMap");
                $('path[x-id="' + current + '"]').removeClass("hoverMap");
            }

        },
    });

    // ===| map |===

    $(".content , .content2").mCustomScrollbar({
        theme: "minimal"
    });

// ===|scroll|===

    var swiper = null;
    var isActive = false;

    $(window).resize(function () {
        let ww = document.body.clientWidth;

        if (ww <= 992 && isActive === false) {
            isActive = true;
            $(".electronic-main").addClass("swiper");
            $(".alfa").addClass("swiper-wrapper");
            $(".beta").addClass("swiper-slide");
            swiper = new Swiper('.electronic-main', {
                slidesPerView: 1,
                pagination: {
                    el: '.electronic-pagination',
                    clickable: true
                }
            });

        } else if (ww > 991 && isActive === true) {
            isActive = false;
            swiper.destroy();
            $(".beta").removeClass("swiper-slide");
            $(".alfa").removeClass("swiper-wrapper");
            $(".electronic-main").removeClass("swiper");
            $(".electronic-pagination * ").remove();
        }
    });


    // ===| swiper electronic |=== / ^ L1 , L2


    $(window).scroll(function () {
        if ($(window).scrollTop() > 200) {
            $("body").addClass('scroll');
        } else {
            $("body").removeClass('scroll');
        }
    })


    // ===| scroll-top header |===


    $(".burger-menu").click(function () {
        $(".back-layer-sidebar").addClass("show-access");
    })

    $(".close-btn").click(function () {
        $(".back-layer-sidebar").removeClass("show-access");
    })


    // ===| open & close burger menu |===


    $('.quick-item').each(function (element, index) {

        $('.quick-dropdown-title', element).on('click', function (e) {
            var par = $(this).parent('.quick-item');
            var hasExpanded = par.hasClass('expanded');
            $('.quick-item').removeClass('expanded');
            if (!hasExpanded) {
                par.addClass('expanded');
            }
        });

    })

    // ===| open & close & rotate quick access |===


    $(".select-menu-ostan").click(function () {
        $(".os-list").toggleClass("os-list-open");
    })


    // ===| open ostan list |===

    $(".c-tab").click(function (e) {
        e.preventDefault();
        return false;
    });

    // == cansel to pageup ==

    $(".c-tab").click(function () {
        $(".c-tab").removeClass('swi');
        $(this).addClass('swi');
        currentTab = parseInt($(this).attr("x-index"));
    });

    var tabCount = 6;
    var currentTab = 0;

    function activateNextTab() {
        currentTab = (currentTab + 1) % tabCount;
        $(".c-tab").removeClass("swi");
        $(".white-layer").removeClass("show");
        $('.c-tab[x-index="' + currentTab + '"]').addClass("swi");
        $('.white-layer[x-index="' + currentTab + '"]').addClass("show");
    }


    setInterval(activateNextTab, 2000)

    //===| aye |===

    var swiper2 = new Swiper('.swiper2', {

        direction: 'horizontal',
        loop: true,
        spaceBetween: 10,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
    })

    var $rIMG = $(".right-gozaresh-tasviri > img");
    $rIMG.on("mouseover", function () {
        let indexSwi = $(this).attr("index-swi");
        swiper2.slideToLoop(indexSwi);
    })

    $(".swiper2").on("mouseover", function () {
        swiper2.autoplay.stop();
    })

    var $lIMG = $(".left-gozaresh-tasviri > img");
    $lIMG.on("mouseover", function () {
        let indexSwi = $(this).attr("index-swi");
        swiper2.slideToLoop(indexSwi);
    })

    // ===| gozaresh tasviri |===
});

// end jquery









