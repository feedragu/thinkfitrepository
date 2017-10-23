<?php

//algoritmo generazione codice

function random_str($length, $keyspace = '0123456789')
{
    $str = '';
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $str .= $keyspace[random_int(0, $max)];
    }
    return $str;
}

$con = mysqli_connect( "localhost:3306", "root", "test", "thinkfit" );
// Check connection
if ( !$con ) {
	die();
	header( 'Location: .index.html' );
}
echo "Benvenuto!";
mysqli_select_db( $con, "thinkfit" );
$result = mysqli_query( $con, "SELECT nome, cognome FROM users" );

if ( mysqli_num_rows( $result ) > 0 )
	while ( $row = mysqli_fetch_row( $result ) ) {
		echo "Benvenuto " . $row[ 0 ] . " " . $row[ 1 ];
	}
echo "\n";

//test codice
for ( $i = 0; $i < 1000; $i++ ) {
	$value = random_str( 11 );
	echo $value . "\n";
}

?>