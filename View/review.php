<?php
/**
 * Created by PhpStorm.
 * User: mohitgahlot
 * Date: 12/7/18
 * Time: 10:01 AM
 */
?>

<html>
<head>
    <title>La Carros</title>
    <link rel="shortcut icon" href="../Resources/images/lacarrofavicon_MYH_icon.ico">
    <link rel="stylesheet" href="../Resources/css/review.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Open+Sans|Raleway|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../Resources/css/animate.css">
</head>
<body>
<div class="container">
    <div class="logo">
        La Carros
              <img src="../Resources/images/logo1.png" alt="Website Logo" style="width:120px;height:120px;">
    </div>
    <div class="navbar">
        <div class="nav">Home</div>
        <div class="nav">Products</div>
        <div class="nav"></div>
        <div class="nav">About Us</div>
        <div class="nav">Contact</div>
    </div>
    <div class="rate-btn">
        <div class="userrate-primary">
            <ul class="rate-star">
                <li>
                    <input type="radio" value="1" class="radio" id="val1" name='val'/>
                    <label for="val1"><i class="fa fa-star" aria-hidden="true"></i></label>
                </li>
                <li>
                    <input type="radio" value="2" class="radio" id="val2" name='val'/>
                    <label for="val2"><i class="fa fa-star" aria-hidden="true"></i></label>
                </li>
                <li>
                    <input type="radio" value="3" class="radio" id="val3" name='val'/>
                    <label for="val3"><i class="fa fa-star" aria-hidden="true"></i></label>
                </li>
                <li>
                    <input type="radio" value="4" class="radio" id="val4" name='val'/>
                    <label for="val4"><i class="fa fa-star" aria-hidden="true"></i></label>
                </li>
                <li>
                    <input type="radio" value="5" class="radio" id="val5" name='val'/>
                    <label for="val5"><i class="fa fa-star" aria-hidden="true"></i></label>
                </li>
            </ul>
        </div>
        <button id="submit-rate">
            Submit
        </button>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="../Resources/js/review.js"></script>
</html>
