<?php
if(isset($_POST['login']))
    {
        $email=mysqli_real_escape_string($db, $_POST['email']);
        $password=mysqli_real_escape_string($db, $_POST['password']);

        $login="SELECT * FROM 'user' WHERE 'email' = '$email' AND 'password' = '$password' ";

        $run_login = mysqli_query($db, $login) or die(mysqli_error($db));

        $count = mysqli_num_rows($run_login);
        if($count == 1)
        {
            echo "login success";
        }else
        {
            echo "somthing wrong.PLease try again.";
        }
    }

?>