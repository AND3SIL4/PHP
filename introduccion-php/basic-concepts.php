<!DOCTYPE html>
<html>
<head>
    <title>Introducción a PHP</title>
</head>
<body>

<h1>Bienvenido a PHP</h1>

<?php
// Esto es un comentario de una sola línea en PHP

/*
  Esto es un comentario
  de múltiples líneas en PHP
*/

// Declaración y asignación de variables
$mensaje = "¡Hola, mundo!";
$num1 = 10;
$num2 = 5;

// Imprimir variables y texto en pantalla
echo "<p>$mensaje</p>";
echo "<p>La suma de $num1 y $num2 es: " . ($num1 + $num2) . "</p>";

// Estructura condicional if
if ($num1 > $num2) {
    echo "<p>$num1 es mayor que $num2</p>";
} else {
    echo "<p>$num1 no es mayor que $num2</p>";
}

// Bucle while
$count = 1;
echo "<ul>";
while ($count <= 5) {
    echo "<li>Iteración $count</li>";
    $count++;
}
echo "</ul>";

// Bucle for
echo "<ol>";
for ($i = 1; $i <= 5; $i++) {
    echo "<li>Iteración $i</li>";
}
echo "</ol>";
?>

</body>
</html>
