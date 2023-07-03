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
                <?php echo  $cuccia->getarticolo() ?>
            </li>
            <li>
                <?php echo  $cuccia->getimmagine() ?>
            </li>
            <li>
                <?php echo  $cuccia->gettitolo() ?>
            </li>
            <li>
                <?php echo  $cuccia->getprezzo() ?>
            </li>
            <li>
                <?php echo  $cuccia->getanimale() ?>
            </li>
            <li>
                <?php echo  $cuccia->getdettagli()->getTipo() ?>
            </li>
        </ul>

    </div>

</body>


</html>