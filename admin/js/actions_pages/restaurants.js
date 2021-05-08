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




/************************** LISTAR RESTAURANTES **************************/
$(function(){
  listRestaurants();
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
  }).done((res) => {

    console.log(res);
    $('#form-add-restaurant')[0].reset();
    listRestaurants();
    $('#addrestaurantModal').modal("hide");

  });
});

/************************** AGREGAR RESTAURANTES **************************/
function listRestaurants(searchVal){ 
  $.ajax({
    url: "admin/controllers/list_restaurants.php",
    method: "POST",
    datatype: "JSON",
    contentType: 'application/x-www-form-urlencoded;charset=UTF-8',
    data: {searchList : searchVal},
  }).done( function (res) {

    var response = JSON.parse(res);
    var template = "";

    if(response.length == 0){
      template = `
        <tr>
          <td colspan="7">
            <div class="msg-non-results-res">
              <img src="admin/assets/img/icons/icon-sad-face.svg" alt="" class="msg-non-results-res__icon">
              <h3 class="msg-non-results-res__title">No se encontraron resultados...</h3>
            </div>
          </td>
        </tr>
      `;

      $("#tbl_restaurants").html(template);
    }else{
      response.forEach(e => {
      
      var img_route = "admin/assets/img/restaurants/"+e.photo;

      template += `
        <tr id="item-${e.id}">
          <td>${e.id}</td>
          <td>${e.name}</td>
          <td>${e.address}</td>
          <td class="cont-img-table">
            <a href="${img_route}" target="_blank">
              <img loading="lazy" src="${img_route}">
            </a>
          </td>
          <td>${e.telephone}</td>
          <td class="cont-btn-update">
            <a class="btn-update-restaurant" data-toggle="modal" data-target="#updateModal"  href="#" 
              data-id="${e.id}"
              data-name="${e.name}"
              data-address="${e.address}"
              data-photo="${img_route}"
              data-telephone="${e.telephone}"
              >Editar</a>
          </td>
          <td class="cont-btn-delete" id="cont-btn-delete">
            <a class="btn-delete-restaurant" data-toggle="modal" data-target="#deleteModal" href="#"
              data-id="${e.id}"
              >Eliminar</a>
          </td>
        </tr>
        `;
      });
      
      $("#tbl_restaurants").html(template);
    }

  });
}

/************************** BUSCADOR DE RESTAURANTES **************************/
$(document).on('keyup', '#searchrestaurants', function() {
  var searchVal = $(this).val();

  if(searchVal != ""){
    listRestaurants(searchVal);
  }else{
    listRestaurants();
  }
});

/************************** LISTAR DATOS DEL RESTAURANTE EN EL MODAL**************************/
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

    $('#idupdate-restaurant').val(item_data['id']);
    $('#name-update').val(item_data['name']);
    $('#address-update').val(item_data['address']);
    $('#photo-update').attr('href', item_data['photo']);
    $('#telephone-update').val(item_data['telephone']);

  });
});

/************************** LISTAR ID DEL RESTAURANTE EN EL MODAL **************************/
$(document).on('click', '.btn-delete-restaurant', function(e){
  e.preventDefault();

  var id = $(this).attr('data-id');
  $('#iddelete-restaurant').val(id);
});

/************************** ELIMINAR RESTAURANTE **************************/
$(document).on('click', '#btndelete-restaurant', function(e){
  e.preventDefault();

	var id = $('#iddelete-restaurant').val();

  $.ajax({
    url: "admin/controllers/delete_restaurants.php",
    method: "POST",
    data: {id : id},
  }).done((e) => {
    
    $("#item-" + id).remove();
    $('#deleteModal').modal("hide");
  });
});

/************************** ACTUALIZAR RESTAURANTE POR ID **************************/
$(document).on('click', '#btnupdate-restaurant', function(e){
  e.preventDefault();
  
  var formdata = new FormData();
  var filelength = $('.images-update')[0].files.length;
  for (var i = 0;i < filelength; i ++) {
    formdata.append("imagen", $('.images-update')[0].files[i]);
  }

  formdata.append("name", $('#name-update').val());
  formdata.append("address", $('#address-update').val());
  formdata.append("telephone", $('#telephone-update').val());
  formdata.append("id", $('#idupdate-restaurant').val());

  $.ajax({
    url: "admin/controllers/update_restaurants.php",
    method: "POST",
    data: formdata,
    contentType: false,
    cache: false,
    processData: false
  }).done((res) => {
    listRestaurants();
    $('#updateModal').modal("hide");
  });
});