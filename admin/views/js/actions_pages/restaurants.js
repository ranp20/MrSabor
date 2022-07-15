$(() => {
  listRestaurants();
});
// ------------ IMPRIMIR EL MAPA DE GOOGLE MAPS AL MOMENTO DE AGREGAR UN RESTAURANTE
function iniciarMap(){
  // ------------ MAPA GOOGLE - AGREGAR UBICACIÓN
  document.querySelector("#LatPointadd").value = - 12.0453;
  document.querySelector("#LongPointadd").value = - 77.0311;
  var coord = {lat: - 12.0453 , lng: - 77.0311};
  var map = new google.maps.Map(document.getElementById('maps-add-restaurant'), {
    zoom: 11,
    center: coord
  });  
  var marker = new google.maps.Marker({
    map: map,
    draggable: true,
    position: coord
  });
  marker.addListener("dragend", function(e){
    document.querySelector("#LatPointadd").value = this.getPosition().lat();
    document.querySelector("#LongPointadd").value = this.getPosition().lng();
  });
}
// ------------ AGREGAR RESTAURANTE
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
  formdata.append("latitud", $('#LatPointadd').val());
  formdata.append("longitud", $('#LongPointadd').val());
  $.ajax({
    url: "admin/controllers/add_restaurants.php",
    method: "POST",
    data: formdata,
    contentType: false,
    cache: false,
    processData: false,
  }).done((res) => {
    //console.log(res);
    $('#form-add-restaurant')[0].reset();
    listRestaurants();
    $('#addrestaurantModal').modal("hide");
  });
});
// ------------ LISTAR RESTAURANTES
function listRestaurants(searchVal){ 
  $.ajax({
    url: "admin/controllers/list_restaurants.php",
    method: "POST",
    datatype: "JSON",
    contentType: 'application/x-www-form-urlencoded;charset=UTF-8',
    data: {searchList : searchVal},
  }).done((e) => {
    let r = JSON.parse(e);
    let tmp = "";
    if(r.length == 0){
      tmp = `
        <tr>
          <td colspan="7">
            <div class="msg-non-results-res">
              <img src="admin/views/assets/img/icons/icon-sad-face.svg" alt="" class="msg-non-results-res__icon">
              <h3 class="msg-non-results-res__title">No se encontraron resultados...</h3>
            </div>
          </td>
        </tr>
      `;
      $("#tbl_restaurants").html(tmp);
    }else{
      r.forEach(e => {
      let img_route = "admin/views/assets/img/restaurants/"+e.photo;
      tmp += `
        <tr id="item-${e.id}">
          <td>${e.id}</td>
          <td>${e.name}</td>
          <td>${e.address}</td>
          <td class="cont-img-table">
            <a href="${img_route}" target="_blank">
              <img class="img-fluid" loading="lazy" src="${img_route}" width="100" height="100">
            </a>
          </td>
          <td class="text-center">${e.telephone}</td>
          <td class="cont-btn-update">
            <a class="btn-update-restaurant" data-toggle="modal" data-target="#updateModal"  href="#" 
              data-id="${e.id}"
              data-name="${e.name}"
              data-address="${e.address}"
              data-photo="${img_route}"
              data-telephone="${e.telephone}"
              data-latitud="${e.latitud}"
              data-longitud="${e.longitud}"
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
      $("#tbl_restaurants").html(tmp);
    }
  });
}
// ------------ BUSCADOR DE RESTAURANTES
$(document).on('keyup', '#searchrestaurants', (e) => {
  var searchVal = e.target.value;
  if(searchVal != ""){
    listRestaurants(searchVal);
  }else{
    listRestaurants();
  }
});
// ------------ LISTAR DATOS DEL RESTAURANTE EN EL MODAL
$(document).on('click', '.btn-update-restaurant', function(e){
  e.preventDefault();
  $.each($(this), function(i, v){
    var item_data = {
      id: $(this).attr('data-id'),
      name: $(this).attr('data-name'),
      address: $(this).attr('data-address'),
      photo: $(this).attr('data-photo'),
      telephone: $(this).attr('data-telephone'),
      latitud: $(this).attr('data-latitud'),
      longitud: $(this).attr('data-longitud'),
    };
    $('#idupdate-restaurant').val(item_data['id']);
    $('#name-update').val(item_data['name']);
    $('#address-update').val(item_data['address']);
    $('#photo-update').attr('href', item_data['photo']);
    $('#telephone-update').val(item_data['telephone']);
    $('#LatPointupdate').val(item_data['latitud']);
    $('#LongPointupdate').val(item_data['longitud']);
    // ------------ CARGAR LOS VALORES DE COORDENADAS EN EL MAPA
    var coordupdate = {lat: parseFloat(item_data['latitud']) , lng: parseFloat(item_data['longitud'])};
    var mapupdate = new google.maps.Map(document.getElementById('maps-update-restaurant'), {
      zoom: 11,
      center: coordupdate
    });  
    var markerupdate = new google.maps.Marker({
      map: mapupdate,
      draggable: true,
      position: coordupdate
    });
    markerupdate.addListener("dragend", function(e){
      document.querySelector("#LatPointupdate").value = this.getPosition().lat();
      document.querySelector("#LongPointupdate").value = this.getPosition().lng();
    });
  });
});
// ------------ DESHABILITAR LOS CAMPOS DE COORDENADAS
$(document).ready(function(){
  $('#LatPointadd').css({"cursor":"not-allowed"});
  $('#LongPointadd').css({"cursor":"not-allowed"});
  $('#LatPointupdate').css({"cursor":"not-allowed"});
  $('#LongPointupdate').css({"cursor":"not-allowed"});
});
// ------------ LISTAR ID DEL RESTAURANTE EN EL MODAL
$(document).on('click', '.btn-delete-restaurant', function(e){
  e.preventDefault();
  var id = $(this).attr('data-id');
  $('#iddelete-restaurant').val(id);
});
// ------------ ELIMINAR RESTAURANTE
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
});// ------------ACTUALIZAR RESTAURANTE POR ID
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
  formdata.append("latitud", $('#LatPointupdate').val());
  formdata.append("longitud", $('#LongPointupdate').val());
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