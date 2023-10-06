<?php

class Dettagli
{
    private $tipo;

    public function __construct($tipo)
    {
        $this->setTipo($tipo);
    }

    public function getTipo()
    {
        return $this->tipo;
    }
    
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
}
