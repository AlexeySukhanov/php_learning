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

echo '<h1>Соединение установлено</h1>';

//$mysqli->query('SET NAMES utf8');
if( $result = $mysqli->query('SELECT *  FROM  persons' ) ) {

    echo '<form method="post" action="' . $_SERVER['PHP_SELF'] . '">  ';

        echo '<table border="1"><tbody>';
        echo '<tr>';
            echo '<td><b>ID</b></td>';
            echo '<td><b>FIRST_NAME</b></td>';
            echo '<td><b>LAST_NAME</b></td>';
            echo '<td><b>DESCRIPTION</b></td>';
            echo '<td><b>CITIENSHIP</b></td>';
        echo '</tr>';
        while( $row = $result->fetch_assoc()) {
            echo '<tr>';
                echo '<td>';
                    echo '<b>' . $row['id'] .'</b>';
                echo '</td>';
                echo '<td>';
                    echo '<input type="text" name="first_name' . $row['id'] . '" value="'. $row['first_name'] .'">';
                echo '</td>';
                echo '<td>';
                    echo '<input type="text" name="last_name' . $row['id'] . '" value="' . $row['last_name'] . '">';
                echo '</td>';
                echo '<td>';
                    echo '<textarea name="description' . $row['id'] . '">' . $row['description'] . '</textarea>';
                echo '</td>';
                echo '<td>';
                    echo '<input type="text" name="citienship" value="' . $row['citienship'] . '">';
                echo '</td>';
            echo '</tr>';
        }
        echo '<tr><td colspan="5" style="text-align:right;"><input type="submit" value="Сохранить данные"></td></tr>';
        echo '</tbody></table>';
    echo '</form>';

} else {
    echo 'we have a problem';
}

if( $_POST ){
    echo 'post active:<br>';
    echo '<pre>';
        print_r($_POST);
    echo '</pre>';
}  else echo 'post not active';

$result->free();
$mysqli->close();
