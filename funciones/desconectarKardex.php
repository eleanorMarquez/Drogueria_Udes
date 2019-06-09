<?php
  session_start();

  if (isset($_SESSION['login'])) {

    if ($_SESSION['login']['Tipo_Usuario']!="Control Inventario") {
      header('Location: index.php');
    }
  }else {
    header('Location: ../../index.html');
  }


    $nombre = $_SESSION['login']['Nombre_Usuario'];

    try {
      require('BD.php');
      $sql = "INSERT INTO informe(id_informe,Nombre_Usuario,Fecha_Salida)";
      $sql .= "VALUES(NULL, '$nombre', null);";
      $resultado = $mysqli->query($sql);
    } catch (\Exception $e) {
      $error = $e->getMessage();
    }

header("Location: desconectar.php");
 ?>
