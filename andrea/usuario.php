<?php
    session_start();
    require_once("conexion/conexion.php");
    $db = new Database();
    $con =$db->conectar();
?>
<?php
    if ((isset($_POST["MM_insert"]))&&($_POST["MM_insert"]=="formreg"))
    {
      $id_usuario= $_POST['id_usuario'];
      $nombre= $_POST['nombre'];
      $id_tipo_cargo= $_POST['id_tipo_cargo'];
      $id_estado= $_POST['id_estado'];
      $correo= $_POST['correo'];
	  $id_tipo_usuario= $_POST['id_tipo_usuario'];
      $contrasena= $_POST['contrasena'];
	  $nit_empresa= $_POST['nit_empresa'];

      $sql = $con -> prepare ("SELECT * FROM usuario where id_usuario='$id_usuario'");
      $sql -> execute();
      $fila = $sql -> fetchAll(PDO::FETCH_ASSOC);
      
    
    
      if($id_usuario=="" || $nombre=="" || $id_tipo_cargo=="" || $id_estado=="" || $correo=="" || $id_tipo_usuario=="" || $contrasena=="" || $nit_empresa=="")
      {
        echo '<script>alert ("EXISTEN DATOS VACIOS"); </script>';
        echo '<script>window.location="usuarios.php"</script>';
      }
      else if($fila){
        echo '<script>alert ("USUARIO O TELEFONO YA REGISTRADO"); </script>';
        echo '<script>window.location="usuarios.php"</script>';
      }

            
      else
      {
        $pass_cifrado=password_hash($contrasena,PASSWORD_DEFAULT,array("pass"=>12));
        $insertSQL = $con->prepare ("INSERT INTO usuarios(id_usuario,nombre,id_tipo_cargo,id_estado,correo,id_tipo_usuario,contrasena,nit_empresa) 
        VALUES ('$id_usuario','$nombre', '$id_tipo_cargo', '$id_estado','$correo','$id_tipo_usuario','$pass_cifrado','$nit_empresa')");
        $insertSQL->execute();
        echo '<script>alert ("registro exitoso"); </script>';
        echo '<script>window.location="usuarios.php"</script>';
      }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Usuarios</title>
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
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
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
						Usuarios
					</span>
					<form class="col-4 p-3" method="post">

					<div class="wrap-input100 validate-input" data-validate = "Ingrese su documento	">
						<input class="input100" type="number" name="id_usuario" id="id_usuario" placeholder="Documento">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Ingrese su Nombre">
						<input class="input100" type="text" name="nombre" id="nombre" placeholder="Nombre">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="form-group">
        				<select class="form-control" name="id_tipo_cargo" id="id_tipo_cargo" >
						<option value="">Seleccione Cargo</option>
            		<!-- Agrega más opciones aquí según sea necesario -->
        				</select>
    				</div>

					<div class="form-group">
        				<select class="form-control" name="id_estado" id="id_estado">
						<option value="">Seleccione Estado</option>
        				</select>
    				</div>

					<div class="wrap-input100 validate-input" data-validate="Ingrese su Correo">
						<input class="input100" type="text" name="correo" id="correo" placeholder="Correo Electronico">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="form-group">
        				<select class="form-control" name="id_tipo_usuario" id="id_tipo_usuario">
						<option value="">Seleccione Tipo Usuario</option>
        				</select>
    				</div>

					<div class="wrap-input100 validate-input" data-validate = "Ingrese su Contraseña">
						<input class="input100" type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Ingrese NIT Empresa">
						<input class="input100" type="number" name="nit_empresa" id="nit_empresa" placeholder="NIT">
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











<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Inserción de Roles</title>
</head>
<body>

<h2>Insertar Nuevo Rol</h2>

<form action="roles.php" method="post">
    Tipo de Usuario:<br>
    <input type="text" name="tp_usuarios"><br>
    <input type="number" name="ID_USER" ><br>
    
    <input type="submit" value="Insertar Rol">
</form>

<?php
// Archivo de conexión a la base de datos
include '../conexion/db.php';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el valor del campo 'tp_usuarios' del formulario
    $tp_usuarios = $_POST['tp_usuarios'];
    $ID_USER = $_POST['ID_USER'];

    // Preparar la consulta SQL para insertar un nuevo registro en la tabla 'roles'
     $sql = "INSERT INTO roles (ID, TP_user) VALUES ($ID_USER,'$tp_usuarios')";

    // Ejecutar la consulta SQL
    if ($conn->query($sql) === TRUE) {
        echo "Nuevo rol insertado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

</body>
</html>