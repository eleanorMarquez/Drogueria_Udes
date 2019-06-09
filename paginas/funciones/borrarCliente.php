<?php

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  }

  if (isset($_GET['codigoBorrar'])) {
    $borrar = $_GET['codigoBorrar'];
  }

  try {
    require('BD.php');
    $sql = "DELETE FROM cliente WHERE id_cliente='$id'";
    $resultado = $mysqli->query($sql);
  } catch (\Exception $e) {
    $error = $e->getMessage();
  }

  try {
    require('BD.php');
    $sql = "DELETE FROM login WHERE Codigo='$borrar'";
    $resultado = $mysqli->query($sql);
  } catch (\Exception $e) {
    $error = $e->getMessage();
  }


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Borrar</title>
    <link rel="stylesheet" href="css/estilos.css" media="screen">
  </head>
  <body>

<div class="contenedor">
    <h1>Clientes</h1>

    <div class="contenido">

      <?php
        if($resultado){
          echo "<script>alert('Usuario Borrado.');</script>";
          echo "<script>location.href='../../login.php'</script>";
        } else {
          echo "<script>alert('Usuario no Borrado');</script>";
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
