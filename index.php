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

  <title>Inicio</title>

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
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="" alt="">
            <span>
              A.K.A Company
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
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
                    <h1>
                      Soluciones
                      <span>
                      Digitales Transformadoras
                      </span>
                    </h1>
                    <p>
                      Programando el Futuro de tu Empresa
                    </p>
                    <div class="btn-box">
                      <a href="contact.html" class="btn-2">
                        Contacto
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
                    <h1>
                      SUMÉRGETE EN
                      <span>
                      NUESTRO MUNDO DIGITAL
                      </span>
                    </h1>
                    <p>
                      Descubre Nuestras Creaciones Digitales
                    <div class="btn-box">
                      <a href="contact.html" class="btn-2">
                        Contacto
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
                    <h1>
                      NUESTROS CLIENTES AMAN
                      <span>
                        LO QUE HACEMOS
                      </span>
                    </h1>
                    <p>
                      Nos aman tanto que lo cuentan a todos sus amigos.
                    </p>
                    <div class="btn-box">
                      <a href="contact.html" class="btn-2">
                        Contacto
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- service section -->
  <br>
  <section class="service_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 offset-md-2">
          <h2 class="custom_heading">
            Nuestros <span>Servicios</span>
          </h2>
          <div class="container layout_padding2">
            <div class="row">
              <div class="col-md-4">
                <div class="img_box">
                  <img src="images/s-1.png" alt="">
                </div>
                <div class="detail_box">
                  <h6>
                    INVESTIGACIÓN
                  </h6>
                  <p>
                    En nuestro laboratorio de investigación, exploramos la innovación y creamos soluciones que transforman el futuro de tu empresa.
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="img_box">
                  <img src="images/s-2.png" alt="">
                </div>
                <div class="detail_box">
                  <h6>
                    CONTRUIDO
                  </h6>
                  <p>
                    Cada proyecto es una oportunidad para demostrar nuestro compromiso con la perfección y para superar las expectativas.
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="img_box">
                  <img src="images/s-3.png" alt="">
                </div>
                <div class="detail_box">
                  <h6>
                    ÓPTIMO
                  </h6>
                  <p>
                    Nuestro trabajo es óptimo porque ofrecemos soluciones digitales personalizadas que potencian el éxito de tu empresa.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div>
          </div>
        </div>
        <div class="col-md-4">
          <img src="images/tool.jpg" alt="" class="w-100">
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->


  <!-- buy section -->

  <section class="buy_section layout_padding">
    <div class="container">
      <h2>
        ¡Descubre el poder de la innovación en cada proyecto! Convierte tus ideas en realidad con nuestro equipo experto en soluciones digitales.      </h2>
    </div>
  </section>

  <!-- end buy section -->

  <!-- client section -->
  <section class="client_section layout_padding-bottom">
    <div class="container">
      <h2 class="custom_heading text-center">
        Que dicen nuestros
        <span>
          clientes
        </span>
      </h2>
      <p class="text-center">
        Están satisfechos con nuestro trabajo y nos lo hacen saber!
      </p>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="layout_padding2 pl-100">
              <div class="client_container ">
                <div class="img_box">
                  <img src="images/client.jpg" alt="">
                </div>
                <div class="detail_box">
                  <h5>
                    Sandy Mark
                  </h5>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea
                    commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="layout_padding2 pl-100">
              <div class="client_container ">
                <div class="img_box">
                  <img src="images/client.jpg" alt="">
                </div>
                <div class="detail_box">
                  <h5>
                    Sandy Mark
                  </h5>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea
                    commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="layout_padding2 pl-100">
              <div class="client_container ">
                <div class="img_box">
                  <img src="images/client.jpg" alt="">
                </div>
                <div class="detail_box">
                  <h5>
                    Sandy Mark
                  </h5>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea
                    commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>


    </div>

  </section>
  <!-- end client section -->

  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="info_items">
        <a href="">
          <div class="item ">
            <div class="img-box box-1">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                Location
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
                +02 1234567890
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
                demo@gmail.com
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
      &copy; 2019 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->
</body>
</body>

</html>