<?php
  session_start();

  if (isset($_SESSION['login'])) {

    if ($_SESSION['login']['Tipo_Usuario']!="Administrador") {
      header('Location: index.php');
    }
  }else {
    header('Location: ../../index.html');
  }
?>

<?php
try {
  require('../../funciones/BD.php');
  $sql = "SELECT * FROM login";
  $resultado = $mysqli->query($sql);
} catch (\Exception $e) {
  $error = $e->getMessage();
}


 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrador Drogueria</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Bienvenido al Sistema <?php echo $_SESSION['login']['Nombre_Usuario'] ?></a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">

        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Configuración</a>
            <a class="dropdown-item" href="../../funciones/desconectar.php">Cerrar Sesion</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="administrador.php">
            <i class="fas fa-home"></i>
            <span>Inicio</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Agg New Usuarios</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Usuarios:</h6>
            <a class="dropdown-item" href="aggCliente.php">Agg Cliente</a>
            <a class="dropdown-item" href="aggEstudiante.php">Agg Estudiante</a>
            <a class="dropdown-item" href="aggDocente.php">Agg Docente</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Administrativos:</h6>
            <a class="dropdown-item" href="aggAdministrador.php">Agg Administrador</a>
            <a class="dropdown-item" href="aggDocenteAdmin.php">Agg Docente Admin</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">De Empresa:</h6>
            <a class="dropdown-item" href="aggEmpleado.php">Agg Empleado</a>
          </div>
        </li>

      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="administrador.php">Menu</a>
            </li>
            <li class="breadcrumb-item active">Agg New Usuarios</li>
            <li class="breadcrumb-item active">Agg Cliente</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-12 col-sm-6 mb-3">

              <h4>Digite los siguientes datos para un exitoso registro y actualizacion de un Cliente</h4>

            </div>
          </div>


          <section class=" text-center">
            <form action="../../funciones/cliente/crearCl.php" enctype="multipart/form-data" method="post" >

              <br>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Nombre: </label>
						    <div class="col-sm-8">
									<input type="text" class="form-control letra" name="Nombre" value="" placeholder="Digite tu Nombre..." required>
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Apellidos: </label>
						    <div class="col-sm-8">
									<input type="text" class="form-control letra" name="Apellido" value="" placeholder="Digite tu Apellido..." required>
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Cedula: </label>
						    <div class="col-sm-8">
									<input type="text" class="form-control numero" name="Cedula" value="" placeholder="Digite su Cedula..." required>
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Telefono: </label>
						    <div class="col-sm-8">
									<input type="text" class="form-control numero" name="Telefono" value="" placeholder="Digite su numero de Telefono..." required>
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">E-Mail: </label>
						    <div class="col-sm-8">
									<input type="email" class="form-control" name="correo" value="" placeholder="ejemplo@ejem.com" required>
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Codigo: </label>
						    <div class="col-sm-8">
									<input type="text" class="form-control numero" id="codigo_aleatorio" name="Codigo" value=""  required placeholder="Digite un codigo como contraseña...">
						    </div>
							</div>

              <div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Direccion de Residencia: </label>
						    <div class="col-sm-8">
									<input type="text" class="form-control" name="direccion" value="" placeholder="Ejemplo: Calle XX N° XX Barrio XX" >
						    </div>
							</div>

							<div class="form-group row">
							  <label class="col-sm-3 col-form-label" for="sel1">Tipo de Cliente: </label>
						    <div class="col-sm-8">
									<input type="email" class="form-control" name="tipoCliente" value="Cliente" readonly="readonly"  required>
						    </div>
							</div>

							<div class="form-group row">
								<div class="col-sm-12">
									<input type="submit" class="btn btn-primary" name="" value="Registrarme">
						    </div>
							</div>

						</form>
          </section>




        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Drogueria UDES 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
