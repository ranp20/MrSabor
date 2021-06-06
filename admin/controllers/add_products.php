<?php 

	require_once '../../php/class/connection.php';

	class Add extends Connection{
		function add_product(){

			$arr = [
				"name" => $_POST['name'],
				"description" => $_POST['description'],
				"price" => $_POST['price'],
				"stock" => $_POST['stock'],
				"imagen" => strtolower($_FILES['imagen']['name']),
				"offer" => ($_POST['offer'] == 1) ? 'NO' : 'SI',
				"newprice" => ($_POST['newprice'] != "") ? $_POST['newprice'] : 0,
				"idrestaurant" => $_POST['idrestaurant'],
				"idcategory" => $_POST['idcategory'],
			];

			try{

				$file_origin = $_FILES['imagen']['name'];
				$file_lowercase = strtolower($file_origin);
				$file_temp = $_FILES['imagen']['tmp_name'];
				$file_folder = "../assets/img/products/";

				if(move_uploaded_file($file_temp, $file_folder . $file_lowercase)){
					$sql = "CALL sp_add_products(:name, :description, :price, :stock, :imagen, :offer, :newprice, :idrestaurant, :idcategory)";
					$stm = $this->con->prepare($sql);
					foreach ($arr as $key => $value) {
						$stm->bindValue($key, $value);
					}
					$stm->execute();

					$data = $stm->fetchAll(PDO::FETCH_ASSOC);
					$res = json_encode($data);

					echo $res;
				}else{
					echo "error fatal";
				}

			}catch(PDOException $e){
				return $e->getMessage();
			}
		}
	}

	$add = new Add();
	echo $add->add_product();