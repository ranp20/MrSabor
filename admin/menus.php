<?php
	
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
  $url =  $actual_link . "/" ."MrSabor/admin/";

	require_once 'php/process_session-admin.php';

	if(!isset($_SESSION['user'])){
		header("location: /");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once 'includes/header_links.php'; ?>
	<title>Dashboard - </title>
</head>
<body>
	<main id="main" class="main">
		<div class="result"></div>
		<?php require_once 'includes/sidebar-left.php'; ?>
		<div class="main__cont">
			<?php require_once 'includes/header-top.php'; ?>
			<div class="main__cont--content">
				<div class="main__cont--content__addtitle">
					<h2 class="main__cont--content__addtitle--title">MENÚS</h2>
					<button type="button" href="#" id="add-restaurant" class="main__cont--content__addtitle--btn-add" data-toggle="modal" data-target="#addrestaurantModal"><span class="main__cont--content__addtitle--btn-add__hidden">Agregar&nbsp;</span>+</button>
				</div>
			</div>
		</div>
	</main>
	<script type="text/javascript" src="<?php echo $url ?>js/main.js"></script>
	<script type="text/javascript" src="<?php echo $url ?>js/actions_pages/restaurants.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
</body>
</html>