<?php
SESSION_START();

global $user_db,$Fname_db,$pass_db,$Lname_db,$city_db,$contact_db,$email_db,$add_db,$country_db,$BLK_db,$unit1_db,$unit2_db,$lane_db,$PC_db,$mainErr;
$user_db = $Fname_db = $pass_db = $Lname_db = $city_db = $contact_db = $email_db = $add_db = $country_db =$BLK_db=$unit1_db=$unit2_db=$lane_db=$PC_db=$mainErr="";
$UnameErr = $FnameErr = $LnameErr = $contactErr =  $contactErr = $PassErr = $cityErr = $PCErr = $CPassErr = $nameErr = $emailErr = $genderErr = $websiteErr = $BLKErr= $unit1Err = $unit2Err = $LaneErr ="";
include('Database.php');
global $valid;
$valid=0;
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
	$country_db=$rows{'country'};
	$BLK_db=$rows{'BLK'};
	$unit1_db=$rows{'unit1'};
	$unit2_db=$rows{'unit2'};
	$lane_db=$rows{'lane'};
	$PC_db=$rows{'postalCode'};
}
$ref_id="CESUFQL".$id."4372";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$user =$_POST['Username'];
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$email=$_POST['Email'];
$lane=$_POST['Lane'];
$blk=$_POST['BLK'];
$unit1=$_POST['unit1'];
$unit2=$_POST['unit2'];
$PC=$_POST['PC'];
$City=$_POST['City'];
$Country=$_POST['Country'];
$Contact=$_POST['Contact'];
$pass =$_POST['Password'];
								
							if (!preg_match("/^[a-zA-Z ]*$/",$Fname)) 
							{
							$LnameErr = "Only letters and white space allowed";
							$valid= $valid+1;
							}
							if (!preg_match("/^[a-zA-Z ]*$/",$Lname)) 
							{
									$FnameErr = "Only letters and white space allowed"; 
									$valid= $valid+1;
							}
						
							if(preg_match("/[^0-9]/", $Contact))
							{
								$contactErr="Invalid Phone Number";
							}
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
							if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
							{
								$emailErr = "Invalid email format"; 
								$valid=$valid+1;
							}
							if(isset($user))
							{valid_pass($pass);
							}
							

if($valid<1){

							if(isset($user))
							{
								if($user!=$user_db)
								{
									$userdb="user";
									updatesql($userdb,$user,$id);
								}
								if($Fname!=$Fname_db)
								{
									$fnamedb="fname";
									updatesql($fnamedb,$Fname,$id);
								}
								if($Lname!=$Lname_db)
								{
									$lnamedb="lname";
									updatesql($lnamedb,$Lname,$id);
								}
								if($email!=$email_db)
								{
									$emaildb="email";
									updatesql($emaildb,$email,$id);
								}
								if($Contact!=$contact_db)
								{
									$contactdb="contact";
									updatesql($contactdb,$Contact,$id);
								}
								if($blk!=$BLK_db)
								{
									$blkdb="email";
									updatesql($blkdb,$blk,$id);
								}
								if($unit1!=$unit1_db)
								{
									$unit1db="unit1";
									updatesql($blkdb,$unit1,$id);
								}
								if($unit2!=$unit2_db)
								{
									$unit2db="unit2";
									updatesql($unit2db,$unit2,$id);
								}
								if($lane!=$lane_db)
								{
									$lanedb="lane";
									updatesql($lanedb,$lane,$id);
								}
								if($PC!=$PC_db)
								{
									$pcdb="postalCode";
									updatesql($lanedb,$lane,$id);
								}
								if($pass!=$pass_db)
								{
									$passdb="password";
									updatesql($passdb,$pass,$id);
								}
								
								
								
								
								
							}
}
}


function updatesql($db_name,$name,$ids)
{
global $mainErr;
include('Database.php');
$sql = "UPDATE registration_db SET $db_name='$name' WHERE id=$ids";

if (mysqli_query($dbhandle, $sql)) {
    $mainErr= "Record updated successfully";
} else {
   $mainErr="Error updating record: " . mysqli_error($dbhandle);
}

}
function deletesql($ids)
{
global $mainErr;
include('Database.php');
$sql = "DELETE FROM registration_db WHERE id=$ids";

if (mysqli_query($dbhandle, $sql)) {
   header ('Location: Register.php');
} else {
    $mainErr="Error deleting record: " . mysqli_error($dbhandle);
}
}
function valid_pass($passing) {
$dummy=array();
    if (!preg_match_all('$\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$', $passing,$dummy))
	{
	global $PassErr;
	global $valid;
	$PassErr = "Invalid Password";
	$valid=$valid+1;
	}
	}


?>


<html>
<head>

<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">

<title> Profile </title>

</head>



<div id="form-wrap">

