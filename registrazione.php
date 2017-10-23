<?php
session_start(); // dive essere la prima cosa nella pagina, aprire la sessione
include("db_connect.php");
function random_str($length, $keyspace = '0123456789')
{
    $str = '';
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $str .= $keyspace[random_int(0, $max)];
    }
    return $str;
}

if ( $_POST[ "psw" ] != "" && $_POST[ "email" ] != "" ) { // se i parametri iscritto non sono vuoti non sono vuote
	$query_registrazione = mysqli_query($con, "INSERT INTO accounts (idaccounts, email, password, tipo_account)
VALUES ('".random_str(11)."','" . $_POST[ "email" ] . "','" . $_POST[ "psw" ] . "','U')" ) // scrivo sul DB questi valori
	or die( "query di registrazione non riuscita" . mysqli_error() ); // se la query fallisce mostrami questo errore
} else {
	header( 'location:index.php' ); // se le prime condizioni non vanno bene entra in questo ramo else
}
if ( isset( $query_registrazione ) ) { //se la reg è andata a buon fine
	$_SESSION[ "logged" ] = true; //restituisci vero alla chiave logged in SESSION
	header( "location:index.php" );
} else {
	echo "non ti sei registrato con successo"; // altrimenti esce scritta a video questa stringa
}
echo "culo";
?>