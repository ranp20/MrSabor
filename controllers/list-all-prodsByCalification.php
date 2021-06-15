<?php 	
require_once './php/class/connection.php';
class ListByCalification extends Connection{
	function list(){
		try{
			$sql = "CALL sp_listProdsByCalification()";
			$stm = $this->con->prepare($sql);
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_ASSOC);

		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
}