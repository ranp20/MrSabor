<?php 

require_once 'connection.php';

class Client extends Connection{

	private $table = "tbl_client";

	public function __construct(){
		parent::__construct();
	}

	// OBTENER LA INFORMACIÓN DEL CLIENTE
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
	// VERIFICAR SI EL USUARIO EXISTE
	public function verify_account_cli($email){
    try{
      $sql = "CALL sp_verify_account_client(:email)";
      $stm = $this->con->prepare($sql);
      $stm->bindValue(':email', $email);
      $stm->execute();
      return $stm->rowCount() > 0 ? 'true' : 'false';
    }catch(PDOEXception $e){
      return $e->getMessage();
    }
  }
  // AGREGAR UN CLIENTE
  public function add_cli($arr_data_client){
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