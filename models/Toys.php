<?php

require_once __DIR__ . '/Product.php';

class Toys extends Product
{
    public $color;
    public $size;

    public function __construct($id, $title, $price, array $categorys, $color, $size)
    {
        parent::__construct($id, $title, $price, $categorys);

        $this->color = $color;
        $this->size = $size;
    }

    public function getDetails()
    {
        $categorys = array_map(fn ($category) => $category->name, $this->categorys);
        $category_names = implode(',', $categorys);
        return "Prodotto : $this->title Euro : $this->price  Categoria : $category_names Colore : $this->color, Dimensioni :  $this->size ";
    }
}
