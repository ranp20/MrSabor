<?php 	
require_once '../php/class/connection.php';
class ListProdsByNameCategory extends Connection{
	function list(){

		$namecategory = $_POST['name'];

		try{
			$sql = "CALL sp_list_ProdsbyNameCategory(:namecategory)";
			$stm = $this->con->prepare($sql);
			$stm->bindValue(":namecategory", $namecategory);
			$stm->execute();
			$data = $stm->fetchAll(PDO::FETCH_ASSOC);
			$res = json_encode($data);
			echo $res;

		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
}
$product = new ListProdsByNameCategory();
echo $product->list();