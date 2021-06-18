$(document).ready(function(){	
	var idClient = $("#validCliSession").val();

	$.ajax({
		url: "controllers/list-ProdsViewIntoCart.php",
		method: "POST",
    datatype: "JSON",
    contentType: 'application/x-www-form-urlencoded;charset=UTF-8',
    data: {idcli : idClient},
    /*beforeSend: function(){
     	$("#d-product__content").html(`
     		<div class="contCli-message__cont">
					<div class="contCli-message__cont--cloader">
						<div class="contCli-message__cont--cloader--loader"></div>
						<span class="contCli-message__cont--cloader--textinfo">Recibiendo los datos del servidor...</span>
					</div>
				</div>
     	`);
    },*/
	}).done(function(res){
		
	 	var result = JSON.parse(res); 
		console.log(result);

		$("#d-product__content").html("");
		$.each(result, function(i, v){

			var subtotal = (v.price_real * v.quantity).toFixed(2);
			var pathProdPhoto = "admin/assets/img/products/"+v.photo;

			$("#list_CartMrSabor").append(`
				<tr id="prodcartl-${i}">
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
							<button type='button' class='c-cart__cont--cTable--table--cBtnsar--btnl'>-</button>
							<input type='number' value='${v.quantity}'>
							<button type='button' class='c-cart__cont--cTable--table--cBtnsar--btnr'>+</button>
						</div>
					</td>
					<td>${subtotal}</td>
				</tr>
			`);
		});

	});
});