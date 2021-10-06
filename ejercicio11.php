<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<style>
    td, th{
        border: 1px solid black;
        border-radius: 5px;
        width: 40px;
        height: 40px;
        text-align: center;
    }
</style>
<body>
<h1>Ejercicio 11 - Tabla de multiplicar 10x10</h1>
<table>
<tr>
    <th>X</th>
    <th>0</th>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
    <th>7</th>
    <th>8</th>
    <th>9</th>
    <th>10</th>
</tr>
<?php
// Empezaremos haciendo bucles para ir calculando a la vez que creando celdas en la tabla
for ($i=0; $i <= 10; $i++) { 
    echo "<tr>";
    echo "<td>$i</td>";
    for ($j=0; $j <= 10; $j++) { 
        echo "<td>",$i*$j,"</td>";
    }
    echo "</tr>";
}


?>
</table>
</body>
</html>