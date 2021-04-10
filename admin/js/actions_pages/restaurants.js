/* IMPRIMIR EL MAPA DE GOOGLE MAPS AL MOMENTO DE AGREGAR UN RESTAURANTE */
function iniciarMap(){
  /************************** MAPA DE PRUEBA - AGREGAR UBICACIÓN **************************/
  var coord = {lat: - 34.5956145 , lng: - 58.4431949};
  var map = new google.maps.Map(document.getElementById('maps-add-restaurant'), {
    zoom: 10,
    center: coord
  });  
  var marker = new google.maps.Marker({
    position: coord,
    map: map
  });
  
  /************************** MAPA DE PRUEBA - ACTUALIZAR UBICACIÓN **************************/
  var coord2 = {lat: - 34.5956145 , lng: - 58.4431949};
  var LatPoint = document.querySelector('#LatPoint').value = coord2.lat;
  var LongPoint = document.querySelector('#LongPoint').value =coord2.lng;
  var map2 = new google.maps.Map(document.getElementById('maps-update-restaurant'), {
    zoom: 10,
    center: coord2
  });
  var marker2 = new google.maps.Marker({
    position: coord2,
    map: map2
  });
}

/************************** ANIMACIÓN DE LAS CAJAS DE TEXTO - AGREGAR RESTAURANTE **************************/
let inputs = document.querySelectorAll('.cont-modalbootstrap__form--control__input');

inputs.forEach( (input) => {
  input.onfocus = () => {
    input.previousElementSibling.classList.add('focus');
    input.classList.add('focus');
  }

  input.onblur = () => {

    input.value = input.value.trim();

    if(input.value.trim().length == 0){
      input.previousElementSibling.classList.remove('focus');
      input.classList.remove('focus');
      input.previousElementSibling.classList.remove('complete');
    }else{
      input.previousElementSibling.classList.add('complete');
      input.classList.remove('focus');
    }
  }
});


/************************** ANIMACIÓN DE LAS CAJAS DE TEXTO - ACTUALIZAR RESTAURANTE **************************/
let inputs_update = document.querySelectorAll('.cont-modalbootstrapupdate__form--control__input');

inputs_update.forEach( (input_update) => {
  
  input_update.onfocus = () => {
    input_update.previousElementSibling.classList.add('focus');
    input_update.classList.add('focus');
  }

  input_update.onblur = () => {

    input_update.value = input_update.value.trim();

    if(input_update.value.trim().length == 0){
      input_update.previousElementSibling.classList.remove('focus');
      input_update.classList.remove('focus');
      input_update.previousElementSibling.classList.remove('complete');
    }else{
      input_update.previousElementSibling.classList.add('complete');
      input_update.classList.remove('focus');
    }
  }
});


/************************** LISTAR RESTAURANTES **************************/
$(document).ready( function () {
  
	$.ajax({
		url: "admin/controllers/list_restaurants.php",
		method: "POST",
		datatype: "JSON",
		contentType: 'application/x-www-form-urlencoded;charset=UTF-8',
	}).done( function (res) {

		var response = JSON.parse(res);

		$.each(response, function (i, v){

			var img_route = "admin/assets/img/restaurants/"+v.photo;

			$("#tbl_restaurants").append(
        `<tr id="item-${v.id}">
          <td>${v.id}</td>
          <td>${v.name}</td>
          <td>${v.address}</td>
          <td class="cont-img-restaurant">
          	<a href="${img_route}" target="_blank">
          		<img loading="lazy" src="${img_route}">
          	</a>
          </td>
          <td>${v.telephone}</td>
          <td class="cont-btn-update">
          	<a class="btn-update-restaurant" data-toggle="modal" data-target="#updateModal"  href="#" 
              data-id="${v.id}"
              data-name="${v.name}"
              data-address="${v.address}"
              data-photo="${img_route}"
              data-telephone="${v.telephone}"
              >Editar</a>
          </td>
          <td class="cont-btn-delete" id="cont-btn-delete">
          	<a class="btn-delete-restaurant" href="#"
              data-id="${v.id}"
              >Eliminar</a>
          </td>
        </tr>`
      );

			$("#tbl_restaurants").DataTable();
		});
	});

  /************************** AGREGAR RESTAURANTE **************************/
  $(document).on('click', '#btnadd-restaurant', function(e){
    e.preventDefault();

    var formdata = new FormData();
    var filelength = $('.images')[0].files.length;
    for (var i = 0;i < filelength; i ++) {
      formdata.append("imagen", $('.images')[0].files[i]);
    }

    formdata.append("name", $('#name').val());
    formdata.append("address", $('#address').val());
    formdata.append("telephone", $('#telephone').val());

    $.ajax({
      url: "admin/controllers/add_restaurants.php",
      method: "POST",
      data: formdata,
      contentType: false,
      cache: false,
      processData: false,
    }).done(function(res){
      $('#form-add-restaurant')[0].reset();
    });
  });
});

/************************** ACTUALIZAR RESTAURANTE **************************/
$(document).on('click', '.btn-update-restaurant', function(e){
  e.preventDefault();

  $.each($(this), function(i, v){
    var item_data = {
      id: $(this).attr('data-id'),
      name: $(this).attr('data-name'),
      address: $(this).attr('data-address'),
      photo: $(this).attr('data-photo'),
      telephone: $(this).attr('data-telephone'),
    };

    $('#name-update').val(item_data['name']);
    $('#address-update').val(item_data['address']);
    ///$('#photo-update').val(item_data['photo']);
    $('#telephone-update').val(item_data['telephone']);

    var formData = new FormData();
    var imageslength = $('.images-update')[0].files.length;
    for(var i = 0; i < imageslength; i++){
      formData.append("imagen", $('.images-update')[0].files[i]);
    }

    formData.append("name", $('#name-update').val());
    formData.append("address", $('#address-update').val());
    formData.append("telephone", $('#telephone-update').val());

    $.ajax({
      url: "admin/controllers/update_restaurants.php",
      method: "POST",
      data: formData,
      contentType: false,
      cache: false,
      processData: false
    }).done((res) => {
      console.log(e);
    });

  });
});

/************************** ELIMINAR RESTAURANTE **************************/
$(document).on('click', '.btn-delete-restaurant', function(e){
  e.preventDefault();

  $.each($(this), function(i, v){
    var id = $(this).attr('data-id');

    $.ajax({
      url: "admin/controllers/delete_restaurants.php",
      method: "POST",
      data: {id : id},
    }).done((e) => {
      $("#item-" + id).remove();
    });
  });
});