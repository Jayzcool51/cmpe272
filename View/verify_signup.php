<?php
if(isset($_COOKIE['otp'])){
#echo $_POST['otp'];
if($_POST['otp']==$_COOKIE['otp']){
    
$servername = "13.56.13.38";
$username = "admin";
$password = "admin";

#print($_COOKIE['user_name']);
#print($_COOKIE['user_phone']);
//values from signup page
 $name=$_COOKIE['user_name'];
$phone=$_COOKIE['user_phone'];
$auth=false;
echo $name.$phone;
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO gulliver.User (`user_name`,`name`, email, `address`, phone)
VALUES ('NULL','$name','NULL','NULL',$phone)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    $auth=true;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
 if($auth){
    header('Location:/272/View/signin.php');
 }

    
}
else{
    header('Location:/272/View/signup.php');
}
}
else{
    header('Location:/272/View/signup.php');
}
?>