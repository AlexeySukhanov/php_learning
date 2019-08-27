<?php

$h = fopen( "test2.txt", "r");

while( !feof( $h ) ):
    $symbol = fgetc( $h );
    echo $symbol . "<br>";
endwhile;

fclose( $h );