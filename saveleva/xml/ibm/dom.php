<?php

/*
 * Пример создания XML документа с помощью DOM
 * Источник: https://www.ibm.com/developerworks/ru/library/x-xmlphp1/index.html
 */

// Инициирует объект DOMDocument для работы с XML
$dom = new DOMDocument('1.0');
$dom->formatOutput = true;

// Создает элементы (экземпляры класса DOMElement)
$books = $dom->createElement('books');
$book = $dom->createElement( 'book' );

// Первый способ создания элемента с текстовым узлом
$title = $dom->createElement( 'title' );
$title_txtnode = $dom->createTextNode( 'PHP for 1 hour' ); // Создает текстовый узел
$title = $title->appendChild( $title_txtnode ); // Добавляет текстовый узел
// Второй способ создания элемента с текстовым узлом
$title = $dom->createElement( 'title', 'PHP for 1 hour' ); // создает элемент и текстовый узел в нём


// Добавление новых элементов в документ
$books = $dom->appendChild( $books ); // Добавление корневого элемента <books>
$book = $books->appendChild( $book ); // Добавление элемента <book> в корневой <books>
$title = $book->appendChild( $title ); // Добавление элемента <title> в элемент <book>


// Получение результатов
$dom->formatOutput = true; // Форматирует получаемые результаты добавляя переводы строк и отступы

$result = $dom->saveXML(); // Сохраняет результат в переменную
$dom->save('test1.xml'); // Сохраняет результат в файл


print_r( $result );
echo '<hr>';

echo '<pre>';
print_r( $dom );
echo '</pre>';