<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once 'includes/header_links.php'; ?>
	<title>Document</title>
</head>
<body>
	<?php require_once 'includes/homepage-headertop.php'; ?>
	<div class="container marg-57">
		<div class="d-product">
			<div class="d-product__content">
				<div class="d-product__content--product-photo">
					<!--<img src="admin/assets/img/menus/Ensalada_de_pollo.jpeg" alt="" class="d-product__content--product-photo__img">-->
					<figure class="d-product__content--product-photo__figure">
						<img src="admin/assets/img/menus/Ensalada_de_pollo.jpeg" alt="" class="d-product__content--product-photo__figure__img">
					</figure>
				</div>
				<div class="d-product__content--product-info">
					<h2 class="d-product__content--product-info--name">SECO DE POLLO A LA NORTEÑA</h2>
					<p class="d-product__content--product-info--category">Cárnicos</p>
					<p class="d-product__content--product-info--price">S/. 12.00</p>
					<div class="d-product__content--product-info--description">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda obcaecati, accusamus quaerat sed, eveniet distinctio. Eveniet, nesciunt, laudantium.</p>
					</div>
					<form action="" method="POST" class="d-product__content--product-info--form">
						<div class="d-product__content--product-info--form--quantity">
							<button class="d-product__content--product-info--form--quantity--btnrest btnscart-prod" type="button">-</button>
							<input type="number" class="d-product__content--product-info--form--quantity--input" id="quantity-d-products" min="1"  value="1" size="100">
							<button class="d-product__content--product-info--form--quantity--btnsum btnscart-prod" type="button">+</button>
						</div>
						<button type="submit" class="d-product__content--product-info--form--btnaddcart">Agregar al carrito</button>
					</form>
				</div>
			</div>
			<section class="related-products">
				<h2 class="related-products--title">PRODUCTOS SIMILARES</h2>
				<div class="related-products--content">
					<ul class="related-products--content__menu">
						<li class='related-products--content__menu--item'>
							<a href='detalle-producto' class='related-products--content__menu--link'>
								<div class='related-products--content__menu--link--contimg'>
									<img src='admin/assets/img/menus/Huevo_de_desayuno_saludable.jpeg' alt='' class='related-products--content__menu--link--contimg__photo'>
								</div>
								<p class='related-products--content__menu--link--nameprod'>CALDO DE GALLINA</p>
								<span class='related-products--content__menu--link--priceprod'>S/. 10.00</span>
							</a>
							<ul class='related-products--content__menu--item--addthisprod'>
								<li class='related-products--content__menu--item--addthisprod--item'>
									<a href='#0' class='related-products--content__menu--item--addthisprod--link'
										attr_id='12'
										attr_name='CALDO DE GALLINA'
										attr_price='12.00'
										attr_store='Astrid & Gastón'
										attr_quantity=1
									>
										<span>AGREGAR</span>
										<span>AL CARRITO</span>
									</a>
								</li>
							</ul>
						</li>
						<li class='related-products--content__menu--item'>
							<a href='detalle-producto' class='related-products--content__menu--link'>
								<div class='related-products--content__menu--link--contimg'>
									<img src='admin/assets/img/menus/Huevo_de_desayuno_saludable.jpeg' alt='' class='related-products--content__menu--link--contimg__photo'>
								</div>
								<p class='related-products--content__menu--link--nameprod'>CALDO DE GALLINA</p>
								<span class='related-products--content__menu--link--priceprod'>S/. 10.00</span>
							</a>
							<ul class='related-products--content__menu--item--addthisprod'>
								<li class='related-products--content__menu--item--addthisprod--item'>
									<a href='#0' class='related-products--content__menu--item--addthisprod--link'
										attr_id='17'
										attr_name='ARROZ CON POLLO'
										attr_price='15.00'
										attr_store='Doña Pepa'
										attr_quantity=1
									>
										<span>AGREGAR</span>
										<span>AL CARRITO</span>
									</a>
								</li>
							</ul>
						</li>
						<li class='related-products--content__menu--item'>
							<a href='detalle-producto' class='related-products--content__menu--link'>
								<div class='related-products--content__menu--link--contimg'>
									<img src='admin/assets/img/menus/Huevo_de_desayuno_saludable.jpeg' alt='' class='related-products--content__menu--link--contimg__photo'>
								</div>
								<p class='related-products--content__menu--link--nameprod'>CALDO DE GALLINA</p>
								<span class='related-products--content__menu--link--priceprod'>S/. 10.00</span>
							</a>
							<ul class='related-products--content__menu--item--addthisprod'>
								<li class='related-products--content__menu--item--addthisprod--item'>
									<a href='#0' class='related-products--content__menu--item--addthisprod--link'
										attr_id='18'
										attr_name='CEVICHE MARINO'
										attr_price='17.00'
										attr_store='Las almejas'
										attr_quantity=1
									>
										<span>AGREGAR</span>
										<span>AL CARRITO</span>
									</a>
								</li>
							</ul>
						</li>
						<li class='related-products--content__menu--item'>
							<a href='detalle-producto' class='related-products--content__menu--link'>
								<div class='related-products--content__menu--link--contimg'>
									<img src='admin/assets/img/menus/Huevo_de_desayuno_saludable.jpeg' alt='' class='related-products--content__menu--link--contimg__photo'>
								</div>
								<p class='related-products--content__menu--link--nameprod'>CALDO DE GALLINA</p>
								<span class='related-products--content__menu--link--priceprod'>S/. 10.00</span>
							</a>
							<ul class='related-products--content__menu--item--addthisprod'>
								<li class='related-products--content__menu--item--addthisprod--item'>
									<a href='#0' class='related-products--content__menu--item--addthisprod--link'
										attr_id='15'
										attr_name='ARROZ CON PATO'
										attr_price='19.00'
										attr_store='Las conchitas de Mar'
										attr_quantity=1
									>
										<span>AGREGAR</span>
										<span>AL CARRITO</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
	<?php require_once 'includes/homepage-footer.php'; ?>
	<script src="js/main.js" type="text/javascript"></script>
	<script src="js/actions_pages/add-cart-product.js" type="text/javascript"></script>
</body>
</html>