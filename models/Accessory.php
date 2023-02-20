<?php

require_once __DIR__ . '/Product.php';

class Accessory extends Product
{
    public $brand;
    public $material;

    public function __construct($id, $title, $price, array $categorys, $brand, $material)
    {
        parent::__construct($id, $title, $price, $categorys);

        $this->brand = $brand;
        $this->material = $material;
    }

    public function getDetails()
    {
        $categorys = array_map(fn ($category) => $category->name, $this->categorys);
        $category_names = implode(',', $categorys);
        return "Prodotto : $this->title Euro : $this->price  Categoria : $category_names Marchio : $this->brand Materiali :  $this->material";
    }
}
