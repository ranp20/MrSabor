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
	<title>Mr Sabor | Registrarme</title>
</head>
<body>
	<div class="account">
		<div id="result-cli"></div>
		<div class="account--background" style="background-image: url(assets/img/banners/wallpaper-comida.png);background-size: cover;background-position: center;background-repeat: no-repeat;"></div>
		<div class="account--content">
			<div class="container">
				<div class="account--content--returnhome">
					<a href="./" class="account--content--returnhome__link">
						<img src="assets/img/logo/Logo_RESTAURANT_proyect.png" alt="" class="account--content--returnhome__link__logo">
					</a>
				</div>
				<div class="account--content--info">
					<div class="account--content--info--conttitle">
						<h2 class="account--content--info--conttitle--title">CREAR CUENTA</h2>
						<p class="account--content--info--conttitle--yesuser">¿Ya tienes una cuenta?&nbsp;<a href="login">Iniciar sesión</a></p>
					</div>
					<form action="" method="POST" class="account--content--info--form" id="form-account">
						<div class="account--content--info--form--controls">
							<label for="email" class="account--content--info--form--controls--label">Email</label>
							<input type="email" id="email" name="email" class="account--content--info--form--controls--input"  autocomplete="off" spellcheck="false" required>
						</div>
						<div class="account--content--info--form--controls">
							<label for="password" class="account--content--info--form--controls--label">Password</label>
							<input type="password" id="password" name="pass" class="account--content--info--form--controls--input"  autocomplete="off" spellcheck="false" required>
						</div>
						<div class="form--group-controls-two">
							<div class="account--content--info--form--controls">
								<label for="name" class="account--content--info--form--controls--label">Nombres</label>
								<input type="text" id="name" name="name" class="account--content--info--form--controls--input"  autocomplete="off" spellcheck="false" required>
							</div>
							<div class="account--content--info--form--controls">
								<label for="last-name" class="account--content--info--form--controls--label">Apellidos</label>
								<input type="text" id="last-name" name="lastname" class="account--content--info--form--controls--input"  autocomplete="off" spellcheck="false" required>
							</div>
						</div>
						<div class="account--content--info--form--controls">
							<label for="address" class="account--content--info--form--controls--label">Dirección</label>
							<input type="text" id="address" name="address" class="account--content--info--form--controls--input"  autocomplete="off" spellcheck="false" required>
						</div>
						<div class="form--group-controls-two">
							<div class="account--content--info--form--controls">
								<label for="telephone" class="account--content--info--form--controls--label">Teléfono</label>
								<input type="text" id="telephone" name="telephone" class="account--content--info--form--controls--input" minlength="9" maxlength="9"  autocomplete="off" spellcheck="false" required>
							</div>
							<div class="account--content--info--form--controls">
								<label for="postal-code" class="account--content--info--form--controls--label">Código postal</label>
								<input type="text" id="postal-code" name="postal_code" class="account--content--info--form--controls--input" minlength="5" maxlength="5"  autocomplete="off" spellcheck="false" required>
							</div>
						</div>
						<div class="account--content--info--form--btnregister">
							<button class="account--content--info--form--btnregister--btn" type="submit">REGISTRARME</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="dl-mssgCli" id="dl-mssgCli"></div>
	<script type="text/javascript" src="js/actions_pages/add_client.js"></script>
</body>
</html>