<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>capsula inversiones</title>
        <link rel="stylesheet" type="text/css" href="cap-inv-estilos.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;379&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--responcive, adapta el tamaño de ancho de pantalla de los dispositivos-->
    </head>
    
    <body>
      <?php include('header.php')?>

        <section class="espacio"></section> <!--esta seccion es para que el header y navegacion no tapen la seccion1 al ser cajas fijas-->
<!----------------------------------------DINÁMICA----------------------------------------------------------->
        <?php 
        $info = "Aprende todo lo que necesitas para triunfar en el mundo de la bolsa de valores";
        $imgacc= "./imagenes/imgacc1.jpg";
        $infoc = "Aprende todo lo que necesitas para triunfar en el mundo de las criptomonedas";
        $imgcripto= "./imagenes/imgcripto1.jpg";

if(isset($_GET['op_acc'])){  
   switch($_GET['op_acc']){
    case 'op1':
        $info = "Aprende todo lo que necesitas para triunfar en el mundo de la bolsa de valores";
        $imgacc= "./imagenes/imgacc1.jpg";
        break;
    case 'op2':
         $info = "Informacion actualizada sobre empresas nacionales e internacionales";
         $imgacc= "./imagenes/imgacc2.jpg";
        break;
    case 'op3':
        $info = "Las mejores recomendaciones y análisis para que sepas en que empresas invertir";
        $imgacc= "./imagenes/imgacc3.jpg";
        break;
    }
}
elseif(isset($_GET['op_cripto'])){  
    switch($_GET['op_cripto']){
        case 'opc1':
            $infoc = "Aprende todo lo que necesitas para triunfar en el mundo de las criptomonedas";
            $imgcripto= "./imagenes/imgcripto1.jpg";
        break;
        case 'opc2':
            $infoc = "Informacion actualizada sobre criptomonedas, altcoins y NFTs";
            $imgcripto= "./imagenes/imgcripto2.jpg";
        break;
        case 'opc3':
            $infoc = "Las mejores recomendaciones y análisis para que sepas que criptomonedas adquirir";
            $imgcripto= "./imagenes/imgcripto3.jpg";
        break;
        }
}
?>
        
<!----------------------------------------SECCION 1----------------------------------------------------------->
        <section class="seccion1">

            <div class="img" id="imgAcciones"> 
                <div id="capa1">
                </div> 
            </div>
             
            <div class="des-seccion" id="descAcciones">
                <h2 class="titulo-sec"><?php echo $info ?>
                </h2>

                <div class="cont-img">
                    <img class="cont-imgsec" src="<?php echo $imgacc ?>" alt="Imagen Acciones">
                </div>

            </div>

            <nav class="botonera" id="botAcciones">
                <ul id="ul-bot-acc">
                    <li class="list-bot-acc"><a class="vinc-bot-acc" href="index.php?op_acc=op1">CURSOS</a></li>
                    <li class="list-bot-acc"><a class="vinc-bot-acc" href="index.php?op_acc=op2">NOTICIAS</a></li>
                    <li class="list-bot-acc"><a class="vinc-bot-acc" href="index.php?op_acc=op3">ANÁLISIS</a></li>
                </ul>
            </nav>
        </section>


<!----------------------------------------SECCION 2----------------------------------------------------------->

        <section class="seccion2">
            <div class="img" id="imgCriptos"> 
                <div id="capa2">
                </div> 
            </div>
           
            <div class="descripcion" id="desCriptos">  
            <h2 class="titulo-sec"><?php echo $infoc ?>
                </h2>

                <div class="cont-img">
                    <img class="cont-imgsec" src="<?php echo $imgcripto ?>" alt="Imagen criptomonedas">
                </div>
            </div>

            <nav class="botonera" id="botCriptos">
                <ul id="ul-bot-acc">
                    <li class="list-bot-acc"><a class="vinc-bot-acc" href="index.php?op_cripto=opc1">CURSOS</a></li>
                    <li class="list-bot-acc"><a class="vinc-bot-acc" href="index.php?op_cripto=opc2">NOTICIAS</a></li>
                    <li class="list-bot-acc"><a class="vinc-bot-acc" href="index.php?op_cripto=opc3">ANÁLISIS</a></li>
                </ul>
            </nav>
        </section>
        
        <section id="legal">
            <div id="legal1"><p> <b>Renuncia:</b> El contenido de esta página es 
            meramente informativo y no debe ser usado como consejo de inversión
             y/o una oferta y/o solicitud para realizar transacción alguna con instrumentos financieros.</div><br><br>
             <div id="legal2"> <b>Advertencia de Riesgo:</b> Los productos financieros ofrecidos por la compañía
           conllevan a un alto nivel de riesgo y pueden resultar en la pérdida de todos sus fondos.
            Nunca debería invertir el dinero que no pueda permitirse perder.</p></div></section>
        
        

    </body>




</html>