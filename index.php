<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Bowl.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Shop.php';

$shop = new Shop('Pet Shop');

// **** DOG PRODUCT ****

//Definire la categoria del "cane"
$dogCategory = new Category('Cane');
// Prodotto "Bowl"
$bowlDisney = new Bowl('Ciotola Topolino', 22.99, 6, $dogCategory, 'Sticker Topolino');
// Aggiunta di un Traits->Weight per definire il peso del prodotto
$bowlDisney->setWeight(0.20);

// Prodotto "Food"
$crocchette = new Food('Pedigree', 23.79, 9, $dogCategory, 'Manzo');
// Aggiunta di un Traits->Weight per definire il peso del prodotto
$crocchette->setWeight(1.5);  

// **** CATS PRODUCT ****

//Definire la categoria del "Gatto"
$catCategory = new Category('Gatto');
// Prodotto "Food"
$catFood = new Food('Cesar', 14.99, 6, $catCategory, 'Pesce');
// Aggiunta di un Traits->Weight per definire il peso del prodotto
$catFood->setWeight(0.3);

// Prodotto "Bowl"
$bowlAristocats = new Bowl('Ciotola Aristogatti', 24.99, 6, $catCategory, 'Sticker Aristogatti');
// Aggiunta di un Traits->Weight per definire il peso del prodotto
$bowlAristocats->setWeight(0.1);

// Array con tutti i prodotti all'interno per essere ciclati con un foreach
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
            <div>Peso: <?php echo $product->getWeight() ?> Kg</div>
        </div>
        <?php }?>
    </div>

</body>
</html>