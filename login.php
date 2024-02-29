<?php
    session_start();
    require_once("conexion/conexion.php");
    $db = new Database();
    $con =$db->conectar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Basic -->
 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <!-- Mobile Metas -->
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
 <!-- Site Metas -->
 <meta name="keywords" content="" />
 <meta name="description" content="" />
 <meta name="author" content="" />

 <title>Iniciar Secion</title>

 <!-- slider stylesheet -->
 <link rel="stylesheet" type="text/css"
   href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

 <!-- bootstrap core css -->
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

 <!-- fonts style -->
 <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
 <!-- Custom styles for this template -->
 <link href="css/style.css" rel="stylesheet" />
 <!-- responsive style -->
 <link href="css/responsive.css" rel="stylesheet" />
</head>
<body>
    <!-- Modifica la sección de login -->
<section class="login_section layout_padding">
    <div class="container">
      <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-6">
          <form action="controller/inicio.php" method="POST" class="login_form">
            <div class="text-center">
              <h3>Login</h3>
            </div>
            <div class="form-group">
              <input type="text" name="id_usuario" placeholder="Cédula" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="contrasena" placeholder="Contraseña" class="form-control">
            </div>
            <div class="form-group">
              <a href="tu_ruta_de_recuperacion">¿Olvidaste tu contraseña?</a>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>
          </form>
          <div class="text-center">
            <p>¿No tienes una cuenta? <a href="tu_ruta_de_registro">Regístrate</a></p>
          </div>
          <div class="text-center mt-30">
            <a href="index.html" class="btn btn-secondary">Regresar</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end login section -->
  
  
  
</body>
</html>