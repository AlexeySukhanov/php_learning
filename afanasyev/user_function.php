<?php header( 'Content-type: text/html; charset=utf-8' );?>

<?php

echo '<h1>Пользовательские функции</h1>';


echo '<h2>Создание функций</h2>';

function myFunction() {
    return 'Результат работы функции myFucntion()</br>';
}
echo myFunction();

function mySquare( $intValue ) {
    return $intValue * $intValue;
}
echo mySquare( 3 ) . '<br/>';


echo '<h2>Создание функции с двумя или более аргументами</h2>';

function myConcat( $str1, $str2 ) {
    return $str1 . ' ' . $str2;
}
echo myConcat( 'Вагон', 'Диванов' ) . '<br/>';

function myDivision( $val1, $val2 ) {
    $val1 = intval( $val1 );
    $val2 = intval( $val2 );

    if( $val2 == 0 ) {
        return 'Деление на ноль!';
    }

    $result = $val1 / $val2;
    return $result;
}
echo myDivision( 24, 6 ) . '<br/>';

echo '<h2>Значение аргумента по умолчанию</h2>';
function makeDrink( $drinkName, $sugarFree = false ) {
    $result = 'Сделать ' . $drinkName;
    if ( $sugarFree ) {
        $result .= ' без сахара';
    } else {
        $result .= ' с сахаром';
    }
    return $result;
}
echo makeDrink( 'водку' ) . '<br/>';
echo makeDrink( 'бублик', true ) . '<br/>';

echo '<h2>Передача аргументов по значению и по ссылке</h2>';
function dontChangeArgument( $val ) {
    $val = $val + 1;
    return $val;
}
$value = 5;
$result = dontChangeArgument( $value );
echo '$value = ' . $value . ' $result = ' . $result . '<br/>';

function changeValue( &$val ) {
    $val = $val + 1;
    return $val;
}
$value = 5;
$result = changeValue( $value );
echo '$value = ' . $value . ' $result = ' . $result . '<br/>';

echo '<h2>Области видимости</h2>';
$outsideVar = 5;
function scope() {
    $scopeVar = 10;
    echo '$outsideVar = ' . $outsideVar . '<br/>';
    global $outsideVar;
    $outsideVar = 3;
    echo '$outsideVar = ' . $outsideVar . '<br/>';
}
scope();
echo $outsideVar . '<br/>';

