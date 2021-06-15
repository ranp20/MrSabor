<?php

	if(!isset($_GET["idprodm"]) || !is_numeric($_GET["idprodm"])){
		header('Location: ./');
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once 'includes/header_links.php'; ?>
	<title>Mr Sabor - Productos</title>
</head>
<body>
	<?php require_once 'includes/homepage-headertop.php'; ?>
	<div class="container marg-57">
		<div class="d-product">
			<input type="hidden" value="<?= $_GET['idprodm'];  ?>" id="id_filterCategory">
			<div class="d-product__content" id="d-product__content"></div>
			<section class="related-products">
				<h2 class="related-products--title">PRODUCTOS SIMILARES</h2>
				<div class="d-product__content" id="related-products__content"></div>
				<div class="related-products--content">
					<ul class="related-products--content__menu" id="related-products--content__menu"></ul>
				</div>
			</section>
		</div>
	</div>
	<?php require_once 'includes/homepage-footer.php'; ?>
	<script src="js/main.js"></script>
	<script src="js/actions_pages/add-cart-product.js"></script>
	<script src="js/actions_pages/list_ProdsByID.js"></script>
</body>
</html>