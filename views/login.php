<?php 
	require_once '../php/process_session-client.php';
	if(isset($_SESSION['client'])){
		header('Location: ./');
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once 'includes/header_links.php'; ?>
	<title>Mr Sabor | Iniciar sesión</title>
</head>
<body>
	<div class="login">
		<div id="result-cli"></div>
		<div class="login--background" style="background-image: url(assets/img/banners/wallpaper-burguer.jpg);background-size: cover;background-position: center;background-repeat: no-repeat;"></div>
		<div class="login--content">
			<div class="container">
				<div class="login--content--returnhome">
					<a href="./" class="login--content--returnhome__link">
						<img src="assets/img/logo/Logo_RESTAURANT_proyect.png" alt="logo_MrSabor_login" class="login--content--returnhome__link__logo" width="100" height="100" loading="lazy">
					</a>
				</div>
				<div class="login--content--info">
					<div class="login--content--info--contlogo">
						<img src="assets/img/logo/Logo_RESTAURANT_proyect.png" alt="" class="login--content--info__contlogo__logo">
					</div>
					<form action="../php/process_login.php" class="login--content--info--form" id="form-login-user">
						<div class="login--content--info--form--controls">
							<label for="mail" class="login--content--info--form--controls--label">Email</label>
							<input type="email" name="mail" id="mail" class="login--content--info--form--controls--input" autocomplete="off" spellcheck="false" required>
						</div>
						<div class="login--content--info--form--controls">
							<label for="pass" class="login--content--info--form--controls--label">Password</label>
							<input type="password" name="pass" id="pass" class="login--content--info--form--controls--input" autocomplete="off" spellcheck="false" required>
						</div>
						<div class="login--content--info--form--btnactions">
							<button type="submit" class="login--content--info--form--btnactions--btnlogin">INGRESAR</button>
							<div class="login--content--info--form--btnactions--separator">
								<div class="login--content--info--form--btnactions--separator__divisor">
									<span>o</span>
								</div>
							</div>
							<a href="account" class="login--content--info--form--btnactions--btnregister">REGISTRARME</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="dl-mssgCli" id="dl-mssgCli"></div>
	<script type="text/javascript" src="js/actions_pages/login.js"></script>
</body>
</html>