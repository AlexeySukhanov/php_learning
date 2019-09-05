<?php

$filename = "test.txt";
if ( @unlink( $filename ) )  echo "Файл успешно удален";
