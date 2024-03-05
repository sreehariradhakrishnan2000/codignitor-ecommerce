<?php 

include "config.php";

  if(isset($_POST['submit'])) {



    $category = $_POST['category'];

    $image = $_POST['image'];




    $sql = "INSERT INTO `categories`(`category`,`image`,) VALUES (`$category`,`$image`)";

    $result = $con->query($sql);

    if ($result == TRUE) {

      //echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $con->error;

    } 

    $conn->close(); 

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



<div>
<h3>IMAGE</h3> <br>

<input type="file" id="myFile" name="image">

<br>
</div>
<br>


<div>

<label for="category">Choose Category:</label>

<select name="category" id="category">
  <option value="outfits">outfits</option>
  <option value="toys">toys</option>
  <option value="cosmetics">cosmetics</option>
  <option value="others">others</option>

</select>
  
     

</select><br><br> 
</div>









<div class="form-group container mt-3">
  <button type="submit" class="btn btn-primary"name="submit">Submit</button>
</div>








  </fieldset>

</form>
</center>

 </body>
 </html>