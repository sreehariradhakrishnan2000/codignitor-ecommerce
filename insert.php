<?php
include 'config.php';
// Retrieve data from first table
$sql = "SELECT * FROM cartdatas";
$result = mysqli_query($con, $sql);
// Insert data into second table
while($row = mysqli_fetch_assoc($result)) {
    $name = $row['name'];
    $image = $row['image'];
    $price = $row['price'];
    $quantity = $row['quantity'];
    $query = "INSERT INTO orders (name, image, price, quantity, customer_id) VALUES ('$name', '$image', '$price', '$quantity', '$last_id')";
    mysqli_query($con, $query);
}
header('location:orderplaced.php');
exit();
?>
