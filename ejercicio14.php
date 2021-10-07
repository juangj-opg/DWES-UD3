<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
<h1>Ejercicio 14 - Array</h1>
<?php
// Declaramos la variable array llamado Meses, totalmente vacía.
$Meses = [];

echo "<h2>Array creado con los tres primeros meses.</h2>";

// Añadimos Enero, Febrero y Marzo al Array.
$Meses[] = "Enero";     // [0]
$Meses[] = "Febrero";   // [1]
$Meses[] = "Marzo";     // [2]

echo var_dump($Meses); // Mostramos el contenido del Array.

echo "<br>Podemos ver también cómo de largo es o cuantos elementos tiene el array: ", count($Meses), "<br><br>";

echo "<h2>Añadir más tipos de elementos e incluso eliminarlos.</h2>";

// Añadiremos más elemtnos, como números, booleanos.

$Meses[] = 7;       // [3]
$Meses[] = "Abril"; // [4]
$Meses[] = true;    // [5]
$Meses[] = "Junio"; // [6]

// Volveremos a echarle un ojo el contenido el Array y la cantidad.
// Esta vez usaremos print_r
echo print_r($Meses);  // Mostramos el contenido del Array.
echo "<br>Tras los pequeños cambios que le hemos hecho, podemos ver que el array se ha hecho más grande, pasando a ser ", count($Meses), " elementos de largo. Ademas, la key 5, era un booleano, y en vez de guardarse como true/false, se guarda como un valor númerico.";


// Ahora borraremos el número 7
unset($Meses[3]);
echo "<br><br>Procederemos a borrar el número 7 que hemos introducido, quedando algo tal que así:<br>",  print_r($Meses);
echo "<br><br> Como se puede ver, el [3] que tenía los datos del 7, ha desaparecido, dejando un hueco libre en vez de moverse, de hecho, si intentamos acceder a esa key, nos dará fallo. ";

//Una vez mostrado los fallos, pasaremos a arreglar los meses

echo "<h2>Recorrer el array con todos los meses arreglados.</h2>";
$Meses[3] = "Abril";
$Meses[4] = "Mayo";
$Meses[5] = "Junio";
$Meses[6] = "Julio";
$Meses[7] = "Agosto";
$Meses[8] = "Septiembre";
$Meses[9] = "Octubre";
$Meses[10] = "Noviembre";
$Meses[11] = "Diciembre";

foreach ($Meses as $V) {
    echo "<li>$V</li>";
}

?>


</body>
</html>