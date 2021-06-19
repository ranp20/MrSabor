$(function(){
	listViewcart();
	list_intoCart();
});

var idClient = $("#validCliSession").val();

function listViewcart(){
	$.ajax({
		url: "controllers/list-ProdsViewIntoCart.php",
		method: "POST",
    datatype: "JSON",
    contentType: 'application/x-www-form-urlencoded;charset=UTF-8',
    data: {idcli : idClient},
    beforeSend: function(){
     	$("#list_CartMrSabor").html(`
     		<tr>
					<td colspan="4">
						<div class="tableSetMessage__content">
			     		<div class="tableSetMessage__content__cont">
								<div class="tableSetMessage__content__cont--cloader">
									<div class="tableSetMessage__content__cont--cloader--loader"></div>
									<span class="tableSetMessage__content__cont--cloader--textinfo">Cargando el listado del carrito...</span>
								</div>
							</div>
						</div>
					</td>
				</tr>
     	`);
    },
	}).done(function(res){
		
		$("#list_CartMrSabor").html("");
	 	var result = JSON.parse(res); 
	 	if(result.length <= 0 || result == ""){
	 		
	 		$("#contSubtotal_anothermsg").css({"display":"none"});
	 		$("#list_CartMrSabor").append(`
	 			<tr>
					<td colspan="4">
						<div class="tableSetMessage__notcontent">
              <img src="admin/assets/img/icons/icon-sad-face.svg" alt="" class="tableSetMessage__notcontent--icon">
              <h3 class="tableSetMessage__notcontent--title">No se encontraron resultados...</h3>
            </div>
					</td>
				</tr>
	 		`);	
	 	}else{
	 		$("#contSubtotal_anothermsg").css({"display":"flex"});

			$.each(result, function(i, v){

				var subtotal = (v.price_real * v.quantity).toFixed(2);
				var pathProdPhoto = "admin/assets/img/products/"+v.photo;

				$("#list_CartMrSabor").append(`
					<tr class="prodcartl-${i}">
						<td>
							<div class='c-cart__cont--cTable--table--cInfoProd'>
								<div class='c-cart__cont--cTable--table--cInfoProd--cImg'>
									<a href='detalle-producto?idprodm=${v.id}' class='c-cart__cont--cTable--table--cInfoProd--cImg--ink'>
										<img src='${pathProdPhoto}' alt=''>
									</a>
								</div>
								<div class='c-cart__cont--cTable--table--cInfoProd--cName'>
									<span>${v.name}</span>
								</div>
							</div>
						</td>
						<td>${v.price_real}</td>
						<td>
							<div class='c-cart__cont--cTable--table--cBtnsar'>
								<button type='button' id='btndec_viewprod-${i}' class='c-cart__cont--cTable--table--cBtnsar--btnl btn-indec-${i}'
									data-prodid='${v.id}'
									data-clientid='${idClient}'
								>-</button>
								<input type='text' value='${v.quantity}' data-prodcant='${v.quantity}' id='input-cantprod-${i}'>
								<button type='button' id='btninc_viewprod-${i}' class='c-cart__cont--cTable--table--cBtnsar--btnr btn-indec-${i}'
									data-prodid='${v.id}'
									data-clientid='${idClient}'
								>+</button>
							</div>
						</td>
						<td>
							<span class='pricetotal-${i}'>${v.subtotal}</span>
						</td>
					</tr>
				`);

				/************************** CAMBIAR LA CANTIDAD DE PRODUCTOS A COMPRAR **************************/
				$(document).on("click", `.btn-indec-${i}`, function(){
					var valCant = $(this).parent().find("input").val();
					var button = $(this);
					var inputvalu = $(this).parent().find("input");
					var newvalCant = $(this).parent().find("input").val();

					if(button.text() == "+"){
						newvalCant = parseFloat(valCant) + 1;
						$(this).parent().find("input").val(newvalCant);
						
						var arr_validate = {
							prodid: button.data("prodid"),
							prodcant: inputvalu.data("prodcant"),
							clientid: button.data("clientid"),
							button: button.text(),
						};

						$.ajax({
							url: "controllers/validate-CantProdsIntoCart.php",
							method: "POST",
					    datatype: "JSON",
					    data: arr_validate,
						}).done(function(res){
							
							var e = JSON.parse(res);
							var result = e[0]["res"];
	 						console.log(result);

	            // if (result == "update") {          

	            //   var newvalCant = parseFloat(valCant) + 1 - 1;
	            //   var nuevovalor = button.parent().find("input").val(newvalCant);

	            //   var cantidad = newvalCant;
	            //   var tr = button.parent().parent().parent();
	            //   var price_unit = tr.find("td").eq(1).text();
	            //   var sub_total = parseFloat(price_unit) * cantidad;
	            //   console.log(sub_total);
	            //   var pricetotal1 = 0;
	            //   $(`#list_CartMrSabor tbody .prodcartl-${i}`).each(function () {
             //      var priceTotal = parseFloat($(this).find("td").eq(3).text().replace(""));
             //      pricetotal1 =
             //        parseFloat(pricetotal1) + parseFloat(priceTotal);
             //    });

	            //   $(`.pricetotal-${i}`).html(`${pricetotal1}`);
	            // }else{
	            //   console.log("No hay suficient stock");
	            // }
						});

					}else{
						if(valCant > 1){
							newvalCant = parseFloat(valCant) - 1;
							$(this).parent().find("input").val(newvalCant);

							var arr_validate = {
								prodid: button.data("prodid"),
								prodcant: inputvalu.data("prodcant"),
								prodstock: button.data("prodstock"),
								clientid: button.data("clientid"),
								button: button.text(),
							};

							$.ajax({
								url: "controllers/validate-CantProdsIntoCart.php",
								method: "POST",
						    datatype: "JSON",
						    data: arr_validate,
							}).done(function(res){
								console.log(res);
							});

						}else{
							newvalCant = 1;
							$(this).parent().find("input").val(newvalCant);
						}
					}
				});
			});
	 	}
	});
}

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
						<input type="number" value="${v.quantity}" class="homepage__infotop__header--contmenucart__cont--menu--item--cBtns--countP">
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