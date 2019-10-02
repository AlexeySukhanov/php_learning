<?php

/*
 * Импорт DOM в SimpleXML
 * Источник: https://www.ibm.com/developerworks/ru/library/x-xmlphp1/index.html
 */

$dom = new DOMDocument();

// Загрузка в документ элементов в формате строки
$dom->loadXML( '<books><book><title>Great American Novel</title></book></books>' ) or die( 'Ошибка при чтении документа' );

// Берет узел DOM документа и перделывает его в узел SimpleXML
$simplexml_doc = simplexml_import_dom( $dom );

echo $simplexml_doc->book[0]->title; // Great American Novel

echo '<pre>';
print_r( $simplexml_doc );
echo '</pre>';
