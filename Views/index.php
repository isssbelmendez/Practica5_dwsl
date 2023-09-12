<?php
require 'constantes.php';
$css = CDN_BS_CSS;
$js = CDN_BS_JS;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica5</title>
    <?php ?>
</head>
<body>
    <h3>Ingresar a especies</h3>
    <form action="./especies/index.php  " method="post">
        <button type="submit">Ingresar</button>
    </form>
    <h3>Ingresar a razas</h3>
    <form action="./razas/index.php " method="post">
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>