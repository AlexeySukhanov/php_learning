<?php

// xml с пространством имен
$languages_string = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<languages
xmlns:dc="http://purl.org/dc/elements/1.1/">
 <lang name="C">
  <appeared>1972</appeared>
  <dc:creator>Dennis Ritchie</dc:creator>
 </lang>
 <lang name="PHP">
  <appeared>1995</appeared>
  <dc:creator>Rasmus Lerdorf</dc:creator>
 </lang>
 <lang name="Java">
  <appeared>1995</appeared>
  <dc:creator>James Gosling</dc:creator>
 </lang>
</languages>
XML;

( $languages = simplexml_load_string( $languages_string ) ) || die( 'Получить даные не удалось' );

echo '<pre>';
print_r( $languages );
echo '</pre>';

echo '<hr>';

// 1 способ получения элементов по пространству имен: непосредственное обращение к URI пространства имен
foreach( $languages as $lang ){
    $lang_name = (string) $lang->children('http://purl.org/dc/elements/1.1/'); // получаем дочерний элемент $languages->lang принадлежащий заданному пространству имен
    echo $lang_name . '<br>';
}

echo '<hr>';

// 2 способ получения элементов по пространству имен( более предпочтительный ): получение URI при помощи функции getNamespaces()
$namespaces = $languages->getNamespaces(true); // Получает массив с адресами пространств имен, где ключи являются префиксами ( например dc )

foreach( $languages as $lang ){
    $lang_name = (string) $lang->children( $namespaces['dc'] ); // получаем дочерний элемент $languages->lang принадлежащий заданному пространству имен
    echo $lang_name . ' - ' . $lang->appeared . ' - ' . $lang['name'] . '<br>';
}
