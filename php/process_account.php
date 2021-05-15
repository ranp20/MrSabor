<?php 

if(isset($_POST)){
	$arr_data_client = [
		"name" => $_POST["name"],
		"lastname" => $_POST["lastname"],
		"email" => $_POST["email"],
		"password" => $_POST["pass"],
		"telephone" => $_POST["telephone"],
		"address" => $_POST["address"],
		"postal_code" => $_POST["postal_code"],
	];

	require_once '../controllers/add-client.php';

	$add = new Add_Client();
	$add_user = $add->insert($arr_data_client);

	if(!empty($add_user)){
		

		$response = array(
			'response' => 'true'
		);

	}else{
		$response = array(
			'response' => 'false'
		);
	}

}else{
	echo "Error! Por favor rellene los campos del formulario para registrase.";
}

die(json_encode($response));