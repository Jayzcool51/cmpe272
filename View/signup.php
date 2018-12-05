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
                <img src="../Resources/images/signup_sideimg1.PNG"/>
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
                        <h1 class="primary-heading">Company Name</h1>
                        <div class="_gap">
                            <form action="{{route('user.signup')}}" method="post">
                                <h2 class="secondary-heading">Fast Food Restraunt</h2>
                                <span class="btn-container">
                                                    <a href="{{route('auth/facebook')}}" class="btn-form">Log in with Facebook</a>
                                                </span>
                                <div class="styling">
                                    <div class="line-style"></div>
                                    <div class="middle-style">OR</div>
                                    <div class="line-style"></div>
                                </div>
                                <div class="form-basic">
                                    <input type="text" name="email" placeholder="Email">
                                </div>
                                <div class="form-basic">
                                    <input type="text" name="name" placeholder="Full Name">
                                </div>
                                <div class="form-basic">
                                    <input type="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-basic">
                                    <input type="password" name="password_confirmation" placeholder="Confirm Password">
                                </div>
                                <div>
                                                    <span class="btn-container">
                                                        <button type="submit" class="btn-form signup_button">Sign up</button>
                                                    </span>
                                </div>
                                <input type="hidden" name="_token" value="{{Session::token()}}"/>
                                <p class="small-copy">By signing up, you agree to our <a href="#">Terms</a> &amp; <a href="#">Privacy Policy</a></p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="img_cap_box">
                    <div class="camera_box"></div>
                    <div class="capture_box">Capture</div>
                </div>

            </article>
        </div>
    </body>
</html>