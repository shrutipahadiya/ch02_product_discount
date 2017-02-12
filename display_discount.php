
<?php


  /* Code to get request data from html form
 $product_desc = $_POST['product_description'];
 $list_price = $_POST['list_price'];
 $discount_percent = $_POST['discount_percent'];*/

  //code to use filter_input function
  $product_desc = filter_input(INPUT_POST, 'product_description');
  $list_price_new = filter_input(INPUT_POST, 'list_price');
  $discount_percent = filter_input(INPUT_POST, 'discount_percent');


 //calculate the discount amount and discount price
   $discount_amount = $list_price_new * $discount_percent * .01;
   $discount_price = $list_price_new - $discount_percent;



 //Code for currency format
    $list_price_f = "$".number_format($list_price_new, 2);
    $discount_percent_f = $discount_percent."%";
    $discount_amount_f = "$".number_format($discount_amount, 2);
    $discount_price_f = "$".number_format($discount_price, 2);


  /* code for htmlspecialchars function
   $product_description_new = htmlspecialchars($product_desc);
   $list_price_new = htmlspecialchars($list_price_f);
   $discount_percent_new = htmlspecialchars($discount_percent_f);*/

?>
<!DOCTYPE html>
<html>
<head>
<title>Product Discount Calculator</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
 <main>
  <h1>Product Discount Calculator</h1>
 <label>Product Description:</label>
 <span><?php echo htmlspecialchars($product_desc);?></span><br>
 <label>List Price:</label> 
 <span><?php echo htmlspecialchars($list_price_f);?></span><br>
 <label>Standard Discount:</label> 
 <span><?php echo htmlspecialchars($discount_percent_f);?></span><br>
 <label>Discount Amount:</label> 
 <span><?php echo $discount_amount_f; ?></span><br>
 <label>Discount Price:</label> 
 <span><?php echo $discount_price_f; ?></span><br>
 </main>
</body>


</html>
