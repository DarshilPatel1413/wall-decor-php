
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

<br>
<h1>..............Luxdecor Items.................</h1>

 <button class="btn btn-primary m-5"><a class="text-light" href="addluxdecor.php">Add Item</a></button>

 <table class="table mx-5  w-75">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">name</th>
      <th scope="col">price1</th>
      <th scope="col">price2</th>
      <th scope="col">image</th>
      <th scope="col">quantity</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

  <?php


    $sql="Select * from `luxdecor`";
    $result=mysqli_query($con,$sql);
    if($result){
    
        while( $row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $price1=$row['price1'];
            $price2=$row['price2'];
            $image=$row['image'];
            $quantity=$row['quantity'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$price1.'</td>
            <td>'.$price2.'</td>
            
            <td><img src='.$image.' height="100px;" width="100px;" alt="img"></td>
            <td>'.$quantity.'</td>
            <td >
            
                <button class="btn btn-primary"><a class="text-light "  href="updateluxdecor.php?updateid='.$id.'">Update</a></button>


                 <button class="btn btn-danger "><a class="text-light" href="deleteluxdecor.php?deleteid='.$id.'">Delete</a></button>
            </td>
          </tr>';
        }
    }

  ?>
    
    
  </tbody>
</table>

</body>
</html>