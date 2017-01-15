<?php
include ('Database.php');
require ('tute/t1.php');

$name= $email= $contact= $country= $cat= $brand= $productname= $color=$price=$sim=$Network=$RAM=$Zoom=$os="";
$nameErr=$emailErr=$contactErr=$ProdNameErr=$uploadErr=$priceErr=$mainErr="";
$imgsrc=$imageFileType="";
global $valid,$imgsrc,$uploadErr;
$valid=0;
global $target_dir;
$target_dir = "uploads/";

$uploadOk=1;
if ( !empty($_POST)){
$target_dir = $target_dir . basename( $_FILES["uploadFile"]["name"]);
//$imageFileType = pathinfo($target_dir,PATHINFO_EXTENSION);
//$something=string filetype( string $target_dir );
$name =$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$cat=$_POST['cat'];
$brand=$_POST['brand'];
$productname=$_POST['productname'];
$color=$_POST['color'];
$price=$_POST['price'];
$sim_type=$_POST['simtype'];
$Network=$_POST['network'];
$RAM=$_POST['ram'];
$Zoom=$_POST['zoom'];
$os=$_POST['os'];
//echo $imageFileType;
//echo $something;
$info = new SplFileInfo($target_dir);
$imageFileType=pathinfo($info->getFilename(), PATHINFO_EXTENSION);
//$imageFileType=SplFileInfo::getExtension($target_dir);



			if(empty($name))
			{	
					$nameErr="Name Field Required"; 
					$valid=$valid+1; 
			}
			else if(empty($email))
			{
					$emailErr="Email Field Required";
					$valid=$valid+1;
			}
			else if(empty($contact))
			{
					$contactErr="Contact Field Required";
					$valid=$valid+1;
			}
			else if(empty($productname))
			{
					$ProdNameErr="Product Name Required";
					$valid=$valid+1;
			}
			else if(empty($price))
			{
					$priceErr="Price Please Suggest";
					$valid=$valid+1;
			}
			else if(empty($_FILES["uploadFile"]["tmp_name"]))
			{
					$uploadErr="Upload File needed";
					$valid=$valid+1;
			}
			else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
			{
				$uploadErr= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					$uploadOk = 0;
				$valid=$valid+1;
			}
			else if ($_FILES["uploadFile"]["size"] > 100000)
			{
					$uploadErr="Sorry, your file is too large.";
					$uploadOk = 0;
					$valid=$valid+1;
			}
			
			else if(isset($name))
			{
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
				{
					$nameErr = "Only letters and white space allowed";
					$valid= $valid+1;
				}
				if(preg_match("/[^0-9]/", $contact))
				{	
					$contactErr="Invalid Phone Number";
					
				}
				
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
				{
								$emailErr = "Invalid email format"; 
								$valid=$valid+1;
				}
				$check=(int)($price);
				if((is_numeric($check == 0))||($check==0))
				{
							$priceErr="Price is Not Valid";
							$valid=$valid+1;
				}
				
			}
			if($valid<1)
			{
				$Subject="Sell Products";
				$BCCemail="electronicpalace2014@gmail.com";
				$body="Hello ".$name." \n 
				we have received your Product Imformation. 
				Thanks For Using Our Sell Products. \n \n
				Our Customer Service Will come Back to you as soon as possible\n
                                Regards, \n
                                Customer Service, \n
                                E-palace";
				uploadfile();
				$query = "INSERT INTO sell_product (name, email, contact, category, brand, product_name, color, price, simtype, network, ram, zoom, os, imagesrc) VALUES('$name','$email','$contact','$cat','$brand','$productname','$color','$price', '$sim_type', '$Network', '$RAM','$Zoom', '$os', '$imgsrc')";
				$result = mysqli_query($dbhandle,$query);
				mysqli_close($dbhandle);
				sentmail($name,$email,$Subject,$body,$BCCemail);
                                $mainErr="Product has been successfully received";
                                print '<script type="text/javascript">'; 
                                print 'alert("Product Info has been successfully received")'; 
                                print '</script>';
			}	
	
			
				
}


function uploadfile()
{
	global $imgsrc;
	global $target_dir;
	global $uploadErr;
	global $valid;
	if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_dir)) 
	{
    $uploadErr= "The file has been uploaded.";
	} 
	else 
	{
    $uploadErr = "Sorry, there was an error uploading your file.";
	$valid=$valid+1;
	}

		$imgsrc=basename( $_FILES["uploadFile"]["name"]);
}


?>
<style type="text/css">

html{

background-color:#ffffff;

}

#form-wrap{

width:600px;
border: 5px solid #ccc;
background-color:#ffffff;
margin: 50px auto;
padding: 30 px 0;

}

.formwrap{
width: 500px;
margin:0 auto;
}
p{
margin:10px 0 0 20px;
font:14px sans-serif;
color: #b2a4a4;
font-weight:bold;
}
legend{
margin:10px 0 0 20px;
font:18px sans-serif;
color: #999;
font-weight:bold;
}
label{
display:block;
margin:5px 0 5px 20px;
font:18px, sans-serif;
color: #000000;

}
.err{
width:480px;
height: 40px;
margin:0 0 10px 20px;
}

.error{
width:50px;
height:40px;
margin:0 0 10px 20px;
}

.er {
padding :4px;
width:30px;
height:25px;
margin:4px 4px 4px 4px;
display:inline;
}

select{
width:480px;
height: 40px;
margin:0 0 10px 20px;
}

textarea{
width:250px;
margin:0 0 0 20px;
}

fieldset{
border:none;
background-color :#f6f6f6f6;
padding : 0 0 7px 0;
}

.labelone{
margin-top:10px;

}

.btn{
width:125px;
background-color: #d6cfcf;
  
  border: 1px solid #2b0606;
  
  margin:20px 0 0 20px;
}

