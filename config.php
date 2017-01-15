<?php
$currency = '$'; //Currency sumbol or code
$username = "root";
	$password = "root";
	$hostname = "localhost";  
	$database = "electronicpalace_db";
	$dbhandle= mysqli_connect($hostname, $username, $password,$database) 
	or die("Unable to connect to MySQL");

	?>