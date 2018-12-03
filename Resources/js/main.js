$(document).ready(function () {

     var scrollVal = 100;
    setInterval(function () {
        $(".hero-back-container").clearQueue();
        $(".hero-back-container").animate({
            left: -scrollVal+"%"
        },400);
        scrollVal+=100;
        if(scrollVal==500){
            scrollVal=0;
        }
    },3000);

});