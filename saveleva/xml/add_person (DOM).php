<?php

$dom = new DOMDocument();

$dom->load( 'persons.xml' );

$persons_list = $dom->getElementsByTagName( 'person' ); // Получает список потомков
$first_person = $persons_list[0];

// !Важно отличать объект документа и объект корневого элемента добавление новых элементов происходит именно в корень
$parent = $first_person->parentNode;

$new_person = $first_person->cloneNode( true ); // Клонирует заданый элемент c потомками ( true )
$attr = $new_person->setAttribute( 'id', 40 ); // Изменяет значение атрибута id
$parent->appendChild( $new_person ); // Добавляет новый элемент <person> в родительский <persons>

echo '<pre>';
print_r( $parent );
echo '</pre>';

$dom->formatOutput = true;

print_r( $dom->saveXML() );