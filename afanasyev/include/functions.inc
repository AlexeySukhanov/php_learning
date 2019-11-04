<?php

function makeDrink( $drinkName, $sugarFree = false ) {
    $result = 'Сделать ' . $drinkName;
    if ( $sugarFree ) {
        $result .= ' без сахара';
    } else {
        $result .= ' с сахаром';
    }
    return $result;
}