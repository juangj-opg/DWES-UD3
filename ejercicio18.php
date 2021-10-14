<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<style>
    #prov{
        text-align: right;
    }
    input#submit, input#reset{
        border: 1px solid black;
        border-radius: 5px;
    }
    #error{
        color: rgba(220,100,100);
        padding-left: 30px;
    }
    #error2{
        color: rgba(220,100,100);
    }
</style>
<body>
<h1>Ejercicio 18 - Formulario 2</h1>
<!-- La recogida de los datos sera vía POST -->

<!-- Creación del formulario -->
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="GET">
  <fieldset>
    <legend>Datos del usuario</legend>
    <table>
        <tr>
            <td><label for="poblacion">Poblacion</label></td>
            <td><input type="text" name="poblacion" id="poblacion"></td>
            <?php
            // Validación de Población
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $Poblacion = LimpiaInput($_POST["poblacion"]);
                if(empty($Poblacion)){ // Comprobación si está vacío
                    echo "<td id='error'> Rellena el campo <b>Población</b>, por favor.</td>";
                } else if(!preg_match("/^[a-zA-Z ]*$/", $Poblacion)){ //Comprobación si es solo texto
                    echo "<td id='error'> Usa solo carácteres en <b>Población</b>, por favor.</td>";
                }
            }
            ?>
        </tr>
        <tr>
            <td><label for="CP">Código Postal</label></td>
            <td><input type="text" name="CP" id="CP"></td>
            <?php
            // Validacion de Codigo Postal
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $Codigo_Postal = LimpiaInput($_POST["CP"]);
                if(empty($Codigo_Postal)){ // Comprobación si está vacío
                    echo "<td id='error'> Rellena el campo del <b>Código Postal</b>, por favor.</td>";
                } else if(!preg_match("/^[0-9]{5}/", $Codigo_Postal)){ //Comprobación si es solo numeros
                    echo "<td id='error'> Usa solo números en <b>Código Postal</b> y que sean <b>5 números</b>, por favor.</td>";
                }
            }
            ?>
        </tr>
    
    
    </table>

    <h3>Provincia:</h3>
    <table id="prov">
        <tr>
            <td>
                <label for="Sevilla">Sevilla</label>
                <input type="radio" name="provincia" value="Sevilla" id="Sevilla">
            </td>
            <td>
                <label for="Malaga">Málaga</label>
                <input type="radio" name="provincia" value="Malaga" id="Malaga">
            </td>
            <td>
                <label for="Cadiz">Cádiz</label>
                <input type="radio" name="provincia" value="Cadiz" id="Cadiz">
            </td>
            <td>
                <label for="Huelva">Huelva</label>
                <input type="radio" name="provincia" value="Huelva" id="Huelva"><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for="Granada">Granada</label>
                <input type="radio" name="provincia" value="Granada" id="Granada">
            </td>
            <td>
                <label for="Jaen">Jaén</label>
                <input type="radio" name="provincia" value="Jaen" id="Jaen">
            </td>
            <td>
                <label for="Cordoba">Córdoba</label>
                <input type="radio" name="provincia" value="Cordoba" id="Cordoba">
            </td>
            <td>
                <label for="Almeria">Almería</label>
                <input type="radio" name="provincia" value="Almeria" id="Almeria">
            </td>
        </tr>
    </table>
    <?php
        // Comprobación Provincia
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $Provincia = LimpiaInput($_POST["provincia"]);
            if(empty($Provincia)){
                echo "<p id='error2'> Selecciona una de las <b>Provincias</b>, por favor.</p>";
            }
        }
    ?>
    <h3>Descripción del municipio:</h3>
    <textarea name="descripcion" id="descripcion" cols="40" rows="5"></textarea>
    <?php
    // No hay que validar la descripción, pero si hacerlo seguro
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $Descripcion = LimpiaInput($_POST["descripcion"]);
    }
    ?>
    <input type="image" src="https://vanacco.com/wp-content/uploads/2020/06/Form-1-300x300.jpg" alt="Imagen para enviar" width="80px"><br>
    <input type="submit" value="Enviar" id="submit">
    <input type="reset" value="Limpiar" id="reset">
  </fieldset>
</form>
<?php
// Función usada en el ejercicio 17
// para limpiar los nombres de caracteres
// o posibles scripts.
function LimpiaInput($V){
    $V = strip_tags($V);
    $V = stripslashes($V);
    $V = htmlspecialchars($V);
    return $V;
}

// Enviamos todos los datos a otra página si todo esta correctamente
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Comprobamos la población que esté correctamente
    echo "<script> console.log('Comprobando la Población...') </script>";
    if(!empty($Poblacion) && preg_match("/^[a-zA-Z ]*$/", $Poblacion)){
        echo "<script> console.log('Exito. Comprobando el Codigo Postal...') </script>";
        // Comprobamos ahora que el CP esté correctamente
        if(!empty($Codigo_Postal) && preg_match("/^[0-9]{5}/", $Codigo_Postal)){
            echo "<script> console.log('Exito. Comprobando las provincias...') </script>";
            // Y por último, las provincias
            if(!empty($Provincia)){
                // Con todo probado, enviaremos todo a un nuevo PHP
                echo "<script> console.log('Exito. Todo está correcto.') </script>";
                // Duda, la redirección lo hace bien, pero, no sé si se envían los datos del formulario.
                $host  = $_SERVER['HTTP_HOST'];
                $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                $extra = 'correcto.php';
                header("Location: http://$host$uri/$extra");
                exit;
            } else{
                echo "<script> console.log('Fallo. El parametro de Provincia está mal.') </script>";
            }
        } else {
            echo "<script> console.log('Fallo. El parametro del Codigo Postal está mal.') </script>";
        }
    } else{
        echo "<script> console.log('Fallo. El parametro de Población está mal.') </script>";
    }
}
?>
</body>
</html>