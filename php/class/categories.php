<?php 

	require_once 'connection.php';

	class Categories extends Connection{

		private $table = "tbl_categories";

		public function __construct(){
			parent::__construct();
		}

		/* GET RESTAURANTS*/
		public function get_categories(){
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