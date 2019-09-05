<?php

echo "<pre>";
    print_r($_FILES);
echo "</pre>";
echo "<hr>";

if ( file_exists( $_FILES['myfile']['tmp_name'] ) ) {
    echo "Файл <b>" . $_FILES['myfile']['tmp_name'] . "</b> существует";
    if ( move_uploaded_file( $_FILES['myfile']['tmp_name'], 'uploaded' ) ) echo "<br>Файл успешно перемещен";
    else echo "<br>Возникла ошибка при попытки перемещения файла";
} else {
    echo "<br>Файла <b>" . $_FILES['myfile']['tmp_name'] . "</b> не существует";
}


