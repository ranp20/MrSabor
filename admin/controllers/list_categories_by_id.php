<?php 

require_once '../../php/class/connection.php';

class Categories_by_ID extends Connection{

	function list_categories_by_id($id_restaurant){

		try{
			$sql = "SELECT * FROM tbl_categories WHERE id_restaurant = :id_restaurant";
			$stm = $this->con->prepare($sql);
			$stm->bindValue(":id_restaurant", $id_restaurant);
			$stm->execute();
			
			$data = $stm->fetchAll(PDO::FETCH_ASSOC); 
			$res = json_encode($data);

			echo $res;
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
}

$categories_by_id = new Categories_by_ID();
echo $categories_by_id->list_categories_by_id();