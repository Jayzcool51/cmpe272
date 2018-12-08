
$("#microphone").click(function () {
   $(".hero-section-search").addClass("animated zoomOut");
    $(".hero-section-audio").delay(250).fadeIn().addClass("animated bounce");
});

$(".hero-back").hover(function () {
    $(".video-layer").css({
        "background-color": "background-color: rgba(0, 0, 0, 0.8);"
    });
    $(".hero-back").css({
        width:"14%"
    });
    $(this).css({
        height: "220%",
        width: "30%",
        transform: "translateY(-60%)",
        filter: "grayscale(0)"
    });
    $(".navbar").fadeOut();
},function () {
    $(this).clearQueue();
    $(".hero-back").css({
        width:"16.65%"
    });
    $(this).css({
        height: "100%",
        transform: "translateY(0)",
        filter: "grayscale(90%)"
    });
    $(".video-layer").css({
        "background-color": "background-color: rgba(0, 0, 0, 0.4);"
    });
    $(".navbar").fadeIn();
});

$(".hero-back-container").hover(function () {
    $(".web-sec").fadeIn(2000);
    $(".web-image").fadeIn(400).addClass("animated fadeInUp");
    $(".hero-section-head").fadeOut(300);
},function () {
    $(".web-sec").fadeOut(10);
    $(".web-image").addClass("fadeOutDown").fadeOut(400,function () {
        $(this).removeClass("animated fadeInUp fadeOutDown");
    });
    $(".hero-section-head").fadeIn(300);
});

$("#hero-back1").hover(function () {
    $(".web-video2").fadeOut(500);
    $(".web-video1").fadeIn(310,function () {
        $(".web-sec-primary-head").text("Feeling Hungry?");
        $(".web-sec-secondary-head").text("Order some delicious food from Ping Pong Cafe");
        $(".web-sec-tertiary-head").text("www.mayankdhingra.com");
    });
});

$("#hero-back2").hover(function () {
    $(".web-video1").fadeOut(500);
    $(".web-video2").fadeIn(310,function () {
        $(".web-sec-primary-head").text("Shree Shyam Bus Services");
        $(".web-sec-secondary-head").text("Travel the world with out wide range of services");
        $(".web-sec-tertiary-head").text("www.mohitgahlot.com");
    });
});

$("#hero-back1").click(function () {
    if(localStorage.getItem("mayank")){
        var val = parseInt(localStorage.getItem("mayank"));
    }
    else{
        val=1;
    }
    localStorage.setItem("mayank",val);
});

$("#hero-back1").click(function () {
    if(localStorage.getItem("mohit")){
        var val = parseInt(localStorage.getItem("mohit"));
    }
    else{
        val=1;
    }
    localStorage.setItem("mohit",val);
});