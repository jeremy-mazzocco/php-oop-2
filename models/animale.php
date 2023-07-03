<?php

class Animale
{

    private $tipo;
    private $articolo;

    public function __construct($tipo, $articolo)
    {

        $this->setTipo($tipo);
        $this->setArticolo($articolo);
    }

    public function getTipo()
    {

        return $this->tipo;
    }
    public function setTipo($tipo)
    {

        $this->tipo = $tipo;
    }

    public function getArticolo()
    {

        return $this->articolo;
    }

    public function setArticolo($articolo)
    {

        $this->articolo = $articolo;
    }
}
