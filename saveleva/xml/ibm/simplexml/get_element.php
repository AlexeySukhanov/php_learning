<?php

include 'xml_source.php';

$xml = new SimpleXMLElement( $xmlstr ); // Создает новый объект SimpleXML

echo '<pre>';
print_r( $xml );
echo '</pre>';

echo $xml->book[0]->plot; // Получает содержимое элемента <plot>

