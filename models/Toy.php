<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product
{
    public $color;
    public $size;

    public function __construct($id, $title, $price, array $categorys, $poster, $color, $size)
    {
        parent::__construct($id, $title, $price, $categorys, $poster);

        $this->color = $color;
        $this->size = $size;
    }

    public function getDetails()
    {
        $categorys = array_map(fn ($category) => $category->name, $this->categorys);
        $category_names = implode(',', $categorys);
        return "Colore : $this->color, Dimensioni :  $this->size cm ";
    }
}
