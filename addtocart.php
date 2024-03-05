<?php
// Connect to the database
include 'config.php';

// Check if the add to cart form is submitted
if (isset($_POST['submit'])) {
    // Get the product information from the form
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $price = $_POST['price'];

    // Insert the product information into the cart items table
    $sql = "INSERT INTO `cartitems` (name, description, image, price) VALUES ('$name', '$description', '$image', '$price')";
    $result = mysqli_query($con, $sql);
    if ($result) { 
        // If the query was successful, redirect to the cart page
        header('location:cart.php');
    } else {
        // If the query failed, display an error message
        die(mysqli_error($con));
    }
}
?>
