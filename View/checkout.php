<?php
session_start();
?>
<?php
////print_r($_SESSION);
////extract($_POST);
//require_once('../stripe-php-master/init.php');
//// Set your secret key: remember to change this to your live secret key in production
//// See your keys here: https://dashboard.stripe.com/account/apikeys
//\Stripe\Stripe::setApiKey("sk_test_SIRzcGki1ZXHHPy2N2Hu0ess");
//// Token is created using Checkout or Elements!
//// Get the payment token ID submitted by the form:
//$token = $_POST['stripeToken'];
//$charge = \Stripe\Charge::create([
//    'amount' => $_COOKIE['total'],
//    'currency' => 'usd',
//    'description' => 'Example charge',
//    'source' => $token,
//]);
////echo $charge;
//$b = array();
//if($charge){
  //  echo $charge['id'].'<br>';
//echo $charge['amount'].'<br>';
#echo $charge['seller_message'].'<br>';
//echo $charge['status'].'<br>';
//echo $charge['source']['last4'].'<br>';
//extract($_POST);
    $product_id=$_COOKIE['items'];
//    print($product_id);
    $j=0;
//    for($i=0; $i<=strlen($product_id);$i+=2){
////        echo $product_id[$i];
//        array_push($b,$product_id[$i]);
//    }
    $b = explode(",",$product_id);
//    print_r($b);
    //$b = $product_id.explode(",");
    //print_r($b);
$user_id=$_SESSION["user_id"];
  //  echo $_SESSION["user_id"];
//$total=$charge['amount'];
$total = $_COOKIE['total'];
//$quantity=$_POST['quantity'];
//$cardlast=$charge['source']['last4'];
$cardlast = "3244";

$pay_id="34343";
//$pay_id=$charge['id'];

$servername = "13.56.13.38";
$username = "admin";
$password = "admin";
$dbname = "gulliver";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if(mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysql_connect_error();
}
else {
    foreach($b as $x){
    $sql = "INSERT INTO `Order` (`product_id`, `user_id`,`payment_id`,`total`,`cardlast`) 
    VALUES ($x, $user_id,'$pay_id',$total,'$cardlast')";
    $result = mysqli_query($conn, $sql);
   // echo $result;
    }

    $sql = "DELETE FROM `Cart` WHERE user_id='$user_id'";

if (mysqli_query($conn, $sql)) {
//echo "Record deleted successfully";
} else {
echo "Error deleting record: " . mysqli_error($conn);
}
}
mysqli_close($conn);
//if($charge['status']==="succeeded") {
//}
?>
<html>
    <head>
        <style>
            .layer{
                width: 100%;
                height: 100%;
                position: relative;
            }
            .box{
                width: 40%;
                height: 100px;
                border: 1px solid #a0a0a0;
                border-radius: 5px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                padding-top: 11px;
                background-color: #dff0d8;
                text-align: center;
            }

            h3{
                font-size: 22px;
                color: #3c763d;
            }

            h6{
                font-size: 17px;
                font-weight: 800;
            }

            .data{
                display: inline;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <div class="layer">
            <div class="box">
                <div class="data">
                    <h3>Successfully added to you orders</h3>
                    <h5>Order ID : #C<?php echo rand(0,9) ?>M<?php echo rand(10,80) ?>L<?php echo rand(1000,2000) ?></h5>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    setTimeout(function () {
        window.location.href ="home.php";
    },1500);
</script>
