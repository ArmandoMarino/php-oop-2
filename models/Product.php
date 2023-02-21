<?php
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/TraitsEx.php';

class Product
{
    use Position;
    protected $id;
    protected $title;
    protected $price;
    protected $categorys;
    protected $poster;

    public function __construct($title, $price, array $categorys, $poster)
    {
        $this->setTitle($title);
        $this->setPrice($price);
        $this->setCategorys($categorys);
        $this->setPoster($poster);
    }

    // ID
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = uniqid();
        return $this;
    }

    // PRICE
    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    // TITLE
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    // CATEGORYS
    public function getCategorys()
    {
        return $this->categorys;
    }

    public function setCategorys($categorys)
    {
        $this->categorys = $categorys;
        return $this;
    }

    // POSTER       Funzione che restituisce il path immagini
    public function getPoster()
    {
        return "./img/$this->poster";
    }

    public function setPoster($poster)
    {
        $this->poster = $poster;
        return $this;
    }

    // FUNZIONE CHE RESTITUISCE I DETTAGLI INTERPOLATI
    public function getDetails()
    {
        return "Prodotto : $this->title Euro : $this->price  Categoria : $this->categorys";
    }
}
