<?php

require_once __DIR__ . "/Product.php";

class Food extends Product {

    public $expirationDate;
    public $ingredients;

    public function __construct($title, $description, $price, $image, $type, $ingredients) {
        parent::__construct($title, $description, $price, $image, $type);
        $this->ingredients = $ingredients;
    }
}

?>