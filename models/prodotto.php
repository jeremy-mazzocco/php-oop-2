<?php

class Prodotto
{
    private $articolo;
    private $immagine;
    private $titolo;
    private $prezzo;
    private $animale;

    public function __construct($articolo, $immagine, $titolo, $prezzo, $animale)
    {
        $this->setarticolo($articolo);
        $this->setimmagine($immagine);
        $this->settitolo($titolo);
        $this->setprezzo($prezzo);
        $this->setAnimale($animale);
    }


    public function getarticolo()
    {

        return $this->articolo;
    }
    public function setarticolo($articolo)
    {

        $this->articolo = $articolo;
    }

    public function getimmagine()
    {

        return $this->immagine;
    }
    public function setimmagine($immagine)
    {

        $this->immagine = $immagine;
    }

    public function gettitolo()
    {

        return $this->titolo;
    }
    public function settitolo($titolo)
    {

        $this->titolo = $titolo;
    }

    public function getprezzo()
    {

        return $this->prezzo;
    }
    public function setprezzo($prezzo)
    {

        $this->prezzo = $prezzo;
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
