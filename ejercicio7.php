<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
<h1>Ejercicio 7 - ForEach</h1>
<h3>Leyendo el array $_SERVER con el foreach (sin clave)</h3>
<?php
// Usaremos el For Each dos veces, esta es la primera vez en la que mostramos las variables pero sin la clave.

foreach ($_SERVER as $V) { // Le decimos que a cada variable del array, se meta en $V y que lo vaya mostrando.
    echo "<br>$V";
}
?>

<h3>Leyendo el array $_SERVER con el foreach (esta vez con clave)</h3>
<?php
foreach ($_SERVER as $K => $V) {
    echo "<br><b>$K</b> => $V";
}
?>
</body>
</html>