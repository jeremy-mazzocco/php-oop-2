<?php

require_once("./models/prodotto.php");
require_once("./models/animale.php");

$cane = new Animale("cane");
$gatto = new Animale("gatto");

$cuccia = new Card("cuccia", "img", "Supercuccia", 119, "icon", $cane);
$osso = new Card("osso", "img", "Superosso", 9, "icon", $cane);
$crocchette = new Card("crocchette", "img", "Croc Croc", 119, "icon", $cane);
$rimuoviPeli = new Card("rimuovi peli", "img", "Peli-no", 18, "icon", $gatto);
$lettiera = new Card("lettiera", "img", "SuperLettiera", 59, "icon", $gatto);
