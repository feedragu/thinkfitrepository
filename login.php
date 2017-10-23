<?php
session_start();

include( "db_connect.php" );


$sql = "SELECT idaccounts, email, password, tipo_account FROM `accounts` WHERE email='" . $_POST[ "email" ] . "' ";

$result = mysqli_query($sql);
$psw_control = "";
$idAcc = "";
if ( mysqli_num_rows( $result ) > 0 )
	while ( $row = mysqli_fetch_row( $result ) ) {
		$psw_control = $row[ 1];
		$idAcc = $row[ 0 ];
		$type = $row[ 'idaccounts' ];
	}

	if ( $psw_control == $_POST[ "psw" ] ) {

		$_SESSION[ "email" ] = $_POST[ "email" ];
		$_SESSION[ "ida" ] = $idAcc;
		$_SESSION[ "tipoAcc" ] = $idAcc;
		echo "<script language=javascript>alert('Benvenuto!')</script>";
		echo "<script>setTimeout(\"location.href = 'calcolo_data.php';\",1);</script>";

		$con->close();
	} else {
		echo "<script language=javascript>alert('Password errata! ')</script>";
		echo "<script>setTimeout(\"location.href = 'calcolo_data.php';\",1);</script>";
		$con->close();
	}

} else {
	echo "<script language=javascript>alert('Username e/o Password errati! ')</script>";
	echo "<script>setTimeout(\"location.href = 'calcolo_data.php';\",1);</script>";
	$con->close();
}


?>