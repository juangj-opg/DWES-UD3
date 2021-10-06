<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
<h1>Ejercicio 9 - Portero en una discoteca</h1>
<?php
// Definición de Variables



// Nacimiento de la persona 1:
$N_1 = "Manuel"; // Nombre
$D_N1 = 23; // Día
$M_N1 = 10; // Mes 
$A_N1 = 1953; // Año 

// Nacimiento de la persona 2:
$N_2 = "Juan"; // Nombre
$D_N2 = 26; // Día
$M_N2 = 4; // Mes 
$A_N2 = 2000; // Año 

// Nacimiento de la persona 3:
$N_3 = "Alex"; 
$D_N3 = 8; // Día
$M_N3 = 2; // Mes 
$A_N3 = 2012; // Año 

// Función que se encargará de calcular la edad y de responder si son mayor o menor de edad

function CalcularEdad($N, $D, $M, $A){
    // Fecha "actual" (No recogeremos los datos aun por Date, no lo hemos dado)
    (Integer)$D_Act = 6; // Día actual
    (Integer)$M_Act = 10; // Mes actual (Se hará del 1 al 12, si fuese con date, es posible que se tuviese que hacer del 0 al 11)
    (Integer)$A_Act = 2021; // Año actual
    $Diff = $A_Act - $A;

    // Este IF es para regular la edad según el mes o el día de nacimiento.
    if($M >= $M_Act && $D > $D_Act){ // 
        $Diff--;
    }

    echo "<p>Se ha calculado la edad de <b>$N</b>. Tiene <b>$Diff</b> años.<br>";

    // Mostrar ahora los mensajes en pantalla según el rango de edad.
    if($Diff >= 65){
        echo "Por su avanzada edad, no se le ha permitido la entrada la discoteca. </p>";
    } else if ($Diff <= 17){
        echo "Es menor de edad, por lo que no se le ha permitido la entrada a la discoteca. </p>";
    } else {
        echo "Es mayor de edad, por lo que se le permite la entrada a la discoteca.";
    }
}

CalcularEdad($N_1, $D_N1, $M_N1, $A_N1);
CalcularEdad($N_2, $D_N2, $M_N2, $A_N2);
CalcularEdad($N_3, $D_N3, $M_N3, $A_N3);
?>
</body>
</html>