form h4{

margin:50px 0 0 20px;
font:24px sans-serif;
color: #4c4747;
font-weight:bold;
}

.tooltip{
    display: inline;
    position: relative;
}
.tooltip:hover:after{
    background: #333;
    background: rgba(0,0,0,.8);
    border-radius: 5px;
    bottom: 26px;
    color: #fff;
    content: attr(title);
    left: 20%;
    padding: 5px 15px;
    position: absolute;
    z-index: 98;
    width: 220px;
}
.tooltip:hover:before{
    border: solid;
    border-color: #333 transparent;
    border-width: 6px 6px 0 6px;
    bottom: 20px;
    content: "";
    left: 50%;
    position: absolute;
    z-index: 99;
}


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

<head>

<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">

<title> Sell Products </title>

</head>



<div id="form-wrap">

<fieldset>
<br>
<h4 align="Center" ><font size="5" color="cec4c4"> Sell On Electronic Palace  </font></h4>

</fieldset>
<hr>
&nbsp &nbsp  &nbsp;<font size="2" color="black"><?php echo $mainErr;?>
<form action="sellproducts.php" method="POST" enctype="multipart/form-data">
<label> Name : <font size="2" color="red">*<?php echo $nameErr;?></font></label>
<input type="text" class="err" placeholder=" Enter your Name" name="name">
<br>

<label> Email :<font size="2" color="red">*<?php echo $emailErr;?></font></label>
<input type="text" class="err" placeholder=" Enter your Email Address" name="email" >
<br>

<label> contact :<font size="2" color="red">*<?php echo $contactErr;?></font></label>
<input type="text"  class="err"  placeholder=" Enter your Contact Number" name="contact">
<br>

<br>
<label> Choose Category :</label>
	<input type="radio" name="cat" value="laptop" >Laptop
	<input type="radio" name="cat" value="mobile" >Mobile
	<input type="radio" name="cat" value="camera" >Camera
	<input type="radio" name="cat" value="Television">Television
	<input type="radio" name="cat" value="Ipad" >Ipad
	<input type="radio" name="cat" value="Tablets" >Tablets
	<input type="radio" name="cat" value="Others" checked>Others	
	</select>
	<br>
	<br>
	<label> Choose Brand :</label>
	<input type="radio" name="brand" value="Dell">Dell
	<input type="radio" name="brand" value="Apple" >Apple
	<input type="radio" name="brand" value="Samsung">Samsung
	<input type="radio" name="brand" value="Sony" >Sony
	<input type="radio" name="brand" value="Micro Max" >Micro Max
	<input type="radio" name="brand" value="LG" >LG
	<input type="radio" name="brand" value="Others" checked>Others
	</select>
<br>
<br>	
	
	<label> Product Name :<font size="2" color="red">*<?php echo $ProdNameErr;?></font></label>
	<input type="text" class="err" placeholder="I-Phone 5S, Samsung Galaxy,Micromax Canvas Nitro "  name="productname" >
<br>	


	<label> Colour :</label>
  &nbsp &nbsp  &nbsp;	<input  class="color" name="color" >
	
	<script type="text/javascript" src="color picker/jscolor.js"></script>

	
<br>
	<label> Price: S$ &nbsp;<font size="2" color="red">*<?php echo $priceErr;?></font></label>
	<input type="text" class="err" placeholder=" 100.00"  name="price" >
<br>
<label> Sim Type :</label>
	<input type="radio" name="simtype" value="Single">Single
	<input type="radio" name="simtype" value="Dual" >Dual
	<input type="radio" name="simtype" value="Not Applicable" checked >Not Applicable
	</select>
<br>
<br>	
	<label> Network :</label>
	<input type="radio" name="network" value="2G">2G
	<input type="radio" name="network" value="3G" >3G
	<input type="radio" name="network" value="4G" >4G
		<input type="radio" name="network" value="Wi-Fi" >Wi-Fi

	
	<input type="radio" name="network" value="Not Applicable" checked >Not Applicable
	</select>
	
<br>
<br>	
	<label> RAM :</label>
	<input type="radio" name="ram" value="16">16 MB
	<input type="radio" name="ram" value="32" >32 MB
	<input type="radio" name="ram" value="64" >64 MB
	<input type="radio" name="ram" value="128" >128 MB
	<input type="radio" name="ram" value="512" >512 MB
	<input type="radio" name="ram" value="1" >1 GB
	<input type="radio" name="ram" value="2" checked >2 GB

	</select>
	<br>
	<br>
	
	<label> Zoom :</label>
	<input type="radio" name="zoom" value="Optical Zoom">Optical Zoom
	<input type="radio" name="zoom" value="Digital Zoom" >Digital Zoom
	<input type="radio" name="zoom" value="Not Applicable" checked >Not Applicable
	</select>
	<br>
	<br>
	
	<label> OS :</label>
	<input type="radio" name="os" value="Optical Zoom">IOS
	<input type="radio" name="os" value="Digital Zoom" >Android
	<input type="radio" name="os" value="Digital Zoom" >Windows
	<input type="radio" name="os" value="Digital Zoom" >Linux
	<input type="radio" name="os" value="Digital Zoom" >OS X
	<input type="radio" name="os" value="others">Others
	<input type="radio" name="os" value="Not Applicable" checked>NA
	</select>
	<br>
	<br>
	
	<label> Please Choose The File:<font size="2" color="red">*<?php echo $uploadErr;?></label>
					<input type="file" class="err"  name="uploadFile">
<br>
					
 <input type="submit" class="err"  value="Submit" align="center"> </form>

<br>
<br>
<br>
	
	
	&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp;<a href="index.php">Return To Home</a>

</html>		