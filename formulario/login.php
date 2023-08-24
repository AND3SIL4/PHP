<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Inicio de Sesión</title>
</head>
<body>

<h1>Iniciar Sesión</h1>

<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = "usuario"; // Nombre de usuario válido
    $password = "contraseña"; // Contraseña válida

    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    if ($input_username == $username && $input_password == $password) {
        echo "<p>Bienvenido, $username</p>";
    } else {
        echo "<p>Credenciales incorrectas</p>";
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="username">Usuario:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit">Iniciar Sesión</button>
</form>

</body>
</html>
