<?php 
  $con =  mysqli_connect("localhost:3306", "root", "test" , "thinkfit"); 
    // Check connection
        if (!$con) {
            die();
			header('Location: .index.html');
        } 
echo "Benvenuto!";
mysqli_select_db($con, "thinkfit");
$result = mysqli_query($con, "SELECT nome, cognome FROM users");

if(mysqli_num_rows($result)>0)
	while($row=mysqli_fetch_row($result))
		echo "Benvenuto ".$row[0]." ".$row[1];

?>  
