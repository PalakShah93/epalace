<?PHP
SESSION_START();
include('Database.php');
?>

<?php
$id=$_SESSION["id"];

if(isset($id))
{
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
			if($_POST['Problems']=='Ppassword')
			{
				header ('Location: PasswordProb.php');
				}
				else if($_POST['Problems']=='Pusername')
				{
					header ('Location: unsernameProb.php');
					}
				else
				{
					Echo "Wrong Entry";
				}
				
					
}
}
				
		

	
?>





<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">

<title> Verification </title>
</head>


<head>
<div id="form-wrap">

<form>
<fieldset>
<h4>Having trouble signing in?</h4>
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
width:10px;
height: 10px;
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
width:150px;
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
</style>
</form>

</head>


<body>


	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
	<br>
    <input type="radio" name="Problems" value="Ppassword">I dont know my password<br>
	<input type="radio" name="Problems" value="Pusername">I dont know my username<br>
	<fieldset>
	<input class="btn" type="submit" value="Continue"/>
	</form>
	</fieldset>
	



</body>
</html>
