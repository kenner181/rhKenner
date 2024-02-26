<?php
// Archivo de conexión a la base de datos
include 'conexion/conexion.php';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el valor del campo 'tp_usuarios' del formulario
    $id_tipo_usuario = $_POST['id_tipo_usuario'];
    $tipo_usuario = $_POST['tipo_usuario'];

    // Preparar la consulta SQL para insertar un nuevo registro en la tabla 'roles'
     $sql = "INSERT INTO tipos_usuarios (id_tipo_usuario, tipo_usuario) VALUES ($id_tipo_usuario,'$tipo_usuario')";

    // Ejecutar la consulta SQL
    if ($conn->query($sql) === TRUE) {
        echo "Nuevo tipo de usuaurio insertado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tipo Usuarios</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/tipo_usu.css">
	
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Tipo Usuario
					</span>
                    <form action="tipo_usu.php" method="post">

					<div class="wrap-input100">
						<input class="input100" type="text" name="id_tipo_usuario" id="id_tipo_usuario" placeholder="id_tipo_usuario" readonly>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Ingrese Tipo Usuario">
						<input class="input100" type="text" name="tipo_usuario" id="tipo_usuario" placeholder="Tipo Usuario">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Registrar
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>