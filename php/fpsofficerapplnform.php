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
    $databaseName = "dbname";
    $username = "";
    $password = "";

    $connection = mysqli_connect($host, $username, $password, $databaseName);
    if ($connection == false) {
        $error = mysqli_connect_error();
        echo "Error initiating connection with database: " . $error;
        return;
    }
     
    $offid=$_POST['offid'];
    $offName=$_POST['offName'];   
    $offEmail=$_POST['offEmail'];
    $offph=$_POST['offph'];
    $Occupation=$_POST['Occupation'];
    $offRank=$_POST['offRank'];
    $offFPSCode=$_POST['offFPSCode'];

    $FPSOfficerApplicationQuery = "insert into dbname (offid,offName,offEmail,offph,Occupation,offRank,offFPSCode) values('$offid','$offName','$offEmail','$offph','$Occupation','$offRank','$offFPSCode')";

    mysqli_query($connection, $FPSOfficerApplicationQuery);

    $insertedID = mysqli_insert_id($connection);
    ?><body>
        <div class="container">
            <?php
            echo mysqli_error($connection);
            echo "\nApplication submitted successfully";
            ?>
            <a href="fpsofficerappln.html"><input type="button" value="Return" class="btn btn-primary " /></a>
        </div>
        </body>
    <?php
    
    mysqli_close($connection);

    ?>

    
        
    </html>