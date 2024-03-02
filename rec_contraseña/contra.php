<?php
// Aquí deberías incluir tu código de conexión a la base de datos si es necesario
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rh";

$conexion = mysqli_connect($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar el correo electrónico enviado desde el formulario
    $email = $_POST["email"];

    $query = "SELECT id_usuario FROM usuario WHERE correo = '$email'";
    $result = mysqli_query($conexion, $query);

    if ($result) {
        // Verificar si se encontraron resultados
        if (mysqli_num_rows($result) > 0) {
            // El correo electrónico existe en la base de datos
            $fila = mysqli_fetch_assoc($result);
            $id = $fila['id_usuario'];

            // Generar un token único
            $token = bin2hex(random_bytes(10));

            // Guardar el token en la base de datos junto con el ID del usuario y la fecha de creación

            // Enviar el correo electrónico con el enlace para restablecer la contraseña
            $reset_link = "localhost/rhKenner/rec_contra/res_contra.php?token=$token";
            $subject = "Recuperación de Contraseña";
            $message = "Hola,\n\nPara restablecer tu contraseña, por favor haz clic en el siguiente enlace:\n$reset_link";
            $headers = "From: kenner.lc90@gmail.com" . "\r\n" .
                       "Reply-To: $email" . "\r\n" .
                       "X-Mailer: PHP/" . phpversion();

            // Envía el correo electrónico
            if (mail($email, $subject, $message, $headers)) {
                echo "Se ha enviado un enlace de restablecimiento de contraseña a tu correo electrónico.";
            } else {
                echo "Hubo un problema al enviar el correo electrónico. Por favor, inténtalo de nuevo más tarde.";
            }
        } else {
            // El correo electrónico no existe en la base de datos
            echo "El correo electrónico no existe en la base de datos.";
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($conexion);
    }
}
?>

