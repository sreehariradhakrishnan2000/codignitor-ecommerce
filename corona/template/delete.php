<?php
include 'config.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
print_r($id);
    $sql="delete from `products` where id='$id'";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "deleted successful";
       header('location:indexproducts.php');
    }else{
        die(mysqli_error($con));
    }
}

?>