<?php
session_start();
?>
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
 <link rel="stylesheet" href="css/search.css" type="text/css">
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
<body>

<div id="form-wrap">
<div class="topwrap">
<h5 align="center"> 
&nbsp &nbsp &nbsp;<a href="traxkorder.php" style="text-decoration: none">Tracker</a>&nbsp; |
&nbsp &nbsp;<a href="sellproducts.php" style="text-decoration: none">Sell On Electronic Palace</a> |
&nbsp &nbsp &nbsp;<a href="deals_of_the_day.php" style="text-decoration: none">Deals of the Day</a> |
&nbsp &nbsp &nbsp;<a href="Register.php" style="text-decoration: none">Register</a> 
&nbsp &nbsp;|  &nbsp &nbsp; <a href="sign.php" style="text-decoration: none">Account</a> </h5>
	
<a href="index.php"><IMG src="image/logo.jpg" /></a> 

<form id="tfnewsearch" action="search_P.php" method="POST">
<input type="text" class="tftextinput" name="Search" size="40" maxlength="120">
<input type="submit" class="tfbutton">
</form>

<form method="post" action="view_cart.php">
<?php
	$_SESSION['total'] = isset($_SESSION['total']) ? $_SESSION['total'] : 0;

?>
<input type="submit" value="View Cart S$ <?php echo number_format($_SESSION['total'], 2, '.', ','); ?>" class="tffbutton">
</form>

</div> <!-- wrap close -->
</div>
<!-- form close -->

<div id="form-wrapone">
<form>
<body id="about">
  <div id="header">
    <ul id="nav">
		<li class="home"><a href="phone.php">Phones</a></li>
			<li class="tutorials"><a href="laptop.php">Laptop</a>
		</li>
			<li class="home"><a href="camera.php">Camera</a></li>
			<li class="news"><a href="accessories.php">Accessories</a>
        <ul>
			<li><a href="accessories.php">Cases</a></li>
			<li><a href="harddrive.php">Hard Drives</a></li>
        </ul>
      </li>
			<li class="contact"><a href="ipad.php">Ipads</a></li>
			<li class="contact"><a href="tablet.php">Tablets</a></li>
			<li class="contact"><a href="television.php">Television</a></li>
			<li class="contact"><a href="desktop.php">Desktops</a></li>
			<li class="contact"><a href="software.php">Softwares</a></li>
		</ul><!-- nav --> 
  </div><!-- header -->  
  

</form>  
</div>
<div id="form-wraptwo">
<div class="topwrap">

<?php
$i = 0;
include ('Database.php');
	
	$query=$query1=$query2="";
	$searchengine = isset($_POST['Search']) ? $_POST['Search'] : $_GET['Search'];
	$requesturi =explode("?", $_SERVER['REQUEST_URI']);
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$requesturi[0].'?Search='.$searchengine);
	//$query = "SELECT * FROM master_product WHERE modelno LIKE '%".$searchengine."%';";
