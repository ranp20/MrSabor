<?php 
require_once '../../php/class/connection.php';

class Account extends Connection{
	public function insert($arr_data_account){
		try{
			$sql = "CALL sp_add_user (:username, :email, :password, :idrol)";
			$stm = $this->con->prepare($sql);
			foreach ($arr_data_account as $key => $val) {
				$stm->bindValue($key, $val);
			}
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_ASSOC);
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
}