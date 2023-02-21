<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
    private $expiration;
    private $ingredients;
    private $flavour;

    public function __construct($id, $title, $price, array $categorys, $poster, $expiration, $ingredients, $flavour)
    {
        parent::__construct($id, $title, $price, $categorys, $poster);

        $this->getExpiration($expiration);
        $this->getIngredients($ingredients);
        $this->getFlavour($flavour);
    }


    // EXPIRATION
    public function getExpiration()
    {
        return $this->expiration;
    }

    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;
        return $this;
    }

    // INGREDIENTS
    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
        return $this;
    }

    // FLAVOUR
    public function getFlavour()
    {
        return $this->flavour;
    }

    public function setFlavour($flavour)
    {
        $this->flavour = $flavour;
        return $this;
    }

    // FUNZIONE CHE RESTITUISCE I DETTAGLI INTERPOLATI
    public function getDetails()
    {
        $categorys = array_map(fn ($category) => $category->name, $this->categorys);
        $category_names = implode(',', $categorys);
        return "Data di scadenza : $this->expiration, Ingredienti :  $this->ingredients, Gusto : $this->flavour ";
    }

    // Funzione che restituisce il path immagini
    public function getPath()
    {
        return "./img/$this->poster";
    }
}
