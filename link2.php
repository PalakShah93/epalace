<?php
session_start();
?>
<?php
$payment=$total=$id=$refrence_id=$user=$user_db=$email=$email_db=$subject=$body=$BCC=$pay_id=$amount_due=$amount_paid="";
$payment=$_SESSION['card'];
$total=$_SESSION['total'];
$date=$_SESSION['date_purchase'];
$id=$_SESSION['id'];
$refrence_id="CESUFQL".$id."4372";
$amount_due=$_SESSION['amount_due'];
$amount_paid=$_SESSION['amount_paid'];
include('Database.php');
include ('tute/t1.php');
echo $refrence_id;
$sql = "UPDATE payment SET ref_id='$refrence_id' WHERE amount='$total'";
echo $total."something";

if (mysqli_query($dbhandle, $sql)) {
$results = mysqli_query($dbhandle,"SELECT payment_id FROM payment 
						WHERE id=$id AND amount=$total");
						while($rows = mysqli_fetch_array($results))
						{
								echo "<br>";
								$pay_id=$rows{'payment_id'};
								echo $pay_id;
								
								$invoice_no="QLAR".$pay_id."29586";
								$_SESSION['pay_id']=$pay_id;
								$_SESSION['invoice_no']=$invoice_no;
								$sqlq = "UPDATE payment SET invoice_no='$invoice_no' WHERE payment_id='$pay_id' AND DATE_of_purchase='$date';";
								if(mysqli_query($dbhandle, $sqlq)){} else {echo "Error updating record: " . mysqli_error($dbhandle);}
						}
$result = mysqli_query($dbhandle,"SELECT * FROM registration_db 
						where id='$id'");

	while($rows = mysqli_fetch_array($result))
	{
	$user_db=$rows{'user'};
	$Fname_db=$rows{'fname'};
	$Lname_db=$rows{'lname'};
	$contact_db=$rows{'contact'};
	$email_db=$rows{'email'};
	$country_db=$rows{'country'};
	}
$user=$user_db;
$email=$email_db;
$subject="Online Shopping Transaction Details";
$body=nl2br("Thank You for Ordering At E Palace \n
			 Transaction was done on  ".date("Y-m-d"). "
				
				Name: ".$Fname_db." \n
				E-Mail: ".$email_db." \n
				Contact: ".$contact_db." \n
				Amount Paid: $".$amount_paid."\n
				Amount Due*: $".$amount_due."\n
                                Invoice_ID**: ".$invoice_no."\n
                                *Invoice Id can be use to track order;\n
								**If any amount due, please pay on delivery or contact our customer service"
					
		);
		$BCC="electronicpalace2014@gmail.com";
				
				
sentmail($user,$email,$subject,$body,$BCC);

header ('Location:EditableInvoice/Invoice.php');
    
} else {
 echo "Error updating record: " . mysqli_error($dbhandle);
}




?>