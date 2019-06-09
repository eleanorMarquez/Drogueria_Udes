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

  try {
    require('../BD.php');
    $sql = "INSERT INTO cliente(id_cliente,Nombre,Apellido,Cedula,Telefono,Correo,Codigo,Direccion_residencia,Tipo_Usuario)";
    $sql .= "VALUES(NULL, '$nombres', '$apellidos', '$Cedula', '$Telefono', '$correo', '$Codigo', '$direccion', '$tipoCliente');";
    $resultado = $mysqli->query($sql);
  } catch (\Exception $e) {
    $error = $e->getMessage();
  }

  try {
    require('../BD.php');
    $sql = "INSERT INTO login(id_login,Nombre_Usuario,Apellido_Usuario,Codigo,Tipo_Usuario)";
    $sql .= "VALUES(NULL, '$nombres', '$apellidos', '$Codigo', '$tipoCliente');";
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
