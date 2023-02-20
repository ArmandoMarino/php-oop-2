<?php
// - L'e-commerce vende prodotti per animali.
// - I prodotti sono categorizzati, le categorie sono Cani o Gatti.
// - Tra i prodotti, troviamo cibo, giochi, cucce, etc.

//Importare classi
include_once __DIR__ . '/models/Product.php';
include_once __DIR__ . '/models/Food.php';
include_once __DIR__ . '/models/Category.php';


//definire le classi
$cani = new Categorys('cani');
$gatti = new Categorys('gatti');

//Food (Products)
$ultima = new Food(1, 'Ultima Cibo per Cani', 36, [$cani], '23/11/2025', 'Mais, trota(17%), riso, proteine di mais, proteine disidratate di trota(7%)', 'Pesce');

$advance  = new Food(2, 'Veterinary Diets', 32, [$gatti], '23/11/2025', 'Mais, carne(17%), riso, proteine di mais, carne(7%)', 'carne');

// Preparo i Products generici ma avranno le loro proprietà strutturali definite in altre istanze,
// in un array per stamparli in pagina.
$products = [$ultima, $advance];

var_dump($products);
