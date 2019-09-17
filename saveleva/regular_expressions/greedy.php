<?php
$string = '
<dIv id="1">Привет</dIv>
<p>Текст не заключенный в тег div</p>
<div id="2">Пока</div>
';

echo $string;

$pattern_greedy = '/<div.*\/div/si'; // модификатор s включает в выборку . пробелы и табуляцию, модификатор i делает паттерн регистронезависимым
$pattern_lazy = '/<div.*?\/div>/si'; // Знак вопроса здесь отменяет "жадность" квантификатора
preg_match_all( $pattern_greedy, $string, $result_greedy );
preg_match_all( $pattern_lazy, $string, $result_lazy );

echo '<h2>Жадный квантификатор:</h2>';
echo '<pre>';
print_r( $result_greedy );
echo '</pre>';

echo '<h2>Ленивый квантификатор:</h2>';
echo '<pre>';
print_r( $result_lazy );
echo '</pre>';
