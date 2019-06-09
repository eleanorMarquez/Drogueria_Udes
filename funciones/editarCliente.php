<?php
  session_start();

  if (isset($_SESSION['Usuario'])) {

    if ($_SESSION['Usuario']['Tipo']!="Admin") {
      header('Location: inicio.php');
    }
  }else {
    header('Location: index.html');
  }
?>
<?php
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
    }
?>
<?php
try {
  require('BD.php');
  $sql = "SELECT * FROM cliente WHERE id_Cliente={$id}";
  $resultado = $mysqli->query($sql);
} catch (\Exception $e) {
  $error = $e->getMessage();
}
 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MercaTodo Ltda.</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/creative.css" rel="stylesheet">
    <link rel="stylesheet" href="../vendor/alertifyjs/css/alertify.min.css" />
    <link rel="stylesheet" href="../vendor/alertifyjs/css/themes/default.min.css" />

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Bienvenido Administrador</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../administrador.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="funciones/desconectar.php"> Cerrar Sesion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>




    <section id="services">
      <div class="container text-left">
        <h2 class="mb-4">Editar Datos del Cliente.</h2>

        <form action="actualizar.php" method="get">

          <?php while ($registros = $resultado->fetch_assoc()) { ?>
              <div class="form-group">
                <label for="inputAddress">Numero de Cedula:</label>
                <input type="text" class="form-control" value="<?php echo $registros['cedula']; ?>" name="cedula" id="cedula">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Nombres:</label>
                  <input type="text" class="form-control" value="<?php echo $registros['Nombres']; ?>" name="Nombres" id="Nombres">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Apellidos:</label>
                  <input type="text" class="form-control" value="<?php echo $registros['Apellidos']; ?>" name="Apellidos" id="Apellidos">
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">Email:</label>
                <input type="email" class="form-control" value="<?php echo $registros['Email']; ?>" name="Email" id="Email">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">Celular:</label>
                  <input type="text" class="form-control" value="<?php echo $registros['Celular']; ?>" name="Celular" id="Celular">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">Contraseña:</label>
                  <input type="text" class="form-control" value="<?php echo $registros['Password']; ?>" name="Password" id="Password">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Tipo:</label>
                  <input type="text" class="form-control" value="<?php echo $registros['Tipo']; ?>" name="Tipo" id="Tipo">
                </div>
              </div>
              <input type="hidden" name="id" id="id" value="<?php echo $registros['id_Cliente']; ?>">
              <button type="submit" class="btn btn-primary">Actualizar Datos</button>
          <?php }?>
        </form>
        <br> <br>


      </div>
    </section>

    <?php
      $mysqli->close();
     ?>

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

  </body>

</html>
