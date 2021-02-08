<?php

      
$host = "localhost";
$user = "root";
$pass = "";
$database = "ipawit";

$conn = mysqli_connect($host, $user, $pass, $database);

if (!$conn) {
	echo "Connection failed!";
}
?>
