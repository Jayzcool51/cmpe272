val = 0;

$(".right-icon").click(function () {
    if(val!=-100){
        val-=100;
        $(".most-searched-box").animate({
            left:val+"%"
        },1000)
    }
});

$(".left-icon").click(function () {
    if(val!=0){
        val+=100;
        $(".most-searched-box").animate({
            left:val+"%"
        },1000)
    }
});

clicked = false;
$(".most-search-product-box").hover(function () {
    $(".most-search-product-box").css({
        width: "11%",
        transform: "scale(1,1)"
    });
    clicked = false;
    $(this).css({
        transform: "scale(1,1.3)",
        width: "15%"
    });
    $(".product-info").css({
        display:"none"
    });
    $(this).children().eq(1).children().eq(0).fadeIn();
},function () {
    if(!clicked){
        $(".most-search-product-box").css({
            width: "11.23%",
            transform: "scale(1,1)"
        });
        $(".product-info").css({
            display:"none"
        });
    }
});



$(".most-search-product-box").click(function () {
    var check = $(this).parent().parent().data("click");
    if(!check){
        $(this).parent().parent().data("click",true);
        clicked = true;
        $(".product-desc-section").animate({
            height: 0
        },100);
        $(this).css({
            transform: "scale(1,1.3)",
            width: "15%"
        });
        var desc = $(this).parent().parent().children().eq(2);
        desc.css({
            border: "1px solid white"
        });
        desc.animate({
            height: "300px"
        },300);
        $(this).children().eq(1).children().eq(0).fadeIn(200);
    }
});