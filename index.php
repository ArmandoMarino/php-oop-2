<?php

// - L'e-commerce vende prodotti per animali.
// - I prodotti sono categorizzati, le categorie sono Cani o Gatti.
// - Tra i prodotti, troviamo cibo, giochi, cucce, etc.


class Product
{
    public $id;
    public $title;
    public $price;

    public function __construct($id, $title, $price)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
    }

    public function getDetails()
    {
        return "$this->title $this->price ";
    }
}


$Ultima = new Product(1, 'Ultima Cibo per Cani', 36);
