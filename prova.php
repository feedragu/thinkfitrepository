<?php 
  $con =  mysqli_connect("localhost:3306", "root", "test" , "thinkfit"); 
    // Check connection
        if (!$con) {
            die();
			header('Location: .index.html');
        } 
echo "Benvenuto!";
mysqli_select_db($con, "thinkfit");
$result = mysqli_query($con, "SELECT * FROM prova");

if(mysqli_num_rows($result)>0)
	while($row=mysqli_fetch_row($result))
		echo $row[0];
echo "Benvenuto!";
?>  
