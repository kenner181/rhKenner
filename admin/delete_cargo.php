<?php
session_start();

// Verificar si la sesión no está iniciada
if (!isset($_SESSION["id_usuario"])) {
    // Mostrar un alert y redirigir utilizando JavaScript
    echo '<script>alert("Debes iniciar sesión antes de acceder a la interfaz de administrador.");</script>';
    echo '<script>window.location.href = "../login.html";</script>';
    exit();
}
require_once("../conexion/conexion.php");
$DataBase = new Database;
$con = $DataBase->conectar();


// Obtener el ID de usuario de la URL
$idvariable = $_GET["id_tipo_cargo"];

// Eliminar el usuario de la base de datos
$eliminarConsulta = "DELETE FROM tipo_cargo WHERE id_tipo_cargo   = $idvariable";
$con->query($eliminarConsulta);


// Redirigir de vuelta a la página de listado de usuarios
header("Location: tabla_cargo.php");
echo '<script>alert("Registro Eliminado Exitosamente");</script>';
exit;
?>