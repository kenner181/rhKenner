<?php
require_once("../conexion/conexion.php");
require_once("../controller/validarsesion.php");
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