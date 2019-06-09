<?php
  session_start();

  if (isset($_SESSION['login'])) {


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
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="../../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/sistema.css" rel="stylesheet">
    <link rel="stylesheet" href="../../vendor/alertifyjs/css/alertify.min.css" />
    <link rel="stylesheet" href="../../vendor/alertifyjs/css/themes/default.min.css" />

  </head>

  <body id="page-top">

    <div class="container ">
          <div class="row profile text-center">
      		<div class="col-md-12">
      			<div class="profile-sidebar">
      				<!-- SIDEBAR USERPIC -->
      				<div class="profile-userpic">
      					<img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
      				</div>
      				<!-- END SIDEBAR USERPIC -->
      				<!-- SIDEBAR USER TITLE -->
      				<div class="profile-usertitle">

      					<div class="profile-usertitle-job">

      					</div>
      				</div>
      				<!-- END SIDEBAR USER TITLE -->
      				<!-- SIDEBAR BUTTONS -->
      				<div class="profile-userbuttons">
								<h2>Bienvenido al sistema <?php echo $_SESSION['login']['Nombre_Usuario'] ?></h2>
								<br>

                <a href="../../funciones/desconectar.php" class="btn btn-danger btn-sm">Cerrar Sesion</a>
								<br>
      				</div>
      				<!-- END SIDEBAR BUTTONS -->
      				<!-- SIDEBAR MENU -->

      				<!-- END MENU -->
      			</div>
      		</div>

      		<div class="container">

					<div>
						<br>
					<H1> <center>SERVICIOS <center></H1>
						<br>
					</div>

                  <div class="profile-content">
      			   <ul class="nav nav-pills">

									<li class="nav-item">
									<ul class="nav nav-tabs" id="myTab" role="tablist">

								  <li class="nav-item">
								    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">TENSION ARTERIAL</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">EXAMENES DE LABORATORIO</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">INYECTOLOGIA</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="citas-tab" data-toggle="tab" href="#citas" role="tab" aria-controls="citas" aria-selected="false">CITAS</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="productos-tab" data-toggle="tab" href="#productos" role="tab" aria-controls="productos" aria-selected="false">PRODUCTOS</a>
								  </li>
								</ul>


								<div class="tab-content" id="myTabContent">
								  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

										<div class="" id="">
											<form action="../../funciones/crerCitas.php" enctype="multipart/form-data" method="post" >

					              <br>

												<div class="form-group row">
												  <label class="col-sm-3 col-form-label" for="sel1">Nombre: </label>
											    <div class="col-sm-9">
														<input type="text" class="form-control letra" name="Nombre" value="<?php echo $_SESSION['login']['Nombre_Usuario'] ?>" placeholder="Digite tu Nombre..." required>
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
												  <label class="col-sm-3 col-form-label" for="sel1">Fecha de la Toma de Tension Arterial: </label>
											    <div class="col-sm-9">
														<input type="date" class="form-control" name="fecha" value="" required>
											    </div>
												</div>

												<div class="form-group row">
												  <label class="col-sm-3 col-form-label" for="sel1">Cita: </label>
											    <div class="col-sm-9">
														<input type="text" class="form-control" name="tipo" value="Tension Arterial"  required>
											    </div>
												</div>

												<div class="form-group row">
													<div class="col-sm-12">
														<input type="submit" class="btn btn-primary" name="" value="Registrar Cita">
											    </div>
												</div>

											</form>
										</div>

									</div>

								  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

										<div class="" id="">
											<br>
											<h4>Actualmente, no tiene ningun resultado de examen de laboratorio disponible.</h4>
										</div>

									</div>

								  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

										<div class="" id="">
											<form action="../../funciones/crerCitas.php" enctype="multipart/form-data" method="post" >

					              <br>

												<div class="form-group row">
												  <label class="col-sm-3 col-form-label" for="sel1">Nombre: </label>
											    <div class="col-sm-9">
														<input type="text" class="form-control letra" name="Nombre" value="<?php echo $_SESSION['login']['Nombre_Usuario'] ?>" placeholder="Digite tu Nombre..." required>
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
												  <label class="col-sm-3 col-form-label" for="sel1">Fecha de la inyectologia: </label>
											    <div class="col-sm-9">
														<input type="date" class="form-control" name="fecha" value="" required>
											    </div>
												</div>

												<div class="form-group row">
												  <label class="col-sm-3 col-form-label" for="sel1">Cita: </label>
											    <div class="col-sm-9">
														<input type="text" class="form-control" name="tipo" value="Inyectologia"  required>
											    </div>
												</div>

												<div class="form-group row">
													<div class="col-sm-12">
														<input type="submit" class="btn btn-primary" name="" value="Registrar Cita">
											    </div>
												</div>

											</form>
										</div>


									</div>

								  <div class="tab-pane fade" id="citas" role="tabpanel" aria-labelledby="citas-tab">

										<div class="" id="">
											<form action="../../funciones/crerCitas.php" enctype="multipart/form-data" method="post" >

					              <br>

												<div class="form-group row">
												  <label class="col-sm-3 col-form-label" for="sel1">Nombre: </label>
											    <div class="col-sm-9">
														<input type="text" class="form-control letra" name="Nombre" value="<?php echo $_SESSION['login']['Nombre_Usuario'] ?>" placeholder="Digite tu Nombre..." required>
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
												  <label class="col-sm-3 col-form-label" for="sel1">Fecha de la Cita General: </label>
											    <div class="col-sm-9">
														<input type="date" class="form-control" name="fecha" value="" required>
											    </div>
												</div>

												<div class="form-group row">
												  <label class="col-sm-3 col-form-label" for="sel1">Cita: </label>
											    <div class="col-sm-9">
														<input type="text" class="form-control" name="tipo" value="Cita General"  required>
											    </div>
												</div>

												<div class="form-group row">
													<div class="col-sm-12">
														<input type="submit" class="btn btn-primary" name="" value="Registrar Cita">
											    </div>
												</div>

											</form>
										</div>

									</div>

								  <div class="tab-pane fade" id="productos" role="tabpanel" aria-labelledby="productos-tab">
										<br>
										<h5>Dar clik en el boton, para ir a ver y comprar nuestros productos</h5>
										<a class="btn btn-primary btn-xl js-scroll-trigger" href="../../comprar.php">Ver!</a>
									</div>
								</div>

								</ul>
							</div>

          </div>

      	</div>



      	</div>
    </div>

<center>
<strong>Desarrollado por <a href="" target="_blank">DROGUERIA UDES</a></strong>
</center>
<br>
<br>

    <!-- Bootstrap core JavaScript -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../../vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="../../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../../js/creative.min.js"></script>
    <script src="../../js/main2.js"></script>
    <script src="../../vendor/alertifyjs/alertify.min.js"></script>
    <script type="../../text/javascript" src="js/functions.js"></script>

  </body>

</html>
