<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
<h1>Ejercicio 10 - Calcular un factorial (Ejemplo, !6)</h1>
<?php 
// Se establecerá un número que será el factorial, por ejemplo !5
$factorial = 6;
$resultado = 1;
echo "El factorial de <b>!$factorial</b> es: ";
for ($i=1; $i <= $factorial; $i++) { 
    $resultado *= $i;
    if ($i < $factorial) 
        echo " $i *";
    // Cuando esté por el último número, que muestre el mensaje en pantalla
    if ( $i == $factorial){
        echo "  $i = $resultado";
    }
}

?>
</body>
</html>