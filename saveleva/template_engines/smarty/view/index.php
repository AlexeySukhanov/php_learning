<?php

require 'libs/Smarty.class.php'; // Подключаем файл с описанием класса

$smarty  = new Smarty(); // Создаём экземпляр класса Smarty

// Указываем местонахождение директорий
$smarty->template_dir = 'smarty_dirs/templates/';
$smarty->compile_dir  = 'smarty_dirs/templates_c/';
$smarty->config_dir   = 'smarty_dirs/configs/';
$smarty->cache_dir    = 'smarty_dirs/cache/';


// assign() - присвоение значений переменным
$smarty->assign( 'name', 'Нина' ); // Присваиваем переменной значение "Нина"

$index = '876123';
$smarty->assign( 'index', $index ); // Присваеваем переменной smarty значение переменной PHP

$smarty->assign( array(
    'city' => 'Пирогова',
    'street' => 'Новосибирск'
) );




$smarty->display( 'index.tpl' ); // Выводим обработанный шаблон
