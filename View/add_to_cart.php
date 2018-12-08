<?php
    extract($_POST);
    $user_id = $_SESSION['user_id'];
    if ($review != "") {
        $sql = "INSERT INTO `Cart` (`product_id`, `user_id`, `quantity`) 
        VALUES ('$product_id', '$user_id, '$quantity')";
        $result = mysqli_query($conn, $sql);
        echo $result;
    }
    else {
        echo "0";
    }

?>