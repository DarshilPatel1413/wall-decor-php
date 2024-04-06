
<?php
include './component/connect.php';
include './component/navbar.php';

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

<br><br>
<h1>..............Subscribed Email List.................</h1>
<br><br>

 <table class="table mx-5  w-75">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>

  <?php


    $sql="Select * from `subscribe`";
    $result=mysqli_query($con,$sql);
    if($result){
    
        while( $row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $email=$row['email'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$email.'</td>
            <td >
                 <button class="btn btn-danger "><a class="text-light" href="deletesubscribe.php?deleteid='.$id.'">Delete</a></button>
            </td>
          </tr>';
        }
    }

  ?>
    
    
  </tbody>
</table>

</body>
</html>