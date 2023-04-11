<?php 
require_once '../../php/class/connection.php';
class Add extends Connection{
	function add_category(){

		$arr = [
			"name" => $_POST['name'],
			"imagen" => strtolower($_FILES['imagen']['name']),
			"id_restaurant" => $_POST['selrestaurant'],
		];

		try{
			$file_origin = $_FILES['imagen']['name'];
			$file_lowercase = strtolower($file_origin);
			$file_temp = $_FILES['imagen']['tmp_name'];
			$file_folder = "../views/assets/img/categories/";
			if(move_uploaded_file($file_temp, $file_folder . $file_lowercase)){
				$sql = "CALL sp_add_categories(:name, :imagen, :id_restaurant)";
				$stm = $this->con->prepare($sql);
				foreach ($arr as $key => $value) {
					$stm->bindValue($key, $value);
				}
				$stm->execute();
				return $stm->rowCount() > 0 ? "true" : "false";
			}else{
				echo "error fatal";
			}
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
}
$add = new Add();
echo $add->add_category();