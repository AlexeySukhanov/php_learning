<?php

$string = file_get_contents('source.html');
echo $string;
$pattern = "/<(!|\/|\w)(\w*||\w*\s*\S+)(\s*>|>)/m"; // Выбрать все теги без контента


$count = preg_match_all( $pattern, $string, $result );

for( $i = 0 ; $i < $count; $i++ ){
    echo htmlspecialchars( $result[0][$i]) . '<br>';
}

//echo '<pre>';
//print_r( $result );
//echo '</pre>';