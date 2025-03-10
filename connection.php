<?php
        
        $username = "root";
        $password = "";
        $servername = 'localhost';
        $database = "signup";

        $con = mysqli_connect($servername , $username , $password);
        $db = mysqli_select_db($con , $database);

        if($con)
        {
                echo "Connected";
        }
        ?>
                <?php
       


?>