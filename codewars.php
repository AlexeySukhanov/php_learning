<?php

function remove(string $s): string {
    preg_match_all( '/(.*)!$/s', $s, $r);
    return $r[1][0];
}

function people_with_age_drink(int $n): string {
    return 'drink ' . ($n < 21 ? $n < 18 ? $n < 14 ? 'toddy' : 'coke' : 'beer' : 'whisky');
}