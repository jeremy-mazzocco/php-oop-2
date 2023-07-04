<?php

require_once("./models/prodotto.php");

class Item extends Prodotto
{

    private Dettagli $dettagli;

    public function __construct(
        $articolo,
        $immagine,
        $titolo,
        $prezzo,
        $animale,
        Dettagli $dettagli
    ) {

        parent::__construct($articolo, $immagine, $titolo, $prezzo, $animale);

        $this->setDettagli($dettagli);
    }

    public function getdettagli()
    {
        return $this->dettagli;
    }
    public function setDettagli($dettagli)
    {

        $this->dettagli = $dettagli;
    }
}



trait Weightable
{

    private $weight;

    public function getWeight()
    {

        return $this->weight;
    }
    public function setWeight($weight)
    {

        if ($weight <= 0) {

            throw new Exception("Weight can't be negative");
        }

        $this->weight = $weight;
    }
}
