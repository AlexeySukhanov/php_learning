<?php
/*
 * Импорт SimpleXML в DOM
 * Источник: https://www.ibm.com/developerworks/ru/library/x-xmlphp1/index.html
 */

$sxe = @simplexml_load_string( '<books><book><title>Great American Novel</title></book></books>' ) or die( 'Ошибка при разборе документа' );

// Импортирует узел SimpleXML в узел DOMElement
$dom_sxe = @dom_import_simplexml( $sxe ) or die( 'Ошибка при попытке импорта XML' );

// Создаёт документ
$dom = new DOMDocument( '1.0' );

// Создает копию узла связанную с указанным документом
$dom_sxe = $dom->importNode( $dom_sxe, true );

// Размещает узел в документе
$books = $dom->appendChild( $dom_sxe );

// Форматирует вывод
$dom->formatOutput = true;

// Сохраняет результат в строку
$result = $dom->saveXML();


print_r( $result );



