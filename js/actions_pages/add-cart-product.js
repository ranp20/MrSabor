$(document).on('click', '.related-products--content__menu--item--addthisprod--link', function(e){
	e.preventDefault();

	var precioreal = $(this).attr('attr_price');
	var cantidad = $(this).attr('attr_quantity');

	var arrproductinfo = {
		id: $(this).attr('attr_id'),
		name: $(this).attr('attr_name'),
		store: $(this).attr('attr_store'),
		price: $(this).attr('attr_price'),
		quantity: $(this).attr('attr_quantity'),
		subtotal: precioreal * cantidad
	};

	alert(JSON.stringify(arrproductinfo));

});