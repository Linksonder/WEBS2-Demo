<?php

//controller?

//??
require_once './vendor/autoload.php'; //audoloader

//opstart??
$loader = new Twig_Loader_Filesystem(__DIR__ . DIRECTORY_SEPARATOR .  'views');
$twig = new Twig_Environment($loader);



//producten?
//welke producten? database?
$producten = [
    0 => 'Brie',
    1 => 'Blauw kaas',
    2 => 'Tjeddar',
    3 => 'Gouda',
    4 => 'Geitekaasje',
    5 => 'La vasj Kiri'
];

//Draw view
echo $twig->render('producten.twig', ['producten' => $producten]);
