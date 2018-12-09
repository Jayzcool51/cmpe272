<?php
    session_start();
?>
<?php
$total_item=$_COOKIE['total'];
$items=$_COOKIE['items'];
?>
<!DOCTYPE html>
<head>

</head>
<body>
<p>form here</p>
<form action="checkout.php" method="POST">
    <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="pk_test_pig1mf1SqmOCu7htLHMAAwmW"
            data-amount="<?php $total_item?> "
            data-name="laccros Marketplace"
            data-description="Payment Page"
            data-image="../Resources/images/logo1.png"
            data-locale="auto">
    </script>
</form>
</body>
</html>