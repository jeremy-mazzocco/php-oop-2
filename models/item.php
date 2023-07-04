<?php

require_once("./models/prodotto.php");

class Item extends Prodotto
{
    use Weight;

    private Dettagli $dettagli;

    public function __construct(
        $articolo,
        $immagine,
        $titolo,
        $prezzo,
        $animale,
        Dettagli $dettagli,
        $weight
    ) {

        parent::__construct($articolo, $immagine, $titolo, $prezzo, $animale);

        $this->setDettagli($dettagli);

        $this->setWeight($weight);
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



trait Weight
{

    private $weight;

    public function getWeight()
    {

        return $this->weight;
    }
    public function setWeight($weight)
    {

        $this->weight = $weight;
    }
}
