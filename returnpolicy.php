<?php

$name= $email= $contact= $country= $cat= $brand= $productname= $color=$price="";
if ( !empty($_POST)){

$name =$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$country=$_POST['country'];
$cat=$_POST['cat'];
$brand=$_POST['brand'];
$productname=$_POST['productname'];
$color=$_POST['color'];
$price=$_POST['price'];

}

?>
<style type="text/css">

html{

background-color:#ffffff;

}

#form-wrap{

width:800px;
border: 5px solid #ccc;
background-color:#ffffff;
margin: 50px auto;
padding: 30 px 0;

}

form{
width: 600px;
margin:10 auto;
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
height: 35px;
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
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #ebede1;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th	{
    background-color: black;
    color: white;
}
</style>

<head>

<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">

<title> Return Policy </title>

</head>



<div id="form-wrap">
<form>
<fieldset>
<h4>&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;<font size="5" color="bfb1b1">Return Policy</font></h4>
<img src="image/ribbon.png" width="520" height="70" align="center">

<fieldset>
<hr>
 <img src="image/returnproduct.png" width="520" align="center">

<p>Not Satisfied with the product received? You can change within 21 Days</p> <br>
<br>

<body>

<table id="t01">
 <th>Type Of Product</th>
 <th>Issues</th>
 <th>Policy</th>
  <tr>
    <td>All</td>
    <td>physical Damage </td>		
    <td>Exchange/Refund as per your request</td>
  </tr>
  <tr>
    <td>All</td>
    <td>Wrong Product Sent </td>		
    <td>Exchange/Refund as per your request</td>
  </tr>
  <tr>
    <td>All</td>
    <td>Diiferent then the displayed product at Electronic Palace </td>		
    <td>Exchange/Refund as per your request</td>
  </tr>
  <tr>
    <td>All</td>
    <td>Unhappy with product </td>		
    <td>Exchange the product</td>
  </tr>
  <tr>
    <td>All</td>
    <td>Defective Product </td>		
    <td>Exchange/Refund as per your request</td>
  </tr>
  
</table>
<br>
&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp; 
<a href="index.php">Return To Home</a>
</body>

</html>