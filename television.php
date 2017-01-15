<?php
	$page_title = "Television";
	include('header.php');
?>
<style>#form-wrapone{height: 50px !important;}
#form-wraptwo{height: 450px !important;}</style>

<div id="form-wraptwo">
<div class="topwrap">

<h2> Television </h2>
<?php
include ('Database.php');
?>
<?php
	$result = mysqli_query($dbhandle,"SELECT * FROM tv");
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	echo '<table border="0" style="table-layout: fixed; width: 1200px">';
	$i=0;
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
							$source=$source=$rows{'imgsource'};
							$name1=$name1=$rows{'modelno'};
							$price=$price=$rows{'price'};
							$id =$rows{'tv_id'};							
					?>
			
		
		<?php
	echo	'<td> <div class="borderit">';
		echo '<form method="post" action="cart_update.php" style="height: 160px">';
  echo '<a href="view_television.php?id='.$id.'"><img src="/'.$source.'"></a>';
  echo '</div>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<p>'.$name1.'</p>';
  echo '<p>'.$price.'</p>';
  echo '<button class="add_to_cart">Add To Cart</button>';
  echo '<input type="hidden" name="product_qty" value="1" size="3" />';
  echo '<input type="hidden" name="product_code" value="'.$id.'" />';
  echo '<input type="hidden" name="type" value="add" />';
  echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
  echo '<input type="hidden" name="product_price" value="'.$price.'" />';
  echo '<input type="hidden" name="pro4duct_callfeatures" value="'.$source.'" />';
  echo '<input type="hidden" name="src" value="'.$source.'" />';
  echo '</form>';?>
		
		</td> 
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
				  </table>

</div>
</div>

				  
<?php
	include('footer.php');
	?>
