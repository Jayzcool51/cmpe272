<?php
	require_once "config.php";

	
	$redirectURL = "http://localhost/fblogin/fb-callback.php";
	$permissions = ['email'];
	$loginURL = $helper->getLoginUrl($redirectURL, $permissions);

    $servername = "13.56.13.38";
    $username = "admin";
    $password = "admin";


if (isset($_POST['signup'])){
		$url = $_POST['url'];
	
	//	echo "<h1>".$url."</h1>";
	
		require 'aws-autoloader.php';
	   $client = new Aws\Rekognition\RekognitionClient([
			'version' => 'latest',
			'region' => 'us-east-2',
			'credentials' => [
				'key' => 'AKIAJHCIUN2F6TCY6OEA',
				'secret' => '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',
			]
	   ]);

//       $result = $client->deleteCollection([
//    	'CollectionId' => 'UserPhotos',
//    ]);
//
//	   $result = $client->createCollection([
//			'CollectionId' => 'UserPhotos',
//		]);
		$name = $_POST['name'];
		$result = $client->indexFaces([
			'CollectionId' => 'UserPhotos',
			'DetectionAttributes' => [
			],
			'ExternalImageId' => $name,
			'Image' => [
				'Bytes' => file_get_contents($url),
			],
		]);

        $phone = $_POST['phone'];

        $conn = mysqli_connect($servername, $username, $password);

    // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO gulliver.User (`name`, phone) VALUES ('$name',$phone)";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            $auth=true;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
        if($auth){
            header('Location:signinv3.php');
        }


        else{
            header('Location:signupv3.php');
        }


}

?>

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
<!--                <div class="company_name">Company Name</div>-->
            </div>
            <article class="wrapper">
                    <div class="form-wrapper">
                        <div class="form-box">
                            <h1 class="primary-heading">Sign Up</h1>
                            <div class="_gap">
                                <form action="signupv3.php" method="post" onsubmit="return validation()" name="form">
<!--                                    <h2 class="secondary-heading">Fast Food Restraunt</h2>  action="signup.php" method="post" -->
                                    <div class="form_left">
                                        <div class="form-basic">
                                            <input type="text" name="name" placeholder="Name" required>
                                        </div>
                                        <div class="form-basic">
                                            <input type="text" name="phone" placeholder="Phone" required>
                                        </div>
                                    </div>
                            	
										         </div>
                                    <p class="small-copy">Already have an account? <a href="signinv3.php">Sign In</a></p>
												<div class="image_box" >
                                        <video autoplay="true" id="player" style="width:360px; height:370px; margin-left:-10px; margin-top: -50px">
                                    </div>
                                        <span class="btn-container">
													<input type="text" id="url" name="url" hidden>
                                            <div id="takepic1"><i class="fa fa-camera" aria-hidden="true"></i></div>
									<input type="button" name="takepic" id="takepic" class="btn-form"  style="background-color:#ff9925;" value=""><br>

												<canvas id="canvas" style="width:500px; height:370px; margin-left:-25px;"></canvas>
												
												<button type="submit"  name="signup" id="signup" class="btn-form" style="background-color:#ff9925;"> Signup </button>
												
									
								        </form>		  
									<button onclick="window.location = '<?php echo $loginURL ?>';" class="btn-form" >Signup with Facebook</button></span>
                           
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
        <div class="signin_nav clearfix">
            <ul>
                <li id="signin_text">Already have an account?</li>
                <li class="signin_button">Sign In</li>
            </ul>
        </div>
            </article>
        </div>
		<p id="demo" name="demo"></p>
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
	<script>
			const player = document.getElementById('player');
		  const canvas = document.getElementById('canvas');
		  const context = canvas.getContext('2d');
		  const captureButton = document.getElementById('takepic');
		  const captureButton1 = document.getElementById('takepic1');

		  const constraints = {
			video: true,
		  };

		  captureButton.addEventListener('click', () => {
			// Draw the video frame to the canvas.
//			document.getElementById('demo').innerHTML = 'Try it!';

			context.drawImage(player, 0, 0, canvas.width, canvas.height);
			
			var dataURL = canvas.toDataURL('image/png');
			//window.location.href = "http://localhost/cmpe272-master/view/signup.php?url" + dataURL ;
			document.getElementById('url').value = dataURL;

			});

            captureButton1.addEventListener('click', () => {
                // Draw the video frame to the canvas.
//			document.getElementById('demo').innerHTML = 'Try it!';

                context.drawImage(player, 0, 0, canvas.width, canvas.height);

            var dataURL = canvas.toDataURL('image/png');
            //window.location.href = "http://localhost/cmpe272-master/view/signup.php?url" + dataURL ;
            document.getElementById('url').value = dataURL;

            });

			navigator.mediaDevices.getUserMedia(constraints)
				.then((stream) => {
				  player.srcObject = stream;
			});
				
	</script>
	
</html>