<?php
    session_start();
?>
<?php
    if (!isset($_SESSION["user_id"])) {
        header("Location: signinv3.php");
    }
?>
<html>
<head>
    <title>La Carros</title>
    <link rel="shortcut icon" href="../Resources/images/lacarrofavicon_MYH_icon.ico">
    <link rel="stylesheet" href="../Resources/css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Open+Sans|Raleway|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../Resources/css/animate.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
    error_reporting(0);
    $q = $_SERVER['QUERY_STRING'];
    $users_name = explode("=", $q)[1];
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
        $prod_details = mysqli_query($conn,"SELECT * FROM `User` WHERE `name` = '$users_name'");
        if ($prod_details->num_rows > 0) {
            $details = $prod_details->fetch_assoc();
            $usr_id = $details["user_id"];
            $_SESSION["user_id"] = $usr_id;
        }
    }
    $_SESSION["user_name"] = $users_name;
?>
<div class="container">
    <div class="logo">
              <img src="../Resources/images/logo1.png" alt="Website Logo" style="width:120px;height:120px;">
    </div>
    <div class="navbar">
        <a href="home.php"><div class="nav">Home</div></a>
        <a href="aboutus.php"><div class="nav">About Us</div></a>
        <a href="products.php"><div class="nav">Products</div></a>
        <a href="cart.php"><div class="nav">Cart</div></a>
        <a href="Analytics.php"><div class="nav">Analytics</div></a>
        <?php
            if (isset($_SESSION["user_id"])) {
                echo "
                    <a href=\"signout.php\"><div class=\"nav\">Sign Out
                ";        
            }
            else {
                echo "
                    <a href=\"signupv3.php\"><div class=\"nav\">Sign In
                ";        
            }
        ?>
        </div></a>
    </div>
    <div class="hero-section">
        <video class="video" autoplay loop muted>
            <source src="../Resources/Videos/Cafe.mp4" type="video/mp4" >
        </video>
        <div class="video-layer"></div>
        <div class="web-image">
            <video class="web-video1" autoplay loop muted>
                <source src="../Resources/Videos/mayankvideo.mp4" type="video/mp4" >
            </video>
            <video class="web-video2" autoplay loop muted>
                <source src="../Resources/Videos/mohit.mp4" type="video/mp4" >
            </video>
        </div>
        <div class="web-sec">
            <div class="web-sec-primary-head">
                Feeling Hungry??
            </div>
            <div class="web-sec-secondary-head">
                Order some delicious food <br/> from Ping Pong Cafe
            </div>
            <div class="web-sec-tertiary-head">
                www.mayankdhingra.com
            </div>
        </div>
        <div class="hero-section-head">
            <div class="hero-section-primary-head">
                NAM<img class="namasteicon" src="../Resources/images/namaste.png"/>STE
            </div>
            <div class="hero-section-secondary-head">
                Shop because it's shop o'clock somewhere
            </div>
            <div class="hero-section-search">
                <input class="search-box" placeholder="Search Product" type="text">
                <span class="search-button" onclick="start()">
                    <i class="fa fa-microphone" id="microphone" aria-hidden="true"></i>
                </span>
            </div>
            <div class="hero-section-audio">
                <div id="wave">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
            <div id="stt" style="text-align:center;">

            </div>
            <div class="other-website">
                <div class="other-website-head">
                    Our Websites
                </div>
                <div class="other-website-line"></div>
            </div>
        </div>
        <div class="hero-back-container">
            <a href="http://www.mayankdhingra.com"><div class="hero-back" id="hero-back1"></div></a>
            <a href="http://www.mohitgahlot.com"><div class="hero-back" id="hero-back2"></div></a>
            <a href="http://mohinishdaswani.space"><div class="hero-back" id="hero-back3"></div></a>
            <a href="http://jayzcool.com"><div class="hero-back" id="hero-back4"></div></a>
            <a href="http://www.dhruwill.com"><div class="hero-back" id="hero-back5"></div></a>
            <a href="http://iamprabha.com"><div class="hero-back" id="hero-back6"></div></a>
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="../Resources/js/home.js"></script>
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
        var wave = document.querySelector(".hero-section-audio");
        wave.style.visibility = "collapse";
        var cmd = event.results[0][0].transcript;
        var tooltiptext = document.querySelector("#stt");
        tooltiptext.innerHTML = cmd;
        if(cmd.indexOf("drink")>0||cmd.indexOf("drinks")>0){
            cmd="drinks";
        }
        if(cmd.indexOf("sandwich")>0||cmd.indexOf("sandwiches")>0){
            cmd="sandwich";
        }
        if(cmd.indexOf("pasta")>0||cmd.indexOf("pastas")>0){
            cmd="pasta";
        }
        if(cmd.indexOf("waffle")>0||cmd.indexOf("waffles")>0){
            cmd="waffle";
        }
        if(cmd.indexOf("server")>0||cmd.indexOf("servers")>0||cmd.indexOf("aws")>0||cmd.indexOf("cloud")>0){
            cmd="server";
        }
        if(cmd.indexOf("database")>0||cmd.indexOf("databases")>0){
            cmd="database";
        }
        if(cmd.indexOf("mixer")>0||cmd.indexOf("grinder")>0){
            cmd="mixer";
        }
        if(cmd.indexOf("camera")>0||cmd.indexOf("photo")>0){
            cmd="camera";
        }
        if(cmd.indexOf("ac")>0||cmd.indexOf("air")>0){
            cmd="ac";
        }
        if(cmd.indexOf("fridge")>0||cmd.indexOf("refrigerator")>0||cmd.indexOf("freezer")>0){
            cmd="fridge";
        }
        if(cmd.indexOf("ps4")>0||cmd.indexOf("ps3")>0||cmd.indexOf("play")>0||cmd.indexOf("xbox")>0||cmd.indexOf("games")>0){
            cmd="ps";
        }
        if(cmd.indexOf("phone")>0||cmd.indexOf("iphone")>0||cmd.indexOf("samsung")>0||cmd.indexOf("mobile")>0||cmd.indexOf("cellphone")>0||cmd.indexOf("cell")>0||cmd.indexOf("device")>0){
            cmd="phone";
        }
        if(cmd.indexOf("tshirt")>0||cmd.indexOf("tshirt")>0||cmd.indexOf("shirt")>0||cmd.indexOf("shirts")>0||cmd.indexOf("tees")>0||cmd.indexOf("clothes")>0){
            cmd="tshirt"
        }
        if(cmd.indexOf("cars")>0||cmd.indexOf("car")>0||cmd.indexOf("bmw")>0||cmd.indexOf("audi")>0||cmd.indexOf("mercedes")>0||cmd.indexOf("luxury")>0){
            cmd="cars"
        }
        if(cmd.indexOf("electronics")>0||cmd.indexOf("computer")>0||cmd.indexOf("computers")>0||cmd.indexOf("gadgets")>0||cmd.indexOf("laptops")>0||cmd.indexOf("laptop")>0){
            cmd="laptops"
        }
        setTimeout(function (){
            window.location.href = "search.php?" + cmd;
        }, 2000);
    };

    recognition.onnomatch = function(){
        var cmd = "Please try again!";
        var tooltiptext = document.querySelector("#stt");
        tooltiptext.innerHTML = cmd;
    }
</script>
</html>