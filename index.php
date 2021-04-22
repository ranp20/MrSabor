<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once 'views/includes/header_links.php'; ?>
	<title>Mr Sabor - Deliveries y Reservas</title>
</head>
<body>
	<div class="home">
		<div class="homepage">
			<div class="homepage__infotop">
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
									<a href="#galeria" class="homepage__infotop__header--contmenu__menu--link">Galería</a>
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
							<a href="#" class="homepage__infotop__header--contlogin__profile">
								<img src="assets/img/icons/icon-userprofile.svg" alt="" class="homepage__infotop__header--contlogin__profile--image">
							</a>
						</div>
					</div>	
				</div>
			</div>
		</div>
		<section class="heroimage" id="inicio">
			<ul class="heroimage--menu" id="sliderHeroimages">
				<li class="heroimage--menu__item">
					<img class="heroimage--menu__item--background" src="assets/img/images/comidas.jpg" alt="">
					<div class="heroimage--menu__item--content container">
						<div class="heroimage--menu__item--content__info">
							<div class="heroimage--menu__item--content__info--contimg">
								<img class="heroimage--menu__item--content__info__contimg__image" src="assets/img/images/platillo.png" alt="food-references_MrSabor">
							</div>
						</div>	
						<div class="heroimage--menu__item--content__info">
							<p class="heroimage--menu__item--content__info--receiveonline">PEDIDOS EN LÍNEA</p>
							<h2 class="heroimage--menu__item--content__info--title">SECO DE RES A LA NORTEÑA</h2>
							<p class="heroimage--menu__item--content__info--subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, quod! Quos laboriosam ut vero ipsam dignissimos</p>
							<a class="heroimage--menu__item--content__info--gotoproduct" href="#platos">VER MENÚ<span>&#10132;</span></a>
						</div>
					</div>
				</li>
				<li class="heroimage--menu__item">
					<img class="heroimage--menu__item--background" src="assets/img/images/madera.jpg" alt="">
					<div class="heroimage--menu__item--content container">
						<div class="heroimage--menu__item--content__info">
							<div class="heroimage--menu__item--content__info--contimg">
								<img class="heroimage--menu__item--content__info__contimg__image" src="assets/img/images/platillo.png" alt="food-references_MrSabor">
							</div>
						</div>	
						<div class="heroimage--menu__item--content__info">
							<p class="heroimage--menu__item--content__info--receiveonline">PEDIDOS EN LÍNEA</p>
							<h2 class="heroimage--menu__item--content__info--title">SECO DE RES A LA NORTEÑA</h2>
							<p class="heroimage--menu__item--content__info--subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, quod! Quos laboriosam ut vero ipsam dignissimos</p>
							<a class="heroimage--menu__item--content__info--gotoproduct" href="#platos">VER MENÚ<span>&#10132;</span></a>
						</div>
					</div>
				</li>
				<li class="heroimage--menu__item">
					<img class="heroimage--menu__item--background" src="assets/img/images/comida_vegetariana.jpg" alt="">
					<div class="heroimage--menu__item--content container">
						<div class="heroimage--menu__item--content__info">
							<div class="heroimage--menu__item--content__info--contimg">
								<img class="heroimage--menu__item--content__info__contimg__image" src="assets/img/images/platillo.png" alt="food-references_MrSabor">
							</div>
						</div>	
						<div class="heroimage--menu__item--content__info">
							<p class="heroimage--menu__item--content__info--receiveonline">PEDIDOS EN LÍNEA</p>
							<h2 class="heroimage--menu__item--content__info--title">SECO DE RES A LA NORTEÑA</h2>
							<p class="heroimage--menu__item--content__info--subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, quod! Quos laboriosam ut vero ipsam dignissimos</p>
							<a class="heroimage--menu__item--content__info--gotoproduct" href="#platos">VER MENÚ<span>&#10132;</span></a>
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
					<h3 class="categories-food__content--conttitle__acotacion">Nuestras</h3>
					<h2 class="categories-food__content--conttitle__title">CATEGORÍAS</h2>
					<div class="categories-food__content--conttitle__description">Te ofrecemos siempre lo mejor en cada uno de ellas.</div>
				</div>
				<ul class="categories-food__content--menu">
					<li class="categories-food__content--menu__item">
						<a href="#" class="categories-food__content--menu__item__link">
							<div class="categories-food__content--menu__item__link--categ-imagen">
								<img src="assets/img/images/comida_vegetariana.jpg" alt="">
							</div>
							<div class="categories-food__content--menu__item__link--categ-description">
								<h2 class="categories-food__content--menu__item__link--categ-description--name">VEGETARIANA</h2>
							</div>
						</a>
					</li>
					<li class="categories-food__content--menu__item">
						<a href="#" class="categories-food__content--menu__item__link">
							<div class="categories-food__content--menu__item__link--categ-imagen">
								<img src="assets/img/images/comida_cárnica.jpeg" alt="">
							</div>
							<div class="categories-food__content--menu__item__link--categ-description">
								<h2 class="categories-food__content--menu__item__link--categ-description--name">CÁRNICA</h2>
							</div>
						</a>
					</li>
					<li class="categories-food__content--menu__item">
						<a href="#" class="categories-food__content--menu__item__link">
							<div class="categories-food__content--menu__item__link--categ-imagen">
								<img src="assets/img/images/comida_rápida.jpg" alt="">
							</div>
							<div class="categories-food__content--menu__item__link--categ-description">
								<h2 class="categories-food__content--menu__item__link--categ-description--name">COMIDA RÁPIDA</h2>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</section>
		<section class="our-menu" id="platos">
			<div class="our-menu__content container">
				<div class="our-menu__content--cont-title">
					<h3 class="our-menu__content--cont-title__title">NUESTRO MENÚ</h3>
				</div>
				<div class="our-menu__content--cont-our-menus">
					<div class="our-menu__content--cont-our-menus__categmenu">
						<div class="our-menu__content--cont-our-menus__categmenu--title">
							<h2>DESTACADO</h2>
						</div>
						<div class="our-menu__content--cont-our-menus__categmenu--meals">
							<ul class="our-menu__content--cont-our-menus__categmenu--meals__menu" id="sliderMenus">
								<li class="our-menu__content--cont-our-menus__categmenu--meals__menu__item">
									<a href="#" class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link">
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--bgcimage">
											<img src="admin/assets/img/menus/Ensalada_de_pollo.jpeg" alt="">
											<span>S/. 12.00</span>
										</div>
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo">
											<h4 class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo__title">Ensalada con Pollo</h4>
										</div>
									</a>
								</li>
								<li class="our-menu__content--cont-our-menus__categmenu--meals__menu__item">
									<a href="#" class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link">
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--bgcimage">
											<img src="admin/assets/img/menus/Huevo_de_desayuno_saludable.jpeg" alt="">
											<span>S/. 12.00</span>
										</div>
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo">
											<h4 class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo__title">Desayuno de Huevo saludable</h4>
										</div>
									</a>
								</li>
								<li class="our-menu__content--cont-our-menus__categmenu--meals__menu__item">
									<a href="#" class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link">
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--bgcimage">
											<img src="admin/assets/img/menus/Salmón_a_la_plancha.jpeg" alt="">
											<span>S/. 12.00</span>
										</div>
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo">
											<h4 class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo__title">Salmón a la plancha</h4>
										</div>
									</a>
								</li>
								<li class="our-menu__content--cont-our-menus__categmenu--meals__menu__item">
									<a href="#" class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link">
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--bgcimage">
											<img src="admin/assets/img/menus/Sándwiches_de_tomates.jpeg" alt="">
											<span>S/. 12.00</span>
										</div>
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo">
											<h4 class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo__title">Ensalada con Pollo</h4>
										</div>
									</a>
								</li>
								<li class="our-menu__content--cont-our-menus__categmenu--meals__menu__item">
									<a href="#" class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link">
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--bgcimage">
											<img src="admin/assets/img/menus/Verduras_asadas_a_la_parrilla.jpeg" alt="">
											<span>S/. 12.00</span>
										</div>
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo">
											<h4 class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo__title">Desayuno de Huevo saludable</h4>
										</div>
									</a>
								</li>
								<li class="our-menu__content--cont-our-menus__categmenu--meals__menu__item">
									<a href="#" class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link">
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--bgcimage">
											<img src="admin/assets/img/menus/Salmón_a_la_plancha_1.jpeg" alt="">
											<span>S/. 12.00</span>
										</div>
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo">
											<h4 class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo__title">Salmón a la plancha</h4>
										</div>
									</a>
								</li>
								<li class="our-menu__content--cont-our-menus__categmenu--meals__menu__item">
									<a href="#" class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link">
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--bgcimage">
											<img src="admin/assets/img/menus/Verdura_asada_a_la_parrilla.jpeg" alt="">
											<span>S/. 12.00</span>
										</div>
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo">
											<h4 class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo__title">Salmón a la plancha</h4>
										</div>
									</a>
								</li>
								<li class="our-menu__content--cont-our-menus__categmenu--meals__menu__item">
									<a href="#" class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link">
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--bgcimage">
											<img src="admin/assets/img/menus/Salmón_a_la_plancha_1.jpeg" alt="">
											<span>S/. 12.00</span>
										</div>
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo">
											<h4 class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--continfo__title">Salmón a la plancha</h4>
										</div>
									</a>
								</li>
								<li class="our-menu__content--cont-our-menus__categmenu--meals__menu__item">
									<a href="#" class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link">
										<div class="our-menu__content--cont-our-menus__categmenu--meals__menu__item__link--bgcimage">
											<img src="admin/assets/img/menus/Ensalada_de_pollo.jpeg" alt="">
											<span>S/. 12.00</span>
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
		<section class="contact-us container" id="contacto">
			<div class="contact-us__content">
				<div class="contact-us__content--title">
					<h2>Suscríbete y recibe muchos beneficios</h2>
				</div>
				<div class="contact-us__content--register">
					<form action="" method="POST" class="contact-us__content--register__form">
						<div class="contact-us__content--register__form--control">
							<label class="contact-us__content--register__form--control__label" for="email_new"><img src="assets/img/icons/mail.svg" class="contact-us__content--register__form--control__label--icon" alt=""></label>
							<input id="email_new" type="email" class="contact-us__content--register__form--control__input" required placeholder="Email">
						</div>
						<div class="contact-us__content--register__form--control">
							<label class="contact-us__content--register__form--control__label" for="user_new"><img src="assets/img/icons/user.svg" class="contact-us__content--register__form--control__label--icon" alt=""></label>
							<input id="user_new" type="text" class="contact-us__content--register__form--control__input" required placeholder="Nombres">
						</div>
						<button type="submit" class="contact-us__content--register__form--btnsend">Suscribirse</button>
					</form>
				</div>
			</div>
		</section>
		<section class="contact-number">
			<div class="contact-number__content container">
				<div class="contact-number__content--cont">
					<div class="contact-number__content--cont__logo">
						<img src="assets/img/logo/Logo_RESTAURANT_proyect.png" alt="">
					</div>
					<div class="contact-number__content--cont__contacts">
						<div class="contact-number__content--cont__contacts--media">
							<img src="assets/img/icons/icon-whatsapp.svg" alt="">
							<span>444 3 5555</span>
						</div>
						<div class="contact-number__content--cont__contacts--media">
							<img src="assets/img/icons/icon-home.svg" alt="">
							<span>01 998 233 675</span>
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
					<h2 class="footer__content--cont__title">NOSOTROS</h2>
					<ul class="footer__content--cont__menu">
						<li class="footer__content--cont__menu--icon-item">
							<a href="#" class="footer__content--cont__menu--link">
								<img src="assets/img/icons/icon-phone.svg" alt="">
								<span>Contáctanos</span>
							</a>
						</li>
						<li class="footer__content--cont__menu--icon-item">
							<a href="#" class="footer__content--cont__menu--link">
								<img src="assets/img/icons/icons-gallery-pictures.svg" alt="">
								<span>Galería</span>
							</a>
						</li>
						<li class="footer__content--cont__menu--icon-item">
							<a href="#" class="footer__content--cont__menu--link">
								<img src="assets/img/icons/icons-eye.svg" alt="">
								<span>Política de privacidad</span>
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