<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";

class Toy extends Product{

    public $dimension;
    public $color;

    
    function __construct(string $title, string $description, $price, $image, Category $_type)
    {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->type = $_type;
        
    }
}

?>