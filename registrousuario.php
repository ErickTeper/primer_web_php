<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>inicio-registro</title>
    <link rel="stylesheet" type="text/css" href="formularioestil.css">
    <link rel="stylesheet" type="text/css" href="estilo-header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;379&display=swap" rel="stylesheet">
</head>

<body>
    <?php include('header.php')?>

    <form action="enviarregistrousuario.php" method="post">
    <h1>CREAR CUENTA</h1>
    
        <input type="text" name="nombre" placeholder="Nombre"> <br><br>
        <input type="text" name="apellido" placeholder="Apellido"> <br><br>
        <input type="number" name="edad" placeholder="Edad"> <br><br>
        <input type="email" name="contacto" placeholder="Correo Electronico"> <br><br>
        <input type="password" name="contrasenia" placeholder="contraseña"><br><br>
        <h2>EXPERIENCIA EN INVERSIONES</h2>
        <div id="experienciadato"><div><input type="radio" name="experiencia" value="nunca" id="nunca">
        <label for="nunca"> Nunca he invertido </label><br></div>
        <div><input type="radio" name="experiencia" value="Menora1" class="mano">
        <label for="menora1"> Menor a 1 año </label><br></div>
        <div><input type="radio" name="experiencia" value="entre1y5" class="mano">
        <label for="entre1y5"> Entre 1 y 5 años </label><br></div>
        <div><input type="radio" name="experiencia" value="masde5" class="mano">
        <label for="masde5"> Mas de 5 años </label><br></div></div>
        
        <h2>MARQUE LOS TIPOS DE ACTIVOS DE SU INTERES</h2>
        <div id="tipactivos">
        <div><input class="mano" type="checkbox" name="acciones" value="acciones">
        <label for="acciones"> acciones </label></div>
        <div><input class="mano" type="checkbox" name="cedears" value="cedears">
        <label for="cedears"> cedears </label></div>
        <div><input class="mano" type="checkbox" name="bonos" value="bonos">
        <label for="bonos"> bonos </label></div>
        <div><input class="mano" type="checkbox" name="forex" value="forex">
        <label for="forex"> forex </label><br></div>
        <div><input class="mano" type="checkbox" name="criptomonedas" value="criptomonedad">
        <label for="criptomonedas"> crimptomonedas </label></div>
        <div><input class="mano" type="checkbox" name="ETFs" value="ETFs">
        <label for="ETFs"> ETFs </label></div>
        <div><input class="mano" type="checkbox" name="FCIs" value="FCIs">
        <label for="FCIs"> FCIs </label><br></div>
        <div><input class="mano" type="checkbox" name="cauciones" value="cauciones">
        <label for="cauciones"> cauciones </label></div>
        <div><input class="mano" type="checkbox" name="plazos fijos" value="plazos fijos">
        <label for="plazos fijos"> plazos fijos </label></div>
        <div><input class="mano" type="checkbox" name="futuros" value="futuros">
        <label for="futuros"> futuros </label><br></div>
        <div><input class="mano" type="checkbox" name="opciones" value="opciones">
        <label for="opciones"> opciones </label></div>
        <div><input class="mano" type="checkbox" name="otros" value="otros">
        <label for="otros"> otros </label><br></div></div><br>
        <input id="boton" type="submit" value="LISTO!">


    </form>
    
    <?php 
    
    if (isset($_GET['e'])){
    
   
        echo('<div id="carga_correcta"><h3>DATOS CARGADOS CON ÉXITO</h3></div>');
    }
    
?> 

</body>
</html>


