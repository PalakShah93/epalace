<?PHP

?>


<?php

global $valid;
global $EErr;
global $err;
$err="*";
$EErr="";
$valid="";
$emails="";
$check=0;
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$email =$_POST['Emails'];
		
			if (empty($_POST["Emails"])) 
							{
									$EErr= "Email is required";
									$valid="error";
									$EErr=$err.$EErr;
							} 
			else if (isset($_POST["Emails"])) {
			emailchck($email);
			}
			
}




	




function emailchck($emails)
{	
global $valid;
global $EErr;
global $err;
global $id;
include('Database.php');
				$result = mysqli_query($dbhandle,"SELECT * FROM registration_db 
	where email='$emails'" );
	
	
$i=0;
	while($rows = mysqli_fetch_array($result))
	{
		
	  
		if(strcmp($rows['email'],$emails)==0 )
		{
			$i=10;
			$id=$rows{'id'};
				
		}
		else
		{
	
			$i=20;
		}
	
	}
	//print_r($_Session);

if ($i==10)
{
SESSION_START();
$_SESSION['id']=$id;
header ('location: NeedHelp.php');
}
else
{

$EErr= "Invalid E-mail I'd";
$EErr = $err.$EErr;
$valid="error";
}

}








?>



<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title> Verification </title>
</head>


<head>
	<div id="form-wrap">
	<form>
		<fieldset>
			<h4>Verification</h4>

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
		<label class"labelone" for="name"> Email:<font size="2" color="red"><?php echo $EErr;?></font></label>
		<input name="Emails" placeholder=" Enter your Valid E-mail"/>
		<input class="btn" type="submit" value="Verify"/>
		</form>
</body>

</html>