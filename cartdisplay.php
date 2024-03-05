<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cred Operatons</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
            
            <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">image</th>
      <th scope="col">price</th>
      <th scope="col">quantity</th>
      <th scope="col">operatons</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select * from `cartdatas`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $image=$row['image'];
            $price=$row['price'];
            $quantity=$row['quantity'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$image.'</td>
            <td>'.$price.'</td>
            <td>'.$quantity.'</td>

            <td>
            <button class="btn btn-primary  "><a class="text-light" href="cartupdate.php?updateid='.$id.' ">update</a></button>
            <button class="btn btn-danger "><a class="text-light" href="cartdelete.php?deleteid='.$id.' ">Delete</a></button>
            </td>
          </tr>';
        }
        // echo $row['name'];
    }
?>
   </tbody>
</table>
    </div>
    
</body>
</html>