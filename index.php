
<?php
 include './component/connect.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">

   
</head>
<body>
    
<div class="main">


        <div class="main1">
            <div class="first">
            <img src="https://res.cloudinary.com/det2xquez/image/upload/v1708601141/logo_ytt4xh.png" alt="img">
            <h1>Wall Decor</h1>
            </div>

            <hr>

            <div class="second">
            <i class="fa-solid fa-table-columns"></i>
            <a href="index.php"><h4>Dashbord</h4></a> 
            </div>

            <div class="second">
            <i class="fa-solid fa-user"></i>
            <a  href="displayuser.php"> <h4>Users</h4></a> 
            </div>

            <div class="second">
            <i class="fa-solid fa-user"></i>
            <a  href="displayluxdecor.php"> <h4>Luxdecor</h4></a> 
            </div>

            <div class="second">
            <i class="fa-solid fa-user"></i>
            <a  href="displaysubscribe.php"> <h4>SubScribe</h4></a> 
            </div>

            <div class="second">
            <i class="fa-solid fa-user"></i>
            <a  href="displaycontactus.php"> <h4>Contactus</h4></a> 
            </div>
        </div>
        <div class="main2">

            <div class="navbar">
            <div>
            <label for="search">Search</label>
            <input type="search" name="search" id="">
            </div>
            <img src="https://res.cloudinary.com/det2xquez/image/upload/v1708601141/logo_ytt4xh.png" alt="">
            </div>

            <hr>

            <div class="box">
                <div class="box1">
                <i class="fa-solid fa-user"></i>
                <h4>Total Registerd</h4>
                
                <?php

                   

                    $sql = "SELECT id FROM signup ORDER BY id";
                    $query_run = mysqli_query($con , $sql);

                    $row = mysqli_num_rows($query_run);

                    echo '<h3> '.$row.' </h3> '

                    ?>
                </div>

                <div class="box1">
                <i class="fa-solid fa-user"></i>
                <h4>Total LuxDecor Item</h4>
                
                <?php

                   

                    $sql = "SELECT id FROM luxdecor ORDER BY id";
                    $query_run = mysqli_query($con , $sql);

                    $row = mysqli_num_rows($query_run);

                    echo '<h3> '.$row.' </h3> '

                    ?>
                </div>

                <div class="box1">
                <i class="fa-solid fa-user"></i>
                <h4>Total Subscribed Mail</h4>
                
                <?php

                   

                    $sql = "SELECT id FROM subscribe ORDER BY id";
                    $query_run = mysqli_query($con , $sql);

                    $row = mysqli_num_rows($query_run);

                    echo '<h3> '.$row.' </h3> '

                    ?>
                </div>

                <div class="box1">
                <i class="fa-solid fa-user"></i>
                <h4>Total Contyactus </h4>
                
                <?php

                   

                    $sql = "SELECT id FROM contactus ORDER BY id";
                    $query_run = mysqli_query($con , $sql);

                    $row = mysqli_num_rows($query_run);

                    echo '<h3> '.$row.' </h3> '

                    ?>
                </div>
            </div>
        </div>








</div>















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



</body>
</html>