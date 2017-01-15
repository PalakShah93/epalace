<?php
date_default_timezone_set("Asia/Singapore");
SESSION_START();
if(empty($_SESSION['amount_due'])){ $_SESSION['amount_due']=0;}
if(empty($_SESSION['amount_paid'])){ $_SESSION['amount_paid']=0;}
include ('Database.php');

if(empty($_SESSION['id']))
{	
	header('location: sign.php');
}
if(empty($_SESSION['total']))
{	
	header('location: index.php');
}

global $user_db,$Fname_db,$pass_db,$Lname_db,$city_db,$cashErr,$payopt,$contact_db,$email_db,$total,$add_db,$country_db,$BLK_db,$unit1_db,$unit2_db,$lane_db,$PC_db,$mainErr,$addErr,$CDErr,$EDErr,$SCErr;
$user_db = $Fname_db = $pass_db = $Lname_db =$payopt=$cashErr= $city_db = $contact_db = $email_db = $add_db = $country_db =$BLK_db=$unit1_db=$unit2_db=$lane_db=$PC_db=$mainErr="";
$addErr=$CDErr=$EDErr=$SCErr="";
$valid=0;
$total=$_SESSION['total'];
$id=$_SESSION['id'];
$address=$CardNumber=$ExpiryDate=$SecurityCode="";
	$today = date("Y-m-d"); 



$result = mysqli_query($dbhandle,"SELECT * FROM registration_db 
						where id='$id'");
while($rows = mysqli_fetch_array($result))
{
	$user_db=$rows{'user'};
	$Fname_db=$rows{'fname'};
	$Lname_db=$rows{'lname'};
	$contact_db=$rows{'contact'};
	$email_db=$rows{'email'};
	$country_db=$rows{'country'};
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$address=$_POST['Add'];
	$CardNumber=$_POST['CD'];
	$ExpiryDate=$_POST['ED'];
	$SecurityCode=$_POST['SC'];
	$ExtraCharge=$_POST['cat'];
	$payopt=$_POST['opt'];
	$_SESSION['card']=$CardNumber;
	
			if(empty($address))
			{
				$addErr="Address Required";
				$valid=$valid+1;
			}
			
			else if($payopt=="Card")
			{
				if(empty($CardNumber))
				{
				$CDErr="Card Number Required";
				$valid=$valid+1;
				}
				else if(empty($ExpiryDate))
				{
				$EDErr="Expiry Date Required";
				$valid=$valid+1;
				}
				else if(empty($SecurityCode))
				{
				$SCErr="Security Code Required";
				$valid=$valid+1;
				}
				else if(preg_match("/[^0-9]/", $CardNumber))
				{
						$CDErr="Invalid Format";
						$valid= $valid+1;
				}
				else if(strlen($CardNumber) != 16)
				{ 
						$CDErr="Number Missed";
						$valid= $valid+1;
				}
				else if(preg_match("/[^0-9]/", $SecurityCode))
				{
						$SCErr="Invalid Format";
						$valid= $valid+1;
				}
				else if(strlen($SecurityCode) != 3)
				{ 
						$SCErr="Number Missed";
						$valid= $valid+1;
				}
				$_SESSION['amount_paid']=$total;
                                $_SESSION['amount_due']=0;
			}
			else if($payopt=="Cash")
			{
				if($total>1000)
				{
					global $cashErr;
					$cashErr="Amount Not Valid for Cash on Dilivery";				
					$valid= $valid+1;
				}
			   $_SESSION['amount_due']=$total;
			   $_SESSION['amount_paid']=0;
			   
			}
			
			
			
if($valid<1)
{
date_default_timezone_set("Asia/Singapore");
$total=$total+$ExtraCharge;
$_SESSION['total']=$total;
 if($_SESSION['amount_due']>0){$_SESSION['amount_due']=$total;} 
 if($_SESSION['amount_paid']>0){$_SESSION['amount_paid']=$total;}
		//put in Database
		include ('Database.php');
		$id=$_SESSION['id'];
		$date=date('Y-m-d H:i:s');
		$_SESSION['date_purchase']=$date;
		$query = "INSERT INTO payment 
(id, email, first_name, last_name, del_address, country, shipping_cart, card_number, expiry_date, security_code,amount,payment_option,DATE_of_purchase) 
VALUE('$id','$email_db','$Fname_db','$Lname_db','$address','$country_db','$ExtraCharge','$CardNumber','$ExpiryDate', '$SecurityCode','$total','$payopt','$date')";
				$result = mysqli_query($dbhandle,$query);
				mysqli_close($dbhandle);
				header ('Location:link2.php');
			
}
}			
			
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
<link rel="stylesheet" href="css/payment.css" type="text/css">
<title> Phone </title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style>
#form-wraptwo{
width:1200px; 
border: 0px solid #ccc;
background-color:#ffffff;
margin: 10px auto;
padding: -200px 0px;
height:950px; 

}
#form-wrapfive{
width:1200px; 
border: 0px solid #ccc;
background-color:#ffffff;
margin: 30px 895px 50px 40px; 
padding: -10px 0px;
}
</style>
</head>

