<?php
  if (isset($_GET['cedula'])) {
    $cedula = $_GET['cedula'];
  }
  if (isset($_GET['Nombres'])) {
    $Nombres = $_GET['Nombres'];
  }
  if (isset($_GET['Apellidos'])) {
    $Apellidos = $_GET['Apellidos'];
  }
  if (isset($_GET['Email'])) {
    $Email = $_GET['Email'];
  }
  if (isset($_GET['Celular'])) {
    $Celular = $_GET['Celular'];
  }
  if (isset($_GET['Password'])) {
    $Password = $_GET['Password'];
  }
  if (isset($_GET['Tipo'])) {
    $Tipo = $_GET['Tipo'];
  }
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  }

  try {
    require('BD.php');
    $sql = "UPDATE cliente SET cedula='$cedula', Nombres='$Nombres', Apellidos='$Apellidos', Email='$Email', Celular='$Celular', Password='$Password', Tipo='$Tipo' WHERE id_Cliente='$id'";
    $resultado = $mysqli->query($sql);
  } catch (\Exception $e) {
    $error = $e->getMessage();
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Actualizacion de datos</title>
    <link rel="stylesheet" href="css/estilos.css" media="screen">
  </head>
  <body>

<div class="contenedor">
    <h1>Actualizar</h1>

    <div class="contenido">

          <?php
            if($resultado){
              echo "<script>alert('Datos Actulizados. Por favor, cerrar sesion y volver a loguear para ver cambios, Gracias!');</script>";
              echo "<script>location.href='../administrador.php'</script>";
            } else {
              echo "<script>alert('Datos No Guardados');</script>";
              echo "Error" . $mysqli->error;
            }
           ?>
           <br> <br>
           <a href="index.php" class="volver">Volver al inicio</a>

    </div>
</div>
<?php
  $conn->close();
?>
  </body>
</html>
