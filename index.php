<?php
// - L'e-commerce vende prodotti per animali.
// - I prodotti sono categorizzati, le categorie sono Cani o Gatti.
// - Tra i prodotti, troviamo cibo, giochi, cucce, etc.


class Category
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}


class Product
{
    public $id;
    public $title;
    public $price;
    public $category;

    public function __construct($id, $title, $price, Category $category)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
    }

    public function getDetails()
    {
        $category_name = $this->category->name;
        return "Prodotto : $this->title Euro : $this->price  Categoria : $category_name";
    }
}


$cani = new Category('cani');

$Ultima = new Product(1, 'Ultima Cibo per Cani', 36, $cani);
var_dump($Ultima);
