<?php 

require_once '../php/class/connection.php';

class Add_Client extends Connection{
	
	function insert($arr_data_client){
		try{
			$sql = "INSERT INTO tbl_client (name,lastname,email,password,telephone,address,postal_code) VALUES (:name,:lastname,:email,:password,:telephone,:address,:postal_code)";
			$stm = $this->con->prepare($sql);
			foreach ($arr_data_client as $key => $value) {
				$stm->bindValue($key, $value);
			}
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_ASSOC);
		}catch(PDOException $err){
			return $err->getMessage();
		}
	}
}