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

?>