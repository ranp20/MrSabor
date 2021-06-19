<?php 

	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
  $url =  $actual_link . "/" ."MrSabor/";

  error_reporting(0);
  $userSESS = $_SESSION['client'][0]['id'];

?>

<!-- LINKS DE ESTILOS Y CDNs PARA TODO EL DOCUMENTO O TEMA -->
<input type="hidden" id="idUSESScurrent" value="<?= $userSESS; ?>">
<meta charset="UTF-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!-- -- ESTILOS GENERALES PARA EL SITIO WEB -- -->
<link rel="stylesheet" href="<?php echo $url ?>assets/css/styles.css">
<!-- -- CDN - JQUERY WITH CONNECTION AVAILABLE -- -->
<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>-->
<!-- -- JQUERY WITHOUT CONNECTION AVAILABLE -- -->
<script src="<?php echo $url ?>js/jquery/jquery-3.6.0.min.js"></script>
<!-- -- CDN - GOOGLEFONTS -- -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<!-- -- API-WHATSAPP --- -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<a href="https://api.whatsapp.com/send?phone=51951488317&text=Hola,%20quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20productos." class="float" target="_blank" id="chat_wstp-icon"><i class="fa fa-whatsapp my-float"></i>
</a>
<!-- ICONO PARA LAS PÁGINAS -->
<link rel="shortcut icon" href="<?= $url ?>assets/img/logo/Logo_RESTAURANT_proyect.ico" type="image/x-icon">