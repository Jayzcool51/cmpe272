
<!-- Change isOrderPlaced flag according to your logic  -->
<?php
    session_start();
?>
<?php
    if (!isset($_SESSION["user_id"])) {
        header("Location: signupv3.php");
    }
?>
<?php
    error_reporting(0);
    extract($_GET);

    $servername = "13.56.13.38";
    $username = "admin";
    $password = "admin";
    $dbname = "gulliver";
    $user_id = $_SESSION["user_name"];
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if(mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysql_connect_error();
    }
    else {
        if ($isOrderPlaced != 1) {
            $sql = "DELETE FROM `Cart` WHERE cart_id = $cart_id";
            $result = mysqli_query($conn, $sql);
            if ($result == "1") {
                echo "removed";
            }
            else {
                echo "failed to remove";   
            }
        }
        else {
            $sql = "DELETE FROM `Cart` WHERE `user_id` = $user_id";
            $result = mysqli_query($conn, $sql);
            if ($result == "1") {
                echo "order placed";
            }
            else {
                echo "failed to place order";   
            }
        }
        mysqli_close($conn);
    }
?>