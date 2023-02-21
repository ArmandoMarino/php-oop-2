<?php

require_once __DIR__ . '/Product.php';

class Accessory extends Product
{
    private $brand;
    private $material;

    public function __construct($title, $price, array $categorys, $poster, $brand, $material)
    {
        parent::__construct($title, $price, $categorys, $poster);

        $this->setBrand($brand);
        $this->setMaterial($material);
    }

    // BRAND
    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    // material
    public function getMaterial()
    {
        return $this->material;
    }

    public function setMaterial($material)
    {
        $this->material = $material;
        return $this;
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
