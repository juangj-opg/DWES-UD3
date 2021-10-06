<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<style>
    table, th, td{
        border-collapse: collapse;
        border: 3px solid black;
        color: white;
        background-color: rgba(220,120,120,0.7  );
    }
</style>
<body>
<h1>Ejercicio 6 - Tabla de potencias del número 2 con FOR.</h1>
<table>
    <tr>
        <th>Elevado a</th>
        <th>Resultado</th>
    </tr>
<?php
    // Número al que vamos a potenciar:
    $V = 2;
    
    // Veces que se va a elevar el nº 2:
    $N = 6;

    $i = 0;
    while ($i <= $N) {
        switch ($i) {
            case 4:
                break (1); // Aquí no mostrará nada en pantalla, pero seguirá en el bucle
            case 6:
                break (2); // A pesar de que el objetivo era 2^6, si llega a 2^5, se saldrá del bucle (es 6, porque empieza del 0)
            default:
                echo "<tr>";
                printf("<td><b>%d</b></td>",$i);
                printf("<td><b>%d</b></td>",pow($V, $i));
                echo "</tr>";
                break;
        }
    $i++;
    }
?>
</table>
</body>
</html>