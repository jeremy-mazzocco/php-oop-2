<?php
require_once("./models/card.php");
require_once("./models/prodotto.php");
require_once("./models/dettagli.php");

$cibo = new Dettagli("scad. Giugno.2024");
$materiali = new Dettagli("plastica");

$cuccia = new Card("cuccia", "img", "Supercuccia", 119, "cane", $materiali);
$osso = new Card("osso", "img", "Superosso", 9, "cane", $cibo);
$crocchette = new Card("crocchette", "img", "Croc Croc", 119, "cane", $cibo);
$rimuoviPeli = new Card("rimuovi peli", "img", "Peli-no", 18, "gatto", $materiali);
$lettiera = new Card("lettiera", "img", "SuperLettiera", 59, "gatto", $materiali);

$products = [$cuccia, $osso, $crocchette, $rimuoviPeli, $lettiera];
