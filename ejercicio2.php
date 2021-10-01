<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - PHP</title>
</head>
<body>
<?php

// Definicion de las tres variables para comparar
$V1 = 12;
$V2 = 8;
$V3 = 10;

echo "<h2>Ejercicio 2</h2>";

// Mostramos los valores en pantalla
echo "Valor 1: $V1<br>Valor 2: $V2 <br>Valor 3: $V3";

// Comparaciones y mostrar mensaje en pantalla.

// Solo mostrará el mayor, si son iguales, solo mostrará el primero

if($V1>$V2 && $V1>$V2){
    echo "<h3>El valor 1 es el mayor de los 3.";
} else if ($V2>$V1 && $V2>$V3){
    echo "<h3>El valor 2 es el mayor de los 3.";
} else {
    echo "<h3>El valor 3 es el mayor de los 3.";
}

?>
</body>
</html>