<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
<h1>Ejercicio 13 - Sueldo anual</h1>
<?php

// Salario anual del Empleado 1 y años en la empresa
$S1 = 40000;
$A1 = 12;
Calcular_Salario($S1, $A1);

// Salario anual del Empleado 2 y años en la empresa
$S2 = 40000;
$A2 = 7;
Calcular_Salario($S2, $A2);

// Salario anual del Empleado 3 y años en la empresa
$S3 = 40000;
$A3 = 4;
Calcular_Salario($S3, $A3);

// Salario anual del Empleado 4 y años en la empresa
$S4 = 40000;
$A4 = 1;
Calcular_Salario($S4, $A4);

// Función que se encargará de calcular el salario por nosotros.
function Calcular_Salario($S, $A){
    echo "<p>Tenemos un empleado que anualmente cobra $S € y lleva $A año/s en la empresa, por lo que le corresponde";
    if($A > 10){
        $Bonus = $S * 0.10;
        printf("un aumento del 10%% (%.2f€), dejando un total de %.2f€.", $Bonus, $Bonus + $S); 
    } else if ($A <=10 && $A >5) {
        $Bonus = $S * 0.07;
        printf("un aumento del 7%% (%.2f€), dejando un total de %.2f€.", $Bonus, $Bonus + $S); 
    } else if ($A <=5 && $A >3) {
        $Bonus = $S * 0.05;
        printf("un aumento del 5%% (%.2f€), dejando un total de %.2f€.", $Bonus, $Bonus + $S); 
    } else  {
        $Bonus = $S * 0.03;
        printf("un aumento del 3%% (%.2f€), dejando un total de %.2f€.", $Bonus, $Bonus + $S); 
    } 
}


?>
</body>
</html>