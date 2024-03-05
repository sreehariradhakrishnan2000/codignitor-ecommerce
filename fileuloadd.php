<?php 

include "config.php";

  if(isset($_POST['submit'])) {

    $name = $_POST['name'];

    $description = $_POST['description'];

    $date = $_POST['date'];

    $category = $_POST['category'];

    $image = $_POST['image'];

    $price = $_POST['price'];  




    $sql = "INSERT INTO `products`(`name`, `description`, `date`, `image`,`category`, `price`) VALUES ('$name', '$description', '$date', '$image','$category', '$price')";

    $result = $con->query($sql);

    if ($result == TRUE) {

      //echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $con->error;

    } 

    $con->close(); 

  }

?>

<html>
  <head>
    <title>file upload
    </title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
  <center>

<h2></h2>

<form action="" method="POST">

  <fieldset>

    <legend><b> UPLOAD THE DATA </b></legend>


    <div class="container mt-3">
  <form method="POST">
  <div class="form-group container mt-3">
  <label for="validationDefault03" class="form-label">NAME</label>
  <input type="text" class="form-control" id="validationDefault03" required
    placeholder="Enter Name of product" name="name">
</div>

<div class="container mt-3">
  <form method="POST">
  <div class="form-group container mt-3">
  <label for="validationDefault03" class="form-label">DESCRIPTION</label>
  <input type="text" class="form-control" id="validationDefault03" required
    placeholder="Enter the details" name="description"> 
</div>


TIME : <input id="date" name="date">

<script type="text/javascript">
  document.getElementById('date').value = Date();
</script>
  <br><br>

<div>
IMAGE<br>

<input type="file" id="myFile" name="image">

<br>
</div>
<br>


<div>

<!-- <label for="category">Choose Category:</label> -->

<!-- <select name="category" id="category"> -->
  <!-- <option value="outfits">outfits</option>
  <option value="toys">toys</option>
  <option value="cosmetics">cosmetics</option>
  <option value="others">others</option> -->

<?php

//   // Retrieve data
// $sql = "SELECT id, name FROM categories";
// $result = mysqli_query($con, $sql);

// // Create dropdown options
// while ($row = mysqli_fetch_assoc($result)) {
//   echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
// }





// Retrieve data from the database
$sql = "SELECT * FROM categories";
$result = mysqli_query($con, $sql);

// Create a dropdown with the retrieved data
echo "<select name='category'>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='" . $row['id'] . "'>" . $row['category'] . "</option>";
}
echo "</select>";



?>



</select>
  
     

</select><br><br> 
</div>



<div class="container mt-3">
  <form method="POST">
  <div class="form-group container mt-3">
  <label for="validationDefault03" class="form-label">PRICE</label>
  <input type="text" class="form-control" id="validationDefault03" required
    placeholder="Enter the price" name="price">
</div>




<div class="form-group container mt-3">
  <button type="submit" class="btn btn-primary"name="submit">Submit</button>
</div>





  </fieldset>

</form>
</center>

 </body>
 </html>