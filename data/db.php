<?php

require_once("./models/prodotto.php");
require_once("./models/animale.php");

$animale = new Animale("cane", "cuccia");
$prodotto = new Prodotto("cuccia", "img", "Supercuccia", "119.00", "icon");
