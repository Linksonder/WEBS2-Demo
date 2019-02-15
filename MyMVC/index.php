<?php

require __DIR__ . '/vendor/autoload.php';

use App\Product;

$product = new Product('Brie');
$product->print();