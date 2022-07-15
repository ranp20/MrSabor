<?php
	require_once '../../php/class/user.php';
	$user_rol = $_SESSION['admin_mrsabor']['id_rol'];
	$user = new User();
	$data_user = $user->get_user_by_id($_SESSION['admin_mrsabor']['id']);
	$description = $user->get_description_by_idrol($user_rol);
?>
<div class="main__sidebar-left">
	<a href="#" class="main__sidebar-left--link-close"></a>
	<div class="main__sidebar-left--content">
		<div class="main__sidebar-left--content__cont-logo">
			<a href="dashboard" title="icon_logo_mrsabor">
				<img src="<?= $url;?>assets/img/logo/Logo_RESTAURANT_proyect.png" alt="logo_mrsabor">
			</a>
		</div>
		<div class="main__sidebar-left--content__cont-infouser">
			<div class="main__sidebar-left--content__cont-infouser--photo">
				<img src="<?= $url;?>assets/img/images/user_default.png" alt="photo_user-in-mrsabor">
			</div>
			<div class="main__sidebar-left--content__cont-infouser--info">
				<h3 class="main__sidebar-left--content__cont-infouser--info__type"><?php echo $description[0]['description']."(a)"; ?></h3>
				<h4 class="main__sidebar-left--content__cont-infouser--info__nameuser"><?php print_r($data_user[0]['username']); ?></h4>
			</div>
		</div>
		<div class="main__sidebar-left--content__cont-items">
			<ul class="main__sidebar-left--content__cont-items--menu">
				<li class="main__sidebar-left--content__cont-items--menu__item">
					<a href="restaurantes" class="main__sidebar-left--content__cont-items--menu__link" title="Restaurantes">Restaurantes</a>
				</li>
				<li class="main__sidebar-left--content__cont-items--menu__item">
					<a href="javacript:void(0);" class="main__sidebar-left--content__cont-items--menu__link" title="Pedidos">Pedidos</a>
				</li>
				<li class="main__sidebar-left--content__cont-items--menu__item">
					<a href="javacript:void(0);" class="main__sidebar-left--content__cont-items--menu__link" title="Reportes">Reportes</a>
				</li>
				<li class="main__sidebar-left--content__cont-items--menu__item">
					<a href="javacript:void(0);" class="main__sidebar-left--content__cont-items--menu__link" title="Ordenes o pedidos">Ordenes o Pedidos</a>
				</li>
				<li class="main__sid	ebar-left--content__cont-items--menu__item">
					<a href="javacript:void(0);" class="main__sidebar-left--content__cont-items--menu__link" title="Usuarios">Usuarios</a>
				</li>
				<li class="main__sidebar-left--content__cont-items--menu__item">
					<a href="categorias" class="main__sidebar-left--content__cont-items--menu__link" title="Categorías">Categorías</a>
				</li>
				<li class="main__sidebar-left--content__cont-items--menu__item">
					<a href="productos" class="main__sidebar-left--content__cont-items--menu__link" title="Productos">Productos</a>
				</li>
			</ul>
		</div>
		<a href="<?= $url;?>php/process_logout-admin.php" class="main__sidebar-left--link-logout" title="Cerrar sesión">Cerrar sesión</a>
	</div>
</div>