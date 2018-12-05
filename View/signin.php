<html>
    <head>
        <title>Marketplace</title>
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
                        <h1 class="primary-heading">Company Name</h1>
                        <div class="gap"></div>
                        <div class="_gap">
                            <form action="{{route('user.signin')}}" method="post">
                                <h2 class="secondary-heading">Sign-In</h2>
                                <span class="btn-container">
                                                                <a href="{{route('auth/facebook')}}" class="btn-form">Log in with Facebook</a>
                                                            </span>
                                <div class="styling">
                                    <div class="line-style"></div>
                                    <div class="middle-style">OR</div>
                                    <div class="line-style"></div>
                                </div>
                                <div class="camera_box">
                                    <video autoplay="true" id="videoElement">

                                    </video>
                                </div>
                                <div>
                                            <span class="btn-container">
                                                <button type="submit" class="btn-form">Log in</button>
                                            </span>
                                </div>
                                <input type="hidden" name="_token" value="{{Session::token()}}"/>
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