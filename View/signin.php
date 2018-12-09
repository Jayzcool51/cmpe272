<html>
    <head>
        <title>La Carros</title>
        <link rel="shortcut icon" href="../Resources/images/lacarrofavicon_MYH_icon.ico">
        <link rel="stylesheet" href="../Resources/css/home.css">
        <link href="https://fonts.googleapis.com/css?family=Cinzel|Open+Sans|Raleway|Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="../Resources/css/login.css">
    </head>
    <body>
        <div class="container">
            <article class="wrapper main-wrapper">
                <div class="form-wrapper">
                    <div class="form-box">
                        <div class="gap"></div>
                        <div class="_gap">
                            <form action="" method="post">
                                <h2 class="secondary-heading">Sign-In</h2>
                                <div class="camera_box">
                                    <div class="video-btn">
                                        <i class="fa fa-camera" aria-hidden="true"></i>
                                    </div>
                                    <video autoplay="true" id="videoElement">
                                    </video>
                                </div>
                                <span class="btn-container">
                                    <button type="submit" class="btn-form">Log in</button>
                                </span>
                                <span class="btn-container">
                                    <a href="" class="btn-form">Log in with Facebook</a>
                                </span>
                            </form>
                        </div>
                    </div>
                    <div class="form-box">
                        <p class="small-copy">Don't have an account? <a href="{{route('user.signup')}}">Sign up</a></p>
                    </div>
                </div>
            </article>
        </div>
    </body>
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
    </script>
</html>
