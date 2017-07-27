
<?php include 'vistas/encabezado.php' ?>
<body>

 <nav id="navtop">
        <div class="container-fluid">
      <!--header navbar top left -->
              <ul class="nav navbar-nav" id="nav-left">
                <li><a style="color: #b8b8b8 !important;" href="#">
                  <i class="fa fa-user" aria-hidden="true"></i>EVENTOS</a>
                </li>
                <li><a style="color: #b8b8b8 !important;" href="#">
                  <i class="fa fa-check-square-o" aria-hidden="true"></i>ESPECTACULOS</a>
                </li>
                <li><a style="color: #b8b8b8 !important;" href="#">
                  <i class="fa fa-bullhorn" aria-hidden="true"></i>MARKETING</a>
                </li>
              </ul>
      <!--header navbar top right -->
              <ul class="nav navbar-nav nav-pills" id="nav-right">
                <li>
                  <a style="color: #b8b8b8 !important;" href="#">
                        <i class="fa fa-users" aria-hidden="true"></i>SOCIAL</a>
                </li>
                <li>
                  <a style="color: #b8b8b8 !important;" href="#">
                        <i class="fa fa-suser-secret" aria-hidden="true"></i>ARTISTAS</a>
                </li>

                <li>
                  <a style="color: #b8b8b8 !important;" href="#">
                        <i class="fa fa-comments" aria-hidden="true"></i>ACTIVIDADES</a>
                </li>

                <!-- <li><button type="btn btn-default navbar-btn">ENG</button></li> -->

                <!-- <li><button type="btn btn-default navbar-btn">USD</button></li> -->
              </ul>

          </div>
        </nav>
      <!--header navbar LOGO -->
        <div class="text-center" id="logo">
              <a href="#" ><img src="img/peninsulak.png" class="img-responsive" alt="logo" /></a>
        </div>
      <!-- TOOGLE MAIN NAVIGATION -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

      <!--  MAIN NAVIGATION -->
        <div class="collapse navbar-collapse" id="main-navigation">
          <div class="container">

          <ul class="nav nav-justified nav-pills">
              <li class="active"><a href="index.php">INICIO</a></li>
              <li><a href="vistas/nosotros.php">NOSOTROS</a></li>
              <li><a href="vistas/servicios.php">SERVICIOS</a></li>
              <li><a href="vistas/contacto.php">CONTACTO</a></li>
              <!-- <li><a href="#">BRANDS</a></li> -->
              <!-- <li><a href="#">SALE</a></li> -->
              <!-- <li><a href="#">BLOG</a></li> -->
              <!-- <li><a href="#">CONTACT</a></li> -->
          </ul>
          </div>
        </div>
        <br>
<!--header navbar END -->

<div class="banner">
</div>


<article class="contratacion">
  <p>CONTRATACIÓN DE ARTISTAS Y FAMOSOS PARA <br>
<b style="color: #000;">MARKETING Y EVENTOS</b></p>

<div style="text-align: center; margin-top: 5%;">
      <a class="btn btn-danger btn-outline btn-lg" href="vistas/contacto.php">¡SOLICITA INFORMACION!</a>
    </div>
</article>

<article class="contenpuntos">
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div style="text-align: center;">
              <span class="fa-stack fa-3x">
                <i class="fa fa-square-o fa-stack-2x"></i>
                <i class="fa fa-check fa-stack-1x"></i>
              </span>
            </div>
            <h4 class="text-center">Presupuestos INMEDIATOS
(en menos de 24h)</h4>
          </div>
          <div class="col-md-3">
            <div style="text-align: center;">
              <span class="fa-stack fa-3x">
                <i class="fa fa-square-o fa-stack-2x"></i>
                <i class="fa fa-sitemap fa-stack-1x"></i>
              </span>
            </div>
            <h4 class="text-center">Perfiles MEDIÁTICOS y de ALTO NIVEL</h4>
          </div>
          <div class="col-md-3">
            <div style="text-align: center;">
              <span class="fa-stack fa-3x">
                <i class="fa fa-square-o fa-stack-2x"></i>
                <i class="fa fa-heart-o fa-stack-1x"></i>
              </span>
            </div>
            <h4 class="text-center">Las mejores marcas
CONFIAN EN NOSOTROS</h4>
          </div>
          <div class="col-md-3">
            <div style="text-align: center;">
              <span class="fa-stack fa-3x">
                <i class="fa fa-square-o fa-stack-2x"></i>
                <i class="fa fa-star fa-stack-1x"></i>
              </span>
            </div>
            <h4 class="text-center">Amplio catálogo de
PERSONALIDADES</h4>
          </div>
        </div>
      </div>
    </div>
</article>


<article class="contenpuntos2">
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div style="text-align: center;">
              <img src="img/fiesta.png" alt="">
            </div>
            <h4 class="text-center">Ideas para fiestas</h4>
          </div>
          <div class="col-md-3">
            <div style="text-align: center;">
              <img src="img/famosos.png" alt="">
            </div>
            <h4 class="text-center">Artistas famosos</h4>
          </div>
          <div class="col-md-3">
            <div style="text-align: center;">
              <img src="img/musico.png" alt="">
            </div>
            <h4 class="text-center">Músicos y Bandas</h4>
          </div>
          <div class="col-md-3">
            <div style="text-align: center;">
              <img src="img/teatro.png" alt="">
            </div>
            <h4 class="text-center">Artistas y espectáculos</h4>
          </div>
        </div>
      </div>
    </div>
    <div style="text-align: center; margin-top: 5%;">
      <a class="btn btn-danger btn-outline btn-lg" href="vistas/contacto.php">CONTACTANOS</a>
    </div>
</article>


      



<?php include 'vistas/pie.php' ?>
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://use.fontawesome.com/f12e4a6b3c.js"></script>
<!-- <script src="js/menu.js"></script> -->
</body>
</html>
