<?php 	
require_once '../php/class/connection.php';
class AddProdsIntoCart extends Connection{
	function list(){

		$arrdataprod = [
			"idclient" => $_POST['user'],
			"idprod" => $_POST['id'],
			"idrestaurant" => $_POST['store'],
			"price_real" => $_POST['price'],
			"quantity" => $_POST['quantity'],
			"subtotal" => $_POST['subtotal'],
		];

		try{
			$sql = "CALL sp_add_ProdsIntoCart(:idclient, :idprod, :idrestaurant, :price_real, :quantity, :subtotal)";
			$stm = $this->con->prepare($sql);
			foreach ($arrdataprod as $key => $value) {
				$stm->bindValue($key, $value);
			}
			$stm->execute();
			$data = $stm->rowCount();
			if($data > 0){
				$res = "insertado";
				echo $res;
			}else{
				echo "Error";
			}

		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
}
$product = new AddProdsIntoCart();
echo $product->list();