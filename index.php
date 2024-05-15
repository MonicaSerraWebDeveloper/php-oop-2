<?php

class Shop {
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
    public $type;
}

$dogKibble = new Shop('dog kibble', 12, 4, 'food', 'dog');


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