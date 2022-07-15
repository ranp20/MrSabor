<?php
	
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
  $url =  $actual_link . "/" ."MrSabor/admin/";

	require_once 'php/process_session-admin.php';
	require_once '../php/class/categories.php';
	require_once '../php/class/restaurants.php';

	$list = new Categories();
	$allcategories = $list->get_categories();
	$list = new Restaurants();
	$allrestaurants = $list->get_restaurants();

	if(!isset($_SESSION['admin_mrsabor'])){
		header("location: ./");
	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once 'includes/header_links.php'; ?>
	<title>Dashboard - Productos</title>
</head>
<body>
	<main id="main" class="main">
		<?php require_once 'includes/sidebar-left.php'; ?>
		<div class="main__cont">
			<?php require_once 'includes/header-top.php'; ?>
			<div class="main__cont--content">
				<div class="main__cont--content__addtitle">
					<h2 class="main__cont--content__addtitle--title">PRODUCTOS</h2>
					<button type="button" href="#" id="add-product" class="main__cont--content__addtitle--btn-add" data-toggle="modal" data-target="#addproductModal"><span class="main__cont--content__addtitle--btn-add__hidden">Agregar&nbsp;</span>+</button>
				</div>
				<div class="main__cont--content__inputsearch-table">
					<input type="text" class="main__cont--content__inputsearch-table--input" name="searchproduct" id="searchproduct" maxlength="100" placeholder="Buscar...">
				</div>
				<div class="contain-table-responsive">
					<table class="main__cont--content__list-results">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>Descripción</th>
								<th>Precio</th>
								<th>Stock</th>
								<th>Imagen</th>
								<th>Oferta</th>
								<th>Restaurant</th>
								<th>Categoría</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody id="tbl_products">
								
						</tbody>
					</table>
				</div>
				<!-- MODAL - AGREGAR NUEVO PRODUCTO -->
				<div class="modal fade bootstrapmodal-custom" id="addproductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">AGREGAR PRODUCTO</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      	<div class="cont-modalbootstrap">
					        <form action="" id="form-add-product" method="POST" class="cont-modalbootstrap__form" autocomplete="false" enctype="multipart/form-data">
					        	<div class="cont-modalbootstrap__form--control">
					        		<label for="name" class="cont-modalbootstrap__form--control__label">Nombre del Producto</label>
					        		<input id="name" class="cont-modalbootstrap__form--control__input" name="name" type="text" required>
					        	</div>
					        	<div class="cont-group-form-controls">
						        	<div class="cont-modalbootstrap__form--control cont-group-form-controls__control">
						        		<label for="price" class="cont-modalbootstrap__form--control__label">Precio del Producto</label>
						        		<input id="price" class="cont-modalbootstrap__form--control__input" name="price" type="number" required maxlength="9" minlength="9">
						        	</div>
						        	<div class="cont-modalbootstrap__form--control cont-group-form-controls__control">
						        		<label for="stock" class="cont-modalbootstrap__form--control__label">Stock del Producto</label>
						        		<input id="stock" class="cont-modalbootstrap__form--control__input" name="stock" type="number" required maxlength="9" minlength="9">
						        	</div>
					        	</div>
					        	<div class="cont-group-form-controls">
						        	<div class="cont-modalbootstrap__form--control cont-group-form-controls__control">
						        		<label for="seloffert">Oferta del Producto</label>
						        		<select class="cont-modalbootstrap__form--control__select" name="seloffert" id="seloffert">
						        				<option value="1">NO</option>
						        				<option value="2">SÍ</option>
						        			</select>	
						        	</div>
						        	<div class="cont-modalbootstrap__form--control cont-group-form-controls__control">
						        		<label for="newprice" class="cont-modalbootstrap__form--control__label">Nuevo Precio</label>
						        		<input id="newprice" class="cont-modalbootstrap__form--control__input" name="newprice" type="number" maxlength="9" minlength="9">
						        	</div>
					        	</div>
					        	<div class="cont-modalbootstrap__form--control">
					        		<label for="selcategory">Categoría del Producto</label>
					        		<select class="cont-modalbootstrap__form--control__select one-hidden" name="selcategory" id="selcategory">
					        			<option value="0">Selecciona una opción</option>
					        			<?php 

					        			foreach ($allcategories as $key => $value) {
					        				echo "
					        					<option value='{$value['id']}'>{$value['name']}</option>
					        				";
					        			}
					        			?>
					        		</select>
					        	</div>
					        	<div class="cont-modalbootstrap__form--control">
					        		<label for="selrestaurant">Restaurante del Producto</label>
					        		<select class="cont-modalbootstrap__form--control__select one-hidden" name="selrestaurant" id="selrestaurant">
					        			<option value="0">Selecciona una opción</option>
					        			<?php 
					        			foreach ($allrestaurants as $key => $value) {
					        				echo "
					        					<option value='{$value['id']}'>{$value['name']}</option>
					        				";
					        			}
					        			?>
					        		</select>
					        	</div>
					        	<div class="cont-modalbootstrap__form--control">
					        		<label for="description" class="cont-modalbootstrap__form--control__labeltextarea">Descripción del producto</label>
					        		<textarea name="description" id="description" class="cont-modalbootstrap__form--control__textarea" required></textarea>
					        	</div>
					        	<div class="cont-modalbootstrap__form--control">
					        		<label for="images">Foto del Producto</label>
					        		<input id="images" class="cont-modalbootstrap__form--control__input-photo images" name="imagen[]" type="file" accept="img/*" required>						        		
					        	</div>
							      <div class="cont-modalbootstrap__footer">
							        <button type="button" class="cont-modalbootstrap__footer--btncancel" data-dismiss="modal">CANCELAR</button>
							        <button type="button" class="cont-modalbootstrap__footer--btnadd" id="btnadd-product" type="submit">GUARDAR</button>
							      </div>
					        </form>
				      	</div>
				      </div>
				    </div>
				  </div>
				</div>
				<!-- MODAL - EDITAR NUEVO PRODUCTO -->
				<div class="modal fade bootstrapmodal-custom" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="update-modal-label">ACTUALIZAR PRODUCTO</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body cont-total-update-items">
				      	<div class="cont-modalbootstrapupdate">
					        <form action="" id="form-update-product" method="POST" class="cont-modalbootstrapupdate__form" autocomplete="false" enctype="multipart/form-data">
					        	<input type="hidden" id="idupdate-product">
					        	<div class="cont-modalbootstrap__form--control">
					        		<label for="name-update" class="cont-modalbootstrap__form--control__label">Nombre del Producto</label>
					        		<input id="name-update" class="cont-modalbootstrap__form--control__input" name="name-update" type="text" required>
					        	</div>
					        	<div class="cont-group-form-controls">
						        	<div class="cont-modalbootstrap__form--control cont-group-form-controls__control">
						        		<label for="price-update" class="cont-modalbootstrap__form--control__label">Precio del Producto</label>
						        		<input id="price-update" class="cont-modalbootstrap__form--control__input" name="price-update" type="number" required maxlength="9" minlength="9">
						        	</div>
						        	<div class="cont-modalbootstrap__form--control cont-group-form-controls__control">
						        		<label for="stock-update" class="cont-modalbootstrap__form--control__label">Stock del Producto</label>
						        		<input id="stock-update" class="cont-modalbootstrap__form--control__input" name="stock-update" type="number" required maxlength="9" minlength="9">
						        	</div>
					        	</div>
					        	<div class="cont-group-form-controls">
						        	<div class="cont-modalbootstrap__form--control cont-group-form-controls__control">
						        		<label for="seloffert-update">Oferta del Producto</label>
						        		<select class="cont-modalbootstrap__form--control__select" name="seloffert-update" id="seloffert-update">
						        				<option value="1">NO</option>
						        				<option value="2">SÍ</option>
						        			</select>	
						        	</div>
						        	<div class="cont-modalbootstrap__form--control cont-group-form-controls__control">
						        		<label for="newprice-update" class="cont-modalbootstrap__form--control__label">Nuevo Precio</label>
						        		<input id="newprice-update" class="cont-modalbootstrap__form--control__input" name="newprice-update" type="number" maxlength="9" minlength="9">
						        	</div>
					        	</div>
					        	<div class="cont-modalbootstrap__form--control">
					        		<label for="selcategory-update">Categoría del Producto</label>
					        		<select class="cont-modalbootstrap__form--control__select one-hidden" name="selcategory-update" id="selcategory-update">
					        			<option value="0">Selecciona una opción</option>
					        			<option value="">Categoría 1</option>
					        			<option value="">Categoría 2</option>
					        			<option value="">Categoría 3</option>
					        			<option value="">Categoría 4</option>
					        		</select>
					        	</div>
					        	<div class="cont-modalbootstrap__form--control">
					        		<label for="selrestaurant-update">Restaurante del Producto</label>
					        		<select class="cont-modalbootstrap__form--control__select one-hidden" name="selrestaurant-update" id="selrestaurant-update">
					        			<option value="0">Selecciona una opción</option>
					        			<option value="">Restaurante 1</option>
					        			<option value="">Restaurante 2</option>
					        			<option value="">Restaurante 3</option>
					        			<option value="">Restaurante 4</option>
					        		</select>
					        	</div>
					        	<div class="cont-modalbootstrap__form--control">
					        		<label for="description-update" class="cont-modalbootstrap__form--control__labeltextarea">Descripción del producto</label>
					        		<textarea name="description-update" id="description-update" class="cont-modalbootstrap__form--control__textarea" required></textarea>
					        	</div>
					        	<div class="cont-modalbootstrap__form--control">
					        		<label for="images-update">Foto del Producto</label>
					        		<a href="#" id="photo-update" class="cont-modalbootstrapupdate__form--control__linkphoto" target="_blank">(Ver Imagen)</a>
					        		<input id="images-update" class="cont-modalbootstrap__form--control__input-photo images" name="imagen[]" type="file" accept="img/*" required>
					        	</div>
							      <div class="cont-modalbootstrapupdate__footer">
							        <button type="button" class="cont-modalbootstrapupdate__footer--btncancel" data-dismiss="modal">CANCELAR</button>
							        <button type="submit" class="cont-modalbootstrapupdate__footer--btnupdate" id="btnupdate-product">GUARDAR</button>
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
					        <form action="" id="form-delete-product" method="POST" class="cont-modalbootstrapupdate__form" autocomplete="false" enctype="multipart/form-data">
					        	<input type="hidden" id="iddelete-product">
							      <div class="cont-modalbootstrapupdate__footer">
							        <button type="button" class="cont-modalbootstrapupdate__footer--btncancel" data-dismiss="modal">CANCELAR</button>
							        <button type="submit" class="cont-modalbootstrapupdate__footer--btndelete" id="btndelete-product">ELIMINAR</button>
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
	<script type="text/javascript" src="<?php echo $url ?>js/actions_pages/products.js"></script>
</body>
</html>