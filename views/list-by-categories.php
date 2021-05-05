<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once 'includes/header_links.php'; ?>
	<title>Document</title>
</head>
<body>
	<?php require_once 'includes/homepage-headertop.php'; ?>
	<div class="container marg-57">
		<div class="filter-categ">
			<section class="filter-categ--title">
				<h2>DESAYUNO</h2>
			</section>
			<section class="filter-categ--shortinfo">
				<div class="filter-categ--shortinfo--infoshow" id="infoshowfilter-categ">
					<p>Mostrando 1-2 of 20 result</p>
				</div>
				<div class="filter-categ--shortinfo--filterinfoshow">
					<form action="" class="filter-categ--shortinfo--filterinfoshow__form">
						<select name="" id="" class="filter-categ--shortinfo--filterinfoshow__form__select">
							<option value="">filtro 1</option>
							<option value="">filtro 2</option>
							<option value="">filtro 3</option>
						</select>
					</form>
				</div>
			</section>
			<section class="filter-categ--content">
				<ul class="filter-categ--content__menu">
					<?php 

					for($i = 0; $i < 10; $i++){
						echo '
							<li class="filter-categ--content__menu--item">
								<a href="detalle-producto" class="filter-categ--content__menu--link">
									<div class="filter-categ--content__menu--link--contimg">
										<img src="admin/assets/img/menus/Ensalada_de_pollo.jpeg" alt="" class="filter-categ--content__menu--link--contimg__photo">
									</div>
									<p class="filter-categ--content__menu--link--nameprod">ARROZ CON POLLO</p>
									<span class="filter-categ--content__menu--link--priceprod">S/. 12.00</span>
								</a>
							</li>						
						';
					}

					 ?>
				</ul>
			</section>
		</div>
	</div>
	<?php require_once 'includes/homepage-footer.php'; ?>
	<script src="js/main.js" type="text/javascript"></script>
	<script src="js/add-cart-product.js" type="text/javascript"></script>
</body>
</html>