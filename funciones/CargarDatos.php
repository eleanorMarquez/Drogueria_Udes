<?php

if (isset($_POST['codigoProducto'])) {
  $codigoProducto = $_POST['codigoProducto'];
}
if (isset($_POST['Nombre'])) {
  $Nombre = $_POST['Nombre'];
}
if (isset($_POST['Descripcion'])) {
  $Descripcion = $_POST['Descripcion'];
}
if (isset($_POST['denominacion'])) {
  $denominacion = $_POST['denominacion'];
}
if (isset($_POST['claseProducto'])) {
  $claseProducto = $_POST['claseProducto'];
}
if (isset($_POST['precio'])) {
  $precio = $_POST['precio'];
}
if (isset($_POST['cantidad'])) {
  $cantidad = $_POST['cantidad'];
}

//Recibo los datos de la imagen
$nombre_img = $_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];
$tamano = $_FILES['imagen']['size'];

//Si existe imagen y tiene un tamaño correcto
if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 300000))
{
   //indicamos los formatos que permitimos subir a nuestro servidor
   if (($_FILES["imagen"]["type"] == "image/gif")
   || ($_FILES["imagen"]["type"] == "image/jpeg")
   || ($_FILES["imagen"]["type"] == "image/jpg")
   || ($_FILES["imagen"]["type"] == "image/png"))
   {
      // Ruta donde se guardarán las imágenes que subamos
      $directorio = $_SERVER['DOCUMENT_ROOT'].'/DROGUERIA/img/imagenes/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
    }
    else
    {
       //si no cumple con el formato
       echo "No se puede subir una imagen con ese formato ";
    }
}
else
{
   //si existe la variable pero se pasa del tamaño permitido
   if($nombre_img == !NULL) echo "La imagen es demasiado grande ";
}

/* en pasos anteriores deberíamos tener una conexión abierta a nuestra base de
datos para ejecutar nuestra sentencia SQL */

/* con la siguiente sentencia le asignamos a nuestro campo de la tabla ruta_imagen
el nombre de nuestra imagen */

try {
  require('BD.php');
  $sql = "INSERT INTO producto(producto_id,producto_codigo,producto_nombre,producto_descripcion,Imagen,denominacion,claseProducto,producto_precio)";
  $sql .= "VALUES(null, '$codigoProducto', '$Nombre', '$Descripcion', '$nombre_img', '$denominacion', '$claseProducto', '$precio');";
  $resultado = $mysqli->query($sql);
} catch (\Exception $e) {
  $error = $e->getMessage();
}

try {
  require('BD.php');
  $sql = "INSERT INTO kardex(id_kardex,producto_codigo,Cantidad_Unidades,Fecha_Registro)";
  $sql .= "VALUES(null, '$codigoProducto', '$cantidad', null);";
  $resultado = $mysqli->query($sql);
} catch (\Exception $e) {
  $error = $e->getMessage();
}

/* volvemos a la página principal para cargar la imagen que hemos subido */
header("Location: ../paginas/kardex/kardex.php");

?>
