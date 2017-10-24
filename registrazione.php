<?php
session_start(); // deve essere la prima cosa nella pagina, aprire la sessione
include("db_connect.php");

//algoritmo generazione codice univoco
function random_str($length, $keyspace = '0123456789')
{
    $str = '';
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $str .= $keyspace[random_int(0, $max)];
    }
    return $str;
}

if ( $_POST[ "psw" ] != "" && $_POST[ "email" ] != "" ) { 
	$query_registrazione = mysqli_query($con, "INSERT INTO accounts (idaccounts, email, password, tipo_account)
VALUES ('".random_str(11)."','" . $_POST[ "email" ] . "','" . $_POST[ "psw" ] . "','U')" ) 
	or die( "query di registrazione non riuscita" . mysqli_error() ); 
} else {
	header( 'location:index.php' ); /
}
if ( isset( $query_registrazione ) ) { 
	$_SESSION[ "logged" ] = true; 
	header( "location:index.php" );
} else {
	echo "non ti sei registrato con successo"; 
}
echo "culo";
?>