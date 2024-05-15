<?php

class Shop {
    public $name;
    public $products;
   

    public function __construct($_name) {
        $this->name = $_name;
    }

    public function addProduct(Product $_product) {
        $this->products[] =  $_product;
    }
}

class Product {
    public $name;
    public $price;
    public $quantity;
    public $category;

    public function __construct($_name, $_price, $_quantity, $_category) {
        $this->name = $_name;
        $this->price = $_price;
        $this->quantity = $_quantity;
        $this->category = $_category;
    }
}

class Category {
    public $name;

    public function __construct($_name) {
        $this->name = $_name;
    }
}

$shop = new Shop('Pet Shop');

$dogCategory = new Category('dog');
$catCategory = new Category('cat');

$dogKibble = new Product('Pedrigree', 17,99, 4, $dogCategory);
$shop->addProduct($dogKibble );

$catFood = new Product('Cesar', 14,99, 6, $catCategory);
$shop->addProduct($catFood );

var_dump($shop)


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