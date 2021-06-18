$(function(){
	list_intoCart();
});

var idClient = $("#validCliSession").val();

$(document).on('click', '.related-products--content__menu--item--addthisprod--link', function(e){
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
						<button class="homepage__infotop__header--contmenucart__cont--menu--item--cBtns--btn btn-indec-${i}"
							data-prodid='${v.id}'
							data-prodstock='${v.stock}'
							data-idclient='${idClient}'
						>-</button>
						<div class="homepage__infotop__header--contmenucart__cont--menu--item--cBtns--countP">1</div>
						<button class="homepage__infotop__header--contmenucart__cont--menu--item--cBtns--btn btn-indec-${i}"
							data-prodid='${v.id}'
							data-prodstock='${v.stock}'
							data-idclient='${idClient}'
						>+</button>
					</div>-->
				</li>
			`);

			/************************** CAMBIAR LA CANTIDAD DE PRODUCTOS A COMPRAR **************************/
			$(document).on("click", `.btn-indec-${i}`, function(){
				let valCant = $(this).parent().find("div").text();
				let button = $(this);
				let newvalCant = $(this).parent().find("div").text();

				if(button.text() == "+"){
					newvalCant = parseFloat(valCant) + 1;
					$(this).parent().find("div").text(newvalCant);
					
					var objProd = {
						prodid: button.data("prodid"),
						prodcant: $(this).parent().find("div").text(),
						prodstock: button.data("prodstock"),
						clientid: button.data("idclient"),
						button: button.text(),
					};
					
					$.ajax({
						url: "controllers/validate-CantProdsIntoCart.php",
						method: "POST",
				    datatype: "JSON",
				    data: objProd,
					}).done(function(res){
						console.log(res);
					});

				}else{
					if(valCant > 1){
						newvalCant = parseFloat(valCant) - 1;
						$(this).parent().find("div").text(newvalCant);

						var objProd = {
							prodid: button.data("prodid"),
							prodcant: $(this).parent().find("div").text(),
							prodstock: button.data("prodstock"),
							clientid: button.data("idclient"),
							button: button.text(),
						};

						$.ajax({
							url: "controllers/validate-CantProdsIntoCart.php",
							method: "POST",
					    datatype: "JSON",
					    data: objProd,
						}).done(function(res){
							console.log(res);
						});

					}else{
						newvalCant = 1;
						$(this).parent().find("div").text(newvalCant);
					}
				}
			});
		});
	});
}