<?php
  session_start();

  if (isset($_SESSION['login'])) {

    if ($_SESSION['login']['Tipo_Usuario']!="Control Inventario") {
      header('Location: index.php');
    }
  }else {
    header('Location: ../../index.html');
  }
?>

<?php
try {
  require('../../funciones/BD.php');
  $sql = "SELECT * FROM producto";
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

    <title>Control Kardex</title>

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
          <a class="nav-link" href="kardex.php">
            <i class="fas fa-home"></i>
            <span>Inicio</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Opciones Kardex</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Opciones</h6>
            <a class="dropdown-item" href="kardex.php">Listado Productos</a>
            <a class="dropdown-item" href="aggProductos.php">Agregar Productos</a>


          </div>
        </li>

      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="kardex.php">Inicio</a>
            </li>
            <li class="breadcrumb-item">
              <a href="kardex.php">Ver Productos</a>
            </li>
            <li class="breadcrumb-item">
              <a href="aggProductos.php">Agregar Nuevo Producto</a>
            </li>
            <li class="breadcrumb-item">
              <a href="controlkardex.php">Ver control del kardex</a>
            </li>
          </ol>



              <div class="row">
                <div class="col-xl-12 col-sm-6 mb-3">

                  <h4>Digite los siguientes datos </h4>

                </div>
              </div>


              <section class=" text-center">
                <form action="../../funciones/CargarDatos.php" enctype="multipart/form-data" method="post" >

                  <br>

    							<div class="form-group row">
    							  <label class="col-sm-3 col-form-label" for="sel1">Codigo del Producto: </label>
    						    <div class="col-sm-8">
    									<input type="text" class="form-control " name="codigoProducto" value="" placeholder="Ejem PROX..." required>
    						    </div>
    							</div>

    							<div class="form-group row">
    							  <label class="col-sm-3 col-form-label" for="sel1">Nombre del Producto: </label>
    						    <div class="col-sm-8">
    									<input type="text" class="form-control letra" name="Nombre" value="" placeholder="Digite un nombre..." required>
    						    </div>
    							</div>

    							<div class="form-group row">
    							  <label class="col-sm-3 col-form-label" for="sel1">Descripcion. </label>
    						    <div class="col-sm-8">
    									<input type="text" class="form-control letra" name="Descripcion" value="" placeholder="Digite una descripcion..." required>
    						    </div>
    							</div>

    							<div class="form-group row">
    							  <label class="col-sm-3 col-form-label" for="sel1">Imagen: </label>
    						    <div class="col-sm-8">
    									<input id="imagen" class="form-control" name="imagen" size="30" type="file" accept="image/*" required>
    						    </div>
    							</div>

    							<div class="form-group row">
    							  <label class="col-sm-3 col-form-label" for="sel1">Denominacion: </label>
    						    <div class="col-sm-8">
                      <select class="form-control" id="carrera" name="denominacion">
        						    <option value="">Seleccione</option>
        						    <option value="Colombia">Colombia</option>
        						    <option value="Venezuela">Venezuela</option>
                        <option value="Chile">Chile</option>
                        <option value="Estados Unidos">Estados Unidos</option>
                        <option value="España">España</option>
        						  </select>
    						    </div>
    							</div>

    							<div class="form-group row">
    							  <label class="col-sm-3 col-form-label" for="sel1">Clase Producto: </label>
    						    <div class="col-sm-8">
                      <select class="form-control" id="carrera" name="claseProducto">
        						    <option value="">Seleccione</option>
        						    <option value="Personales">Personales</option>
        						    <option value="Familiares">Familiares</option>
                        <option value="Aseo">Aseo</option>
                        <option value="Salud">Salud</option>
        						  </select>
                    </div>
    							</div>

                  <div class="form-group row">
    							  <label class="col-sm-3 col-form-label" for="sel1">Precio Unitario: </label>
    						    <div class="col-sm-8">
    									<input type="text" class="form-control" name="precio" value="" placeholder="Ejemplo: 5000" >
    						    </div>
    							</div>

                  <div class="form-group row">
    							  <label class="col-sm-3 col-form-label" for="sel1">Cantidad Unidades: </label>
    						    <div class="col-sm-8">
    									<input type="number" class="form-control" name="cantidad" value="1" min="1" max="100" >
    						    </div>
    							</div>



    							<div class="form-group row">
    								<div class="col-sm-12">
    									<input type="submit" class="btn btn-primary" name="" value="Registrar Producto">
    						    </div>
    							</div>

    						</form>
              </section>

            </div>
          </section>


        </div>
      </div>






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
