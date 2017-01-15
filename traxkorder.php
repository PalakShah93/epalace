<html>
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
<link rel="stylesheet" href="css/track.css" type="text/css">
<title> Track Order</title>

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
<form style="width: 1200px; margin: 0 auto;">
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
<br>
<br>
<br>
<?php
session_start();
?>
<?php
include ('Database.php');
?>
<?php
global $RefErr,$ref_id;
$RefErr=$ref_id="";
if(!empty($_POST))
{
$ref_id=$_POST['refid'];
			if(empty($ref_id))
			{
				$RefErr="Invalid";
			}
			else
			{
				Emailid($ref_id);
				$_SESSION['ref_id']=$ref_id;
			}
}
function Emailid($Emailid)
{
					global $RefErr;
					include ('Database.php');
					$result = mysqli_query($dbhandle,"SELECT * FROM payment WHERE  ref_id='$Emailid' OR invoice_no='$Emailid'");
						if (mysqli_num_rows($result) != 0)
						{
								header('Location: TrackHistroy.php');
						}
						else{ $RefErr="Invalid"; }
}
?>
<div id="form-wraptwo">
<div class="topwrape">		
<h4>  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp; Track Order</h4>
<hr>
<label>&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;Enter your Refrence/Invoice-ID<font size="2" color="red">*<?php echo $RefErr; ?></font> </label>
<form action="traxkorder.php" method="post">
<input  class="labelone" name="refid" placeholder=" Enter your Refrence/Invoice-ID"/>
<input type="submit" class="btn" value="check Status">
		
</form><br><br> 
  </div>
</div>  
<br>

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
<p align="center"> <font size="2" color="#b2a9a9"> Designed and Developed By Shah Palak </font></p> 
<p align="center"> <font size="2" color="#b2a9a9">  Attention! All the content in this website is done for University Project</font></p> 

</div>
</div>
</div>