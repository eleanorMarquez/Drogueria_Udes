<?php
  if (isset($_POST['Nombre'])) {
    $Nombre = $_POST['Nombre'];
  }
  if (isset($_POST['Cedula'])) {
    $Cedula = $_POST['Cedula'];
  }
  if (isset($_POST['Telefono'])) {
    $Telefono = $_POST['Telefono'];
  }
  if (isset($_POST['fecha'])) {
    $fecha = $_POST['fecha'];
  }
  if (isset($_POST['tipo'])) {
    $tipoCita = $_POST['tipo'];
  }


  try {
    require('BD.php');
    $sql = "INSERT INTO cita(id_cita,Nombre_Usuario,Cedula,Telefono,Fecha_Cita,Tipo_Cita)";
    $sql .= "VALUES(NULL, '$Nombre', '$Cedula', '$Telefono', '$fecha', '$tipoCita');";
    $resultado = $mysqli->query($sql);
  } catch (\Exception $e) {
    $error = $e->getMessage();
  }

  header("Location: ../paginas/estudiante/Sistema.php");
 ?>
