<?php

require_once __DIR__ . '/Product.php';

class Accessory extends Product
{
    public $brand;
    public $material;

    public function __construct($title, $price, array $categorys, $poster, $brand, $material)
    {
        parent::__construct($title, $price, $categorys, $poster);

        $this->brand = $brand;
        $this->material = $material;
    }

    public function getDetails()
    {
        return "Marchio : $this->brand , Materiali :  $this->material";
    }

    // Funzione che restituisce il path immagini
    public function getPath()
    {
        return "./img/$this->poster";
    }
}
