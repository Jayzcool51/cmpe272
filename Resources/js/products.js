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