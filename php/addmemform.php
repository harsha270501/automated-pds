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

    $appcode=0;
    $connection = mysqli_connect($host, $username, $password, $databaseName);
    if ($connection == false) {
        $error = mysqli_connect_error();
        echo "Error initiating connection with database: " . $error;
        return;
    }
     
    $sql = "SELECT max(appcode) FROM reviewappln";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $appcode=$row["max(appcode)"]+1;
  }
} else {
  echo "0 results";
}
    $mname=$_POST['name'];
    $bgrp=$_POST['bgrp'];
    $dob=$_POST['dob'];
    $marstatus=$_POST['marstatus'];
    $phych=$_POST['phych'];
    $email=$_POST['email'];
    $caste=$_POST['caste'];
    $Occupation=$_POST['Occupation'];
    $aadh=$_POST['aadh'];
    $vid=$_POST['vid'];
    $pcard=$_POST['pcard'];
    $dlnum=$_POST['dlnum'];

    
   


    $ApplicationQuery = "insert into reviewmem (appno,mname,bgrp,dob,marstatus,phych,email,caste,Occupation,aadh,vid,pcard,dlnum) values('$appcode','$mname','$bgrp','$dob','$marstatus','$phych','$email','$caste','$Occupation','$aadh','$vid','$pcard','$dlnum')";

    mysqli_query($connection, $ApplicationQuery);

    $insertedID = mysqli_insert_id($connection);
    ?><body>
        <div class="container">
            <?php
            echo mysqli_error($connection);
            echo "\nApplication submitted successfully";
            ?>
            <a href="appln.html"><input type="button" value="Return" class="btn btn-primary " /></a>
        </div>
        </body>
    <?php
    
    mysqli_close($connection);

    ?>

    
        
    </html>