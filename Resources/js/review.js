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
    console.log(val,review);
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
});