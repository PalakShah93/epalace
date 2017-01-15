<html>
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
<link rel="stylesheet" href="css/accessories.css" type="text/css">
<title> Accessories </title>
</head>


<body>
<div id="form-wrap">
<div class="topwrap">
<h5 align="center"> 
&nbsp &nbsp &nbsp;<a href="sellproducts.php" style="text-decoration: none">Sell On Electronic Palace</a> |
&nbsp &nbsp &nbsp;<a href="deals_of_the_day.php" style="text-decoration: none">Deals of the Day</a> |
&nbsp &nbsp &nbsp;<a href="Register.php" style="text-decoration: none">Register</a> 
&nbsp &nbsp;|  &nbsp &nbsp; <a href="sign.php" style="text-decoration: none">Account</a> </h5>
	
<a href="index.php"><IMG src="image/logo.jpg" /></a> 

<form id="tfnewsearch" action="search_P.php" method="POST">
<input type="text" class="tftextinput" name="Search" size="40" maxlength="120">
<input type="submit" class="tfbutton">
</form>

<form method="post" action="view_cart.php">
<input type="submit" value="View Cart" class="tffbutton">
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

<h2> Accessories </h2>
<?php
include ('Database.php');
?>
<?php
	$result = mysqli_query($dbhandle,"SELECT * FROM accessories");
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	echo '<table border="0" style="table-layout: fixed; width: 1200px">';
	$i=0;
			while($rows = mysqli_fetch_array($result))
			{					
			
					$source=$name1=$price=""; 
					$lengths=count($rows);						
					$counter=0;
							if($i%5==0)
							{
								echo "<tr>";
								$counter=1;
							}
							$source=$source=$rows{'imgsource'};
							$name1=$name1=$rows{'modelno'};
							$price=$price=$rows{'price'};
							$id =$rows{'a_id'};							
					?>
			
		
		<?php
	echo	'<td> <div class="borderit">';
		echo '<form method="post" action="cart_update.php" style="height: 160px">';
  echo '<img src="/'.$source.'">';
  echo '</div>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<p>'.$name1.'</p>';
  echo '<p>'.$price.'</p>';
  echo '<button class="add_to_cart">Add To Cart</button>';
  echo '<input type="hidden" name="product_qty" value="1" size="3" />';
  echo '<input type="hidden" name="product_code" value="'.$id.'" />';
  echo '<input type="hidden" name="type" value="add" />';
  echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
  echo '<input type="hidden" name="product_price" value="'.$price.'" />';
  echo '<input type="hidden" name="pro4duct_callfeatures" value="'.$source.'" />';
  echo '<input type="hidden" name="src" value="'.$source.'" />';
  echo '</form>';?>
		
		<form method="GET" action="view_accessories.php">
		
		<button type="submit" name="id" value="<?php echo "$id";?>" >View </Button> </form></td> 
		<?php
			if($counter<4)
						{
							$counter++;
						}
						else
						{
						echo "";
						}    
						$i++;
						}
					
						?> 
				  </table>

</div>
</div>

				  
<div id="form-wrapthree">
<div class="topwrap">
<div class="footer">
&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp; <a href="aboutus.php" style="text-decoration: none"> <font size="2" color="white">About Us </font></a></li> &nbsp &nbsp &nbsp &nbsp <font size="2" color="white">|</font>
&nbsp &nbsp &nbsp; <a href="" style="text-decoration: none"><font size="2" color="white">Delivery Information </font></a> &nbsp &nbsp &nbsp &nbsp <font size="2" color="white">|</font>
&nbsp &nbsp &nbsp; <a href="FAQ's.php" style="text-decoration: none"><font size="2" color="white">FAQ's </font></a> &nbsp &nbsp &nbsp &nbsp <font size="2" color="white">|</font>

&nbsp &nbsp &nbsp; <a href="contactus.php" style="text-decoration: none"><font size="2" color="white">Contact Us </font></a> &nbsp &nbsp &nbsp &nbsp <font size="2" color="white">|</font>
&nbsp &nbsp &nbsp; <a href="returnpolicy.php" style="text-decoration: none"> <font size="2" color="white">Return Policy </font></a> &nbsp &nbsp &nbsp &nbsp <font size="2" color="white">|</font>
&nbsp &nbsp &nbsp; <a href="" style="text-decoration: none"> <font size="2" color="white">Site Map</font></a>&nbsp &nbsp &nbsp &nbsp <font size="2" color="white">|</font>
&nbsp &nbsp &nbsp; <a href="feedback.php" style="text-decoration: none"> <font size="2" color="white">Feed Back</font></a>
</font>
<hr>
<p align="center"> <font size="2" color="white"> © 2014 Electronic Palace. All rights reserved.</font></p> 
<p align="center"> <font size="2" color="#b2a9a9">  Attention! All the content in this website is done for University Project</font></p> 

</div>
</form>
</div>
</body>

</html>
