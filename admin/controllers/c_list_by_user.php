<?php 
require_once '../../php/class/connection.php';
class List_byUsername extends Connection{
	function list($username){
		try{
			$sql = "SELECT * FROM tbl_user WHERE username = :username LIMIT 1";
			$stm = $this->con->prepare($sql);
			$stm->bindValue(":username", $username);
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_ASSOC);
		}catch(PDOException $err){
			return $err->getMessage();
		}
	}
}