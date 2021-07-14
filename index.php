<?php

require_once './Etiquetas/Core/Html.php';

html([
    'head' => [
        title('Piezas')
    ],
    'body' => [
        h1('WELCOME I AM RAMIRO_PHP')
    ]
],[
    'html' => ['lang' => 'en'],
    'body' => ['class' => 'body'],
    'js' => true,
    'on' => true
]);