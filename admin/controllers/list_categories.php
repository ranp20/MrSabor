<?php 

require_once '../../php/class/connection.php';

class Categories extends Connection{

	function list_categories(){

		try{
			$sql = "SELECT tblcateg.id, tblcateg.name, tblcateg.photo, tblrest.id as 'id_restaurant', tblrest.name as 'name_restaurant' FROM tbl_categories tblcateg INNER JOIN tbl_restaurants tblrest ON tblcateg.id_restaurant = tblrest.id ORDER BY id DESC";

			if(isset($_POST['searchList'])){
				//$search = $this->con->real_escape_string($_POST['searchList']);
				$search = addslashes($_POST['searchList']);
				$sql = "SELECT tblcateg.id, tblcateg.name, tblcateg.photo, tblrest.name as 'name_restaurant' FROM tbl_categories tblcateg INNER JOIN tbl_restaurants tblrest ON tblcateg.id_restaurant = tblrest.id WHERE tblcateg.id LIKE '%".$search."%' OR
																					tblcateg.name LIKE '%".$search."%' OR
																					tblcateg.photo LIKE '%".$search."%' OR
																					tblrest.name LIKE '%".$search."%'
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