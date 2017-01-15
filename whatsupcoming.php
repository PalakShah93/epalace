<?php
include ('Database.php');
?>
<html>
<head>
 <style>
	.borderit img{
	border: 1px solid #e5e6ea;
	height:200;
	width:180;
	}
	img {
	padding:15px; 
	}

h2 {
background-color:#cbddef;
text-align:center;

}

h5 {
background-color:#f9f2f2;
text-align:center;
 height: 30px;
 margin: 0px;
 text-align:right;
 font-size:16px;
 
 text-decoration: none;

}
.borderit:hover img{
border: 2px solid Black;
}
.borderit:hover{
color: blue; 
}
#menu {
    width: 100%;
    height: 20px;
	padding: 8px 0px;
    margin: 0px;

    font-size: 16px;
    font-family: Tahoma, Geneva, sans-serif;
    font-weight: bold;
    text-align: center;
    background-color: #020202;
    border-radius: 0px;
}
#menu li { 
display: inline; 
padding:15px; 
}
#menu a {
    text-decoration: none;
    color: white;
    padding: 4px 4px 4px 4px;
}



#menu a:hover {
    color: #230303;
    background-color: #b7aeae;
	height:30px;

	}
	
	
	IMG.displayed {
    display: block;
    margin-left: auto;
    margin-right: auto }
	


	
	#tfnewsearch{
		float:right;
		}
		
	.tftextinput{
		margin: 50px 100px;
		 display: inline-block;
		 position: relative;
		 left:-50px;
		top:0px;
		padding: 5px 40px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		border:1px solid #0076a3; border-right:0px;
		border-top-left-radius: 15px 15px;
		border-bottom-left-radius: 15px 15px;
	}
	.tfbutton {
		margin: 50px 100px;
		display: inline-block;
		position: relative;
		left:-255px;
		top:0px;
		padding: 5px 45px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		color: #ffffff;
		border: solid 1px #0076a3; border-right:0px;
		background: #0095cd;
		background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
		background: -moz-linear-gradient(top,  #00adee,  #0078a5);
		border-top-right-radius: 15px 15px;
		border-bottom-right-radius: 15px 15px;
	}
	.tfbutton:hover {
		text-decoration: none;
		background: #007ead;
		background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
		background: -moz-linear-gradient(top,  #0095cc,  #00678e);
	}
	/* Fixes submit button height problem in Firefox */
	.tfbutton::-moz-focus-inner {
	  border: 0;
	}
	.tfclear{
		clear:both;
	}

.right{
margin: -120px 130px;
display: inline-block;
position: relative;
float:right;
left:50px;

}

.tffbutton {
		margin: 50px 100px;
		display: inline-block;
		position: relative;
		left:100px;
		top:-35px;
		background: #0095cd;
		padding: 5px 45px;
		color:#f9f7f7;

}
.tffbutton:hover {
		text-decoration: none;
		background: #007ead;
		background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
		background: -moz-linear-gradient(top,  #0095cc,  #00678e);
	}


	.footer {
  position:relative;
  width:100%;
  bottom: 0;
  padding: 1rem;
  background-color: #211f1f;
  text-align: Left;  
}
.side-corner-tag {
    position: relative;
    color: #fff;
    display: inline-block;
    padding: 5px;
    overflow: hidden;
    font-family: Arial, sans-serif;
    font-weight: 900;
} 
 
.side-corner-tag p {
    display: inline;    
}

.side-corner-tag p span {
    position: absolute;
    display: inline-block;
    right: -25px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.2), inset 0px 5px 30px rgba(255,255,255,0.2);
    text-align: center;
    text-transform: uppercase;
    top: 22px;
    background: #d93131;
    width: 100px;
    padding: 3px 10px;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
} 
.side-corner-tag p:before {
    content: "";
    width: 0;
    height: 0;
    position: absolute;
    top: -17px;
    right: 69px;
    z-index: -1;
    border: 17px solid;
    border-color: transparent transparent #662121 transparent;
}
 
.side-corner-tag p:after {
    content: "";
    width: 0;
    height: 0;
    position: absolute;
    top: 74px;
    z-index: -1;
    right: -10px;
    border: 17px solid;
    border-color: #662121 transparent transparent transparent;
}

 </style>
 </head>
 
<body>

<h5 align="center"> 
&nbsp &nbsp &nbsp;<a href="Register.php" style="text-decoration: none">Register</a> 
&nbsp &nbsp;|  &nbsp &nbsp; <a href="sign.php" style="text-decoration: none">Sign In</a> </h5>



<a href="index.php"><IMG src="image/logo.jpg" /></a> </div>


		<form id="tfnewsearch" action="search_P.php" method="POST">
		
		        <input type="text" class="tftextinput" name="Search" size="40" maxlength="120">
				
				<input type="submit" name="search" class="tfbutton">
		</form>


	<div class="right">
	<form method="post" action="view_cart.php">
<input type="submit" value="View Cart" class="tffbutton">
</form>
				</div>

				
<div id="menu">
<li><a href="phone.php">Hand Phones</a></li>
<li><a href="laptop.php">Laptops</a></li>
<li><a href="">Television</a></li>
<li><a href="camera.php">Cameras</a></li>
<li><a href="desktop.php">Desktops</a></li>
<li><a href="software.php">Softwares</a></li>
<li><a href="tablet.php">I-Pads and Tablets</a></li>
<li><a href="accessories.php">Accessories</a></li>
	


</div>
<br>
<h2> Hand Phones </h2>
<?php
	$result = mysqli_query($dbhandle,"SELECT * FROM whatsupcoming");
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	echo '<table border="0" style="width:100%">';
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
							$id =$rows{'wuc_id'};							
					?>
					
		<td> <div class="borderit">
		<?php
		echo '<form method="post" action="cart_update.php">';
  echo '<img src="/'.$source.'">';
  echo '</div>';
  echo '<h3>'.$name1.'</h3>';
  echo '<h3>'.$price.'</h3>';
  echo '<button class="add_to_cart">Add To Cart</button>';
  echo '<input type="hidden" name="product_qty" value="1" size="3" />';
  echo '<input type="hidden" name="product_code" value="'.$id.'" />';
  echo '<input type="hidden" name="type" value="add" />';
  echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
  echo '<input type="hidden" name="product_price" value="'.$price.'" />';
  echo '<input type="hidden" name="pro4duct_callfeatures" value="'.$source.'" />';
  echo '<input type="hidden" name="src" value="'.$source.'" />';
  echo '</form>';?>
		
		
		
		<form method="GET" action="view_phone.php">
		
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
<div class="footer">
&nbsp &nbsp &nbsp; <a href="aboutus.php" style="text-decoration: none"> <font size="2" color="white">About Us </font></a></li> &nbsp &nbsp &nbsp &nbsp <font size="2" color="white">|</font>
&nbsp &nbsp &nbsp; <a href="" style="text-decoration: none"><font size="2" color="white">Delivery Information </font></a> &nbsp &nbsp &nbsp &nbsp <font size="2" color="white">|</font>
&nbsp &nbsp &nbsp; <a href="FAQ's.php" style="text-decoration: none"><font size="2" color="white">FAQ's </font></a> &nbsp &nbsp &nbsp &nbsp <font size="2" color="white">|</font>
&nbsp &nbsp &nbsp; <a href="contactus.html" style="text-decoration: none"><font size="2" color="white">Contact Us </font></a> &nbsp &nbsp &nbsp &nbsp <font size="2" color="white">|</font>
&nbsp &nbsp &nbsp; <a href="" style="text-decoration: none"> <font size="2" color="white">Returns </font></a> &nbsp &nbsp &nbsp &nbsp <font size="2" color="white">|</font>
&nbsp &nbsp &nbsp; <a href="" style="text-decoration: none"> <font size="2" color="white">Site Map</font></a>&nbsp &nbsp &nbsp &nbsp <font size="2" color="white">|</font>
&nbsp &nbsp &nbsp; <a href="" style="text-decoration: none"> <font size="2" color="white">Returns </font></a>&nbsp &nbsp &nbsp &nbsp <font size="2" color="white">|</font>
&nbsp &nbsp &nbsp; <a href="" style="text-decoration: none"> <font size="2" color="white">Site Map</font></a>&nbsp &nbsp &nbsp &nbsp <font size="2" color="white">|</font>
&nbsp &nbsp &nbsp; <a href="feedback.php" style="text-decoration: none"> <font size="2" color="white">Feed Back</font></a>
</font>
<hr>
<p align="center"> <font size="2" color="white"> Electronic Palace 2014 @ Singapore </font></p> 
</div>
</body>
</html>