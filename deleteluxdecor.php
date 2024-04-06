<?php

include './component/connect.php';


if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `luxdecor` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "deleted successfully";
        header('location:displayluxdecor.php');
    }else{
        die(mysqli_error($con));
    }
}
?>