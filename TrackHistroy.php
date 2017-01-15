<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
<link rel="stylesheet" href="css/trackhistory.css" type="text/css">
<title> Phone </title>

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


<?php
include ('Database.php');
?>
<div id="form-wraptwo">
<div class="topwrape">	
<h4>  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp; Track Order(s)</h4>
<hr>
<?php
$refid=$_SESSION['ref_id'];
$count=0;
$payment_id=$id=$email=$first_name=$last_name=$del_address=$country=$shipping_cart=$card_number=$expiry_date=$security_code=$ref_id=$Amount=$invoice_no="";
$result = mysqli_query($dbhandle,"SELECT * FROM payment 
						where ref_id='$refid' OR invoice_no='$refid' ");
while($rows = mysqli_fetch_array($result))
{
	$payment_id=$rows{'payment_id'};
	$id=$rows{'id'};
	$email=$rows{'email'};
	$first_name=$rows{'first_name'};
	$last_name=$rows{'last_name'};
	$del_address=$rows{'del_address'};
	$country=$rows{'country'};
	$shipping_cart=$rows{'shipping_cart'};
	$card_number=$rows{'card_number'};
	$expiry_date=$rows{'expiry_date'};
	$security_code=$rows{'security_code'};
	$ref_id=$rows{'ref_id'};
	$Amount=$rows{'amount'};
	$invoice_no=$rows{'invoice_no'};
	$count=$count+1;
	echo "<br>";
	echo "(".$count.")";
	echo "<br>";
	echo "First Name:".$first_name;
		echo "<br>";
	echo "Last Name:".$last_name;
		echo "<br>";
	echo "Dilivery Add:".$del_address;
		echo "<br>";
	echo "Country:".$country;
		echo "<br>";
	echo "card number:".$card_number;
		echo "<br>";
	echo "ref_id:".$ref_id;
		echo "<br>";
	echo "Amount Paid: ".$Amount;
		echo "<br>";
	echo "Invoice #:".$invoice_no;
		echo "<br>";
		

	if($count>1)
	{
		echo "Status:Dilivered";
	}
	else
	{
		echo "Status: Not Dilivered";
		echo '<p> &nbsp  &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp; Please Contact our costumer service to know more about the order</p>';
	}
	echo "<br>";

	echo "<hr>";
	
	
	
}
?>
</div>
</div>
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