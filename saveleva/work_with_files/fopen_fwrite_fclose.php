<?php

$h = fopen( 'test.txt', 'w' );
echo "...Файл открыт на запись";
$text = "Текст для записи в файл";

if( fwrite( $h, $text ) ) echo "<br>...Запись прошла успешно";
else echo "<br>...Произошла ошибка при записи данных в файл";

if( fclose( $h ) ) echo "<br>...Соединение закрыто";
else echo "<br>...Произошла ошибка при попытке закрыть соединение с файлом";

# try 2
$h = fopen( "test.txt", "a" );
echo "<br>...Файл снова открыт на запись";
$addtext = " + новый текст";

if( fwrite( $h, $addtext ) ) echo "<br>...Запись прошла успешно";
else echo "<br>...Произошла ошибка при записи данных в файл";

if( fclose( $h ) ) echo "<br>...Соединение закрыто";
else echo "<br>...Произошла ошибка при попытке закрыть сединение с файлом";