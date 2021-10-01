<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - PHP</title>
</head>
<body>
<?php

echo "<h2>Ejercicio 5</h2>";

// Un valor del 1 al 10;

$V1 = 5;

// Bucle para hacer una tabla de multiplicar;

$i = 1;

echo "Tabla de multiplicar del <b>$V1</b>.<br><br>";
do{
    printf("<li>%s * %s = %s</li>", $V1, $i, $V1*$i);
    $i++;
} while($i < 11);
?>
</body>
</html>