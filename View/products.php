<html>
<head>
    <title>Marketplace</title>
    <link rel="stylesheet" href="../Resources/css/product.css">
    <link rel="stylesheet" href="../Resources/css/review.css">
    <link rel="stylesheet" href="../Resources/css/footerv2.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Open+Sans|Raleway|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../Resources/css/animate.css">
</head>
<body>
<div class="container">
    <div class="container-image"></div>
    <div class="logo">
        Company Name
    </div>
    <div class="navbar">
        <div class="nav">Home</div>
        <div class="nav">Products</div>
        <div class="nav"></div>
        <div class="nav">About Us</div>
        <div class="nav">Contact</div>
    </div>
    <div class="most-searched-section" id="searchsection1">
        <div class="most-searched-head">
            Most Viewed Items
        </div>
        <div class="most-searched-box-container" data-click=false>
            <div class="left-icon"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
            <div class="right-icon">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
            <div class="most-searched-container">
                <div class="block"></div>
                <div class="most-searched-box clearfix" data-pos=0 >
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
                        $result = mysqli_query($conn,"SELECT *  FROM `Product` LIMIT 8");
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()){
                                $img = $row["image_url"];
                                $id = $row["product_id"];
                                echo "
                                <div class=\"most-search-product-box clearfix\" data-id=\"$id\">
                                    <div class=\"product-layer\">
                                    </div>
                                    <div class=\"most-seacrh-product-image\">
                                        <div class=\"product-info\">

                                        </div>
                                        <img src=\"$img\">
                                    </div>
                                </div>
                                ";
                            }
                        } else {
                            echo "0 results";
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="product-desc-section clearfix">
            <div class="left_desc clearfix">
                <div class="product_name">Tanggy Panner Sandwich</div>
                <div class="product_category">
                    Ping Pong Cafe
                </div>
                <div class="product_price">
                    <span class="new_price">$50</span><span class="old_price"><strike>$60</strike></span><span class="discount">(10% OFF)</span>
                </div>
                <div class="product_details">
                    <div class="product_details_head">
                        Product Details
                    </div>
                    <span class="product_detail">Sandwich</span>
                </div>
                <div class="product_buttons">
                    <div id="cart" class="cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Add to Cart</div>
                    <div class="wishlist"><i class="fa fa-bookmark" aria-hidden="true"></i> Add to Wishlist</div>
                </div>
<!--                <div class="add_review_box clearfix">-->
<!--                    <div class="heading_review_box">Add a review </div>-->
<!--                    <div class="review_add">-->
<!--                        <textarea rows="5" cols="60" class="review_area" name="review" >Enter your review here...</textarea>-->
<!--                        <div class="add_review_button">Add</div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
            <div class="right_desc">
<!--                <div class="product_details_head">-->
<!--                    Give Review-->
<!--                </div>-->
                <div class="add_review_box clearfix">
                    <span class="review_custom_head">Your Review</span>
                    <div class="star_area">
                        <div class="userrate-primary clearfix">
                            <ul class="rate-star">
                                <li>
                                    <input type="radio" value="1" class="radio" id="val1" name='val'/>
                                    <label for="val1"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="2" class="radio" id="val2" name='val'/>
                                    <label for="val2"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="3" class="radio" id="val3" name='val'/>
                                    <label for="val3"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="4" class="radio" id="val4" name='val'/>
                                    <label for="val4"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="5" class="radio" id="val5" name='val'/>
                                    <label for="val5"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="review_custom_text clearfix">
                        <textarea class="add_review_textarea" placeholder="Enter your review"></textarea>
                        <div class="add_review_button">
                            <button class="add_review_btn">
                                Add Review
                            </button>
                        </div>
                    </div>
                </div>
                <div class="top-reviews">
                    <div class="review_custom_head">Top Reviews</div>
                    <div class="all_reviews">
                        <div class="review clearfix">
                            <div class="review_user_name">Mayank Dhingra</div>
                            <div class="review_rating"><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i></div>
                            <div class="review_timestamp">Feb 5, 1997</div>
                            <div class="review_text">Whats my name? whats my name? whats my name? my name is sheela.Sheela sheela ki jawani i am too sexy for you main tere hath na aani</div>
                        </div>
                        <div class="review clearfix">
                            <div class="review_user_name">Mayank Dhingra</div>
                            <div class="review_rating"><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i></div>
                            <div class="review_timestamp">Feb 5, 1997</div>
                            <div class="review_text">Whats my name? whats my name? whats my name? my name is sheela.Sheela sheela ki jawani i am too sexy for you main tere hath na aani</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="products-section clearfix">
        <div class="product-left">
            Coffee and Shakes
        </div>
        <div class="product-right">
            <div class="product-right-content">
                Burger
            </div>
            <div class="product-right-content">
                Sandwich
            </div>
        </div>
    </div>
    <div class="most-searched-section" id="searchsection2">
        <div class="most-searched-head">
            Most Viewed Items
        </div>
        <div class="most-searched-box-container" data-click=false>
            <div class="left-icon"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
            <div class="right-icon">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
            <div class="most-searched-container">
                <div class="block"></div>
                <div class="most-searched-box clearfix" data-pos=0 >
                    <?php
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
                        $result = mysqli_query($conn,"SELECT *  FROM `Product` WHERE website LIKE '%dhruwill%' LIMIT 8");
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()){
                                $img = $row["image_url"];
                                $id = $row["product_id"];
                                echo "
                                <div class=\"most-search-product-box clearfix\" data-id=\"$id\">
                                    <div class=\"product-layer\">
                                    </div>
                                    <div class=\"most-seacrh-product-image\">
                                        <div class=\"product-info\">

                                        </div>
                                        <img src=\"$img\">
                                    </div>
                                </div>
                                ";
                            }
                        } else {
                            echo "0 results";
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="product-desc-section clearfix">
            <div class="left_desc clearfix">
                <div class="product_name">Tanggy Panner Sandwich</div>
                <div class="product_category">
                    Ping Pong Cafe
                </div>
                <div class="product_price">
                    <span class="new_price">$50</span><span class="old_price"><strike>$60</strike></span><span class="discount">(10% OFF)</span>
                </div>
                <div class="product_details">
                    <div class="product_details_head">
                        Product Details
                    </div>
                    <span class="product_detail">Sandwich</span><span class="product_detail">Ping Pong Cafe</span><span class="product_detail">Sandwich</span><span class="product_detail">Ping Pong Cafe</span>
                </div>
                <div class="product_buttons">
                    <div class="cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Add to Cart</div>
                    <div class="wishlist"><i class="fa fa-bookmark" aria-hidden="true"></i> Add to Wishlist</div>
                </div>
                <!--                <div class="add_review_box clearfix">-->
                <!--                    <div class="heading_review_box">Add a review </div>-->
                <!--                    <div class="review_add">-->
                <!--                        <textarea rows="5" cols="60" class="review_area" name="review" >Enter your review here...</textarea>-->
                <!--                        <div class="add_review_button">Add</div>-->
                <!--                    </div>-->
                <!--                </div>-->

            </div>
            <div class="right_desc">
                <!--                <div class="product_details_head">-->
                <!--                    Give Review-->
                <!--                </div>-->
                <div class="add_review_box clearfix">
                    <span class="review_custom_head">Your Review</span>
                    <div class="star_area">
                        <div class="userrate-primary clearfix">
                            <ul class="rate-star">
                                <li>
                                    <input type="radio" value="1" class="radio" id="val1" name='val'/>
                                    <label for="val1"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="2" class="radio" id="val2" name='val'/>
                                    <label for="val2"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="3" class="radio" id="val3" name='val'/>
                                    <label for="val3"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="4" class="radio" id="val4" name='val'/>
                                    <label for="val4"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="5" class="radio" id="val5" name='val'/>
                                    <label for="val5"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="review_custom_text clearfix">
                        <textarea class="add_review_textarea" placeholder="Enter your review"></textarea>
                        <div class="add_review_button">
                            <button class="add_review_btn">
                                Add Review
                            </button>
                        </div>
                    </div>
                </div>
                <div class="top-reviews">
                    <div class="review_custom_head">Top Reviews</div>
                    <div class="all_reviews">
                        <div class="review clearfix">
                            <div class="review_user_name">Mayank Dhingra</div>
                            <div class="review_rating"><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i></div>
                            <div class="review_timestamp">Feb 5, 1997</div>
                            <div class="review_text">Whats my name? whats my name? whats my name? my name is sheela.Sheela sheela ki jawani i am too sexy for you main tere hath na aani</div>
                        </div>
                        <div class="review clearfix">
                            <div class="review_user_name">Mayank Dhingra</div>
                            <div class="review_rating"><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i></div>
                            <div class="review_timestamp">Feb 5, 1997</div>
                            <div class="review_text">Whats my name? whats my name? whats my name? my name is sheela.Sheela sheela ki jawani i am too sexy for you main tere hath na aani</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="most-searched-section" id="searchsection3">
        <div class="most-searched-head">
            Most Viewed Items
        </div>
        <div class="most-searched-box-container" data-click=false>
            <div class="left-icon"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
            <div class="right-icon">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
            <div class="most-searched-container">
                <div class="block"></div>
                <div class="most-searched-box clearfix" data-pos=0 >
                    <?php
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
                        $result = mysqli_query($conn,"SELECT *  FROM `Product` WHERE website LIKE '%mohit%' LIMIT 8");
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()){
                                $img = $row["image_url"];
                                $id = $row["product_id"];
                                echo "
                                <div class=\"most-search-product-box clearfix\" data-id=\"$id\">
                                    <div class=\"product-layer\">
                                    </div>
                                    <div class=\"most-seacrh-product-image\">
                                        <div class=\"product-info\">

                                        </div>
                                        <img src=\"$img\">
                                    </div>
                                </div>
                                ";
                            }
                        } else {
                            echo "0 results";
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="product-desc-section clearfix">
            <div class="left_desc clearfix">
                <div class="product_name">Tanggy Panner Sandwich</div>
                <div class="product_category">
                    Ping Pong Cafe
                </div>
                <div class="product_price">
                    <span class="new_price">$50</span><span class="old_price"><strike>$60</strike></span><span class="discount">(10% OFF)</span>
                </div>
                <div class="product_details">
                    <div class="product_details_head">
                        Product Details
                    </div>
                    <span class="product_detail">Sandwich</span><span class="product_detail">Ping Pong Cafe</span><span class="product_detail">Sandwich</span><span class="product_detail">Ping Pong Cafe</span>
                </div>
                <div class="product_buttons">
                    <div class="cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Add to Cart</div>
                    <div class="wishlist"><i class="fa fa-bookmark" aria-hidden="true"></i> Add to Wishlist</div>
                </div>
                <!--                <div class="add_review_box clearfix">-->
                <!--                    <div class="heading_review_box">Add a review </div>-->
                <!--                    <div class="review_add">-->
                <!--                        <textarea rows="5" cols="60" class="review_area" name="review" >Enter your review here...</textarea>-->
                <!--                        <div class="add_review_button">Add</div>-->
                <!--                    </div>-->
                <!--                </div>-->

            </div>
            <div class="right_desc">
                <!--                <div class="product_details_head">-->
                <!--                    Give Review-->
                <!--                </div>-->
                <div class="add_review_box clearfix">
                    <span class="review_custom_head">Your Review</span>
                    <div class="star_area">
                        <div class="userrate-primary clearfix">
                            <ul class="rate-star">
                                <li>
                                    <input type="radio" value="1" class="radio" id="val1" name='val'/>
                                    <label for="val1"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="2" class="radio" id="val2" name='val'/>
                                    <label for="val2"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="3" class="radio" id="val3" name='val'/>
                                    <label for="val3"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="4" class="radio" id="val4" name='val'/>
                                    <label for="val4"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="5" class="radio" id="val5" name='val'/>
                                    <label for="val5"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="review_custom_text clearfix">
                        <textarea class="add_review_textarea" placeholder="Enter your review"></textarea>
                        <div class="add_review_button">
                            <button class="add_review_btn">
                                Add Review
                            </button>
                        </div>
                    </div>
                </div>
                <div class="top-reviews">
                    <div class="review_custom_head">Top Reviews</div>
                    <div class="all_reviews">
                        <div class="review clearfix">
                            <div class="review_user_name">Mayank Dhingra</div>
                            <div class="review_rating"><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i></div>
                            <div class="review_timestamp">Feb 5, 1997</div>
                            <div class="review_text">Whats my name? whats my name? whats my name? my name is sheela.Sheela sheela ki jawani i am too sexy for you main tere hath na aani</div>
                        </div>
                        <div class="review clearfix">
                            <div class="review_user_name">Mayank Dhingra</div>
                            <div class="review_rating"><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i></div>
                            <div class="review_timestamp">Feb 5, 1997</div>
                            <div class="review_text">Whats my name? whats my name? whats my name? my name is sheela.Sheela sheela ki jawani i am too sexy for you main tere hath na aani</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="most-searched-section" id="searchsection4">
        <div class="most-searched-head">
            Most Viewed Items
        </div>
        <div class="most-searched-box-container" data-click=false>
            <div class="left-icon"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
            <div class="right-icon">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
            <div class="most-searched-container">
                <div class="block"></div>
                <div class="most-searched-box clearfix" data-pos=0 >
                    <?php
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
                        $result = mysqli_query($conn,"SELECT *  FROM `Product` WHERE website LIKE '%prabha%' LIMIT 8");
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()){
                                $img = $row["image_url"];
                                $id = $row["product_id"];
                                echo "
                                <div class=\"most-search-product-box clearfix\" data-id=\"$id\">
                                    <div class=\"product-layer\">
                                    </div>
                                    <div class=\"most-seacrh-product-image\">
                                        <div class=\"product-info\">

                                        </div>
                                        <img src=\"$img\">
                                    </div>
                                </div>
                                ";
                            }
                        } else {
                            echo "0 results";
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="product-desc-section clearfix">
            <div class="left_desc clearfix">
                <div class="product_name">Tanggy Panner Sandwich</div>
                <div class="product_category">
                    Ping Pong Cafe
                </div>
                <div class="product_price">
                    <span class="new_price">$50</span><span class="old_price"><strike>$60</strike></span><span class="discount">(10% OFF)</span>
                </div>
                <div class="product_details">
                    <div class="product_details_head">
                        Product Details
                    </div>
                    <span class="product_detail">Sandwich</span><span class="product_detail">Ping Pong Cafe</span><span class="product_detail">Sandwich</span><span class="product_detail">Ping Pong Cafe</span>
                </div>
                <div class="product_buttons">
                    <div class="cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Add to Cart</div>
                    <div class="wishlist"><i class="fa fa-bookmark" aria-hidden="true"></i> Add to Wishlist</div>
                </div>
                <!--                <div class="add_review_box clearfix">-->
                <!--                    <div class="heading_review_box">Add a review </div>-->
                <!--                    <div class="review_add">-->
                <!--                        <textarea rows="5" cols="60" class="review_area" name="review" >Enter your review here...</textarea>-->
                <!--                        <div class="add_review_button">Add</div>-->
                <!--                    </div>-->
                <!--                </div>-->

            </div>
            <div class="right_desc">
                <!--                <div class="product_details_head">-->
                <!--                    Give Review-->
                <!--                </div>-->
                <div class="add_review_box clearfix">
                    <span class="review_custom_head">Your Review</span>
                    <div class="star_area">
                        <div class="userrate-primary clearfix">
                            <ul class="rate-star">
                                <li>
                                    <input type="radio" value="1" class="radio" id="val1" name='val'/>
                                    <label for="val1"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="2" class="radio" id="val2" name='val'/>
                                    <label for="val2"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="3" class="radio" id="val3" name='val'/>
                                    <label for="val3"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="4" class="radio" id="val4" name='val'/>
                                    <label for="val4"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="5" class="radio" id="val5" name='val'/>
                                    <label for="val5"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="review_custom_text clearfix">
                        <textarea class="add_review_textarea" placeholder="Enter your review"></textarea>
                        <div class="add_review_button">
                            <button class="add_review_btn">
                                Add Review
                            </button>
                        </div>
                    </div>
                </div>
                <div class="top-reviews">
                    <div class="review_custom_head">Top Reviews</div>
                    <div class="all_reviews">
                        <div class="review clearfix">
                            <div class="review_user_name">Mayank Dhingra</div>
                            <div class="review_rating"><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i></div>
                            <div class="review_timestamp">Feb 5, 1997</div>
                            <div class="review_text">Whats my name? whats my name? whats my name? my name is sheela.Sheela sheela ki jawani i am too sexy for you main tere hath na aani</div>
                        </div>
                        <div class="review clearfix">
                            <div class="review_user_name">Mayank Dhingra</div>
                            <div class="review_rating"><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i></div>
                            <div class="review_timestamp">Feb 5, 1997</div>
                            <div class="review_text">Whats my name? whats my name? whats my name? my name is sheela.Sheela sheela ki jawani i am too sexy for you main tere hath na aani</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="products-section clearfix">
        <div class="product-left">
            Coffee and Shakes
        </div>
        <div class="product-right">
            <div class="product-right-content">
                Burger
            </div>
            <div class="product-right-content">
                Sandwich
            </div>
        </div>
    </div>
    <div class="most-searched-section" id="searchsection5">
        <div class="most-searched-head">
            Most Viewed Items
        </div>
        <div class="most-searched-box-container" data-click=false>
            <div class="left-icon"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
            <div class="right-icon">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
            <div class="most-searched-container">
                <div class="block"></div>
                <div class="most-searched-box clearfix" data-pos=0 >
                    <?php
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
                        $result = mysqli_query($conn,"SELECT *  FROM `Product` WHERE website LIKE '%mayank%' LIMIT 8");
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()){
                                $img = $row["image_url"];
                                $id = $row["product_id"];
                                echo "
                                <div class=\"most-search-product-box clearfix\" data-id=\"$id\">
                                    <div class=\"product-layer\">
                                    </div>
                                    <div class=\"most-seacrh-product-image\">
                                        <div class=\"product-info\">

                                        </div>
                                        <img src=\"$img\">
                                    </div>
                                </div>
                                ";
                            }
                        } else {
                            echo "0 results";
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="product-desc-section clearfix">
            <div class="left_desc clearfix">
                <div class="product_name">Tanggy Panner Sandwich</div>
                <div class="product_category">
                    Ping Pong Cafe
                </div>
                <div class="product_price">
                    <span class="new_price">$50</span><span class="old_price"><strike>$60</strike></span><span class="discount">(10% OFF)</span>
                </div>
                <div class="product_details">
                    <div class="product_details_head">
                        Product Details
                    </div>
                    <span class="product_detail">Sandwich</span><span class="product_detail">Ping Pong Cafe</span><span class="product_detail">Sandwich</span><span class="product_detail">Ping Pong Cafe</span>
                </div>
                <div class="product_buttons">
                    <div class="cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Add to Cart</div>
                    <div class="wishlist"><i class="fa fa-bookmark" aria-hidden="true"></i> Add to Wishlist</div>
                </div>
                <!--                <div class="add_review_box clearfix">-->
                <!--                    <div class="heading_review_box">Add a review </div>-->
                <!--                    <div class="review_add">-->
                <!--                        <textarea rows="5" cols="60" class="review_area" name="review" >Enter your review here...</textarea>-->
                <!--                        <div class="add_review_button">Add</div>-->
                <!--                    </div>-->
                <!--                </div>-->

            </div>
            <div class="right_desc">
                <!--                <div class="product_details_head">-->
                <!--                    Give Review-->
                <!--                </div>-->
                <div class="add_review_box clearfix">
                    <span class="review_custom_head">Your Review</span>
                    <div class="star_area">
                        <div class="userrate-primary clearfix">
                            <ul class="rate-star">
                                <li>
                                    <input type="radio" value="1" class="radio" id="val1" name='val'/>
                                    <label for="val1"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="2" class="radio" id="val2" name='val'/>
                                    <label for="val2"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="3" class="radio" id="val3" name='val'/>
                                    <label for="val3"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="4" class="radio" id="val4" name='val'/>
                                    <label for="val4"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="5" class="radio" id="val5" name='val'/>
                                    <label for="val5"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="review_custom_text clearfix">
                        <textarea class="add_review_textarea" placeholder="Enter your review"></textarea>
                        <div class="add_review_button">
                            <button class="add_review_btn">
                                Add Review
                            </button>
                        </div>
                    </div>
                </div>
                <div class="top-reviews">
                    <div class="review_custom_head">Top Reviews</div>
                    <div class="all_reviews">
                        <div class="review clearfix">
                            <div class="review_user_name">Mayank Dhingra</div>
                            <div class="review_rating"><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i></div>
                            <div class="review_timestamp">Feb 5, 1997</div>
                            <div class="review_text">Whats my name? whats my name? whats my name? my name is sheela.Sheela sheela ki jawani i am too sexy for you main tere hath na aani</div>
                        </div>
                        <div class="review clearfix">
                            <div class="review_user_name">Mayank Dhingra</div>
                            <div class="review_rating"><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i></div>
                            <div class="review_timestamp">Feb 5, 1997</div>
                            <div class="review_text">Whats my name? whats my name? whats my name? my name is sheela.Sheela sheela ki jawani i am too sexy for you main tere hath na aani</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="most-searched-section" id="searchsection6">
        <div class="most-searched-head">
            Most Viewed Items
        </div>
        <div class="most-searched-box-container" data-click=false>
            <div class="left-icon"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
            <div class="right-icon">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
            <div class="most-searched-container">
                <div class="block"></div>
                <div class="most-searched-box clearfix" data-pos=0 >
                    <?php
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
                        $result = mysqli_query($conn,"SELECT *  FROM `Product` WHERE website LIKE '%jay%' LIMIT 8");
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()){
                                $img = $row["image_url"];
                                $id = $row["product_id"];
                                echo "
                                <div class=\"most-search-product-box clearfix\" data-id=\"$id\">
                                    <div class=\"product-layer\">
                                    </div>
                                    <div class=\"most-seacrh-product-image\">
                                        <div class=\"product-info\">

                                        </div>
                                        <img src=\"$img\">
                                    </div>
                                </div>
                                ";
                            }
                        } else {
                            echo "0 results";
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="product-desc-section clearfix">
            <div class="left_desc clearfix">
                <div class="product_name">Tanggy Panner Sandwich</div>
                <div class="product_category">
                    Ping Pong Cafe
                </div>
                <div class="product_price">
                    <span class="new_price">$50</span><span class="old_price"><strike>$60</strike></span><span class="discount">(10% OFF)</span>
                </div>
                <div class="product_details">
                    <div class="product_details_head">
                        Product Details
                    </div>
                    <span class="product_detail">Sandwich</span><span class="product_detail">Ping Pong Cafe</span><span class="product_detail">Sandwich</span><span class="product_detail">Ping Pong Cafe</span>
                </div>
                <div class="product_buttons">
                    <div class="cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Add to Cart</div>
                    <div class="wishlist"><i class="fa fa-bookmark" aria-hidden="true"></i> Add to Wishlist</div>
                </div>
                <!--                <div class="add_review_box clearfix">-->
                <!--                    <div class="heading_review_box">Add a review </div>-->
                <!--                    <div class="review_add">-->
                <!--                        <textarea rows="5" cols="60" class="review_area" name="review" >Enter your review here...</textarea>-->
                <!--                        <div class="add_review_button">Add</div>-->
                <!--                    </div>-->
                <!--                </div>-->

            </div>
            <div class="right_desc">
                <!--                <div class="product_details_head">-->
                <!--                    Give Review-->
                <!--                </div>-->
                <div class="add_review_box clearfix">
                    <span class="review_custom_head">Your Review</span>
                    <div class="star_area">
                        <div class="userrate-primary clearfix">
                            <ul class="rate-star">
                                <li>
                                    <input type="radio" value="1" class="radio" id="val1" name='val'/>
                                    <label for="val1"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="2" class="radio" id="val2" name='val'/>
                                    <label for="val2"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="3" class="radio" id="val3" name='val'/>
                                    <label for="val3"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="4" class="radio" id="val4" name='val'/>
                                    <label for="val4"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="5" class="radio" id="val5" name='val'/>
                                    <label for="val5"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="review_custom_text clearfix">
                        <textarea class="add_review_textarea" placeholder="Enter your review"></textarea>
                        <div class="add_review_button">
                            <button class="add_review_btn">
                                Add Review
                            </button>
                        </div>
                    </div>
                </div>
                <div class="top-reviews">
                    <div class="review_custom_head">Top Reviews</div>
                    <div class="all_reviews">
                        <div class="review clearfix">
                            <div class="review_user_name">Mayank Dhingra</div>
                            <div class="review_rating"><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i></div>
                            <div class="review_timestamp">Feb 5, 1997</div>
                            <div class="review_text">Whats my name? whats my name? whats my name? my name is sheela.Sheela sheela ki jawani i am too sexy for you main tere hath na aani</div>
                        </div>
                        <div class="review clearfix">
                            <div class="review_user_name">Mayank Dhingra</div>
                            <div class="review_rating"><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i></div>
                            <div class="review_timestamp">Feb 5, 1997</div>
                            <div class="review_text">Whats my name? whats my name? whats my name? my name is sheela.Sheela sheela ki jawani i am too sexy for you main tere hath na aani</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="most-searched-section" id="searchsection7">
        <div class="most-searched-head">
            Most Viewed Items
        </div>
        <div class="most-searched-box-container remove-margin" data-click=false>
            <div class="left-icon"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
            <div class="right-icon">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
            <div class="most-searched-container">
                <div class="block"></div>
                <div class="most-searched-box clearfix" data-pos=0 >
                    <?php
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
                        $result = mysqli_query($conn,"SELECT *  FROM `Product` WHERE website LIKE '%mohinish%' LIMIT 8");
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()){
                                $img = $row["image_url"];
                                $id = $row["product_id"];
                                echo "
                                <div class=\"most-search-product-box clearfix\" data-id=\"$id\">
                                    <div class=\"product-layer\">
                                    </div>
                                    <div class=\"most-seacrh-product-image\">
                                        <div class=\"product-info\">

                                        </div>
                                        <img src=\"$img\">
                                    </div>
                                </div>
                                ";
                            }
                        } else {
                            echo "0 results";
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="product-desc-section clearfix">
            <div class="left_desc clearfix">
                <div class="product_name">Tanggy Panner Sandwich</div>
                <div class="product_category">
                    Ping Pong Cafe
                </div>
                <div class="product_price">
                    <span class="new_price">$50</span><span class="old_price"><strike>$60</strike></span><span class="discount">(10% OFF)</span>
                </div>
                <div class="product_details">
                    <div class="product_details_head">
                        Product Details
                    </div>
                    <span class="product_detail">Sandwich</span><span class="product_detail">Ping Pong Cafe</span><span class="product_detail">Sandwich</span><span class="product_detail">Ping Pong Cafe</span>
                </div>
                <div class="product_buttons">
                    <div class="cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Add to Cart</div>
                    <div class="wishlist"><i class="fa fa-bookmark" aria-hidden="true"></i> Add to Wishlist</div>
                </div>
                <!--                <div class="add_review_box clearfix">-->
                <!--                    <div class="heading_review_box">Add a review </div>-->
                <!--                    <div class="review_add">-->
                <!--                        <textarea rows="5" cols="60" class="review_area" name="review" >Enter your review here...</textarea>-->
                <!--                        <div class="add_review_button">Add</div>-->
                <!--                    </div>-->
                <!--                </div>-->

            </div>
            <div class="right_desc">
                <!--                <div class="product_details_head">-->
                <!--                    Give Review-->
                <!--                </div>-->
                <div class="add_review_box clearfix">
                    <span class="review_custom_head">Your Review</span>
                    <div class="star_area">
                        <div class="userrate-primary clearfix">
                            <ul class="rate-star">
                                <li>
                                    <input type="radio" value="1" class="radio" id="val1" name='val'/>
                                    <label for="val1"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="2" class="radio" id="val2" name='val'/>
                                    <label for="val2"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="3" class="radio" id="val3" name='val'/>
                                    <label for="val3"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="4" class="radio" id="val4" name='val'/>
                                    <label for="val4"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                                <li>
                                    <input type="radio" value="5" class="radio" id="val5" name='val'/>
                                    <label for="val5"><i class="fa fa-star star" aria-hidden="true"></i></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="review_custom_text clearfix">
                        <textarea class="add_review_textarea" placeholder="Enter your review"></textarea>
                        <div class="add_review_button">
                            <button class="add_review_btn">
                                Add Review
                            </button>
                        </div>
                    </div>
                </div>
                <div class="top-reviews">
                    <div class="review_custom_head">Top Reviews</div>
                    <div class="all_reviews">
                        <div class="review clearfix">
                            <div class="review_user_name">Mayank Dhingra</div>
                            <div class="review_rating"><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i></div>
                            <div class="review_timestamp">Feb 5, 1997</div>
                            <div class="review_text">Whats my name? whats my name? whats my name? my name is sheela.Sheela sheela ki jawani i am too sexy for you main tere hath na aani</div>
                        </div>
                        <div class="review clearfix">
                            <div class="review_user_name">Mayank Dhingra</div>
                            <div class="review_rating"><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i><i class="fas fa-star fa-sm rating_star" ></i></div>
                            <div class="review_timestamp">Feb 5, 1997</div>
                            <div class="review_text">Whats my name? whats my name? whats my name? my name is sheela.Sheela sheela ki jawani i am too sexy for you main tere hath na aani</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="wrapper clearfix">
        <div class="icon-row clearfix">
            <div class="icon_box clearfix">
                <a href="#"><i class="fab fa-facebook-square fa-lg"></i></a>
                <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
                <a href="#"><i class="fab fa-twitter-square fa-lg"></i></a>
                <a href="#"><i class="fab fa-youtube-square fa-lg"></i></a>
            </div>
        </div>
        <div class="box clearfix">
            <div class="row"><a href=# class="anchor_row">About us</a></div>
            <div class="row"><a href=# class="anchor_row">Media Center</a></div>
            <div class="row"><a href=# class="anchor_row">Privacy</a></div>
            <div class="row"><a href=# class="anchor_row">Contact Us</a></div>
        </div>
        <div class="box clearfix">
            <div class="row"><a href=# class="anchor_row">Audio Description</a></div>
            <div class="row"><a href=# class="anchor_row">Investor Relations</a></div>
            <div class="row"><a href=# class="anchor_row">Legal Notices</a></div>
        </div>
        <div class="box clearfix">
            <div class="row"><a href=# class="anchor_row">Help Center</a></div>
            <div class="row"><a href=# class="anchor_row">Jobs</a></div>
            <div class="row"><a href=# class="anchor_row">Cookie Preferences</a></div>
        </div>
        <div class="box_last clearfix">
            <div class="row"><a href=# class="anchor_row">Gift Cards</a></div>
            <div class="row"><a href=# class="anchor_row">Terms of Use</a></div>
            <div class="row"><a href=# class="anchor_row">Corporate Information</a></div>
        </div>
    </div>
</footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="../Resources/js/products.js"></script>
<script src="../Resources/js/review.js"></script>
<script>

</script>
</html>