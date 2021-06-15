<?php 	
require_once '../php/class/connection.php';
class ListByIdProd extends Connection{
	function list(){

		$id = $_POST['id'];

		try{
			$sql = "CALL sp_list_ProdsbyId(:idprod)";
			$stm = $this->con->prepare($sql);
			$stm->bindValue(":idprod", $id);
			$stm->execute();
			$data = $stm->fetchAll(PDO::FETCH_ASSOC);
			$res = json_encode($data);
			echo $res;

		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
}
$product = new ListByIdProd();
echo $product->list();