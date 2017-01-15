<?php
include('Database.php');
// define variables and set to empty values 
$UnameErr = $FnameErr = $LnameErr = $contactErr =  $contactErr = $PassErr = $cityErr = $PCErr =
 $CPassErr = $nameErr = $emailErr = $genderErr = $websiteErr = $BLKErr= $unit1Err = $unit2Err = $LaneErr ="";

 
$name = $email = $gender = $comment = $website = $username = $str = $post="";

$user = $pass = $cpass =$email = $email= $Fname = $Lname = $lane = $blk =$PC = $City = $Country =$Contact ="";
$unit1 = $unit2= 0;
global $valid,$body;
$valid= 0;
$id=0;
if ( !empty($_POST))
{
$user =$_POST['Username'];
$pass =$_POST['Password'];
$cpass =$_POST['Cpassword'];
$email=$_POST['Email'];
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$lane=$_POST['Lane'];
$blk=$_POST['BLK'];
$unit1=$_POST['unit1'];
$unit2=$_POST['unit2'];
$PC=$_POST['PC'];
$City=$_POST['City'];
$Country=$_POST['Country'];
$Contact=$_POST['Contact'];



						if (empty($_POST["Username"])) 
						{
							$UnameErr= "Username is required";
							$valid= $valid+1;
						} 
						
						else if (empty($_POST["Fname"])) 
						{
							$FnameErr = "First Name is required";
							$valid= $valid+1;
						} 
						
   						else if (empty($_POST["Lname"])) 
						{
							$LnameErr = "Last Name is required";
							$valid= $valid+1;
						} 
						
  						else if (empty($_POST["Email"])) 
						{
							$emailErr = "Email is required";
							$valid= $valid+1;
						} 
						
						else if (empty($_POST["Contact"])) 
						{
							$contactErr = "Contact is required";
							$valid= $valid+1;
						} 

						else if (empty($_POST["PC"])) 
						{
							$PCErr = "Postal is required";
							$valid= $valid+1;
						} 
   
						else if (empty($_POST["Password"])) 
						{
							$PassErr = "Password is required";
							$valid= $valid+1;
						}

						else if (empty($_POST["City"])) 
						{
							$cityErr = "City is required";
							$valid= $valid+1;
						} 
						
						else if (empty($_POST["Cpassword"])) 
						{
							$CPassErr = "Password is required";
							$valid= $valid+1;
						}
						
						else if (empty($_POST["BLK"])) 
						{
							$BLKErr = "BLK is required";
							$valid= $valid+1;
						}

						
						else if (empty($_POST["Lane"])) 
						{
							$LaneErr = "Lane is required";
							$valid= $valid+1;
						}
						
						
						else if (($_POST["Password"])!=($_POST["Cpassword"])) 
						{
							$CPassErr = "Password is not matching";
							$valid= $valid+1;
						} 
						else if(isset($_POST["Username"]))
						{	
							$Username=$_POST["Username"];
							usernameck($Username);
							$email = test_input($_POST["Email"]);
							Emailid($email);
							$name = test_input($_POST["Lname"]);
							// check if name only contains letters and whitespace
							if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
							{
							$LnameErr = "Only letters and white space allowed";
							$valid= $valid+1;
							}
							$name = test_input($_POST["Fname"]);
							
							if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
							{
							$FnameErr = "Only letters and white space allowed"; 
							$valid= $valid+1;
							}
							
							
							$contact=test_input($_POST["Contact"]);
							
							if(preg_match("/[^0-9]/", $contact))
							{
							$contactErr="Invalid Phone Number";
								
							}
							
							
							$PC=test_input($_POST["PC"]);
							
							if(preg_match("/[^0-9]/",$PC))
							{
								
									$PCErr="Invalid Postal Code";
									$valid= $valid+1;
								
							}
                                                                
							
							if(preg_match("/[^0-9]/",$blk))
							{
								$BLKErr="BLK invalid";
									$valid= $valid+1;
							}
                                                        if(strlen($blk)>3)
								{ 
									$BLKErr="BLK invalid";
									$valid= $valid+1;
								}
							
							if (!is_numeric($unit1))
							{
								$unit1Err="Invalid Unit";
								$valid= $valid+1;
							}
							
							if (!is_numeric($unit2))
							{
								$unit2Err="Invalid Unit";
								$valid= $valid+1;
							}
							
							
							//valid_pass($pass);	
							
					}

	if ($valid<1) 
	{
				global $subject,$body,$BCC;
				$id++;
				$subject="Successfully Registered";
				$body=nl2br("Welcome To E-Palace! \n
				You where successfully Registed on ".date("Y-m-d"). "
				Name: ".$Fname." \n
				E-Mail: ".$email." \n
				Contact: ".$Contact." \n
				Blk: ".$blk." Unit #".$unit1." ".$unit2." \n
				Lane: ".$lane." \n
				City: ".$City." \n
				Country: ".$Country." \n
				Password: To get,Login on our Website");
				$time=date("Y-m-d");
				$BCC='electronicpalace2014@gmail.com';
				include ('Database.php');
				include ('tute/t1.php');
				$query = "INSERT INTO registration_db (user, fname, lname, contact, email, city, country, BLK, unit1, unit2, lane, postalCode, password,Date) VALUES('$user','$Fname','$Lname','$Contact','$email','$City','$Country','$blk', '$unit1', '$unit2', '$lane','$PC', '$pass', '$time')";
				$result = mysqli_query($dbhandle,$query);
				mysqli_close($dbhandle);
				sentmail($user,$email,$subject,$body,$BCC);
                                $_SESSION['registration']="successful";
				header ("Location: index.php");
	}

   
   
}
   







function test_input($data) 
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


function usernameck($usernm)
{
				include ('Database.php');
				$result = mysqli_query($dbhandle,"SELECT * FROM registration_db WHERE  user='$usernm'");
					if (mysqli_num_rows($result) != 0)
					{
						global $valid;
						global $UnameErr;
						$UnameErr= "Username already exists";
						$valid=$valid+1;
					
					}
					else{}
}
function Emailid($Emailid)
{
					global $emailErr;
					include ('Database.php');
					$result = mysqli_query($dbhandle,"SELECT * FROM registration_db WHERE  email='$Emailid'");
						if (mysqli_num_rows($result) != 0)
						{
								echo "email check";
								global $valid;
								$emailErr= "Email already exists";
								$valid=$valid+1;
						}
						else if (!filter_var($Emailid, FILTER_VALIDATE_EMAIL)) 
						{
								global $valid;
								$emailErr = "Invalid email format"; 
								$valid=$valid+1;
						}
}

/*function valid_pass($passing) {
$dummy = array();
    if (!preg_match_all('$\S*(?=\S{8,})\S*$', $passing, $dummy))
	{
	global $PassErr;
	global $valid;
	$PassErr = "Invalid Password";
	$valid=$valid+1;
	}
	}*/
	
        

/*
    Explaining $\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$
    $ = beginning of string
    \S* = any set of characters
    (?=\S{8,}) = of at least length 8
    (?=\S*[a-z]) = containing at least one lowercase letter
    (?=\S*[A-Z]) = and at least one uppercase letter
    (?=\S*[\d]) = and at least one number
    (?=\S*[\W]) = and at least a special character (non-word characters)
    $ = end of the string

 */

			



?>















<html>
<head>

<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">

<title> Register An Account </title>

</head>



<div id="form-wrap">

<form>
<fieldset>
<h4><font size="5" color="bfb1b1">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp; Registration Form </font></h4>
      <p>If you already have an account with us, please login at the <a href="sign.php">login page</a>.</p>
<hr>
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

form{
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
padding : 0 0 20px 0;
}

.labelone{
margin-top:10px;

}
.btn{
width:125px;
height:40px;
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
</form>
</head>

<body>

<fieldset>
<hr>
 <legend>Your Personal Details</legend>
 
	<form action="Register.php" method="post">
	<label class"labelone" for="name"> <font size="2" color="red">*<?php echo $UnameErr;?></font>Username:</label>
	
	<input class="err" name="Username" Value="<?php echo $user; ?>"/>
	
	
	
	<label for="Fname"> <font size="2" color="red">*<?php echo $FnameErr;?></font> First Name:</label>
	<input class="err" name="Fname" Value="<?php echo $Fname; ?>"/>
	
	<label for="Lname"> <font size="2" color="red">*<?php echo $LnameErr;?></font> Last Name:</label>
	<input class="err"  name="Lname" Value="<?php echo $Lname; ?>"/>
	
	<label for="Email"> <font size="2" color="red">*<?php echo $emailErr;?></font> Email:</label>
	<input  class="err" name="Email" Value="<?php echo $email; ?>"/>
	
	<label for="contact">  <font size="2" color="red">*<?php echo $contactErr;?></font>Contact:</label>
	<input class="err" name="Contact" Value="<?php echo $Contact; ?>"/>
	<hr>
	 <legend>Your Address</legend>
	 <hr>
	 <table>
	 <tr>
	<td><label for="address"><font size="2" color="red">*<?php echo $BLKErr;?></font>Block No.</label> </td>
	<td><input  class="er" name="BLK" Value="<?php echo $blk; ?>"/> </td>
	
	<td>
	<label for="address"><font size="2" color="red">*<?php echo $unit1Err;?></font>Unit No.</label></td>
	<td>#<input  class="er" name="unit1" Value="00"/></td>
		<td>-<input  class="er" name="unit2" Value="00"/></td>

	</tr>
	</table>
	
	<label for="address"><font size="2" color="red">*<?php echo $LaneErr;?></font>Lane </label>
	<input  class="err" name="Lane" Value="<?php echo $lane; ?>"/>
	
	<label for="address"> <font size="2" color="red">*<?php echo $PCErr;?></font> Postal Code :</label>
	<input class="err" name="PC" Value="<?php echo $PC; ?>"/>
	
	<label for="city">  <font size="2" color="red">*<?php echo $cityErr;?></font>City:</label>
	<input class="err" name="City" Value="<?php echo $City; ?>"/>
	
	<label for="country"> <font size="2" color="red">*</font> Country:</label>
	<select class="err" name="Country" Value="<?php echo $Country; ?>">
                <option value=""> --- Please Select --- </option>
																<option value="Ascension Island (British)">Ascension Island (British)</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Austria">Austria</option>
                                                                <option value="Azerbaijan">Azerbaijan</option>
                                                                <option value="Bahamas">Bahamas</option>
                                                                <option value="Bahrain">Bahrain</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="Barbados">Barbados</option>
                                                                <option value="Belarus">Belarus</option>
                                                                <option value="Belgium">Belgium</option>
                                                                <option value="Belize">Belize</option>
                                                                <option value="Benin">Benin</option>
                                                                <option value="Bermuda">Bermuda</option>
                                                                <option value="Bhutan">Bhutan</option>
                                                                <option value="Bolivia">Bolivia</option>
                                                                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                                <option value="Botswana">Botswana</option>
                                                                <option value="Bouvet Island">Bouvet Island</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                <option value="Bulgaria">Bulgaria</option>
                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                <option value="Burundi">Burundi</option>
                                                                <option value="Cambodia">Cambodia</option>
                                                                <option value="Cameroon">Cameroon</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Canary Islands">Canary Islands</option>
                                                                <option value="Cape Verde">Cape Verde</option>
                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                <option value="Central African Republic">Central African Republic</option>
                                                                <option value="Chad">Chad</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="China">China</option>
                                                                <option value="Christmas Island">Christmas Island</option>
                                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                                <option value="Colombia">Colombia</option>
                                                                <option value="Comoros">Comoros</option>
                                                                <option value="Congo">Congo</option>
                                                                <option value="Cook Islands">Cook Islands</option>
                                                                <option value="Costa Rica">Costa Rica</option>
                                                                <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                                                <option value="Croatia">Croatia</option>
                                                                <option value="Cuba">Cuba</option>
                                                                <option value="Curacao">Curacao</option>
                                                                <option value="Cyprus">Cyprus</option>
                                                                <option value="India">India</option>
                                                                <option value="Democratic Republic of Congo">Democratic Republic of Congo</option>   
                                                                <option value="French Southern Territories">French Southern Territories</option>
                                                                <option value="FYROM">FYROM</option>
                                                                <option value="Gabon">Gabon</option>
                                                                <option value="Gambia">Gambia</option>
                                                                <option value="Georgia">Georgia</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="Ghana">Ghana</option>
                                                                <option value="Hong Kong">Hong Kong</option>   
                                                                <option value="Mauritius">Mauritius</option>
                                                                <option value="Mayotte">Mayotte</option>
                                                                <option value="Mexico">Mexico</option>  
                                                                <option value="Myanmar">Myanmar</option>
                                                                <option value="Namibia">Namibia</option>
                                                                <option value="Nepal">Nepal</option>
                                                                <option value="Netherlands">Netherlands</option>
																<option value="New Zealand">New Zealand</option>
                                                                <option value="North Korea">North Korea</option>
                                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                <option value="Norway">Norway</option>
                                                                <option value="Oman">Oman</option>
                                                                <option value="Pakistan">Pakistan</option>
                                                                <option value="Philippines">Philippines</option>
                                                                <option value="Portugal">Portugal</option>
                                                                <option value="Singapore" selected="selected">Singapore</option>
                                                                <option value="Sri Lanka">Sri Lanka</option>                                                               
                                                                <option value="Sweden">Sweden</option>
                                                                <option value="Switzerland">Switzerland</option>
                                                                <option value="Taiwan">Taiwan</option>
                                                                <option value="Thailand">Thailand</option>                                                               
                                                                <option value="Ukraine">Ukraine</option>
                                                                <option value="United Kingdom" >United Kingdom</option>
                                                                <option value="United States">United States</option>                                                               
                                              </select>
	<hr>
	 <legend>Your Password</legend>
	 <hr>
	<label for="password" >  <font size="2" color="red">*<?php echo $PassErr;?></font>
	<a title="The Password Should               
	-at least length 8
    -at least one lowercase letter
    -at least one uppercase letter
    -at least one number
    " class="tooltip">Password:(?)</a></label>
	<input class="err" type="password" name="Password" placeholder="Enter your Password" />
	
	
	<label for="Cpassword">  <font size="2" color="red">*<?php echo $CPassErr;?></font>Confirm Password:</label>
	<input class="err" type="password" name="Cpassword" placeholder=" Enter your Password Again"/>
	      <p><font size="2" color="red">*</font>Necessary fields</p>

		<fieldset>
	<input class="btn" type="submit" value="Submit"/> </form>
	
	<form method="GET" action="index.php">
		
		<button type="submit"  class="btn" >Go Back to Home </Button> </form>
	
	</fieldset>


	</body>

</body>

</html>
			