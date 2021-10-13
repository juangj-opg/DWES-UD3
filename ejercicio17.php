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
<form action="">
<!-- Primera parte del formulario -->
  <fieldset>
    <legend>Formulario de opciones</legend>
    <table>
        <tr>
            <td><label for="nombre">Nombre</label></td>
            <td><input type="text" name="nombre" id="nombre"></td>
        </tr>
        <tr>
            <td><label for="apellidos">Apellidos</label></td>
            <td><input type="text" name="apellidos" id="apellidos"></td>
        </tr>
        <tr>
            <td><label for="direccion">Direccion</label></td>
            <td><input type="text" name="direccion" id="direccion"></td>
        </tr>
    </table>

    <input type="radio" name="conexion" value="wifi" id="wifi">
    <label for="wifi">WiFi</label>
    <input type="radio" name="conexion" value="cable" id="cable">
    <label for="cable">Cable</label>
    <input type="radio" name="conexion" value="fibra" id="fibra">
    <label for="fibra">Fibra</label>
    
    <table>
        <tr>
            <td><label for="instituto">Instituto</label></td>
            <td><input type="text" name="instituto" id="instituto"></td>
        </tr>
        <tr>
            <td><label for="estudios">Estudios elegidos</label></td>
            <td><input type="text" name="estudios" id="estudios"></td>
        </tr>
    </table>

    <select name="dia" id="dia" size="4" multiple>
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
</body>
</html>