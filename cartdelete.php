<?php
include 'config.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from cartdatas where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "deleted successful";
        header('location:cart.php');
    }else{
        die(mysqli_error($con));
    }
}

?>