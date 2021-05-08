<?php 

require_once '../../php/class/connection.php';

class Restaurants extends Connection{

	function list_restaurants(){

		try{
			$sql = "SELECT * FROM tbl_restaurants ORDER BY id DESC";

			if(isset($_POST['searchList'])){
				//$search = $this->con->real_escape_string($_POST['searchList']);
				$search = addslashes($_POST['searchList']);
				$sql = "SELECT * FROM tbl_restaurants 
								WHERE id LIKE '%".$search."%' OR
											name LIKE '%".$search."%' OR
											address LIKE '%".$search."%' OR
											photo LIKE '%".$search."%' OR
											telephone LIKE '%".$search."%'
								ORDER BY id DESC";
			}

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