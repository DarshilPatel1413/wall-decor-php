<?php

include './component/connect.php';


if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `subscribe` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "deleted successfully";
        header('location:displaysubscribe.php');
    }else{
        die(mysqli_error($con));
    }
}
?>