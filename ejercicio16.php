<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>
<h1>Ejercicio 16 - Includes y Requires</h1>
<?php
include "funciones.inc.php";

// include_once "funciones2.inc.php";
// Nos avisa de que ha habido un fallo (dependiendo del navegador), ya que el fichero no existe, en caso de existir, daría fallo
// Aún así, vemos que se ejecuta la primera función

// require "funciones2.inc.php";
// Aquí pasa exactamente lo mismo, muestra un mensaje de error, pero con la diferencia de que cierra
// todo el programa, no ejecutaría nada si no encuentra el fichero.
$V1 = 3;
$V2 = 7;
echo "El valor de multiplicar $V1 * $V2 es ",multiplicacion(3, 7),".";
?>
</body>
</html>