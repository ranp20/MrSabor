<?php 

require_once '../../php/class/connection.php';

class Categories extends Connection{

	function list_categories(){

		try{
			$sql = "SELECT * FROM tbl_categories ORDER BY id DESC";

			if(isset($_POST['searchList'])){
				//$search = $this->con->real_escape_string($_POST['searchList']);
				$search = $_POST['searchList'];
				$sql = "SELECT * FROM tbl_categories 
								WHERE id LIKE '%".$search."%' OR
											name LIKE '%".$search."%' OR
											photo LIKE '%".$search."%'
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

$categories = new Categories();
echo $categories->list_categories();