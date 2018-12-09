<?php
    session_start();
?>
<?php
    if (!isset($_SESSION["user_id"])) {
        header("Location: signupv3.php");
    }
?>
<html>
<head>
    <title>La Carros</title>
    <link rel="shortcut icon" href="../Resources/images/lacarrofavicon_MYH_icon.ico">
    <link rel="stylesheet" href="../Resources/css/cart.css">
    <link rel="stylesheet" href="../Resources/css/footerv2.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Open+Sans|Raleway|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../Resources/css/animate.css">
</head>
<body>
<div class="container">
    <div class="container-image"></div>
    <div class="logo">
        La Carros
              <img src="../Resources/images/logo1.png" alt="Website Logo" style="width:120px;height:120px;">
    </div>
    <div class="navbar">
        <a href="home.php"><div class="nav">Home</div></a>
        <a href="products.php"><div class="nav">Products</div></a>
        <a href="aboutus.php"><div class="nav">About Us</div></a>
        <a href="cart.php"><div class="nav">Cart</div></a>
        <a href="Analytics.php"><div class="nav">Analytics</div></a>
        <a href="#"><div class="nav">Sign Out</div></a>
    </div>
    <div class="hero-section">
        <div class="products clearfix">
            <div class="all_products clearfix">
                <?php
                error_reporting(0);
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
                $usersid = $_SESSION["user_id"];
                $res = mysqli_query($conn,"SELECT SUM(p.price) as total_price, COUNT(*) as total_items FROM `Cart` c INNER JOIN `Product` p ON p.product_id = c.product_id WHERE c.user_id = '$usersid'");
                $rows = $res->fetch_assoc();
                $total_items = $rows["total_items"];
                $total_price = $rows["total_price"];
                echo "
                <div class=\"product-head clearfix\">
                    <span class=\"left-product-head\">My Shopping Cart (".$total_items." items)</span>
                    <span class=\"right-product-head\">$".$total_price."</span>
                </div>
                ";
                $result = mysqli_query($conn,"SELECT * FROM `Cart` c INNER JOIN `Product` p ON p.product_id = c.product_id WHERE c.user_id = '$usersid'");
                if ($result->num_rows > 0) {
                    $p_array = "";
                    while($row = $result->fetch_assoc()){
                        $img = $row["image_url"];
                        $pid = $row["product_id"];
                        $p_array.="$".$pid;

                        $prod_name = $row["product_name"];
                        $price = $row["price"];
                        echo "
                            <div class=\"product clearfix\" >
                                <div class=\"product_img\">
                                    <img src=\"$img\"/>
                                </div>
                                <div class=\"product_desc_box\">
                                    <div class=\"prod_name\">
                                        $prod_name
                                    </div>
                                    <div class=\"product_qty\">
                                    </div>
                                    <div class=\"remove-section\">
                                        <div class=\"remove-btn\">
                                            Remove
                                        </div>
                                    </div>
                                </div>
                                <div class=\"product_price\">$".$price."</div>
                            </div>
                            ";
                        }
                    } else {
                        echo "0 results";
                    }
                echo "
            </div>";
                ?>
            <script>
                var arr =<?php json_encode($p_array);?>
            </script>
            <?php
            echo "
            <div class=\"total_amount_box clearfix\">
                <div class=\"total\">
                    <div id=\"price_det\"><b>Price Details</b></div>
                    <div>
                        <div class=\"price_info_value\">$".$total_price."</div>
                        <div class=\"price_info\">Bag Total</div>
                    </div>
                    <div>
                        <div class=\"price_info_value\">$0</div>
                        <div class=\"price_info\">Bag Discount</div>
                    </div>
                    <div>
                        <div class=\"price_info_value\">$0</div>
                        <div class=\"price_info\">Estimated Tax</div>
                    </div>
                    <div>
                        <div class=\"price_info_value\">$0</div>
                        <div class=\"price_info\">Delivery charges</div>

                    </div>
                </div>

                <div class=\"total_amt_block\">
                    <div class=\"total_amt_value\">$".$total_price."</div>
                    <div class=\"total_amt\">Total Amount</div>
                </div>
                ";
                ?>
                    <div class="checkout_box"><b>PLACE ORDER</b></div>
            </div>
        </div>

    </div>
</div>
<footer>
    <div class="wrapper clearfix">
        <div class="icon-row">
            <div class="icon_box">
                <a href="#"><i class="fab fa-facebook-square fa-lg"></i></a>
                <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
                <a href="#"><i class="fab fa-twitter-square fa-lg"></i></a>
                <a href="#"><i class="fab fa-youtube-square fa-lg"></i></a>
            </div>
        </div>
        <div class="box">
            <div class="row"><a href=# class="anchor_row">About us</a></div>
            <div class="row"><a href=# class="anchor_row">Media Center</a></div>
            <div class="row"><a href=# class="anchor_row">Privacy</a></div>
            <div class="row"><a href=# class="anchor_row">Contact Us</a></div>
        </div>
        <div class="box">
            <div class="row"><a href=# class="anchor_row">Audio Description</a></div>
            <div class="row"><a href=# class="anchor_row">Investor Relations</a></div>
            <div class="row"><a href=# class="anchor_row">Legal Notices</a></div>
        </div>
        <div class="box">
            <div class="row"><a href=# class="anchor_row">Help Center</a></div>
            <div class="row"><a href=# class="anchor_row">Jobs</a></div>
            <div class="row"><a href=# class="anchor_row">Cookie Preferences</a></div>
        </div>
        <div class="box_last">
            <div class="row"><a href=# class="anchor_row">Gift Cards</a></div>
            <div class="row"><a href=# class="anchor_row">Terms of Use</a></div>
            <div class="row"><a href=# class="anchor_row">Corporate Information</a></div>
        </div>
    </div>
</footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="../Resources/js/cart.js"></script>
</html>
