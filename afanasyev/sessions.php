<?php
header( 'Content-type: text/html; charset=utf-8' );


session_name('my_session');

// Инициализация сессии
session_start();


echo '<h1>Сессии передача данных между страницами сайта</h1>';

$_SESSION['string'] = 'some string';
$_SESSION['integer'] = 5;

$arr = array( 1, 2, 3 );
$_SESSION['arr'] = $arr;

echo '<pre>';
print_r( $_SESSION );
echo '</pre>';

// Счётчик

if ( !isset( $_SESSION['counter'] ) ) $_SESSION['counter'] = 0;
echo 'Страница обновлена ' . $_SESSION['counter']++ . ' раз.<br/>';
echo '<a href="sessions.php">обновить</a><br/>';

echo 'Имя сессии: ' . session_name() . ' <br/>';
echo 'ID сессии: ' . session_id() . ' <br/><br/>';

echo '<a href="sessions2.php">sessions2.php</a>';