<body>
<div class="form-wrap">
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
<input type="submit" value="View Cart" class="tffbutton">
</form>

</div> <!-- wrap close -->
</div>

<div id="form-wraptwo">
<div class="topwrap">

<h2> Email Address </h2>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<label for="Email"> Email: &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp;</label>
<input  class="err" name="Email" placeholder="<?php echo $email_db; ?>"/>

<h2> Billing Information </h2>
<label for="Fname"> <font size="2" color="red"></font> First Name:   &nbsp &nbsp &nbsp &nbsp &nbsp; </label>
	<input class="err" name="Fname" placeholder=" <?php echo $Fname_db; ?>" value="<?php echo $Fname_db; ?>"/><br>
	
	<label for="Lname"> <font size="2" color="red"></font> Last Name: &nbsp  &nbsp &nbsp &nbsp &nbsp;</label>
	<input class="err"  name="Lname" placeholder=" <?php echo $Lname_db; ?>" value="<?php echo $Lname_db; ?>"/> <br>
	
	<label for="Lname"> <font size="2" color="red"></font>Contact:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;</label>
	<input class="err"  name="contact" placeholder=" <?php echo $contact_db; ?>" value=" <?php echo $contact_db; ?>"/> <br>
	
	<label for="Lname"> <font size="2" color="red"></font> Delivery Address:<font size="2" color="red"><?php echo $addErr;?></font></label>
	<input class="err"  name="Add" value="NULL" placeholder=" Enter your Address"/> <br>
	
	<label for="country">Country:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;</label>
	
		<input class="err"  name="Country" placeholder=" <?php echo $country_db; ?>" value=" <?php echo $country_db; ?>"/> <br>
	
	<br>
	
	


<h2> Shipping Information </h2>
<label> Choose Category :</label><br> <br>
	&nbsp &nbsp &nbsp &nbsp &nbsp; <input type="radio" name="cat" value="4" checked>Standard Shipping:S$4.00 <br><br>
	
	&nbsp &nbsp &nbsp &nbsp &nbsp;<input type="radio" name="cat" value="8" >Express Shipping:S$8.00<br><br>
	&nbsp &nbsp &nbsp &nbsp &nbsp;<input type="radio" name="cat" value="12" >Over Night Shipping:S$12.00<br><br>
	</select>
	
	<h2> Payment Option </h2>
<label> Choose Category :<font size="2" color="RED">*<?php echo $cashErr;?></font></label><br> <br>
	<div <?php if($total > 1000) echo 'style="display: none"'?>>&nbsp &nbsp &nbsp &nbsp &nbsp; <input type="radio" name="opt" value="Cash" onclick="hideCCPay();">Cash On Delivery<br><br></div>
	
	&nbsp &nbsp &nbsp &nbsp &nbsp;<input type="radio" name="opt" value="Card"  onclick="showCCPay();" checked>Pay Now
	<br>
	<font size="2" color="Black">*Cash on dilivery is only available under purchase of S$1000</font>
	<br>
	
	<script type="text/javascript">
		function hideCCPay(){
			$('#ccpay').css('display', 'none');
		}
		
		function showCCPay(){
			$('#ccpay').css('display', 'block');
		}
	</script>
	
	</select>

	<div id="ccpay">
		<h2> Payment Information <font size="2" color="black">*Only For Pay Now</font> </h2>
		<label for="Fname"> <font size="2" color="red"></font>Card Number:<font size="2" color="red">*<?php echo $CDErr;?></font></label>
		<input class="err" name="CD" placeholder=" Enter your card Number" /><br>
		<label for="Fname"> <font size="2" color="red"></font> Expiry Date: &nbsp; <font size="2" color="red">*<?php echo $EDErr;?></font></label>
		<input type="date" class="eff" name="ED" placeholder="Date" min="<?php echo $today ?>" max="2030-12-31"  />
		<label for="Fname"> <font size="2" color="red"></font> Security Code<font size="2" color="red">*<?php echo $SCErr;?></font></label>
		<input class="fee" name="SC" placeholder=" Enter your Security Code " /><br>
		<img src="image/mastercard.png">
		<img src="image/visa.png">
		<img src="image/mastro.png">
		<img src="image/cirrus.png">
		<img src="image/americanexpress.png">
		<img src="image/lock.png"> 
	</div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>


<div class="form-wrapfive">
<div class="topwrap">
<input type="submit" value="S$ <?php echo $total; ?>     >>" class="tbutton"/>
</form>
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
</body>
</html>



