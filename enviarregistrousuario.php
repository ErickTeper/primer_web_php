<?php

if($_POST)
{
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$edad_form = $_POST['edad'];
$contacto_form = $_POST['contacto'];
$pass1_form = $_POST['contrasenia'];

//conexion a base de datos

//$conexion = mysqli_connect("localhost", "root", "", "usuarios_capsula_inversiones") //direccion, usuario, contraseña, nombre DB
//or exit("no se pudo conecta a la base de datos"); //en caso de error

$conexion = mysqli_connect("localhost", "id18194560_usuarios", "-OowuDn0bM}*F#E5", "id18194560_usuarios_capsula_inversiones")
or exit("no se pudo conecta a la base de datos");


mysqli_query($conexion, "INSERT INTO usuarios VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$edad_form', '$contacto_form', '$pass1_form') ");

MYSQLI_CLOSE($conexion);

header("location: registrousuario.php?e=ok" );
}

