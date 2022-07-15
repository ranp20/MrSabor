<?php 

require_once '../controllers/add_user.php';
require_once '../../php/class/user.php';

$arr_account = [
	"username" => $_POST['adduser'],
	"email" => $_POST['addemail'],
	"password" => $_POST['addpassword'],
	"idrol" => $_POST['addtypeuser'],
];

$account = new Account();
$type_user = $account->insert($arr_account);

if($type_user == true){
	$response = array(
		'response' => 'true'
	);
}else{
	$response = array(
		'response' => 'false'
	);
}

die(json_encode($response));