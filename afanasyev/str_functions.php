<?php header( 'Content-type: text/html; charset=utf-8' ); ?>

<?php

echo '<h1>Функции работы со строками</h1>';

echo '<h2>echo</h2>';
echo '1) Текст в одну строку ' . '<br/>';
echo '2) Экранирование символов \'в кавычках\' ' . '<br/>';

$variable = 'переменная';
echo "3) Для того, чтобы в строке интерпретировалось значение переменной,
      берем строку в двойные кавычки - variable = $variable";

echo '<h2>print()</h2>';
print 'print можно использовать без скобок' . '<br/>';
print( 'или со скобками' . '<br/>');

// print_f() - вывод отформатированной строки
printf( 'Какой-то текст<br/>' );
printf( 'Текст с переменной %s и вторая переменная %s.<br/>', '"я первая переменная"', '"я вторая переменная"' );
printf( 'Теперь подствавим число: %d.<br/>', 5 );

echo '<h2>trim() - обрезает пробельные символы с краёв строки</h2>';
$value = '  строка с пробельными символами в начале и конце    ';
echo '!' . $value . '!<br/>';
$value2 = trim( $value );
echo '!' . $value2 . '!<br/>';
// ltrim() -  убирает пробелы в начале строки
// rtrim() - убирает пробелы в конце строки

echo '<h2>mb_substr() получает подстроку из строки по указанной позиции</h2>';
$value = 'Строка русскими буквами';
echo mb_substr( $value, 7, 8, 'utf-8' ) . '<br/>'; // русскими
echo substr( $value, 0, 6  ) . '<br/>'; // Стр - не корректно работает с utf-8

echo '<h2>str_replace() - замена подстроки в строке</h2>';
$value = 'я люблю фрукты';
echo str_replace( 'фрукты', 'овощи', $value ) . '<br/>';

echo '<h2>mb_strtolower() - перевод строки в нижний регистр</h2>';
$value = 'СтРоКа';
$value2 = 'ВТОРАЯ СТРОКА';
echo strtolower( $value ) . ' : '
    . mb_strtolower( $value2 ) . '<br/>';

echo '<h2>mb_strtoupper() - перевод строки в верхний регистр</h2>';
$value = 'СтРоКа';
echo mb_strtoupper( $value ) . '<br/>';

echo '<h2>mb_strlen() - возвращает количество символов в строке</h2>';
$value = 'Строка';
echo strlen( $value ) . '<br/>';
echo mb_strlen( $value, 'utf-8' ) . '<br/>';

echo '<h2>mb_strpos() - возвращает позицию первого символа искомой строки</h2>';
$value = 'Строка строка';
echo mb_strpos( $value, 'ока' ) . '<br/>';
if ( mb_strpos( $value, 'lol' ) === false ) {
    echo 'FALSE<br/>';
}
echo mb_strpos( $value, 'ока', 5, 'utf-8' ) . '<br/>';

echo '<h2>mb_strstr() - находит вхождение искомой подстроки</h2>';
$value = 'Строка строка';
echo mb_strstr( $value, 'ка', true, 'utf-8' ) . '<br/>';
