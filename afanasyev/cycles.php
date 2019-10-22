<?php header( 'Content-type: text/html;charset=utf-8' ); ?>

<?php
echo '<h1>Циклы</h1>';

echo '<h2>Цикл for</h2>';
for ( $i = 0; $i <= 10; $i++ ) {
    echo '$i = ' . $i . '<br/>';
}

echo '<hr />';

for ( $i = 0; $i <= 10; $i++ ):
    echo '$i = ' . $i . '<br/>';
endfor;

echo '<h2>Цикл while</h2>';
$i = 0;
while ( $i <= 10 ) {
    echo '$i = ' . $i . '<br/>';
    $i++;
}

echo '<h2>Цикл do-while</h2>';
$i = 0;
do {
    echo '$i = ' . $i . '<br/>';
    $i++;
} while ( $i <= 10 );

echo '<h2>Оператор break</h2>';
for ( $i = 0; $i <= 10; $i++ ) {
    echo '$i = ' . $i . '<br/>';
    if ( $i == 5 ) break;
}

echo '<h2>Оператор continue</h2>';
for ( $i = 0; $i <= 10; $i++ ) {
    if ( $i == 5 || $i == 7 ) continue;
    echo '$i = ' . $i . '<br/>';
}





