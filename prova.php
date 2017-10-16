<?php 
   $con =mysqli_connect("89.46.111.27", "Sql1006791", "177p047266" , "Sql1006791_4"); 
    // Check connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
			header('Location: .index.html');
        } 
?>  
