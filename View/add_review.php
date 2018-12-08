<?php
    extract($_POST);
    $user_id = $_SESSION['user_id'];
    if ($review != "") {
        $sql = "INSERT INTO `Rating` (`product_id`, `user_id`, `rating`, `review`) 
        VALUES ('$product_id', '$user_id, '$rating', '$review')";
        $result = mysqli_query($conn, $sql);
        echo $result;
    }
    else {
        echo "0";
    }

?>