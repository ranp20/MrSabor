<?php 

require_once 'php/class/connection.php';

class ListCategories extends Connection{
	function get_categories(){
		try{
			$sql = "SELECT * FROM tbl_categories";
			$stm = $this->con->query($sql);
			$stm->execute();

			return	$stm->fetchAll(PDO::FETCH_ASSOC);
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
}