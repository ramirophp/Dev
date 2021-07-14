<?php

require_once '../Etiquetas/Core/Html.php';

html([
    'head' => [
        title('Slideshow'),
        _link([
            'rel' => 'stylesheet',
            'type' => 'text/css',
            'href' => '../Etiquetas/Piezas/Slideshow/Slideshow.css'
        ])
    ],
    'body' => [
        require_once('../Etiquetas/Piezas/Slideshow/Slideshow.php'),
        script(null,['src' => '../Etiquetas/Piezas/Slideshow/Slideshow.js'])
    ]
],[
    'html' => ['lang' => 'en'],
    'body' => ['class' => 'body'],
    'js' => true,
    'on' => true
]);