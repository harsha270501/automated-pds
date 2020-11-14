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
     
    $fpslic=$_POST['fpslic'];
    $fpsName=$_POST['fpsName'];
    $offEmail=$_POST['offEmail'];
    $fpsOwnName=$_POST['fpsOwnName'];
    $fpsOwnGen=$_POST['fpsOwnGen'];
    
    $dno=$_POST['dno'];
    $st=$_POST['st'];
    $area=$_POST['area'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pinc=$_POST['pinc'];
    
    $ownPic=$_POST['ownPic'];
    
    $FPSApplicationQuery = "insert into dbname (fpslic,fpsName,fpsOwnGen,fpsOwnName,offEmail,ownPic,st,area,area,city,state,pinc) values('$fpslic','$fpsName','$fpsOwnGen','$fpsOwnName','$offEmail','$ownPic','$st','$area','$city','$state','$pinc')";

    mysqli_query($connection, $FPSApplicationQuery);

    $insertedID = mysqli_insert_id($connection);
    ?><body>
        <div class="container">
            <?php
            echo mysqli_error($connection);
            echo "\nApplication submitted successfully";
            ?>
            <a href="fpsofficeappln.html"><input type="button" value="Return" class="btn btn-primary " /></a>
        </div>
        </body>
    <?php
    
    mysqli_close($connection);

    ?>

    
        
    </html>