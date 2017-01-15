<?php
SESSION_START();
?>

<?php
if(isset($_SESSION['id']))
{	
	header('location: payment.php');
}
else
{
	header('location: sign.php');
}
?>