
<?php
    session_start();

    if (isset($_SESSION['login'])) {
      if ($_SESSION['login']['Tipo_Usuario']=="Cliente") {

      }else if($_SESSION['login']['Tipo_Usuario']=="Estudiante"){
        header('Location: paginas/estudiante/Sistema.php');
      }else if($_SESSION['login']['Tipo_Usuario']=="Docente"){
        header('Location: paginas/estudiante/Sistema.php');
      }else if($_SESSION['login']['Tipo_Usuario']=="Cliente"){
        header('Location: paginas/estudiante/Sistema.php');
      }else if($_SESSION['login']['Tipo_Usuario']=="Servicio General"){
        header('Location: paginas/estudiante/Sistema.php');
      }else if($_SESSION['login']['Tipo_Usuario']=="Administrador"){
        header('Location: paginas/admin/administrador.php');
      } else if($_SESSION['login']['Tipo_Usuario']=="Control Inventario"){
        header('Location: paginas/kardex/kardex.php');
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

     <title>Login Drogueria</title>

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

     <!--

     <section class="masthead text-center">
       <div class="container">
         <div class="form-group">
           <div class="imagen3" >
                <img class="swing" src="img/logoDRO.jpeg" alt="logo-udes" width="200px">
           </div>
          <form action="" id="formLg">
             <input type="text" id="usuariolg" class="form-control" name="usuariolg" pattern="[A-Za-z0-9_-]{1,15}" required placeholder="Codigo" required>
             <input type="password" name="passlg" class="form-control" pattern="[A-Za-z0-9_-]{1,15}" required placeholder="Contraseña" required>
             <input type="submit" class="btn btn-primary botonlg"  value="Iniciar Sesion" >
          </form>
        </div>
       </div>
     </section>
   -->

   <div class="mensaje-error">
     <span>Datos de ingreso no válidos, inténtelo de nuevo  por favor</span>
   </div>


   <section class="login-block">
    <div class="container lop">

      	<div class="row text-center">
      		<div class="col-md-4 login-sec">
              <h2 class="text-center">Iniciar Sesión</h2>

              		    <form class="login-form" action="" id="formLg">

                          <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Nombre</label>
                            <input type="text" id="usuariolg" class="form-control" name="usuariolg"  required placeholder="Nombre" required>

                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1" class="text-uppercase">Codigo</label>
                            <input type="password" name="passlg" class="form-control" pattern="[A-Za-z0-9_-]{1,15}" required placeholder="Codigo" required>
                          </div>


                            <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                              <small>Recordar Password</small>
                            </label>
                            <input type="submit" class="btn btn-primary float-right botonlg"  value="Iniciar Sesion" >

                          </div>

                      </form>

                      <br>
                      <br>
                      <a href="index.php">¿Deseas Registrarte?</a>


      		</div>
        		<div class="col-md-8 banner-sec">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner" role="listbox">

                      <div class="carousel-item active">
                          <img class="d-block img-fluid" src="img/carrusel.png"  alt="First slide" >
                          <div class="carousel-caption d-none d-md-block">

                         </div>
                      </div>

                    </div>

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
     <script src="js/main.js"></script>
     <script src="vendor/alertifyjs/alertify.min.js"></script>
     <script type="text/javascript" src="js/functions.js"></script>



   </body>

 </html>
