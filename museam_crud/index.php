<?php
header('Content-Type: text/html; charset=utf-8');

class Database
{
    public $host;
    public $user;
    public $pass;
    public $db;

    public function __construct( $host, $user, $pass, $db){
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db   = $db;
    }
}


// COMPLETED TODO: Создать класс для работы с бд
// TODO: Попытаться реализовать алгоритм при помощи подготовленных выражений
// TODO: Реализовать подключение  с помощью PDO
// TODO: Вынести конфиги в отдельный файл

$connection = new Database( 'localhost', 'root', '', 'it_museam' );

$mysqli = new mysqli( $connection->host, $connection->user, $connection->pass, $connection->db);
if ( $mysqli->connect_error ) {
    die( 'Ошибка соединения : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error );
}

echo '<h1>Соединение установлено</h1>';

if( $_POST ){
    echo '$_POST active:<br>';

    foreach( $_POST as $key => $row ) {
        echo '<pre>';
        print_r($row);
        echo '</pre>';
        foreach( $row as $id => $value ) {
            $result = $mysqli->query('UPDATE persons SET ' . $key . '="' . $value . '" WHERE id ="' . ($id + 1) .'"');
            if( !$result ) {
                die('Внести изменение в столбец ' . $id . ' не удалось');
            }
        }
    }
}  else echo 'post not active';



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
                    echo '<input type="text" name="first_name[]" value="'. $row['first_name'] .'">';
                echo '</td>';echo 'lol';
                echo '<td>';
                    echo '<input type="text" name="last_name[]" value="' . $row['last_name'] . '">';
                echo '</td>';
                echo '<td>';
                    echo '<textarea name="description[]">' . $row['description'] . '</textarea>';
                echo '</td>';
                echo '<td>';
                    echo '<input type="text" name="citienship[]" value="' . $row['citienship'] . '">';
                echo '</td>';
            echo '</tr>';
        }
        echo '<tr><td colspan="5" style="text-align:right;"><input type="submit" value="Сохранить данные"></td></tr>';
        echo '</tbody></table>';
    echo '</form>';

} else {
    echo 'we have a problem';
}

$result->free();
$mysqli->close();
