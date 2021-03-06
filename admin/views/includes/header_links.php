<?php
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
  $url =  $actual_link . "/" ."MrSabor/admin/views/";
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<meta name="description" content="La auténtica comida. Excelentes ingredientes, mejores platillos siempre."/>
<link rel="icon" type="image/x-icon" href="<?= $url;?>assets/img/favicon/Logo_RESTAURANT_proyect.ico">
<link rel="apple-touch-icon" href="<?= $url;?>assets/img/favicon/Logo_RESTAURANT_proyect.ico">
<link rel="canonical" href="https://localhost/MrSabor/admin">
<meta name="theme-color" content="#FFBD59">
<meta name="author" content="R@np-2021"/>
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
<meta name="twitter.card" content="summary">
<meta property="og:title" name="twitter.title" content="Mr Sabor - Panel de administración">
<meta property="og:image" name="twitter.image" content="./assets/img/favicon/Logo_RESTAURANT_proyect_100x100.png">
<meta property="og:url" name="twitter.url" content="https://localhost/MrSabor/admin">
<meta property="og:description" name="twitter.description" content="La auténtica comida. Excelentes ingredientes, mejores platillos siempre.">
<meta property="og:type" content="website"/>
<meta property="og:locale" content="es_ES"/>
<meta property="og:site_name" content="Mr Sabor"/>
<!-- JQUERY COMPRESSED -->
<script src="<?= $url; ?>js/plugins/jquery/jquery-3.6.0.min.js"></script>
<!-- BOOTSTRAP UNCOMPRESSED -->
<link rel="stylesheet" href="<?= $url; ?>js/plugins/bootstrap/css/bootstrap.min.css">
<script src="<?= $url; ?>js/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- STYLESSHEET -->
<link rel="stylesheet" href="<?= $url; ?>assets/css/styles.min.css">