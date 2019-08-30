<?php
$server     = 'localhost';
$username   = 'root';
$password   = '';
$db_name    = 'museam3';

$mysqli = new mysqli( $server, $username, $password, $db_name);
if ( $mysqli->connect_error ) {
    die( 'Ошибка соединения : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error );
}

echo 'Соединение установлено';


echo '<pre>';
print_r( $mysqli );
echo '</pre>';

mysqli_close( $mysqli );
