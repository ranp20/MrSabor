<?php 

if(isset($_POST)){

	$arr_data_login = [
		"email" => $_POST['mail'],
		"password" => $_POST['pass']
	];

	require_once '../controllers/login.php';
	$login = new Login_Client();
	$verify = $login->verify_client($arr_data_login);

	if(!empty($verify)){
		
		require_once '../php/class/client.php';

		$idclient = $verify[0]['id'];

		$client = new Client();
		$getid = $client->get_cli_by_id($idclient);

		if($getid > 0){
			session_start();
			$_SESSION['client'] = $getid;
			
			$response = array(
				'response' => 'true'
			);
		}else{
			echo "Error al validar los datos del usuario";
		}

		$response = array(
			'response' => 'true'
		);

	}else{
		$response = array(
				'response' => 'false'
		);
	}
}

die(json_encode($response));