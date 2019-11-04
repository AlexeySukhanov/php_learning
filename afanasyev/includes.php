<?php header( 'Content-type: text/html; charset=utf-8' ); ?>

<?php

echo '<h1>Использование вложенных файлов (конструкции включений)</h1>';

echo '<h2>include - включение файлов во время выполнения скрипта</h2>';

include 'include/constants.inc';

$includeFile = 'functions.inc';
include 'include/' . $includeFile;

echo 'Константа MY_INT_CONST из файла constants.inc = ' . MY_INT_CONST . '<br/>';
echo 'Константа MY_STR_CONST из файла constants.inc = ' . MY_STR_CONST . '<br/>';

echo '<br/>';
echo 'Вызов функции makeDrink() из файла functioncs.inc: ' .
        makeDrink( 'Чашечку кофе', true ) .
    '<br/>';

echo '<h2>require - включение файла довыполнения скрипта</h2>';
require 'include/require_html.inc';
require 'include/require_html.inc';

echo '<h2>require_once - включение файла ДО выполнения скрипта и только один раз</h2>';
require_once 'include/require_html.inc';
require_once 'include/require_html.inc';

echo '<h2>include_once - включение файлов во время выполнения скрипта и только один раз</h2>';
include_once 'include/include_html.inc';
include_once 'include/include_html.inc';


