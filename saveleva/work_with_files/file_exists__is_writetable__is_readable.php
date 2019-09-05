<?php

$filename = "test.txt";
if ( file_exists( $filename ) ) {
    echo "Файл <b>$filename</b> существует";
} else {
    echo "Файл <b>$filename</b> НЕ сущусвует";
}

echo "<hr>";

if ( is_writable( $filename ) ) {
    echo "Файл <b>$filename</b> доступен для записи";
} else {
    echo "Файл <b>$filename</b> НЕ доступен для записи";
}

echo "<hr>";

if ( is_readable( $filename ) ) {
    echo "Файл <b>$filename</b> доступен для чтения";
} else {
    echo "Файл <b>$filename</b> НЕ доступен для записи";
}