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
) ); // Присваивание значений в виде массива


// append() - Присоеденяет значение переменной к указанному массиву, если первым аргументом указаны строка, то эта переменная преобразуетсяв массив
$smarty->append( 'index', '123654' );

// config_load() - Загружает конфигурационный файл
$smarty->configLoad('main.conf', 'Customer'); // Вывод глобальных переменных производится с помощью символов

// fetch() - Получает обработанный шаблон
$page = $smarty->fetch( 'index.tpl' );

// display() - Отображает обработанный шаблон
$smarty->display( 'index.tpl' );


