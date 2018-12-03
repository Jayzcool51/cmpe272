
$("#microphone").click(function () {
   $(".hero-section-search").addClass("animated zoomOut");
    $(".hero-section-audio").delay(250).fadeIn().addClass("animated bounce");
});

$(".hero-back").hover(function () {
    $(this).clearQueue();
   $(".hero-section-head").fadeOut(300);
    $(".web-image").fadeIn(400).addClass("animated fadeInUp")
},function () {
    $(this).clearQueue();
    $(".hero-section-head").fadeIn(300);
    $(".web-image").addClass("fadeOutDown").fadeOut(400,function () {
        $(this).removeClass("animated fadeInUp fadeOutDown");
    });
});

