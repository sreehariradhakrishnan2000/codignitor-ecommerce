<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `products` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "deleted successful";
    }else{
        die(mysqli_error($con));
    }
}

?>