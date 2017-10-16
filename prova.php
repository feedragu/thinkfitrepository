<?php 
  $con =  mysqli_connect("188.216.29.244", "root", "" , "thinkfit"); 
    // Check connection
        if (!$con) {
            die();
			header('Location: .index.html');
        } 
echo "Benvenuto!";
mysqli_select_db($con, "thinkfit");
$result = mysqli_query($con, "SELECT * FROM users WHERE nome = 'Federico'");
if(mysqli_num_rows($result)>0)
	while($row=mysqli_fetch_row($result))
		echo $row[1];
?>  
