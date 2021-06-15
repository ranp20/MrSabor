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
						<div class="d-product__content--product-info--form--quantity">
							<button class="d-product__content--product-info--form--quantity--btnrest btnscart-prod" type="button">-</button>
							<input type="number" class="d-product__content--product-info--form--quantity--input" id="quantity-d-products" min="1"  value="1" size="100">
							<button class="d-product__content--product-info--form--quantity--btnsum btnscart-prod" type="button">+</button>
						</div>
						<button type="submit" class="d-product__content--product-info--form--btnaddcart">Agregar al carrito</button>
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