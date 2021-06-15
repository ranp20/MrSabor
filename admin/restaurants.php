<?php
	
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
  $url =  $actual_link . "/" ."MrSabor/admin/";

	require_once 'php/process_session-admin.php';

	if(!isset($_SESSION['user'])){
		header("location: ./");
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once 'includes/header_links.php'; ?>
	<title>Dashboard - Restaurantes</title>
</head>
<body>
	<main id="main" class="main">
		<div class="result"></div>
		<?php require_once 'includes/sidebar-left.php'; ?>
		<div class="main__cont">
			<?php require_once 'includes/header-top.php'; ?>
			<div class="main__cont--content">
				<div class="main__cont--content__addtitle">
					<h2 class="main__cont--content__addtitle--title">RESTAURANTES</h2>
					<button type="button" href="#" id="add-restaurant" class="main__cont--content__addtitle--btn-add" data-toggle="modal" data-target="#addrestaurantModal"><span class="main__cont--content__addtitle--btn-add__hidden">Agregar&nbsp;</span>+</button>
				</div>
				<div class="main__cont--content__inputsearch-table">
					<input type="text" class="main__cont--content__inputsearch-table--input" name="searchrestaurants" id="searchrestaurants" maxlength="100" placeholder="Buscar...">
				</div>
				<div class="contain-table-responsive">
					<table class="main__cont--content__list-results">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>Dirección</th>
								<th>Imagen</th>
								<th>Teléfono</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody id="tbl_restaurants">
								
						</tbody>
					</table>
				</div>
				<!-- MODAL - AGREGAR NUEVO RESTAURANTE -->
				<div class="modal fade bootstrapmodal-custom" id="addrestaurantModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">AGREGAR RESTAURANTE</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      	<div class="cont-modalbootstrap">
					        <form action="" id="form-add-restaurant" method="POST" class="cont-modalbootstrap__form" autocomplete="false" enctype="multipart/form-data">
					        	<div class="cont-modalbootstrap__form--control">
					        		<label for="name" class="cont-modalbootstrap__form--control__label">Nombre del restaurante</label>
					        		<input id="name" class="cont-modalbootstrap__form--control__input" name="name" type="text" required>
					        	</div>
					        	<div class="cont-modalbootstrap__form--control">
					        		<label for="address" class="cont-modalbootstrap__form--control__label">Dirección del restaurante</label>
					        		<input id="address" class="cont-modalbootstrap__form--control__input" name="address" type="text" required>
					        	</div>
					        	<div class="cont-group-form-controls">
						        	<div class="cont-modalbootstrap__form--control cont-group-form-controls__control">
						        		<label for="imagen">Foto del restaurante</label>
						        		<input id="images" class="cont-modalbootstrap__form--control__input-photo images" name="imagen[]" type="file" accept="img/*" required>
						        	</div>
						        	<div class="cont-modalbootstrap__form--control cont-group-form-controls__control">
						        		<label for="telephone" class="cont-modalbootstrap__form--control__label">Teléfono del restaurante</label>
						        		<input id="telephone" class="cont-modalbootstrap__form--control__input" name="telephone" type="text" required maxlength="9" minlength="9">
						        	</div>
					        	</div>
					        	<div class="cont-modalbootstrap__form--control">
					        		<div class="cont-modalbootstrap__form--control__continputs">
					        			<div class="cont-modalbootstrap__form--control__continputs--controls">
					        				<label class="cont-modalbootstrap__form--control__continputs--controls__label" for="LatPoint">Latitud:</label>
					        				<input id="LatPointadd" type="text" class="cont-modalbootstrap__form--control__continputs--controls__input" readonly>
					        			</div>
					        			<div class="cont-modalbootstrap__form--control__continputs--controls">
					        				<label class="cont-modalbootstrap__form--control__continputs--controls__label" for="LongPoint">Longitud:</label>
					        				<input id="LongPointadd" type="text" class="cont-modalbootstrap__form--control__continputs--controls__input" readonly>
					        			</div>
					        		</div>
					        		<div class="cont-modalbootstrap__form--control__maps" id="maps-add-restaurant"></div>
					        	</div>
							      <div class="cont-modalbootstrap__footer">
							        <button type="button" class="cont-modalbootstrap__footer--btncancel" data-dismiss="modal">CANCELAR</button>
							        <button type="button" class="cont-modalbootstrap__footer--btnadd" id="btnadd-restaurant" type="submit">GUARDAR</button>
							      </div>
					        </form>
				      	</div>
				      </div>
				    </div>
				  </div>
				</div>
				<!-- MODAL - EDITAR NUEVO RESTAURANTE -->
				<div class="modal fade bootstrapmodal-custom" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="update-modal-label">ACTUALIZAR RESTAURANTE</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body cont-total-update-items">
				      	<div class="cont-modalbootstrapupdate">
					        <form action="" id="form-update-restaurant" method="POST" class="cont-modalbootstrapupdate__form" autocomplete="false" enctype="multipart/form-data">
					        	<input type="hidden" id="idupdate-restaurant">
					        	<div class="cont-modalbootstrapupdate__form--control">
					        		<label for="name-update" class="cont-modalbootstrapupdate__form--control__label complete">Nombre del restaurante</label>
					        		<input id="name-update" class="cont-modalbootstrapupdate__form--control__input" name="name-update" type="text">
					        	</div>
					        	<div class="cont-modalbootstrapupdate__form--control">
					        		<label for="address-update" class="cont-modalbootstrapupdate__form--control__label complete">Dirección del restaurante</label>
					        		<input id="address-update" class="cont-modalbootstrapupdate__form--control__input" name="address-update" type="text">
					        	</div>
					        	<div class="cont-group-form-controls">
						        	<div class="cont-modalbootstrapupdate__form--control cont-group-form-controls__control">
						        		<label for="imagen">Foto del restaurante</label>
						        		<a href="#" id="photo-update" class="cont-modalbootstrapupdate__form--control__linkphoto" target="_blank">(Ver Imagen)</a>
						        		<input id="images" class="cont-modalbootstrap__form--control__input-photo images-update" name="imagen[]" type="file" accept="img/*">
						        	</div>
						        	<div class="cont-modalbootstrapupdate__form--control cont-group-form-controls__control">
						        		<label for="telephone-update" class="cont-modalbootstrapupdate__form--control__label complete">Teléfono del restaurante</label>
						        		<input id="telephone-update" class="cont-modalbootstrapupdate__form--control__input" name="telephone-update" type="text" maxlength="9" minlength="9">
						        	</div>
					        	</div>
					        	<div class="cont-modalbootstrapupdate__form--control">
					        		<div class="cont-modalbootstrapupdate__form--control__continputs">
					        			<div class="cont-modalbootstrapupdate__form--control__continputs--controls">
					        				<label class="cont-modalbootstrapupdate__form--control__continputs--controls__label" for="LatPoint">Latitud:</label>
					        				<input id="LatPoint" type="text" class="cont-modalbootstrapupdate__form--control__continputs--controls__input">
					        			</div>
					        			<div class="cont-modalbootstrapupdate__form--control__continputs--controls">
					        				<label class="cont-modalbootstrapupdate__form--control__continputs--controls__label" for="LongPoint">Longitud:</label>
					        				<input id="LongPoint" type="text" class="cont-modalbootstrapupdate__form--control__continputs--controls__input">
					        			</div>
					        		</div>
					        		<div class="cont-modalbootstrapupdate__form--control__maps" id="maps-update-restaurant"></div>
					        	</div>
							      <div class="cont-modalbootstrapupdate__footer">
							        <button type="button" class="cont-modalbootstrapupdate__footer--btncancel" data-dismiss="modal">CANCELAR</button>
							        <button type="submit" class="cont-modalbootstrapupdate__footer--btnupdate" id="btnupdate-restaurant">GUARDAR</button>
							      </div>
					        </form>
				      	</div>
				      </div>
				    </div>
				  </div>
				</div>
				<!-- MODAL - ELIMINAR RESTAURANTE -->
				<div class="modal fade bootstrapmodal-custom" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="delete-modal-label">ELIMINAR RESTAURANTE</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body cont-total-update-items">
					      <h2 class="text-message-modalAlt">¿Seguro que desea eliminar este registro?</h2>
				      	<div class="cont-modalbootstrapupdate">
					        <form action="" id="form-delete-restaurant" method="POST" class="cont-modalbootstrapupdate__form" autocomplete="false" enctype="multipart/form-data">
					        	<input type="hidden" id="iddelete-restaurant">
							      <div class="cont-modalbootstrapupdate__footer">
							        <button type="button" class="cont-modalbootstrapupdate__footer--btncancel" data-dismiss="modal">CANCELAR</button>
							        <button type="submit" class="cont-modalbootstrapupdate__footer--btndelete" id="btndelete-restaurant">ELIMINAR</button>
							      </div>
					        </form>
				      	</div>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</main>
	<script type="text/javascript" src="<?php echo $url ?>js/main.js"></script>
	<script type="text/javascript" src="<?php echo $url ?>js/actions_pages/restaurants.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
</body>
</html>