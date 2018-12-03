
$("#microphone").click(function () {
   $(".hero-section-search").addClass("animated zoomOut");
    $(".hero-section-audio").delay(250).fadeIn().addClass("animated bounce");
});

$(".hero-back").hover(function () {
    $(".hero-back").css({
        width:"14%"
    });
    $(this).css({
        height: "300%",
        width: "30%",
        transform: "translateY(-60%)",
        filter: "grayscale(0)"
    });
},function () {
    $(this).clearQueue();
    $(".hero-back").css({
        width:"16.65%"
    });
    $(this).css({
        height: "90%",
        transform: "translateY(0)",
        filter: "grayscale(95%)"
    });

});

$(".hero-back-container").hover(function () {
    $(".web-image").fadeIn(400).addClass("animated fadeInUp");
    $(".hero-section-head").fadeOut(300);
},function () {
    $(".web-image").addClass("fadeOutDown").fadeOut(400,function () {
        $(this).removeClass("animated fadeInUp fadeOutDown");
    });
    $(".hero-section-head").fadeIn(300);
});
