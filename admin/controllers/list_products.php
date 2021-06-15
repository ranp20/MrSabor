<?php 

require_once '../../php/class/connection.php';

class Products extends Connection{

	function list_products(){

		try{
			$sql = "SELECT p.id, p.name, p.description, p.price, p.stock, p.photo, p.offer, r.id as 'id_restaurant', r.name as 'name_restaurant', c.id as 'id_category', c.name as 'name_category' FROM tbl_product p INNER JOIN tbl_restaurants r ON p.id_restaurant = r.id INNER JOIN tbl_categories c ON p.id_category = c.id ORDER BY p.id DESC";

			if(isset($_POST['searchList'])){
				//$search = $this->con->real_escape_string($_POST['searchList']);
				$search = addslashes($_POST['searchList']);
				$sql = "SELECT p.id, p.name, p.description, p.price, p.stock, p.photo, p.offer, r.id as 'id_restaurant', r.name as 'name_restaurant', c.id as 'id_category', c.name as 'name_category' FROM tbl_product p INNER JOIN tbl_restaurants r ON p.id_restaurant = r.id INNER JOIN tbl_categories c ON p.id_category = c.id WHERE p.id LIKE '%".$search."%' OR
											p.name LIKE '%".$search."%' OR
											p.description LIKE '%".$search."%' OR
											p.price LIKE '%".$search."%' OR
											p.stock LIKE '%".$search."%' OR
											p.photo LIKE '%".$search."%' OR
											p.offer LIKE '%".$search."%' OR
											r.name LIKE '%".$search."%' OR
											c.name LIKE '%".$search."%'
								ORDER BY p.id DESC";
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

$products = new Products();
echo $products->list_products();