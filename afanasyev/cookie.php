<?php

header( 'Content-type: text/html; charset=utf-8' );

echo '<h1>Cookie - текстовые файлы создаваемые сайтом и хранимые на компьютере пользователя</h1>';

function getCookie($cookie_name) {
    if( isset( $_COOKIE[$cookie_name] ) ) {
        return $_COOKIE[$cookie_name];
    } else {
        return false;
    }
}

// установка Cookies
$int_value = 1;
//setcookie( 'my_cookie1', $int_value );

// Установка Cookies со сроком действия в один час
$str_value = 'Строковое значение';
setcookie( 'my_cookie2', $str_value, time() + 360 );

// Установка Cookies с указанием пути по которому она будет доступна
setcookie( 'my_cookie3', 'cookie3', time() + 360, '/' );

// Удаление Cookies
setcookie( 'my_cookie1', '', time() - 1 );
setcookie( 'my_cookie2', '', time() - 1 );
//// Если Cookie были установлены с указанием пути, то при удалении его так же нужно установить
setcookie( 'my_cookie3', '', time() - 1, '/' );

// Чтение Cookie
echo getCookie('my_cookie1') . '<br/>';
echo getCookie('my_cookie2') . '<br/>';
echo getCookie('my_cookie3') . '<br/>';




