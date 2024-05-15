<?php

require_once __DIR__ . '/Product.php';

class DogProduct extends Product {
    public $breed;

    public function __construct($_name, $_price, $_quantity, Category $_category, $_breed) {
        parent::__construct($_name, $_price, $_quantity, $_category);
        $this->breed = $_breed;
    }

}


?>