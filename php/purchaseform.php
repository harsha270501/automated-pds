<!DOCTYPE html>
<html>
<head>
	<title>Purchase</title>
	<link rel="stylesheet" type="text/css" href="../css/pstyle.css">
	
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
</head>
<script type="text/javascript">
	function hide(){
		document.getElementById('item2').style.display='none';
		document.getElementById('item3').style.display='none';
		document.getElementById('item4').style.display='none';
		document.getElementById('item5').style.display='none';
	}
</script>
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
    $item=$_POST['item'];
    $qty=$_POST['qty']; 
    

    $FPSApplicationQuery = "insert into Purchase_details_ration('$ratid','$item','$qty')";

  
    mysqli_query($connection, $FPSApplicationQuery);

    $insertedID = mysqli_insert_id($connection);
    ?>

<body style="background-color: #FFFFF0" >
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="#"><h3>Purchase</h3></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item ">
		        <a class="nav-link" href="dashboard.html" style="text-decoration: none; color: white;">Dashboard<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="login.html" style="text-decoration: none;color: white;">Logout</a>
		      </li>
		    </ul>
		  </div>
	</nav>
	<section id="Purchase">
		<form>
			<div id="item1">
				<div class="form-group" id="amt1" style="margin-left: 20px">
					<label for="amtselect1">Ration Id</label>
					<input type="Number" class="form-control" id="amtselect1" name="ratid" placeholder="Number of kgs or litres">
				  </div>
		  	<div class="form-group">
			    <label for="itemselect1">Select Ration Item</label>
			    <select class="form-control" id="itemselect1" name="item">
			      <option value="Rice">Rice</option>
			      <option value="Sugar">Sugar</option>
			      <option value="Pulses">Pulses</option>
			      <option value="Wheat">Wheat</option>
			      <option value="Oil">Oil</option>
			    </select>
  		  </div>
		  <div class="form-group" id="amt1" style="margin-left: 20px">
		    <label for="amtselect1">Number of kgs or litres</label>
		    <input type="Number" class="form-control" id="amtselect1" name="qty" placeholder="Number of kgs or litres">
		  </div>
		 
		</div>
	
		
		  <div class="form-check" style="margin-top: 20px;">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Agree to Terms and Conditions</label>
		  </div>
		  <input type="submit" class="btn btn-primary">
        </form>
        <div class="container" style="margin-top:20px;">
            <?php
            echo "\n Added successfully";
            ?>
            <br>
            <a href="../index.html"><input type="button" value="Continue" class="btn btn-primary " /></a>
        </div>
	</section>
</body>

    
    mysqli_close($connection);

    ?>
</html>