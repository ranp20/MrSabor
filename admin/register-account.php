<?php 
	
	require_once '../php/class/alls.php';
	$alls = new Alls();
	$type_user = $alls->type_user();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once 'includes/header_links.php'; ?>
	<title>Crear Usuario</title>
</head>
<body class="body-account">
	<div class="box">
		<div id="result-adm"></div>
		<div class="account">
			<div class="account__cont">
				<!--------------------------->
				<!--  COLOCAR EL LOGOTIPO DE LA EMPRESA Y QUE REDIRÍGA AL INICIO -->
				<!--------------------------->
				<div class="account__cont--icon">
					<img src="assets/img/icons/Fast food_Isometric.svg" alt="">
				</div>
			</div>
			<div class="account__cont">
				<div class="account__cont--content">
					<h2 class="account__cont--content__title">CREAR USUARIO</h2>
					<p class="account__cont--content__width-register">¿Ya tienes una cuenta?&nbsp;<a href="index.php">Iniciar Sesión</a></p>
					<div class="account__cont--content__or-register">
						<div class="account__cont--content__or-register--divisor">
							<span>o</span>
						</div>
					</div>
				</div>				
				<div class="account__cont--content">
					<form action="php/process_account.php" class="account__cont--content__form" id="form-account" method="POST">
						<div class="account__cont--content__form--control">
							<label for="adduser" class="account__cont--content__form--control__label">Nombre de Usuario</label>
							<input type="text" id="adduser" name="adduser" class="account__cont--content__form--control__input" required>
						</div>
						<div class="account__cont--content__form--control">
							<label for="addmail" class="account__cont--content__form--control__label">Correo Electrónico</label>
							<input type="email" id="addmail" name="addemail" class="account__cont--content__form--control__input" required>
						</div>
						<div class="account__cont--content__form--control">
							<label for="addpassword" class="account__cont--content__form--control__label">Contraseña</label>
							<input type="password" id="addpassword" name="addpassword" class="account__cont--content__form--control__input" required>
						</div>
						<select name="addtypeuser" id="opts_type-user" class="account__cont--content__form--control__select one-hidden" required>
							<option value="0">Seleccina usuario</option>
							<?php 
								foreach ($type_user as $key => $value) {
									echo "<option value='{$value['id']}'>{$value['description']}</option>";
								}

							?>
						</select>
						<button type="submit" id="btnnew_user" class="account__cont--content__form--btnadd">CREAR CUENTA</button>
					</form>
				</div>
				
			</div>

		</div>
	</div>
	<script src="js/actions_pages/add_user.js"></script>
</body>
</html>