<html>
    <head>
        <title>La Carros</title>

        <link href="https://fonts.googleapis.com/css?family=Cinzel|Open+Sans|Raleway|Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="../Resources/css/search.css">

        <link rel="stylesheet" href="../Resources/css/footerv2.css">
    </head>
    <body>
        <div class="container">
            <div class="container-image"></div>
            <div class="logo">
                La Carros
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

                <div class="products_main clearfix">
                    <div class="hero-section-search">
                        <input class="search-box" placeholder="Search Product" type="text">
                        <span class="search-button" onclick="start()">
                            <i class="fa fa-microphone" id="microphone" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="left_sort_box">
                        <div class="left_box">
                            <div class="left_box_heading">Sort By</div>
                            <div class="left_box_row" onclick="sort('l')">Price: Low to High</div>
                            <div class="left_box_row" onclick="sort('h')">Price: High to Low</div>
                            <div class="left_box_row" onclick="sort('rl')">Rating: Low to High</div>
                            <div class="left_box_row" onclick="sort('rh')">Rating: High to Low</div>

                        </div>
                        <div class="left_box">
                            <div class="left_box_heading">Company</div>
                            <div class="left_box_row">Mayank Dhingra</div>
                            <div class="left_box_row">Mohit Gahlot</div>
                            <div class="left_box_row">Dhruvil Patel</div>
                            <div class="left_box_row">Jainam Sheth</div>
                            <div class="left_box_row">Prabha Veerubhotla</div>
                            <div class="left_box_row">Mohinish Daswani</div>
                        </div>

                    </div>
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
                            $txt = $_SERVER['QUERY_STRING'];
                            $search = "";
                            $filter = "";
                            if (strpos($txt, 'filter') !== false) {
                                $search = explode('&', $txt)[0];  
                                $filter = explode('=', $txt)[1];
                            }
                            else {
                                $search = $txt;
                            }
                            $search_text = "%".$search."%";
                            if ($filter == ""){
                                $result = mysqli_query($conn,"SELECT *  FROM `Product` WHERE keywords LIKE '$search_text'");    
                            }
                            else {
                                if ($filter == "h") {
                                    $result = mysqli_query($conn,"SELECT * FROM `Product` WHERE keywords LIKE '$search_text' ORDER BY price DESC");
                                }
                                else {
                                    $result = mysqli_query($conn,"SELECT * FROM `Product` WHERE keywords LIKE '$search_text' ORDER BY price");
                                }
                            }
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                                    $prod_id = $row["product_id"];
                                    $avg_rating = mysqli_query($conn, "SELECT ROUND(AVG(r.rating), 0) FROM `Rating` r INNER JOIN `Product` p ON p.product_id = r.product_id WHERE r.product_id = $prod_id");
                                    $img = $row["image_url"];
                                    $name = $row["product_name"];
                                    $desc = $row["description"];
                                    $website = $row["website"];
                            echo "
                                <div class=\"product clearfix\" data-id=\"$prod_id\" >
                                    <div class=\"product_img\">
                                        <img src=\"$img\">
                                    </div>
                                    <div class=\"product_desc_box clearfix\">
                                        <div class=\"prod_name\">
                                            $name
                                        </div>
                                        <div class=\"rating\"><i class=\"fas fa-star fa-sm rating_star\" ></i><i class=\"fas fa-star fa-sm rating_star\" ></i><i class=\"fas fa-star fa-sm rating_star\" ></i><i class=\"fas fa-star fa-sm rating_star\" ></i><i class=\"fas fa-star fa-sm rating_star\" ></i></div>
                                        <div class=\"product_description\">$desc</div>
                                        <div class=\"product_qty\">
                                        </div>
                                        <div class=\"product_Website\">
                                            $website
                                        </div>
                                    </div>
                                    <div class=\"product_desc_right clearfix\">
                                        <div class=\"our_price\">Our Price
                                            <div class=\"product_price\">$".$row["price"]."</div>
                                        </div>
                                        <div class=\"cart\"><i class=\"fa fa-shopping-bag\" aria-hidden=\"true\"></i>Add to Cart</div>
                                        <div class=\"cart\"><i class=\"fa fa-bookmark\" aria-hidden=\"true\"></i>Add to Wishlist</div>
                                    </div>
                                    
                                </div>";
                                }
                            } else {
                                echo "0 results";
                            }
                            ?>
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
    <script>
    var grammar = '#JSGF V1.0; grammar products; public <products> =  t-shirts | tees | shirts | talking | talking tees;'
    var recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition || window.mozSpeechRecognition || window.msSpeechRecognition)();
    var speechRecognitionList = new webkitSpeechGrammarList();
    speechRecognitionList.addFromString(grammar, 1);
    recognition.grammars = speechRecognitionList;
    recognition.lang = 'en-US';
    recognition.interimResults = false;
    recognition.continuous = true;
    recognition.maxAlternatives = 1;

    var search_box = document.querySelector(".search-box");

    search_box.addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
            var searchtext = search_box.value;
            window.location.href = "search.php?" + searchtext;
        }
    });

    function start() {
        recognition.start();
    }

    recognition.onresult = function(event) {
        var cmd = event.results[0][0].transcript;
        window.location.href = "search.php?" + cmd;
    }

    recognition.onnomatch = function(){
        var cmd = "Please try again!"
        alert(cmd);
    }

    function sort(cri) {
        var loc = window.location.toString();
        var newloc = "";
        if (loc.match('filter')) {
            newloc = loc.split("&")[0];
            window.location.href = newloc + "&filterby=" + cri;
        }
        else {
            window.location.href = window.location + "&filterby=" + cri;
        }
    }
</script>
</html>