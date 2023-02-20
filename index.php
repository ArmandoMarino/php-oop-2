<?php
// - L'e-commerce vende prodotti per animali.
// - I prodotti sono categorizzati, le categorie sono Cani o Gatti.
// - Tra i prodotti, troviamo cibo, giochi, cucce, etc.

include_once __DIR__ . '/models/Product.php';

include_once __DIR__ . '/models/Category.php';



$cani = new Categorys('cani');
$gatti = new Categorys('gatti');

$ultima = new Product(1, 'Ultima Cibo per Cani', 36, [$cani]);
var_dump($ultima);
$advance  = new Product(2, 'Veterinary Diets', 32, [$gatti]);


$products = [$ultima, $advance];
