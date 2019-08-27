<?php

$h = fopen( "test2.txt", "r" );

while ( !feof( $h ) ): // Проверяет достиг ли указатель конца файла
    $string = fgets( $h );
    echo $string . "<br>";
endwhile;

fclose( $h );