<?php

require 'libs/Smarty.class.php'; // Подключаем файл с описанием класса

$smarty  = new Smarty(); // Создаём экземпляр класса Smarty

// Указываем местонахождение директорий
$smarty->template_dir = 'smarty_dirs/templates/';
$smarty->compile_dir  = 'smarty_dirs/templates_c/';
$smarty->config_dir   = 'smarty_dirs/configs/';
$smarty->cache_dir    = 'smarty_dirs/cache/';

// config_load() - Загружает конфигурационный файл
$smarty->configLoad('main.conf', 'Customer'); // Вывод глобальных переменных производится с помощью символов # #
// получаем переменые настроек
$host = $smarty->getConfigVars( 'host' );
$db = $smarty->getConfigVars( 'db' );
$user = $smarty->getConfigVars( 'user' );
$pass = $smarty->getConfigVars( 'pass' );