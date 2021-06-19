<?php 

require_once '../php/class/connection.php';

class SearchRestaurants extends Connection{

	function list_restaurants(){

		try{
			$sql = "SELECT r.id, r.name as 'namerest', r.address,	r.photo as 'imgrest',	r.telephone, r.latitud,	r.longitud,	c.name as 'namecateg', c.photo as 'imgcateg'
							FROM tbl_restaurants r INNER JOIN tbl_categories c ON c.id_restaurant = r.id GROUP BY r.id ORDER BY r.id DESC";

			if(isset($_POST['searchRest'])){
				$search = addslashes($_POST['searchRest']);
				$sql = "SELECT r.id, r.name as 'namerest', r.address,	r.photo as 'imgrest',	r.telephone, r.latitud,	r.longitud,	c.name as 'namecateg', c.photo as 'imgcateg'
								FROM tbl_restaurants r INNER JOIN tbl_categories c ON c.id_restaurant = r.id 
								WHERE r.name LIKE '%".$search."%' OR
											r.address LIKE '%".$search."%' OR
											r.telephone LIKE '%".$search."%' OR
											r.latitud LIKE '%".$search."%' OR
											r.longitud LIKE '%".$search."%' OR
											c.name LIKE '%".$search."%'
								 GROUP BY r.id ORDER BY r.id DESC";
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

$restaurants = new SearchRestaurants();
echo $restaurants->list_restaurants();