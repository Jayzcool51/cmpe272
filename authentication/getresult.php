<?php
if(isset($_COOKIE['otp'])){
echo $_POST['otp'];
if($_POST['otp']==$_COOKIE['otp']){
    header('Location:/272/twilio_auth/client.html');
}
}
else{
    header('Location:/272/twilio_auth/twilio-client.html');
}
?>