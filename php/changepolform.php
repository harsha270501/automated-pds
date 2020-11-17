<html>
    <head>
    <link rel="stylesheet" href="../css/loginstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<body>
<section id="register" style="width:50%;">
    <div id="display-details" style="width:50%;margin-top:20%;margin-left:70%;background-color:white;padding:20px 20px;">
                    <h5>Policy details</h5>
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
        $polid=$_POST['fpslic'];
        $tpdsid=$_POST['tpdsid'];

        $result = mysqli_query($connection,"SELECT * FROM soi_policy where policy_id='$polid'");

        echo "<table border='1'>
        <tr>
        <th>policy_id</th>
        <th>scheme_id</th>
        <th>pol_type</th>
        </tr>";

        while($row = mysqli_fetch_array($result))
        {
        echo "<tr>";
        echo "<td>" . $row['policy_id'] . "</td>";
        echo "<td>" . $row['scheme_id'] . "</td>";
        echo "<td>" . $row['pol_type'] . "</td>";
        echo "</tr>";
        }
        echo "</table>";
        $q1="update chooses_pol set policy_id='$polid' where off_code='$tpdsid'";

        mysqli_query($connection, $q1);
        $insertedID = mysqli_insert_id($connection);
        mysqli_close($connection);
?>
  
        <div class="container">
            <?php
            echo mysqli_error($connection);
            echo "\nClick Return. Values Updated";
            ?>
            <br>
            <a href="../html/tpdsdashboard.html"><input type="button" value="Return" class="btn btn-primary " /></a>
        </div>

        </div>
             
    </section>
    
        </body>
   
    
        
    </html>