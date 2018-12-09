<!DOCTYPE <!DOCTYPE html>
<html>
<head>
<head>
        <title>La Carros</title>
        <link rel="shortcut icon" href="../Resources/images/lacarrofavicon_MYH_icon.ico">
        <link rel="stylesheet" href="../Resources/css/home.css">
        <link href="https://fonts.googleapis.com/css?family=Cinzel|Open+Sans|Raleway|Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="../Resources/css/signin.css">
</head>
<body>
    <form id='verify-form' action="verify_signup.php" method="post">
        <div class="otp-container">
            <div class="otp-box">
                <span id="icon">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </span>
                <input type="text" id="otp-box" name='otp' placeholder="Enter you OTP">
                <button id="otp-button" type='submit' form='verify-form' value='Sign Up' class="btn-form">Verify</button>
            </div>
        </div>
    </form>
</body>
</html>
