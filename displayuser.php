
<?php
include './component/connect.php';
include './component/navbar.php'
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
<br>
<h1>..............Total Users.................</h1>

 <button class="btn btn-primary m-5"><a class="text-light" href="adduser.php">Add User</a></button>

 <table class="table mx-5  w-75">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Fname</th>
      <th scope="col">Lname</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

  <?php


    $sql="Select * from `signup`";
    $result=mysqli_query($con,$sql);
    if($result){
    
        while( $row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $fname=$row['fname'];
            $lname=$row['lname'];
            $email=$row['email'];
            $password=$row['password'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$fname.'</td>
            <td>'.$lname.'</td>
            <td>'.$email.'</td>
            <td>'.$password.'</td>
            <td >
            
                <button class="btn btn-primary"><a class="text-light "  href="update.php?updateid='.$id.'">Update</a></button>


                 <button class="btn btn-danger "><a class="text-light" href="delete.php?deleteid='.$id.'">Delete</a></button>
            </td>
          </tr>';
        }
    }

  ?>
    
    
  </tbody>
</table>

</body>
</html>