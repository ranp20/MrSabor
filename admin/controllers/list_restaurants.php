<?php 

require_once '../../php/class/connection.php';

class Restaurants extends Connection{

	function list_restaurants(){
		try{
			$sql = "SELECT * FROM tbl_restaurants ORDER BY id DESC";
			$stm = $this->con->query($sql);
			$stm->execute();
			
			$data = $stm->fetchAll(PDO::FETCH_ASSOC); 
			$res = json_encode($data);

			echo $res;
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
}

$resturants = new Restaurants();
echo $resturants->list_restaurants();