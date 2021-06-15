<?php
	
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
  $url =  $actual_link . "/" ."MrSabor/admin/";

	require_once 'php/process_session-admin.php';
	require_once '../php/class/restaurants.php';

	$list = new Restaurants();
	$restaurants = $list->get_restaurants();

	if(!isset($_SESSION['user'])){
		header("location: ./");
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once 'includes/header_links.php'; ?>
	<title>Dashboard - Categorías</title>
</head>
<body>
	<main id="main" class="main">
		<div class="result"></div>
		<?php require_once 'includes/sidebar-left.php'; ?>
		<div class="main__cont">
			<?php require_once 'includes/header-top.php'; ?>
			<div class="main__cont--content">
				<div class="main__cont--content__addtitle">
					<h2 class="main__cont--content__addtitle--title">CATEGORÍAS</h2>
					<button type="button" href="#" id="add-category" class="main__cont--content__addtitle--btn-add" data-toggle="modal" data-target="#addcategoryModal"><span class="main__cont--content__addtitle--btn-add__hidden">Agregar&nbsp;</span>+</button>
				</div>
				<div class="main__cont--content__inputsearch-table">
					<input type="text" class="main__cont--content__inputsearch-table--input" name="searchcategories" id="searchcategories" maxlength="100" placeholder="Buscar...">
				</div>
				<div class="contain-table-responsive">
					<table class="main__cont--content__list-results">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>Imagen</th>
								<th>Restaurante</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody id="tbl_categories">
								
						</tbody>
					</table>
				</div>
				<!-- MODAL - AGREGAR NUEVO RESTAURANTE -->
				<div class="modal fade bootstrapmodal-custom" id="addcategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">AGREGAR CATEGORÍA</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      	<div class="cont-modalbootstrap">
					        <form action="" id="form-add-category" method="POST" class="cont-modalbootstrap__form" autocomplete="false" enctype="multipart/form-data">
					        	<div class="cont-modalbootstrap__form--control">
					        		<label for="name" class="cont-modalbootstrap__form--control__label">Nombre de la categoría</label>
					        		<input id="name" class="cont-modalbootstrap__form--control__input" name="name" type="text" required>
					        	</div>
					        	<div class="cont-modalbootstrap__form--control">
					        		<label for="imagen">Foto de la categoría</label>
					        		<input id="images" class="cont-modalbootstrap__form--control__input-photo images" name="imagen[]" type="file" accept="img/*" required>
					        	</div>
					        	<div class="cont-modalbootstrap__form--control">
					        		<label for="selrestaurant">Restaurante</label>
						        	<select class="cont-modalbootstrap__form--control__select one-hidden" name="selrestaurant" id="selrestaurant" required>
						        		<option value="0">Elija una opción</option>
						        		<?php 

						        			foreach ($restaurants as $key => $value) {
						        				echo "
						        					<option value='{$value['id']}'>{$value['name']}</option>
						        				";
						        			}

						        		?>
						        	</select>
					        	</div>
							      <div class="cont-modalbootstrap__footer">
							        <button type="button" class="cont-modalbootstrap__footer--btncancel" data-dismiss="modal">CANCELAR</button>
							        <button type="button" class="cont-modalbootstrap__footer--btnadd" id="btnadd-category" type="submit">GUARDAR</button>
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
				        <h5 class="modal-title" id="update-modal-label">ACTUALIZAR CATEGORÍA</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body cont-total-update-items">
				      	<div class="cont-modalbootstrapupdate">
					        <form action="" id="form-update-category" method="POST" class="cont-modalbootstrapupdate__form" autocomplete="false" enctype="multipart/form-data">
					        	<input type="hidden" id="idupdate-category">
					        	<div class="cont-modalbootstrapupdate__form--control">
					        		<label for="name-update" class="cont-modalbootstrapupdate__form--control__label complete">Nombre de la categoría</label>
					        		<input id="name-update" class="cont-modalbootstrapupdate__form--control__input" name="name-update" type="text">
					        	</div>
					        	<div class="cont-modalbootstrapupdate__form--control">
					        		<label for="imagen">Foto de la categoría</label>
					        		<a href="#" id="photo-update" class="cont-modalbootstrapupdate__form--control__linkphoto" target="_blank">(Ver Imagen)</a>
					        		<input id="images" class="cont-modalbootstrap__form--control__input-photo images-update" name="imagen[]" type="file" accept="img/*">
					        	</div>
					        	<div class="cont-modalbootstrap__form--control">
					        		<label for="selrestaurant">Restaurante</label>
						        	<select class="cont-modalbootstrap__form--control__select one-hidden" name="selrestaurant-update" id="selrestaurant-update" required>
						        		<option value="0">Elija una opción</option>
						        		<?php 

						        			foreach ($restaurants as $key => $value) {
						        				echo "
						        					<option value='{$value['id']}'>{$value['name']}</option>
						        				";
						        			}

						        		?>
						        	</select>
					        	</div>
							      <div class="cont-modalbootstrapupdate__footer">
							        <button type="button" class="cont-modalbootstrapupdate__footer--btncancel" data-dismiss="modal">CANCELAR</button>
							        <button type="submit" class="cont-modalbootstrapupdate__footer--btnupdate" id="btnupdate-category">GUARDAR</button>
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
				        <h5 class="modal-title" id="delete-modal-label">ELIMINAR CATEGORÍA</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body cont-total-update-items">
					      <h2 class="text-message-modalAlt">¿Seguro que desea eliminar este registro?</h2>
				      	<div class="cont-modalbootstrapupdate">
					        <form action="" id="form-delete-category" method="POST" class="cont-modalbootstrapupdate__form" autocomplete="false" enctype="multipart/form-data">
					        	<input type="hidden" id="iddelete-category">
							      <div class="cont-modalbootstrapupdate__footer">
							        <button type="button" class="cont-modalbootstrapupdate__footer--btncancel" data-dismiss="modal">CANCELAR</button>
							        <button type="submit" class="cont-modalbootstrapupdate__footer--btndelete" id="btndelete-category">ELIMINAR</button>
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
	<script type="text/javascript" src="<?php echo $url ?>js/actions_pages/categories.js"></script>
</body>
</html>