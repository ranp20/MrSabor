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
						<div class="homepage__infotop__header--contlogo">
							<a href="#" class="homepage__infotop__header--contlogo__link">
								<img src="admin/assets/img/logo/Logo_RESTAURANT_proyect.png" alt="" class="homepage__infotop__header--contlogo__link--image">
							</a>
						</div>
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
					</div>	
				</div>
			</div>
		</div>
		<section class="heroimage lg-full-screen" id="inicio">
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
		<section class="categories-food lg-full-screen" id="categorias">
			<div class="categories-food__content container">
				<div class="categories-food__content--conttitle">
					<h3 class="categories-food__content--conttitle__acotacion">Nuestras</h3>
					<h1 class="categories-food__content--conttitle__title">Categorias de Alimentos</h1>
					<div class="categories-food__content--conttitle__description">Te ofrecemos siempre lo mejor en cada uno de ellas.</div>
				</div>
				<ul class="categories-food__content--menu">
					<li class="categories-food__content--menu__item">
						<div class="categories-food__content--menu__item__categ-imagen">
							<img src="assets/img/images/comida_vegetariana.jpg" alt="">
						</div>
						<div class="categories-food__content--menu__item__categ-description">
							<h2 class="categories-food__content--menu__item__categ-description--name">VEGETARIANA</h2>
							<div class="categories-food__content--menu__item__categ-description--description">Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Veritatis labore ipsa aperiam! Vitae vel accusantium minima ab necessitatibus expedita aliquid esse quis atque, quos quisquam. Omnis id accusantium inventore rem.</div>
						</div>
					</li>
					<li class="categories-food__content--menu__item">
						<div class="categories-food__content--menu__item__categ-imagen">
							<img src="assets/img/images/comida_cárnica.jpeg" alt="">
						</div>
						<div class="categories-food__content--menu__item__categ-description">
							<h2 class="categories-food__content--menu__item__categ-description--name">CÁRNICA</h2>
							<div class="categories-food__content--menu__item__categ-description--description">Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Veritatis labore ipsa aperiam! Vitae vel accusantium minima ab necessitatibus expedita aliquid esse quis atque, quos quisquam. Omnis id accusantium inventore rem.</div>
						</div>
					</li>
					<li class="categories-food__content--menu__item">
						<div class="categories-food__content--menu__item__categ-imagen">
							<img src="assets/img/images/comida_rápida.jpg" alt="">
						</div>
						<div class="categories-food__content--menu__item__categ-description">
							<h2 class="categories-food__content--menu__item__categ-description--name">COMIDA RÁPIDA</h2>
							<div class="categories-food__content--menu__item__categ-description--description">Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Veritatis labore ipsa aperiam! Vitae vel accusantium minima ab necessitatibus expedita aliquid esse quis atque, quos quisquam. Omnis id accusantium inventore rem.</div>
						</div>
					</li>
				</ul>
			</div>
		</section>
		<section class="user-testimonials lg-full-screen">
			<div class="user-testimonials__content">
				<div class="user-testimonials__content--background">
					<img src="assets/img/images/parrilla.jpg" alt="">
				</div>
				<div class="user-testimonials__content--testimonials container">
					<div class="user-testimonials__content--testimonials__cont-btns-testimonialsuser">
						<button class="user-testimonials__content--testimonials__cont-btns-testimonialsuser--left" id="slidebtnLeft">&#8249;</button>
						<button class="user-testimonials__content--testimonials__cont-btns-testimonialsuser--right" id="slidebtnRight">&#8250;</button>
					</div>
					<ul class="user-testimonials__content--testimonials__menu" id="sliderTestimonials">
						<li class="user-testimonials__content--testimonials__menu--item">
							<img src="assets/img/images/user-1.png" alt="">
							<h3 class="user-testimonials__content--testimonials__menu--item__ratinguser">!EXCELLENT</h3>
							<p class="user-testimonials__content--testimonials__menu--item__testimonialuser">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi quam, veniam quasi laudantium, facilis voluptates est quia soluta odit </p>
							<h4 class="user-testimonials__content--testimonials__menu--item__nameguser">NAME USER</h4>
						</li>
						<li class="user-testimonials__content--testimonials__menu--item">
							<img src="assets/img/images/user-2.png" alt="">
							<h3 class="user-testimonials__content--testimonials__menu--item__ratinguser">!EXCELLENT</h3>
							<p class="user-testimonials__content--testimonials__menu--item__testimonialuser">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi quam, veniam quasi laudantium, facilis voluptates est quia soluta odit vero, necessitatibus possimus dolorem quo ipsa molestiae et. Animi, vero, reprehenderit.</p>
							<h4 class="user-testimonials__content--testimonials__menu--item__nameguser">NAME USER</h4>
						</li>
						<li class="user-testimonials__content--testimonials__menu--item">
							<img src="assets/img/images/user-3.jpg" alt="">
							<h3 class="user-testimonials__content--testimonials__menu--item__ratinguser">!EXCELLENT</h3>
							<p class="user-testimonials__content--testimonials__menu--item__testimonialuser">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi quam, veniam quasi laudantium, facilis voluptates est quia soluta odit vero, necessitatibus possimus dolorem quo ipsa molestiae et. Animi, vero, reprehenderit.</p>
							<h4 class="user-testimonials__content--testimonials__menu--item__nameguser">NAME USER</h4>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="our-menu container" id="platos">
			<div class="our-menu__content">
				<div class="our-menu__content--cont-title">
					<h3 class="our-menu__content--cont-title__title">NUESTRO MENÚ</h3>
				</div>
				<div class="our-menu__content--cont-our-menus">
					<div class="our-menu__content--cont-our-menus__categmenu">
						<div class="our-menu__content--cont-our-menus__categmenu--title">
							<h2>~ PLATOS PRINCIPALES ~</h2>
						</div>
						<div class="our-menu__content--cont-our-menus__categmenu--meals">
							<ul class="our-menu__content--cont-our-menus__categmenu--meals__menu" id="sliderMenus">
								<li class="our-menu__content--cont-our-menus__categmenu--meals__menu--item">
									<div class="our-menu__content--cont-our-menus__categmenu--meals__menu--item__bgcimage">
										<img src="assets/img/images/comida_vegetariana.jpg" alt="">
										<span>S/. 12.00</span>
									</div>
									<div class="our-menu__content--cont-our-menus__categmenu--meals__menu--item__continfo">
										<h4 class="our-menu__content--cont-our-menus__categmenu--meals__menu--item__continfo--title">PLATO 1</h4>
										<p class="our-menu__content--cont-our-menus__categmenu--meals__menu--item__continfo--description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, architecto?</p>
									</div>
								</li>
								<li class="our-menu__content--cont-our-menus__categmenu--meals__menu--item">
									<div class="our-menu__content--cont-our-menus__categmenu--meals__menu--item__bgcimage">
										<img src="assets/img/images/comida_cárnica.jpeg" alt="">
										<span>S/. 15.00</span>
									</div>
									<div class="our-menu__content--cont-our-menus__categmenu--meals__menu--item__continfo">
										<h4 class="our-menu__content--cont-our-menus__categmenu--meals__menu--item__continfo--title">PLATO 2</h4>
										<p class="our-menu__content--cont-our-menus__categmenu--meals__menu--item__continfo--description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, architecto?</p>
									</div>
								</li>
								<li class="our-menu__content--cont-our-menus__categmenu--meals__menu--item">
									<div class="our-menu__content--cont-our-menus__categmenu--meals__menu--item__bgcimage">
										<img src="assets/img/images/comida_rápida.jpg" alt="">
										<span>S/. 11.50</span>
									</div>
									<div class="our-menu__content--cont-our-menus__categmenu--meals__menu--item__continfo">
										<h4 class="our-menu__content--cont-our-menus__categmenu--meals__menu--item__continfo--title">PLATO 3</h4>
										<p class="our-menu__content--cont-our-menus__categmenu--meals__menu--item__continfo--description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, architecto?</p>
									</div>
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
		<section class="gallery lg-full-screen" id="galeria">
			<div class="gallery__content">
				<div class="gallery__content--bgcgallery">
					<img src="assets/img/images/madera.jpg" alt="">
				</div>
				<div class="gallery__content--gallery container">
					<div class="gallery__content--gallery__title">
						<h2>~ GALERÍA ~</h2>
					</div>
					<div class="gallery__content--gallery__slider">
						<div class="gallery__content--gallery__slider--btns">
							<button class="gallery__content--gallery__slider--btns__left sliderleft_gallery">&#8249;</button>
							<button class="gallery__content--gallery__slider--btns__right sliderright_gallery">&#8250;</button>
						</div>
						<ul class="gallery__content--gallery__slider--photos" id="sliderGallery">
							<li class="gallery__content--gallery__slider--photos__image">
								<img src="assets/img/images/comida_vegetariana.jpg" alt="">
							</li>
							<li class="gallery__content--gallery__slider--photos__image">
								<img src="assets/img/images/comida_cárnica.jpeg" alt="">
							</li>
							<li class="gallery__content--gallery__slider--photos__image">
								<img src="assets/img/images/comida_rápida.jpg" alt="">
							</li>
							<li class="gallery__content--gallery__slider--photos__image">
								<img src="assets/img/images/comida_vegetariana.jpg" alt="">
							</li>
							<li class="gallery__content--gallery__slider--photos__image">
								<img src="assets/img/images/comida_cárnica.jpeg" alt="">
							</li>
							<li class="gallery__content--gallery__slider--photos__image">
								<img src="assets/img/images/comida_rápida.jpg" alt="">
							</li>
							<li class="gallery__content--gallery__slider--photos__image">
								<img src="assets/img/images/comida_vegetariana.jpg" alt="">
							</li>
							<li class="gallery__content--gallery__slider--photos__image">
								<img src="assets/img/images/comida_cárnica.jpeg" alt="">
							</li>
							<li class="gallery__content--gallery__slider--photos__image">
								<img src="assets/img/images/comida_rápida.jpg" alt="">
							</li>
							<li class="gallery__content--gallery__slider--photos__image">
								<img src="assets/img/images/comida_vegetariana.jpg" alt="">
							</li>
							<li class="gallery__content--gallery__slider--photos__image">
								<img src="assets/img/images/comida_cárnica.jpeg" alt="">
							</li>
							<li class="gallery__content--gallery__slider--photos__image">
								<img src="assets/img/images/comida_rápida.jpg" alt="">
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="contact-us container lg-full-screen" id="contacto">
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