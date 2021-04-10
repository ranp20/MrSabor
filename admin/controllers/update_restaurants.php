<?php 

	require_once '../../php/class/connection.php';

	class Update extends Connection{

		function update_restaurant(){

			print_r($_POST);
			exit();

			try{
				$sql = "UPDATE tbl_restaurants SET name = :name, address = :address, photo = :photo, telephone = :telephone WHERE id = :id";
				$stm = $this->con->prepare($sql);
				foreach ($stm as $key => $value) {
					$stm->bindValue($key, $value);
				}
				$stm->execute();

				return $stm->fetchAll(PDO::FETCH_ASSOC);
			}catch(PDOException $e){
				return $e->getMessage();
			}
		}
	}

	$update = new Update();
	echo $update->update_restaurant();