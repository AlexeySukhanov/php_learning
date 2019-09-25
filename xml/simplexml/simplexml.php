<?php

$persons_string = <<<XML
<?xml version="1.0"?>
<collection>
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

echo $persons_string;
echo '<br>';

$persons = simplexml_load_string( $persons_string );
$mail = simplexml_load_file( '../mail.xml' );

//echo "<pre>";
//print_r( $persons );
//echo "</pre>";

echo "<pre>";
print_r( $mail );
echo "</pre>";

