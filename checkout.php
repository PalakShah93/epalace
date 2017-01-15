
<?php
session_start();
$total=$_SESSION['total'];
?>
<!DOCTYPE html>


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Checkout Form</title>
  <link rel="stylesheet" href="process_style.css">
</head>
<body>
  <form class="checkout">
    <div class="checkout-header">
      <h1 class="checkout-title">
        Checkout
        <span class="checkout-price">$<?php echo $total; ?></span>
      </h1>
    </div>
    <p>
      <input type="text" class="checkout-input checkout-name" placeholder="Your name" autofocus>
      <input type="text" class="checkout-input checkout-exp" placeholder="MM">
      <input type="text" class="checkout-input checkout-exp" placeholder="YY">
    </p>
    <p>
      <input type="text" class="checkout-input checkout-card" placeholder="4111 1111 1111 1111">
      <input type="text" class="checkout-input checkout-cvc" placeholder="CVC">
    </p>
    <p>
      <input type="submit" value="Purchase" class="checkout-btn">
    </p>
  </form>

  
</body>
</html>
