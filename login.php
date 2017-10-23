<?php
session_start();

$con = mysqli_connect( "localhost:3306", "root", "test", "thinkfit" );
// Check connection
if ( !$con ) {
	die();
	header( 'Location: .index.html' );
}

mysqli_select_db( $con, "thinkfit" );

$sql = "SELECT idaccounts, email, password, tipo_account FROM `accounts` WHERE email='" . $_POST[ "email" ] . "' ";

$result = mysqli_query( $con, $sql );
$psw_control = "";
$idAcc = "";
if ( mysqli_num_rows( $result ) > 0 ) {
	while ( $row = mysqli_fetch_row( $result ) ) {
		$psw_control = $row[ 2 ];
		$idAcc = $row[ 0 ];
		$type = $row[ 3 ];
	}

	if ( $psw_control == $_POST[ "psw" ] ) {

		$_SESSION[ "email" ] = $_POST[ "email" ];
		$_SESSION[ "ida" ] = $idAcc;
		$_SESSION[ "tipoAcc" ] = $type;
		
		echo "<script language=javascript>alert('Benvenuto!')</script>";
		echo "<script>setTimeout(\"location.href = 'index.php';\",1);</script>";

		mysqli_close( $con );
		
	} else {
		echo "<script language=javascript>alert('".$psw_control."')</script>";
		echo "<script>setTimeout(\"location.href = 'index.php';\",1);</script>";
		
		mysqli_close( $con );
		
	}


} else {
	echo "<script language=javascript>alert('Username e/o Password errati! ')</script>";
	echo "<script>setTimeout(\"location.href = 'calcolo_data.php';\",1);</script>";
	mysqli_close( $con );
}



?>