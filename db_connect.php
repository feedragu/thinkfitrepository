<?php 
  $con =  mysqli_connect("localhost:3306", "root", "test", "thinkfit"); 
    // Check connection
        if (!$con) {
            die();
			header('Location: .index.html');
        } 
echo "Benvenuto!";
mysqli_select_db($con, "thinkfit");
?>