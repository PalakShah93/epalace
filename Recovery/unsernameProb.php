<?php

?>
<?php
global $err;
$err="*";
global $valid;
global $mainErr;
$user_db = $Fname_db = $Lname_db = $city_db = $contact_db =$pass_db= "";
$user = $Fname = $Lname = $City = $Contact = $PassErr= $pass="";
global $FnameErr,$LnameErr,$ContactErr,$CityErr,$mainErr;
 $FnameErr = $LnameErr = $ContactErr = $CityErr =  "";
 $mainErr="";



if ( !empty($_POST))
{

						
						if (empty($_POST["Password"])) 
						{
							$PassErr = "Password is required";
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

						else if(isset($_POST["FName"]))
						{
							$pass=$_POST['Password'];
							$Fname=$_POST['FName'];
							$Lname=$_POST['LName'];
							$City=$_POST['City'];
							$Contact=$_POST['Contact'];
							$Fname=test_input($Fname);
							$Lname=test_input($Lname);
							$City=test_input($City);
							$Contact=test_input($Contact);
							$pass=test_input($pass);
							vadilation($Fname,$Lname,$City,$Contact,$pass);
						}
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

function Vadilation($Fnames,$Lnames,$Citys,$Contacts,$passes)
{
SESSION_START();
global $FnameErr,$LnameErr,$ContactErr,$CityErr,$mainErr,$PassErr;
include('Database.php');
$id=$_SESSION['id'];
$result = mysqli_query($dbhandle,"SELECT * FROM registration_db 
						where id='$id'");
while($rows = mysqli_fetch_array($result))
{
	$user_db=$rows{'user'};
	$Fname_db=$rows{'fname'};
	$pass_db=$rows{'password'};
	$Lname_db=$rows{'lname'};
	$city_db=$rows{'city'};
	$contact_db=$rows{'contact'};
	$email_db=$rows{'email'};
}
//if (strcmp($var1, $var2) !== 0)
	
	if($Fnames!=$Fname_db)
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
	else if($passes!=$pass_db)
	{
		$PassErr="Password doesnt match";
	}
	else
	{
		$mainErr= "Username for ".$email_db." is ".$user_db."";
		}
}
	
	
	






							





?>
<html>
</head>


<head>
<div id="form-wrap">

<form>
<fieldset>
<h4>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;<font size="5" color="bfb1b1">Username Recovery </font></h4>
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
<font size="3" color="black"><?php echo $mainErr;?></font>
<label for="Username" > Password:<font size="2" color="red"><?php echo $err.$PassErr;?></font></label>
	<input  type="password" name="Password" placeholder=" Enter your Password"/>	
<label for="Fname" > First Name:<font size="2" color="red"><?php echo $err.$FnameErr;?></font></label>
	<input  type="text" name="FName" placeholder=" Enter your First Name"/>	
<label for="Lname" > Last Name:<font size="2" color="red"><?php echo $err.$LnameErr;?></font></label>
	<input  type="text" name="LName" placeholder=" Enter your Last Name"/>
<label for="Contact" > Contact:<font size="2" color="red"><?php echo $err.$ContactErr;?></font></label>
	<input  type="text" name="Contact" placeholder=" Enter your Contact No."/>
<label for="City" > City:<font size="2" color="red"><?php echo $err.$CityErr;?></font></label>
	<input  type="text" name="City" placeholder=" Enter City."/>
			<input class="btn" type="submit" value="Submit"/>
</form>
<br>
&nbsp&nbsp&nbsp; <a href="http://www.electronic-palace.com/" >Go Back!</a>
</body>
</html>


