$("#toggle").click(function() {
    $(this).toggleClass('on');
    $("#resize").toggleClass("active");
});

$("#resize ul li a").click(function() {
    $(this).toggleClass('on');
    $("#resize").toggleClass("active");
});

$(".close-btn").click(function() {
    $(this).toggleClass('on');
    $("#resize").toggleClass("active");
});

$(function () {
    $(document).scroll(function () {
        var $nav = $(".nav");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});

$(function () {
    var $nav = $(".nav");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
});