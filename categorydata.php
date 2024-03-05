<?php 

include "config.php";

  //print_r($_POST);
  if(isset($_POST['submit'])) {

    $category = $_POST['name'];

    $image = $_POST['image'];

  

    $sql = "INSERT INTO `categories`(`category`, `image`) VALUES ('$category', '$image')";
    //echo $sql;
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
    <title>category upload
    </title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
  <center>

<h2></h2>

<form action="categorydata.php" method="POST">

  <fieldset>

    <legend><b> CATEGORY DATA UPLOAD </b></legend><br>


    <div class="container mt-3">
  <form method="POST">
  <div class="form-group container mt-3">
  <label for="validationDefault03" class="form-label">CATEGORY NAME</label>
  <input type="text" class="form-control" id="validationDefault03" required
    placeholder="Enter Name of category" name="name">
</div>



<div>
IMAGE<br>







<input type="file" id="myFile" name="image">

<br>
</div>
<br>



<div class="form-group container mt-3">
  <button type="submit" class="btn btn-primary"name="submit">Submit</button>
</div>



  </fieldset>

</form>
</center>

 </body>
 </html>