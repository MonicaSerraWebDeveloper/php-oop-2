<?php

require_once __DIR__ . '/Models/DogProduct.php';
require_once __DIR__ . '/Models/CatProduct.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Shop.php';


$shop = new Shop('Pet Shop');

$dogCategory = new Category('dog');
$dogKibble = new DogProduct('Pedrigree', 17.99, 4, $dogCategory, 'Shibu Inua');
$dogToy = new DogProduct('DoggyToy', 22.99, 6, $dogCategory, 'Border Collie');
$shop->addProduct($dogKibble);

$catCategory = new Category('cat');
$catFood = new CatProduct('Cesar', 14.99, 6, $catCategory, 'Main Coon');
$scratchingPost = new CatProduct('Scratching Kitty', 14.99, 6, $catCategory, 'British Shorthair');
$shop->addProduct($catFood);

var_dump($dogKibble);
var_dump($dogToy);

var_dump($catFood);
var_dump($scratchingPost);



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