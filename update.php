
<?php

include './component/navbar.php';
include './component/connect.php';
$id=$_GET['updateid'];

$sql="select * from `signup` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$fname=$row['fname'];
$lname=$row['lname'];
$email=$row['email'];
$password=$row['password'];


if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="update `signup` set id=$id,fname='$fname',lname='$lname',email='$email',password='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "data inserted sucessfully";
        header('location:displayuser.php');
    }else{
        die(mysqli_error($con));
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
</head>
<body>

  <div class="container">
   
  <form method="post">
  <div class="mb-3 my-5">
    <label class="form-label">Fname</label>
    <input type="text" placeholder="Enter your first name" name="fname" class="form-control" value="<?php echo $fname; ?>"  autocomplete="off">
  </div>
  <div class="mb-3">
    <label class="form-label">Lname</label>
    <input type="text" placeholder="Enter last your name" name="lname" class="form-control" value="<?php echo $lname; ?>" autocomplete="off" >
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" placeholder="Enter your email" name="email" class="form-control" value="<?php echo $email; ?>" autocomplete="off">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" placeholder="Enter your password" name="password" class="form-control" value="<?php echo $password; ?>"  autocomplete="off">
  </div>
  <a href="displayuser.php" class="btn btn-danger">Cancel</a>
  <button name="submit"  type="submit" class="btn btn-primary">Update</button>
</form>






  </div>

</body>
</html>