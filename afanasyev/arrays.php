<?php header( 'Content-type: text/html; charset=utf-8' ); ?>
<?php

echo '<h1>Массивы в PHP</h1>';
echo '<h2>Одномерные массивы</h2>';

$fruit_1 = 'Банан';
$fruit_2 = 'Яблоко';
$fruit_3 = 'Груша';

$fruits[1] = 'Банан';
$fruits[2] = 'Яблоко';
$fruits[3] = 'Груша';

for ( $i = 1; $i < 4; $i++ ) {
    echo 'fruits[' . $i . '] = ' . $fruits[$i] . '<br/>';
}

echo '<h2>Двумерные массивы</h2>';

$food[1][1] = 'Банан';
$food[1][2] = 'Яблоко';
$food[1][3] = 'Груша';

$food[2][1] = 'Морковь';
$food[2][2] = 'Редис';
$food[2][3] = 'Баклажан';

$food[3][1] = 'Молоко';
$food[3][2] = 'Кефир';
$food[3][3] = 'Ряженка';

for ( $i = 1; $i < 4; $i++) {
    for ( $j = 1; $j < 4; $j++ ) {
        echo 'food[' . $i . '][' . $j . '] = ' . $food[$i][$j] . '<br/>';
    }
    echo '<br/>';
}

echo '<h2>Ассоциативные массивы</h2>';
unset( $food );
$food['фрукт'] = 'Яблоко';
$food['овощ'] = 'Морковь';
$food['молочный продукт'] = 'Кефир';

foreach ( $food as $key => $value ){
    echo $value . ' это ' . $key .  '.<br/>';
}

echo '<h2>Инициализация массивов</h2>';
$fruits = array();
$fruits[] = 'Банан';
$fruits[] = 'Яблоко';
$fruits[] = 'Груша';
echo '<pre>';
print_r( $fruits );
echo '</pre>';

$fruits = array(
    1 => 'Банан',
    2 => 'Яблоко',
    3 => 'Груша'
);
echo '<pre>';
print_r( $fruits );
echo '</pre>';