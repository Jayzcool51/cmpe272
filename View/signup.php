<html>
    <head>
        <title>Marketplace</title>
        <link rel="stylesheet" href="../Resources/css/home.css">
        <link href="https://fonts.googleapis.com/css?family=Cinzel|Open+Sans|Raleway|Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="../Resources/css/signin.css">
    </head>
    <body>
        <div class="container clearfix">
            <div class="slideshow">
                <div class="company_name">Company Name</div>
            </div>
            <article class="wrapper">
                <div class="signin_nav clearfix">
                    <ul>
                        <li id="signin_text">Already have an account?</li>
                        <li class="signin_button">Sign In</li>
                    </ul>
                </div>

                    <div class="form-wrapper">
                        <div class="form-box">
                            <h1 class="primary-heading">Sign up</h1>
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
                                    <div class="camera_box"><video width="200px" height="150px" autoplay="true" id="videoElement">

                                        </video></div>

                                    <div>
                                                        <span class="btn-container">
                                                            <a href="{{route('auth/facebook')}}" class="btn-form">Sign up</a>
                                                        </span>
                                        <span class="btn-container">
                                                        <a href="{{route('auth/facebook')}}" class="btn-form">Sign up with Facebook</a>
                                                    </span>
                                    </div>
                                    <input type="hidden" name="_token" value="{{Session::token()}}"/>
                                    <p class="small-copy">By signing up, you agree to our <a href="#">Terms</a> &amp; <a href="#">Privacy Policy</a></p>
                                </form>
                            </div>
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