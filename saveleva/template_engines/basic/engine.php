<?php

$li_tmpl = file_get_contents( 'template.html' );

$connection = @mysqli_connect( '127.0.0.1', 'root', '', 'template_engine' )
                or die( 'Ошибка при попытке подключения к базе данных' );
$sql = 'SELECT * FROM posts';

$query = $connection->query( $sql ) or die( 'Выполнить запрос к базе данных не удалось, лось' );

while( $row = $query->fetch_assoc() ) {
    $output = $li_tmpl;
    $output = str_replace( '<!title>', $row['title'], $output );
    $output = str_replace( '<!author>', $row['author'], $output );
    $output = str_replace( '<!shorttext>', $row['short_text'], $output );
    $output = str_replace( '<!fulltext>', $row['full_text'], $output );
    echo $output;
}