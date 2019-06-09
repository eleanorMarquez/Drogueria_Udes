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
            <a class="dropdown-item" href="../../funciones/desconectarKardex.php">Cerrar Sesion</a>
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
            <h6 class="dropdown-header">Informes</h6>
            <a class="dropdown-item" href="informe.php">Ver Informes</a>


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

          <section class="bg-dark text-white" id="">
            <div class="container text-center table-responsive">
              <br>
              <h2 class="mb-4">Tabla de Productos</h2>
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
                    <th>Numero</th>
          					<th>Codigo</th>
          					<th>Nombre</th>
          					<th>Descripcion</th>

          				</tr>
          			</thead>
          			<tbody class="cartBody">

                  <?php
                      while($registros=$resultado->fetch_assoc()){ ?>
                      <tr>

                          <td> <?php echo $registros['producto_id']; ?> </td>
                          <td> <?php echo $registros['producto_codigo']; ?> </td>
                          <td> <?php echo $registros['producto_nombre']; ?> </td>
                          <td> <?php echo $registros['producto_descripcion']; ?> </td>

                      </tr>
                  <?php } ?>

          			</tbody>

          		</table>

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
