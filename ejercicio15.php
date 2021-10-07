<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
<h1>Ejercicio 15 - Matrices</h1>
<h2>Crearemos una matriz llamada productos. </h2>
<p>Crearemos 3 productos con las siguientes características:</p>
<li>Nombre</li>
<li>Precio</li>
<li>Stock</li>
<li>Identificador</li>
<?php
// Tras la pequeña explicación arriba, crearemos la matriz con los 3 productos:
$Productos[] = array("Nombre"=>"HUAWEI Eye Comfort AD80", "Precio"=>"109,00€", "Stock" => 280, "Identificador"=> "monitor_ad80");
$Productos[] = array("Nombre"=>"Impresora Multifunción HP OfficeJet 8012e", "Precio"=>"129,91€", "Stock" => 100, "Identificador"=> "impresora_hp_oe8012e");
$Productos[] = array("Nombre"=>"Xiaomi Redmi Note 9", "Precio"=>"159,99€", "Stock" => 350, "Identificador"=> "xiaomi_redminote9");

// Ahora mostraremos en pantalla los tres productos
echo "<h2>Mostraremos los productos creados.</h2>";
for ($i=0; $i < count($Productos); $i++) { 
    echo "<h3> Producto ", $i+1, ":</h3>";
    foreach ($Productos[$i] as $K => $V) {
        echo "<li>$K: $V</li>";
    }
}
?>
</body>
</html>