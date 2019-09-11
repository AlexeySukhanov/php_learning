<?php
session_start();

if ( !( $_SESSION['login'] == 'pit' && $_SESSION['password'] == '1234' ) ) {
    header('Location: authorize.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secret info</title>
</head>
<body>
    Hello, <?= $_SESSION['login'] ?>!<br>
    Here i want to share secrets with my friend Petya.
    <br>
    <a href="index.php?exit=true">Выйти</a>
</body>
</html>

<?php
echo '<br><br>session id: ' . session_id();
echo '<pre>';
print_r( $_SESSION );
echo '</pre>';

echo $_SERVER['HTTP_REFERER'];

?>
