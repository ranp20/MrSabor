<?php
//COMPRIMIR ARCHIVOS DE TEXTO...
(substr_count($_SERVER["HTTP_ACCEPT_ENCODING"], "gzip")) ? ob_start("ob_gzhandler") : ob_start();
session_start();
if(isset($_SESSION['admin_mrsabor'])){
	header("location: dashboard");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once 'views/includes/header_links.php';?>
	<title>Login | Admin</title>
</head>
<body class="body-login-adm">
	<div class="box">
		<div id="result-adm"></div>
		<div class="login-adm">
			<div class="login-adm__cont">
				<div class="login-adm__cont--icon">
					<img src="<?= $url;?>assets/img/logo/Logo_RESTAURANT_proyect.png" alt="logo_mrsabor" width="100" height="100">
				</div>
			</div>
			<div class="login-adm__cont">
				<h2 class="login-adm__cont--title">INICIAR SESIÓN</h2>
				<div class="login-adm__cont--content">
					<form method="POST" class="login-adm__cont--content__form" id="formlogin-admin">
						<div class="login-adm__cont--content__form--control">
							<label for="username" class="login-adm__cont--content__form--control__label">Nombre de Usuario</label>
							<input type="text" id="username" name="adm-log-username" class="login-adm__cont--content__form--control__input" required>
						</div>
						<div class="login-adm__cont--content__form--control">
							<label for="password" class="login-adm__cont--content__form--control__label">Contraseña</label>
							<input type="password" id="password" name="adm-log-password" class="login-adm__cont--content__form--control__input" required>
						</div>
						<div class="login-adm__cont--content__form--actions">
							<button type="submit" class="login-adm__cont--content__form--actions__btnlogin">Iniciar Sesión</button>
							<div class="login-adm__cont--content__form--actions__separator">
								<div class="login-adm__cont--content__form--actions__separator--divisor">
									<span>o</span>
								</div>
							</div>
							<a href="select-user-register.php" class="login-adm__cont--content__form--actions__gotoaccount" title="Crear cuenta">Crear cuenta</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?= $url;?>js/actions_pages/adm_login.js"></script>
</body>
</html>