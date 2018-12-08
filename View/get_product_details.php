<?php

    error_reporting(0);
    extract($_GET);
    $q= $_SERVER['QUERY_STRING'];
    $search_id = explode("=", $q)[1];
    $servername = "13.56.13.38";
    $username = "admin";
    $password = "admin";
    $dbname = "gulliver";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    $prod_details = mysqli_query($conn,"SELECT * FROM `Product` WHERE product_id = '$search_id'");
    $ratings = mysqli_query($conn,"SELECT * from `Rating` r LEFT JOIN `User` u ON u.user_id = r.user_id INNER JOIN `Product` p ON r.product_id = p.product_id WHERE r.product_id = '$search_id'");
    $data = array();
    if ($prod_details->num_rows > 0) {
        $sql = "UPDATE `Product` SET visit_count = visit_count + 1 WHERE product_id = '$search_id'";
        $conn->query($sql);
        $details = $prod_details->fetch_assoc();
        array_push($data, $details);
        if ($ratings->num_rows > 0) {
            $reviews = array();
            while($row = $ratings->fetch_assoc()){
            array_push($reviews, $row);
            }
            array_push($data, $reviews);
        }
        echo json_encode($data);
    } else {
        echo json_encode($data);
    }
?>