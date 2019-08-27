<?php

function oddCount($n) {
    $result = array();
    $i = 1;
    while( $i < $n ){
        if( $i % 2 !== 0 ) $result[] = $i;
        $i++;
    }
    return $result;

}

$arr = oddCount(17);

echo '<pre>';
var_dump( $arr );
echo '</pre>';
