<?php
include 'connect.php';
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
        <button class="btn btn-primary"><a href="user.php" class="text-light">Add User</a>
            </button>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Name</th>
      <th scope="col">mobile</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">operatons</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select * from `crud`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $password=$row['password'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
            <td>
            <button class="btn btn-primary  "><a class="text-light" href="update.php?updateid='.$id.' ">Update</a></button>
            <button class="btn btn-danger "><a class="text-light" href="delete.php?deleteid='.$id.' ">Delete</a></button>
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