<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../Traits/Weight.php';


class Bowl extends Product {    

    use Weight;

    public $color;

    public function __construct($_name, $_price, $_quantity, Category $_category, $_color) {
        parent::__construct($_name, $_price, $_quantity, $_category);
        $this->color = $_color;
    }
}

?>