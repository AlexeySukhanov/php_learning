<?php

$letters = @readfile( "test.txt" );

echo "<hr>";

if( !$letters ):
    echo "error in readfile.";
else: echo $letters;
endif;
