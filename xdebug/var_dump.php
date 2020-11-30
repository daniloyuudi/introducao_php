<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>

    <?php

    require __DIR__ .  '/vendor/autoload.php';

    $leilao = new Alura\Leilao\Model\Leilao('Fiat 147 0Km');
    //$a = [];
    //echo @$a[0];

    var_dump($leilao);

    ?>

    </body>
</html>
<?php