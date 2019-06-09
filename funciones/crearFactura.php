<?php
  session_start();

  if (isset($_SESSION['Usuario'])) {


  }
?>

<?php
  if (isset($_POST['idCli'])) {
    $idCli = $_POST['idCli'];
  }
  if (isset($_POST['idEmp'])) {
    $idEmp = $_POST['idEmp'];
  }
  if (isset($_POST['nombresPro'])) {
    $nombresPro = $_POST['nombresPro'];
  }
  if (isset($_POST['cantProd'])) {
    $cantProd = $_POST['cantProd'];
  }
  if (isset($_POST['precTotal'])) {
    $precTotal = $_POST['precTotal'];
  }
  if (isset($_POST['fechaActual'])) {
    $fechaActual = $_POST['fechaActual'];
  }

  try {
    require('BD.php');
    $sql = "INSERT INTO factura(id_Factura,id_Cliente,id_Empleado,Nombres_Prodructos,Cantidad_Producto,Precio_Total,Fecha_Factura)";
    $sql .= "VALUES(NULL, '$idCli', '$idEmp', '$nombresPro', '$cantProd', '$precTotal', '$fechaActual');";
    $resultado = $mysqli->query($sql);
  } catch (\Exception $e) {
    $error = $e->getMessage();
  }
 ?>

 <?php
 try {
   require('BD.php');
   $sql = "SELECT * FROM factura";
   $resultadoFactura = $mysqli->query($sql);
 } catch (\Exception $e) {
   $error = $e->getMessage();
 }

 while ($row = $resultadoFactura->fetch_assoc()){
    //Guardo los datos de la BD en las variables de php
    $id_Factura = $row["id_Factura"];
    $id_Empleado = $row["id_Empleado"];
    $Nombres_Prodructos = $row["Nombres_Prodructos"];
    $Cantidad_Producto = $row["Cantidad_Producto"];
    $Precio_Total = $row["Precio_Total"];
    $Fecha_Factura = $row["Fecha_Factura"];
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
         <a class="navbar-brand js-scroll-trigger" href="#page-top">Bienvenido a la generacion de tu Factura</a>
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
           <ul class="navbar-nav ml-auto">
             <li class="nav-item">
               <a class="nav-link js-scroll-trigger" href="../inicio.php">Regresar</a>
             </li>
             <li class="nav-item">
               <a class="nav-link js-scroll-trigger" href="#compraa">Inicio</a>
             </li>
             <li class="nav-item">
               <a class="nav-link js-scroll-trigger" href="desconectar.php"> Cerrar Sesion</a>
             </li>
           </ul>
         </div>
       </div>
     </nav>




     <section id="compraa">
       <div class="container">
         <div class="row">
           <div class="col-lg-6">
             <h1 class="mb-6 titul">SuperMercado MercaTodo Ltda.</h1>
             <h4 class="mb-6">Cúcuta, Norte de Santander </h4>
             <br>
             <h3 class="mb-6">Factura N° <?php echo $id_Factura; ?> </h3>
           </div>
           <div class="col-lg-6">
             <div class="imgcontainer">
               <img src="../img/iconSuper.png" alt="Avatar" class="avatar">
             </div>
           </div>
         </div>

         <div class="bg-white text-black border">
           <div class="container text-center cont">
              <div class="row">
                <div class="col">
                  <label for="inputPassword5">Atentido por el empleado N° </label>
                  <input type="text" class="form-control text-center" name="" value="<?php echo $id_Empleado; ?>">
                </div>
                <div class="col">
                  <label for="inputPassword5">Fecha de Factura: </label>
                  <input type="text" class="form-control text-center" name="" value="<?php echo $Fecha_Factura; ?>">
                </div>
              </div>
           </div>
        </div>
        <br>
        <h4 class="mb-6">Datos Cliente: </h4>
        <div class="row">
          <div class="col">
            <label for="inputPassword5">Cedula: </label>
            <input type="text" class="form-control " name="" value="<?php echo $_SESSION['Usuario']['cedula'] ?>">
          </div>
          <div class="col">
            <label for="inputPassword5">Nombres: </label>
            <input type="text" class="form-control" name="" value="<?php echo $_SESSION['Usuario']['Nombres'] ?>">
          </div>
          <div class="col">
            <label for="inputPassword5">Apellidos: </label>
            <input type="text" class="form-control" name="" value="<?php echo $_SESSION['Usuario']['Apellidos'] ?>">
          </div>
        </div>
        <br>
        <div class="bg-dark text-white">
          <div class="container text-center cont">
            <h2>Detalles de la Compra:</h2>
             <div class="row">
               <div class="col">
                 <label for="inputPassword5">Productos Comprados: </label>
                 <input type="text" class="form-control text-center" name="" value="<?php echo $Nombres_Prodructos; ?>">
               </div>
             </div>
             <br>
             <div class="row">
               <div class="col">
                 <label for="inputPassword5">Cantidad de Productos Comprados: </label>
                 <input type="text" class="form-control text-center" name="" value="<?php echo $Cantidad_Producto; ?>">
               </div>
               <div class="col">
                 <label for="inputPassword5">Precio Total: </label>
                 <input type="text" class="form-control text-center" name="" value="<?php echo $Precio_Total; ?>">
               </div>
             </div>
          </div>
       </div>

       <br> <br>
       <center>
         <a type="button" href="../inicio.php" class="btn btn-success"> <i class="fas fa-check"></i> Aceptar</a>
       </center>
       </div>
     </section>

     <!--Ventana Modal-->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
       <div class="modal-dialog" role="document">
           <div class="modal-content">

             <div class="modal-header titulo2">

               <h5 class="modal-title" id="exampleModalLabel">PELIGRO</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>

             </div>

             <div class="modal-body body">

               <div class="imgcontainer">
                 <img src="img/meme.jpg" alt="Avatar" class="avatar2">
               </div>

             </div>

           </div>
       </div>
     </div>

     <!-- Bootstrap core JavaScript -->
     <script src="../vendor/jquery/jquery.min.js"></script>
     <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

     <!-- Plugin JavaScript -->
     <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
     <script src="../vendor/scrollreveal/scrollreveal.min.js"></script>
     <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

     <!-- Custom scripts for this template -->
     <script src="../js/creative.min.js"></script>
     <script src="../js/main2.js"></script>
     <script src="../vendor/alertifyjs/alertify.min.js"></script>

   </body>

 </html>
