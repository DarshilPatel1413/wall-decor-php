
<?php

include './component/navbar.php';
include './component/connect.php';


?>

<?php

require 'vendor/autoload.php';
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

Configuration::instance([
  'cloud' => [
    'cloud_name' => 'det2xquez', 
    'api_key' => '412487397164482', 
    'api_secret' => 'c3VGCCprprV2Uevp-J6dPQU4R6M'],
  'url' => [
    'secure' => true]]);

  //   $data =  (new UploadApi())->upload('demo.JPG');
  //  print_r($data);
  // echo "Url = ".$data['secure_url']."<br>";
  // echo "public id = ".$data['public_id'];
   

    ?>

    <?php



$id=$_GET['updateid'];

$sql="select * from `luxdecor` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$name=$row['name'];
$price1=$row['price1'];
$price2=$row['price2'];
// $image= $row['image'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $price1=$_POST['price1'];
    $price2=$_POST['price2'];
    $image=$_FILES['image']['name'];
    $quantity=$_POST['quantity'];

    $file = $_FILES['image']['tmp_name'];
    $data =  (new UploadApi())->upload($file);
    $url = $data['url'];


   
        $sql="update `luxdecor` set id=$id,name='$name',price1='$price1',price2='$price2',image='$url',quantity='$quantity' where id=$id";
        $result=mysqli_query($con,$sql);
        if($result){
            // echo "data inserted sucessfully";
            move_uploaded_file($_FILES['image']['tmp_name'],"uploadimages/".$_FILES["image"]["name"]);
                header('location:displayluxdecor.php');
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
   
  <form method="post" enctype="multipart/form-data">
  <div class="mb-3 my-5">
    <label class="form-label">name</label>
    <input type="text" placeholder="Enter item name" name="name" class="form-control" value="<?php echo $name; ?>"  autocomplete="off">
  </div>
  <div class="mb-3">
    <label class="form-label">price1</label>
    <input type="number" placeholder="Enter price1" name="price1" class="form-control" value="<?php echo $price1; ?>" autocomplete="off" >
  </div>
  <div class="mb-3">
    <label class="form-label">price2</label>
    <input type="number" placeholder="Enter Price2" name="price2" class="form-control" value="<?php echo $price2; ?>" autocomplete="off">
  </div>
  <div class="mb-3">
    <label class="form-label">Image</label>
    <input type="file"  id="image"  class="form-control"  name="image" value="<?php echo $image?>" >
  </div>
  <div class="mb-3">
    <label class="form-label">Quantity</label>
    <input type="number" placeholder="Enter Quantity" name="quantity" class="form-control" value="<?php echo $quantity; ?>" autocomplete="off">
  </div>
  <a href="displayluxdecor.php" class="btn btn-danger">Cancel</a>
  <button name="submit"  type="submit" class="btn btn-primary">Update</button>
</form>






  </div>

</body>
</html>