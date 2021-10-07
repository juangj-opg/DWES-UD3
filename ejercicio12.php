<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
<h1>Ejercicio 12 - Número mágico de una persona</h1>
<?php

// Creamos las variables con las que vamos a trabajar

// Persona 1
$N1 = "Juan";
$D1 = 26;
$M1 = 4;
$A1 = 2000;
CalcularNumeroMagico($N1, $D1, $M1, $A1); // Llamamos la función que se encargará de hacer el trabajo de forma automática.

// Persona 2
$N2 = "Pepe";
$D2 = 29;
$M2 = 12;
$A2 = 1999;
CalcularNumeroMagico($N2, $D2, $M2, $A2);

// Persona 3
$N3 = "Guillermo";
$D3 = 6;
$M3 = 9;
$A3 = 1996;
CalcularNumeroMagico($N3, $D3, $M3, $A3);


function CalcularNumeroMagico($N, $D, $M, $A){
    echo "<p>Hemos visto la fecha de nacimiento de <b>$N</b>. $D/$M/$A.<br>";
    // Empezamos partiendo cada número en trozos

    // Día 
        $D_Red1 = Partir($D);
        $D_Red2 = $D_Red1;
    // En los días, lo máximo que puede salir en algunas sumas son alrededor de 10, por lo que partiremos también este tipo de sumas.
    if ($D_Red1 >= 10){
        $D_Red2 = Partir($D_Red1);
    }
    
    // Mes - Aqui ninguna de sus sumas dará 10 o mas, no hará falta el IF 
        $M_Red = Partir($M);
    
    // Año - Aquí se complica más, porque pueden salir hasta 2 o 3 veces, así que probaremos algo distinto
        $A_Red = Partir($A);

        while ($A_Red >= 10) { // Mientras que el número sea mayor o igual que 10, seguirá en el bucle hasta tener un valor inferior a este
            $A_Red = Partir($A_Red);
        }
    
    // Con esto, tendremos todos nuestros números, ahora tendremos que sumar todo y partirlo si fuese necesario.
    $NumMagico = $D_Red2 + $M_Red + $A_Red;
    if ($NumMagico >= 10){
        $NumMagico = Partir($NumMagico);
    }

    // Y con esto, ya podremos mostrar el número mágico
    echo "Tras un par de cálculos, hemos visto que su número magico es $NumMagico.</p>";
}

// Como es posible que algunas variaciones como en los años, se tenga que usar 2 o 3 veces el foreach,
// haremos una función que lo simplifique en un par de líneas y limpiar código
function Partir($V){
    $Numero = 0;
    foreach (str_split($V) as $V) {
        $Numero += $V;
    }
    return $Numero;
}

// Me he dado cuenta, que en la forma que viene en la practica, es totalmente diferente a como lo he hecho yo
// Pero de igual manera, dan el mismo número. De hacerlo como viene en la practica, se habrían reducido una cantidad de líneas.
?>
</body>
</html>