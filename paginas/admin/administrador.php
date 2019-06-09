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

//Clientes
  try {
    require('../../funciones/BD.php');
    $sql = "SELECT * FROM cliente";
    $resultadoCliente = $mysqli->query($sql);
  } catch (\Exception $e) {
    $error = $e->getMessage();
  }

//Estudiantes
  try {
    require('../../funciones/BD.php');
    $sql = "SELECT * FROM estudiante";
    $resultadoEstudiante = $mysqli->query($sql);
  } catch (\Exception $e) {
    $error = $e->getMessage();
  }

//docentes
  try {
    require('../../funciones/BD.php');
    $sql = "SELECT * FROM docente";
    $resultadoDocente = $mysqli->query($sql);
  } catch (\Exception $e) {
    $error = $e->getMessage();
  }

  //empleados
    try {
      require('../../funciones/BD.php');
      $sql = "SELECT * FROM empleado";
      $resultadoEmpleado = $mysqli->query($sql);
    } catch (\Exception $e) {
      $error = $e->getMessage();
    }

//admins
  try {
    require('../../funciones/BD.php');
    $sql = "SELECT * FROM login WHERE Tipo_Usuario ='Administrador'";
    $resultadoAdmin = $mysqli->query($sql);
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
            <li class="breadcrumb-item active">Inicio</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-street-view"></i>
                  </div>
                  <div class="mr-5"><?php echo $resultadoCliente->num_rows; ?> Clientes Registrados </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#" id="Vercliente">
                  <span class="float-left">Ver listado</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-user-graduate"></i>
                  </div>
                  <div class="mr-5"><?php echo $resultadoEstudiante->num_rows; ?> Estudiantes Registrados</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#" id="verEstudiante">
                  <span class="float-left">Ver Listado</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-user-tie"></i>
                  </div>
                  <div class="mr-5"><?php echo $resultadoDocente->num_rows; ?> Docentes Registrados</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#" id="verDocente">
                  <span class="float-left">Ver Listado</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-dark o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-users"></i>
                  </div>
                  <div class="mr-5"><?php echo $resultadoEmpleado->num_rows; ?> Empleados Registrados</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#" id="verEmpleado">
                  <span class="float-left">Ver Listado</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-user-cog"></i>
                  </div>
                  <div class="mr-5"><?php echo $resultadoAdmin->num_rows; ?> Admin Registrados</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#" id="cerrar">
                  <span class="float-left">Cerrar Ventanas</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>

          <!--Tabla Cliente-->
          <section class="bg-dark text-white" id="tablaCliente">
            <div class="container text-center table-responsive">
              <br>
              <h2 class="mb-4">Tabla Clientes</h2>
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
          					<th>Nombre</th>
          					<th>Apellido</th>
          					<th>Cedula</th>
          					<th>Telefono</th>
          					<th>Correo</th>
          					<th>Codigo</th>
                    <th>Direccion de residencia</th>
                    <th>Tipo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
          				</tr>
          			</thead>
          			<tbody class="cartBody">

                  <?php
                      while($registros=$resultadoCliente->fetch_assoc()){ ?>
                      <tr>

                          <td> <?php echo $registros['id_cliente']; ?> </td>
                          <td> <?php echo $registros['Nombre']; ?> </td>
                          <td> <?php echo $registros['Apellido']; ?> </td>
                          <td> <?php echo $registros['Cedula']; ?> </td>
                          <td> <?php echo $registros['Telefono']; ?> </td>
                          <td> <?php echo $registros['Correo']; ?> </td>
                          <td> <?php echo $registros['Codigo']; ?> </td>
                          <td> <?php echo $registros['Direccion_residencia']; ?> </td>
                          <td> <?php echo $registros['Tipo_Usuario']; ?> </td>

                          <td>
                              <a href="actualizarCliente.php?id=<?php echo $registros['id_cliente']; ?>" class="btn btn-primary">Editar</a>
                          </td>
                          <td >
                              <a href="../funciones/borrarCliente.php?id=<?php echo $registros['id_cliente']; ?>&codigoBorrar=<?php echo $registros['Codigo']; ?>" class="btn btn-danger">Borrar</a>
                          </td>
                      </tr>
                  <?php } ?>

          			</tbody>

          		</table>

            </div>
          </section>


          <!--Tabla Estudiante-->
          <section class="bg-dark text-white" id="tablaEstudiante">
            <div class="container text-center table-responsive">
              <br>
              <h2 class="mb-4">Tabla estudiante</h2>
              <br>
              <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Buscador:</label>
                <div class="col-10">
                  <input type="text" class="form-control" id="searchTerm2" name="" placeholder="Escriba algo..." onkeyup="doSearch2()">
                </div>
              </div>

              <table class="table table-striped" id="miTabla2">
          			<thead class="cartHeader" display="off">
                  <tr>
                    <th>Numero</th>
          					<th>Nombre</th>
          					<th>Apellido</th>
                    <th>Codigo</th>
          					<th>Telefono</th>
          					<th>Correo</th>
                    <th>N° Semestre </th>
                    <th>Carrera</th>
                    <th>Tipo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
          				</tr>
          			</thead>
          			<tbody class="cartBody">

                  <?php
                      while($registros=$resultadoEstudiante->fetch_assoc()){ ?>
                      <tr>

                          <td> <?php echo $registros['id_estudiante']; ?> </td>
                          <td> <?php echo $registros['Nombre']; ?> </td>
                          <td> <?php echo $registros['Apellido']; ?> </td>
                          <td> <?php echo $registros['Codigo']; ?> </td>
                          <td> <?php echo $registros['Telefono']; ?> </td>
                          <td> <?php echo $registros['email']; ?> </td>
                          <td> <?php echo $registros['numero_semestre']; ?> </td>
                          <td> <?php echo $registros['carrera']; ?> </td>
                          <td> <?php echo $registros['tipo_usuario']; ?> </td>

                          <td>
                              <a href="actualizarEstudiante.php?id=<?php echo $registros['id_estudiante']; ?>" class="btn btn-primary">Editar</a>
                          </td>
                          <td >
                              <a href="../funciones/borrarEstudiante.php?id=<?php echo $registros['id_estudiante']; ?>&codigoBorrar=<?php echo $registros['Codigo']; ?>" class="btn btn-danger">Borrar</a>
                          </td>
                      </tr>
                  <?php } ?>

          			</tbody>

          		</table>

            </div>
          </section>


          <!--Tabla Docente-->
          <section class="bg-dark text-white" id="tablaDocente">
            <div class="container text-center table-responsive">
              <br>
              <h2 class="mb-4">Tabla Docente</h2>
              <br>
              <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Buscador:</label>
                <div class="col-10">
                  <input type="text" class="form-control" id="searchTerm3" name="" placeholder="Escriba algo..." onkeyup="doSearch3()">
                </div>
              </div>

              <table class="table table-striped" id="miTabla3">
          			<thead class="cartHeader" display="off">
                  <tr>
                    <th>Numero</th>
          					<th>Nombre</th>
          					<th>Apellidos</th>
                    <th>Cedula</th>
          					<th>Telefono</th>
          					<th>Correo</th>
                    <th>Codigo </th>
                    <th>Tipo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
          				</tr>
          			</thead>
          			<tbody class="cartBody">

                  <?php
                      while($registros=$resultadoDocente->fetch_assoc()){ ?>
                      <tr>

                          <td> <?php echo $registros['id_docente']; ?> </td>
                          <td> <?php echo $registros['Nombre']; ?> </td>
                          <td> <?php echo $registros['Apellidos']; ?> </td>
                          <td> <?php echo $registros['Cedula']; ?> </td>
                          <td> <?php echo $registros['Telefono']; ?> </td>
                          <td> <?php echo $registros['Correo']; ?> </td>
                          <td> <?php echo $registros['codigo']; ?> </td>
                          <td> <?php echo $registros['Tipo_Usuario']; ?> </td>

                          <td>
                              <a href="actualizarDocente.php?id=<?php echo $registros['id_docente']; ?>" class="btn btn-primary">Editar</a>
                          </td>
                          <td >
                              <a href="../funciones/borrarDocente.php?id=<?php echo $registros['id_docente']; ?>&codigoBorrar=<?php echo $registros['codigo']; ?>" class="btn btn-danger">Borrar</a>
                          </td>
                      </tr>
                  <?php } ?>

          			</tbody>

          		</table>

            </div>
          </section>


          <!--Tabla Empleado-->
          <section class="bg-dark text-white" id="tablaEmpleado">
            <div class="container text-center table-responsive">
              <br>
              <h2 class="mb-4">Tabla Empleado</h2>
              <br>
              <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Buscador:</label>
                <div class="col-10">
                  <input type="text" class="form-control" id="searchTerm4" name="" placeholder="Escriba algo..." onkeyup="doSearch4()">
                </div>
              </div>

              <table class="table table-striped" id="miTabla4">
          			<thead class="cartHeader" display="off">
                  <tr>
                    <th>Numero</th>
          					<th>Nombre</th>
          					<th>Apellidos</th>
                    <th>Cedula</th>
          					<th>Telefono</th>
          					<th>Correo</th>
                    <th>Codigo </th>
                    <th>Tipo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
          				</tr>
          			</thead>
          			<tbody class="cartBody">

                  <?php
                      while($registros=$resultadoEmpleado->fetch_assoc()){ ?>
                      <tr>

                          <td> <?php echo $registros['id_empleado']; ?> </td>
                          <td> <?php echo $registros['Nombre']; ?> </td>
                          <td> <?php echo $registros['Apellidos']; ?> </td>
                          <td> <?php echo $registros['Cedula']; ?> </td>
                          <td> <?php echo $registros['Telefono']; ?> </td>
                          <td> <?php echo $registros['Correo']; ?> </td>
                          <td> <?php echo $registros['Codigo']; ?> </td>
                          <td> <?php echo $registros['Tipo_Empleado']; ?> </td>

                          <td>
                              <a href="actualizarEmpleado.php?id=<?php echo $registros['id_empleado']; ?>" class="btn btn-primary">Editar</a>
                          </td>
                          <td >
                              <a href="../funciones/borrarEmpleado.php?id=<?php echo $registros['id_empleado']; ?>&codigoBorrar=<?php echo $registros['Codigo']; ?>" class="btn btn-danger">Borrar</a>
                          </td>
                      </tr>
                  <?php } ?>

          			</tbody>

          		</table>

            </div>
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
