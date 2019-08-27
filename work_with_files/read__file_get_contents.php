<?php

$file_arr = file( "test2.txt" );

echo "<pre>";
print_r( $file_arr);
echo "</pre>";

echo "<hr>";

echo "<pre>";
var_dump( $file_arr);
echo "</pre>";

echo "<hr>";

$file_string = file_get_contents( "test2.txt" );
echo $file_string;