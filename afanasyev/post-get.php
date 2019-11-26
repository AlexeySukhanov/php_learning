<?php
header('Content-type: text/html; charset=utf-8');

if ( isset($_GET['name']) ) {
    echo '<h2>The $_GET glogal array contains variables sent by the GET method</h2>';
    echo "Name = {$_GET['name']}<br/>";
    echo "Email = {$_GET['email']}<br/>";
    echo 'Gender = ';
    switch ( $_GET['sex'] ) {
        case 1:
            echo 'Man';
            break;
        case 2:
            echo 'Women';
            break;
    }
    echo '<br/>';
    echo "Save = {$_GET['save']}<br/><br/>";
}

if ( isset($_POST['name']) ):
    echo '<h2>The $_POST glogal array contains variables sent by the POST method</h2>';
    echo "Name = {$_POST['name']}<br/>";
    echo "Email = {$_POST['email']}<br/>";
    echo 'Gender = ';
    switch ( $_POST['sex'] ) {
        case 1:
            echo 'Man';
            break;
        case 2:
            echo 'Women';
            break;
    }
    echo '<br/>';
    echo "Save = {$_POST['save']}<br/><br/>";
endif;

echo '<pre>';
print_r($_REQUEST);
echo '</pre>';