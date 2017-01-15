<?php

?>
<?php
global $err;
$err="*";
global $valid;
global $mainErr;
$user_db = $Fname_db = $Lname_db = $city_db = $contact_db = $email_db=$pass_db="";
$user = $Fname = $Lname = $City = $Contact = "";
global $UnameErr,$FnameErr,$LnameErr,$ContactErr,$CityErr,$mainErr;
$UnameErr = $FnameErr = $LnameErr = $ContactErr = $CityErr = $mainErr= "";



if ( !empty($_POST))
{

						if (empty($_POST["Username"])) 
						{
							$UnameErr= "Username is required";
							$valid= $valid+1;
						} 
						
						
						if (empty($_POST["FName"])) 
						{
							$FnameErr = "First Name is required";
							$valid= $valid+1;
						} 
						
   
						if (empty($_POST["LName"])) 
						{
							$LnameErr = "Last Name is required";
							$valid= $valid+1;
						} 
						
						if (empty($_POST["Contact"])) 
						{
							$ContactErr = "Contact is required";
							$valid= $valid+1;
						}
						
						if (empty($_POST["City"])) 
						{
							$CityErr = "City is required";
							$valid= $valid+1;
						}

						else if(isset($_POST["Username"]))
						{
							$user =$_POST['Username'];
							$Fname=$_POST['FName'];
							$Lname=$_POST['LName'];
							$City=$_POST['City'];
							$Contact=$_POST['Contact'];
							$user=test_input($user);
							$Fname=test_input($Fname);
							$Lname=test_input($Lname);
							$City=test_input($City);
							$Contact=test_input($Contact);
							vadilation($user,$Fname,$Lname,$City,$Contact);
						}
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

function Vadilation($users,$Fnames,$Lnames,$Citys,$Contacts)
{
SESSION_START();
global $UnameErr,$FnameErr,$LnameErr,$ContactErr,$CityErr,$mainErr,$Subject,$body;
include('Database.php');
$id=$_SESSION['id'];
$result = mysqli_query($dbhandle,"SELECT * FROM registration_db 
						where id='$id'");
while($rows = mysqli_fetch_array($result))
{
	$user_db=$rows{'user'};
	$Fname_db=$rows{'fname'};
	$Lname_db=$rows{'lname'};
	$city_db=$rows{'city'};
	$contact_db=$rows{'contact'};
	$email_db=$rows{'email'};
	$pass_db=$rows{'password'};
}
//if (strcmp($var1, $var2) !== 0)
	if($users!=$user_db)
	{	
		$UnameErr= "Username is Invalid";
	}
	else if($Fnames!=$Fname_db)
	{	
		$FnameErr= "First Name is Invalid";
	}
	else if($Lnames!=$Lname_db)
	{	
		$LnameErr= "Last Name is Invalid";
	}
	else if($Contacts!=$contact_db)
	{
		$ContactErr="Contact Invalid";
	}
	else if($Citys!=$city_db)
	{
		$CityErr="City doesnt Match Database";
	}
	else
	{$err="Password Has been recovered";
		include ('tute/t1.php');
		$Subject="Password Recovery";
		$body="Welcome TO E-Palace! Here is Your Password ".$pass_db." Please Visit Our Website to Re-Login.";
		$BCC='electronicpalace2014@gmail.com';
		sentmail($users,$email_db,$Subject,$body,$BCC);
		
		$mainErr="Succesfully Email Sent";
		//header('Location: t1.php');
		}
}
	
?>
<html>
</head>


<head>
<div id="form-wrap">

<form>
<fieldset>
<h4>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;<font size="5" color="bfb1b1"> Password Recovery</font></h4>
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
color:#888;

}
input{
width:480px;
height: 40px;
margin:0 0 10px 20px;
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
</style>
</form>
<fieldset>
</head>
<body>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<font size="2" color="Black"><?php echo $mainErr;?></font>
<label for="Username" > Username:<font size="2" color="red"><?php echo $err.$UnameErr;?></font></label>
	<input  type="text" name="Username" placeholder=" Enter your Username"/>	
<label for="Fname" > First Name:<font size="2" color="red"><?php echo $err.$FnameErr;?></font></label>
	<input  type="text" name="FName" placeholder=" Enter your First Name"/>	
<label for="Lname" > Last Name:<font size="2" color="red"><?php echo $err.$LnameErr;?></font></label>
	<input  type="text" name="LName" placeholder=" Enter your Last Name"/>
<label for="Contact" > Contact:<font size="2" color="red"><?php echo $err.$ContactErr;?></font></label>
	<input  type="text" name="Contact" placeholder=" Enter your Contact No."/>
<label for="City" > City:<font size="2" color="red"><?php echo $err.$CityErr;?></font></label>
	<input  type="text" name="City" placeholder=" Enter City."/>
			<input class="btn" type="submit" value="Verify"/>
</form>
<br>
&nbsp&nbsp&nbsp&nbsp; <a href="http://www.electronic-palace.com/" >Go Back!</a>
</body>
</html>


