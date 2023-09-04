<?php
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Toy.php";

$categoryGatto = new Category("Gatto");
$categoryCane = new Category("Cane");

$primoProdotto = new Food("CROCCHETTE PER GATTI", "Crocchette per il tuo gatto", 39, "https://shop-cdn-m.mediazs.com/bilder/whiskas/pollo/crocchette/per/gatti/3/400/71629_pla_whiskas_1plus_huhn_7kg_hs_01_3.jpg", $categoryGatto, "Elenco degli ingredienti");
$secondoProdotto = new Toy("TOPOLINO", "Topolino, gioco divertente per gatti'", 11, "https://arcaplanet.vtexassets.com/arquivos/ids/286196/1205536.jpg?v=1780178768", $categoryGatto);
$terzoProdotto = new Toy("CUCCIA PER CANI", "Una cuccia per il tuo amico a 4 zampe", 72, "https://arcaplanet.vtexassets.com/arquivos/ids/227610/p-a-y--cuccia-alcazar-70.jpg?v=1779754730", $categoryCane);
$quartoProdotto = new Toy("GIOCO PER GATTI","Gioco da tirare ai gatti", 7, "https://img.kwcdn.com/product/1d14c6c0000/fdfe5284-3db7-4a78-8590-0f10233cc9bc_1500x1500.jpeg?imageView2/2/w/800/q/70", $categoryGatto);
$products = [$primoProdotto, $secondoProdotto, $terzoProdotto, $quartoProdotto];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP OOP 2</title>
</head>
<body>
    <?php foreach ($products as $product): ?>
        <div class="product-container">
            <div class="product-image-container">
                <img src="<?php echo $product->image; ?>" class="product-image">
            </div>
            <div class="product-title">
                <?php echo $product->title; ?>
            </div>
            <div class="product-description">
                <?php echo $product->description; ?>
            </div>
            <div class="product-price">
                <?php echo $product->price; ?>€
            </div>
            <div class="product-category">
                Categoria: <?php echo $product->type->type; ?>
            </div>
        </div>
    <?php endforeach; ?>
</body>
</html>
