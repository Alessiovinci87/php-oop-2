<?php
require_once __DIR__ . "/Sconto.php"; 
require_once __DIR__ . "/InvalidPriceException.php"; 

class Product {
    use Sconto;

    public $title;
    public $description;
    public $price;
    public $type;
    public $image;

    public function __construct(string $title, string $description, $price, $image, Category $_type) {
        try {
       
            if ($price <= 0) {
                throw new InvalidPriceException("Il prezzo del prodotto non può essere negativo o zero.");
            }

            $this->title = $title;
            $this->description = $description;
            $this->price = $price;
            $this->type = $_type;
            $this->image = $image;
        } catch (InvalidPriceException $e) {

            echo "Errore: " . $e->getMessage();
        }
    }
}
