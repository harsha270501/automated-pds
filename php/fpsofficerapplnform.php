<html>
    <head>
    <link rel="stylesheet" type="text/css" href="/css/fpsoffapln.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
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
        
    }
     
    $offid=$_POST['offid'];
    $offName=$_POST['offName'];   
    $offEmail=$_POST['offEmail'];
    $offph=$_POST['offph'];
    $offRank=$_POST['offRank'];
    $offFPSCode=$_POST['offFPSCode'];
    $empdate=date("Y-m-d");

    $FPSOfficerApplicationQuery = "insert into Officer(Officer_ID, Name, Phone, Email_ID,rank) values('$offid','$offName','$offph','$offEmail','$offRank')";


    mysqli_query($connection, $FPSOfficerApplicationQuery);
    $FPSOfficerApplicationQuery = "insert into FPS_Officer(Officer_ID, fps_code, emp_date) values('$offid','$offFPSCode',date'$empdate')";
    


    mysqli_query($connection, $FPSOfficerApplicationQuery);

    $insertedID = mysqli_insert_id($connection);

    $return= mysqli_query($connection, $FPSOfficerApplicationQuery);
    $insertedID = mysqli_insert_id($connection);

   
    ?>
    <body>
    <section id="Dashboard">

<form action="../php/fpsofficerapplnform.php" method="POST">
          <fieldset class="disp-form" id="disp-fps">
          <legend style="color: white; width: 30%; margin-left: 10px;border-radius:5px; text-align: center;">FPS OFFICER</legend>
          

          <div class="form-group">
            <label for="offid">Officer ID</label>
            <input type="text" class="form-control" id="offid" name="offid" placeholder="Assign Officer ID">
          </div>

           <div class="form-group">
            <label for="offName">Name</label>
            <input type="text" class="form-control" id="offName" name="offName" placeholder="Enter Officer's Name">
      </div>

          <div class="form-group">
            <label for="offEmail">Email ID</label>
            <input type="email" class="form-control" id="offEmail" name="offEmail" placeholder="Enter Officer's Email ID">
          </div>
        
          <div class="form-group">
            <label for="offph">Phone</label>
            <input type="text" class="form-control" id="offph" name="offph" placeholder="Enter Officer's Phone Number">
          </div>


          <div class="form-group">
            <label for="offRank">Rank</label>
            <input type="text" class="form-control" id="offRank" name="offRank" placeholder="Enter Officer's Rank">
          </div>

          <div class="form-group">
            <label for="offFPSCode">FPS CODE</label>
            <input type="text" class="form-control" id="offFPSCode" name="offFPSCode" placeholder="Enter FPS Code">
          </div>

          <input type="submit" class="btn btn-outline-danger" style="margin-top: 20px;margin-left: 45%;">
          <div class="container">
            <?php
            echo "\nApplication submitted successfully";
            ?>
            <a href="../html/fpsofficerappln.html"><input type="button" value="Return" class="btn btn-primary " /></a>
        </div>
        </fieldset>
    </form>
        
</section>
        
    </body>
    <?php
    
    mysqli_close($connection);

    ?>

    
        
    </html>