<?php
  if (isset($_POST['Nombre'])) {
    $nombres = $_POST['Nombre'];
  }
  if (isset($_POST['Apellido'])) {
    $apellidos = $_POST['Apellido'];
  }
  if (isset($_POST['Codigo'])) {
    $Codigo = $_POST['Codigo'];
  }
  if (isset($_POST['Telefono'])) {
    $Telefono = $_POST['Telefono'];
  }
  if (isset($_POST['correo'])) {
    $correo = $_POST['correo'];
  }
  if (isset($_POST['semestre'])) {
    $semestre = $_POST['semestre'];
  }
  if (isset($_POST['carrera'])) {
    $carrera = $_POST['carrera'];
  }
  if (isset($_POST['tipoEstudiante'])) {
    $tipoEstudiante = $_POST['tipoEstudiante'];
  }

  try {
    require('../BD.php');
    $sql = "INSERT INTO estudiante(id_estudiante,Nombre,Apellido,Codigo,Telefono,email,numero_semestre,carrera,tipo_usuario)";
    $sql .= "VALUES(NULL, '$nombres', '$apellidos', '$Codigo', '$Telefono', '$correo', '$semestre', '$carrera', '$tipoEstudiante');";
    $resultado = $mysqli->query($sql);
  } catch (\Exception $e) {
    $error = $e->getMessage();
  }

  try {
    require('../BD.php');
    $sql = "INSERT INTO login(id_login,Nombre_Usuario,Apellido_Usuario,Codigo,Tipo_Usuario)";
    $sql .= "VALUES(NULL, '$nombres', '$apellidos', '$Codigo', '$tipoEstudiante');";
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
