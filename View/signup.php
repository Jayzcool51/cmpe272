<html>
    <head>
        <title>La Carros</title>
        <link rel="shortcut icon" href="../Resources/images/lacarrofavicon_MYH_icon.ico">
        <link rel="stylesheet" href="../Resources/css/home.css">
        <link href="https://fonts.googleapis.com/css?family=Cinzel|Open+Sans|Raleway|Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="../Resources/css/signin.css">
    </head>
    <body>
        <div class="container clearfix">
            <div class="slideshow">
<!--                <div class="company_name">Company Name</div>-->
            </div>
            <div class="signin_nav clearfix">
                <ul>
                    <li id="signin_text">Already have an account?</li>
                    <li class="signin_button">Sign In</li>
                </ul>
            </div>
            <article class="wrapper">
                    <div class="form-wrapper">
                        <div class="form-box">
                            <h1 class="primary-heading">Sign Up</h1>
                            <div class="_gap">
                                <form action="{{route('user.signup')}}" method="post">
<!--                                    <h2 class="secondary-heading">Fast Food Restraunt</h2>-->
                                    <div class="form_left">
                                        <div class="form-basic">
                                            <input type="text" name="name" placeholder="Name">
                                        </div>
                                        <div class="form-basic">
                                            <input type="text" name="phone" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="image_box">
                                        <div class="video-btn">
                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                        </div>
                                        <video autoplay="true" id="videoElement">
                                    </div>
                                        <span class="btn-container">
                                            <a href="" class="btn-form">Sign up</a>
                                            <a href="" class="btn-form">Sign up with Facebook</a>
                                        </span>
                                    </div>
                                    <p class="small-copy">Already have an account? <a href="#">Sign In</a></p>
                                </form>
                            </div>
                        <div class="otp-container">
                            <div class="otp-box">
                                <span id="icon">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </span>
                                <input type="text" id="otp-box" placeholder="Enter you OTP">
                                <button id="otp-button">Verify</button>
                            </div>
                        </div>
                        </div>
                    </div>

            </article>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>

        var video = document.querySelector("#videoElement");

        if (navigator.mediaDevices.getUserMedia) {
            navigator.mediaDevices.getUserMedia({video: true})
                .then(function(stream) {
                    video.srcObject = stream;
                })
                .catch(function(err0r) {
                    console.log("Something went wrong!");
                });
        }


        $("#icon").click(function () {
            $(".otp-container").fadeOut(600);
        });

    </script>
</html>
