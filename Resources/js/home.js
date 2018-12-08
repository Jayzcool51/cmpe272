
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


$("#hero-back3").hover(function () {
    // $(".web-video1").fadeOut(500);
    // $(".web-video2").fadeIn(310,function () {
        $(".web-sec-primary-head").text("Core Electronics");
        $(".web-sec-secondary-head").text("Explore our Core Electronics");
        $(".web-sec-tertiary-head").text("mohinishdaswani.space");
  //  });
});

$("#hero-back4").hover(function () {
    // $(".web-video1").fadeOut(500);
    // $(".web-video2").fadeIn(310,function () {
        $(".web-sec-primary-head").text("Cool cloudy");
        $(".web-sec-secondary-head").text("CoolCloudy simplifies work and share files anywhere in the world");
        $(".web-sec-tertiary-head").text("jayzcool.com");
    //});
});

$("#hero-back5").hover(function () {
    // $(".web-video1").fadeOut(500);
    // $(".web-video2").fadeIn(310,function () {
        $(".web-sec-primary-head").text("Talking Tees");
        $(".web-sec-secondary-head").text("Our T shirts talk");
        $(".web-sec-tertiary-head").text("www.dhruwill.com");
    //});
});

$("#hero-back6").hover(function () {
    // $(".web-video1").fadeOut(500);
    // $(".web-video2").fadeIn(310,function () {
        $(".web-sec-primary-head").text("Compass Computer Software and Hardware");
        $(".web-sec-secondary-head").text("We love providing people with most innovative technology solutions");
        $(".web-sec-tertiary-head").text("iamprabha.com");
    //});
});


$("#hero-back1").click(function () {
    if(localStorage.getItem("mayank")){
        var val = parseInt(localStorage.getItem("mayank"));
        val+=1
    }
    else{
        val=1;
    }
    localStorage.setItem("mayank",val);
});

$("#hero-back2").click(function () {
    if(localStorage.getItem("mohit")){
        var val = parseInt(localStorage.getItem("mohit"));
        val+=1
    }
    else{
        val=1;
    }
    localStorage.setItem("mohit",val);
});

$("#hero-back3").click(function () {
    if(localStorage.getItem("mohinish")){
        var val = parseInt(localStorage.getItem("mohinish"));
        val+=1
    }
    else{
        val=1;
    }
    localStorage.setItem("mohinish",val);
});


$("#hero-back4").click(function () {
    if(localStorage.getItem("jainam")){
        var val = parseInt(localStorage.getItem("jainam"));
        val+=1
    }
    else{
        val=1;
    }
    localStorage.setItem("jainam",val);
});

$("#hero-back5").click(function () {
    if(localStorage.getItem("dhruvil")){
        var val = parseInt(localStorage.getItem("dhruvil"));
        val+=1
    }
    else{
        val=1;
    }
    localStorage.setItem("dhruvil",val);
});

$("#hero-back6").click(function () {
    if(localStorage.getItem("prabha")){
        var val = parseInt(localStorage.getItem("prabha"));
        val+=1
    }
    else{
        val=1;
    }
    localStorage.setItem("prabha",val);
});
