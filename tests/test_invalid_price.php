<?php


require_once "Product.php"; 
require_once "Category.php"; 


$category = new Category("NomeCategoria");

try {

    $product = new Product("Prodotto con prezzo negativo", "Descrizione", -10, "immagine.jpg", $category);
    echo "Il prodotto è stato creato con successo!";
} catch (InvalidPriceException $e) {

    echo "Errore: " . $e->getMessage();
}
?>
