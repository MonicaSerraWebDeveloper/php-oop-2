<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Bowl.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Shop.php';

$shop = new Shop('Pet Shop');

// Dog Products
$dogCategory = new Category('Cane');
$bowlDisney = new Bowl('Ciotola Topolino', 22.99, 6, $dogCategory, 'Sticker Topolino');
$crocchette = new Food('Pedigree', 23.79, 9, $dogCategory, 'Manzo');
var_dump($crocchette);
var_dump($bowlDisney);


// Cats Products
$catCategory = new Category('Gatto');
$catFood = new Food('Cesar', 14.99, 6, $catCategory, 'Pesce');
$bowlAristocats = new Bowl('Ciotola Aristogatti', 24.99, 6, $catCategory, 'Sticker Aristogatti');

$products = [
    $crocchette,
    $bowlDisney,
    $catFood,
    $bowlAristocats
];

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
        <?php foreach($products as $product) {  ?>
            <?php
                $className = get_class($product);
            ?>
        <div class="single-product">
            <h2><?php echo $product->name; ?></h2>
            <p>€ <?php echo $product->price; ?></p>
            <div>Categoria: <?php echo $product->category->name; ?></div>
            <?php if($className === 'Food') { ?>
                <div>Ingrediente: <?php echo $product->type; ?></div>
            <?php } elseif ($className === 'Bowl') { ?>
                <div>Colore: <?php echo $product->color; ?></div>
            <?php } ?>
        </div>
        <?php }?>
    </div>

</body>
</html>