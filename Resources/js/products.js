
$(".right-icon").click(function () {
    var element = $(this).parent().children().eq(2).children().eq(1);
    val = element.data("pos");
    if(val!=-100){
        val-=100;
        element.data("pos",val);
        // $(".most-searched-box").animate({
        //     left:val+"%"
        // },1000);
        $(element).animate({
            left:val+"%"
        },1000);
    }
});

$(".left-icon").click(function () {
    var element = $(this).parent().children().eq(2).children().eq(1);
    val = element.data("pos");
    if(val!=0){
        val+=100;
        element.data("pos",val);
        $(element).animate({
            left:val+"%"
        },1000)
    }
});

clicked = false;
$(".most-search-product-box").hover(function () {
    var check = $(this).parent().parent().parent().data("click");
    if(!check){
        $(".most-search-product-box").css({
            width: "11.23%",
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
    }
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
    id = $(this).data("id");
    $.ajax({
        method: 'GET',
        url: "get_product_details.php",
        data: {id: id}
    }).done(function (msg) {
        val = JSON.parse(msg);
        console.log(val);
        $(".product_name").text(val[0]["product_name"]);
        $(".product_category").text(val[0]["description"]);
        nprice = parseInt(val[0]["price"]);
        oprice = nprice - (nprice*0.10);
        $(".new_price").text("$"+oprice);
        $(".old_price").text("$"+nprice);
        var keywords = val[0]["keywords"];
        $(".product_details").html("<div class='product_details_head'>Product Details </div>");
        keywords.split(",").forEach(function(val,i) {
            console.log(i);
            if(i<6){
                $(".product_details").append("<span class='product_detail'>"+val+"</span>")
            }
        });
    });

    var check = $(this).parent().parent().parent().data("click");
    if(!check){
        // $(".block").fadeIn();
        $(this).parent().parent().data("click",true);
        $(this).parent().parent().parent().data("click",true);
        clicked = true;
        // $(".product-desc-section").css({
        //     height: 0,
        //     border:0
        // },100);
        $(".product-desc-section").slideUp(200);
        $(this).css({
            transform: "scale(1,1.3)",
            width: "15%"
        });
        var desc = $(this).parent().parent().parent().parent().children().eq(2);
        desc.css({
            border: "1px solid white"
        });
        // desc.animate({
        //     height: "300px",
        //     "margin-bottom": "30px"
        // },300);
        desc.slideDown(200);
        $(this).children().eq(1).children().eq(0).fadeIn(200);
    }
    else{
        $(".block").fadeOut();
        $(this).parent().parent().data("click",false);
        $(this).parent().parent().parent().data("click",false);
        clicked = false;
        $(".most-search-product-box").css({
            width: "11.23%",
            transform: "scale(1,1)"
        });

        // $(".product-desc-section").animate({
        //     height: 0,
        //     padding:0,
        //     border:0
        // },200);
        $(".product-desc-section").slideUp(200);
    }
});


var val=null;
var review=null;
$(".radio+label").hover(function(event) {
        event.preventDefault();
        var val2=event.target.parentNode.previousElementSibling.value;
        $(".radio+label").css("color","#dadedf");
        for(var i=1;i<=val2;i++){
            $("#val"+i+"+label").css("color","gold");
        }
    },
    function(){
        $(".radio+label").css("color","#dadedf");
    });


$(":radio").change(function() {
    val = this.value;
    $(".radio+label").unbind('mouseenter mouseleave');
    $(":radio").unbind('change');
});


$(".add_review_btn").click(function() {
    review = $(".add_review_textarea").val();
    console.log(val,review,id);
    $.ajax({
        method: 'GET',
        url: "add_review.php",
        data: {product_id: parseInt(id), rating:parseInt(val), review:review}
    }).done(function (msg) {
        console.log(msg);
        alert("asdas");
    });
});


