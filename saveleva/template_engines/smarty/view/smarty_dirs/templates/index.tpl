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

{* config_load - загружает конфигурационный файл *}
{config_load file="main.conf" section="Customer"}
{#pageTitle#}

{* capture - собирает в переменную выходные данные шаблона вместо того, чтобы выводить их на экран *}
{capture name="varname1" assign="varname2"}
    <p>captured content</p>
{/capture}
{$smarty.capture.varname1} {* Пример вывода переменной захваченой функцией capture *}
{$varname2} {* Пример вывода переменной захваченой функцией capture *}

{* section - создаёт цикл обходящий элементы массива $loop1  *}
{section name="section_name" loop=$loop1}
    <li>{$loop1[section_name]}</li> {* Для получения текущего элемента необходимо указать имя секции в кваратных скобках *}
{/section}

<br>

{* foreach - альтернатива section, создает цикл обходящий элементы массива $loop. позволяет получать ключи массива, используя атрибут key *}
{foreach from=$loop2 key=$key item=$item}
    <li>Ключ: {$key}; Значение: {$item}</li>
{/foreach}







</body>
</html>