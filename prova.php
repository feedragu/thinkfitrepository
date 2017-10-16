<?php 
   $con = new mysqli("localhost", "root", "" , "my_kenawinadia");
    // Check connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        } 
?>
