<?php

trait Position
{
    public $corridoio;
    public $scaffale;

    // CORRIDIOIO
    public function getCorridoio()
    {
        return $this->corridoio;
    }

    public function setCorridoio($corridoio)
    {
        $this->corridoio = $corridoio;
        return $this;
    }

    // SCAFFALE
    public function getScaffale()
    {
        return $this->scaffale;
    }

    public function setScaffale($scaffale)
    {
        $this->scaffale = $scaffale;
        return $this;
    }

    // FUNZIONE CHE MI RESTITUISCE IL CORRIDOIO E LO SCAFFALE
    public function getPosition()
    {
        return "$this->corridoio - $this->scaffale";
    }
}
