<?php
require('BD.php');
sleep(2);
session_start();
$usu=$_POST['usuariolg'];
$pass=$_POST['passlg'];
$usuarios=$mysqli->query("Select id_login,Nombre_Usuario,Apellido_Usuario,Codigo,Tipo_Usuario
                        From login Where Nombre_Usuario='".$usu."'
                      AND Codigo='".$pass."'");
if ($usuarios->num_rows==1):
  $datos= $usuarios->fetch_assoc();
  $_SESSION['login'] = $datos;
    echo json_encode(array('error'=>false,'Tipo_Usuario'=>$datos['Tipo_Usuario']));
else:
    echo json_encode(array('error'=>true));
endif;
$mysqli->close();
 ?>