$query ="SELECT * FROM master_product WHERE id='$searchengine' or modelno LIKE '%$searchengine%' OR brand LIKE '%$searchengine%'";
	//$query1= "SELECT * FROM phone WHERE modelno LIKE '%".$searchengine."%';";
	//$query2= "SELECT * FROM laptop WHERE modelno LIKE '%".$searchengine."%';";
	
	/*
	$resultset = mysqli_multi_query($dbhandle, $query);
	$result = mysqli_store_result($dbhandle);
				mysqli_next_result($dbhandle);
	$result1 = mysqli_store_result($dbhandle);
	
				mysqli_next_result($dbhandle);
	$result2 = mysqli_store_result($dbhandle);
		*/
		
		$result1 = mysqli_query($dbhandle, $query);
		$result111= mysqli_num_rows($result1);
		/*
		$result2 = mysqli_query($dbhandle, $query1);
		$result222 = mysqli_num_rows($result2);
		$result3 = mysqli_query($dbhandle, $query2);
		$result333 = mysqli_num_rows($result3);*/
		
		$resulttotal = $result111;
		
	echo '<table border="0" style="width:100%" >';
	if($result1 && ($result111 > 0)){
		$no=0;
		while($rows = mysqli_fetch_array($result1))
				{
						


                    
					$lengths=count($rows);
					$counter=0;
					if($i%5==0)
						{
							echo "<tr>";
							$counter=1;
						}
						$id_v=$rows{'id'};
						$source=$rows{'imgsource'};
						view($id_v);
						echo '<td> <div class="borderit">';
						echo '<form method="post" action="cart_update.php" style="height: 160px">';
						echo "&nbsp;<img src='/$source' width='180' height='200' img border='0'><br>"; 
						echo "</div>";
echo "<br>";
echo "<br>";
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
						echo "Warrenty:".$rows{'warrenty'}."<br>";
$id=$rows{'id'};
$price=$rows{'price'};
echo '<button>Add To Cart</button>';
  echo '<input type="hidden" name="product_qty" value="1" size="3" />';
  echo '<input type="hidden" name="product_code" value="'.$id.'" />';
  echo '<input type="hidden" name="type" value="add" />';
  echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
  echo '<input type="hidden" name="product_price" value="'.$price.'" />';
  echo '<input type="hidden" name="pro4duct_callfeatures" value="'.$source.'" />';
  echo '<input type="hidden" name="src" value="'.$source.'" />';
  echo '</form>';







echo "</td>";								
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
}


echo "<br>";
echo "</table>"; 

if($resulttotal > 0){
	echo "<hr>No. of products found  : ".$resulttotal."<hr>";
}else{
	echo "No products found";
}

mysqli_close($dbhandle);



function view($ids){
include('Database.php');
global $view_p;
$sqls = "SELECT * FROM master_product where id='$ids'";
                        $result_v = mysqli_query($dbhandle, $sqls);
						if($result_v)
						{
						    while($rows = mysqli_fetch_array($result_v))
							{
								$view_p=$rows{'product_view'};
							}
						}
$view_p=($view_p+1+48)*9;				
$sql = "UPDATE master_product SET product_view='$view_p' WHERE id='$ids'";
						if ($dbhandle->query($sql) === TRUE) 
						{} 
						else 
						{
							echo "Error updating record: " . $conn->error;
						}						
                           
mysqli_close($dbhandle);
}

?>

				  
<div id="form-wrapthree">
<div class="topwrap">
<div class="footer">
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  
 &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp; 
 
 <a href="aboutus.php" style="text-decoration: none"> <font size="2" color="white">About Us </font></a></li> &nbsp &nbsp &nbsp &nbsp <font size="2" color="white">|</font>
&nbsp &nbsp &nbsp; 
<a href="corevalues.php" style="text-decoration: none"><font size="2" color="white">
Core Values </font></a> &nbsp &nbsp &nbsp &nbsp <font size="2" color="white">|</font>
&nbsp &nbsp &nbsp; 
<a href="FAQ's.php" style="text-decoration: none"><font size="2" color="white">FAQ's </font></a> &nbsp &nbsp &nbsp &nbsp <font size="2" color="white">|</font>

&nbsp &nbsp &nbsp; 
<a href="contactus.php" style="text-decoration: none"><font size="2" color="white">Contact Us </font></a> &nbsp &nbsp &nbsp &nbsp <font size="2" color="white">|</font>
&nbsp &nbsp &nbsp; 
<a href="returnpolicy.php" style="text-decoration: none"> <font size="2" color="white">Return Policy </font></a> &nbsp &nbsp &nbsp &nbsp <font size="2" color="white">|</font>
&nbsp &nbsp &nbsp; 
<a href="feedback.php" style="text-decoration: none"> <font size="2" color="white">Feed Back</font></a>
</font>
<hr>
<p align="center"> <font size="2" color="white"> &copy; 2014 Electronic Palace. All rights reserved.</font></p> 
<p align="center"> <font size="2" color="#b2a9a9">  Attention! All the content in this website is done for University Project</font></p> 

</div>
</div>
</div>
	