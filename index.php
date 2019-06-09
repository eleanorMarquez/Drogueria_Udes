
<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="shortcut icon" href="img/logoDRO.ico">
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
    <link href="css/creativeIndex.css" rel="stylesheet">
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
              <a class="nav-link js-scroll-trigger" href="#services">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="comprar.php">Comprar Productos <i class="fas fa-cart-arrow-down"> </i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#registro">Registrarme </i></a>
            </li>
						<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login.php">Iniciar Sesion </i></a>
            </li>
          </ul>
        </div>
      </div>


    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong></strong>
            </h1>
          </div>
        </div>
      </div>
    </header>

    <div class="container servicios" id="servicios">
      <div class="row text-center">
          <div class="col-lg-2 cont1">
            <a href="#"><i class="fas fa-capsules icon1"></i> Medicamentos </a>
          </div>
          <div class="col-lg-2 cont2">
            <a href="#"><i class="fas fa-user-alt icon1"></i> Cuidado Personal </a>
          </div>
          <div class="col-lg-2 cont3">
            <a href="#"><i class="fas fa-marker icon1"></i>Pedir Citas </a>
          </div>
          <div class="col-lg-2 cont3">
            <a href="#"><i class="fas fa-procedures icon1"></i> Examenes </a>
          </div>
          <div class="col-lg-2 cont2">
            <a href="#"><i class="fas fa-heartbeat icon1"></i> Tension Arterial </a>
          </div>
          <div class="col-lg-2 cont1">
            <a href="#"><i class="fas fa-syringe icon1"></i> Inyectologia </a>
          </div>
      </div>
    </div>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading textoP">Drogueria UDES</h2>
            <hr class="my-4">
						<h5>Mayor Drogueria Con Eventos y promociones para todos los clientes, especialmente a los estudiante
							de la Universidad de Santander Campus Cucuta</h5>
							<div class="imgcontainer">
								<img src="img/logoDRO.jpeg"  alt="Avatar" class="avatar1">
							</div>
          </div>
        </div>
      </div>

    </section>

		<section class="bg-dark text-white" id="registro">
			<div class="container bg-dark text-white text-center">
				<h2 class="mb-4 textoP">¿Deseas Registrarte? <i class="far fa-smile-wink"></i></h2>
				<h5 >Obtendras maravillosos privilegios como cliente nuestro, como pedir citas de manera mas facil, comprar
					productos mas rapido, mirar examenes, etc...</h5>
					<br>
					<br>
					<div class="form-group row">
					  <label class="col-sm-4 col-form-label" for="sel1">Seleccione un tipo de Registro de usuario: </label>
				    <div class="col-sm-8">
							<select class="form-control" id="dropdown" name="dropdown" onChange="pagoOnChange(this)">
						    <option value="">Seleccione</option>
						    <option value="Cliente" onclick="numeroale()">Cliente</option>
						    <option value="Estudiante" onClick="funcion()">Estudiante</option>
						    <option value="Docente" onClick="funcion()">Docente</option>
						  </select>
				    </div>
					</div>

        <!--
        <div class="row">

					<label for="imagen">Imagen:</label>
					<input id="imagen" name="imagen" size="30" type="file" accept="image/*" required>
					<input type="submit" value="Cambiar datos" >


        </div>
      -->

				<div id="divCliente" class="box" style="display:;"> Registro de Cliente normal
					<div class="" id="clienteDiv">
						<form action="funciones/cliente/crearCl.php" enctype="multipart/form-data" method="post" >

              <br>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Nombre: </label>
						    <div class="col-sm-9">
									<input type="text" class="form-control letra" name="Nombre" value="" placeholder="Digite tu Nombre..." required>
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Apellidos: </label>
						    <div class="col-sm-9">
									<input type="text" class="form-control letra" name="Apellido" value="" placeholder="Digite tu Apellido..." required>
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Cedula: </label>
						    <div class="col-sm-9">
									<input type="text" class="form-control numero" name="Cedula" value="" placeholder="Digite su Cedula..." required>
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Telefono: </label>
						    <div class="col-sm-9">
									<input type="text" class="form-control numero" name="Telefono" value="" placeholder="Digite su numero de Telefono..." required>
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">E-Mail: </label>
						    <div class="col-sm-9">
									<input type="email" class="form-control" name="correo" value="" placeholder="ejemplo@ejem.com" required>
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Codigo: </label>
						    <div class="col-sm-9">
									<input type="text" class="form-control" id="codigo_aleatorio" name="Codigo" placeholder="Digite un codigo como contraseña..." required>
						    </div>
							</div>

              <div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Direccion de Residencia: </label>
						    <div class="col-sm-9">
									<input type="text" class="form-control" name="direccion" value="" placeholder="Ejemplo: Calle XX N° XX Barrio XX" >
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Tipo de Cliente: </label>
						    <div class="col-sm-9">
									<input type="email" class="form-control" name="tipoCliente" value="Cliente" readonly="readonly"  required>
						    </div>
							</div>

							<div class="form-group row">
								<div class="col-sm-12">
									<input type="submit" class="btn btn-primary" name="" value="Registrarme">
						    </div>
							</div>

						</form>
					</div>
				</div>

				<div id="divEstudiante" class="box" style="display:;">Registro de Estudiante
					<div class="" id="estudianteDiv">
						<form action="funciones/estudiante/crearEs.php" enctype="multipart/form-data" method="post" >

              <br>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Nombre: </label>
						    <div class="col-sm-9">
									<input type="text" class="form-control letra"  name="Nombre" value="" placeholder="Digite tu Nombre..." required>
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Apellidos: </label>
						    <div class="col-sm-9">
									<input type="text" class="form-control letra"  name="Apellido" value="" placeholder="Digite tu Apellido..." required>
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Codigo: </label>
						    <div class="col-sm-9">
									<input type="text" class="form-control numero"  name="Codigo" value="" placeholder="Digite su codigo..."  required>
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Telefono: </label>
						    <div class="col-sm-9">
									<input type="text" class="form-control numero"  name="Telefono" value="" placeholder="Digite su numero de Telefono..." required>
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">E-Mail: </label>
						    <div class="col-sm-9">
									<input type="email" class="form-control" name="correo" value="" placeholder="ejemplo@ejem.com" required>
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Semestre N°: </label>
						    <div class="col-sm-9">
									<input type="number" class="form-control numero"  min="1" max="10" name="semestre" value="1" >
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Carrera: </label>
						    <div class="col-sm-9">
                  <select class="form-control" id="carrera" name="carrera">
    						    <option value="">Seleccione</option>
    						    <option value="Administracion Financiera">Administracion Financiera</option>
    						    <option value="Bacteriologia">Bacteriologia</option>
    						    <option value="Comercio Exterior">Comercio Exterior</option>
                    <option value="Derecho">Derecho</option>
                    <option value="Enfermeria">Enfermeria</option>
                    <option value="Fisiterapia">Fisiterapia</option>
                    <option value="Derecho">Derecho</option>
                    <option value="Ingenieria de Sistemas">Ingenieria de Sistemas</option>
                    <option value="Ingenieria Industrial">Ingenieria Industrial</option>
                    <option value="Mercadeo y publicidad">Mercadeo y publicidad</option>
                    <option value="Medicina">Medicina</option>
                    <option value="Psicologia">Psicologia</option>
                    <option value="Terapia Ocupacional">Terapia Ocupacional</option>
    						  </select>
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Tipo de Usuario: </label>
						    <div class="col-sm-9">
									<input type="email" class="form-control" name="tipoEstudiante" value="Estudiante" readonly="readonly"  required>
						    </div>
							</div>

							<div class="form-group row">
								<div class="col-sm-12">
									<input type="submit" class="btn btn-primary" name="" value="Registrarme">
						    </div>
							</div>

						</form>
					</div>
				</div>


				<div id="divDocente" class="box" style="display:;">Registro Docente
          <div class="" id="docenteDiv">
						<form action="funciones/docente/crearDo.php" enctype="multipart/form-data" method="post" >

              <br>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Nombre: </label>
						    <div class="col-sm-9">
									<input type="text" class="form-control letra" name="Nombre" value="" placeholder="Digite tu Nombre..." required>
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Apellidos: </label>
						    <div class="col-sm-9">
									<input type="text" class="form-control letra" name="Apellido" value="" placeholder="Digite tu Apellido..." required>
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Cedula: </label>
						    <div class="col-sm-9">
									<input type="text" class="form-control numero" name="Cedula" value="" placeholder="Digite su Cedula..." required>
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Telefono: </label>
						    <div class="col-sm-9">
									<input type="text" class="form-control numero" name="Telefono" value="" placeholder="Digite su numero de Telefono..." required>
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">E-Mail: </label>
						    <div class="col-sm-9">
									<input type="email" class="form-control" name="correo" value="" placeholder="ejemplo@ejem.com" required>
						    </div>
							</div>

              <div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Codigo: </label>
						    <div class="col-sm-9">
									<input type="text" class="form-control" id="codigo_aleatorio" name="Codigo" placeholder="Digite un codigo como contraseña..."  required>
						    </div>
							</div>


							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Tipo de Docente: </label>
						    <div class="col-sm-9">
									<input type="text" class="form-control" name="tipoDocente" value="Docente" readonly="readonly"  required>
						    </div>
							</div>

							<div class="form-group row">
								<div class="col-sm-12">
									<input type="submit" class="btn btn-primary" name="" value="Registrarme">
						    </div>
							</div>

						</form>
					</div>
        </div>

      </div>
		</section>

    <!-- Seccion de ir a comprar productos-->
    <section class="" id="carrito">
      <div class="container table-responsive">

        <div class="row">

          <div class="col-sm-4">
            <h2 class="mb-4 textoP">¿Que puedes hacer con nosotros ya registrados? </h2>
            <br>

              <ul>
                <li>Comprar Productos</li>
                <li>Pedir Cita</li>
                <li>Examenes de Laboratorio</li>
                <li>Toma de Tension Arterial</li>
                <li>Inyectologia</li>
                <li>Terapias Fisicas</li>
                <li>terapias Respiratorias</li>
              </ul>
          </div>

            <div class="col-sm-8 text-center">
              <h2 class="mb-4">¿Quieres ver nuestros ultimos productos con la mejor calidad? <i class="fas fa-cart-arrow-down"></i></h2>
              <br>

                <p>Entra al Siguiente enlace para visualizar mejor los productos</p>
                <a href="login.php">Ver Productos</a>
            </div>



        </div>



      </div>
    </section>

    <section  class="bg-dark text-white"id="contact">
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
