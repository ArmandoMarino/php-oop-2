<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public $expiration_date;
    public $ingredients;
    public $flavour;

    public function __construct($id, $title, $price, array $categorys, $expiration_date, $ingredients, $flavour)
    {
        parent::__construct($id, $title, $price, $categorys);

        $this->expiration_date = $expiration_date;
        $this->ingredients = $ingredients;
        $this->flavour = $flavour;
    }

    public function getDetails()
    {
        $categorys = array_map(fn ($category) => $category->name, $this->categorys);
        $category_names = implode(',', $categorys);
        return "Prodotto : $this->title Euro : $this->price  Categoria : $category_names Data di scadenza : $this->expiration_date, Ingredienti :  $this->ingredients,Gusto : $this->flavour ";
    }
}
