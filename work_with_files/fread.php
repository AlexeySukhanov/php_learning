<?php


$h = fopen( "test2.txt", "a" );

$first_text = "first text \n";

if ( fwrite( $h, $first_text ) ) echo "Текст успешно записан";
else "Ошибка при попытки записи в файл.";

echo "<br>" . filesize("test2.txt");


fclose( $h );
$h = fopen( "test2.txt", "r");
$content = fread( $h, filesize("test2.txt") );

echo "<br><hr>";
echo "Записанный текст в файл:<br>";
echo $content;

fclose( $h );




