<?php header( 'Content-type: text/html; charset=utf-8' ); ?>

<?php

//> Условные операторы в PHP
echo '<h1>Условные операторы в PHP</h1>';

//> Условный оператор IF
echo '<h2>Условный оператор IF</h2>';

$var = 15;
if ( $var > 10 ) {
    echo 'Переменная $var > 10<br/>';
}

$var2 = 5;
if ( $var2 > 10 ) {
    echo 'Этот код не выволнится';
}

$var3 = 3;
if ( $var3 > 10 ) {
    echo 'Переменная $var3 > 10<br/>';
} else {
    echo 'Переменная $var3 <= 10<br/>';
}

$var4 = 20;
if ( $var4 >=20 && $var4 < 30 ) {
    echo 'Переменная $var4 ( значение = ' . $var4 . ' ) больше или равна 20 и меньше 30<br/>';
}

//> Оператор выбора SWITCH
echo '<h2>Оператор выбора SWITCH</h2>';

$swValue = 5;
switch ( $swValue ) {
    case 5:
        echo '$swValue = 5<br/>';
        break;
    case 7:
    case 8:
        echo '$swValue = 7 или $swValue = 8<br/>';
        break;
    default:
        echo 'Значение $swValue не соответствует ни одному из предложенных<br/>';
}

