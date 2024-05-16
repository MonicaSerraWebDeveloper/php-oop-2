<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../Traits/Weight.php';

class Food extends Product {

    use Weight;

    public $type;

    public function __construct($_name, $_price, $_quantity, Category $_category, $_type) {
        parent::__construct($_name, $_price, $_quantity, $_category);
        $this->type = $_type;
    }
}

?>