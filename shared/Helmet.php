
<?php
function helmet($title = 'Server Zone')
{
    return <<<HTML
    <!DOCTYPE HTML>
    <html lang='en'>
    
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale-1' />
        <link rel='icon' href='/assets/Logo.png' />
        <link rel='stylesheet' href='/styles/bootstrap.min.css' />
        <link rel='stylesheet' href='/font-awsome/css/font-awesome.min.css' />
        <link rel='stylesheet' href='/styles/style.css' />
        <title>$title</title>
    </head>
    HTML;
}
