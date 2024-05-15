<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Shop.php';

$shop = new Shop('Pet Shop');

$dogCategory = new Category('dog');
$dogKibble = new Product('Pedrigree', 17.99, 4, $dogCategory);
$shop->addProduct($dogKibble);

$catCategory = new Category('cat');
$catFood = new Product('Cesar', 14.99, 6, $catCategory);
$shop->addProduct($catFood);

var_dump($dogKibble);
var_dump($catFood);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOB - 2</title>
</head>
<body>

</body>
</html>