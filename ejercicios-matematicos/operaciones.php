<!DOCTYPE html>
<html>
<head>
    <title>Operaciones Matemáticas en PHP</title>
</head>
<body>

<h1>Operaciones Matemáticas en PHP</h1>

<?php
// Operaciones matemáticas básicas
$num1 = 10;
$num2 = 5;

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$producto = $num1 * $num2;
$division = $num1 / $num2;
$modulo = $num1 % $num2;

// Imprimir los resultados
echo "<p>Suma: $suma</p>";
echo "<p>Resta: $resta</p>";
echo "<p>Producto: $producto</p>";
echo "<p>División: $division</p>";
echo "<p>Módulo: $modulo</p>";

// Operaciones abreviadas
$valor = 5;
$valor += 2; // Equivale a $valor = $valor + 2;
echo "<p>Valor después de suma abreviada: $valor</p>";

$valor *= 3; // Equivale a $valor = $valor * 3;
echo "<p>Valor después de producto abreviado: $valor</p>";

// Funciones matemáticas incorporadas
$numero = 16;
$raizCuadrada = sqrt($numero);
$potencia = pow($numero, 3); // Elevar al cubo
$redondeo = round(7.8);

echo "<p>Raíz cuadrada de $numero: $raizCuadrada</p>";
echo "<p>$numero elevado al cubo: $potencia</p>";
echo "<p>Redondeo de 7.8: $redondeo</p>";
?>

</body>
</html>
