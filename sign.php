<?php
SESSION_START();
global $id;

if(isset($_SESSION['id']))
{	
	header('location: profile.php');
}

global $err;
$err="*";
$UnameErr= $PnameErr = "";
global $valid;
global $mainErr;
$mainErr = "";
$user = $pass ="";
$valid=0;

if ( !empty($_POST))
{
$user =$_POST['Username'];
$pass =$_POST['Password'];

							if (empty($_POST["Username"])) 
							{
									$UnameErr= "Username is required";
									$valid=$valid+1;
							} 
							else if(empty($_POST["Password"]))
							{
									$PnameErr= "Password is required";
									$valid=$valid+1;
							}
							else if(isset($_POST["Username"]))
							{
								
								passwordchck($pass,$user);
							}
if($valid<1)
{

	header ('Location: profile.php');
}



}

function usernameck($usernm)
{
				include ('Database.php');
				$result = mysqli_query($dbhandle,"SELECT * FROM registration_db WHERE  user='$usernm'");
					if (mysqli_num_rows($result) == 0)
					{
						global $valid;
						global $UnameErr;
						$UnameErr= "Invalid Username";
						$valid=$valid+1;
					
					}
					else{}
}
//echo "$pass";
function passwordchck($ppass,$upass)
{	
global $mainErr;
global $err;
global $id;
global $valid;
include('Database.php');
				$result = mysqli_query($dbhandle,"SELECT * FROM registration_db 
	where user='$upass' && password='$ppass'" );
	
$i=0;
	while($rows = mysqli_fetch_array($result))
	{	
		$id=$rows{'id'};
		
		if(strcmp($rows['user'],$upass)==0 and strcmp($rows['password'],$ppass)==0 )
		{
			$i=10;
		}
		else
		{
	
			$i=20;
			$valid++;
		}
	
	}

if ($i==10)
{
SESSION_START();
$_SESSION['id']=$id;
//header ("Location: profile.php");
}
else
{
//die("LOGIN ERROR");
$mainErr= "Login Unsuccessful";
$mainErr = $err.$mainErr;
$valid++;
}

}
		




?>
<br>
<br>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">

<title> Signin </title>
</head>


<head>
<div id="form-wrap">

<form>
<fieldset>
<h4>Sign In</h4>
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

	<form action="sign.php" method="post">
	<font size="2" color="red"><?php echo $mainErr;?></font>
	<label class"labelone" for="name"> Username:<font size="2" color="red"><?php echo $err.$UnameErr;?></font></label>
	<input name="Username" placeholder=" Enter your User Name"/>
	
	<label for="password" > Password:<font size="2" color="red"><?php echo $err.$PnameErr;?></font></label>
	<input  type="Password" name="Password" placeholder=" Enter your Password"/>
	
	<a href="Recovery/Problems.php" style="text-decoration: none">&nbsp &nbsp &nbsp; Need Help?</a>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;	<a href="Register.php" style="text-decoration: none">&nbsp &nbsp &nbsp; Create an Account</a>
	
	<fieldset>
	<input class="btn"  type="submit" value= " Submit"/>	 </form>
	
	
		<input class="btn" onclick="goBack()" type="goback" value= " &nbsp &nbsp &nbsp; Go Back"/>		
	<script>
	function goBack() {
    window.history.back()
	}
	</script>
	</fieldset>
</body>

</body>

</html>
