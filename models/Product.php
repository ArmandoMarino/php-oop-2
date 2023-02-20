<?php

class Product
{
    public $id;
    public $title;
    public $price;
    public $categorys;

    public function __construct($id, $title, $price, array $categorys)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->categorys = $categorys;
    }

    public function getDetails()
    {
        $categorys = array_map(fn ($category) => $category->name, $this->categorys);
        $category_names = implode(',', $categorys);
        return "Prodotto : $this->title Euro : $this->price  Categoria : $category_names";
    }
}
