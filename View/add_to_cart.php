<?php
    session_start();
?>
<?php
    error_reporting(0);
    extract($_GET);

    $servername = "13.56.13.38";
    $username = "admin";
    $password = "admin";
    $dbname = "gulliver";
    $quantity = 1;
    $user_id = $_SESSION["user_id"];
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if(mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysql_connect_error();
    }
    else {
        $sql = "INSERT INTO `Cart` (`product_id`, `user_id`, `quantity`) 
        VALUES ('$product_id', '$user_id', '$quantity')";
        $result = mysqli_query($conn, $sql);
        echo $result;
    }
?>