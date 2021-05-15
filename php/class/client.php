<?php 

require_once 'connection.php';

class Client extends Connection{

	private $table = "tbl_client";

	public function __construct(){
		parent::__construct();
	}

	public function get_cli_by_id($id){
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
}