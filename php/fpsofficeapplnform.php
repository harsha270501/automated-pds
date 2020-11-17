<html>
    <head>
    <link rel="stylesheet" href="css/custom.css">
    </head>

<?php 
    $host = "127.0.0.1";
<<<<<<< HEAD
    $databaseName = "db_sample";
    $username = "root";
    $password = "password";
=======
    $databaseName = "pds";
    $username = "root";
    $password = "";
>>>>>>> 2b2c24c1cdae8a37ba99f7a784df1ac8bd5a3455

    $connection = mysqli_connect($host, $username, $password, $databaseName);
    if ($connection == false) {
        $error = mysqli_connect_error();
        echo "Error initiating connection with database: " . $error;
        return;
    }

    $fpsCode=$_POST['fpsCode'];
    $fpslic=(int)$_POST['fpslic'];
    $fpsName=$_POST['fpsName'];
    $fpsSNO=(int)$_POST['fpsSNO'];
    $fpsOwnName=$_POST['fpsOwnName'];
    $fpsOwnGen=$_POST['fpsOwnGen'];
    
    $dno=$_POST['dno'];
    $st=$_POST['st'];
    $area=$_POST['area'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pinc=(int)$_POST['pinc'];
    
    
    
<<<<<<< HEAD
    $FPSApplicationQuery = "insert into fp_shop(fps_code,fps_lic_no, name,shop_num, own_name,own_gender, dno, street ,area,city,state, pin_code) values('$fpsCode','$fpslic','$fpsName','$fpsSNO','$fpsOwnName','$fpsOwnGen','$dno','$st','$area','$city','$state','$pinc')";
=======
    
    $FPSApplicationQuery = "insert into fpsoffice (fpslic,fpsName,fpsOwnGen,fpsOwnName,offEmail,dr,st,area,area,city,state,pinc) values('$fpslic','$fpsName','$fpsOwnGen','$fpsOwnName','$offEmail','$ownPic','$dno','$st','$area','$city','$state','$pinc')";
>>>>>>> 2b2c24c1cdae8a37ba99f7a784df1ac8bd5a3455

    mysqli_query($connection, $FPSApplicationQuery);

    $insertedID = mysqli_insert_id($connection);
    ?><body>
        <div class="container">
            <?php
            echo mysqli_error($connection);
            echo "\nFPOFFICE Application submitted successfully";
            ?>
            <a href="fpsofficeappln.html"><input type="button" value="Return" class="btn btn-primary " /></a>
        </div>
        </body>
    <?php
    
    mysqli_close($connection);

    ?>

    
        
    </html>