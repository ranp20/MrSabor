<?php 
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
  $url =  $actual_link . "/" ."MrSabor/";
  error_reporting(0);
  $userSESS = $_SESSION['client'][0]['id'];
?>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="La auténtica comida. Excelentes ingredientes, mejores platillos siempre."/>
<link rel="icon" type="image/x-icon" href="./assets/img/favicon/Logo_RESTAURANT_proyect.ico">
<link rel="apple-touch-icon" href="./assets/img/favicon/Logo_RESTAURANT_proyect.ico">
<link rel="canonical" href="https://localhost/MrSabor">
<meta name="theme-color" content="#FFBD59">
<meta name="author" content="R@np-2021"/>
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
<meta name="twitter.card" content="summary">
<meta property="og:title" name="twitter.title" content="Mr Sabor - Mejores comidas">
<meta property="og:image" name="twitter.image" content="./assets/img/favicon/Logo_RESTAURANT_proyect_100x100.png">
<meta property="og:url" name="twitter.url" content="https://localhost/MrSabor">
<meta property="og:description" name="twitter.description" content="La auténtica comida. Excelentes ingredientes, mejores platillos siempre.">
<meta property="og:type" content="website"/>
<meta property="og:locale" content="es_ES"/>
<meta property="og:site_name" content="Mr Sabor"/>
<link rel="stylesheet" href="<?php echo $url ?>assets/css/styles.css">
<script src="<?php echo $url ?>js/jquery/jquery-3.6.0.min.js"></script>
<input type="hidden" id="idUSESScurrent" value="<?= $userSESS; ?>">