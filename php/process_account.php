<?php
if(isset($_POST) && count($_POST) > 0){
	$arr_data_client = [
		"name" => $_POST["name"],
		"lastname" => $_POST["lastname"],
		"email" => $_POST["email"],
		"password" => $_POST["pass"],
		"telephone" => $_POST["telephone"],
		"address" => $_POST["address"],
		"postal_code" => $_POST["postal_code"]
	];

	require_once '../php/class/client.php';
	$client = new Client();
	$verifymail = $client->verify_account_cli($arr_data_client['email']);

	if($verifymail == "true"){
		$res = array(
			'response' => 'equals'
		);
	}else{
		$validate = $client->add_cli($arr_data_client);
		if($validate == "true"){
			$res = array(
				'response' => 'true'
			);
		}else{
			$res = array(
				'response' => 'errinsert'
			);
		}
	}
}else{
	$res = array(
		'response' => 'false'
	);
}
die(json_encode($res));
