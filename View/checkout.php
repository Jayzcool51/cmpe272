<?php
extract($_POST)
require_once('../stripe-php-master/init.php');
// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_SIRzcGki1ZXHHPy2N2Hu0ess");
// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
$token = $_POST['stripeToken'];
$charge = \Stripe\Charge::create([
    'amount' => 999,
    'currency' => 'usd',
    'description' => 'Example charge',
    'source' => $token,
]);
echo $charge;
if($charge){
    echo $charge['id'].'<br>';
echo $charge['amount'].'<br>';
#echo $charge['seller_message'].'<br>';
#echo $charge['status'].'<br>';
echo $charge['source']['last4'].'<br>';
extract($_POST);
$product_id=$_POST['prod_id'];
$user_id=$_SESSION['user_id'];
$total=$charge['amount'];
$quantity=$_POST['quantity'];
$cardlast=$charge['source']['last4'];
$pay_id=$charge['id'];

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
    foreach($x as $product_id){
    $sql = "INSERT INTO `Order` (`product_id`, `user_id`,`address`,`payment_id`, `payment_type`,`timestamp`,`count`,`total`, `quantity`,`cardlast`) 
    VALUES ('$x', '$user_id',null,$pay_id,null,null,$total, '$quantity','$cardlast')";
    $result = mysqli_query($conn, $sql);
    echo $result;
    }

    $sql = "DELETE FROM `Cart` WHERE user_id='$user_id'";

if (mysqli_query($conn, $sql)) {
echo "Record deleted successfully";
} else {
echo "Error deleting record: " . mysqli_error($conn);
}
}
mysqli_close($conn);}
?>