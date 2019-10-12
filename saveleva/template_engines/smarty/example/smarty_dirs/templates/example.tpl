{* example template index.tpl *}
{config_load file="example.conf"}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{#pageTitle#}</title>
</head>
<body>
    <ol>
        {section name="art" loop="$num_rows"}
            <li>
                <a href="{$full_text[art]}">{$title[art]}</a>
                <br>
                ({$author[art]})
                <p>{$short_text[art]}</p>
            </li>
        {/section}
    </ol>
</body>
</html>