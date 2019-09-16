<?php

$content = file_get_contents( 'page.html' );

$pattern = '/<h1>(.*)<\/h1>/m'; // Размещение подвыражения между скобок позволяет получить его отдельно от всей строки поиска
preg_match_all( $pattern, $content, $result );

echo '<pre>';
print_r( $result );
echo '</pre>';