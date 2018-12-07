<?php
// Required if your environment does not handle autoloading
require_once('../../twilio-php-master/Twilio/autoload.php');
//random number generator

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;
$random= random_int(000000,999999);
// Your Account SID and Auth Token from twilio.com/console
$sid = 'ACce329772d67b73ebcd95c97cbff9b26b';
$token = '8c3b1a764faf16fd4bfdd433525fadf1';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$msg=$client->messages->create(
    // the number you'd like to send the message to
    $_POST['phoneno'],
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+18317099018',
        // the body of the text message you'd like to send
        'body' => ' random msg'.$random
    )
);
print($msg->sid);
print($msg->status);
#$_COOKIE['otp']=$random;
if($msg->status==='queued' ||$msg->status==='sent'){
    setcookie('otp',$random,time()+150,'/');
header('Location:/272/twilio_auth/get_otp.html');
}
else{
    echo 'Unsucessful, msg not sent!';
}
?>