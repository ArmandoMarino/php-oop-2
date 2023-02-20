<?php
// - L'e-commerce vende prodotti per animali.
// - I prodotti sono categorizzati, le categorie sono Cani o Gatti.
// - Tra i prodotti, troviamo cibo, giochi, cucce, etc.

//Importare classi
include_once __DIR__ . '/models/Category.php';
include_once __DIR__ . '/models/Product.php';
include_once __DIR__ . '/models/Food.php';
include_once __DIR__ . '/models/Toy.php';
include_once __DIR__ . '/models/Accessory.php';




//definire le classi (qui potevamo avere piu categorie in una perchè è stato passato un array)
$cani = new Categorys('cani');
$gatti = new Categorys('gatti');
$pets = new Categorys('pets');

//Food (Products)
$ultima = new Food(1, 'Ultima Cibo per Cani', 36, [$cani, $pets], 'ultima.jpg', '23/11/2025', 'Mais, trota(17%), riso, proteine di mais, proteine disidratate di trota(7%)', 'Pesce');
$advance  = new Food(2, 'Veterinary Diets', 32, [$gatti], 'advance.jpg', '23/11/2025', 'Mais, carne(17%), riso, proteine di mais, carne(7%)', 'carne');

//Toys (Products)
$ruxan = new Toy(3, 'Ruxan Giocattolo', 15, [$cani], 'ruxan.jpg', 'Giallo', 15);
$jingshubo = new Toy(4, 'JINGSHUBO - Palla giocattolo', 15, [$gatti], 'jing.jpg', 'Rosso', 14);

// Accessory (Products)
$vitazoo = new Accessory(3, 'VitaZoo Guinzaglio', 15, [$cani], 'vitazoo.jpg', 'Trax', 'Nylon');
$ace2ace = new Accessory(3, 'Spazzola Morbida', 15, [$gatti], 'ace2ace.jpg', 'ACE2ACE', 'Plastic');


// Preparo i Foods generici ma avranno le loro proprietà strutturali definite in altre istanze,
// in un array per stamparli in pagina.
$foods = [$ultima, $advance];
$toys = [$ruxan, $jingshubo];
$accessories = [$vitazoo, $ace2ace];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- STYLE -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div id="app" class="container m-5 text-center">
            <h1>Php Class Test n°2</h1>
            <div class="row g-4 justify-content-center mt-2">

                <h3>Cibo</h3>
                <?php foreach ($foods as $food) : ?>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="my-card p-3 text-center">
                            <figure>
                                <img class="img-fluid" src=<?= $food->getPath() ?> alt="<?= $food->title ?>">
                            </figure>
                            <h5> <?= $food->title ?> </h5>
                            <span>Categoria :</span>
                            <?php foreach ($food->categorys as $category) : ?>
                                <span><?= $category->name ?></span>
                            <?php endforeach; ?>
                            <p><?= $food->getDetails() ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>

                <h3>Giochi</h3>
                <?php foreach ($toys as $toy) : ?>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="my-card p-3 text-center">
                            <figure>
                                <img class="img-fluid" src=<?= $toy->getPath() ?> alt="<?= $toy->title ?>">
                            </figure>
                            <h5> <?= $toy->title ?> </h5>
                            <?php foreach ($toy->categorys as $category) : ?>
                                <span><?= $category->name ?></span>
                            <?php endforeach; ?>
                            <p><?= $toy->getDetails() ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>

                <h3>Accessori</h3>
                <?php foreach ($accessories as $accessorie) : ?>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="my-card p-3 text-center">
                            <figure>
                                <img class="img-fluid" src=<?= $accessorie->getPath() ?> alt="<?= $accessorie->title ?>">
                            </figure>
                            <h5> <?= $accessorie->title ?> </h5>
                            <?php foreach ($accessorie->categorys as $category) : ?>
                                <span><?= $category->name ?></span>
                            <?php endforeach; ?>
                            <p><?= $accessorie->getDetails() ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
    </main>
</body>

</html>