<?php

include ('Database.php');

$UnameErr= $emailErr = $G1Err = $G1= $G2= $G3= $G4 =$G5 = $G6 = $G7 =  $G8 =  $G9=$G10=$name=$comment=$email= "";
$valid=0;


if (!empty ($_POST)) 
 {
 $G1=$_POST['group1'];
 $G2=$_POST['group2'];
 $G3=$_POST['group3'];
 $G4=$_POST['group4'];
 $G5=$_POST['group5'];
 $G6=$_POST['group6'];
 $G7=$_POST['group7'];
 $G8=$_POST['group8'];
 $G9=$_POST['group9'];
 $G10=$_POST['group10'];
 $name=$_POST['name'];
 $email=$_POST['email'];
 $comment=$_POST['comment'];
 
 
 
 
					if(empty($_POST['name']))
					{
						$UnameErr="Name Field Required";
						$valid=$valid+1;
					}
					else if(empty($_POST['email']))
					{
						$emailErr="Email Field IS empty";
						$valid=$valid+1;
					}
					else if(empty($G1))
					{
						$G1Err="Email Field IS empty";
						$valid=$valid+1;
					
					}
					else if(!preg_match("/^[a-zA-Z ]*$/",$name)) 
					{
						$UnameErr= "Only letters and white space allowed"; 
						$valid=$valid+1;
					}
					else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
					{
						$emailErr = "Invalid email format"; 
						$valid=$valid+1;
					}
					if($valid<1)
					{
					add();
					}
 }
 function add()
 {
	global $UnameErr,$emailErr,$G1Err,$G1,$G2,$G3,$G4,$G5,$G6,$G7,$G8,$G9,$G10,$name,$comment,$email;

	include ('Database.php');
				$query = "INSERT INTO feedback (name, email, q1, q2, q3,q5, q6, q7, q8, q9,comment,q_10,q_4) VALUES('$name','$email','$G1','$G2','$G3','$G5','$G6','$G7','$G8','$G9','$comment','$G10','$G4')";
				$result = mysqli_query($dbhandle,$query);
				mysqli_close($dbhandle);
				}
 
?>


<html>
<head>

<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">

<title> Feedback Page</title>




<div id="form-wrap">

<form>
<fieldset>
<h4>Feedback Form</h4>
<hr width="50%">
<style type="text/css">

html{

background-color:#ffffff;

}

#form-wrap{

width:800px;
border: 5px solid #ccc;
background-color:#ffffff;
margin: 50px auto;
padding: 10 px 0;

}

form{
width: 800px;
margin:0px;
}

label{
display:block;
margin:5px 0 5px 40px;
font:18px, sans-serif;
color:#888;

}
input{
width:40px;
margin:0 0 0 0;
}

textarea{
width:700px;
margin:0 0 0 20px;
}

fieldset{
border:none;
background-color :#f6f6f6f6;
padding : 0 0 20px 0;
}

.labelone{
margin-top:10px;
text-align:center;

}

.btn{
width:125px;
background-color: #7b8eed;
  
  border: 1px solid #2b0606;
  padding: 5px;
 
}

form h4{

margin:50px 0 0 300px;
font:24px sans-serif;
color: #999;
font-weight:bold;
}
table {
    width:100%;
}
table, th, td {
    border: 0px solid black;
    border-collapse: collapse;
	
	
}
th, td {
    padding: 3px;
    text-align: center;
	align:left;
}

td {
text-align:center;
}
.err{
width:480px;
height: 40px;
margin:0 0 10px 20px;
}
</style>
</form>

