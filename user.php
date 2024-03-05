<?php

include 'config.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $image=$_POST['image'];
    $price=$_POST['price'];

    $sql="insert into `cartitems` (name,description,image,price)
    values('$name','$description','$image','$price')";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data inserted succesfully";
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" autocomplete="off" placeholder="enter your name">
  </div>
  <div class="mb-3">
    <label class="form-label">Description</label>
    <input type="text" class="form-control" name="description" autocomplete="off" placeholder="enter the description">
  </div>
  <div class="mb-3">
    <label class="form-label">image</label>
    <input type="text" class="form-control" name="image" autocomplete="off" placeholder="enter image name">
  </div>
  <div class="mb-3">
    <label class="form-label">price</label>
    <input type="text" class="form-control" name="price" autocomplete="off" placeholder="enter the price">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>

  </body>
</html>
