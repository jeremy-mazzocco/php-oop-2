<?php
require_once("./models/card.php");
require_once("./models/prodotto.php");
require_once("./models/dettagli.php");

$cibo = new Dettagli("scad. Giugno.2024");
$materiali = new Dettagli("plastica");

$cuccia = new Card("cuccia", "img", "Supercuccia", 119, "cani", $materiali);
$osso = new Card("osso", "img", "Superosso", 9, "cani", $cibo);
$crocchette = new Card("crocchette", "img", "Croc Croc", 119, "cani", $cibo);
$rimuoviPeli = new Card("rimuovi peli", "img", "Peli-no", 18, "gatti", $materiali);
$lettiera = new Card("lettiera", "img", "SuperLettiera", 59, "gatti", $materiali);

$products = [$cuccia, $osso, $crocchette, $rimuoviPeli, $lettiera];
