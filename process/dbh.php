<?php
//connection to xampp database
// $servername = "localhost";
// $dBUsername = "root";
// $dbPassword = "";
// $dBName = "hems";

// $conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

// if(!$conn){
// 	echo "Databese Connection Failed";
// }
//Connecting to the containerized application

$servername = "db";
$dBUsername = "hems";
$dbPassword = "password";
$dBName = "hems";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}
// else {
// 	# code...
// 	echo "<h2  style=\"color: red\" >Database Connection Successful</h2>";
// }
?>