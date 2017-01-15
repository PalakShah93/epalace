<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
<link rel="stylesheet" href="css/viewphone.css" type="text/css">
<title> View Phone </title>
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
include ('Database.php');
?>
<?php
//$product_ids= $_GET['id'];
	include ('Database.php');
	$product_ids =$_GET['id'];
	$result = mysqli_query($dbhandle,"SELECT * FROM phone WHERE p_id = '$product_ids' ");
	$rows = mysqli_fetch_array($result);
	$source=$rows{'imgsource'};
	$imgsrc="/"."$source";
	  ?>
<h2> View More on <?php echo $rows{'modelno'}; ?> </h2>
	  <td> <div class="borderit">
		<img src="<?php echo "/$source"; ?>"  alt="..." width="170" height="170">
		</div>
		<?php
	 
	  echo "Name:  ".$rows{'modelno'}."<br>";
	  echo "price: ".$rows{'price'}."<br>";
	  echo "Colour:".$rows{'color'}."<br>";
	  echo "Brand: ".$rows{'brand'}."<br>";
	  echo "Form:  ".$rows{'form'}."<br>";
	  echo "Sim-card: ".$rows{'sim'}."<br>";
	  echo "Network: ".$rows{'network'}."<br>";
	  echo "RAM:  ".$rows{'ram'}."<br>";
	  echo "Size: ".$rows{'size'}."<br>";
	  echo "Memory:".$rows{'memory'}."<br>";
	  echo "Weight: ".$rows{'weight'}."<br>";
	  echo "Warrenty: ".$rows{'warrenty'}."<br>";
	  
	 
	  ?>
	 
	  <button onclick="goBack()" type="submit" name="id" >Go Back </Button> </td>
	<script>
	function goBack() {
    window.history.back()
	}
	</script>

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









