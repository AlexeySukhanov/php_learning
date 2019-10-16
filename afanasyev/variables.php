<?php header('Content-type: text/html; charset=utf-8'); ?>

<?php

echo '<h1>Типы переменных - variables.php</h1>';

//> Типы переменных

$integerVariable = 10; // целое число
$doubleVariable = 20.5; // вещественное число
$stringVariable = 'стороковая переменная'; // строка
$booleanVariable = true; // логическое значение
$nullVariable = null; // специальное значение NULL
$arrayVariable = array(); // массив
$objectLinkVariable = new stdClass(); // ссылка на объект
$resourceLinkVariable = imagecreate( 100, 100 ); // ссылка на ресурс

echo '$integerVariable = ' . $integerVariable . '<br/>';
echo '$doubleVariable = ' . $doubleVariable . '<br/>';
echo '$stringVariable = ' . $stringVariable . '<br/>';
echo '$booleanVariable ' . $booleanVariable . '<br/>';
echo '$nullVariable = ' . $nullVariable . '<br/>';
echo '$arrayVariable = ' . $arrayVariable . '<br/>';

//> Действия с переменными

    //> Проверка на существование
    echo '<h2>Проверка на существование - isset()</h2>';
    echo 'Проверка существования переменной $integerVariable; isset($integerVariable) = '
        . isset( $integerVariable ) . '<br/>';
    echo 'Проверка существования переменной $integerVariable2; isset($integerVariable2) = '
        . isset( $integerVariable2 ) . '<br/>';

    //> Уничтожение переменных
    echo '<h2>Уничтожение переменных - unset()</h2>';
    unset( $integerVariable );
    echo 'Уничтожение переменной $integerVariable: unset($integerVariable)...<br/>';
    echo 'Проверка существования переменной $integerVariable; isset($integerVariable) = '
    . isset( $integerVariable ) . '<br/>';

    //> Определение типа переменной
    echo '<h2>Определение типа переменной</h2>';
    $integerVariable = 10;
    if ( is_integer($integerVariable ) ) {
        echo '$integerVariable - целое число.<br/>';
    } else {
        echo '$integerVariable не является целым числом.<br/>';
    }

    if ( is_bool( $booleanVariable ) ) {
        echo '$booleanVariable имеет тип boolean.<br/>';
    } else {
        echo '$booleanVariable не является boolean.<br/>';
    }
    echo 'Переменая $arrayVariable имеет тип ' . gettype( $arrayVariable ) . '.<br/>';

    //> Преобразование типов переменных
    echo '<h2>Преобразование типов переменных</h2>';
    $newVariable = (string) $integerVariable;
    echo 'Переменная $newVariable изменила тип на ' . gettype( $newVariable ) . '.<br/>';

    //> Константы
    echo '<h2>Константы</h2>';
    define('MY_INTEGER_CONST', 100);
    echo 'Константа MY_INTEGER_CONST = ' . MY_INTEGER_CONST . '.<br/>';
    define('MY_STRING_CONST', 'строка');
    echo 'Константа MY_STRING_CONST = ' . MY_STRING_CONST . '.<br/>';

    //> Математические операции
    echo '<h2>Математические операции</h2>';
    $var = 10 + 10; // 20
    $var2 = 10 / 2; // 5
    $var3 = $var * 2 - $var2; // 35

    echo $var . '<br/>';
    echo $var2 . '<br/>';
    echo $var3 . '<br/>';

    $var = 'строка';
    $var2 = 'вторая строка';
    $var3 = $var . ' :: ' .$var2;
    echo $var . '<br/>';
    echo $var2 . '<br/>';
    echo $var3 . '<br/>';

