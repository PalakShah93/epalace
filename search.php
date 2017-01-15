<head>
<style>
.borderit img{
border: 2px solid #fcfcfc;
height:170;
width:170;
}
.borderit:hover img{
border: 2px solid black;
}
.borderit:hover{
color: blue; 
}
</style>
</head>

<?php

include ('Database.php');
	
	
	$searchengine=$_POST['Search']; 
	$query="SELECT * 
	FROM software, phone". "where modelno like '$searchengine%'";
	
	$result= mysqli_query($dbhandle,$query);
	echo '<table border="0" style="width:100%" >';
	$i=0;
	$no=0;
			while($rows = mysqli_fetch_array($result))
					{
						$lengths=count($rows);
						$counter=0;
						if($i%5==0)
							{
								echo "<tr>";
								$counter=1;
							}
							
							$source=$rows{'imgsource'};
							
							echo '<td> <div class="borderit">';
							
							echo "&nbsp;<img src='/$source' width='180' height='200' img border='0'><br>"; 
							echo "</div>";
							echo "Name:".$rows{'modelno'}."<br>";
							echo "Size:".$rows{'size'}."<br>";
							echo "price:".$rows{'price'}."<br>";
							echo "Colour:".$rows{'color'}."<br>";
							echo "Brand:".$rows{'brand'}."<br>";
							echo "Form:".$rows{'form'}."<br>";
							echo "Simtype:".$rows{'sim'}."<br>";
							echo "Touchscreen:".$rows{'form'}."<br>";
							echo "Warrenty:".$rows{'warrenty'}."<br>";	
							echo "Ram:".$rows{'ram'}."<br>";	
							echo "Network:".$rows{'network'}."<br>";	
							echo "Warrenty:".$rows{'warrenty'}."<br></td>";								
						if($counter<4)
							{
							$counter++;
							
							}
						else
							{
							echo "<hr>";
						echo "</tr>";
						
							}  
  $i++;
  $no++;
}

echo "<br>";
if($no>=1)
{
echo "No. of products found  : "."$no";
echo "<hr>";
}
else{
echo "No produts found";
}
echo " </table>"; 
mysqli_close($dbhandle);
?>