<form>
<fieldset>
<h4>Welcome: <?php echo $Fname_db; ?> </h4>
 
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
width:60px;
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
background-color: #d6cfcf;
  display: inline-block;
  border: 1px solid #2b0606;
  height: 30px;
  margin:20px 0 0 20px;
  padding: 5px 10px;
  display:inline-block;
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
</style>
</form>
</head>
<body>
<fieldset>
<hr>
 <legend>Your Personal Details</legend>
 
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<font size="2" color="red"><?php echo $mainErr;?></font>
	<label class="labelone" for="name">Username:<font size="2" color="red">*<?php echo $UnameErr;?></font></label>
	
	<input class="err" name="Username" value="<?php echo $user_db; ?>" placeholder="<?php echo $user_db; ?>"/>
	
	
	
	<label for="Fname"> First Name:<font size="2" color="red">*<?php echo $FnameErr;?></font></label>
	<input class="err" name="Fname" value="<?php echo $Fname_db; ?>" placeholder="<?php echo $Fname_db; ?>"/>
	
	<label for="Lname">  Last Name:<font size="2" color="red">*<?php echo $LnameErr;?></font></label>
	<input class="err" name="Lname" value="<?php echo $Lname_db; ?>" placeholder="<?php echo $Lname_db; ?>"/>
	
	<label for="Email"> Email:<font size="2" color="red">*<?php echo $emailErr;?></font></label>
	<input class="err" name="Email" value="<?php echo $email_db; ?>" placeholder="<?php echo $email_db; ?>"/>
	
	<label for="contact">Contact:<font size="2" color="red">*<?php echo $contactErr;?></font></label>
	<input class="err" name="Contact" value="<?php echo $contact_db; ?>" placeholder="<?php echo $contact_db; ?>" />
	<hr>
	 <legend>Your Address</legend>
	 <hr>
	<table>
	 <tr>
	<td><label for="address">Block No.<font size="2" color="red">*<?php echo $BLKErr;?></font></label> </td>
	<td><input  class="er" name="BLK" value="<?php echo $BLK_db; ?>"placeholder="<?php echo $BLK_db; ?>"/> </td>
	
	<td>
	<label for="address">Unit No.<font size="2" color="red">*<?php echo $unit1Err;?></font><font size="2" color="red"><?php echo $unit2Err;?></font></label></td>
	<td>#<input  class="er" name="unit1" value="<?php echo $unit1_db; ?>" placeholder=" <?php echo $unit1_db; ?>"/></td>
		<td>-<input  class="er" name="unit2" value="<?php echo $unit2_db; ?>"placeholder="<?php echo $unit2_db; ?>"/></td>

	</tr>
	</table>
	
	<label for="address">Lane<font size="2" color="red">*<?php echo $LaneErr;?></font> </label>
	<input  class="err" name="Lane" value="<?php echo $lane_db; ?>"placeholder=" <?php echo $lane_db; ?>"/>
	
	<label for="address">Postal Code:<font size="2" color="red">*<?php echo $PCErr;?></font> </label>
	<input class="err" name="PC" value="<?php echo $PC_db; ?>"placeholder=" <?php echo $PC_db; ?>"/>
	
	<label for="city">City:<font size="2" color="red">*<?php echo $cityErr;?></font></label>
	<input class="err" name="City" value="<?php echo $city_db; ?>" placeholder="<?php echo $city_db; ?>"/>
	
	<label for="country">Country:</label>
	<input class="err" name="Country" placeholder="<?php echo $country_db; ?>">

        <label for="country"><a title="This I'd can be used to check order history @ http://www.electronic-palace.com/traxkorder.php
    " class="tooltip">Refrence_ID:</a></label>
	<input class="err" name="Reference" value="<?php echo $ref_id; ?>">
               
	<hr>
	 <legend>Your Password</legend>
	 <hr>
	<label for="password" ><a title="The Password Should               
	-at least length 8
    -at least one lowercase letter
    -at least one uppercase letter
    -at least one number
    " class="tooltip">Password:</a><font size="2" color="red">*<?php echo $PassErr;?></font></label>
	<input  class="err" type="password" name="Password" value="<?php echo $pass_db; ?>" placeholder="<?php echo $pass_db; ?>" />
	
<fieldset>
	<input class="btn"  type="submit" value= " Update"/>	 </form>
	
	<form action="payment.php" method="">
	<input class="btn"  type="submit" value= " Payment"/>	 </form>
	<form action="logout.php" method="POST">
	<input class="btn"  type="submit" value= " Logout"/>	 </form>
	<input class="btn" onclick="goBack()" type="goback" value= " &nbsp &nbsp &nbsp; Go Back"/>		
	<script>
	function goBack() {
    window.history.back()
	}
	</script>
	</fieldset>

	
	


	</body>
</form>
</body>

</html>
