<?php 	
require_once '../php/class/connection.php';
class CantProdsIntoCart extends Connection{
	function validate(){

		$arr_validate = [
			"prodid" => $_POST['prodid'],
			"prodcant" => $_POST['prodcant'],
			"clientid" => $_POST['clientid'],
			"button" => $_POST['button'],
		];

		try{
			$sql = "CALL sp_validate_ProdsIntoCart(:prodid, :prodcant, :clientid, :button)";
			$stm = $this->con->prepare($sql);
			foreach ($arr_validate as $key => $value) {
				$stm->bindValue($key, $value);
			}
			$stm->execute();

			$data = $stm->fetchAll(PDO::FETCH_ASSOC);
			$res = json_encode($data);
			echo $res;

		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
}
$product = new CantProdsIntoCart();
echo $product->validate();