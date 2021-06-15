<?php
	
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
  $url =  $actual_link . "/" ."MrSabor/admin/";

	require_once 'php/process_session-admin.php';

	if(!isset($_SESSION['user'])){
		header("location: ./");
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once 'includes/header_links.php'; ?>
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
	<script type="text/javascript" src="<?php echo $url ?>js/main.js"></script>
</body>
</html>