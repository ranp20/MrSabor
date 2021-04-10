<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once 'includes/header_links.php'; ?>
	<title>Seleccionar Usuario - Mr Sabor</title>
</head>
<body>
	<div id="topbar">
		<div id="showsideleft"></div>
		<div class="menuside">
			<ul class="menuside__menu">
				<li class="menuside__menu--item">
					<a href="register-account.php" class="menuside__menu--link">Abrir cuenta</a>
				</li>
				<li class="menuside__menu--item">
					<a href="#" class="menuside__menu--link">Ayuda</a>
				</li>
				<li class="menuside__menu--item">
					<a href="#" class="menuside__menu--link">Acerca de</a>
				</li>
			</ul>
			<div class="menuside__copy">
				<a href="#" class="menuside__copy--link"> Desarrollado por R@NP21&copy;</a>
			</div>
		</div>
	</div>
	<div class="box">
		<div id="home">
			<div class="seluser">
				<h3 class="seluser__title">Por favor seleccione el</h3>
				<h2 class="seluser__subtitle">TIPO DE USUARIO</h2>
				<div class="seluser__content">
					<!--<a href="iniciar-sesion" class="seluser__content--link">
						<img class="seluser__content--link__image" src="assets/img/icons/administrator.svg" alt="">
						<p class="seluser__content--link__title">ADMINISTRADOR</p>
					</a>-->
					<a href="register-account.php" class="seluser__content--link">
						<img class="seluser__content--link__image" src="assets/img/icons/chef.svg" alt="">
						<p class="seluser__content--link__title">COCINERO</p>
					</a>
					<a href="register-account.php" class="seluser__content--link">
						<img class="seluser__content--link__image" src="assets/img/icons/waiter.svg" alt="">
						<p class="seluser__content--link__title">COLABORADOR</p>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!--<script src="js/main.js"></script>-->
</body>
</html>