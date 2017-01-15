<?php
date_default_timezone_set("Asia/Singapore");
	$username = "electronicpalace";
	$password = "abcde12345";
	$hostname = "localhost";  
	$database = "electronicpalace";




	$dbhandle= mysqli_connect($hostname, $username, $password,$database) 
	or die("Unable to connect to MySQL");
	 


	?>
