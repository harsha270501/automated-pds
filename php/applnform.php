<html>
    <head>
    <title>Application Portal</title>
	<link rel="stylesheet" type="text/css" href="../css/applnstyles.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	

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
    
    $ratid=$_POST['ratid'];
    $appname=$_POST['appname'];
    $fhname=$_POST['fhname'];
    $nfsa=$_POST['nfsacat'];
    $locid=$_POST['locid'];
    $bplid=$_POST['bplid'];
    $fps=$_POST['ratFpsCode'];

    $dno=$_POST['dno'];
    $st=$_POST['st'];
    $area=$_POST['area'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pinc=$_POST['pinc'];

    $fmemid=$_POST['fmemid'];
    $bgrp=$_POST['bgrp'];
    $dob=$_POST['dob'];
    $ph=$_POST['ph'];
    $gen=$_POST['gender'];
    $marstatus=$_POST['marstatus'];
    $phych=$_POST['phych'];
    $email=$_POST['email'];
    $caste=$_POST['caste'];
    $Occupation=$_POST['Occupation'];
    $aadh=$_POST['aadh'];
    $vid=$_POST['vid'];
    $pcard=$_POST['pcard'];
    $dlnum=$_POST['dlnum'];

    
    $tdate=date("y-m-d");
    $resstatus=$_POST['resstatus'];
    $ecostatus=$_POST['ecostatus'];
    $oldration=$_POST['oldration'];
  
    
    $bname=$_POST['bname'];
    $accnum=$_POST['accnum'];
    $ifsc=$_POST['ifsc'];
    
    $gasnum=$_POST['gasconnnum'];
    $gasst=$_POST['gasconnstat'];
	$q6 = "insert into ration_loc values('$locid','$fps');
	insert into ration_card_det values('$ratid','$fhname','$nfsa','$locid','$appname);
	insert into personal_address_details values('$ratid','$dno','$st','$area','$city','$state','$pinc');
	insert into Personal_member_Details values('$ratid','$fmemid','$fhname','$gen','$bgrp','$dob','$ph','$email',,'$caste','$Occupation','$marstatus','$phych','$aadh','$vid','$pcard','$dlnum');
	insert into additional_details values('$ratid','$tdate','$resstatus','$ecostatus','$oldration');
	insert into Bank_Details values('$ratid','$bname','$accnum','$ifsc');		
	insert into Purchase_details_gas values('$ratid','$gasnum','$gasst')";
	mysqli_query($connection, $q6);
	$insertedID = mysqli_insert_id($connection);
    
    ?>
    <body>
        
        </body>
    <?php
    
    mysqli_close($connection);

    ?>

<body style="background-color: #FFFFF0;">
	<nav class="navbar navbar-expand-lg navbar-dark">
		  <a class="navbar-brand" href="#"><h3>Ration Card Application Portal</h3></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="#" style="text-decoration: none;color: white;">Home</a>
		      </li>
		    </ul>
		  </div>
	</nav>
	<section id="Dashboard"> 
		
				<form action="../php/applnform.php" method="POST">
					<fieldset class="disp-form" id="disp-common">
						<div class="form-group" style="margin-left: 40px;display: inline-block;width: 46%;">
							<label for="ratid">Application Code</label>
							<input type="text" class="form-control" id="ratid" name="ratid" placeholder="Enter Applicant name">
						  </div>
					  <div class="form-group" style="margin-left: 40px;display: inline-block;width: 46%;">
					    <label for="appname">Applicant Name</label>
					    <input type="text" class="form-control" id="appname" name="appname" placeholder="Enter Applicant name">
					  </div>

					  <div class="form-group" style="display: inline-block;width: 46%;">
					    <label for="fhname">Family Head Name</label>
					    <input type="text" class="form-control" id="fhname" name="fhname" placeholder="Enter Family Head Name">
					  </div>

					  <div class="form-group" style="margin-left: 40px;display: inline-block;width: 15%;">
					    <label for="dno">Door Number</label>
					    <input type="text" class="form-control" id="dno" name="dno"placeholder="Enter Door No">
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

					  <div class="form-group">
						<label for="nfsacat">NFSA Category</label>
						<select class="form-control" id="nfsacat" name="nfsacat">
						  <option value="1"> Priority Household</option>
						  <option value="0">Non-Priority Household</option>
						</select>
					  </div>
		
					 <div class="form-group">
					  <label for="locid">Location ID</label>
					  <input type="text" class="form-control" id="locid" name="locid" placeholder="Enter Location ID">
					</div>
		
					<div class="form-group">
					  <label for="bplid">BPL Family ID</label>
					  <input type="text" class="form-control" id="bplid" name="bplid" placeholder="Enter BPL Family ID">
					</div>
				  
					<div class="form-group">
					  <label for="ratFpsCode">FPS Code</label>
					  <input type="text" class="form-control" id="ratFpsCode" name="ratFpsCode" placeholder="Enter FPS Code">
					</div>
					
					</fieldset>
				
				
				
		<div class="forms" style="display: flex;flex-wrap: wrap;">	
		<div class="appln-form" id="appln-form-1" >
				
				  <fieldset class="disp-form" id="disp-personal">
				  <legend style="color: white; width: 30%; margin-left: 10px;border-radius:5px; text-align: center;">Personal Details</legend>
				  <div class="form-group">
				    <label for="fmemid">Family Member ID</label>
				    <input type="text" class="form-control" id="fmemid" name="fmemid" placeholder="Family Member ID">
				  </div> 
				  <div class="form-group" style="margin-left: 20px;display: inline-block;width: 40%;">
				    <label for="gender">Gender</label>
				    <select class="form-control" id="gender" name="gender">
				      <option value="Female">Female</option>
				      <option value="Male">Male</option>
				      <option value="Other">Other</option>
				    </select>
				  </div>

				  <div class="form-group" style="display: inline-block;width: 40%;">
				    <label for="bgrp">Blood group</label>
				    <input type="text" class="form-control" id="bgrp" name="bgrp" placeholder="Blood Group">
				  </div>

				   <div class="form-group" style="display:inline-block;margin-left:20px;width: 30%;">
				    <label for="dob">DOB</label>
				    <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter DOB">
				  </div>

				  <div class="form-group" style="margin-left:10px;display: inline-block;width: 25%;"> 
				  	
				    Marital Status
				    <input type="checkbox" class="form-control" id="marstatus" name="marstatus" placeholder="Enter City">
					
				  </div>

				  <div class="form-group" style="display: inline-block;width: 35%;">
				  	
				    Physically Challenged
				    <input type="checkbox" class="form-control" id="phych" name="phych" placeholder="Enter State">
				  	
				  </div>

				  <div class="form-group" style="margin-left:20px;width: 95%;">
				    <label for="email">Email ID</label>
				    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email ID">
				  </div>

				  <div class="form-group" style="margin-left:20px;width: 95%;">
				    <label for="ph">Phone number</label>
				    <input type="ph" class="form-control" id="ph" name="ph" placeholder="Enter Email ID">
				  </div>
				
				  <div class="form-group"style="margin-left: 20px;display: inline-block;width: 46%;">
				    <label for="caste">Caste</label>
				    <input type="text" class="form-control" id="caste" name="caste" placeholder="Enter Caste">
				  </div>

				  <div class="form-group" style="display: inline-block;width: 46%;">
				    <label for="Occupation">Occupation</label>
				    <input type="text" class="form-control" id="Occupation" name="Occupation" placeholder="Enter Occupation">
				  </div>


				  <div class="form-group" style="margin-left: 20px;width: 95%;">
				    <label for="aadh">Aadhar Number</label>
				    <input type="text" class="form-control" id="aadh" name="aadh" placeholder="xxxx-xxxx-xxxx">
				  </div>

				  <div class="form-group" style="margin-left: 20px;width: 95%;">
				    <label for="vid">Voter ID</label>
				    <input type="text" class="form-control" id="vid" name="vid" placeholder="Voter ID">
				  </div>

				  <div class="form-group" style="margin-left: 20px;width: 95%;">
				    <label for="pcard">PAN Card Number</label>
				    <input type="text" class="form-control" id="pcard" name="pcard" placeholder="PAN Card Number">
				  </div>

				  <div class="form-group" style="margin-left: 20px;width: 95%;">
				    <label for="dlnum">Driving License Number</label>
				    <input type="text" class="form-control" id="dlnum" name="dlnum" placeholder="Driving License number">
				  </div>
				  <a href="addmem.h"><button type="button" class="btn btn-outline-success" style="margin-top: 20px;margin-bottom:20px;margin-left: 25%;">Add Members</button>
				  </a>
				</fieldset>
					
		</div>
		<div class="appln-form" id="appln-form-2">
			
				  <fieldset class="disp-form" id="disp-bank">
				  <legend style="color: white; width: 30%; margin-left: 10px;border-radius:5px; text-align: center;">Bank Details</legend>
				  

				  <div class="form-group" style="margin-left: 20px;width: 95%;">
				    <label for="bname">Bank Name</label>
				    <input type="text" class="form-control" id="bname" name="bname" placeholder="Enter Bank Name">
				  </div>

				  <div class="form-group" style="margin-left: 20px;width: 95%;">
				    <label for="accnum">Account Number</label>
				    <input type="text" class="form-control" id="accnum" name="accnum" placeholder="Enter Account Number">
				  </div>

				  <div class="form-group" style="margin-left: 20px;width: 95%;">
				    <label for="ifsc">IFSC Code</label>
				    <input type="text" class="form-control" id="ifsc" name="ifsc" placeholder="Enter IFSC Code">
				  </div>
				
				</fieldset>
				
				  <fieldset class="disp-form" id="disp-bank" style="margin-top: 20px;">
				  <legend style="color: white; width: 30%; margin-left: 10px;border-radius:5px; text-align: center;">Additional Details</legend>
				  

				  <div class="form-group" style="margin-left: 20px;width: 95%;">
				    <label for="resstatus">Residential Status</label>
				    <select class="form-control" id="resstatus" name="resstatus">
				      <option value="Own House">Own House</option>
				      <option value="Tenant">Tenant</option>
				      <option value="Homeless">Homeless</option>
				    </select>  </div>

				  <div class="form-group" style="margin-left: 20px;width: 95%;">
				    <label for="ecostatus">Economic Status</label>
				    <select class="form-control" id="ecostatus" name="ecostatus">
						<option value="Upper">Upper</option>
						<option value="Middle">Middle</option>
						<option value="Lower">Lower</option>
					  </select>  </div>

				  <div class="form-group" style="margin-left: 20px;width: 95%;">
				    <label for="oldration">Old Ration Number</label>
				    <input type="text" class="form-control" id="oldration" name="oldration" placeholder="Enter Old Ration Number">
				  </div>

				  <div class="form-group" style="margin-left: 20px;width: 95%;">
				    <label for="gasconnnum">Gas Connection Number</label>
				    <input type="text" class="form-control" id="gasconnnum" name="gasconnnum"  placeholder="Enter Gas Connection Number">
				  </div>

				  <div class="form-group" style="margin-left: 20px;width: 95%;">
				    <label for="gasconnstat">Gas Connection Status</label>
				    <select class="form-control" id="gasconnstat" name="gasconnstat">
						<option value="Active">Active</option>
						<option value="Inactive">Inactive</option>
					  </select>  </div>
				
				</fieldset>
			
		</div>

		</div>

		<input type="submit" value="Apply" class="btn btn-success" style="margin-left:50%;margin-top: 20px;margin-bottom: 10px;">
	</form>
    </section>
    
    <div class="container" style="margin-top:20px;">
            <?php
            $error=mysqli_error($connection);
            if($error=='')
            {
                echo "Application Submitted Successfully";
            }
          
            ?>
            <a href="../html/tpdsdashboard.html"><input type="button" value="Return" class="btn btn-success " /></a>
        </div>

</body>
        
    </html>
    