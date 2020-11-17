<html>
    <head>
    <title>FPS Officer Application Portal</title>
	<link rel="stylesheet" type="text/css" href="../css/fpsoffapln.css">
	
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
    echo "\nfpscode ".$fpsCode;
    
    

    $FPSApplicationQuery = "insert into fp_shop(fps_code,fps_lic_no, name,shop_num, own_name,own_gender, dno, street ,area,city,state, pin_code) values('$fpsCode','$fpslic','$fpsName','$fpsSNO','$fpsOwnName','$fpsOwnGen','$dno','$st','$area','$city','$state','$pinc')";

  
    mysqli_query($connection, $FPSApplicationQuery);

    $insertedID = mysqli_insert_id($connection);
    ?>
    <body style="background-color: #FFFFF0">
	<nav class="navbar navbar-expand-lg navbar-dark">
		  <a class="navbar-brand" href="#"><h3>FPS Office Application Portal</h3></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item ">
		        <a class="nav-link" href="profile.html" style="text-decoration: none; color: white;">Profile<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="login.html" style="text-decoration: none;color: white;">Logout</a>
		      </li>
		    </ul>
		  </div>
	</nav>
		<section id="Dashboard">

		<form action="../php/fpsofficeapplnform.php" method="POST">

				  <fieldset class="disp-form" id="disp-fps">
				  <legend style="color: white; width: 30%; margin-left: 10px;border-radius:5px; text-align: center;">FPS OFFICE</legend>
				  
				  <div class="form-group">
				    <label for="fpsCode">FPS Office Code</label>
				    <input type="text" class="form-control" id="fpsCode" name="fpsCode" placeholder="Enter FPS Lic.No">
				  </div>

				  <div class="form-group">
				    <label for="fpslic">FPS License Number</label>
				    <input type="text" class="form-control" id="fpslic" name="fpslic" placeholder="Enter FPS Lic.No">
				  </div>

				   <div class="form-group">
				    <label for="fpsName">FPS Name</label>
	    <input type="text" class="form-control" id="fpsName" name="fpsName" placeholder="Enter FPS Name">
 </div>

				  <div class="form-group">
				    <label for="fpsSNO">FPS Shop Number</label>

				    <input type="text" class="form-control" id="fpsSNO" name="fpsSNO" placeholder="Enter Shop Number">
	  </div>
				
				  <div class="form-group">
				    <label for="fpsOwnName">Owner Name</label>
				    <input type="text" class="form-control" id="fpsOwnName" name="fpsOwnName" placeholder="Enter Owner Name">
				  </div>

				  <div class="form-group">
				    <label for="fpsOwnGen">Owner Gender</label>
				    <select class="form-control" id="fpsOwnGen" name="fpsOwnGen">
					    <option>Male</option>
					    <option>Female</option>
					    <option>Others</option>
					 </select>
				  </div>


				  <div class="form-group" style="margin-left: 40px;display: inline-block;width: 15%;">
				    <label for="dno">Door Number</label>
				    <input type="text" class="form-control" id="dno" name="dno" placeholder="Enter Door No">
				  </div>
				
				  <div class="form-group"style="display: inline-block;width: 35%;">
				    <label for="st">Street Name</label>
				    <input type="text" class="form-control" id="st" name="st" placeholder="Enter Street Name">
				  </div>

				  <div class="form-group" style="display: inline-block;width: 41%;">
				    <label for="area">Area</label>
				    <input type="text" class="form-control" id="area" name="area" placeholder="Enter Area">
				  </div>

				  <div class="form-group" style="margin-left:40px; display: inline-block;width: 38%;"> 
				    <label for="City">City</label>
				    <input type="text" class="form-control" id="city" name="city" placeholder="Enter City">
				  </div>

				  <div class="form-group" style="display: inline-block;width: 40%;">
				    <label for="state">State</label>
				    <input type="text" class="form-control" id="state" name="state" placeholder="Enter State">
				  </div>

				  <div class="form-group" style="display: inline-block;width: 15%;">
				    <label for="pinc">Pin Code</label>
				    <input type="text" class="form-control" id="pinc" name="pinc" placeholder="Enter Pin Code">
				  </div>

				
				  <br>
				  <input type="submit" name="submit" class="btn btn-outline-danger" style="margin-top: 20px;margin-left: 45%;">
				
			</fieldset>
            </form>
            <div class="container">
            <?php
            echo mysqli_error($connection);
            if(mysqli_error($connection) == '')
            {
                echo "Application Submitted";
            }
            ?>
            <a href="../html/tpdsdashboard.html"><input type="button" value="Return" class="btn btn-primary " /></a>
        </div>
	</section>
</body>

    <?php
    
    mysqli_close($connection);

    ?>

    
        
    </html>