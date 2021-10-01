<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - PHP</title>
</head>
<body>
<?php

// Definicion de la variable para decir quedía es
$V1 = 5;

echo "<h2>Ejercicio 3</h2>";

switch($V1){
    case 1:
        echo "El valor escogido es $V1, por lo que es Lunes";
        break;
    case 2:
        echo "El valor escogido es $V1, por lo que es Martes";
        break;
    case 3:
        echo "El valor escogido es $V1, por lo que es Miercoles";
        break;
    case 4:
        echo "El valor escogido es $V1, por lo que es Jueves";
        break;
    case 5:
        echo "El valor escogido es $V1, por lo que es Viernes";
        break;
    case 6:
        echo "El valor escogido es $V1, por lo que es Sabado";
        break;
    case 7:
        echo "El valor escogido es $V1, por lo que es Domingo";
        break;
    default:
        echo "El valor $V1 no corresponde a ningún día de la semana.";
        break;
}

?>
</body>
</html>