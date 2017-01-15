<?php
session_start();
include_once("config.php");

//empty cart by distroying current session
if(isset($_GET["emptycart"]) && $_GET["emptycart"]==1)
{
	$return_url = base64_decode($_GET["return_url"]); //return url
	session_destroy();
	header('Location:'.$return_url);
}

//add item in shopping cart
if(isset($_POST["type"]) && $_POST["type"]=='add')
{
	$product_code 	= filter_var($_POST["product_code"], FILTER_SANITIZE_STRING); //product code
	$product_qty 	= filter_var($_POST["product_qty"], FILTER_SANITIZE_NUMBER_INT); //product code
	$return_url 	= base64_decode($_POST["return_url"]); //return url
	$product_callfeatures= filter_var($_POST["pro4duct_callfeatures"], FILTER_SANITIZE_STRING);
	
	//limit quantity for single product
	

	//MySqli query - get details of item from db using product code
	$results = $mysqli->query("SELECT modelno,price FROM master_product WHERE id='$product_code' LIMIT 1");
	$obj = $results->fetch_object();
	
	
	
	if ($results) { //we have the product info 
		
		//prepare array for the session variable
		$new_product = array(array('name'=>$obj->modelno, 'code'=>$product_code, 'qty'=>$product_qty, 'price'=>$obj->price));
		
		if(isset($_SESSION["products"])) //if we have the session
		{
			$found = false; //set found item to false
			
			foreach ($_SESSION["products"] as $cart_itm) //loop through session array
			{
				if($cart_itm["code"] == $product_code){ //the item exist in array
					$current = $cart_itm["qty"];
					$product_qty = $current + 1;
					$product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$product_qty, 'price'=>$cart_itm["price"]);
					$found = true;
				}else{
                    // $_SESSION['V_amt']=$cart_itm["price"]+$_SESSION['V_amt'];
					//item doesn't exist in the list, just retrive old info and prepare array for session var
					$product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
				}
			}
			
			if($found == false) //we didn't find item in array
			{
				//add new user item in array
                               
				$_SESSION["products"] = array_merge($product, $new_product);
			}else{
				//found user item in array list, and increased the quantity
				$_SESSION["products"] = $product;
				//die(print_r($_SESSION["products"]));
			}
			
		}else{
			//create a new session var if does not exist
			$_SESSION["products"] = $new_product;
		}

		if(!isset($_SESSION['total'])) $_SESSION['total'] = 0;
		$_SESSION['total']+=$obj->price;
		
	}

?>

<html>
	<head>
		<title>Add to Cart</title>
		<META http-equiv="refresh" content="2;URL=<?php echo $return_url; ?>">
	</head>
	<body>
		<span style="display:block">Your item added to cart</span>
		<span style="display:blocl">You will be returned to previous page in 2 seconds</span>
	</body>
</html>

<?php


	//print_r($_SESSION);
	//redirect back to original page
	//header('Location:'.$return_url);
}

//remove item from shopping cart
if(isset($_GET["removep"]) && isset($_GET["return_url"]) && isset($_SESSION["products"]))
{
	$product_code 	= $_GET["removep"]; //get the product code to remove
	$return_url 	= base64_decode($_GET["return_url"]); //get return url

	
	foreach ($_SESSION["products"] as $cart_itm) //loop through session array var
	{
		if($cart_itm["code"]!=$product_code){ //item does,t exist in the list
			$product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
		}
		
		//create a new product list for cart
		$_SESSION["products"] = $product;
	}
	
	//redirect back to original page
	header('Location:'.$return_url);
}

?>				