<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $mobile=$_POST['mobile'];

    $sql="insert into `crud` (name,email,password,mobile)
    values('$name','$email','$password','$mobile')";
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
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="email" autocomplete="off" placeholder="">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password" autocomplete="off" placeholder="">
  </div>
  <div class="mb-3">
    <label class="form-label">mobile</label>
    <input type="text" class="form-control" name="mobile" autocomplete="off" placeholder="">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input">
    <label class="form-check-label" >Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>

  </body>
</html>
