<?php
  if (isset($_POST['cedula'])) {
    $cedula = $_POST['cedula'];
  }
  if (isset($_POST['nombres'])) {
    $nombres = $_POST['nombres'];
  }
  if (isset($_POST['apellidos'])) {
    $apellidos = $_POST['apellidos'];
  }
  if (isset($_POST['email'])) {
    $email = $_POST['email'];
  }
  if (isset($_POST['celular'])) {
    $celular = $_POST['celular'];
  }
  if (isset($_POST['password'])) {
    $password = $_POST['password'];
  }
  if (isset($_POST['tipo'])) {
    $tipo = $_POST['tipo'];
  }



  try {
    require('BD.php');
    $sql = "INSERT INTO cliente(id_Cliente,cedula,Nombres,Apellidos,Email,Celular,Password,Tipo)";
    $sql .= "VALUES(NULL, '$cedula', '$nombres', '$apellidos', '$email', '$celular', '$password', '$tipo');";
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
              echo "<script>location.href='../index.html'</script>";
            } else {
              echo "<script>alert('Error en el Registro');</script>";
              echo "Error" . $mysqli->error;
            }
           ?>
           <br> <br>
           <a href="../index.html" class="volver">Volver al inicio</a>

    </div>
</div>
<?php
  $mysqli->close();
?>
  </body>
</html>
