<?php
require_once("./models/item.php");
require_once("./models/prodotto.php");
require_once("./models/dettagli.php");

$cibo = new Dettagli("scad. Giugno.2024");
$materiali = new Dettagli("plastica");

try {
    $cuccia = new Item("cuccia", "img", "Supercuccia", 110, "cani", $materiali, 2);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

try {
    $osso = new Item("osso", "img", "Superosso", 9, "cani", $cibo, 0.2);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

try {
    $crocchette = new Item("crocchette", "img", "Croc Croc", 119, "cani", $cibo, 5);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

try {
    $rimuoviPeli = new Item("rimuovi peli", "img", "Peli-no", 18, "gatti", $materiali, 0.1);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

try {
    $lettiera = new Item("lettiera", "img", "SuperLettiera", 59, "gatti", $materiali, 3);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
