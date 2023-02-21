<?php
// - L'e-commerce vende prodotti per animali.
// - I prodotti sono categorizzati, le categorie sono Cani o Gatti.
// - Tra i prodotti, troviamo cibo, giochi, cucce, etc.

//Importare classi ( la categoria appartiene a Product e se la porta lui)
include_once __DIR__ . '/models/Product.php';
include_once __DIR__ . '/models/Food.php';
include_once __DIR__ . '/models/Toy.php';
include_once __DIR__ . '/models/Accessory.php';




//definire le classi (qui potevamo avere piu categorie in una perchè è stato passato un array)
$gatti = new Categorys('Gatti', 'fa-solid fa-cat');
$cani = new Categorys('Cani', 'fa-solid fa-dog');
$pets = new Categorys('Pets', 'fa-solid fa-paw');


//Food (Products)
$ultima = new Food('Ultima Cibo per Cani', 36, [$cani, $pets], 'ultima.jpg', '23/11/2025', 'Mais, trota(17%), riso, proteine di mais, proteine disidratate di trota(7%)', 'Pesce');
$advance  = new Food('Veterinary Diets', 32, [$gatti, $pets], 'advance.jpg', '23/11/2025', 'Mais, carne(17%), riso, proteine di mais, carne(7%)', 'carne');

$ultima->setScaffale('C');
$ultima->setCorridoio('3');

//Toys (Products)
$ruxan = new Toy('Ruxan Giocattolo', 15, [$cani, $pets], 'ruxan.jpg', 'Giallo', 15);
$jingshubo = new Toy('JINGSHUBO - Palla giocattolo', 15, [$gatti, $pets], 'jing.jpg', 'Rosso', 14);

// Accessory (Products)
$vitazoo = new Accessory('VitaZoo Guinzaglio', 15, [$cani, $pets], 'vitazoo.jpg', 'Trax', 'Nylon');
$ace2ace = new Accessory('Spazzola Morbida', 15, [$gatti, $pets], 'ace2ace.jpg', 'ACE2ACE', 'Plastic');


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
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main>
        <div id="app" class="container m-5 text-center">
            <h1 class="text-white">Php Class Test n°2</h1>
            <div class="row g-4 justify-content-center mt-2">

                <!-- CARDS CIBO -->
                <h3 class="text-white">Cibo</h3>
                <?php foreach ($foods as $food) : ?>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="my-card p-3 text-center">
                            <figure>
                                <img class="img-fluid" src=<?= $food->getPath() ?> alt="<?= $food->getTitle() ?>">
                            </figure>
                            <h5> <?= $food->getTitle() ?> </h5>
                            <span>Categoria :</span>
                            <?php foreach ($food->getCategorys() as $category) : ?>
                                <span><?= $category->getName() ?></span>
                                <i class="<?= $category->getIcon() ?>"></i>
                            <?php endforeach; ?>
                            <p><?= $food->getDetails() ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- CARDS GIOCHI -->
                <h3 class="text-white">Giochi</h3>
                <?php foreach ($toys as $toy) : ?>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="my-card p-3 text-center">
                            <figure>
                                <img class="img-fluid" src=<?= $toy->getPath() ?> alt="<?= $toy->getTitle() ?>">
                            </figure>
                            <h5> <?= $toy->getTitle() ?> </h5>
                            <?php foreach ($toy->getCategorys() as $category) : ?>
                                <span><?= $category->getName() ?></span>
                                <i class="<?= $category->getIcon() ?>"></i>
                            <?php endforeach; ?>
                            <p><?= $toy->getDetails() ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- CARDS ACCESSORI -->
                <h3 class="text-white">Accessori</h3>
                <?php foreach ($accessories as $accessorie) : ?>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="my-card p-3 text-center">
                            <figure>
                                <img class="img-fluid" src=<?= $accessorie->getPath() ?> alt="<?= $accessorie->getTitle() ?>">
                            </figure>
                            <h5> <?= $accessorie->getTitle() ?> </h5>
                            <?php foreach ($accessorie->getCategorys() as $category) : ?>
                                <span><?= $category->getName() ?></span>
                                <i class="<?= $category->getIcon() ?>"></i>
                            <?php endforeach; ?>
                            <p><?= $accessorie->getDetails() ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
    </main>
</body>

</html>