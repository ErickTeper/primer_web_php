<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>calculadora de rendimiento</title>
    <link rel="stylesheet" type="text/css" href="calcestilo.css">
    <link rel="stylesheet" type="text/css" href="estilo-header.css">
</head>

<body>
<?php include('header.php')?>

    <form id="formulario" action="calculadora.php" method="GET">
        <label class="texto" for="valorinicial">Precio de compra</label><br>
        <input id="valorinicial" type="text" name="valorinicial">
        <br><br>

        <label class="texto" for="valorfinal">Precio de venta</label><br>
        <input id="valorfinal" type="text" name="valorfinal"><br><br>

        <label class="texto" for="dias">Número de dias que mantuvo el activo</label><br>
        <input id="dias" type="text" name="dias">
        <br><br>

        <input id="" type="submit" value="calcular">
    </form>

</body>
</html>