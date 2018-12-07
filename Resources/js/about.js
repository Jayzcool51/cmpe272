$(".profile").hover(function () {
    $(this).clearQueue();
    $(this).children().eq(1).fadeOut(300);
    $(this).children().eq(1).fadeIn(400).addClass("animated fadeInUp")
},function () {
    $(this).clearQueue();
    $(this).children().eq(1).fadeIn(300);
    $(this).children().eq(1).addClass("fadeOutDown").fadeOut(400,function () {
        $(this).removeClass("animated fadeInUp fadeOutDown");
    });
});