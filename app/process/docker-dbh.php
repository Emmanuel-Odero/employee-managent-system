<?php

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