<?php
//COMPRIMIR ARCHIVOS DE TEXTO...
(substr_count($_SERVER["HTTP_ACCEPT_ENCODING"], "gzip")) ? ob_start("ob_gzhandler") : ob_start();
session_start();
if(!isset($_SESSION['admin_mrsabor'])){
	header("location: ./");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once 'includes/header_links.php';?>
	<title>Dashboard - </title>
</head>
<body>
	<main id="main" class="main">
		<?php require_once 'includes/sidebar-left.php'; ?>
		<div class="main__cont">
			<?php require_once 'includes/header-top.php'; ?>
			<div class="main__cont--content">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Error doloremque totam laborum at mollitia iusto, fugit, veritatis, accusantium provident illum aut ab laboriosam eius cum saepe quisquam eos voluptatum, earum!</p>
			</div>
		</div>
	</main>
	<script type="text/javascript" src="<?= $url;?>js/main.js"></script>
</body>
</html>