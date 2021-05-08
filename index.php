<?php 
	
	require_once 'controllers/list-all-categories.php';
	$category = new ListCategories();
	$listcat = $category->get_categories();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once 'views/includes/header_links.php'; ?>
	<title>Mr Sabor - Deliveries</title>
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
									<a href="#platos" class="homepage__infotop__header--contmenu__menu--link">Menús</a>
								</li>
								<li class="homepage__infotop__header--contmenu__menu--item">
									<a href="#contacto" class="homepage__infotop__header--contmenu__menu--link">Contacto</a>
								</li>
							</ul>
						</div>
						<div class="homepage__infotop__header--contlogo">
							<a href="#" class="homepage__infotop__header--contlogo__link">
								<img src="admin/assets/img/logo/Logo_RESTAURANT_proyect.png" alt="" class="homepage__infotop__header--contlogo__link--image">
							</a>
						</div>
						<div class="homepage__infotop__header--contlogin">
							<a href="login" class="homepage__infotop__header--contlogin__profile">
								<svg xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF"  class="homepage__infotop__header--contlogin__profile--icon" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 22c-3.123 0-5.914-1.441-7.749-3.69.259-.588.783-.995 1.867-1.246 2.244-.518 4.459-.981 3.393-2.945-3.155-5.82-.899-9.119 2.489-9.119 3.322 0 5.634 3.177 2.489 9.119-1.035 1.952 1.1 2.416 3.393 2.945 1.082.25 1.61.655 1.871 1.241-1.836 2.253-4.628 3.695-7.753 3.695z"/></svg>
							</a>
						</div>
					</div>	
				</div>
			</div>
		</div>
		<section class="heroimage" id="inicio">
			<ul class="heroimage--menu" id="sliderHeroimages">
				<li class="heroimage--menu__item">
					<img class="heroimage--menu__item--background" src="admin/assets/img/banners/home-banner1.jpg" alt="">
					<div class="heroimage--menu__item--content left-align container">
						<div class="heroimage--menu__item--content__info left-text">
							<h2 class="heroimage--menu__item--content__info--title">Saludable por dentro, fresco <span>por fuera</span></h2>
							<p class="heroimage--menu__item--content__info--subtitle">Entregamos alimentos saludables que están listos para comer. Simplemente elija su propio menú que le guste.</p>
							<a class="heroimage--menu__item--content__info--gotoproduct" href="#platos">CONOCER MÁS<span>&#10132;</span></a>
						</div>
					</div>
				</li>
				<li class="heroimage--menu__item">
					<img class="heroimage--menu__item--background" src="admin/assets/img/banners/home-banner3.jpg" alt="">
					<div class="heroimage--menu__item--content center-align container">
						<div class="heroimage--menu__item--content__info center-text">
							<h2 class="heroimage--menu__item--content__info--title">La comida sana viene de <span class="block">Ingredientes sanos</span></h2>
							<p class="heroimage--menu__item--content__info--subtitle">Entregamos alimentos saludables que están listos para comer. Simplemente elija su propio menú que le guste.</p>
							<a class="heroimage--menu__item--content__info--gotoproduct" href="#platos">CONOCER MÁS<span>&#10132;</span></a>
						</div>
					</div>
				</li>
				<li class="heroimage--menu__item">
					<img class="heroimage--menu__item--background" src="admin/assets/img/banners/home-banner2.jpg" alt="">
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
				<ul class="categories-food__content--menu">
					<?php 
						foreach($listcat as $key => $value){
							$path_categ = "admin/assets/img/categories/".$value['photo'];

							echo "
								<li class='categories-food__content--menu__item'>
									<a href='listado-categoria' class='categories-food__content--menu__item__link'>
										<div class='categories-food__content--menu__item__link--categ-imagen'>
											<img src='{$path_categ}' alt=''>
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
			</div>
		</section>
		<section class="howitwork" id="como-empezar">
			<div class="howitwork__content container">
				<div class="howitwork__content--conttitle">
					<h2 class="howitwork__content--conttitle__title">¿ Cómo funciona ?</h2>
				</div>
				<div class="howitwork__content--continfo">
					<a href="#" class="howitwork__content--continfo__item">
						<img src="assets/img/icons/delivery-meal.svg" alt="" class="howitwork__content--continfo__item--icon">
						<h2 class="howitwork__content--continfo__item--title">Elige tu favorito</h2>
						<p class="howitwork__content--continfo__item--description">Elija sus comidas favoritas y ordene en línea o por teléfono. Es fácil personalizar su pedido.</p>
					</a>
					<a href="#" class="howitwork__content--continfo__item">
						<img src="assets/img/icons/delivery-delivery-man.svg" alt="" class="howitwork__content--continfo__item--icon">
						<h2 class="howitwork__content--continfo__item--title">Entregamos tu comida</h2>
						<p class="howitwork__content--continfo__item--description">Preparamos y entregamos las comidas que llegan a su puerta. Y los deberes o el dolor se sientan en vulputacion.</p>
					</a>
					<a href="#" class="howitwork__content--continfo__item">
						<img src="assets/img/icons/delivery-eat-enjoy.svg" alt="" class="howitwork__content--continfo__item--icon">
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
					<div class="our-menu__content--cont-our-menus__categmenu">
						<div class="our-menu__content--cont-our-menus__categmenu--title">
							<h3 class="our-menu__content--cont-our-menus__categmenu--title--title">DESTACADO</h3>
						</div>
						<div class="our-menu__content--cont-our-menus__categmenu--meals">
							<ul class="our-menu__content--cont-our-menus__categmenu--meals__menu" id="sliderMenus">
								<li class="our-menu__content--cont-our-menus__categmenu--meals__menu__item">
									<a href="detalle-producto" class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link">
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--bgcimage">
											<img src="admin/assets/img/menus/Ensalada_de_pollo.jpeg" alt="">
										</div>
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo">
											<h4 class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo__title">Ensalada con Pollo</h4>
										</div>
									</a>
								</li>
								<li class="our-menu__content--cont-our-menus__categmenu--meals__menu__item">
									<a href="detalle-producto" class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link">
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--bgcimage">
											<img src="admin/assets/img/menus/Huevo_de_desayuno_saludable.jpeg" alt="">
										</div>
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo">
											<h4 class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo__title">Desayuno de Huevo saludable</h4>
										</div>
									</a>
								</li>
								<li class="our-menu__content--cont-our-menus__categmenu--meals__menu__item">
									<a href="detalle-producto" class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link">
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--bgcimage">
											<img src="admin/assets/img/menus/Salmón_a_la_plancha.jpeg" alt="">
										</div>
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo">
											<h4 class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo__title">Salmón a la plancha</h4>
										</div>
									</a>
								</li>
								<li class="our-menu__content--cont-our-menus__categmenu--meals__menu__item">
									<a href="detalle-producto" class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link">
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--bgcimage">
											<img src="admin/assets/img/menus/Sándwiches_de_tomates.jpeg" alt="">
										</div>
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo">
											<h4 class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo__title">Ensalada con Pollo</h4>
										</div>
									</a>
								</li>
								<li class="our-menu__content--cont-our-menus__categmenu--meals__menu__item">
									<a href="detalle-producto" class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link">
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--bgcimage">
											<img src="admin/assets/img/menus/Verduras_asadas_a_la_parrilla.jpeg" alt="">
										</div>
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo">
											<h4 class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo__title">Desayuno de Huevo saludable</h4>
										</div>
									</a>
								</li>
								<li class="our-menu__content--cont-our-menus__categmenu--meals__menu__item">
									<a href="detalle-producto" class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link">
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--bgcimage">
											<img src="admin/assets/img/menus/Salmón_a_la_plancha_1.jpeg" alt="">
										</div>
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo">
											<h4 class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo__title">Salmón a la plancha</h4>
										</div>
									</a>
								</li>
								<li class="our-menu__content--cont-our-menus__categmenu--meals__menu__item">
									<a href="detalle-producto" class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link">
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--bgcimage">
											<img src="admin/assets/img/menus/Verdura_asada_a_la_parrilla.jpeg" alt="">
										</div>
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo">
											<h4 class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo__title">Salmón a la plancha</h4>
										</div>
									</a>
								</li>
								<li class="our-menu__content--cont-our-menus__categmenu--meals__menu__item">
									<a href="detalle-producto" class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link">
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--bgcimage">
											<img src="admin/assets/img/menus/Salmón_a_la_plancha_1.jpeg" alt="">
										</div>
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo">
											<h4 class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo__title">Salmón a la plancha</h4>
										</div>
									</a>
								</li>
								<li class="our-menu__content--cont-our-menus__categmenu--meals__menu__item">
									<a href="detalle-producto" class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link">
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--bgcimage">
											<img src="admin/assets/img/menus/Ensalada_de_pollo.jpeg" alt="">
										</div>
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo">
											<h4 class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo__title">Ensalada con Pollo</h4>
										</div>
									</a>
								</li>
							</ul>
							<div class="our-menu__content--cont-our-menus__categmenu--meals__btns">
								<button class="our-menu__content--cont-our-menus__categmenu--meals__btns--left slidermenus-left">&#8249;</button>
								<button class="our-menu__content--cont-our-menus__categmenu--meals__btns--right slidermenus-right">&#8250;</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="contact-us" id="contacto" style="background-image: url(admin/assets/img/banners/select-program-background.jpg);background-attachment: fixed;">
			<div class="contact-us__cont">
				<div class="contact-us__cont--content container">
					<div class="contact-us__cont--content--banner">
						<img src="admin/assets/img/banners/select-program-image.png" alt="">
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
						<a href="#" class="footer__content--cont__list--social-media"><img src="assets/img/icons/icon-facebook.svg" alt=""></a>
						<a href="#" class="footer__content--cont__list--social-media"><img src="assets/img/icons/icon-twitter.svg" alt=""></a>
						<a href="#" class="footer__content--cont__list--social-media"><img src="assets/img/icons/icon-youtube.svg" alt=""></a>
						<a href="#" class="footer__content--cont__list--social-media"><img src="assets/img/icons/icon-instagram.svg" alt=""></a>
					</div>
				</div>
				<div class="footer__content--cont">
					<h2 class="footer__content--cont__title">CATEGORÍAS</h2>
					<ul class="footer__content--cont__menu">
						<li class="footer__content--cont__menu--item">
							<a href="#" class="footer__content--cont__menu--link">Vegetariana</a>
						</li>
						<li class="footer__content--cont__menu--item">
							<a href="#" class="footer__content--cont__menu--link">Cárnica</a>
						</li>
						<li class="footer__content--cont__menu--item">
							<a href="#" class="footer__content--cont__menu--link">Rápida</a>
						</li>
					</ul>
				</div>
				<div class="footer__content--cont">
					<h2 class="footer__content--cont__title">CONTACTOS</h2>
					<ul class="footer__content--cont__menu">
						<li class="footer__content--cont__menu--icon-item">
							<a href="#" class="footer__content--cont__menu--link">
								<img src="assets/img/icons/icon-home.svg" alt="">
								<span>Av. Las manzanas 252 - Sucre - Lima, Perú</span>
							</a>
						</li>
						<li class="footer__content--cont__menu--icon-item">
							<a href="#" class="footer__content--cont__menu--link">
								<img src="assets/img/icons/icon-phone.svg" alt="">
								<span>+51 918 283 634</span>
							</a>
						</li>
						<li class="footer__content--cont__menu--icon-item">
							<a href="#" class="footer__content--cont__menu--link">
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
	<script src="js/main.js" type="text/javascript"></script>
</body>
</html>