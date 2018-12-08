<?php
error_reporting(0);
    extract($_POST);
    $product_id=$_POST['prod_id'];
    $user_id=$_POST['user_id'];
    $total=$_POST['total'];
    $quantity=$_POST['quantity'];
    $cardlast=['cardlst'];
    $pay_id=$_POST['pay_id'];

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
        $sql = "INSERT INTO `Order` (`product_id`, `user_id`,`address`,`payment_id`, `payment_type`,`timestamp`,`count`,`total`, `quantity`,`cardlast`) 
        VALUES ('$product_id', '$user_id',null,$pay_id,null,null,$total, '$quantity','$cardlast')";
        $result = mysqli_query($conn, $sql);
        echo $result;

        $sql = "DELETE FROM `Cart` WHERE user_id='$user_id'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
    }
    mysqli_close($conn);
?>