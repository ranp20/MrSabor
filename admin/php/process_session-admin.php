<?php 

function session(){
	return isset($_SESSION['user']);
}

session();
session_start();