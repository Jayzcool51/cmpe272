<?php

    error_reporting(0);
    extract($_GET);

    $servername = "13.56.13.38";
    $username = "admin";
    $password = "admin";
    $dbname = "gulliver";

    $user_id = $_SESSION["user_id"];
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if(mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysql_connect_error();
    }
    else {
        $sql = "INSERT INTO `Rating` (`product_id`, `user_id`, `rating`, `review`) 
        VALUES ('$product_id', '$user_id', '$rating', '$review')";
        $result = mysqli_query($conn, $sql);
        if ($result == "1") {
            echo $_SESSION["user_name"];
        }
        else {
            echo "failed";   
        }
        mysqli_close($conn);
    }
?>