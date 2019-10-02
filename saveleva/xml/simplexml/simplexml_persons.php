<?php

$persons_string = <<<XML
<?xml version="1.0"?>
<collection type="persons list">
    <person id="10">
        <name>
            <first>Nick</first>
            <last>Petrov</last>
        </name>
        <birth>
            <day>23</day>
            <month>12</month>
            <year>1989</year>
        </birth>
        <email>nick@dcp.ru</email>
    </person>
    <person id="20">
        <name>
            <first>Bob</first>
            <last>Ivanov</last>
        </name>
        <birth>
            <day>03</day>
            <month>05</month>
            <year>1990</year>
        </birth>
        <email>bo@dcp.ru</email>
    </person>
    <person id="30">
        <name>
            <first>Alesha</first>
            <last>Puchnin</last>
        </name>
        <birth>
            <day>12</day>
            <month>03</month>
            <year>1978</year>
        </birth>
        <email>puchnin@dcp.ru</email>
    </person>
</collection>
XML;

//$mail = simplexml_load_file( '../mail.xml' ); // Взять данные из файла

( $persons = @simplexml_load_string( $persons_string ) ) || die('Получить данные не удалось');  // Взять данные из строки

echo 'Количество элементов в коллекции: ' . $count = $persons->count() . '<br>';
echo 'Имя корневого элемента: ' . $root =  $persons->getName() . '<br>';
echo 'Значение атрибута корневого элемента: ' . $root_attr_value = $persons->attributes() . '<br>';

echo '<hr><hr>';

echo '<h2>Выборка целиком:</h2>';
echo "<pre>";
print_r( $persons );
echo "</pre>";

echo '<hr><hr>';

echo '<h2>Перебор каждого элемента коллекции:</h2>';
foreach( $persons as $person ) {
    $current_person = array(); // Массив для результирующего вывода
    $current_person['id'] =  (string) $person->attributes()['id']; // Получение атрибута, альтернативный способ: $person['id']
    $current_person['fio'] = implode(' ', (array) $person->name); // Получение и склейка значений тегов
    $current_person['birth'] = implode( '.', (array) $person->birth );
    $current_person['email'] = (string) $person->email;

    echo '<pre>';
    print_r( $current_person );
    echo '</pre>';

    // Поиск нужного элемента:
    if( $current_person['fio'] == 'Bob Ivanov' ) {
        echo 'Здравствуйте, Bob! Ваш email ' . $current_person['email'] . '.';
    }
    echo '<hr>';
}





