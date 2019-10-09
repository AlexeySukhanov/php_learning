{* Шаблон Smarty *}

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{#pageTitle#}</title> {* Вывод глобальных переменных производится с помощью символов # *}
</head>
<body>

Привет, {$name|upper}! {* Вывод переменной с модификатором *}
<br>
Ваш почтовый индекс: {$index[0]}
<br>
Ваш второй почтовый индекс: {$index[1]}
<br>
Ваш адрес: {$city}, {$street}
<br>
<p>{#Intro#}</p>


{* ФУНКЦИИ ШАБЛОНОВ: *}

{* config_load - Загружает конфигурационный файл *}
{config_load file="main.conf" section="Customer"}
{#pageTitle#}

{* capture - собирает в переменную выходные данные шаблона вместо того, чтобы выводить их на экран *}
{capture name="varname1" assign="varname2"}
    <p>captured content</p>
{/capture}
{$smarty.capture.varname1} {* Пример вывода переменной захваченой функцией capture *}
{$varname2} {* Пример вывода переменной захваченой функцией capture *}






</body>
</html>