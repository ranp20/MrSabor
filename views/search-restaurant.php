<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once 'includes/header_links.php'; ?>
	<title>Mr Sabor - Buscar restaurantes</title>
</head>
<body>
	<?php require_once 'includes/homepage-headertop.php'; ?>
	<div class="container marg-57">
		<div class="search-rest">
			<div class="search-rest__cont">
				<div class="search-rest__cont--cT">
					<h2 class="search-rest__cont--cT--title">NUESTROS LOCALES</h2>
				</div>
				<div class="search-rest__cont--cListRest">
					<div class="search-rest__cont--cListRest--cL">
						<div class="search-rest__cont--cListRest--cL--c">
							<div class="search-rest__cont--cListRest--cL--c--contSearch">
								<h3 class="search-rest__cont--cListRest--cL--c--contSearch--title">Buscar Restaurante</h3>
								<input type="text" class="search-rest__cont--cListRest--cL--c--contSearch--input" id="searchIptRestaurant" placeholder="Buscar restaurantes: nombre, dirección, categorías, etc...">
							</div>
							<div class="search-rest__cont--cListRest--cL--c--contList">
								<ul class="search-rest__cont--cListRest--cL--c--contList--m" id="listsearchRest"></ul>
							</div>
						</div>
					</div>
					<div class="search-rest__cont--cListRest--cMap">
						<div class="search-rest__cont--cListRest--cMap--cCoords">
							<p class="search-rest__cont--cListRest--cMap--cCoords--text">
								<span><b>Latitud:</b></br><span id="latdragendRest">-0.00</span></span>
							</p>
							<p class="search-rest__cont--cListRest--cMap--cCoords--text">
								<span><b>Longitud:</b></br><span id="lngdragendRest">-0.00</span></span>
							</p>
						</div>
						<div class="search-rest__cont--cListRest--cMap--map" id="showMapRestaurants"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require_once 'includes/homepage-footer.php'; ?>
	<script src="js/main.js"></script>
	<script src="js/actions_pages/list_ProdsViewIntoCart.js"></script>
	<script src="js/actions_pages/search-restaurants.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=&callback=iniciarMap"></script>
</body>
</html>