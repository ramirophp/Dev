<?php

require_once './Etiquetas/Core/Html.php';

html([
    'head' => [
        title('Piezas')
    ],
    'body' => [
        h1('WELCOME I AM RAMIRO_PHP'),
        _ul([
            a('Slideshow',['href' => './Paginas/Slideshow.php'])
        ])
    ]
],[
    'html' => ['lang' => 'en'],
    'body' => ['class' => 'body'],
    'js' => true,
    'on' => true
]);