<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product
{
    private $color;
    private $size;

    public function __construct($id, $title, $price, array $categorys, $poster, $color, $size)
    {
        parent::__construct($id, $title, $price, $categorys, $poster);

        $this->setColor($color);
        $this->setSize($size);
    }

    // COLOR
    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    // SIZE
    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    // FUNZIONE CHE RESTITUISCE I DETTAGLI INTERPOLATI
    public function getDetails()
    {
        $categorys = array_map(fn ($category) => $category->name, $this->categorys);
        $category_names = implode(',', $categorys);
        return "Colore : $this->color, Dimensioni :  $this->size cm ";
    }
    // Funzione che restituisce il path immagini
    public function getPath()
    {
        return "./img/$this->poster";
    }
}
