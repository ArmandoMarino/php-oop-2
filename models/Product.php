<?php

class Product
{
    public $id;
    public $title;
    public $price;
    public $categorys;
    public $poster;

    public function __construct($id, $title, $price, array $categorys, $poster)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->categorys = $categorys;
        $this->poster = $poster;
    }

    public function getDetails()
    {
        $categorys = array_map(fn ($category) => $category->name, $this->categorys);
        $category_names = implode(',', $categorys);
        return "Prodotto : $this->title Euro : $this->price  Categoria : $category_names";
    }


    // Funzione che restituisce il path immagini
    public function getPath()
    {
        return $this->poster;
    }
}
