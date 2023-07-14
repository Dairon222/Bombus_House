<!DOCTYPE html>
<html lang="es-CO" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bombus House - Service</title>
    <meta name="theme-color" content="#33C1FF">
    <meta name="MobileOptimized" content="width">
    <meta name="HandhledFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar" content="black-traslucent">
    <!--Tags SEO-->
    <meta name="author" content="Bombus House">
    <meta name="description" content="Aplicativo para el hotel Bombus House">
    <meta name="keyworks" content="HOTEL, hotel, Hotel, APP, app, App, BOMBUS, bombus, Bombus, HOUSE, house, House, ABEJORRAL, abejorral, Abejorral">
    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="media/Logo Bombus House JPG.jpg">
    <link rel="apple-touch-icon" type="image/png" href="media/Logo Bombus House JPG.jpg">
    <link rel="apple-touch-startup-image" type="image/png" href="media/Logo Bombus House JPG.jpg">
    <!--Styles Boostrap 5.3.1 Alpha-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <!--app-->
    <link rel="stylesheet" href="assets/cssweb/servicios.css">
    <link rel="stylesheet" href="assets/cssweb/habi.css">
    <script src="app/Habitaciones/habi.js"></script>
    <!--DataTables Styles-->
    <link rel="stylesheet" type="text/css" href="../assets/datatables/css/dataTables.bootstrap5.min.css">
    <!--DataTables Buttons-->
    <link rel="stylesheet" type="text/css" href="../assets/datatables/css/buttons.bootstrap5.css">
    <!--DataTables Scripts-->
    <script type="text/javascript" src="../assets/datatables/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../assets/datatables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
  $(document).ready(function () {
    $('#tableresponsive').DataTable({
      responsive: true,
    });
  });
