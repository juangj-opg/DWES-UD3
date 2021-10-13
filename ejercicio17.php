<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
<style>
table{
    text-align: center;
}

input#submit, input#reset{
    border: 1px solid black;
    border-radius: 5px;
}
</style>
<body>
<h1>Ejercicio 17 - Formulario 1</h1>
<?php
// Recogida de los datos del formulario
// El formulario será unicamente POST, no usaremos el GET.

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = LimpiaInput($_POST["nombre"]); // Aquí usamos una función que hemos creado posteriormente para limpiar el nombre de posible etiquetas u otros.
    $apellidos = LimpiaInput($_POST["apellidos"]);
    $direccion = LimpiaInput($_POST["direccion"]);
    $conexion = $_POST["conexion"];
    $instituto = LimpiaInput($_POST["instituto"]);
    $estudios = LimpiaInput($_POST["estudios"]);
    
}

?>


<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
<!-- Primera parte del formulario -->
  <fieldset>
    <legend>Formulario de opciones</legend>
    <table>
        <tr>
            <td><label for="nombre">Nombre</label></td>
            <td><input type="text" name="nombre" id="nombre" required></td>
        </tr>
        <tr>
            <td><label for="apellidos">Apellidos</label></td>
            <td><input type="text" name="apellidos" id="apellidos" required></td>
        </tr>
        <tr>
            <td><label for="direccion">Direccion</label></td>
            <td><input type="text" name="direccion" id="direccion" required></td>
        </tr>
    </table>

    <input type="radio" name="conexion" value="wifi" id="wifi" required>
    <label for="wifi">WiFi</label>
    <input type="radio" name="conexion" value="cable" id="cable" required>
    <label for="cable">Cable</label>
    <input type="radio" name="conexion" value="fibra" id="fibra" required>
    <label for="fibra">Fibra</label>
    
    <table>
        <tr>
            <td><label for="instituto">Instituto</label></td>
            <td><input type="text" name="instituto" id="instituto" required></td>
        </tr>
        <tr>
            <td><label for="estudios">Estudios elegidos</label></td>
            <td><input type="text" name="estudios" id="estudios" required></td>
        </tr>
    </table>

    <select name="dia" id="dia" size="4" multiple required>
        <option value="lunes">Lunes</option>
        <option value="martes">Martes</option>
        <option value="miercoles">Miércoles</option>
        <option value="jueves">Jueves</option>
        <option value="viernes">Viernes</option>
        <option value="sabado">Sábado</option>
        <option value="domingo">Domingo</option>
    </select>
  </fieldset>

<!-- Segunda parte del formulario -->
  <fieldset>
    <legend>Preferencias</legend>

    <!-- Los checkbox, no pueden tener un required, o, al ponerlo, te pedirá marcar todas las casillas, no como un radius-->
    <input type="checkbox" name="Preferencia" value="historia" id="historia">
    <label for="historia">Historia</label>
    <input type="checkbox" name="Preferencia" value="geografia" id="historia">
    <label for="geografia">Geografía</label>
    <input type="checkbox" name="Preferencia" value="lengua" id="historia">
    <label for="lengua">Lengua</label>
    <input type="checkbox" name="Preferencia" value="mates" id="historia">
    <label for="mates">Matemáticas</label><br>

    <textarea name="texto" id="texto" cols="40" rows="5" placeholder="Inserta aquí el Texto"></textarea>
  
    <br>
    <input type="submit" id="submit" value="Enviar">
    <input type="reset" id="reset" value="Limpiar">
</fieldset>
</form>
<?php
// Funciones

// Función para limpiar los caracteres no deseados e
// impedir la ejecución de scripts u otros.
function LimpiaInput($V){
    $V = strip_tags($V);
    $V = stripslashes($V);
    $V = htmlspecialchars($V);
    return $V;
}

?>
</body>
</html>