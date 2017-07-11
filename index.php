<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Valle Rodriguez Julio Cesar">
	<meta name="description" content="Abarrotera con precios competitivos">
	<meta name="keywords" content="producto mayoreo menudeo ofertas celaya cortazar">
    <link rel="icon" href="images/tecnocom.ico">
    <title>Abarrotera Galaxia</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <link href="css/main.css" rel="stylesheet"> 
</head>
<body>
	<div class="container">
		<div id="wrapper">
			<header>
				<div class="container-fluid">
					<div class="col-md-8">Logo</div>	
					<div class="col-md-4">
						<div class="row" id="login">
							<form class="form-horizontal" action="ingresa.php">
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Registrarse</button>
                  <button type="submit" class="btn btn-danger">
                    <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Ingresar
                  </button>
                </div><!-- /.form-group -->
              </form>
						</div>
						<div class="row" id="search">
							<form class="form-horizontal">
								<div class="form-group">
  								<div class="input-group">
                    <div class="input-group-addon">
                      <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </div><!-- /.input-group -->
                    <input type="text" class="form-control" name="search" placeholder="Buscar...">
                    <span class="input-group-btn">
                      <button class="btn btn-success" type="submit">Buscar</button>
                    </span>
                  </div><!-- /.input-group -->
								</div>
							</form>
						</div>
					</div>	
				</div>
			</header>
			<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav_caterorias" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div><!-- /.navbar-header -->

          <div class="collapse navbar-collapse" id="nav_caterorias">
            <ul class="nav navbar-nav">
              <li><a href="#">Inicio</a></li>
              <li><a href="#">Quiénes Somos</a></li>
              <li><a href="#">Productos</a></li>
              <li><a href="#">Promociones</a></li>
              <li><a href="#">Contacto</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
			<div class="container-fluid" >
				<div class="col-md-8">
					<section>
						<!-- Carousel
			      ================================================== -->
			      <div id="myCarousel" class="carousel slide" data-ride="carousel">
			        <!-- Indicators -->
			        <ol class="carousel-indicators">
			          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			          <li data-target="#myCarousel" data-slide-to="1"></li>
			          <li data-target="#myCarousel" data-slide-to="2"></li>
			        </ol>
			        <div class="carousel-inner" role="listbox">
			          <div class="item active">
			            <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
			            <div class="container">
			              <div class="carousel-caption">
			                <h1>Example headline.</h1>
			                <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
			                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
			              </div>
			            </div>
			          </div>
			          <div class="item">
			            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
			            <div class="container">
			              <div class="carousel-caption">
			                <h1>Another example headline.</h1>
			                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
			              </div>
			            </div>
			          </div>
			          <div class="item">
			            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
			            <div class="container">
			              <div class="carousel-caption">
			                <h1>One more for good measure.</h1>
			                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
			              </div>
			            </div>
			          </div>
			        </div>
			        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			          <span class="sr-only">Previous</span>
			        </a>
			        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			          <span class="sr-only">Next</span>
			        </a>
			      </div><!-- /.carousel -->  

					</section>
				</div>	
				<div class="col-md-4" id="aside">
					<aside>
						<div class="row">
							<div class="panel panel-info">
							  <div class="panel-heading">
							    <h3 class="panel-title">Más Vendidos</h3>
							  </div>
							  <div class="panel-body">
							    Panel content
							  </div>
							</div>
						</div>	
						<div class="row">
							<div class="panel panel-danger">
							  <div class="panel-heading">
							    <h3 class="panel-title">Otros Articulos</h3>
							  </div>
							  <div class="panel-body">
							    Panel content
							  </div>
							</div>
						</div>	
					</aside>
				</div>	
			</div>
			<footer>
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4">
              <div class="container">
                <div class="footer_color">
                  <h4>Sucursales</h4>
                  <ul>
                    <li><a href="quienes_somos.php">Sucursales</a></li>
                    <li><a href="ubicacion.php">Mapa de Ubicacion</a></li>
                    <li><a href="aviso_privacidad.php">Horario</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <div class="container">
                <div class="footer_color">
                  <h4>Ayuda</h4>
                  <ul>
                    <li><a href="">Mi Cuenta</a></li>
                    <li><a href="">Historial de Compras</a></li>
                    <li><a href="">Mis Favoritos</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <div class="container">
                <div class="footer_color">
                  <h4>Servicio al Cliente</h4>
                  <ul>
                    <li><a href="contacto.php">Contactános</a></li>
                    <li><a href="opciones_pagos.php">Opciones de Pago</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- /.row -->  
      </footer>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>    
   <script src="js/bootstrap.min.js"></script>
</body>
</html>