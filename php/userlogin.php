<html>
    <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- Bootstrap CSS from a CDN. This way you don't have to include the bootstrap file yourself -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Your own stylesheet -->
    <link rel="stylesheet" type="text/css" href="../css/loginstyle.css"></head>

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
  
if(isset($_POST['login']))
    {
        $email=mysqli_real_escape_string($connection, $_POST['un']);
        $password=mysqli_real_escape_string($connection, $_POST['pwd']);

        $login="SELECT * FROM user_login WHERE  username= '$email' AND password = '$password'";

        $run_login = mysqli_query($connection, $login) or die(mysqli_error($connection));

        $count = mysqli_num_rows($run_login);
        if($count == 1)
        {
            echo "";
            
        }else
        {
            echo "Invalid Credentials.Please try again.";
            return;
        }
    }

?>
<body>
<section id="register">
        <div class="container-fluid">
          <div class="row">
            <div class="col col-lg-12">
              <div class="reg-box" id="reg-box">
                <div class="reg-form" id="reg-form">
                  
                  <h3>User Login</h3>
                  <form style="margin-top: 10%" action="../php/offloginform.php" method="POST">
                
                  <div class="form-group">
                      <label for="un">User Name</label>
                      <input type="text" class="form-control" name="un" id="un" placeholder="User Name">
                  </div>
                      
                  <div class="form-group">
                      <label for="pwd">Password</label>
                      <input type="Password" class="form-control" name="pwd" id="pwd" placeholder="User Phone No">
                  </div>
                      

                <input type="submit" name="login" value="Login" class="btn btn-primary" style="margin-top: 10%;">
             
                  </form>
                  <div class="container" style="margin-top:20px;">
            <?php
            echo "\nLogged in successfully";
            ?>
            <a href="../html/purchase.html"><input type="button" value="Continue" class="btn btn-primary " /></a>
        </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    




    </body>
    <?php
    mysqli_close($connection);
    ?>    
    </html>