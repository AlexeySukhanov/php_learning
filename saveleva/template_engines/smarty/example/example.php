<?php
define( 'SMARTY_DIR', '/home/user/Work/domains/php-learning.loc/php_learning/saveleva/template_engines/smarty/example/libs/' );
require( SMARTY_DIR . 'Smarty.class.php' );
$smarty = new Smarty;

$smarty->template_dir = 'smarty_dirs/templates/';
$smarty->compile_dir = 'smarty_dirs/templates_c/';
$smarty->config_dir = 'smarty_dirs/configs/';
$smarty->cache_dir = 'smarty_dirs/cache/';

// get config vars
$smarty->configLoad( 'example.conf', 'Database' );
$host = $smarty->getConfigVars( 'host' );
$db = $smarty->getConfigVars( 'db' );
$user = $smarty->getConfigVars( 'user' );
$pass = $smarty->getConfigVars( 'pass' );

$connection =  new mysqli( $host, $user, $pass, $db );
$sql = 'SELECT * FROM posts';
$query = $connection->query( $sql );

$smarty->assign( 'num_rows', $query->num_rows );

while ( $row = $query->fetch_assoc() ) {
    $title = $row['title'];
    $author = $row['author'];
    $short_text = $row['short_text'];
    $full_text = $row['full_text'];

    $smarty->append(  array(
        'title' => $title,
        'author' => $author,
        'short_text' => $short_text,
        'full_text' => $full_text
    ) );
}


$smarty->display( 'example.tpl' );




