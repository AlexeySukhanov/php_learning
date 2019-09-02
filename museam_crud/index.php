<?php
header('Content-Type: text/html; charset=utf-8');

$server     = 'localhost';
$username   = 'root';
$password   = '';
$db_name    = 'it_museam';

$mysqli = new mysqli( $server, $username, $password, $db_name);
if ( $mysqli->connect_error ) {
    die( 'Ошибка соединения : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error );
}

echo 'Соединение установлено';
//echo '<pre>';
//print_r( $mysqli );
//echo '</pre>';

//$mysqli->query('SET NAMES utf8');
if( $tables_list = $mysqli->query('SELECT *  FROM  persons' ) ) {

    while( $row = $tables_list->fetch_assoc()) {
        echo '<pre>';
        print_r( $row );
        echo '</pre>';
    }
} else {
    echo 'we have a problem';
}


$mysqli->close();
