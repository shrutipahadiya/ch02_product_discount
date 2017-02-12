
<?php


  // Code to get request data from html form
  $product_desc = $_POST['product_description'];
  $list_price = $_POST['list_price'];
  $discount_percent = $_POST['discount_percent'];

  //code to use filter_input function
  $product_description = filter_input(INPUT_POST, 'product_description');
  $list_price = filter_input(INPUT_POST, 'list_price');
  $discount_percent = filter_input(INPUT_POST, 'discount_percent');


 // calculate the discount amount and discount price
   $discount_amount = $list_price * $discount_percent * .01;
   $discount_price = $list_price - $discount;



 // Code for currency format
    $list_price = "$".number_format($list_price, 2);
    $discount_percent = $discount_percent."%";
    $discount_amount = "$".number_format($discount_amount, 2);
    $discount_price = "$".number_format($discount_price, 2);




?>
<!DOCTYPE html>
<html>
<head>
<title>Product Discount Calculator</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
 <main>
 <h1>This page is under construction</h1>
 <label>Product Description:</label>
 <span><?php echo htmlspecialchars($product_desc); ?></span><br>
 <label>List Price:</label>
 <span><?php echo htmlspecialchars($list_price); ?></span><br>
 <label>Standard Discount:</label>
 <span><?php echo htmlspecialchars($discount_percent); ?></span><br>
 <label>Discount Amount:</label>
 <span><?php echo $discount_amount; ?></span><br>
 <label>Discount Price:</label>
  <span><?php echo $discount_price; ?></span><br>
 </main>
</body>

</html>
