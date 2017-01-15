<?php

session_start();
include_once("config.php");
include_once("Database.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View shopping cart</title>
<link href="style/style.css" rel="stylesheet" type="text/css"></head>
<body>
<div id="products-wrapper">
 <h1>View Cart</h1>
 <div class="view-cart">
 	<?php
global $total;
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["products"]))
    {
	    $total = 0;
		echo '<form method="post" action="link1.php">';
		echo '<ul>';
		$cart_items = 0;
		foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
		   $results = $mysqli->query("SELECT modelno,brand, price, imgsource FROM master_product WHERE id='$product_code' LIMIT 1");
		   $obj = $results->fetch_object();
		   
		    echo '<li class="cart-itm">';
			echo '<td><img src="/'.$obj->imgsource.'" height="50" weight="50">';
			echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
			//echo '<span class="remove-itm"><a href="addqty.php?id='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';			
			echo '<div class="p-price">'.$currency.$obj->price.'</div>';
            echo '<div class="product-info">';
			echo '<h3>'.$obj->modelno.' (Code :'.$product_code.') Quantity: '.$cart_itm['qty'].' pcs</h3> ';
            //echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
            echo '<div>'.$obj->brand.'</div>';
			echo '</div>';
            echo '</li>';
			$prices=$obj->price;
			$subtotal = (double)($prices*$cart_itm["qty"]);
			$total = (double)($total + $subtotal);
		
			echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->modelno.'" />';
			echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
			echo '<input type="hidden" name="item_desc['.$cart_items.']" value="'.$obj->brand.'" />';
			echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["qty"].'" />';
			$cart_items ++;
			
        }
		//SESSION_START();
		$_SESSION['total']=$total;
    	echo '</ul>';
		echo '<span class="check-out-txt">';
		echo '<strong>Total : '.$currency.$total.'</strong>  '; 
		echo '<br>';
				echo '<br>';

				
		echo '<button class"add_to_cart"> Proceed</button>';
 		echo '</span>';
		echo '</form>';
		
    }else{
		echo 'Your Cart is empty';
		$_SESSION['total'] = 0;
		echo $_SESSION['total'];
	}

	
    ?>
    </div>
    <a href="/" style="margin-top: 20px; display: inline-block">Return to Home</a> |
<a href="logout.php" style="margin-top: 20px; display: inline-block">Cancel Order</a>
</div>
</body>
</html>
