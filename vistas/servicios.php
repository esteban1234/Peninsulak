<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
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
              <a href="#" ><img src="../img/peninsulak.png" class="img-responsive" alt="logo" /></a>
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
              <li><a href="../index.php">INICIO</a></li>
              <li><a href="nosotros.php">NOSOTROS</a></li>
              <li class="active"><a href="servicios.php">SERVICIOS</a></li>
              <li><a href="contacto.php">CONTACTO</a></li>
              <!-- <li><a href="#">BRANDS</a></li> -->
              <!-- <li><a href="#">SALE</a></li> -->
              <!-- <li><a href="#">BLOG</a></li> -->
              <!-- <li><a href="#">CONTACT</a></li> -->
          </ul>
          </div>
        </div>
        <br>

        <div class=" section text-center tit">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="" style="color: #713160;">SERVICIOS</h1> <br>
          <p class="lead">
          Bandas, artistas y profesionales del espectáculo para contratar.
          </p>
        </div>
      </div>
    </div>
  </div>
<div class="contenserv">
	<h2 class="text-center" style="color: #713160;">Artistas Famosos</h2> <br>
</div>
	
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<!-- <script src="../js/menu.js"></script> -->
</body>
</html>
