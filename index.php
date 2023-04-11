<?php
	require_once 'php/process_session-client.php';
	require_once 'controllers/list-all-categories.php';
	require_once 'controllers/list-all-prodsByCalification.php';
	$category = new ListCategories(); // LISTAR CATEGORÍAS
	$listcat = $category->get_categories();
	$products = new ListByCalification(); // LISTAR PRODUCTOS POR CALIFICACIÓN
	$listProds = $products->list();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once 'views/includes/header_links.php';?>
	<title>Mr Sabor | Deliveries y reservaciones</title>
</head>
<body>
	<div class="home">
		<div class="homepage">
			<div class="homepage__infotop" id="homepage-infotop">
				<div class="box">
					<div class="homepage__infotop__header">
						<div id="menu-show-home"></div>
						<div class="homepage__infotop__header--contmenu">
							<ul class="homepage__infotop__header--contmenu__menu">
								<li class="homepage__infotop__header--contmenu__menu--item">
									<a href="#inicio" class="homepage__infotop__header--contmenu__menu--link">Inicio</a>
								</li>
								<li class="homepage__infotop__header--contmenu__menu--item">
									<a href="#categorias" class="homepage__infotop__header--contmenu__menu--link">Categorías</a>
								</li>
								<li class="homepage__infotop__header--contmenu__menu--item">
									<a href="javascript(0);" class="homepage__infotop__header--contmenu__menu--link btn-moreopts">Menú<svg class="homepage__infotop__header--contmenu__menu--link--icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg></a>
									<ul class="homepage__infotop__header--contmenu__menu--link--m">
										<li class="homepage__infotop__header--contmenu__menu--link--m--i"><a href="#platos">Nuestros Menús</a></li>
										<li class="homepage__infotop__header--contmenu__menu--link--m--i"><a href="search-restaurant">Nuestros Locales</a></li>
									</ul>
								</li>
								<li class="homepage__infotop__header--contmenu__menu--item">
									<a href="#contacto" class="homepage__infotop__header--contmenu__menu--link">Contacto</a>
								</li>
							</ul>
						</div>
						<div class="homepage__infotop__header--contlogo">
							<a href="./" class="homepage__infotop__header--contlogo__link">
								<img src="admin/views/assets/img/logo/Logo_RESTAURANT_proyect.png" alt="" class="homepage__infotop__header--contlogo__link--image" width="100" height="100" loading="lazy">
							</a>
						</div>
						<div class="homepage__infotop__header--contlogin">
							
							<?php 
								if(isset($_SESSION['client'])){
									echo "
										<button type='button' class='homepage__infotop__header--contlogin__profile bnt-profYesSess'>
											<svg xmlns='http://www.w3.org/2000/svg' fill='#FFFFFF' class='homepage__infotop__header--contlogin__profile bnt-profYesSess--icon' width='24' height='24' viewBox='0 0 24 24'><path d='M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 22c-3.123 0-5.914-1.441-7.749-3.69.259-.588.783-.995 1.867-1.246 2.244-.518 4.459-.981 3.393-2.945-3.155-5.82-.899-9.119 2.489-9.119 3.322 0 5.634 3.177 2.489 9.119-1.035 1.952 1.1 2.416 3.393 2.945 1.082.25 1.61.655 1.871 1.241-1.836 2.253-4.628 3.695-7.753 3.695z'/></svg>
											<div class='profile-opts'>
												<ul class='profile-opts__menu'>
													<li class='profile-opts__menu--item'>
														<a href='#' class='profile-opts__menu--link'>Ayuda</a>
														<a href='#' class='profile-opts__menu--link'>Nosotros</a>
														<a href='php/process_logout.php' class='profile-opts__menu--link'>Cerrar sesión</a>
													</li>
												</ul>
											</div>
										</button>
									";
								}else{
									echo "
										<a href='login' class='homepage__infotop__header--contlogin__profile bnt-profNotSess'>
											<svg xmlns='http://www.w3.org/2000/svg' fill='#FFFFFF'  class='homepage__infotop__header--contlogin__profile bnt-profNotSess--icon' width='24' height='24' viewBox='0 0 24 24'><path d='M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 22c-3.123 0-5.914-1.441-7.749-3.69.259-.588.783-.995 1.867-1.246 2.244-.518 4.459-.981 3.393-2.945-3.155-5.82-.899-9.119 2.489-9.119 3.322 0 5.634 3.177 2.489 9.119-1.035 1.952 1.1 2.416 3.393 2.945 1.082.25 1.61.655 1.871 1.241-1.836 2.253-4.628 3.695-7.753 3.695z'/></svg>
										</a>
									";
								}
							?>
						</div>
						<div class="homepage__infotop__header--contcart">
							<a href="#0" class="homepage__infotop__header--contcart__shoppingcart" id="shopping-cart-list">
								<svg xmlns:dc="http://purl.org/dc/elements/1.1/" class="homepage__infotop__header--contcart__shoppingcart--icon"  xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" x="0px" y="0px" viewBox="0 0 100 125"><g transform="translate(0,-952.36218)"><path d="m 7.0159591,961.36223 c -1.6568997,0 -2.9999997,1.34315 -2.9999997,3 0,1.65685 1.3431,3 2.9999997,3 l 11.5624999,0 10.3125,48.65617 c 0.408,1.8316 1.6084,3.356 3.125,3.3438 l 50,0 c 1.5849,0.022 3.0427,-1.4149 3.0427,-3 0,-1.5851 -1.4578,-3.0224 -3.0427,-3 l -47.5625,0 -1.2813,-6 52.8438,0 c 1.3432,-0.01 2.6123,-1.0331 2.9062,-2.3437 l 6.999996,-30.00002 c 0.3901,-1.74107 -1.121996,-3.64346 -2.906196,-3.65625 l -67.4375,0 -1.625,-7.625 c -0.2839,-1.3321 -1.5755,-2.3764 -2.9375,-2.375 z m 19.8124999,16 15.625,0 1.5,9 -15.2187,0 z m 21.75,0 18.875,0 -1.5,9 -15.875,0 z m 25,0 15.6563,0 -2.0938,9 -15.0625,0 z m -43.5625,15 14.9375,0 1.5,8.99997 -14.5313,0 z m 21.0625,0 13.875,0 -1.5,8.99997 -10.875,0 z m 20,0 14.6563,0 -2.0938,8.99997 -14.0625,0 z m -28.0625,30.99987 c -5.4873,0 -10,4.5126 -10,10 0,5.4873 4.5127,10 10,10 5.4873,0 10,-4.5127 10,-10 0,-5.4873 -4.5127,-10 -10,-10 z m 28,0 c -5.4873,0 -10,4.5126 -10,10 0,5.4873 4.5127,10 10,10 5.4873,0 10,-4.5127 10,-10 0,-5.4873 -4.5127,-10 -10,-10 z m -28,6 c 2.2447,0 4,1.7553 4,4 0,2.2446 -1.7553,4 -4,4 -2.2445,0 -4,-1.7554 -4,-4 0,-2.2447 1.7555,-4 4,-4 z m 28,0 c 2.2447,0 4,1.7553 4,4 0,2.2446 -1.7553,4 -4,4 -2.2445,0 -4,-1.7554 -4,-4 0,-2.2447 1.7555,-4 4,-4 z" style="text-indent:0;text-transform:none;direction:ltr;block-progression:tb;baseline-shift:baseline;enable-background:accumulate;" fill="" fill-opacity="1" stroke="none" marker="none" visibility="visible" display="inline" overflow="visible"/></g></svg>
							</a>
						</div>
						<?php 
							if(isset($_SESSION['client'])){
								echo "
									<div class='homepage__infotop__header--contmenucart'>
										<div class='homepage__infotop__header--contmenucart__cont'>
											<input type='hidden' value='{$userSESS}' id='validCliSession'>
											<div class='homepage__infotop__header--contmenucart__cont--cTitle'>
												<h2>Lista en tus pedidos</h2>
											</div>
											<ul class='homepage__infotop__header--contmenucart__cont__menu' id='listProds_ByClienteAdd'></ul>
											<a href='cart' class='homepageTwo__infotop__header--contmenucart__cont--linkgoCart'>
												<div class='homepageTwo__infotop__header--contmenucart__cont--linkgoCart--cImg'>
													<svg xmlns:dc='http://purl.org/dc/elements/1.1/' xmlns:cc='http://creativecommons.org/ns#' xmlns:rdf='http://www.w3.org/1999/02/22-rdf-syntax-ns#' xmlns:svg='http://www.w3.org/2000/svg' xmlns='http://www.w3.org/2000/svg' xmlns:sodipodi='http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd' xmlns:inkscape='http://www.inkscape.org/namespaces/inkscape' version='1.1' x='0px' y='0px' viewBox='0 0 100 125'><g transform='translate(0,-952.36218)'><path d='m 7.0159591,961.36223 c -1.6568997,0 -2.9999997,1.34315 -2.9999997,3 0,1.65685 1.3431,3 2.9999997,3 l 11.5624999,0 10.3125,48.65617 c 0.408,1.8316 1.6084,3.356 3.125,3.3438 l 50,0 c 1.5849,0.022 3.0427,-1.4149 3.0427,-3 0,-1.5851 -1.4578,-3.0224 -3.0427,-3 l -47.5625,0 -1.2813,-6 52.8438,0 c 1.3432,-0.01 2.6123,-1.0331 2.9062,-2.3437 l 6.999996,-30.00002 c 0.3901,-1.74107 -1.121996,-3.64346 -2.906196,-3.65625 l -67.4375,0 -1.625,-7.625 c -0.2839,-1.3321 -1.5755,-2.3764 -2.9375,-2.375 z m 19.8124999,16 15.625,0 1.5,9 -15.2187,0 z m 21.75,0 18.875,0 -1.5,9 -15.875,0 z m 25,0 15.6563,0 -2.0938,9 -15.0625,0 z m -43.5625,15 14.9375,0 1.5,8.99997 -14.5313,0 z m 21.0625,0 13.875,0 -1.5,8.99997 -10.875,0 z m 20,0 14.6563,0 -2.0938,8.99997 -14.0625,0 z m -28.0625,30.99987 c -5.4873,0 -10,4.5126 -10,10 0,5.4873 4.5127,10 10,10 5.4873,0 10,-4.5127 10,-10 0,-5.4873 -4.5127,-10 -10,-10 z m 28,0 c -5.4873,0 -10,4.5126 -10,10 0,5.4873 4.5127,10 10,10 5.4873,0 10,-4.5127 10,-10 0,-5.4873 -4.5127,-10 -10,-10 z m -28,6 c 2.2447,0 4,1.7553 4,4 0,2.2446 -1.7553,4 -4,4 -2.2445,0 -4,-1.7554 -4,-4 0,-2.2447 1.7555,-4 4,-4 z m 28,0 c 2.2447,0 4,1.7553 4,4 0,2.2446 -1.7553,4 -4,4 -2.2445,0 -4,-1.7554 -4,-4 0,-2.2447 1.7555,-4 4,-4 z' style='text-indent:0;text-transform:none;direction:ltr;block-progression:tb;baseline-shift:baseline;color:#000000;enable-background:accumulate;' fill-opacity='1' stroke='none' marker='none' visibility='visible' display='inline' overflow='visible'/></g></svg>
												</div>
												<span>Ir al Carrito</span>
											</a>
										</div>
									</div>
								";
							}
						?>
					</div>	
				</div>
			</div>
		</div>
		<section class="heroimage" id="inicio">
			<ul class="heroimage--menu" id="sliderHeroimages">
				<li class="heroimage--menu__item">
					<img class="heroimage--menu__item--background img-fluid" src="admin/views/assets/img/banners/home-banner1.jpg" alt="" width="100" height="100" loading="lazy">
					<div class="heroimage--menu__item--content left-align container">
						<div class="heroimage--menu__item--content__info left-text">
							<h2 class="heroimage--menu__item--content__info--title">Saludable por dentro, fresco <span>por fuera</span></h2>
							<p class="heroimage--menu__item--content__info--subtitle">Entregamos alimentos saludables que están listos para comer. Simplemente elija su propio menú que le guste.</p>
							<a class="heroimage--menu__item--content__info--gotoproduct" href="#platos">CONOCER MÁS<span>&#10132;</span></a>
						</div>
					</div>
				</li>
				<li class="heroimage--menu__item">
					<img class="heroimage--menu__item--background img-fluid" src="admin/views/assets/img/banners/home-banner3.jpg" alt="" width="100" height="100" loading="lazy">
					<div class="heroimage--menu__item--content center-align container">
						<div class="heroimage--menu__item--content__info center-text">
							<h2 class="heroimage--menu__item--content__info--title">La comida sana viene de <span class="block">Ingredientes sanos</span></h2>
							<p class="heroimage--menu__item--content__info--subtitle">Entregamos alimentos saludables que están listos para comer. Simplemente elija su propio menú que le guste.</p>
							<a class="heroimage--menu__item--content__info--gotoproduct" href="#platos">CONOCER MÁS<span>&#10132;</span></a>
						</div>
					</div>
				</li>
				<li class="heroimage--menu__item">
					<img class="heroimage--menu__item--background img-fluid" src="admin/views/assets/img/banners/home-banner2.jpg" alt="" width="100" height="100" loading="lazy">
					<div class="heroimage--menu__item--content right-align container">
						<div class="heroimage--menu__item--content__info right-text">
							<h2 class="heroimage--menu__item--content__info--title">Comida sana <span class="block">Para el desayuno</span></h2>
							<p class="heroimage--menu__item--content__info--subtitle">Entregamos alimentos saludables que están listos para comer. Simplemente elija su propio menú que le guste.</p>
							<a class="heroimage--menu__item--content__info--gotoproduct" href="#platos">CONOCER MÁS<span>&#10132;</span></a>
						</div>
					</div>
				</li>
			</ul>
			<div class="heroimage--content-btns container">
				<button class="heroimage--content-btns__btn heroimage--content-btns__btn--left" id="heroimageLeft">&#8249;</button>
				<button class="heroimage--content-btns__btn heroimage--content-btns__btn--right" id="heroimageRight">&#8250;</button>
			</div>
		</section>
		<section class="categories-food" id="categorias">
			<div class="categories-food__content container">
				<div class="categories-food__content--conttitle">
					<h2 class="categories-food__content--conttitle__acotacion">NUESTRAS CATEGORÍAS</h2>
				</div>
				<?php 
					//print_r($listcat[0]['name']);
					if($listcat == []){
						echo "
							<div class='any-results-home'>
								<h2 class='any-results-home--title'>No se encontraron resultados</h2>
							</div>
						";
					}else{
				?>
					<ul class='categories-food__content--menu'>
				<?php
						foreach($listcat as $key => $value){
							$path_categ = "admin/views/assets/img/categories/".$value['photo'];
							echo "
								<li class='categories-food__content--menu__item'>
									<a href='bcategoria' class='categories-food__content--menu__item__link'>
										<div class='categories-food__content--menu__item__link--categ-imagen'>
											<img class='img-fluid' src='{$path_categ}' alt='' width='100' height='100' loading='lazy'>
										</div>
										<div class='categories-food__content--menu__item__link--categ-description'>
											<h2 class='categories-food__content--menu__item__link--categ-description--name'>{$value['name']}</h2>
										</div>
									</a>
								</li>
							";
						}
				?>
					</ul>
				<?php
					}
				?>
			</div>
		</section>
		<section class="howitwork" id="como-empezar">
			<div class="howitwork__content container">
				<div class="howitwork__content--conttitle">
					<h2 class="howitwork__content--conttitle__title">¿ Cómo funciona ?</h2>
				</div>
				<div class="howitwork__content--continfo">
					<a href="javascript(0);" class="howitwork__content--continfo__item">
						<img src="assets/img/icons/delivery-meal.svg" alt="" class="howitwork__content--continfo__item--icon img-fluid" width="100" height="100">
						<h2 class="howitwork__content--continfo__item--title">Elige tu favorito</h2>
						<p class="howitwork__content--continfo__item--description">Elija sus comidas favoritas y ordene en línea o por teléfono. Es fácil personalizar su pedido.</p>
					</a>
					<a href="javascript(0);" class="howitwork__content--continfo__item">
						<img src="assets/img/icons/delivery-delivery-man.svg" alt="" class="howitwork__content--continfo__item--icon img-fluid" width="100" height="100">
						<h2 class="howitwork__content--continfo__item--title">Entregamos tu comida</h2>
						<p class="howitwork__content--continfo__item--description">Preparamos y entregamos las comidas que llegan a su puerta. Y los deberes o el dolor se sientan en vulputacion.</p>
					</a>
					<a href="javascript(0);" class="howitwork__content--continfo__item">
						<img src="assets/img/icons/delivery-eat-enjoy.svg" alt="" class="howitwork__content--continfo__item--icon img-fluid" width="100" height="100">
						<h2 class="howitwork__content--continfo__item--title">Come y disfruta</h2>
						<p class="howitwork__content--continfo__item--description">Sin compras, sin cocinar, sin contar ni limpiar. Disfrute de sus comidas saludables con su familia.</p>
					</a>
				</div>
			</div>
		</section>
		<section class="our-menu" id="platos">
			<div class="our-menu__content container">
				<div class="our-menu__content--cont-title">
					<h2 class="our-menu__content--cont-title__title">NUESTRO MENÚ</h2>
				</div>
				<div class="our-menu__content--cont-our-menus">
					<?php
						if(isset($listProds) && !empty($listProds)){
							$tmp_bestseller = "
								<div class='our-menu__content--cont-our-menus__categmenu'>
									<div class='our-menu__content--cont-our-menus__categmenu--title'>
										<h3 class='our-menu__content--cont-our-menus__categmenu--title--title'>DESTACADO</h3>
									</div>
									<div class='our-menu__content--cont-our-menus__categmenu--meals'>
										<ul class='our-menu__content--cont-our-menus__categmenu--meals__menu' id='sliderMenus'>

							";
							$allProdsCalification = array_slice($listProds, 0 , 9);
							for($i = 0; $i < count($allProdsCalification); $i++){
								$patheat = "admin/views/assets/img/products/".$listProds[$i]['photo'];
								$tmp_bestseller.= "
									<li class='our-menu__content--cont-our-menus__categmenu--meals__menu__item'>
					 					<a href='detalle-producto?idprodm={$listProds[$i]['id']}' class='our-menu__content--cont-our-menus__categmenu--meals__menu__item__link'>
					 						<div class='our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--bgcimage'>
					 							<img src='{$patheat}' alt=''>
					 						</div>
					 						<div class='our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo'>
					 							<h4 class='our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo__title'>{$listProds[$i]['name']}</h4>
					 						</div>
					 					</a>
					 				</li>
								";
							}
							$tmp_bestseller.= "
									</ul>
									<div class='our-menu__content--cont-our-menus__categmenu--meals__btns'>
										<button class='our-menu__content--cont-our-menus__categmenu--meals__btns--left slidermenus-left'>&#8249;</button>
										<button class='our-menu__content--cont-our-menus__categmenu--meals__btns--right slidermenus-right'>&#8250;</button>
									</div>
									</div>
								</div>
							";
							echo $tmp_bestseller;
						}else{
							echo "<div class='any-results-home'>
										<h2 class='any-results-home--title'>No se encontraron resultados</h2>
									</div>";
						}
					?>
				</div>
			</div>
		</section>
		<section class="contact-us" id="contacto" style="background-image: url(admin/views/assets/img/banners/select-program-background.jpg);background-attachment: fixed;">
			<div class="contact-us__cont">
				<div class="contact-us__cont--content container">
					<div class="contact-us__cont--content--banner">
						<img src="admin/views/assets/img/banners/select-program-image.png" alt="">
					</div>
					<div class="contact-us__cont--content--contact">
						<div class="contact-us__cont--content--contact--title">
							<h2>Suscríbete y recibe muchos beneficios</h2>
						</div>
						<div class="contact-us__cont--content--contact--register">
							<form action="" method="POST" class="contact-us__cont--content--contact--register__form">
								<div class="contact-us__cont--content--contact--register__form--control">
									<label class="contact-us__cont--content--contact--register__form--control__label" for="email_new"><img src="assets/img/icons/mail.svg" class="contact-us__cont--content--contact--register__form--control__label--icon" alt=""></label>
									<input id="email_new" type="email" class="contact-us__cont--content--contact--register__form--control__input" required placeholder="Email">
								</div>
								<div class="contact-us__cont--content--contact--register__form--control">
									<label class="contact-us__cont--content--contact--register__form--control__label" for="user_new"><img src="assets/img/icons/user.svg" class="contact-us__cont--content--contact--register__form--control__label--icon" alt=""></label>
									<input id="user_new" type="text" class="contact-us__cont--content--contact--register__form--control__input" required placeholder="Nombres">
								</div>
								<button type="submit" class="contact-us__cont--content--contact--register__form--btnsend">Suscribirse</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer class="footer">
			<div class="footer__content container">
				<div class="footer__content--cont">
					<div class="footer__content--cont__logotype-text">
						<img src="assets/img/logo/Logo_RESTAURANT_proyect-black.png" alt="">
						<p>Mr Sabor es más que un restaurante, es el lugar donde nuestros clientes pueden sentir la misma calidez y atención, como si estuviesen en casa.</p>
					</div>
					<div class="footer__content--cont__list">
						<a href="javascript(0);" class="footer__content--cont__list--social-media"><img src="assets/img/icons/icon-facebook.svg" alt=""></a>
						<a href="javascript(0);" class="footer__content--cont__list--social-media"><img src="assets/img/icons/icon-twitter.svg" alt=""></a>
						<a href="javascript(0);" class="footer__content--cont__list--social-media"><img src="assets/img/icons/icon-youtube.svg" alt=""></a>
						<a href="javascript(0);" class="footer__content--cont__list--social-media"><img src="assets/img/icons/icon-instagram.svg" alt=""></a>
					</div>
				</div>
				<div class="footer__content--cont">
					<h2 class="footer__content--cont__title">CATEGORÍAS</h2>
					<ul class="footer__content--cont__menu">
						<li class="footer__content--cont__menu--item">
							<a href="javascript(0);" class="footer__content--cont__menu--link">Vegetariana</a>
						</li>
						<li class="footer__content--cont__menu--item">
							<a href="javascript(0);" class="footer__content--cont__menu--link">Cárnica</a>
						</li>
						<li class="footer__content--cont__menu--item">
							<a href="javascript(0);" class="footer__content--cont__menu--link">Rápida</a>
						</li>
					</ul>
				</div>
				<div class="footer__content--cont">
					<h2 class="footer__content--cont__title">CONTACTOS</h2>
					<ul class="footer__content--cont__menu">
						<li class="footer__content--cont__menu--icon-item">
							<a href="javascript(0);" class="footer__content--cont__menu--link">
								<img src="assets/img/icons/icon-home.svg" alt="">
								<span>Av. Las manzanas 252 - Sucre - Lima, Perú</span>
							</a>
						</li>
						<li class="footer__content--cont__menu--icon-item">
							<a href="javascript(0);" class="footer__content--cont__menu--link">
								<img src="assets/img/icons/icon-phone.svg" alt="">
								<span>+51 918 283 634</span>
							</a>
						</li>
						<li class="footer__content--cont__menu--icon-item">
							<a href="javascript(0);" class="footer__content--cont__menu--link">
								<img src="assets/img/icons/icon-mail.svg" alt="">
								<span>info@gmail.com</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="footer__bottom container">
				<span>&copy;MR SABOR</span>
				<span>&nbsp;|&nbsp;Desarrollado por R@np21&copy;</span>
			</div>
		</footer>
	</div>
	<script src="<?= $url  ?>js/main.js"></script>
	<script src="<?= $url  ?>js/actions_pages/add-cart-product.js"></script>
</body>
</html>