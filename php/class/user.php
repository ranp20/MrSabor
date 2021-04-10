<?php 

require_once 'connection.php';

class User extends Connection{

	private $table = "tbl_user";
	private $table2 = "tbl_rol";

	public function __construct(){
		parent::__construct();
	}

	public function get_user_by_id($id){
		try{
			$sql = "SELECT * FROM {$this->table} WHERE id = :id";
			$stm = $this->con->prepare($sql);
			$stm->bindValue(":id", $id);
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_ASSOC);
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}

	public function get_description_by_idrol($idrol){
		try{
			$sql = "SELECT description FROM {$this->table2} WHERE id = :id";
			$stm = $this->con->prepare($sql);
			$stm->bindValue(":id", $idrol);
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_ASSOC);
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
}