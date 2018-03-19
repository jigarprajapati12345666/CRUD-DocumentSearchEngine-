<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "crud";

$connect = mysqli_connect($host,$user,$pass);

if (!$connect) {
	mysqli_error("NOT CONNECT");
} else {
	//echo "ok";
}

 ?>