<?php

$string = '11 aa bb 
00 ccc 22 ddd 777
eee ggg 33';

$pattern = '/^\d\d/m';

preg_match_all( $pattern, $string, $result );

echo '<pre>';
print_r( $result );
echo '</pre>';