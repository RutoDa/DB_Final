<?php
define('DB_SERVER', 'mysql');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'foodDelivery');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn === false) {
	die("ERROR: Could not connect.".mysqli_connect_error());
}
else {
    //echo "success";
}
?>