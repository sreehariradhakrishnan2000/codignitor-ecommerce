<?php
include 'config.php';
if (isset($_POST['checkout'])) {
  // Retrieve the form data
  $product_name = $_POST['product_name'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];

  // Calculate the total cost
  $total_cost = $quantity * $price;

  // Display the results
  echo "Product: " . $product_name . "<br>";
  echo "Quantity: " . $quantity . "<br>";
  echo "Price: $" . $price . "<br>";
  echo "Total Cost: $" . $total_cost . "<br>";
}
?>

<!-- Checkout form -->
<form action="" method="post">
  <div>
    <label for="product_name">Product Name:</label>
    <input type="text" id="product_name" name="product_name">
  </div>
  <div>
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity">
  </div>
  <div>
    <label for="price">Price:</label>
    <input type="number" id="price" name="price">
  </div>
  <input type="submit" name="checkout" value="Checkout">
</form>
