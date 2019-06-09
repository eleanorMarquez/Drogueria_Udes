<?php
  if (isset($_POST['Nombre'])) {
    $nombres = $_POST['Nombre'];
  }
  if (isset($_POST['Apellido'])) {
    $apellidos = $_POST['Apellido'];
  }
  if (isset($_POST['Cedula'])) {
    $Cedula = $_POST['Cedula'];
  }
  if (isset($_POST['Telefono'])) {
    $Telefono = $_POST['Telefono'];
  }
  if (isset($_POST['correo'])) {
    $correo = $_POST['correo'];
  }
  if (isset($_POST['Codigo'])) {
    $Codigo = $_POST['Codigo'];
  }
  if (isset($_POST['direccion'])) {
    $direccion = $_POST['direccion'];
  }
  if (isset($_POST['tipoCliente'])) {
    $tipoCliente = $_POST['tipoCliente'];
  }
  if (isset($_POST['numeroId'])) {
    $numeroId = $_POST['numeroId'];
  }
  if (isset($_POST['id_login'])) {
    $idLogin = $_POST['id_login'];
  }

  try {
    require('BD.php');
    $sql = "UPDATE cliente SET Nombre='$nombres', Apellido='$apellidos', Cedula='$Cedula', Telefono='$Telefono', Correo='$correo', Codigo='$Codigo', Direccion_residencia='$direccion', Tipo_Usuario='$tipoCliente'
            WHERE id_cliente='$numeroId'";
    $resultado = $mysqli->query($sql);
  } catch (\Exception $e) {
    $error = $e->getMessage();
  }

  try {
    require('BD.php');
    $sql = "UPDATE login SET Nombre_Usuario='$nombres', Apellido_Usuario='$apellidos', Codigo='$Codigo', Tipo_Usuario='$tipoCliente'
            WHERE Codigo='$Codigo'";
    $resultado = $mysqli->query($sql);
  } catch (\Exception $e) {
    $error = $e->getMessage();
  }

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insercion de Datos</title>
    <link rel="stylesheet" href="css/estilos.css" media="screen">
  </head>
  <body>

<div class="contenedor">

    <div class="contenido">

          <?php
            if($resultado){
              echo "<script>alert('Registro Exitoso');</script>";
              echo "<script>location.href='../../login.php'</script>";
            } else {
              echo "<script>alert('Error en el Registro');</script>";
              echo "Error" . $mysqli->error;
            }
           ?>
           <br> <br>
           <a href="../../index.php" class="volver">Volver al inicio</a>

    </div>
</div>
<?php
  $mysqli->close();
?>
  </body>
</html>
