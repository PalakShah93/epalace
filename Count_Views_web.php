<?php
function view_web(){
include('Database.php');
date_default_timezone_set("Asia/Singapore");
$date=date('Y-m-d H:i:s');
$count=0;
$server=$_SERVER['HTTP_USER_AGENT'];				
$sql =  "INSERT INTO Web_Views (Views, date_v,location, longitude, latitude)
VALUES ('$count','$date', '$server','NULL','NULL')";
						if ($dbhandle->query($sql) === TRUE) 
						{} 
						else 
						{
							echo "Error updating record: " . $dbhandle->error;
						}						
                           
mysqli_close($dbhandle);
}
?>