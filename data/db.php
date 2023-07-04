<?php
require_once("./models/item.php");
require_once("./models/prodotto.php");
require_once("./models/dettagli.php");

$cibo = new Dettagli("scad. Giugno.2024");
$materiali = new Dettagli("plastica");

$cuccia = new Item("cuccia", "img", "Supercuccia", 119, "cani", $materiali);
$osso = new Item("osso", "img", "Superosso", 9, "cani", $cibo);
$crocchette = new Item("crocchette", "img", "Croc Croc", 119, "cani", $cibo);
$rimuoviPeli = new Item("rimuovi peli", "img", "Peli-no", 18, "gatti", $materiali);
$lettiera = new Item("lettiera", "img", "SuperLettiera", 59, "gatti", $materiali);
