<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
</head>
<body>

<h1>Registro de Usuario</h1>

<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validación y almacenamiento de datos (aquí es donde normalmente se usaría una base de datos)
    if (!empty($username) && !empty($email) && !empty($password)) {
        // Aquí se supone que se guardarían los datos en una base de datos, pero en este ejemplo solo se muestra un mensaje.
        echo "<p>¡Registro exitoso para $username!</p>";
    } else {
        echo "<p>Por favor, complete todos los campos</p>";
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="username">Usuario:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="email">Correo Electrónico:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit">Registrar</button>
</form>

</body>
</html>
