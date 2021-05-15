<?php 

function session_cli(){
	return isset($_SESSION['client']);
}

session_cli();
session_start();