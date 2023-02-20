<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public $expiration_date;
    public $ingredients;
    public $flavour;

    public function __construct($id, $title, $price, array $categorys, $poster, $expiration_date, $ingredients, $flavour)
    {
        parent::__construct($id, $title, $price, $categorys, $poster);

        $this->expiration_date = $expiration_date;
        $this->ingredients = $ingredients;
        $this->flavour = $flavour;
    }

    public function getDetails()
    {
        $categorys = array_map(fn ($category) => $category->name, $this->categorys);
        $category_names = implode(',', $categorys);
        return "Data di scadenza : $this->expiration_date, Ingredienti :  $this->ingredients, Gusto : $this->flavour ";
    }

    // Funzione che restituisce il path immagini
    public function getPath()
    {
        return "./img/$this->poster";
    }
}
