<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $id = $_POST['id'];

    $name = $_POST['name'];

    $details = $_POST['details'];

    $price = $_POST['price'];

    $image = $_POST['image'];

    $sql = "INSERT INTO `all details`(`name`, `details`, `price`, `image`) VALUES ('$name','$details','$price','$image')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>

<body>

<h2>ADD Product</h2>

<form action="" method="POST">

  <fieldset>

    <legend>ADD DATA HERE</legend>

    name:<br>

    <input type="text" name="name">

    <br>

    Details:<br>

    <input type="text" name="details">

    <br>

    Price:<br>

    <input type="email" name="price">

    <br>

    Image:<br>

    <input type="password" name="image">

    <br>



    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>