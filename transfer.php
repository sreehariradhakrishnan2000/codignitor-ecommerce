<?php
include 'config.php';


$query = "SELECT name, image, price, quantity FROM products";
$result = $mysqli->query($query);

while($row = $result->fetch_assoc()) {
    $name = $row["name"];
    $image = $row["image"];
    $price = $row["price"];
    $quantity = $row["quantity"];

    $insert_query = "INSERT INTO orders (name, image, price, quantity) VALUES ('$name', '$image', '$price', '$quantity')";
    $mysqli->query($insert_query);
}

$mysqli->close();

?>