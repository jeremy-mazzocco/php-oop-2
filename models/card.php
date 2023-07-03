<?php

class Card extends Prodotto
{

    private Animale $animale;

    public function __construct(
        $articolo,
        $immagine,
        $titolo,
        $prezzo,
        $icona,
        Animale $animale
    ) {

        parent::__construct($articolo, $immagine, $titolo, $prezzo, $icona);

        $this->setAnimale($animale);
    }

    public function getAnimale()
    {
        return $this->animale;
    }
    public function setAnimale($animale)
    {
        $this->animale = $animale;
    }
}
