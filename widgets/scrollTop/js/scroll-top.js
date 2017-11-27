$(function(){

    var btnScroller = $("#btn-top-scroller");

    $(document).on("scroll", function() {
        var top = $("html, body").offset().top;
        if ($(window).scrollTop() > top+150) {
            btnScroller.fadeIn();
        } else {
            btnScroller.fadeOut();
        }
    });

    btnScroller.on("click", function(e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, 300);
    });

});
