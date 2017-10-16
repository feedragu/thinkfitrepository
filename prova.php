<?php 
   $con = mysqli_connect("89.46.111.27", "Sql1006791", "177p047266" , "Sql1006791_4"); 
    // Check connection
        if (!$con) {
            die();
			header('Location: .index.html');
        } 
?>  
