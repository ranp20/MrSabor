<?php 

require_once 'php/process_session-admin.php';

if(isset($_SESSION['user'])){
	header("location: dashboard.php");
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once 'includes/header_links.php'; ?>
	<title>Login | Admin</title>
</head>
<body class="body-login-adm">
	<div class="box">
		<div id="result-adm"></div>
		<div class="login-adm">
			<div class="login-adm__cont">
				<div class="login-adm__cont--icon">
					<img src="assets/img/logo/Logo_RESTAURANT_proyect.png" alt="logo_mrsabor">
				</div>
			</div>
			<div class="login-adm__cont">
				<h2 class="login-adm__cont--title">INICIAR SESIÓN</h2>
				<div class="login-adm__cont--content">
					<form action="php/process_login-admin.php" method="POST" class="login-adm__cont--content__form" id="formlogin-admin" enctype="multipart/form-data">
						<div class="login-adm__cont--content__form--control">
							<label for="username" class="login-adm__cont--content__form--control__label">Nombre de Usuario</label>
							<input type="text" id="username" name="username" class="login-adm__cont--content__form--control__input" required>
						</div>
						<div class="login-adm__cont--content__form--control">
							<label for="password" class="login-adm__cont--content__form--control__label">Contraseña</label>
							<input type="password" id="password" name="password" class="login-adm__cont--content__form--control__input" required>
						</div>
						<div class="login-adm__cont--content__form--actions">
							<button type="submit" class="login-adm__cont--content__form--actions__btnlogin">Iniciar Sesión</button>
							<div class="login-adm__cont--content__form--actions__separator">
								<div class="login-adm__cont--content__form--actions__separator--divisor">
									<span>o</span>
								</div>
							</div>
							<a href="select-user-register.php" class="login-adm__cont--content__form--actions__gotoaccount">Crear cuenta</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/actions_pages/login.js"></script>
</body>
</html>