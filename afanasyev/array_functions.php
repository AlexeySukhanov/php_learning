<?php header( 'Content-type: text/html; charset=utf-8' ); ?>

<?php

echo '<h1>Функции для работы с массивами</h1>';

$fruits = array();
$fruits[] = 'Банан';
$fruits[] = 'Яблоко';
$fruits[] = 'Груша';


echo '<h2>foreach() - перебор элементов массива</h2>';

foreach ( $fruits as $key => $fruit ) {
    echo 'Фрукт ' . $key . ' это ' . $fruit . '.<br/>';
}


echo '<h2>count() - количество элементов массива</h2>';
echo 'Количество элементов в массиве $fruits = ' . count( $fruits ) . '.<br/>';

$new_fruits[1][1] = 'Банан';
$new_fruits[1][2] = 'Яблоко';
$new_fruits[1][3] = 'Груша';
$new_fruits[2][1] = 'Картошка';
$new_fruits[2][2] = 'Редиска';
$new_fruits[2][3] = 'Морковка';
$new_fruits[3][1] = 'Молоко';
$new_fruits[3][2] = 'Кефир';
$new_fruits[3][3] = 'Ряженка';
echo '<pre>';
print_r( $fruits );
echo '</pre>';
echo 'Количество элементов в массиве $fruits = ' . count( $fruits, 1 ) . '<br/>';

echo '<h2>in_array() - поверяет присутствует ли в массиве значение</h2>';
if ( in_array( 'Банан', $fruits ) ) {
    echo 'В этом массиве есть Банан<br/>';
}

$old_data = $fruits;


echo '<h2>sort() - сортирует массив по значениям именяя значения ключей</h2>';
print_r( $fruits );
sort($fruits );
echo '<br/>';
print_r( $fruits );

echo '<h2>asort() - сортирует массив по значениям сoхраняя значения ключей</h2>';
$fruits = $old_data;
print_r( $fruits );
asort( $fruits );
echo '<br/>';
print_r( $fruits );

echo '<h2>arsort() - сортирует массив по значениям в обратном порядке сохраняя значения ключей</h2>';
$fruits = $old_data;
print_r($fruits);
arsort( $fruits );
echo '<br/>';
print_r( $fruits );

echo '<h2>array_unique() - убирает повторяющиеся значения из массива</h2>';
$fruits = $old_data;
$fruits[] = 'Банан';
print_r($fruits);
echo '<br>';
$fruits = array_unique( $fruits );
print_r( $fruits );

echo '<h2>implode() - объеденяет элементы массива в строку</h2>';
$fruits = $old_data;
echo $string = implode( '::', $fruits ) . '<br/>';

echo '<h2>explode() - разбивает строку на подстроки</h2>';
print_r( explode( '::', $string ) );

echo '<h2>unset() - удаление элемента массива или переменной</h2>';
$fruits = $old_data;
print_r( $fruits );
echo '<br/>';
unset( $fruits[1] );
print_r( $fruits );

