<?php

header('Content-type: text/html; charset=utf-8');

session_name('my_session');
session_start();

echo 'Session name: ' . session_name() . '<br/>';
echo '<pre>';
print_r( $_SESSION );
echo '</pre>';

// Уничтожение сессии
session_destroy();

echo '<pre>';
print_r( $_SESSION );
echo '</pre>';