<?php 

	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
  $url =  $actual_link . "/" ."MrSabor/admin/";


	require_once '../php/class/user.php';

	$user_rol = $_SESSION['user'][0]['id_rol'];
	$user = new User();
	$data_user = $user->get_user_by_id($_SESSION['user'][0]['id']);
	$description = $user->get_description_by_idrol($user_rol);

?>
<div class="main__sidebar-left">
	<a href="#" class="main__sidebar-left--link-close"></a>
	<div class="main__sidebar-left--content">
		<div class="main__sidebar-left--content__cont-logo">
			<a href="dashboard">
				<img src="<?php echo $url ?>assets/img/logo/Logo_RESTAURANT_proyect.png" alt="logo_mrsabor">
			</a>
		</div>
		<div class="main__sidebar-left--content__cont-infouser">
			<div class="main__sidebar-left--content__cont-infouser--photo">
				<img src="<?php echo $url ?>assets/img/images/user_default.png" alt="photo_user-in-mrsabor">
			</div>
			<div class="main__sidebar-left--content__cont-infouser--info">
				<h3 class="main__sidebar-left--content__cont-infouser--info__type"><?php echo $description[0]['description']."(a)"; ?></h3>
				<h4 class="main__sidebar-left--content__cont-infouser--info__nameuser"><?php print_r($data_user[0]['username']); ?></h4>
			</div>
		</div>
		<div class="main__sidebar-left--content__cont-items">
			<ul class="main__sidebar-left--content__cont-items--menu">
				<li class="main__sidebar-left--content__cont-items--menu__item">
					<a href="restaurantes" class="main__sidebar-left--content__cont-items--menu__link">Restaurantes</a>
				</li>
				<li class="main__sidebar-left--content__cont-items--menu__item">
					<a href="#" class="main__sidebar-left--content__cont-items--menu__link">Menús <!--<span>&#9660;</span>--></a>
				</li>
				<li class="main__sidebar-left--content__cont-items--menu__item">
					<a href="#" class="main__sidebar-left--content__cont-items--menu__link">Ordenes o Pedidos</a>
				</li>
				<li class="main__sidebar-left--content__cont-items--menu__item">
					<a href="#" class="main__sidebar-left--content__cont-items--menu__link">Clientes</a>
				</li>
				<li class="main__sidebar-left--content__cont-items--menu__item"><a href="#" class="main__sidebar-left--content__cont-items--menu__link">Personal</a>
				</li>
				<li class="main__sidebar-left--content__cont-items--menu__item">
					<a href="productos" class="main__sidebar-left--content__cont-items--menu__link">Productos</a>
				</li>
			</ul>
		</div>
		<a href="<?php echo $url ?>php/process_logout-admin.php" class="main__sidebar-left--link-logout">Cerrar sesión</a>
	</div>
</div>