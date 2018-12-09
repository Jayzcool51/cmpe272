<?php
    session_start();
?>
<?php
//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', '13.56.13.38');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'admin');
define('DB_NAME', 'gulliver');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

$session = $_SESSION["user_id"];

//query to get data from the table
$query = sprintf("SELECT p.website, SUM(p.price) FROM `Order` o
LEFT JOIN `User` u
ON u.user_id = o.user_id
INNER JOIN Product p
ON p.product_id = o.product_id
WHERE o.user_id = '$session'
GROUP BY p.website");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);
