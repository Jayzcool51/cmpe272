<?php

    extract($_GET);

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
        $sql = "INSERT INTO `Rating` (`product_id`, `user_id`, `rating`, `review`) 
        VALUES ('$product_id', '$user_id', '$rating', '$review')";
        $result = mysqli_query($conn, $sql);
        echo $result;
        mysqli_close($conn);
    }
?>