<?php 

	require_once '../../php/class/connection.php';

	class Login_Admin extends Connection{

		function verify_admin($arr_data_admin){
			try{
				$sql = "SELECT * FROM tbl_user WHERE username = :username AND password = :password";
				$stm = $this->con->prepare($sql);
				foreach ($arr_data_admin as $key => $value) {
					$stm->bindValue($key, $value);
				}
				$stm->execute();
				return $stm->fetchAll(PDO::FETCH_ASSOC);
			}catch(PDOException $e){
				return $e->getMessage();
			}
		}
	}