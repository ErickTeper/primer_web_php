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
<div id="resultado">
<?php
if ($_GET) 
{
    $valorinicial = intval($_GET["valorinicial"]);
    $valorfinal = intval($_GET["valorfinal"]);
    $dias = intval($_GET["dias"]);
    $perdida = 0;

    if ($valorinicial > $valorfinal)
    {
        $perdida =  $valorinicial - $valorfinal; 
        
        $rendimiento= ($perdida*100)/$valorinicial;
        echo 'Su activo generó una perdida de $'. $perdida .'.<br> Lo que equivale una desvalorizacion del '. round($rendimiento, 2) .'% en el transcurso de '.$dias.' dias';

    }
    else
    {
        $beneficio = $valorfinal - $valorinicial;
        $rendimiento= ($beneficio*100)/$valorinicial;
        echo 'Su activo generó una ganancia de $'. $beneficio .'.<br> Lo que equivale un beneficio del '. round($rendimiento, 2) .'% en el transcurso de '.$dias.' dias';

    }

}
?>
</div>
</body>
</html>