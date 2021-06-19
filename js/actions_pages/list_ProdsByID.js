$(function (){
	list_intoCart();
});

var idClient = $("#validCliSession").val();

$(document).ready(function(){	
	var idprod = $("#id_filterCategory").val();
	$.ajax({
		url: "controllers/list-ProdsByID.php",
		method: "POST",
    datatype: "JSON",
    contentType: 'application/x-www-form-urlencoded;charset=UTF-8',
    data: {id : idprod},
    beforeSend: function(){
     	$("#d-product__content").html(`
     		<div class="contCli-message__cont">
					<div class="contCli-message__cont--cloader">
						<div class="contCli-message__cont--cloader--loader"></div>
						<span class="contCli-message__cont--cloader--textinfo">Recibiendo los datos del servidor...</span>
					</div>
				</div>
     	`);
    },
	}).done(function(res){
		$("#d-product__content").html("");
		var result = JSON.parse(res); 
		$.each(result, function(i, v){

			var pathProdPhoto = "admin/assets/img/products/"+v.photo;

			$("#d-product__content").append(`
				<div class="d-product__content--product-photo">
					<!--<img src="admin/assets/img/menus/Ensalada_de_pollo.jpeg" alt="" class="d-product__content--product-photo__img">-->
					<figure class="d-product__content--product-photo__figure">
						<img src="${pathProdPhoto}" alt="" class="d-product__content--product-photo__figure__img">
					</figure>
				</div>
				<div class="d-product__content--product-info">
					<h2 class="d-product__content--product-info--name">${v.name}</h2>
					<p class="d-product__content--product-info--category">${v.name_cat}</p>
					<p class="d-product__content--product-info--price">S/. ${v.price}</p>
					<div class="d-product__content--product-info--description">
						<p>${v.description}</p>
					</div>
					<form action="" method="POST" class="d-product__content--product-info--form">
						<!---<div class="d-product__content--product-info--form--quantity">
							<button class="d-product__content--product-info--form--quantity--btnrest btnscart-prod" type="button">-</button>
							<input type="number" class="d-product__content--product-info--form--quantity--input" id="quantity-d-products" min="1"  value="1" size="100">
							<button class="d-product__content--product-info--form--quantity--btnsum btnscart-prod" type="button">+</button>
						</div>-->
						<button type="button" class="d-product__content--product-info--form--btnaddcart"
							attr_id='${v.id}'
							attr_price='${v.price}'
							attr_store='${v.id_str}'
							attr_quantity=1
						>Agregar al carrito</button>
					</form>
				</div>
			`);
		});

		var namecategory = result[0].name_cat;
		$.ajax({
			url: "controllers/list-ProdsByNameCategory.php",
			method: "POST",
	    datatype: "JSON",
	    contentType: 'application/x-www-form-urlencoded;charset=UTF-8',
	    data: {name : namecategory},
	    beforeSend: function(){
	     	$("#related-products__content").html(`
	     		<div class="contCli-message__cont">
						<div class="contCli-message__cont--cloader">
							<div class="contCli-message__cont--cloader--loader"></div>
							<span class="contCli-message__cont--cloader--textinfo">Cargando más conicidencias...</span>
						</div>
					</div>
	     	`);
	    },
		}).done(function(res){
			$("#related-products__content").html("");
			var result2 = JSON.parse(res);
			var cutearray = result2.slice(0, 4);

			$.each(cutearray, function(i, v){

				var pathProdPhotoByCateg = "admin/assets/img/products/"+v.photo;

				$("#related-products--content__menu").append(`
					<li class='related-products--content__menu--item'>
						<a href='detalle-producto?idprodm=${v.id}' class='related-products--content__menu--link'>
							<div class='related-products--content__menu--link--contimg'>
								<img src='${pathProdPhotoByCateg}' alt='' class='related-products--content__menu--link--contimg__photo'>
							</div>
							<p class='related-products--content__menu--link--nameprod'>${v.name}</p>
							<span class='related-products--content__menu--link--priceprod'>S/. ${v.price}</span>
						</a>
						<ul class='related-products--content__menu--item--addthisprod'>
							<li class='related-products--content__menu--item--addthisprod--item'>
								<a href='#0' class='related-products--content__menu--item--addthisprod--link'
									attr_id='${v.id}'
									attr_price='${v.price}'
									attr_store='${v.id_str}'
									attr_quantity=1
								>
									<span>AGREGAR</span>
									<span>AL CARRITO</span>
								</a>
							</li>
						</ul>
					</li>
				`);
			});
		});
	});
});

