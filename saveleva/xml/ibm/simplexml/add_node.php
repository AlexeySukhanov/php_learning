<?php

include 'xml_source.php';

$xml = new SimpleXMLElement( $xmlstr );

$character = $xml->book[0]->characters->addChild('character'); // Добавляет в элемент <characters> новый элемент <character>

// Добавляет в новый элемент <character> элементы <name> и <desc> c содержимым
$character->addChild('name', 'Yellow Cat' );
$character->addChild( 'desc', 'aloof' );


$success = $xml->book[0]->addChild('success', 1 ); // Добавляет новый элемент <success> в первый элемент <books>
$success->addAttribute( 'type', 'reprints' ); // Добавляет атрибут type со значением reprints в элемент <success>

echo $xml->asXML(); // Возвращает сформированный XML-документ в виде строки
