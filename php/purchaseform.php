<html>
    <head>
    <link rel="stylesheet" href="css/custom.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

<?php 
    $host = "127.0.0.1";
    $databaseName = "db_sample";
    $username = "root";
    $password = "password";

    $connection = mysqli_connect($host, $username, $password, $databaseName);
    if ($connection == false) {
        $error = mysqli_connect_error();
        echo "Error initiating connection with database: " . $error;
        return;
    }

    else
    {
        echo "Connection ok";
    }
     
    $itemselect1=$_POST['itemselect1'];
    $amtselect1=$_POST['amtselect1'];  
    $itemselect1=$_POST['itemselect2'];
    $amtselect1=$_POST['amtselect2'];   
    $itemselect1=$_POST['itemselect3'];
    $amtselect1=$_POST['amtselect3'];  
    $itemselect1=$_POST['itemselect4'];
    $amtselect1=$_POST['amtselect4'];  
    $itemselect1=$_POST['itemselect5'];
    $amtselect1=$_POST['amtselect5'];  

    $purchaseQuery = "insert into Officer(itemselect1,amtselect1,itemselect2,amtselect2,itemselect3,amtselect3,itemselect4,amtselect4,itemselect5,amtselect5) values('$itemselect1','$amtselect1','$itemselect2','$amtselect2','$itemselect3','$amtselect3','$itemselect4','$amtselect4','$itemselect5','$amtselect5')";


    mysqli_query($connection, $purchaseQuery);

    $insertedID = mysqli_insert_id($connection);

    $return= mysqli_query($connection, $purchaseQuery);
    ?>
    <body>
        <div class="container">
            <?php
            echo "\nApplication submitted successfully";
            ?>
            <a href="../html/fpsofficerappln.html"><input type="button" value="Return" class="btn btn-primary " /></a>
        </div>
    </body>
    <?php
    
    mysqli_close($connection);

    ?>

    
        
    </html>