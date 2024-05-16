<?php

require_once __DIR__ . '/Models/DogCategory.php';
require_once __DIR__ . '/Models/CatCategory.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Shop.php';

$shop = new Shop('Pet Shop');

$dogCategory = new Category('Dog');
$dogKibble = new Product('Pedrigree', 17.99, 4, $dogCategory);
$dogToy = new Product('DoggyToy', 22.99, 6, $dogCategory);
$shop->addProduct($dogKibble);
$shop->addProduct($dogToy);


$catCategory = new Category('Cat');
$catFood = new Product('Cesar', 14.99, 6, $catCategory);
$scratchingPost = new Product('Scratching Kitty', 14.99, 6, $catCategory);
$shop->addProduct($catFood);
$shop->addProduct($scratchingPost);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>OOB - 2</title>
</head>
<body>

    <div class="product-container">
        <?php foreach($shop->products as $product) {  ?>
        <div class="single-product">
            <h2><?php echo $product->name ?></h2>
            <p>€ <?php echo $product->price ?></p>
            <div>Categoria: <?php echo $product->category->name ?></div>
        </div>
        <?php }?>
    </div>

</body>
</html>