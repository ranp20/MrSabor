<?php 

if(isset($_POST)){

	$data_admin = [
		"username" => $_POST['username'],
		"password" => $_POST['password']
	];

	require_once '../controllers/login.php';
	$login = new Login_Admin();
	$verify = $login->verify_admin($data_admin);

	if(!empty($verify)){
		
		require_once '../../php/class/user.php';

		$iduser = $verify[0]['id'];

		$user = new User();
		$getid = $user->get_user_by_id($iduser);

		if($getid > 0){
			session_start();
			$_SESSION['user'] = $getid; 
			
			$response = array(
				'response' => 'true'
			);
		}else{
			echo "Error al validar los datos del usuario";
		}

	}else{
		$response = array(
				'response' => 'false'
		);
	}
}

die(json_encode($response));