</script>
</head>
<body class="h-100">
	<!-- Agregar la navegación -->
  <div class="container-fluid bg-white sticky-top">
      <div class="container">
          <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
              <a href="index.html" class="navbar-brand">
                  <img class="img-fluid py-2" src="media/Logo Bombus House JPG.jpg" alt="Logo">
              </a>
              <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                  <div class="navbar-nav ms-auto">
                      <a href="Bienvenida.html" class="nav-item nav-link">Inicio</a>
                      <a href="servicios.php" class="nav-item nav-link">Servicios</a>
                      <a href="nosotros.html" class="nav-item nav-link">Nosotros</a>
                      <a href="galeria.html" class="nav-item nav-link">Galeria</a>
                      <a href="reservas.html" class="nav-item nav-link">Registro</a>
                  </div>
                  <div class="border-start ps-4 d-none d-lg-block">
                      <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
                  </div>
              </div>
          </nav>
      </div>
  </div>
		  <!-- Agregar el encabezado -->
		  <header class="py-5">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<h1 class="display-1 text-dark"><strong>RNT95809</strong></h1>
						<p class="lead mb-0 py-5 text-dark"><strong>Bombus... es un género de himenópteros de la familia Apidae que incluye las especies conocidas por el nombre común de abejorro.</strong></p>
            <button type="button" class="btn btn-dark d-grid gap-2 col-4 mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Iniciar
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Inicia sesion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Envía un mensaje a Bombus House por <a href="https://wa.me/message/75K2MUKHWM5HO1">WhatsApp</a>.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                  </div>
                </div>
              </div>
            </div>
					</div>
          
					<div class="col-lg-6">
						<img src="media/Logo Bombus House PNG.PNG" alt="Imagen de productos" class="img-fluid rounded">
					</div>
				</div>
			</div>
		</header>
    
    <main>
        <div class="container marketing pt-5 text-center">
          <hr class="featurette-divider">
          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">Hotel- Boutique</h2>
              <p class="lead text-center">Bombus House es una vivienda turistica premium con un ambiente tranquilo y confortable; para que te sientas en la comodidad de tu hogar. Tienes a tu disposicion zonas comunes como: balcones coloniales, salas de estar, cocina moderna y tradicional de leña, chimenea, patios exteriores y jardines interiores que acompañados de ambientacion tipica y el maravilloso paisaje natural te proporcionaran una experiencia sin igual.</p>
            </div>
            <div class="col-md-5">
              <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" style="width: 80%;" src="media/Varios 17.jpg" alt="Hotel Boutique">
            </div>
          </div>
          <hr class="featurette-divider">
          <div class="row featurette">
            <div class="col-md-7 order-md-2">
              <h2 class="featurette-heading">¡Abejorral, mucho pueblo!</h2>
              <p class="lead">Estamos ubicados en el municipio de Abejorral, donde encontraras diferentes actividades para realizar, como por ejemplo; recorrer su arquitectura colonial; lo que le dio el titulo de "pueblo de interés patrimonial"; disfrutar de las riquezas naturales de la zona, de los espacios de entretenimiento y cultura.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" style="width: auto;" src="media/Abejorral2.jpeg" alt="Abejorral">
            </div>
          </div>
          <hr class="featurette-divider">
          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">Habitaciones</h2>
              <p class="lead">Bombus House retorna a sus raíces familiares, nombrando las habitaciones igual que las fincas que forjaron a nuestros antepasados.</p>
              <p class="lead">Todas las habitaciones estan dotadas con:</p>
              <ul class="text-left ">
              <li class="lead">Lenceria de lujo</li>
              <li class="lead">Amenities</li>
              <li class="lead">Baño privado con ducha de agua caliente</li>
            </ul>
            </div>
            <div class="col-md-5">
              <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" style="width: 80%;" src="media/Varios 16.jpg" alt="Habitaciones">
            </div>
          </div>
          <hr class="featurette-divider">

          <h2>Servicios de calidad para una estadía memorable</h2>
          <p class="lead">Nos enorgullece ofrecer los siguientes servicios de alta calidad para satisfacer todas sus necesidades durante su estadía.</p>
          <h1  class="display-4 text-center pt-5">Nuestras Habitaciones</h1>
          <main class="my-4">
            <div class="container">
              <!--Section: Posts-->
              <section class="text-center mb-4" id="posts">
                <div class="row">
                  <div class="col-md-6 mb-4">
                  <h5>Habitación Pinal del Cerro</h5>
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded mb-4" data-mdb-ripple-color="light">
                      <img src="media/Habitación Pinal del Cerro 1.jpeg" alt="Habitacion 1" style="height: 500px;" class="w-100">
                      <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                      </a>
                    </div>
                    <p>Por noche para 1 o 2 personas</p>
                    <p>Tarifa:$355.000</p>
        
                    <a class="btn btn-info btn-rounded" href="pinalcerro.html" role="button">Ver más</a>
                  </div>
        
                  <div class="col-md-6 mb-4">
                  <h5>Habitación Los Rastrojos</h5>
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded mb-4" data-mdb-ripple-color="light">
                      <img src="media/Habitación Los Rastrojos 1.jpeg" alt="Habitacion 2" style="height: 500px;" class="w-100">
                      <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                      </a>
                    </div>
                    <p>Por noche para 1 o 2 personas</p>
                    <p>Tarifa:$310.000</p>
        
                    <a class="btn btn-info btn-rounded" href="rastrojos.html" role="button">Ver más</a>
                  </div>
                </div>
        
                <div class="row">
                  <div class="col-md-6 mb-4">
                  <h5>Habitación La Rocallosa</h5>
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded mb-4" data-mdb-ripple-color="light">
                      <img src="media/Habitación La Rocallosa 1.jpeg" alt="Habitacion 3" style="height: 500px;" class="w-100">
                      <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                      </a>
                    </div>
                    <p>Por noche para 1 o 2 personas</p>
                    <p>Tarifa:$265.000</p>
        
                    <a class="btn btn-info btn-rounded" href="rocallosa.html" role="button">Ver más</a>
                  </div>
        
                  <div class="col-md-6 mb-4">
                  <h5>Habitación Astillero</h5>
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded mb-4" data-mdb-ripple-color="light">
                      <img src="media/Habitación Astillero 1.jpeg" alt="Habitacion 4" style="height: 500px;" class="w-100">
                      <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                      </a>
                    </div>
                    <p>Por noche para 1 o 2 personas</p>
                    <p>Tarifa:$255.000</p>
        
                    <a class="btn btn-info btn-rounded" href="astillero.html" role="button">Ver más</a>
                  </div>
                </div>
        
                <div class="row">
                  <div class="col-md-6 mb-4">
                  <h5>Habitación La Cascada</h5>
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded mb-4" data-mdb-ripple-color="light">
                      <img src="media/Habitación La Cascada 1.jpeg" alt="Habitacion 5" style="height: 500px;" class="w-100">
                      <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                      </a>
                    </div>
                    <p>Por noche para 1 o 2 personas</p>
                    <p>Tarifa:$225.000</p>
        
                    <a class="btn btn-info btn-rounded" href="cascada.html" role="button">Ver más</a>
                  </div>
        
                  <div class="col-md-6 mb-4">
                  <h5>Proximamente...</h5>
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded mb-4" data-mdb-ripple-color="light">
                      <img src="media/Logo Bombus House PNG.PNG" alt="Habitacion 6" style="height: 500px;" class="w-100">
                      <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                      </a>
                    </div>

        
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Quisquam cupiditate veniam voluptatibus laudantium cum dolorem
                      illo. Quos architecto deserunt saepe.
                    </p>
        
                    <a class="btn btn-info btn-rounded" href="#!" role="button">Ver más</a>
                  </div>
                </div>
        
                <div class="row" id="spinner" style="display: none;">
                  <div class="col-md-12">
                    <div class="spinner-border mx-auto"></div>
                  </div>
                </div>
              </section>
              <!--Section: Posts-->
            </div>
      </main>
    <footer class="bg-dark text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3 text-light" style="background-color: rgba(0, 0, 0, 0.2);">
          <a class="text-light" href="#"><p>Politica de privacidad</p></a>
          <a class="text-light" href="#"><p>Terminos y condiciones</p></a>
          © 2023 Copyright:
          <a class="text-light" href="#">Bombus House</a>
        </div>
        <!-- Copyright -->
    </footer>
    <style>
      header {
        background: linear-gradient(rgba(99,76,68,255),rgba(100, 176, 0, 0.7)), center center no-repeat;
      }
    </style>
</body>
</html>
