<?php 

	require_once 'connection.php';

	class Restaurants extends Connection{


		private $table = "tbl_restaurants";

		public function __construct(){
			parent::__construct();
		}

		public function get_restaurants(){
			try{
				$sql = "SELECT * FROM {$this->table}";
				$stm = $this->con->query($sql);
				$stm->execute();
				
				return $stm->fetchAll(PDO::FETCH_ASSOC);
			}catch(PDOException $e){
				return $e->getMessage();
			}
		}
	}