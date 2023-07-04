<?php
require_once("./models/item.php");
require_once("./models/prodotto.php");
require_once("./models/dettagli.php");

$cibo = new Dettagli("scad. Giugno.2024");
$materiali = new Dettagli("plastica");

$cuccia = new Item("cuccia", "img", "Supercuccia", 110, "cani", $materiali, 2);
$osso = new Item("osso", "img", "Superosso", 9, "cani", $cibo, 0.2);
$crocchette = new Item("crocchette", "img", "Croc Croc", 119, "cani", $cibo, 5);
$rimuoviPeli = new Item("rimuovi peli", "img", "Peli-no", 18, "gatti", $materiali, 0.1);
$lettiera = new Item("lettiera", "img", "SuperLettiera", 59, "gatti", $materiali, 3);
