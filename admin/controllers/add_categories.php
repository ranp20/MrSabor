<?php 

	require_once '../../php/class/connection.php';

	class Add extends Connection{
		function add_category(){

			$arr = [
				"name" => $_POST['name'],
				"imagen" => strtolower($_FILES['imagen']['name']),
			];

			try{

				$file_origin = $_FILES['imagen']['name'];
				$file_lowercase = strtolower($file_origin);
				$file_temp = $_FILES['imagen']['tmp_name'];
				$file_folder = "../assets/img/categories/";

				if(move_uploaded_file($file_temp, $file_folder . $file_lowercase)){
					$sql = "INSERT INTO tbl_categories (name, photo) VALUES (:name, :imagen)";
					$stm = $this->con->prepare($sql);
					foreach ($arr as $key => $value) {
						$stm->bindValue($key, $value);
					}
					$stm->execute();

					$data = $stm->fetchAll(PDO::FETCH_ASSOC);
					$res = json_decode($data);

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
	echo $add->add_category();