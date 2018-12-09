$(".checkout_box").click(function () {
    // src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    // data-key="pk_test_pig1mf1SqmOCu7htLHMAAwmW"
    // data-amount="999"
    // data-name="laccros Marketplace"
    // data-description="Payment Page"
    // data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    // data-locale="auto">

    all_val = $("#getValue").data("id");
    arr = all_val.split("$");
    len = arr.length;
    total = arr[len-1];
    newArr = arr.splice(1,len-2);
    // data = {"data-key":"pk_test_pig1mf1SqmOCu7htLHMAAwmW","data-amount":arr[len-1], "data-name":"laccros Marketplace", "data-description":"Payment Page", "data-image":"../Resources/images/logo1.png", "data-locale":"auto"}
    // console.log(data);
    // $.ajax({
    //     method: 'POST',
    //     data: {'amount':arr[len-1],'items':newArr},
    //     url: 'test.php'
    // }).done(function (msg) {
    //     console.log(msg);
    // });
    document.cookie = "total="+total;
    document.cookie = "items="+newArr;
    window.location.href = "test.php";
});