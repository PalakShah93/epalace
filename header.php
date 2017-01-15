<?php
	include('Database.php');
	session_start();

	$_SESSION['total'] = isset($_SESSION['total']) ? $_SESSION['total'] : 0;
?>

<html>
	<head>
		<script src="livesearchjs.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="css/home.css" type="text/css">
		<title>E-Palace :: <?php echo $page_title; ?></title>

		<!--Start of Zopim Live Chat Script-->
		<script type="text/javascript">
		window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
		d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
		_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
		$.src='//v2.zopim.com/?2dq4OjmP7FA9tWImKkAd9pNwmV3IlfRg';z.t=+new Date;$.
		type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
		</script>
		<!--End of Zopim Live Chat Script-->
		
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-57884944-1', 'auto');
			ga('send', 'pageview');
		</script>
	</head>
	
	<body>
		<div id="form-wrap">
			<div class="topwrap">
				<div id="livesearch"></div>
				<h5 align="center">
				&nbsp &nbsp &nbsp;<a href="traxkorder.php" style="text-decoration: none">Tracker</a>&nbsp; |
				 &nbsp &nbsp;<a href="sellproducts.php" style="text-decoration: none">Sell On Electronic Palace</a> |
				&nbsp &nbsp &nbsp;<a href="deals_of_the_day.php" style="text-decoration: none">Deals of the Day</a> |
				&nbsp &nbsp &nbsp;<a href="Register.php" style="text-decoration: none">Register</a> 
				&nbsp &nbsp;|  &nbsp &nbsp; <a href="sign.php" style="text-decoration: none">Account</a> </h5>
				<div id="eplacelogo"><a href="index.php"><img src="image/logo.jpg" /></a></div>
				<form id="tfnewsearch" action="search_P.php" method="POST">
					<input type="text" onkeyup="showResult(this.value)" onblur="hideResult();" onfocus="showResult(this.value)" class="tftextinput" name="Search" size="40" maxlength="120">
					<input type="submit" value="Search" class="tfbutton">
				</form>
				<form id="viewcartform" method="post" action="view_cart.php">
					<input type="submit"  value="View Cart S$ <?php echo number_format($_SESSION['total'], 2, '.', ','); ?>" class="tffbutton">
				</form>
			</div> <!-- wrap close -->
		</div> <!-- form close -->
		<div id="form-wrapone">
			<form>
				<div id="header">
					<ul id="nav">
						<li class="home"><a href="phone.php">Phones</a></li>
						<li class="tutorials"><a href="laptop.php">Laptop</a></li>
						<li class="home"><a href="camera.php">Camera</a></li>
						<li class="news"><a href="accessories.php">Accessories</a>
							<ul>
								<li><a href="accessories.php">Cases</a></li>
								<li><a href="harddrive.php">Hard Drives</a></li>
							</ul>
						</li>
						<li class="contact"><a href="ipad.php">Ipads</a></li>
						<li class="contact"><a href="tablet.php">Tablets</a></li>
						<li class="contact"><a href="television.php">Television</a></li>
						<li class="contact"><a href="desktop.php">Desktops</a></li>
						<li class="contact"><a href="software.php">Softwares</a></li>
					</ul><!-- nav --> 
				</div><!-- header -->
				<?php if($page_title == "Index") echo '<IMG  class="displayed" src="image/output.gif"/>'; ?>
			</form>
		</div>