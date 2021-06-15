<?php 	
require_once '../php/class/connection.php';
class ListProdsIntoCart extends Connection{
	function list(){

		$id = $_POST['idcli'];

		try{
			$sql = "CALL sp_list_ProdsIntoCart(:idclient)";
			$stm = $this->con->prepare($sql);
			$stm->bindValue(":idclient", $id);
			$stm->execute();

			$data = $stm->fetchAll(PDO::FETCH_ASSOC);
			$res = json_encode($data);
			echo $res;

		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
}
$product = new ListProdsIntoCart();
echo $product->list();