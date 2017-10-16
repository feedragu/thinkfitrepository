<?php 
   $con = new mysqli("89.46.111.27", "", "177p047266" , "Sql1006791_4");
    // Check connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
			header('Location: .index.html');
        } 
?>