$(document).on('click', '.d-product__content--product-info--form--btnaddcart', function(e){
	e.preventDefault();

	var precioreal = $(this).attr('attr_price');
	var cantidad = $(this).attr('attr_quantity');

	var arrproductinfo = {
		user: parseInt(idClient),
		id: parseInt($(this).attr('attr_id')),
		store: parseInt($(this).attr('attr_store')),
		price: parseFloat($(this).attr('attr_price')),
		quantity: parseInt($(this).attr('attr_quantity')),
		subtotal: parseFloat(precioreal) * parseFloat(cantidad)
	};

	$.ajax({
		url: "controllers/add-ProdsIntoCart.php",
		method: "POST",
    datatype: "JSON",
    contentType: 'application/x-www-form-urlencoded;charset=UTF-8',
    data: arrproductinfo,
	}).done(function(res){

		if(res == "insertado"){
			list_intoCart();
			
			$("#messageAddIntoCart").append(`
				<div class="messageAddIntoCart__cont">
					<div class="messageAddIntoCart__cont--cIcon">
						<svg xmlns="http://www.w3.org/2000/svg" class="messageAddIntoCart__cont--cIcon--icon" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision;text-rendering:geometricPrecision;image-rendering:optimizeQuality;" viewBox="0 0 847 1058.75" x="0px" y="0px" fill-rule="evenodd" clip-rule="evenodd"><defs><style type="text/css"></style></defs><g><path class="fil0" d="M360 148c84,0 159,38 209,97l-42 36c-40,-47 -100,-77 -167,-77 -122,0 -220,98 -220,220 0,122 98,220 220,220 138,0 241,-125 217,-259l47 -41c53,175 -78,355 -264,355 -152,0 -276,-124 -276,-276 0,-152 124,-276 276,-276zm-50 188l75 95 331 -284 45 53 -386 331 -120 -151 54 -43z"/></g></svg>
					</div>
					<span class="messageAddIntoCart__cont--message">Producto agregado</span>
				</div>
			`);

			setTimeout(function(){
				$("#messageAddIntoCart .messageAddIntoCart__cont").addClass("active");
			}, 2500);

		}else{
			$("#messageAddIntoCart").html("");
			console.log("No se ha insertado el producto");
		}
	});
});

function list_intoCart(){
	$.ajax({
		url: "controllers/list-ProdsIntoCart.php",
		method: "POST",
    datatype: "JSON",
    contentType: 'application/x-www-form-urlencoded;charset=UTF-8',
    data: {idcli : idClient},
	}).done(function(res){
			
		$("#listProds_ByClienteAdd").html("");

		var resultlist = JSON.parse(res);
		$.each(resultlist, function(i, v){

			var total = (v.price_real * v.quantity).toFixed(2);
			var pathimgProd = "admin/assets/img/products/"+v.photo;

			$("#listProds_ByClienteAdd").append(`
				<li class="homepage__infotop__header--contmenucart__cont--menu--item" id="prod-${i}">
					<a href="detalle-producto?idprodm=${v.id}" class="homepage__infotop__header--contmenucart__cont--menu--item--l">
						<div class="homepage__infotop__header--contmenucart__cont--menu--item--l__cProd">
							<div class="homepage__infotop__header--contmenucart__cont--menu--item--l__cProd--photo">
								<img src="${pathimgProd}" alt="">
							</div>
							<div class="homepage__infotop__header--contmenucart__cont--menu--item--l__cProd--info">
								<p class="homepage__infotop__header--contmenucart__cont--menu--item--l__cProd--info--name"><span><b>${v.quantity}x</b></span>&nbsp;${v.name}</p>
								<p class="homepage__infotop__header--contmenucart__cont--menu--item--l__cProd--info--namecategory">${v.name_cat}</p>
								<span class="homepage__infotop__header--contmenucart__cont--menu--item--l__cProd--info--price">s/. ${total}</span>
							</div>
						</div>
					</a>
					<!--<div class="homepage__infotop__header--contmenucart__cont--menu--item--cBtns">
						<button class="homepage__infotop__header--contmenucart__cont--menu--item--cBtns--btn btn-listindec-${i}"
							data-prodid='${v.id}'
							data-prodstock='${v.stock}'
							data-clientid='${idClient}'
						>-</button>
						<input type="number" value="${v.quantity}" data-prodcant='${v.quantity}' class="homepage__infotop__header--contmenucart__cont--menu--item--cBtns--countP" id="inputcartside-${i}">
						<button class="homepage__infotop__header--contmenucart__cont--menu--item--cBtns--btn btn-listindec-${i}"
							data-prodid='${v.id}'
							data-prodstock='${v.stock}'
							data-clientid='${idClient}'
						>+</button>
					</div>-->
				</li>
			`);
		});
	});
}