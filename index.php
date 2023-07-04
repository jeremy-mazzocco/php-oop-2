<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    require_once("./data/db.php");
    ?>

    <title>Animal store</title>
</head>

<body>

    <div>
        <ul>
            <li>
                Articolo: <?php echo  $cuccia->getarticolo() ?>
            </li>
            <li>
                Immagine <?php echo  $cuccia->getimmagine() ?>
            </li>
            <li>
                Nome Articolo: <?php echo  $cuccia->gettitolo() ?>
            </li>
            <li>
                Prezzo: <?php echo  $cuccia->getprezzo() ?>
            </li>
            <li>
                Adatto per: <?php echo  $cuccia->getanimale() ?>
            </li>
            <li>
                Materiale: <?php echo  $cuccia->getdettagli()->getTipo() ?>
            </li>
            <li>
                Peso: <?php echo  $cuccia->getWeight() ?> kg
            </li>
        </ul>

        <ul>
            <li>
                Articolo: <?php echo  $osso->getarticolo() ?>
            </li>
            <li>
                Immagine <?php echo  $osso->getimmagine() ?>
            </li>
            <li>
                Nome Articolo: <?php echo  $osso->gettitolo() ?>
            </li>
            <li>
                Prezzo: <?php echo  $osso->getprezzo() ?>
            </li>
            <li>
                Adatto per: <?php echo  $osso->getanimale() ?>
            </li>
            <li>
                Materiale: <?php echo  $osso->getdettagli()->getTipo() ?>
            </li>
            <li>
                Peso: <?php echo  $osso->getWeight() ?> kg
            </li>
        </ul>

        <ul>
            <li>
                Articolo: <?php echo  $crocchette->getarticolo() ?>
            </li>
            <li>
                Immagine <?php echo  $crocchette->getimmagine() ?>
            </li>
            <li>
                Nome Articolo: <?php echo  $crocchette->gettitolo() ?>
            </li>
            <li>
                Prezzo: <?php echo  $crocchette->getprezzo() ?>
            </li>
            <li>
                Adatto per: <?php echo  $crocchette->getanimale() ?>
            </li>
            <li>
                Materiale: <?php echo  $crocchette->getdettagli()->getTipo() ?>
            </li>
            <li>
                Peso: <?php echo  $crocchette->getWeight() ?> kg
            </li>
        </ul>

        <ul>
            <li>
                Articolo: <?php echo  $rimuoviPeli->getarticolo() ?>
            </li>
            <li>
                Immagine <?php echo  $rimuoviPeli->getimmagine() ?>
            </li>
            <li>
                Nome Articolo: <?php echo  $rimuoviPeli->gettitolo() ?>
            </li>
            <li>
                Prezzo: <?php echo  $rimuoviPeli->getprezzo() ?>
            </li>
            <li>
                Adatto per: <?php echo  $rimuoviPeli->getanimale() ?>
            </li>
            <li>
                Materiale: <?php echo  $rimuoviPeli->getdettagli()->getTipo() ?>
            </li>
            <li>
                Peso: <?php echo  $rimuoviPeli->getWeight() ?> kg
            </li>
        </ul>

        <ul>
            <li>
                Articolo: <?php echo  $lettiera->getarticolo() ?>
            </li>
            <li>
                Immagine <?php echo  $lettiera->getimmagine() ?>
            </li>
            <li>
                Nome Articolo: <?php echo  $lettiera->gettitolo() ?>
            </li>
            <li>
                Prezzo: <?php echo  $lettiera->getprezzo() ?>
            </li>
            <li>
                Adatto per: <?php echo  $lettiera->getanimale() ?>
            </li>
            <li>
                Materiale: <?php echo  $lettiera->getdettagli()->getTipo() ?>
            </li>
            <li>
                Peso: <?php echo  $lettiera->getWeight() ?> kg
            </li>
        </ul>
    </div>

</body>


</html>