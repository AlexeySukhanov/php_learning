<?php

header('Content-type: text/html; charset=utf-8');

echo '<h1>Функции для работы с датами</h1>';

echo '<h2>Функция Date() возвращает строку со временем, отформатированную в указанном формате</h2>';
echo '<h3>Информация о текущей дате</h3>';
echo date( 'd.m.Y H:i:s' ) . ' day . month . YEAR HOURS:munutes:seconds<br/>';
echo date( 'd.m.Y h:i:s' ) . ' day . month . YEAR HOURS:munutes:seconds<br/>';
echo date( 'y/m/d H:i' ) . ' year / month / day HOURS:munutes<br/>';

echo '<h2>Функция time() - возвращает количество секунд прощедших с начала эпохи unix (1 января 1970 г.)</h2>';
echo '<h3>Информация об определенной дате</h3>';
$timestamp = time();
echo date('d.m.Y H:i:s', $timestamp) . ' -  текущая дата<br/>';

$nextweek = time() + 7 * 24 * 60 * 60;
echo date('d.m.Y H:i:s', $nextweek) . ' - следующая неделя<br>';

$nexthour = time() + 1 * 60 * 60;
echo date('d.m.Y H:i:s', $nexthour) . ' - следующий час<br>';

$prevhour = time() - 1 * 60 * 60;
echo date('d.m.Y H:i:s', $prevhour) . ' - предыдущий час<br>';

echo '<h2>Функция mktime() - возвращает метку времени Unix, соответствующую переданным аргументам</h2>';
$month = 12;
$day   = 1;
$year  = 2014;
$timestamp = mktime( 0, 0, 0, $month, $day, $year );
echo date( 'd.m.Y', $timestamp ) . '<br/>';

// нулевой день следующего месяца является последним днем предыдущего в функции mktime()
// нулевой день марта = последний день февраля
$lastday = mktime( 0, 0, 0, 3, 0, $year );
echo 'Последний день февраля 2014 года: ' . date( 'd', $lastday ) . '<br/>';

echo '<h2>Функция strtotime() - преобразует тстроку с указанием времени на английском языке в timestamp</h2>';
echo strtotime('now') . ' = ' . time() . '<br/>';

$nextWeek = strtotime('+1 week');
echo date('d.m.Y', $nextWeek) . ' - следующая неделя<br/>';

$prevDay = strtotime( '- 1 day' );
echo date( 'd.m.Y', $prevDay ) . '- предыдущий день<br/>';

$timestamp = strtotime('+ 1 week 2 days 4 hours 2 seconds');
echo date( 'd.m.Y H:i:s', $timestamp ) . ' + 1 неделя 2 дня 4 часа 2 секунды<br/>';

$timestamp = strtotime( '+ 1 month', $timestamp );
echo date( 'd.m.Y H:i:s', $timestamp ) . ' + 1 месяц 1 неделя 2 дня 4 часа 2 секунды<br/>';


echo '<h2>checkdate() - проверка правильности даты по грегорианскому календарю</h2>';
$month = 12;
$day = 1;
$year = 2014;

if( checkdate( $month, $day, $year ) ) {
    echo "Дата верная {$day} {$month} {$year}";
} else {
    echo "Дата не верная {$day} {$month} {$year}";
}

echo '<h3>Пример использования функции checkdate()</h3>';
function getLastDayOfMonth( $year, $month ) {
    for ( $day = 31; $day >= 28; $day-- ) {
        if ( checkdate( $month, $day, $year ) ) {
            return $day;
        }
    }
}
echo 'Последний день февраля 2012 года: ' . getLastDayOfMonth( 2012, 2 ) . '<br/>';
echo 'Последний дент февраля 2013 года: ' . getLastDayOfMonth( 2013, 2 ) . '<br/>';


