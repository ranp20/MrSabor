<?php 

require_once 'connection.php';

class Alls extends Connection{

	private $type_user = 'tbl_rol';

	public function __construct(){
		parent::__construct();
	}

	public function type_user(){
		try{
			$sql = "SELECT * FROM {$this->type_user} WHERE description != 'Administrador'";
			$stm = $this->con->query($sql);
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_ASSOC);
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
}