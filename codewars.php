<?php

function dnaToRna($str) {
    for ( $n = 0; n < strlen($str); $n++ ) {
        $str[$n] = $str[$n] == 'T' ? 'U' : $str[$n];
    }
    return $str;
}

echo dnaToRna('TUTUT');
