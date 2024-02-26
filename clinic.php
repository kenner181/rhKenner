<?php

class Database
{
  
    private $hostname = "localhost";
  
    private $database = "rh";
  
    private $username = "root";
  
    private $password = "";
  
    private $charset = "utf8";


function conectar()
{
    try{
        $conexion = "mysql:host=". $this-> hostname. ";dbname=". $this-> database. ";charset=". $this->charset;
        $option=[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        ];
        $pdo = new PDO($conexion, $this->username, $this->password, $option);

        return $pdo;
    }
    catch(PDOException $e)
    {
        echo 'Error de conexion: ' . $e->getmessage();
        exit;
    }
}
} 
?>


<!DOCTYPE html>
<html>

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

  <title>Nosotros</title>

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

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            

            <span>
              A.K.A COMPANY
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="clinic.html">Nosotros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contacto</a>
                </li>
              </ul>
              
            </div>
            <div class="quote_btn-container  d-flex justify-content-center">
              <a href="login.html">
                Ingresar
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img-box">
                    <img src="images/pro1.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                    <h2 class="custom_heading">
                        Descubre nuestra experiencia en software.
                        <span>
                            A.K.A 
                        </span>
                    </h2>
                    <p>
                        Nuestro equipo se dedica a trazar un camino claro en el mundo digital. 
                        Buscamos constantemente la innovación y brindamos a nuestros clientes las herramientas 
                        y tecnologías necesarias para alcanzar sus metas y llevar sus proyectos al siguiente nivel.
                    </p>
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box">
                    <h2 class="custom_heading">  
                        Explora nuestra identidad
                    </h2>
                    <p>
                      Aquí puedes encontrar información sobre nuestro compromiso con la comunidad 
                      y cómo nos involucramos en iniciativas de responsabilidad social corporativa.
                    </p>
                  
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="images/prom2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

 <!-- info section -->
<section class="info_section layout_padding2">
  <div class="container">
    <div class="info_items">
      <a href="https://maps.app.goo.gl/sFwCbPJ8jVJPVKeCA" target="_blank">
        <div class="item ">
          <div class="img-box box-1">
          </div>
          <div class="detail-box">
            <p>
              Ubicación
            </p>
          </div>
        </div>
      </a>
      <a href="">
        <div class="item ">
          <div class="img-box box-2">
            <img src="" alt="">
          </div>
          <div class="detail-box">
            <p>
              +57 300 7845120
            </p>
          </div>
        </div>
      </a>
      <a href="">
        <div class="item ">
          <div class="img-box box-3">
            <img src="" alt="">
          </div>
          <div class="detail-box">
            <p>
              aka.comapany@gmail.com
            </p>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>


  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2024 A.K.A. COMPANY
      <a href="https://html.design/"></a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>


</body>

</html>