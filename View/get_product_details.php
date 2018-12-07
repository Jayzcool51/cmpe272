<?php

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
    $result = mysqli_query($conn,"SELECT * FROM `Product` WHERE product_id = '$search_id'");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        $data = array();
        echo json_encode($data);
    }
?>