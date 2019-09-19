<?php

function remove(string $s): string {
    preg_match_all( '/(.*)!$/s', $s, $r);
    return $r[1][0];
}

