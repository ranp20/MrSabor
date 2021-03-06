<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once 'includes/header_links.php'; ?>
	<title>Mr Sabor | Carrito de compras</title>
</head>
<body>
	<?php require_once 'includes/homepage-headertop.php'; ?>
	<div class="container marg-57">
		<div class="c-cart">
			<div class="c-cart__cont">
				<div class="c-cart__cont--cT">
					<h2 class="c-cart__cont--cT--title">Carrito de compra</h2>
				</div>
				<div class="c-cart__cont--cTable" id="contTable_anothermsg">
					<table class="c-cart__cont--cTable--table">
						<thead>
							<tr>
								<th>Producto</th>
								<th>Precio</th>
								<th>Cantidad</th>
								<th>Subtotal</th>
							</tr>
							<tbody id="list_CartMrSabor"></tbody>
						</thead>
					</table>
					<div class="c-cart__cont--cTable--subT" id="contSubtotal_anothermsg">
						<span class="c-cart__cont--cTable--subT--txt"><b>Subtotal</b>&nbsp;&nbsp;</span>
						<span class="c-cart__cont--cTable--subT--txt">S/. <span id="subTotalBuy">0.00</span></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require_once 'includes/homepage-footer.php'; ?>
	<script src="js/main.js"></script>
	<script src="js/actions_pages/list_ProdsViewIntoCart.js"></script>
</body>
</html>