<?php
session_start();
?>
<?php
include ('config.php');
?>
<html>
<style>
.borderit img{
border: 1px solid #ccc;
height:170;
width:170;
}
.borderit:hover img{
border: 2px solid orange;
}
.borderit:hover{
color: blue; 
}

</style>
<body>
<form method="post" action="View_cart.php">
 <button class="add_to_cart">View Cart: </button>
  
</form>

<?php
	$result = mysqli_query($mysqli,"SELECT * FROM category_phones");
	echo '<table border="0" style="width:100%">';
	$i=0;
			$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

			while($rows = mysqli_fetch_array($result))
			{						
					$source=$name1=$price=""; 
					$lengths=count($rows);						
					$counter=0;
							if($i%5==0)
							{
								echo "<tr>";
								$counter=1;
							}
							$source=$source=$rows{'product_callfeatures'};
							$name1=$name1=$rows{'Model'};
							$price=$price=$rows{'price'};
							$id =$rows{'category_id'};	
echo '<form method="post" action="cart_update.php">';
  
  echo '<td> <div class="borderit"><img src="/'.$rows{'product_callfeatures'}.'" height="50" weight="50">';
echo '<h3>'.$rows{'Model'}.'</h3>';
echo '<h3>'.$rows{'price'}.'</h3>';
echo '<button class="add_to_cart">Add To Cart</button>';
	echo ' <input type="hidden" name="product_qty" value="1" size="3" />';
  echo '<input type="hidden" name="product_code" value="'.$rows{'category_id'}.'" />';
  echo '<input type="hidden" name="type" value="add" />';
  echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
  echo '<input type="hidden" name="product_price" value="'.$rows{'price'}.'" />';
  echo '<input type="hidden" name="pro4duct_callfeatures" value="'.$rows{'product_callfeatures'}.'" />';
  echo '<input type="hidden" name="src" value="'.$rows{'product_callfeatures'}.'" />';		
echo '</form>'; 
echo '</td>';
echo '</div>'; 
  ?>
		
	
  
 <?php
if($counter<4)
						{
							$counter++;
						}
						else
						{
						echo "";
						}    
  $i++;
						}
					
	
	?> 
	
	
    
	
  </body>
</table>
    
  </html>