<?php

require_once __DIR__ . '/Product.php';

class CatProduct extends Product {
    public $furType;

    public function __construct($_name, $_price, $_quantity, Category $_category, $_furType) {
        parent::__construct($_name, $_price, $_quantity, $_category);
        $this->furType = $_furType;
    }

}

?>