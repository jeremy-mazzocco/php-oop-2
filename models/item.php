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
