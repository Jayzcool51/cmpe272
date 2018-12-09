<?php
error_reporting(0);
	require_once "config.php";

	$redirectURL = "http://localhost/fblogin/fb-callback.php";
	$permissions = ['email'];
	$loginURL = $helper->getLoginUrl($redirectURL, $permissions);

	
	if (isset($_POST['login'])){
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
	   
		$result = $client->searchFacesByImage([
			'CollectionId' => 'UserPhotos',
			'FaceMatchThreshold' => 70,
			'Image' => [
				'Bytes' => file_get_contents($url)			
			],
			'MaxFaces' => 2,
		]);
		
//		print_r($result);
//		echo $result."<br>";
	$file = 'try.txt';
	$r = file_get_contents($file);
	$r  = $result;
	file_put_contents($file, $r);

	$result = file_get_contents($file);
	$similarity = "";
//		echo strlen($result)."<br";
		$name = "";
		for ($i = 0; $i < strlen($result); $i++){
			if ( $result[$i] == "i" and $result[$i+1] == "t" and $result[$i+2] == "y"){
				$similarity = $result[$i+5] . $result[$i+6];
				if ($result[$i+7] != ".")
				$similarity = $similarity . $result[$i+7];
				//break;
			}
			if ( $result[$i] == "E" and $result[$i+8] == "I" and $result[$i+13] == "I"){
				$j = $i + 18;
				while ($result[$j]  != ","){
					$name .=$result[$j];
					$j++;
				}

				$name = substr($name,1,strlen($name)-2);
				break;
			}
		}
		if (intval($similarity) > 96){
			header('Location: home.php?user='.$name);
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("Not Registered. Go to signup page")';
			echo '</script>';
		};
	}
	
	
?>

<html>
    <head>
        <title>Marketplace</title>
        <link href="https://fonts.googleapis.com/css?family=Cinzel|Open+Sans|Raleway|Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="../Resources/css/login.css">
    </head>
    <body>
        <div class="container">
            <article class="wrapper main-wrapper">
                <div class="form-wrapper">
                    <div class="form-box" >
                        <h1 class="primary-heading">La Carros</h1>
                        <div class="gap"></div>
                        <div class="_gap">
                            <form action="signinv3.php" method="post" onsubmit="return validation()" name="form">
                                <h2 class="secondary-heading">Sign-In</h2>
                                <div class="camera_box">

									<div id="takepic1"><i class="fa fa-camera" aria-hidden="true"></i></div>
									<input type="button" name="takepic" id="takepic" class="btn-form"  style="background-color:#ff9925;" value=""><br>

									<video autoplay="true" id="player" style="width:378px; height:280px; margin-left:-25px;">
                                    </video>
                             
												</div>
                           							<input type="text" id="url" name="url" hidden>
														
										<br>
													<span class="btn-container">
                    
									                        <button type="submit" class="btn-form" name="login" id="login">Log in</button>
                                                           
											</span>
								<span class="btn-container">
                                                    <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" class="btn-form"  value="Login with Facebook">
												        </span>
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
		<canvas id="canvas" style="width:300px; height:220px; margin-left:25px;></canvas>

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
			
			//noinspection JSAnnotator
		navigator.mediaDevices.getUserMedia(constraints)
				.then	((stream) => {
				  player.srcObject = stream;
			});
				
	</script>
</body>
</html>