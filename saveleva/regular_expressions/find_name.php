<?php

$string = "Эта строка посвещена Иванову И. И. ";
$pattern = '/\s[А-Я][а-я]*\s[А-Я]\.\s[А-Я]\.\s*$/um';

$sum = preg_match( $pattern, $string, $result );

echo '<pre>';
echo trim( $result[0] );
echo '</pre>';
