<?php

include 'xml_source.php';

$xml = new SimpleXMLElement( $xmlstr );

echo '<pre>';
print_r( $xml );
echo '</pre>';

echo (string) $xml->book[0]->success[0]['type']; // Получает значение атрибута type
echo '<br>';
echo (string) $xml->book[0]->success[1]['type']; // Получает значение атрибута type
