<?php
session_start();
include ('Database.php');
global $user_db,$Fname_db,$pass_db,$Lname_db,$city_db,$contact_db,$email_db,$add_db,$country_db,$BLK_db,$unit1_db,$unit2_db,$lane_db,$PC_db,$mainErr,$ADD;
$user_db = $Fname_db = $pass_db = $Lname_db = $city_db = $contact_db = $email_db = $add_db = $country_db =$BLK_db=$unit1_db=$unit2_db=$lane_db=$ADD=$PC_db=$mainErr="";
$total=$id=$invoice_no=$date="";
$amount_paid=0;
$qty=0;
date_default_timezone_set('Asia/Singapore');
$date = date('m/d/Y');
$total=$_SESSION['total'];
$id=$_SESSION['id'];
$date=$_SESSION['date_purchase'];
$amount_due=$_SESSION['amount_due'];
$amount_paid=$_SESSION['amount_paid'];
$invoice_no=$_SESSION['invoice_no'];
$results = mysqli_query($dbhandle,"SELECT * FROM registration_db 
						where id='$id'");
while($rows = mysqli_fetch_array($results))
{
	$Fname_db=$rows{'fname'};
	$city_db=$rows{'city'};
	$contact_db=$rows{'contact'};
	$email_db=$rows{'email'};
	$country_db=$rows{'country'};
	$BLK_db=$rows{'BLK'};
	$unit1_db=$rows{'unit1'};
	$unit2_db=$rows{'unit2'};
	$lane_db=$rows{'lane'};
	$PC_db=$rows{'postalCode'};
	$ADD=nl2br($BLK_db.", #".$unit1_db."-".$unit2_db."\n"
				.$lane_db.", ".$country_db."(".$PC_db."\n
				Ph.No.".$contact_db." \n
				Email. ".$email_db."");
}
?>
<!DOCTYPE html >
<html>

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Editable Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body>

	<div id="page-wrap">

		<div id="header">INVOICE</div>
		
		<div id="identity">
		
            <div id="address"><?php echo $ADD; ?></div>

            <div id="logo">

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="images/logo.jpg" alt="logo" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

            <div id="customer-title"><?PHP echo $Fname_db; ?></div>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><div><?php echo $invoice_no; ?></div></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><div id="date"><?php echo $date; ?> </div></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">$<?php echo $total; ?></div></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Item</th>
		      <th>Brand</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
	<?php
	if(isset($_SESSION["products"]))
    {
			//$total = 0;
		//echo '<form method="post" action="link1.php">';
		echo '<ul>';
		$cart_items = 0;
		foreach ($_SESSION["products"] as $cart_itm)
        {
				$product_code = $cart_itm["code"];
				$results = $dbhandle->query("SELECT modelno,brand, price, imgsource FROM master_product WHERE id='$product_code' LIMIT 1");
				$obj = $results->fetch_object();
		                view($product_code,$cart_itm["qty"]);
				$qty=$cart_itm["qty"]+$qty;
				echo '<tr class="item-row">';
				echo '<td class="item-name"><div>'.$obj->modelno.'</div></td>';
				echo '<td class="description"><div>'.$obj->brand.'</div></td>';
				echo '<td><div class="cost">S$'.$obj->price.'</div></td>';
				echo '<td><div class="qty">'.$cart_itm["qty"].'</div></td>';
				echo '<td><span class="price">S$'.$obj->price*$cart_itm["qty"].'</span></td>';
				echo '</tr>';
		}
		}

		  ?>
		  
		  <tr id="hiderow">
		    <td colspan="5"><!--<a id="addrow" href="javascript:;" title="Add a row">Add a row</a>--></td>
		  </tr>
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">$<?php echo $total; ?></div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total">$<?php echo $total; ?></div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>

		      <td class="total-value"><div id="paid">$<?php echo $amount_paid; ?></div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due">$<?php echo $amount_due; ?></div></td>
		  </tr>
		
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
                  
		  <div>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</div>
		</div>
	
	</div>
	
</body>

</html>
<?php
function view($ids,$quan){
include('Database.php');
$sqls = "SELECT * FROM master_product where id='$ids'";
                        $result_v = mysqli_query($dbhandle, $sqls);
						if($result_v)
						{
						    while($rows = mysqli_fetch_array($result_v))
							{
								$view=$rows{'product_purchase'};
							}
						}
$view=$view+$quan;				
$sql = "UPDATE master_product SET product_purchase='$view' WHERE id='$ids'";
						if ($dbhandle->query($sql) === TRUE) 
						{} 
						else 
						{
							echo "Error updating record: " . $conn->error;
						}						
                           
mysqli_close($dbhandle);
}
?>



<?php
								$sqlq = "UPDATE payment SET quantity='$qty' WHERE invoice_no='$invoice_no' AND DATE_of_purchase='$date';";
								if(mysqli_query($dbhandle, $sqlq)){} else {echo "Error updating record: " . mysqli_error($dbhandle);}

session_destroy();
session_unset();
?>