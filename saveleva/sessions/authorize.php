<?php
session_start();

$connection = mysqli_connect('localhost', 'root', '', 'it_museam');
$server_root =  'http://php-learning.loc/php_learning/saveleva/sessions/';
echo "<h1>" . $server_root . "</h1>";

if ( preg_match("#^$server_root#", $_SERVER['HTTP_REFERER']) ) { // Проверка на то что страница запроса принадлежит к данному хосту
    if (isset($_GET['authorize'])){

        $sql = "SELECT login FROM users WHERE login ='" . $_GET['login'] . "'  AND password='" . $_GET['password'] . "'";
        $query = mysqli_query( $connection, $sql );
        $num_rows = mysqli_num_rows( $query );

        if( $num_rows !== 0 ) {
                $_SESSION['login'] = $_GET['login'];
                $_SESSION['password'] = $_GET['password'];

                header( 'Location: secret_info.php' );
        } else {
            echo 'Неверный ввод логина или параля, попробуйте еще раз.';
        }
    }

    echo '
        <form action="' . $_SERVER['PHP_SELF'] . '">
        Логин: <input type="test" name="login"><br>
        Пароль: <input type="password" name="password"><br>
        <input type="submit" name="authorize" value="Войти на секретную страницу">
    ';

//    echo '<br><br>session id: ' . session_id();
//    echo '<pre>';
//    print_r( $_SESSION );
//    echo '</pre>';
//
//    echo $_SERVER['HTTP_REFERER'];


}

