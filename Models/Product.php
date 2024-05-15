<?php

class Product {
    public $name;
    public $price;
    public $quantity;
    public $category;

    public function __construct($_name, $_price, $_quantity, Category $_category) {
        $this->name = $_name;
        $this->price = $_price;
        $this->quantity = $_quantity;
        $this->category = $_category;
    }
}

?>