<?php
session_start();

if (isset($_GET['authorize'])){

    $_SESSION['login'] = $_GET['login'];
    $_SESSION['password'] = $_GET['password'];

    if ( $_GET['login'] == 'pit' && $_GET['password'] == '1234' ) {
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

echo '<br><br>session id: ' . session_id();
echo '<pre>';
print_r( $_SESSION );
echo '</pre>';
