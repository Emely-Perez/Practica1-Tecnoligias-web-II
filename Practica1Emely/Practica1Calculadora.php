<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1: Calculadora básica</title>
</head>
<body>
   <Center> <H1>Ejercicio 1: Calculadora básica</H1>

<form method="post" action="<?php echo ($_SERVER["PHP_SELF"]); ?>">
    <label for="numero1">Ingrese Un numero:</label>
    <input type="text" name="numero1" required>
    <br>
    <label for="numero2">Ingrese el segundo numero:</label>
    <input type="text" name="numero2" required>
    <br>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los números ingresados por el usuario
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    // Realizar las operaciones.
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;

    // Verificar si el segundo número es diferente de cero antes de la división
    if ($numero2 != 0) {
        $division = $numero1 / $numero2;
    } else {
        $division = "No se puede dividir por cero.";
    }

    // Mostrar los resultados
    echo "<h2>Resultados:</h2>";
    echo "Suma: $suma <br>";
    echo "Resta: $resta <br>";
    echo "Multiplicación: $multiplicacion <br>";
    echo "División: $division";
}
?>
</Center>
</body>
</html>
