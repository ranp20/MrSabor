<?php 
require_once '../php/class/connection.php';

class Add_Client extends Connection{
	function insert($arr_data_client){
		try{
			$sql = "CALL sp_add_client(:name,:lastname,:email,:password,:telephone,:address,:postal_code)";
			$stm = $this->con->prepare($sql);
			foreach ($arr_data_client as $key => $value) {
				$stm->bindValue($key, $value);
			}
			$data = $stm->execute();
			return $stm->rowCount() > 0 ? "true" : "false";
		}catch(PDOException $err){
			return $err->getMessage();
		}
	}
}