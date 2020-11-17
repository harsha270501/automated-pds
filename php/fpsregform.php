<html>
    <head>
    <link rel="stylesheet" href="../css/custom.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <title> Sign up form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

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
  
    $user=$_POST['un'];
    $password=$_POST['pwd'];
    $offid=$_POST['offid'];



    $q2="update Officer set username='$user' where Officer_ID='$offid'";

    
    mysqli_query($connection, $q2);
    $insertedID = mysqli_insert_id($connection);
    
    $q3="insert into user_login values('$user',$password','admin')";
    mysqli_query($connection, $q3);
    $insertedID = mysqli_insert_id($connection);
    mysqli_close($connection);
?>
 <div class="container" style="margin-top:20px;">
            <?php
            echo "\n Registered successfully";
            ?>
            <br>
            <a href="../html/request.html"><input type="button" value="Continue" class="btn btn-primary " /></a>
        </div>
    </body>
        
    </html>