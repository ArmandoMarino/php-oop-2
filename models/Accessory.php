<?php

require_once __DIR__ . '/Product.php';

class Accessory extends Product
{
    public $brand;
    public $material;

    public function __construct($id, $title, $price, array $categorys, $poster, $brand, $material)
    {
        parent::__construct($id, $title, $price, $categorys, $poster);

        $this->brand = $brand;
        $this->material = $material;
    }

    public function getDetails()
    {
        $categorys = array_map(fn ($category) => $category->name, $this->categorys);
        $category_names = implode(',', $categorys);
        return "Marchio : $this->brand , Materiali :  $this->material";
    }

    // Funzione che restituisce il path immagini
    public function getPath()
    {
        return "./img/$this->poster";
    }
}
