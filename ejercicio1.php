<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - PHP</title>
</head>
<body>
<?php
// Definicion de dos variables, con el valor que sea

$V1 = 50;
$V2 = 75;

// Se podría hacer directamente en un echo, pero, ahora podemos usar los IFs

if ($V1 > $V2){
    echo "<h2>El valor 1 ($V1) es mayor que el valor 2 ($V2)</h2>";
} else if ($V1 < $V2){
    echo "<h2>El valor 2 ($V2) es mayor que el valor 1 ($V1)</h2>";
} else { // Este ultimo es por si fuesen iguales.
    echo "<h2>El valor 1 ($V1) es igual que el valor 2 ($V2)</h2>";
}

?>
</body>
</html>