<fieldset>
<body>
<div class="form">


	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
	<label class"labelone" for="name"> <font size="2" color="red">*<?php echo $UnameErr;?></font>Name:</label>
	
	<input class="err" name="name" placeholder=" Enter your Name"/>
	
	
	<label for="Email"> <font size="2" color="red">*<?php echo $emailErr;?></font> Email:</label>
	<input  class="err" name="email" placeholder=" Enter your Email Address"/>
		<br>

		<br>
		 <hr>
	<p align="center"> <strong>Please Help us To improve with help of Your Feedback </strong></p>

  <table>
  <tr>
	
    <th>Questions <?php echo $G1Err;?></th>
    <th><image src="image/ex-happy.png"></th>
	<th><image src="image/glad.png"></th>	
	<th><image src="image/neutral.png"></th>
	<th><image src="image/sad.png"></th>
	<th><image src="image/cry.png"></th>
   </th>
  </tr>
  <tr>
     <hr>
	 
    <td>How long was your wait on hold before <br> speaking with our customer service  <br>representative? <br> <br></td>		
    <td> <input type="radio" name="group1" value="5"></td>
	    <td><input type="radio" name="group1" value="4"></td>
		    <td><input type="radio" name="group1" value="3" checked></td>
			    <td><input type="radio" name="group1" value="2"></td>
				    <td><input type="radio" name="group1" value="1"></td> &nbsp;
  </tr>
  <tr>

    <td>How well did you feel our customer service <br>representative understood what you were <br>saying? <br> <br></td>		
    <td> <input type="radio" name="group2" value="5"></td>
	    <td><input type="radio" name="group2" value="4"></td>
		    <td><input type="radio" name="group2" value="3" checked></td>
			    <td><input type="radio" name="group2" value="2"></td>
				    <td><input type="radio" name="group2" value="1"></td>
  </tr>
   
  <tr>
    
    <td>How eager to help you were the customer <br> service representatives at our company? <br> <br></td>		
    <td> <input type="radio" name="group3" value="5"></td>
	    <td><input type="radio" name="group3" value="4"></td>
		    <td><input type="radio" name="group3" value="3" checked></td>
			    <td><input type="radio" name="group3" value="2"></td>
				    <td><input type="radio" name="group3" value="1"></td>
  </tr>
  
  <tr>
  
   
    <td>How clear was the information that our customer <br> service representative provided to you? <br> <br></td>		
    <td> <input type="radio" name="group4" value="5"></td>
	    <td><input type="radio" name="group4" value="4"></td>
		    <td><input type="radio" name="group4" value="3" checked></td>
			    <td><input type="radio" name="group4" value="2"></td>
				    <td><input type="radio" name="group4" value="1"></td>
					
  </tr>
  <tr>
    
    <td>Please tell us how easy it is to find <br> information on the site. <br> <br></td>		
    <td> <input type="radio" name="group5" value="5"></td>
	    <td><input type="radio" name="group5" value="4"></td>
		    <td><input type="radio" name="group5" value="3" checked></td>
			    <td><input type="radio" name="group5" value="2"></td>
				    <td><input type="radio" name="group5" value="1"></td></tr>
  <tr>
   
    <td> How likely are you to recommend this store <br>to others? What is your overall  <br>impression of the site <br> <br></td>		
    <td><input type="radio" name="group6" value="5"></td>
	    <td><input type="radio" name="group6" value="4"></td>
		    <td><input type="radio" name="group6" value="3" checked></td>
			    <td><input type="radio" name="group6" value="2"></td>
				    <td><input type="radio" name="group6" value="1"></td>
  </tr>
  <tr>
    
    <td>Compared to similar stores, how fair are this  <br> store's prices <br> <br></td>		
    <td><input type="radio" name="group7" value="5"></td>
	    <td><input type="radio" name="group7" value="4"></td>
		    <td><input type="radio" name="group7" value="3" checked></td>
			    <td><input type="radio" name="group7" value="2"></td>
				    <td><input type="radio" name="group7" value="1"></td>
  </tr>
  <tr>
    
    <td>Compared to similar stores, how broad is the <br> selection available at this store?<br> <br></td>		
    <td><input type="radio" name="group8" value="5"></td>
	    <td><input type="radio" name="group8" value="4"></td>
		    <td><input type="radio" name="group8" value="3" checked></td>
			    <td><input type="radio" name="group8" value="2"></td>
				    <td><input type="radio" name="group8" value="1"></td>
  </tr>
  <tr>
    
    <td>Please tell us how easy it is to find <br> information on the site. <br> <br></td>		
    <td><input type="radio" name="group9" value="5"></td>
	    <td><input type="radio" name="group9" value="4"></td>
		    <td><input type="radio" name="group9" value="3" checked></td>
			    <td><input type="radio" name="group9" value="2"></td>    
				   <td><input type="radio" name="group9" value="1"></td>
				
  </tr>
  <tr>
    
    <td>What is your overall impression of the site<br> <br></td>		
    <td><input type="radio" name="group10" value="5"></td>
	    <td><input type="radio" name="group10" value="4"></td>
		    <td><input type="radio" name="group10" value="3" checked></td>
			    <td><input type="radio" name="group10" value="2"></td>
				    <td><input type="radio" name="group10" value="1"></td>
  </tr>
</table>

<br>
<br>
<br>
	<label for = "comments"> Please add any comments you have for improving the website. We welcome suggestions on specific areas for improvements, features you would like to see added to the site, and examples of what you consider good <br> websites.:</label>
	<textarea name="comment"></textarea>
	</fieldset>
	
	<fieldset>
	<input class="btn"  onclick="alert('Thank you for your feedback!')" type="submit" value="Submit"/>
	
		<input class="btn" type="reset" value="Reset form"/>
<input class="btn" onclick="goBack()" type="goback" value= " &nbsp &nbsp &nbsp; Go Back"/>
				
				
	<script>
	function goBack() {
    window.history.back()
	}
	</script>
	</fieldset>
</form>
</body>
</html>
