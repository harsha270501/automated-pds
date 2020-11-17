<html>
    <head>
    <link rel="stylesheet" href="../css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
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
     
    $commcode=$_POST['ccode'];
    $commclass=$_POST['cclass'];   
    $amt=$_POST['amt'];
    $expdate=$_POST['exp_date'];
    $loaddate=date("Y-m-d");

    $q1 = "insert into goods_stock values('$commcode','$commclass','$amt','$loaddate','$expdate')";


    mysqli_query($connection, $q1);
    $FPSOfficerApplicationQuery = "insert into FPS_Officer(Officer_ID, fps_code, emp_date) values('$offid','$offFPSCode',date'$empdate')";
    
    $insertedID = mysqli_insert_id($connection);

   
    ?>
    
        <div class="container">
            <?php
            echo "\Done submitted successfully";
            ?>
            <a href="../html/request.html"><input type="button" value="Return" class="btn btn-primary " /></a>
        </div>
    </body>
    <?php
    
    mysqli_close($connection);

    ?>

    
        
    </html>