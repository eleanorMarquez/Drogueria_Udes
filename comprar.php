
<?php

	include_once('clases/producto.php');
	include_once('clases/carrito.php');
	$product = new Product();
	$cart = new Cart();
	if(isset($_GET['action'])){
		switch ($_GET['action']){
			case 'add':
				$cart->add_item($_GET['code'], $_GET['amount']);
			break;
			case 'remove':
				$cart->remove_item($_GET['code']);
			break;
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DROGUERIA UDES - Productos</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/alertifyjs/css/alertify.min.css" />
    <link rel="stylesheet" href="vendor/alertifyjs/css/themes/default.min.css" />

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Bienvenido a DROGUERIA UDES</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
						<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Volver</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#carrito">Carrito de Compras <i class="fas fa-cart-arrow-down"> (<?=$cart->get_total_items();?>)</i></a>
            </li>
          </ul>
        </div>
      </div>


    </nav>

    <header class="masthead bg-dark text-white text-center  d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong></strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Hecha un vistazo a nuestros productos principales.</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#services">Ver!</a>
          </div>
        </div>
      </div>
    </header>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Nuestros Productos mas Comprados</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container table-responsive">
        <div class="row">

            <?=$product->get_products22();?>

        </div>
        <br> <br>
        <center>
          <div class="">
            <p>Proximamente mas productos.</p>
          </div>
        </center>
      </div>
    </section>

    <section class="bg-dark text-white" id="carrito">
      <div class="container text-center table-responsive">

        <h2 class="mb-4">Carrito de Compra <i class="fas fa-cart-arrow-down"></i></h2>
        <br>
        <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label">Buscador:</label>
          <div class="col-10">
            <input type="text" class="form-control" id="searchTerm" name="" placeholder="Escriba algo..." onkeyup="doSearch()">
          </div>
        </div>

        <table class="table table-striped" id="miTabla">
    			<thead class="cartHeader" display="off">
    				<tr>

    				</tr>
    			</thead>
    			<tbody class="cartBody">
    				<tr>
    					<th>Codigo</th>
    					<th>Producto</th>
    					<th>Precio</th>
    					<th>Cantidad</th>
    					<th>Subtotal</th>
    					<th>Opcion</th>
    				</tr>
    				<?=$cart->get_items();
						?>
    			</tbody>

    		</table>

        <br> <br>
        <div class="container">
          <div class="row">
            <div class="col-lg-4 ml-auto text-center ">
              <p>Total items: </p>
              <input type="text" class="form-control"  name="" value="<?=$cart->get_total_items();?>">
            </div>
            <div class="col-lg-4 ml-auto text-center ">
              <p>Total a pagar: </p>
              <input type="text" class="form-control"  name="" value="<?=$cart->get_total_payment();?>">
            </div>
          </div>
        </div>
				<br><br>
				<button type="button" class="btn btn-info" name="button">Comprar Productos</button>
				<textarea name="area" rows="8" cols="80"></textarea>
      </div>


    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Para mayor informacion</h2>
            <hr class="my-4">
            <p class="mb-5">Nos puede contactar mediante nuestros numeros o correo electronico para mayor informacion.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>313-287-4709</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">estrella@hotmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>
    <script src="js/main2.js"></script>
    <script src="vendor/alertifyjs/alertify.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>

  </body>

</html>
