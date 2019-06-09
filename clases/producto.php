<?php
	include_once('conexion.php');
	class Product extends Model{
		public $code;
		public $product;
		public $description;
		public $price;

		public function __construct(){
      parent::__construct();
    }

		public function get_products22(){
      $sql = $this->db->query("SELECT * FROM producto");
      $html = '';
      foreach ($sql->fetch_all(MYSQLI_ASSOC) as $key){
        $code = "'".$key['producto_codigo']."'";
        $html .= 	'<div class="col-lg-3 col-md-6 text-center">
										<div class="service-box mt-5 mx-auto">
											<div class="imgcontainer">
												<img src="img/imagenes/'.$key['Imagen'].'"  alt="Avatar" class="avatar1">
											</div>
											<h3 class="mb-3">'.$key['producto_nombre'].'</h3>
											<p class="text-muted mb-0">
												Precio Unidad: $<input type="text" id="precio16" class="precio" value="'.$key['producto_precio'].'" readonly="readonly">
												Cantidad: <input type="number" class="precio" id="'.$key['producto_codigo'].'" value="1" min="1">
											</p>
											<button type="button" class="btn btn-info" onClick="addProduct('.$code.');"> <i class="fas fa-cart-arrow-down"></i> Añadir al Carrito</button>
										</div>
									</div>';

      }
      return $html;
   	}

 		public function search_code($code){
 			$sql = $this->db->query("SELECT * FROM producto WHERE producto_codigo = '$code'");
      $product = $sql->fetch_all(MYSQLI_ASSOC);
      $status = 0;
      foreach ($product as $key){
    		$this->code = $key['producto_codigo'];
    		$this->product = $key['producto_nombre'];
    		$this->description = $key['producto_descripcion'];
    		$this->price = $key['producto_precio'];
    		$status++;
    	}
    	return $status;
 		}
	}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<script src="../js/main2.js"></script>
	</body>
</html>
