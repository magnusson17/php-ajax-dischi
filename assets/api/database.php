<?php 
require __DIR__ . '/integers.php';

$databaseFilter = [];

if( !empty($_GET['genere']) ) {
    foreach($database as $elem) {
        if( $elem['genre'] == $_GET['genere'] ) {
            $databaseFilter[] = $elem;
        }
    }
} else {
    $databaseFilter = $database;
}

header( 'Content-Type: application/json' );

echo json_encode( $databaseFilter );

?>