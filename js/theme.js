$(".page-scroll").bind("click", function(o) {
    var t = $(this);
    $("html, body").stop().animate({
        scrollTop: $(t.attr("href")).offset().top - 64
    }, 1500, "easeInOutExpo"), o.preventDefault()
});
var cbpAnimatedHeader = function() {
    function o() {
        window.addEventListener("scroll", function(o) {
            a || (a = !0, setTimeout(t, 250))
        }, !1)
    }

    function t() {
        var o = e();
        o >= i ? classie.add(l, "navbar-shrink") : classie.remove(l, "navbar-shrink"), a = !1
    }

    function e() {
        return window.pageYOffset || n.scrollTop
    }
    var n = document.documentElement,
        l = document.querySelector(".navbar-fixed-top"),
        a = !1,
        i = 10;
    o()
};
$("body").scrollspy({
    target: ".navbar",
    offset: 65
}), $(window).load(function() {
    $(".page-loader").fadeOut("slow")
}), $("#owl-intro-text").owlCarousel({
    singleItem: !0,
    autoPlay: 6e3,
    stopOnHover: !0,
    navigation: !1,
    navigationText: !1,
    pagination: !0
}), $("#owl-partners").owlCarousel({
    items: 4,
    itemsDesktop: [1199, 3],
    itemsDesktopSmall: [980, 2],
    itemsTablet: [768, 2],
    autoPlay: 5e3,
    stopOnHover: !0,
    pagination: !1
}), $("#owl-testimonial").owlCarousel({
    singleItem: !0,
    pagination: !0,
    autoHeight: !0
}), $.stellar({
    horizontalScrolling: !1,
    verticalScrolling: !0
}), (new WOW).init(), $(".counter").counterUp({
    delay: 10,
    time: 2e3
}), $(window).load(function() {
    $(".portfolio_menu ul li").click(function() {
        $(".portfolio_menu ul li").removeClass("active_prot_menu"), $(this).addClass("active_prot_menu")
    });
    var o = $("#portfolio");
    o.isotope({
        itemSelector: ".col-sm-4",
        layoutMode: "fitRows"
    }), $("#filters").on("click", "a", function() {
        var t = $(this).attr("data-filter");
        return o.isotope({
            filter: t
        }), !1
    })
}), $(window).scroll(function() {
    $(this).scrollTop() > 100 ? $(".scrolltotop").fadeIn() : $(".scrolltotop").fadeOut()
}), $(".scrolltotop").click(function() {
    return $("html, body").animate({
        scrollTop: 0
    }, 1500, "easeInOutExpo"), !1
}), $(document).on("click", ".navbar-collapse.in", function(o) {
    $(o.target).is("a") && "dropdown-toggle" != $(o.target).attr("class") && $(this).collapse("hide")
});