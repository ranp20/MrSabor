<?php 
require_once '../php/class/connection.php';

class Login_Client extends Connection{
	function verify_client($arr_data_login){
		try{
			$sql = "CALL sp_verify_client(:email,:password)";
			$stm = $this->con->prepare($sql);
			foreach ($arr_data_login as $key => $value) {
				$stm->bindValue($key, $value);
			}
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_ASSOC);
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
}