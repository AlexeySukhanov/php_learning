<?php
session_start();

// Уичтожаем сессию:
if( isset( $_GET['exit'] ) && $_GET['exit'] == 'true' ) {
    echo 'session vars unset<br>';
    unset( $_SESSION['login'], $_SESSION['password'] );
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My home page</title>
</head>
<body>
    Hello to all! I'm Vasya Petrov and this is my home page.
    <br>
    <a href="authorize.php">For Petya</a>
</body>
</html>

<?php
echo '<br><br>session id: ' . session_id();
echo '<pre>';
print_r( $_SESSION );
echo '</pre>';

echo $_SERVER['HTTP_REFERER'];

$_SERVER['HTTP_REFERER'] = 'lol';
echo '<br>';
echo 'new referer: ' . $_SERVER['HTTP_REFERER'];
?>