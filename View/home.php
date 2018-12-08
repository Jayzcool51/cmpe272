<?php
    session_start();
?>
<html>
<head>
    <title>La Carros</title>
    <link rel="stylesheet" href="../Resources/css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Open+Sans|Raleway|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../Resources/css/animate.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
    $user_id = 6;
    $user_name = "Chester";
    $_SESSION["user_id"] = $user_id;
    $_SESSION["user_name"] = $user_name;
?>
<div class="container">
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
            <div class="hero-back" id="hero-back2"></div>
            <div class="hero-back" id="hero-back3"></div>
            <div class="hero-back" id="hero-back4"></div>
            <div class="hero-back" id="hero-back5"></div>
            <div class="hero-back" id="hero-back6"></div>
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
        if(cmd=="show me drinks" || cmd=="I want to buy drinks"){
            cmd="drinks";
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