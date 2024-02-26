<?php
session_start(); // Inicia la sesión

// Verifica si el formulario de inicio de sesión se envió
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos (debes ajustar estos valores según tu configuración)
    $servername = "tu_servidor";
    $username = "tu_usuario";
    $password = "tu_contraseña";
    $dbname = "tu_base_de_datos";

    // Crea la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtiene los datos del formulario
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Consulta SQL para verificar el usuario y la contraseña
    $sql = "SELECT * FROM usuarios WHERE nombre_usuario='$usuario' AND contrasena='$contrasena'";
    $result = $conn->query($sql);

    // Verifica si se encontró un usuario
    if ($result->num_rows == 1) {
        // Inicia la sesión y redirige al usuario a la página de inicio
        $_SESSION["usuario"] = $usuario;
        header("Location: pagina_de_inicio.php");
    } else {
        // Mensaje de error si no se encontró el usuario
        $error_message = "Usuario o contraseña incorrectos";
    }

    // Cierra la conexión a la base de datos
    $conn->close();
}
