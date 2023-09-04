<?php
require_once __DIR__ . "/Sconto.php"; 

class Product {
    use Sconto;

    public $title;
    public $description;
    public $price;
    public $type;
    public $image;

    public function __construct(string $title, string $description, $price, $image, Category $_type) {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->type = $_type;
        $this->image = $image;
    }

}


?>