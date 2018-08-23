<!DOCTYPE HTML>

<?php 

session_start();
include ("config.php");
include ("function.php");


// connect to database
$dbconnect=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

if(mysqli_connect_errno()) {
	echo "Connection failed:".mysqli_connect_error();
	exit;

}

?>