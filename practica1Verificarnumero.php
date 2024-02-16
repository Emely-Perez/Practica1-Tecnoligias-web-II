<!DOCTYPE html>
<html>
<head>
    <title>Verificar Par o Impar</title>
</head>
<body>
    <center>
<h2>Ejercicio 2 Verificar si un número es par o impar</h2>
<form method="post" action="<?php echo ($_SERVER["PHP_SELF"]); ?>">
    <label for="numero">Ingrese un número:</label>
    <input type="text" name="numero" required>
    <br>
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el número ingresado por el usuario
    $numero = $_POST["numero"];

    // Verificar si el número es par o impar
    if ($numero % 2 == 0) {
        echo "<h2>El número $numero es PAR.</h2>";
    } else {
        echo "<h2>El número $numero es IMPAR.</h2>";
    }
}
?>
</center>
</body>
</html>