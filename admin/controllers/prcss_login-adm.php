<?php
$r = "";
if(isset($_POST) && count($_POST) > 0){
	$arr_adm = [
		"username" => $_POST['adm-log-username'],
		"password" => $_POST['adm-log-password']
	];
	require_once 'c_login-adm.php';
	$login = new Login_Admin();
	$verify = $login->verify_admin($arr_adm);
	if(!empty($verify) && $verify == "true"){
		require_once 'c_list_by_user.php';
		$user = new List_byUsername();
		$list_byuser = $user->list($arr_adm['username']);
		if(count($list_byuser) > 0){
			// INICIAR SESIÓN
			session_start();
			$_SESSION['admin_mrsabor'] = $list_byuser[0];
			$r = array(
				'res' => 'true',
				'received' => $list_byuser[0]
			);
		}else{
			$r = array(
				'res' => 'false'
			);
		}
	}else{
		$r = array(
			'res' => 'false'
		);
	}
}else{
	$r = array(
		'res' => 'false'
	);
}
die(json_encode($r));