<?php

include 'config.php';
$id=$_GET['updateid'];
//echo $id;
$sql="select * from `products` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
//print_r($result);
$name=$row['name'];
$category=$row['category'];
$image=$row['image'];
$price=$row['price'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $category=$_POST['category'];
    $image=$_POST['image'];
    $price=$_POST['price'];

    $sql="update `products` set id=$id, name='$name',category= '$category' ,image='$image',price='$price' where id='$id' ";
    $result=mysqli_query($con,$sql);
    if($result){  
        echo "Data updated succesfully";
        // header('location:indexproducts.php');
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
    <input type="text" class="form-control" name="name" autocomplete="off" value=<?php echo $name; ?>>
  </div>
  <div class="mb-3">
    <label class="form-label">category</label>
    <input type="text" class="form-control" name="category" autocomplete="off" placeholder="" value=<?php echo $category; ?>>
  </div>
  <div class="mb-3">
    <label class="form-label">image</label>
    <input type="text" class="form-control" name="image" autocomplete="off" placeholder="" value=<?php echo $image; ?>>
  </div>
  <div class="mb-3">
    <label class="form-label">price</label>
    <input type="text" class="form-control" name="price" autocomplete="off" placeholder="" value=<?php echo $price; ?>>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
    </div>

  </body>
</html>
