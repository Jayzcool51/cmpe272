<?php
    $servername = "13.56.13.38";
    $username = "admin";
    $password = "admin";
    $dbname = "gulliver";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    extract($_GET);
    $user_id = 1;
    $sql = "INSERT INTO `Rating` (`product_id`, `user_id`, `rating`, `review`) 
    VALUES ('$product_id', '$user_id, '$rating', '$review')";
    $result = mysqli_query($conn, $sql);
    echo $result;
?>