<?php

require_once __DIR__ . '/Product.php';

class Bowl extends Product {    
    public $color;

    public function __construct($_name, $_price, $_quantity, Category $_category, $_color) {
        parent::__construct($_name, $_price, $_quantity, $_category);
        $this->color = $_color;
    }
}

?>