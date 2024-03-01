<?php
require_once("./conexion/conexion.php");
session_start();
$DataBase = new Database;
$con = $DataBase->conectar();


// Obtener el ID de usuario de la URL
$idvariable = $_GET["id_permiso"];

// Eliminar el usuario de la base de datos
$eliminarConsulta = "DELETE FROM tram_permiso WHERE id_permiso   = $idvariable";
$con->query($eliminarConsulta);


// Redirigir de vuelta a la página de listado de usuarios
header("Location: tabla_per.php");
echo '<script>alert("Registro Eliminado Exitosamente");</script>';
exit;
?>