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
$query = sprintf("SELECT EXTRACT(MONTH from timestamp), SUM(p.price) FROM `Order` o
LEFT JOIN `User` u
ON u.user_id = o.user_id
INNER JOIN Product p
ON p.product_id = o.product_id
WHERE o.user_id = $session
GROUP BY EXTRACT(MONTH from timestamp)");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

foreach ($data as $key => $value) {
	$value = $data[$key]['EXTRACT(MONTH from timestamp)'];
	if($value == 12) {
		$data[$key]['EXTRACT(MONTH from timestamp)'] = "December";
	}

	if($value == 11) {
		$data[$key]['EXTRACT(MONTH from timestamp)'] = "November";
	}

	if($value == 10) {
		$data[$key]['EXTRACT(MONTH from timestamp)'] = "October";
	}

	if($value == 9) {
		$data[$key]['EXTRACT(MONTH from timestamp)'] = "Septmeber";
	}

	if($value == 8) {
		$data[$key]['EXTRACT(MONTH from timestamp)'] = "August";
	}

	if($value == 7) {
		$data[$key]['EXTRACT(MONTH from timestamp)'] = "July";
	}

	if($value == 6) {
		$data[$key]['EXTRACT(MONTH from timestamp)'] = "June";
	}

	if($value == 5) {
		$data[$key]['EXTRACT(MONTH from timestamp)'] = "May";
	}

	if($value == 4) {
		$data[$key]['EXTRACT(MONTH from timestamp)'] = "April";
	}

	if($value == 3) {
		$data[$key]['EXTRACT(MONTH from timestamp)'] = "March";
	}

	if($value == 2) {
		$data[$key]['EXTRACT(MONTH from timestamp)'] = "February";
	}

	if($value == 1) {
		$data[$key]['EXTRACT(MONTH from timestamp)'] = "January";
	}
}


//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
 print json_encode($data);
?>
