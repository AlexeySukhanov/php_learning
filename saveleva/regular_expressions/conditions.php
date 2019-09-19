<?php

//$string = 'qwer (dssf) sfdsfdsf (fdfdfdf) jyjyjyj';
//$pattern = '/(\()[^()]+(?(1)\))/';

$string = 'qwerty 44-gre-21 22-22-22  65-wsd-98 76-56-00';
$pattern = '/ (?(?=\d{2}) \d{2}-[a-z]{3}-\d{2} | \d{2}-\d{2}-d\{2} )/x'; // Условные подвыражения. х - игнорирует пробелы

preg_match_all( $pattern, $string, $result );

echo '<pre>';
print_r( $result );
echo '</pre>';
